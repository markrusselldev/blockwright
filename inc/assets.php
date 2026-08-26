<?php
/**
 * Theme Assets
 *
 * Dev: load ESM from Vite (https://<host>:5173) using Script Modules.
 * Prod: load built assets from /dist as ESM.
 *
 * @package Blockwright
 * @license GPL-2.0-or-later
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Determine if the environment is "development".
 *
 * @return bool True when running in development.
 */
function blockwright_is_dev_env(): bool {
	// Dev detection is explicit only: prefer the BLOCKWRIGHT_VITE_DEV constant,
	// then the BLOCKWRIGHT_VITE_DEV environment variable. Do not rely on
	// WP_ENVIRONMENT_TYPE, WP_DEBUG, or SCRIPT_DEBUG here.

	// 1) If a constant is defined and truthy, honor it.
	if ( defined( 'BLOCKWRIGHT_VITE_DEV' ) && constant( 'BLOCKWRIGHT_VITE_DEV' ) ) {
		return true;
	}

	// 2) Otherwise, check the environment variable (string "1" or "true").
	$env_val = getenv( 'BLOCKWRIGHT_VITE_DEV' );
	if ( false !== $env_val ) {
		$env_val_l = strtolower( (string) $env_val );
		if ( '1' === $env_val || 'true' === $env_val_l ) {
			return true;
		}
	}

	// Default: not dev.
	return false;
}

/**
 * Build the Vite dev server origin (scheme + host + port).
 *
 * @return string Dev server origin, e.g. "https://localhost:5173".
 */
function blockwright_vite_origin(): string {
	$scheme = ( getenv( 'DEV_HTTPS' ) === '1' ) ? 'https' : 'http';
	$host   = getenv( 'DEV_HOST' ) ? getenv( 'DEV_HOST' ) : 'localhost';
	$port   = getenv( 'DEV_PORT' ) ? getenv( 'DEV_PORT' ) : '5173';

	return sprintf( '%s://%s:%s', $scheme, $host, $port );
}

/**
 * Shared enqueue for front end + block editor.
 */
function blockwright_enqueue_shared_assets(): void {
	$current_filter   = current_filter();
	$is_editor_iframe = ( 'enqueue_block_editor_assets' === $current_filter );
	$in_footer        = $is_editor_iframe ? false : true;

	// The theme stylesheet depends on core's `global-styles` only where that handle
	// is registered (the front end), to preserve cascade order. In the block editor
	// it is not registered, so listing it unconditionally triggers a "dependencies
	// that are not registered" notice (WP 6.9.1+). Add it only when present.
	$theme_style_deps = array( 'wp-block-library' );
	if ( wp_style_is( 'global-styles', 'registered' ) ) {
		$theme_style_deps[] = 'global-styles';
	}

	// Common version value: cache-bust in dev; use theme version otherwise.
	$common_ver = ( defined( 'WP_DEBUG' ) && WP_DEBUG )
		? (string) time()
		: ( defined( 'BLOCKWRIGHT_VERSION' ) ? BLOCKWRIGHT_VERSION : null );

	// Decide whether to actually place scripts in the footer. Some template
	// setups (especially FSE/block themes or incomplete templates) don't
	// call `wp_footer()` which prevents footer-placed scripts from printing.
	// Prefer printing in the footer when available, but fall back to the
	// head so production JS is never silently omitted.
	$print_in_footer = $in_footer;
	if ( false === has_action( 'wp_footer' ) ) {
		$print_in_footer = false;
	}

	// Core Dashicons font, used by the compact mobile header's tap-to-call handset
	// glyph (theme-base.css, .bw-call). Registered by core; enqueue by handle so the
	// @font-face is available on the front end (it already loads in the editor).
	wp_enqueue_style( 'dashicons' );

	if ( blockwright_is_dev_env() ) {
		// Pure dev mode: load only from Vite dev server. Do not enqueue built
		// dist assets in dev.
		$origin = blockwright_vite_origin();

		// Dev: NEVER append ?ver=... to Vite modules; it breaks client transform.
		$dev_ver = null;

		// Inline boot that makes the origin available to runtime JS. Place this
		// before the Vite client so it can read it as early as possible.
		$boot = 'window.__VITE_ORIGIN__ = ' . wp_json_encode( $origin ) . ';';

		wp_enqueue_script( 'wp-interactivity' );

		// Vite HMR client.
		wp_enqueue_script( 'blockwright-vite-client', $origin . '/@vite/client', array(), $dev_ver, $print_in_footer );
		wp_add_inline_script( 'blockwright-vite-client', $boot, 'before' );
		wp_script_add_data( 'blockwright-vite-client', 'type', 'module' );

		// Dev entry module served by Vite.
		wp_enqueue_script( 'blockwright-dev-entry', $origin . '/src/index.js', array( 'blockwright-vite-client' ), $dev_ver, $print_in_footer );
		wp_script_add_data( 'blockwright-dev-entry', 'type', 'module' );

		// Enqueue the built theme stylesheet in dev so audit/dev snapshots and
		// runtime readiness checks can observe the generated tokens (eg
		// --bw-theme-ready). Only enqueue the CSS (not the built JS); keep the
		// same handle as production so the link id/href matches audit expectations.
		$dev_css_path = get_theme_file_path( 'dist/theme.css' );
		if ( file_exists( $dev_css_path ) ) {
			$dev_css_ver = ( defined( 'WP_DEBUG' ) && WP_DEBUG ) ? (string) time() : (int) filemtime( $dev_css_path );
			// Use same dependencies as production to preserve cascade ordering.
			wp_enqueue_style(
				'blockwright-theme-style',
				get_theme_file_uri( 'dist/theme.css' ),
				$theme_style_deps,
				$dev_css_ver
			);
		}
	} else {
		$template_uri = get_template_directory_uri();
		$css_path     = get_theme_file_path( 'dist/theme.css' );
		$js_path      = get_theme_file_path( 'dist/theme.js' );

		if ( file_exists( $css_path ) ) {
			$version = (int) filemtime( $css_path );
			wp_enqueue_style(
				'blockwright-theme-style',
				get_theme_file_uri( 'dist/theme.css' ),
				$theme_style_deps,
				$version
			);
		}

			$boot = 'window.blockwright = Object.assign(window.blockwright || {}, { assetsBase: ' .
				wp_json_encode( $template_uri ) . ' });';

			// Decide whether to actually place scripts in the footer. Some template
			// setups (especially FSE/block themes or incomplete templates) don't
			// call `wp_footer()` which prevents footer-placed scripts from printing.
			// Prefer printing in the footer when available, but fall back to the
			// head so production JS is never silently omitted.
			$print_in_footer = $in_footer;
		if ( false === has_action( 'wp_footer' ) ) {
			$print_in_footer = false;
		}

			// NOTE: the production boot handle is registered/enqueued later,
			// immediately before we enqueue the built `blockwright-theme` module.
			// Removing the early placeholder registration prevents bogus
			// placeholder script tags (about:blank) from being printed.

		// Robust theme.js detection for child/parent themes.
		$js_path = get_theme_file_path( 'dist/theme.js' );
		$js_uri  = get_theme_file_uri( 'dist/theme.js' );

		// If the stylesheet/theme path doesn't contain the built file, fall back to
		// the template (parent) directory. This covers child-theme setups where
		// the build lives in the parent theme's dist/ directory.
		if ( ! file_exists( $js_path ) ) {
			$template_dir = get_template_directory();
			$possible     = $template_dir . '/dist/theme.js';
			if ( file_exists( $possible ) ) {
				$js_path = $possible;
				$js_uri  = get_template_directory_uri() . '/dist/theme.js';
			}
		}

		// If we have a built script available, enqueue it as a module.
		if ( file_exists( $js_path ) ) {
			$version = (int) filemtime( $js_path );

			// Ensure the boot handle is registered/enqueued so inline boot attaches
			// and appears before the theme module.
			if ( ! wp_script_is( 'blockwright-prod-boot', 'registered' ) ) {
				wp_register_script( 'blockwright-prod-boot', '', array(), $common_ver, $print_in_footer );
			}

			if ( ! wp_script_is( 'blockwright-prod-boot', 'enqueued' ) ) {
				wp_enqueue_script( 'blockwright-prod-boot' );
			}

			wp_add_inline_script( 'blockwright-prod-boot', $boot, 'before' );

			wp_enqueue_script( 'blockwright-theme', $js_uri, array(), $version, $print_in_footer );
			wp_script_add_data( 'blockwright-theme', 'type', 'module' );
		}
	}
}

add_action( 'wp_enqueue_scripts', 'blockwright_enqueue_shared_assets', 100 );
add_action( 'enqueue_block_editor_assets', 'blockwright_enqueue_shared_assets', 100 );
// Note: Removed admin_enqueue_scripts hook - theme styles should not load in wp-admin UI.
// The enqueue_block_editor_assets hook covers the site/block editor canvas.

/**
 * Ensure our module handles are output as proper module script tags.
 *
 * Only rewrite the specific handles we control. For any other handle
 * return the original tag unchanged.
 *
 * @param string $tag    The original script tag HTML.
 * @param string $handle The registered script handle.
 * @param string $src    The script src.
 * @return string Filtered script tag.
 */
add_filter(
	'script_loader_tag',
	function ( $tag, $handle, $src ) {
		// Only rewrite our module handles - leave everything else alone.
		$module_handles = array( 'blockwright-theme', 'blockwright-vite-client', 'blockwright-dev-entry' );

		if ( ! in_array( $handle, $module_handles, true ) ) {
			return $tag;
		}

		// If there's no src (inline or empty handle), preserve original tag.
		if ( empty( $src ) ) {
			return $tag;
		}

		// Build a safe, explicit module script tag. Always return a string.
		return sprintf( '<script type="module" src="%s" id="%s-js"></script>' . "\n", esc_url( $src ), esc_attr( $handle ) ); // phpcs:ignore WordPress.WP.EnqueuedResources.NonEnqueuedScript -- Emitting the tag for an already-enqueued module script via the script_loader_tag filter.
	},
	10,
	3
);

add_action(
	'admin_enqueue_scripts',
	function () {
		wp_enqueue_style(
			'blockwright-admin',
			get_theme_file_uri( 'assets/admin.css' ),
			array(),
			defined( 'BLOCKWRIGHT_VERSION' ) ? BLOCKWRIGHT_VERSION : null
		);
		wp_add_inline_style( 'blockwright-admin', 'html, body { color-scheme: light; }' );
	},
	100
);

/**
 * Font head hints for the active type variation:
 *  1. A metric-matched fallback @font-face per active face - local() src with
 *     size-adjust / ascent / descent / line-gap overrides so the font-display:swap
 *     from a system font does not shift layout. Emitted here because WP_Font_Face
 *     cannot output a local()-src @font-face from theme.json (it strips the src);
 *     the real faces stay in the variation JSON and WP emits those. Metrics live in
 *     assets/fonts/fallbacks.json (generated by scripts/gen-type-variations.js).
 *  2. A preload for the single most render-critical face - the body face.
 *
 * Everything is derived from the resolved global settings, so it follows whatever
 * variation the visitor's site has active; the base (system-stack) look bundles no
 * fonts, so nothing is emitted.
 */
function blockwright_font_head_hints(): void {
	if ( is_admin() ) {
		return;
	}
	$families = wp_get_global_settings( array( 'typography', 'fontFamilies' ) );

	// Resolved presets are grouped by origin (theme/custom/default); flatten. A
	// user-applied variation lands in the custom origin.
	$flat = array();
	if ( isset( $families[0] ) ) {
		$flat = $families;
	} else {
		foreach ( (array) $families as $group ) {
			if ( is_array( $group ) && isset( $group[0] ) ) {
				$flat = array_merge( $flat, $group );
			}
		}
	}

	// Collect active bundled faces (family name => relative woff2), and the body face.
	$active    = array();
	$body_file = '';
	foreach ( $flat as $f ) {
		if ( empty( $f['fontFace'] ) ) {
			continue;
		}
		$is_body = isset( $f['slug'] ) && 'body' === $f['slug'];
		foreach ( $f['fontFace'] as $face ) {
			foreach ( (array) ( $face['src'] ?? array() ) as $src ) {
				if ( ! is_string( $src ) || 0 !== strpos( $src, 'file:' ) || false === strpos( $src, '.woff2' ) ) {
					continue;
				}
				$rel = ltrim( preg_replace( '#^file:\./?#', '', $src ), '/' );
				if ( ! empty( $face['fontFamily'] ) ) {
					$active[ $face['fontFamily'] ] = $rel;
				}
				if ( $is_body && '' === $body_file ) {
					$body_file = $rel;
				}
			}
		}
	}
	if ( ! $active ) {
		return;
	}

	// Metric-matched fallback @font-face for each active face.
	$metrics_path = get_theme_file_path( 'assets/fonts/fallbacks.json' );
	$metrics      = is_readable( $metrics_path ) ? wp_json_file_decode( $metrics_path, array( 'associative' => true ) ) : array();
	if ( is_array( $metrics ) && $metrics ) {
		$css = '';
		foreach ( array_keys( $active ) as $name ) {
			if ( empty( $metrics[ $name ] ) ) {
				continue;
			}
			$m    = $metrics[ $name ];
			$css .= sprintf(
				'@font-face{font-family:"%s Fallback";font-style:normal;src:local("%s");size-adjust:%s;ascent-override:%s;descent-override:%s;line-gap-override:%s;font-display:swap;}',
				esc_attr( $name ),
				esc_attr( $m['local'] ?? 'sans-serif' ),
				esc_attr( $m['sizeAdjust'] ?? '100%' ),
				esc_attr( $m['ascentOverride'] ?? '100%' ),
				esc_attr( $m['descentOverride'] ?? '0%' ),
				esc_attr( $m['lineGapOverride'] ?? '0%' )
			);
		}
		if ( '' !== $css ) {
			printf( "<style id=\"blockwright-font-fallbacks\">%s</style>\n", $css ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- values escaped above.
		}
	}

	// Preload the body face.
	if ( '' !== $body_file ) {
		printf(
			'<link rel="preload" href="%s" as="font" type="font/woff2" crossorigin>' . "\n",
			esc_url( get_theme_file_uri( $body_file ) )
		);
	}
}
add_action( 'wp_head', 'blockwright_font_head_hints', 1 );

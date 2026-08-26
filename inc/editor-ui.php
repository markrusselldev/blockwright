<?php
/**
 * Editor UI controls for the block editor.
 *
 * Enqueues a small script to hide the title field on the Page post type,
 * and an editor-only stylesheet injected into the editor iframe.
 *
 * @package Blockwright
 * @license GPL-2.0-or-later
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueue the "No Title" admin script on Page editor screens only.
 */
add_action(
	'admin_enqueue_scripts',
	function ( $hook ): void {
		// Only on post.php or post-new.php.
		if ( 'post.php' !== $hook && 'post-new.php' !== $hook ) {
			return;
		}

		if ( ! function_exists( 'get_current_screen' ) ) {
			return;
		}

		$screen = get_current_screen();
		if ( ! $screen || ( isset( $screen->post_type ) && 'page' !== $screen->post_type ) ) {
			return;
		}

		$js_path = get_template_directory() . '/assets/admin/no-title.js';
		$js_uri  = get_template_directory_uri() . '/assets/admin/no-title.js';

		// Version: in dev, use mtime when available; otherwise use theme version if defined.
		$ver = null;
		if ( defined( 'WP_DEBUG' ) && WP_DEBUG ) {
			if ( $js_path && file_exists( $js_path ) ) {
				$mtime = filemtime( $js_path );
				if ( false !== $mtime ) {
					$ver = (string) $mtime;
				}
			}
		} elseif ( defined( 'BLOCKWRIGHT_VERSION' ) ) {
			$ver = BLOCKWRIGHT_VERSION;
		}

		wp_enqueue_script(
			'blockwright-admin-no-title',
			$js_uri,
			array( 'wp-edit-post', 'wp-data', 'wp-dom-ready' ),
			$ver,
			true
		);
	},
	20
);

/**
 * Load the editor-only stylesheet so Gutenberg injects it into the iframe.
 */
add_action(
	'enqueue_block_assets',
	function (): void {
		$css_path = get_template_directory() . '/assets/admin/no-title.css';
		$css_uri  = get_template_directory_uri() . '/assets/admin/no-title.css';

		// Version: in dev, use mtime when available; otherwise use theme version if defined.
		$cver = null;
		if ( defined( 'WP_DEBUG' ) && WP_DEBUG ) {
			if ( $css_path && file_exists( $css_path ) ) {
				$mtime = filemtime( $css_path );
				if ( false !== $mtime ) {
					$cver = (string) $mtime;
				}
			}
		} elseif ( defined( 'BLOCKWRIGHT_VERSION' ) ) {
			$cver = BLOCKWRIGHT_VERSION;
		}

		wp_enqueue_style(
			'blockwright-editor-no-title',
			$css_uri,
			array(),
			$cver
		);
	},
	20
);

/**
 * Inject color-scheme into the editor iframe so light-dark() palette tokens
 * resolve to the OS preference in the canvas (the front end gets this from
 * dist/theme.css, which the editor doesn't load). Editor-only: the front end
 * already declares it, so skip there to avoid a redundant request.
 */
add_action(
	'enqueue_block_assets',
	function (): void {
		if ( ! is_admin() ) {
			return; // Front end already sets color-scheme via dist/theme.css.
		}

		$css_path = get_template_directory() . '/assets/admin/editor-canvas.css';
		$css_uri  = get_template_directory_uri() . '/assets/admin/editor-canvas.css';

		$cver = null;
		if ( defined( 'WP_DEBUG' ) && WP_DEBUG ) {
			if ( file_exists( $css_path ) ) {
				$mtime = filemtime( $css_path );
				if ( false !== $mtime ) {
					$cver = (string) $mtime;
				}
			}
		} elseif ( defined( 'BLOCKWRIGHT_VERSION' ) ) {
			$cver = BLOCKWRIGHT_VERSION;
		}

		wp_enqueue_style( 'blockwright-editor-canvas', $css_uri, array(), $cver );
	},
	20
);

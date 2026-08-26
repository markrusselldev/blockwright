<?php
/**
 * Development-only WP-CLI helpers.
 *
 * @package Blockwright
 */

if ( defined( 'WP_CLI' ) && WP_CLI ) {
	/**
	 * Link-related development helpers.
	 */
	class Blockwright_Links_CLI extends \WP_CLI_Command {
		/**
		 * Show link preset values and nav mappings from theme.json (read-only).
		 *
		 * ## EXAMPLES
		 *     wp blockwright links show
		 */
		public function show() {
			$theme_json_path = get_stylesheet_directory() . '/theme.json';

			if ( ! file_exists( $theme_json_path ) ) {
				\WP_CLI::error( 'theme.json not found at: ' . $theme_json_path );
			}

			$data = json_decode( file_get_contents( $theme_json_path ), true );

			if ( ! is_array( $data ) ) {
				\WP_CLI::error( 'Failed to decode theme.json' );
			}

			$palette = $data['settings']['color']['palette'] ?? array();
			$lookup  = array(
				'link'         => null,
				'link-hover'   => null,
				'link-visited' => null,
			);

			foreach ( $palette as $entry ) {
				if ( isset( $entry['slug'] ) && array_key_exists( $entry['slug'], $lookup ) ) {
					$lookup[ $entry['slug'] ] = $entry['color'] ?? null;
				}
			}

			$get = function ( $path ) use ( $data ) {
				$node = $data;

				foreach ( explode( '.', $path ) as $key ) {
					if ( ! is_array( $node ) || ! array_key_exists( $key, $node ) ) {
						return null;
					}

					$node = $node[ $key ];
				}

				return $node;
			};

			$nav_base = 'styles.blocks.core/navigation-link.elements.link';
			$nav      = array(
				'default' => $get( $nav_base . '.color.text' ),
				'hover'   => $get( $nav_base . '.:hover.color.text' ),
				'focus'   => $get( $nav_base . '.:focus.color.text' ),
				'visited' => $get( $nav_base . '.:visited.color.text' ),
			);

			\WP_CLI::log( 'Presets (settings.color.palette):' );
			\WP_CLI::log( '  link         = ' . ( $lookup['link'] ?? 'null' ) );
			\WP_CLI::log( '  link-hover   = ' . ( $lookup['link-hover'] ?? 'null' ) );
			\WP_CLI::log( '  link-visited = ' . ( $lookup['link-visited'] ?? 'null' ) );

			\WP_CLI::log( 'Navigation mapping (styles.blocks.core/navigation-link.elements.link):' );
			\WP_CLI::log( '  default = ' . ( $nav['default'] ?? 'null' ) );
			\WP_CLI::log( '  hover   = ' . ( $nav['hover'] ?? 'null' ) );
			\WP_CLI::log( '  focus   = ' . ( $nav['focus'] ?? 'null' ) );
			\WP_CLI::log( '  visited = ' . ( $nav['visited'] ?? 'null' ) );

			\WP_CLI::success( 'Printed link presets and nav mapping.' );
		}

		/**
		 * Verify link color configuration.
		 *
		 * ## EXAMPLES
		 *     wp blockwright links verify
		 */
		public function verify() {
			$theme_json_path = get_stylesheet_directory() . '/theme.json';
			$data            = json_decode( file_get_contents( $theme_json_path ), true );

			if ( ! is_array( $data ) ) {
				WP_CLI::error( 'Unable to decode theme.json' );
			}

			$required = array(
				'styles.elements.link.color.text',
				'styles.elements.link.:hover.color.text',
				'styles.elements.link.:focus.color.text',
				'styles.elements.link.:visited.color.text',
				'styles.blocks.core/navigation-link.elements.link.color.text',
				'styles.blocks.core/navigation-link.elements.link.:hover.color.text',
				'styles.blocks.core/navigation-link.elements.link.:focus.color.text',
				'styles.blocks.core/navigation-link.elements.link.:visited.color.text',
			);

			$missing = array();

			foreach ( $required as $path ) {
				list( $found ) = $this->get_by_path( $data, $path );
				if ( ! $found ) {
					$missing[] = $path;
				}
			}

			if ( $missing ) {
				WP_CLI::error( 'Missing keys: ' . implode( ', ', $missing ) );
			}

			$css = wp_get_global_stylesheet();

			WP_CLI::log( 'Env: ' . ( function_exists( 'wp_get_environment_type' ) ? wp_get_environment_type() : 'unknown' ) );
			WP_CLI::log( 'Link vars in stylesheet:' );
			WP_CLI::log( '  default: ' . ( strpos( $css, '--wp--preset--color--link' ) !== false ? 'yes' : 'no' ) );
			WP_CLI::log( '  hover:   ' . ( strpos( $css, '--wp--preset--color--link-hover' ) !== false ? 'yes' : 'no' ) );
			WP_CLI::log( '  visited: ' . ( strpos( $css, '--wp--preset--color--link-visited' ) !== false ? 'yes' : 'no' ) );

			$count = wp_count_posts( 'wp_global_styles' )->publish ?? 0;
			WP_CLI::log( 'Saved wp_global_styles records: ' . $count );

			WP_CLI::success( 'All required link keys found.' );
		}

		/**
		 * Purge saved Global Styles overrides.
		 *
		 * ## EXAMPLES
		 *     wp blockwright links purge
		 */
		public function purge() {
			$ids = get_posts(
				array(
					'post_type'   => 'wp_global_styles',
					'fields'      => 'ids',
					'numberposts' => -1,
				)
			);

			$deleted = 0;

			foreach ( $ids as $id ) {
				wp_delete_post( $id, true );
				++$deleted;
			}

			wp_cache_flush();

			WP_CLI::success( "Deleted {$deleted} wp_global_styles posts." );
		}

		/**
		 * Retrieve nested data via dot notation.
		 *
		 * @param array  $data     The data array.
		 * @param string $dot_path Dot-separated path.
		 * @return array {bool, mixed}
		 */
		private function get_by_path( array $data, string $dot_path ) {
			$node = $data;

			foreach ( explode( '.', $dot_path ) as $key ) {
				if ( ! is_array( $node ) || ! array_key_exists( $key, $node ) ) {
					return array( false, null );
				}

				$node = $node[ $key ];
			}

			return array( true, $node );
		}
	}

		WP_CLI::add_command( 'blockwright links', 'Blockwright_Links_CLI' );

		WP_CLI::add_command(
			'blockwright styles check',
			function () {
				$css = wp_get_global_stylesheet();

				$heading_block    = (bool) preg_match( '/:where\(\s*h1,\s*h2,\s*h3,\s*h4,\s*h5,\s*h6\s*\)/', $css );
				$paragraph_block  = ( strpos( $css, '.wp-block-paragraph' ) !== false );
				$paragraph_margin = (bool) preg_match(
					'/\.wp-block-paragraph[^{]*\{[^}]*margin-(?:block-end|bottom)\s*:/',
					$css
				);

				$table = array(
					array(
						'selector' => ':where(h1..h6)',
						'present'  => $heading_block ? 'yes' : 'no',
					),
					array(
						'selector' => '.wp-block-paragraph',
						'present'  => $paragraph_block ? 'yes' : 'no',
					),
					array(
						'selector' => 'p margin-bottom',
						'present'  => $paragraph_margin ? 'yes' : 'no',
					),
				);

				\WP_CLI\Utils\format_items( 'table', $table, array( 'selector', 'present' ) );
			}
		);

	class Blockwright_Styles_CLI extends \WP_CLI_Command {
		/**
		 * Export merged Global Styles (presets + rules) to src/styles/_wp-global.css
		 *
		 * ## EXAMPLES
		 *   wp blockwright styles export
		 */
		public function export() {
			$theme = wp_get_theme();
			if ( ! $theme || ! $theme->exists() ) {
				\WP_CLI::error( 'Theme context not loaded.' );
			}

			$css = '';

			if ( function_exists( 'wp_get_global_stylesheet' ) ) {
				$vars = '';
				try {
					$vars = wp_get_global_stylesheet( array( 'variables' => true ) );
				} catch ( \Throwable $e ) {
					$vars = '';
				}
				$css .= is_string( $vars ) ? $vars : '';

				$full = '';
				try {
					$full = wp_get_global_stylesheet();
				} catch ( \Throwable $e ) {
					$full = '';
				}
				$css .= is_string( $full ) ? $full : '';
			}

			if ( '' === trim( $css ) && class_exists( 'WP_Theme_JSON_Resolver' ) ) {
				$data = \WP_Theme_JSON_Resolver::get_merged_data();
				if ( $data && method_exists( $data, 'get_stylesheet' ) ) {
					try {
						$css .= $data->get_stylesheet( array( 'variables' => true ) );
					} catch ( \Throwable $e ) {
						// no-op.
					}
					try {
						$css .= $data->get_stylesheet();
					} catch ( \Throwable $e ) {
						// no-op.
					}
				}
			}

			if ( '' === trim( $css ) ) {
				\WP_CLI::error( 'Failed to collect Global Styles CSS (presets + rules).' );
			}

			$dest = get_stylesheet_directory() . '/src/styles/_wp-global.css';
			$dir  = dirname( $dest );
			if ( ! is_dir( $dir ) ) {
				\WP_CLI::error( 'Destination directory missing: ' . $dir );
			}

			$css = preg_replace( '/\s+/', ' ', $css );
			file_put_contents( $dest, trim( $css ) );

			\WP_CLI::success( 'Exported Global Styles to src/styles/_wp-global.css (' . strlen( $css ) . ' bytes)' );
		}

		/**
		 * Doctor: inspect import order, overrides, and selector emission.
		 *
		 * ## EXAMPLES
		 *   wp blockwright styles doctor
		 */
		public function doctor() {
			$root       = get_stylesheet_directory();
			$index      = $root . '/src/index.js';
			$wp_global  = $root . '/src/styles/_wp-global.css';
			$dist_css   = $root . '/dist/theme.css';
			$theme_base = $root . '/src/styles/theme-base.css';

			$exists = static function ( $path ) {
				return file_exists( $path ) ? 'yes' : 'no';
			};

			$imports = array();
			if ( file_exists( $index ) ) {
				$src = file_get_contents( $index );
				if ( is_string( $src ) ) {
					$lines = preg_split( '/\R/', $src );
					foreach ( $lines as $line ) {
						$line = trim( $line );
						if ( preg_match( '/^\s*import\s+(?:[^"\']*?\s+from\s+)?["\']([^"\']+)["\']\s*;?\s*$/', $line, $m ) ) {
							$imports[] = $m[1];
						}
					}
				}
			}

			$global_first = false;
			foreach ( $imports as $imp ) {
				if ( preg_match( '~_wp-global\.css$~', $imp ) ) {
					$global_first = true;
					break;
				}
				if ( preg_match( '~\.scss$|\.css$~', $imp ) ) {
					$global_first = false;
					break;
				}
			}

				$bad_hits = array();

			$needles = array(
				':where(p)'                 => '/:where\s*\(\s*p\s*\)\s*\{/',
				'.wp-block-paragraph'       => '/(?:^|[^\w-])\.wp-block-paragraph\s*\{/',
				':where(h1..h6)'            => '/h1\s*,\s*h2\s*,\s*h3\s*,\s*h4\s*,\s*h5\s*,\s*h6\s*\{/',
				':where(.wp-block-heading)' => '/:where\s*\(\s*\.wp-block-heading\s*\)\s*\{/',
				'.wp-block-site-title'      => '/:where\s*\(\s*\.wp-block-site-title\s*\)\s*\{/',
				'.wp-block-navigation'      => '/(?:^|:where\s*\()\s*\.wp-block-navigation\b.*\{/',
			);

			$presence = static function ( $file, $regex ) {
				if ( ! file_exists( $file ) ) {
					return 'missing file';
				}
				$txt = file_get_contents( $file );
				if ( false === $txt ) {
					return 'unreadable';
				}
				return preg_match( $regex, $txt ) ? 'yes' : 'no';
			};

			$report = array(
				'files'                   => array(
					'src/index.js'              => $exists( $index ),
					'src/styles/_wp-global.css' => $exists( $wp_global ),
					'dist/theme.css'            => $exists( $dist_css ),
					'src/styles/theme-base.css' => $exists( $theme_base ),
				),
				'import_order'            => $imports,
				'bad_overrides_imported'  => $bad_hits,
				'selectors_src_wp_global' => array(),
				'selectors_dist_theme'    => array(),
			);

			foreach ( $needles as $label => $regex ) {
				$report['selectors_src_wp_global'][ $label ] = $presence( $wp_global, $regex );
				$report['selectors_dist_theme'][ $label ]    = $presence( $dist_css, $regex );
			}

			\WP_CLI::log( 'Files:' );
			foreach ( $report['files'] as $file => $status ) {
				\WP_CLI::log( '  - ' . $file . ': ' . $status );
			}

			\WP_CLI::log( "\nImport order (src/index.js):" );
			if ( $imports ) {
				foreach ( $imports as $import ) {
					\WP_CLI::log( '  - ' . $import );
				}
			} else {
				\WP_CLI::log( '  (none found)' );
			}

			if ( ! empty( $bad_hits ) ) {
				\WP_CLI::log( "\nOverride files STILL imported:" );
				foreach ( $bad_hits as $rel => $files ) {
					\WP_CLI::log( '  - ' . $rel );
					foreach ( $files as $ref ) {
						\WP_CLI::log( '      via: ' . $ref );
					}
				}
			} else {
				\WP_CLI::log( "\nOverride files imported: none ✅" );
			}

			\WP_CLI::log( "\nSelector presence (src/styles/_wp-global.css):" );
			foreach ( $report['selectors_src_wp_global'] as $label => $status ) {
				\WP_CLI::log( sprintf( '  %-22s %s', $label, $status ) );
			}

			\WP_CLI::log( "\nSelector presence (dist/theme.css):" );
			foreach ( $report['selectors_dist_theme'] as $label => $status ) {
				\WP_CLI::log( sprintf( '  %-22s %s', $label, $status ) );
			}

			$hints          = array();
			$src_has_rules  = in_array( 'yes', $report['selectors_src_wp_global'], true );
			$dist_has_rules = in_array( 'yes', $report['selectors_dist_theme'], true );

			if ( ! $src_has_rules ) {
				$hints[] = 'Export appears tokens-only. Run "wp blockwright styles export" within the WP install (theme active).';
			}
			if ( ! $global_first ) {
				$hints[] = 'Consider loading _wp-global.css before your theme/vendor CSS only for dev first-paint parity (production loads WP Global Styles after theme CSS).';
			}
			if ( ! empty( $bad_hits ) ) {
				$hints[] = 'Local spacing overrides still imported; remove or migrate them so WP Global Styles win.';
			}
			if ( ! $dist_has_rules && $src_has_rules ) {
				$hints[] = 'dist/theme.css intentionally omits WP Global Styles (injected at runtime). This is expected under Option 1.';
			}

			\WP_CLI::log( "\nLikely causes:" );
			if ( $hints ) {
				foreach ( $hints as $hint ) {
					\WP_CLI::log( '  - ' . $hint );
				}
			} else {
				\WP_CLI::log( '  No obvious issues detected.' );
			}

			\WP_CLI::success( 'Styles doctor complete.' );
		}
	}

	WP_CLI::add_command( 'blockwright styles', 'Blockwright_Styles_CLI' );
}

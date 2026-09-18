<?php
/**
 * Block registration and related utilities.
 *
 * @package Blockwright
 * @license GPL-2.0-or-later
 */

namespace Blockwright\Blocks;

add_filter( 'should_load_block_assets_on_demand', '__return_true' );

add_action(
	'init',
	function () {
		$pairs = array(
			'code'         => 'assets/blocks/code.css',
			'columns'      => 'assets/blocks/columns.css',
			'group'        => 'assets/blocks/group.css',
			'image'        => 'assets/blocks/image.css',
			'list'         => 'assets/blocks/list.css',
			'preformatted' => 'assets/blocks/preformatted.css',
			'quote'        => 'assets/blocks/quote.css',
			'pullquote'    => 'assets/blocks/pullquote.css',
			'separator'    => 'assets/blocks/separator.css',
			'social-links' => 'assets/blocks/social-links.css',
			'table'        => 'assets/blocks/table.css',
			'tabs'         => 'assets/blocks/tabs.css',
			'verse'        => 'assets/blocks/verse.css',
		);

		// Pattern-specific CSS (newsletter forms, avatars) - loads with core/html blocks.
		$patterns_path = get_theme_file_path( 'assets/blocks/patterns.css' );
		if ( file_exists( $patterns_path ) ) {
			wp_enqueue_block_style(
				'core/html',
				array(
					'handle' => 'blockwright-patterns',
					'src'    => get_theme_file_uri( 'assets/blocks/patterns.css' ),
					'path'   => $patterns_path,
					'ver'    => filemtime( $patterns_path ),
				)
			);
		}

		foreach ( $pairs as $block => $rel ) {
			$path = get_theme_file_path( $rel );
			if ( file_exists( $path ) ) {
				wp_enqueue_block_style(
					"core/{$block}",
					array(
						'handle' => "blockwright-{$block}-shim",
						'src'    => get_theme_file_uri( $rel ),
						'path'   => $path,
						'ver'    => filemtime( $path ),
					)
				);
			}
		}
	}
);

// Custom block TYPES are registered by the companion plugin, never the theme:
// register_block_type() in a theme is a Theme Check failure. The theme ships
// patterns and styles only.

// Separator default look (default / wide / dots) is token-driven via theme.json;
// the opt-in is-style-brand line is the only shim (assets/blocks/separator.css).

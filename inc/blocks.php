<?php
/**
 * Block registration and related utilities.
 *
 * @package Blockwright
 * @license GPL-2.0-or-later
 */

namespace Blockwright\Blocks;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

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

// A code block keeps each line whole and scrolls sideways (assets/blocks/code.css), so it
// takes a tab stop: a keyboard user in a browser that does not focus scrollers could not
// read the rest of a long line otherwise.
add_filter(
	'render_block_core/code',
	function ( $block_content ) {
		$tags = new \WP_HTML_Tag_Processor( $block_content );
		if ( $tags->next_tag( 'pre' ) ) {
			$tags->set_attribute( 'tabindex', '0' );
			return $tags->get_updated_html();
		}
		return $block_content;
	}
);

// The footer's copyright line shows the current year on every page load. A footer edited in the
// Site Editor is stored as static blocks, so a year written into the markup would stop changing;
// a binding keeps being resolved when the page renders.
add_action(
	'init',
	function () {
		register_block_bindings_source(
			'blockwright/copyright-year',
			array(
				'label'              => _x( 'Copyright year', 'Label for the block binding placeholder in the editor', 'blockwright' ),
				'get_value_callback' => function () {
					/* translators: %s: the current year. */
					return sprintf( esc_html__( '© %s', 'blockwright' ), esc_html( date_i18n( 'Y' ) ) );
				},
			)
		);
	}
);

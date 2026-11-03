<?php
/**
 * Register additional block styles.
 *
 * @package Blockwright
 * @license GPL-2.0-or-later
 */

namespace Blockwright\Block_Styles;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register block style variations via JS (editor runtime).
 *
 * The Soft and Subtle buttons and the other styles in that script are name-only
 * variations whose styling lives in CSS. The Card, Card Divided and Panel group styles
 * and the Brand color site title are registered by their /styles/*.json files.
 */
add_action(
	'enqueue_block_editor_assets',
	function () {
		$rel  = 'assets/js/editor-block-styles.js';
		$path = get_theme_file_path( $rel );

		if ( ! file_exists( $path ) ) {
			return;
		}

		wp_enqueue_script(
			'blockwright-editor-block-styles',
			get_theme_file_uri( $rel ),
			array( 'wp-blocks', 'wp-i18n' ),
			(string) filemtime( $path ),
			true
		);
		wp_set_script_translations( 'blockwright-editor-block-styles', 'blockwright' );
	}
);

/**
 * Register additional token-driven shims.
 */
add_action(
	'init',
	function () {
		wp_enqueue_block_style(
			'core/paragraph',
			array(
				'handle' => 'blockwright-code-inline',
				'src'    => get_theme_file_uri( 'assets/blocks/code.css' ),
				'path'   => get_theme_file_path( 'assets/blocks/code.css' ),
				'ver'    => filemtime( get_theme_file_path( 'assets/blocks/code.css' ) ),
			)
		);
	}
);

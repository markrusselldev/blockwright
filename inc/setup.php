<?php
/**
 * Theme Setup
 *
 * @package Blockwright
 * @license GPL-2.0-or-later
 */

namespace Blockwright\Setup;

add_action(
	'after_setup_theme',
	function () {

		// Add Blockwright editor styles.
		add_editor_style( 'dist/theme.css' );

		// Common theme support (declared explicitly for clarity + future independence).
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'editor-styles' );
		add_theme_support( 'html5', array( 'script', 'style' ) );
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'appearance-tools' );
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 60,
				'width'       => 60,
				'flex-height' => true,
				'flex-width'  => true,
			)
		);

		// Register custom block pattern categories. Core already registers
		// about/contact/portfolio/team/services/testimonials/header/footer/
		// gallery/videos/media/etc., so only the
		// categories our patterns use that core does NOT provide are registered here.
		if ( function_exists( 'register_block_pattern_category' ) ) {
			$bw_pattern_categories = array(
				'blockwright' => __( 'Blockwright', 'blockwright' ),
				'hero'        => __( 'Hero', 'blockwright' ),
				'layout'      => __( 'Layout', 'blockwright' ),
				'theme'       => __( 'Theme', 'blockwright' ),
			);
			foreach ( $bw_pattern_categories as $bw_cat_name => $bw_cat_label ) {
				register_block_pattern_category( $bw_cat_name, array( 'label' => $bw_cat_label ) );
			}
		}
	},
	20
);

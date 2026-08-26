<?php
/**
 * Theme.json runtime adjustments.
 *
 * @package Blockwright
 * @license GPL-2.0-or-later
 */

namespace Blockwright\Theme_JSON;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Drop WordPress core's default spacing and font-size presets.
 *
 * The theme ships its own named scales and sets `defaultSpacingSizes: false` /
 * `defaultFontSizes: false`. In WP 6.9 those flags remove the defaults from the
 * editor pickers but NOT from the generated CSS, so core's numeric spacing
 * (20–80) and its `small`–`huge` font sizes still get emitted as
 * `--wp--preset--*` variables alongside the theme's. Clearing the default
 * origin's presets here removes them from the stylesheet too, leaving only the
 * theme's scales.
 */
add_filter(
	'wp_theme_json_data_default',
	function ( $theme_json ) {
		return $theme_json->update_with(
			array(
				'version'  => 3,
				'settings' => array(
					'spacing'    => array(
						'spacingScale' => array( 'steps' => 0 ),
						'spacingSizes' => array(),
					),
					'typography' => array(
						'fontSizes' => array(),
					),
				),
			)
		);
	}
);

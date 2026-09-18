<?php
/**
 * Blockwright functions and definitions
 *
 * @package Blockwright
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! defined( 'BLOCKWRIGHT_VERSION' ) ) {
	define( 'BLOCKWRIGHT_VERSION', '1.2.0' );
}

// Theme path/URI constants (safe for parent/child).
if ( ! defined( 'BLOCKWRIGHT_THEME_DIR' ) ) {
	define( 'BLOCKWRIGHT_THEME_DIR', get_template_directory() );
}
if ( ! defined( 'BLOCKWRIGHT_THEME_URI' ) ) {
	define( 'BLOCKWRIGHT_THEME_URI', get_template_directory_uri() );
}

// Ensure core block styles are available (enables block gap, etc.).
add_theme_support( 'wp-block-styles' );


/**
 * Load environment first so later includes can use its vars.
 */
$blockwright_env_loader = __DIR__ . '/inc/load-env.php';
if ( file_exists( $blockwright_env_loader ) ) {
	require_once $blockwright_env_loader;
}

/**
 * Load inc/*.php. Dev tooling (inc/dev*.php) loads only in a development
 * environment - it must never run on a distributed/production site (e.g.
 * inc/dev-pages.php creates pages on theme activation).
 */
$blockwright_is_dev = function_exists( 'wp_get_environment_type' )
	&& in_array( wp_get_environment_type(), array( 'local', 'development' ), true );

foreach ( glob( __DIR__ . '/inc/*.php' ) as $blockwright_file ) {
	$blockwright_basename = basename( $blockwright_file );
	if ( 'load-env.php' === $blockwright_basename ) {
		continue; // already loaded above.
	}
	if ( 'dev-cli.php' === $blockwright_basename ) {
		continue; // loaded separately, under WP-CLI in dev only.
	}
	if ( 0 === strpos( $blockwright_basename, 'dev' ) && ! $blockwright_is_dev ) {
		continue; // dev-only tooling.
	}
	require_once $blockwright_file;
}

$blockwright_dev_cli = get_template_directory() . '/inc/dev-cli.php';
if ( $blockwright_is_dev && defined( 'WP_CLI' ) && WP_CLI && file_exists( $blockwright_dev_cli ) ) {
	require_once $blockwright_dev_cli; // stripped from distributed builds; guard so it never fatals.
}

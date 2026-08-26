<?php
/**
 * Blockwright Environment Loader
 *
 * Loads environment variables from .env.development.local so both
 * WordPress (PHP) and Vite share the same values.
 *
 * @package Blockwright
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$blockwright_env_file = __DIR__ . '/../.env.development.local';

if ( file_exists( $blockwright_env_file ) ) {
	$blockwright_lines = file( $blockwright_env_file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES );
	foreach ( $blockwright_lines as $blockwright_line ) {
		if ( str_starts_with( $blockwright_line, '#' ) ) {
			continue; // Skip comments.
		}
		if ( preg_match( '/^([A-Z0-9_]+)=(.*)$/', trim( $blockwright_line ), $matches ) ) {
			putenv( "{$matches[1]}={$matches[2]}" ); // phpcs:ignore WordPress.PHP.DiscouragedPHPFunctions.runtime_configuration_putenv -- Dev-only .env loader; putenv shares vars with the Vite process.
		}
	}
}

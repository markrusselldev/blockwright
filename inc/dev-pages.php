<?php
/**
 * Blockwright - Dev Pages bootstrap
 *
 * Auto-create the "Style Guide" page (dev-only) on theme activation, assign its
 * block template, and clean it up when switching away from the theme.
 *
 * @package Blockwright
 */

defined( 'ABSPATH' ) || exit;

add_action( 'after_switch_theme', 'blockwright_devpages_create' );
add_action( 'switch_theme', 'blockwright_devpages_remove' );

/**
 * The dev/demo pages we manage.
 *
 * @return array<int, array{title:string,slug:string,template:string}>
 */
function blockwright_devpages_specs() {
	return array(
		array(
			'title'    => 'Style Guide',
			'slug'     => 'style-guide',
			'template' => 'page-style-guide',
		),
	);
}

/**
 * Create pages if missing and assign block templates; mark with meta so we can remove later.
 */
function blockwright_devpages_create() {
	foreach ( blockwright_devpages_specs() as $spec ) {
		$page_id = blockwright_devpages_get_id_by_path( $spec['slug'] );

		if ( ! $page_id ) {
			$page_id = wp_insert_post(
				array(
					'post_title'   => $spec['title'],
					'post_name'    => $spec['slug'],
					'post_status'  => 'publish',
					'post_type'    => 'page',
					'post_content' => '', // content comes from the page template/parts.
				)
			);

			if ( is_wp_error( $page_id ) ) {
				continue;
			}

			// Mark as auto-created so we only clean up our own pages later.
			update_post_meta( $page_id, '_blockwright_autocreated', '1' );
		}

		blockwright_devpages_assign_template( $page_id, $spec['template'] );
	}
}

/**
 * Assign a block page template (by slug without .html) if the file exists in the theme.
 *
 * @param int    $page_id  Page ID.
 * @param string $template Template slug (e.g., 'page-style-guide').
 */
function blockwright_devpages_assign_template( $page_id, $template ) {
	$file = "templates/{$template}.html";

	$theme         = wp_get_theme();
	$stylesheetdir = $theme->get_stylesheet_directory();
	$templatedir   = $theme->get_template_directory();

	$path = $stylesheetdir . '/' . $file;
	if ( ! file_exists( $path ) ) {
		$path = $templatedir . '/' . $file;
	}

	if ( file_exists( $path ) ) {
		// Block theme templates store their slug (no .html) in _wp_page_template.
		update_post_meta( $page_id, '_wp_page_template', $template );
	}
}

/**
 * On theme switch, move our auto-created dev pages to trash (only the ones we created).
 */
function blockwright_devpages_remove() {
	$ids = get_posts(
		array(
			'post_type'        => 'page',
			'post_status'      => 'any',
			'numberposts'      => -1,
			'fields'           => 'ids',
			'meta_key'         => '_blockwright_autocreated',
			'meta_value'       => '1',
			'no_found_rows'    => true,
			'suppress_filters' => true,
		)
	);

	if ( empty( $ids ) ) {
		return;
	}

	$allowed_slugs     = array( 'style-guide', 'pattern-showcase', 'pattern-showcase-wide', 'pattern-showcase-full' );
	$allowed_templates = array( 'page-style-guide', 'page-pattern-showcase', 'page-pattern-showcase-wide', 'page-pattern-showcase-full' );

	foreach ( $ids as $page_id ) {
		$slug     = get_post_field( 'post_name', $page_id );
		$template = get_post_meta( $page_id, '_wp_page_template', true );

		// Only trash if it's still one of "our" pages; otherwise stop managing it.
		if ( in_array( $slug, $allowed_slugs, true ) || in_array( $template, $allowed_templates, true ) ) {
			wp_trash_post( $page_id );
		} else {
			delete_post_meta( $page_id, '_blockwright_autocreated' );
		}
	}
}

/**
 * Find a page ID by path/slug regardless of hierarchy.
 *
 * @param string $path Page path or slug.
 * @return int Page ID or 0 if not found.
 */
function blockwright_devpages_get_id_by_path( $path ) {
	$clean = trim( (string) $path, '/' );
	if ( '' === $clean ) {
		return 0;
	}
	$page = get_page_by_path( $clean, OBJECT, 'page' );
	return $page ? (int) $page->ID : 0;
}

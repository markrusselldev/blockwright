<?php
/**
 * Title: Blog heading
 * Slug: blockwright/blog-heading
 * Categories: blockwright
 * Description: The page heading of the blog home, used by the home and index templates.
 * Inserter: false
 *
 * @package Blockwright
 */

?>
<!-- wp:heading {"level":1,"align":"wide","fontSize":"xxl","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|large"}}}} -->
<h1 class="wp-block-heading alignwide has-xxl-font-size" style="margin-bottom:var(--wp--preset--spacing--large)"><?php esc_html_e( 'Blog', 'blockwright' ); ?></h1>
<!-- /wp:heading -->

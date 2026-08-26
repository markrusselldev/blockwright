<?php
/**
 * Title: Page: Blog Home
 * Slug: blockwright/page-blog-home
 * Categories: featured
 * Block Types: core/post-content
 * Post Types: page
 * Keywords: blog, home, posts, magazine, news
 * Inserter: true
 * Description: A blog home page - a short introduction, the latest posts in a feature grid, and an email signup so readers can follow along.
 *
 * @package Blockwright
 */
?>
<!-- wp:group {"metadata":{"name":"Blog Intro"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|large"}}},"backgroundColor":"surface-1","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-1-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--large)">

	<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.06em"}},"textColor":"text-2","fontSize":"xs"} -->
	<p class="has-text-2-color has-text-color has-xs-font-size" style="letter-spacing:0.06em;text-transform:uppercase"><?php esc_html_e( 'The blog', 'blockwright' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"level":1} -->
	<h1 class="wp-block-heading"><?php esc_html_e( 'Notes, ideas, and lessons from the work', 'blockwright' ); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"textColor":"text-2"} -->
	<p class="has-text-2-color has-text-color"><?php esc_html_e( 'One or two lines on what you write about and who it helps. Set the expectation, then let the posts speak.', 'blockwright' ); ?></p>
	<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"blockwright/archive-feature-grid"} /-->
<!-- wp:pattern {"slug":"blockwright/form-signup"} /-->

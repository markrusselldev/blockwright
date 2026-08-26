<?php
/**
 * Title: Page: Coming Soon
 * Slug: blockwright/page-coming-soon
 * Categories: featured
 * Block Types: core/post-content
 * Post Types: page
 * Keywords: coming soon, launch, placeholder, holding page, under construction
 * Inserter: true
 * Description: A minimal holding page for a site that has not launched - one headline, one line, and an email signup so visitors can hear when it does. Pairs well with a blank or landing template (no nav).
 *
 * @package Blockwright
 */
?>
<!-- wp:group {"metadata":{"name":"Coming Soon Intro"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|large"}}},"backgroundColor":"surface-1","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-1-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xx-large);padding-bottom:var(--wp--preset--spacing--large)">

	<!-- wp:heading {"level":1,"textAlign":"center"} -->
	<h1 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Something new is on the way', 'blockwright' ); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","textColor":"text-2"} -->
	<p class="has-text-align-center has-text-2-color has-text-color"><?php esc_html_e( 'One line on what is coming and roughly when. Leave an email below and you will be the first to know.', 'blockwright' ); ?></p>
	<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"blockwright/form-signup"} /-->

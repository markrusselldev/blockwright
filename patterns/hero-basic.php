<?php
/**
 * Title: Hero • Basic
 * Slug: blockwright/hero-basic
 * Categories: theme, hero
 * Inserter: true
 * Description: A minimal hero - a headline, short intro, and buttons. The simplest page opener.
 *
 * @package Blockwright
 */

?>
<!-- wp:group {"metadata":{"name":"Hero Basic"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"}}},"backgroundColor":"surface-1","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-1-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">

	<!-- wp:heading {"level":1} -->
	<h1 class="wp-block-heading"><?php esc_html_e( 'Your headline here', 'blockwright' ); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph -->
	<p><?php esc_html_e( 'A short intro paragraph clarifying the value.', 'blockwright' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"layout":{"type":"flex","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"var:preset|spacing|small"}}} -->
	<div class="wp-block-buttons">
		<!-- wp:button {"className":"is-style-fill"} -->
		<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Get Started', 'blockwright' ); ?></a></div>
		<!-- /wp:button -->

		<!-- wp:button {"className":"is-style-accent"} -->
		<div class="wp-block-button is-style-accent"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'See Features', 'blockwright' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->

</div>
<!-- /wp:group -->

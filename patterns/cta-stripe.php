<?php
/**
 * Title: CTA • Stripe
 * Slug: blockwright/cta-stripe
 * Categories: call-to-action
 * Inserter: true
 * Description: A full-width call-to-action stripe - a shaded band with one line of text and buttons.
 *
 * @package Blockwright
 */

?>
<!-- wp:group {"metadata":{"name":"<?php esc_attr_e( 'CTA Stripe', 'blockwright' ); ?>"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"}}},"backgroundColor":"surface-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-2-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">

	<!-- wp:paragraph {"fontSize":"l"} -->
	<p class="has-l-font-size"><?php esc_html_e( 'Ready to get started?', 'blockwright' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"layout":{"type":"flex","flexWrap":"wrap"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button {"className":"is-style-fill"} -->
		<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Contact', 'blockwright' ); ?></a></div>
		<!-- /wp:button -->

		<!-- wp:button {"className":"is-style-outline"} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Learn more', 'blockwright' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->

</div>
<!-- /wp:group -->

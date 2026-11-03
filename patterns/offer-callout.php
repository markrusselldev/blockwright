<?php
/**
 * Title: Offer Callout
 * Slug: blockwright/offer-callout
 * Categories: call-to-action, featured
 * Keywords: offer, promo, discount, sale, deal, limited time, coupon, cta
 * Block Types: core/group
 * Inserter: true
 * Description: A bold promotional callout - an eyebrow, a headline offer, the terms, and one button. For a limited-time deal.
 *
 * @package Blockwright
 */

?>
<!-- wp:group {"metadata":{"name":"<?php esc_attr_e( 'Offer Callout', 'blockwright' ); ?>"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large"}}},"backgroundColor":"neutral-900","textColor":"neutral-0","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-neutral-0-color has-neutral-900-background-color has-text-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xx-large);padding-bottom:var(--wp--preset--spacing--xx-large)">

	<!-- wp:paragraph {"align":"center","textColor":"neutral-0","fontSize":"s","style":{"typography":{"textTransform":"uppercase"},"spacing":{"margin":{"bottom":"var:preset|spacing|x-small"}}}} -->
	<p class="has-text-align-center has-neutral-0-color has-text-color has-s-font-size" style="margin-bottom:var(--wp--preset--spacing--x-small);text-transform:uppercase"><?php esc_html_e( 'Offer', 'blockwright' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"textAlign":"center","level":2,"textColor":"neutral-0"} -->
	<h2 class="wp-block-heading has-text-align-center has-neutral-0-color has-text-color"><?php esc_html_e( 'Your offer in one line', 'blockwright' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","textColor":"neutral-0","fontSize":"s","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|medium"}}}} -->
	<p class="has-text-align-center has-neutral-0-color has-text-color has-s-font-size" style="margin-top:var(--wp--preset--spacing--x-small);margin-bottom:var(--wp--preset--spacing--medium)"><?php esc_html_e( 'The terms: who it is for and when it ends.', 'blockwright' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button {"className":"is-style-fill"} -->
		<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Claim the offer', 'blockwright' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->

</div>
<!-- /wp:group -->

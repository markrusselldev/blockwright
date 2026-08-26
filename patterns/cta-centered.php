<?php
/**
 * Title: CTA • Centered
 * Slug: blockwright/cta-centered
 * Categories: call-to-action
 * Keywords: cta, centered, button, action
 * Block Types: core/group
 * Inserter: true
 * Description: A centered call-to-action band - a heading, one line, and a button. Use it to close a page.
 *
 * @package Blockwright
 */

?>
<!-- wp:group {"metadata":{"name":"CTA Centered"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large"}}},"backgroundColor":"neutral-900","textColor":"neutral-0","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-neutral-0-color has-neutral-900-background-color has-text-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xx-large);padding-bottom:var(--wp--preset--spacing--xx-large)">

	<!-- wp:group {"style":{"spacing":{"margin":{"left":"auto","right":"auto"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group" style="margin-left:auto;margin-right:auto">

		<!-- wp:heading {"textAlign":"center","level":2,"textColor":"neutral-0","fontSize":"2xl"} -->
		<h2 class="wp-block-heading has-text-align-center has-neutral-0-color has-text-color has-2-xl-font-size"><?php esc_html_e( 'Ready to Get Started?', 'blockwright' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","textColor":"neutral-0"} -->
		<p class="has-text-align-center has-neutral-0-color has-text-color"><?php esc_html_e( 'A short line that restates the value and gives one clear reason to act now.', 'blockwright' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"var:preset|spacing|small"}}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"className":"is-style-fill"} -->
			<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Get Started', 'blockwright' ); ?></a></div>
			<!-- /wp:button -->

			<!-- wp:button {"className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'View Pricing', 'blockwright' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->

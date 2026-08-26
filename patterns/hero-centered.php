<?php
/**
 * Title: Hero • Centered
 * Slug: blockwright/hero-centered
 * Categories: featured, call-to-action
 * Keywords: hero, banner, centered, cta
 * Block Types: core/group
 * Inserter: true
 * Description: A centered hero - a large headline, subhead, and buttons over a full-width band.
 *
 * @package Blockwright
 */

?>
<!-- wp:group {"metadata":{"name":"Hero Centered"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"}}},"backgroundColor":"surface-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-2-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">

	<!-- wp:group {"style":{"spacing":{"margin":{"left":"auto","right":"auto"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group" style="margin-left:auto;margin-right:auto">

		<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"display"} -->
		<h1 class="wp-block-heading has-text-align-center has-display-font-size"><?php esc_html_e( 'Your headline here', 'blockwright' ); ?></h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","fontSize":"l"} -->
		<p class="has-text-align-center has-l-font-size"><?php esc_html_e( 'A short sentence about what you offer and who it is for.', 'blockwright' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"var:preset|spacing|small"}}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"className":"is-style-fill"} -->
			<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Get Started', 'blockwright' ); ?></a></div>
			<!-- /wp:button -->

			<!-- wp:button {"className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Learn More', 'blockwright' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->

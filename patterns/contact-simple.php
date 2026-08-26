<?php
/**
 * Title: Contact • Simple
 * Slug: blockwright/contact-simple
 * Categories: text, contact
 * Keywords: contact, address, phone, email, hours, location
 * Block Types: core/group
 * Inserter: true
 * Description: A simple contact section - a heading, short intro, and your contact details.
 *
 * @package Blockwright
 */

?>
<!-- wp:group {"metadata":{"name":"Contact Simple"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"}}},"backgroundColor":"surface-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-2-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">

	<!-- wp:group {"layout":{"type":"constrained","contentSize":"640px"}} -->
	<div class="wp-block-group">

		<!-- wp:heading {"textAlign":"center","level":2,"fontSize":"2xl"} -->
		<h2 class="wp-block-heading has-text-align-center has-2-xl-font-size"><?php esc_html_e( 'Get in Touch', 'blockwright' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center"><?php esc_html_e( 'We\'d love to hear from you. Reach out using any of the methods below.', 'blockwright' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small","margin":{"top":"var:preset|spacing|small"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center","verticalAlignment":"top"}} -->
		<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--small)">
			<!-- wp:icon {"icon":"core/map-marker","textColor":"primary","style":{"dimensions":{"width":"1.5rem"}}} /-->
			<!-- wp:paragraph -->
			<p><strong><?php esc_html_e( 'Address', 'blockwright' ); ?></strong><br><?php esc_html_e( '123 Main Street', 'blockwright' ); ?><br><?php esc_html_e( 'San Francisco, CA 94102', 'blockwright' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center","verticalAlignment":"top"}} -->
		<div class="wp-block-group">
			<!-- wp:icon {"icon":"core/mobile","textColor":"primary","style":{"dimensions":{"width":"1.5rem"}}} /-->
			<!-- wp:paragraph -->
			<p><strong><?php esc_html_e( 'Phone', 'blockwright' ); ?></strong><br><a href="tel:+15551234567">(555) 123-4567</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center","verticalAlignment":"top"}} -->
		<div class="wp-block-group">
			<!-- wp:icon {"icon":"core/envelope","textColor":"primary","style":{"dimensions":{"width":"1.5rem"}}} /-->
			<!-- wp:paragraph -->
			<p><strong><?php esc_html_e( 'Email', 'blockwright' ); ?></strong><br><a href="mailto:hello@example.com"><?php esc_html_e( 'hello@example.com', 'blockwright' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center","verticalAlignment":"top"}} -->
		<div class="wp-block-group">
			<!-- wp:icon {"icon":"core/scheduled","textColor":"primary","style":{"dimensions":{"width":"1.5rem"}}} /-->
			<!-- wp:paragraph -->
			<p><strong><?php esc_html_e( 'Hours', 'blockwright' ); ?></strong><br><?php esc_html_e( 'Monday–Friday: 9am–5pm', 'blockwright' ); ?><br><?php esc_html_e( 'Saturday–Sunday: Closed', 'blockwright' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"className":"is-style-fill"} -->
			<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button" href="https://maps.google.com/?q=123+Main+Street,+San+Francisco,+CA+94102"><?php esc_html_e( 'Get Directions', 'blockwright' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->

<?php
/**
 * Title: Location & Hours
 * Slug: blockwright/location-hours
 * Categories: contact, featured
 * Keywords: location, hours, address, directions, visit, map, contact, opening
 * Block Types: core/columns
 * Inserter: true
 * Description: Address, opening hours, and a "Get directions" link. No embedded third-party map by default (privacy); add an embed block if you want one.
 *
 * @package Blockwright
 */
?>
<!-- wp:group {"metadata":{"name":"Location & Hours"},"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|large","margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"}}},"backgroundColor":"surface-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-2-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">

	<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em","fontWeight":"600"}},"textColor":"text-2","fontSize":"s"} -->
		<p class="has-text-2-color has-text-color has-s-font-size" style="letter-spacing:0.08em;text-transform:uppercase;font-weight:600"><?php esc_html_e( 'Visit', 'blockwright' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":2,"fontSize":"xl"} -->
		<h2 class="wp-block-heading has-xl-font-size"><?php esc_html_e( 'Come see us', 'blockwright' ); ?></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|large","left":"var:preset|spacing|x-large"}}}} -->
	<div class="wp-block-columns alignwide">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":3,"fontSize":"m"} -->
			<h3 class="wp-block-heading has-m-font-size"><?php esc_html_e( 'Location', 'blockwright' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"fontSize":"l"} -->
			<p class="has-l-font-size"><?php esc_html_e( '123 Example Street', 'blockwright' ); ?><br><?php esc_html_e( 'Suite 100', 'blockwright' ); ?><br><?php esc_html_e( 'Your City, ST 00000', 'blockwright' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p><a href="tel:+15550000000">(555) 000-0000</a><br><a href="mailto:hello@example.com"><?php esc_html_e( 'hello@example.com', 'blockwright' ); ?></a></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--small)">
				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="https://maps.google.com/?q=123+Example+Street" target="_blank" rel="noreferrer noopener"><?php esc_html_e( 'Get directions →', 'blockwright' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":3,"fontSize":"m"} -->
			<h3 class="wp-block-heading has-m-font-size"><?php esc_html_e( 'Hours', 'blockwright' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"typography":{"lineHeight":"2"}},"fontSize":"l"} -->
			<p class="has-l-font-size" style="line-height:2"><?php esc_html_e( 'Monday–Thursday · 9:00–5:00', 'blockwright' ); ?><br><?php esc_html_e( 'Friday · 9:00–4:00', 'blockwright' ); ?><br><?php esc_html_e( 'Saturday · By appointment', 'blockwright' ); ?><br><?php esc_html_e( 'Sunday · Closed', 'blockwright' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->

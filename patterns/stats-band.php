<?php
/**
 * Title: Stats Band
 * Slug: blockwright/stats-band
 * Categories: featured, columns
 * Keywords: stats, metrics, numbers, impact, results, facts, kpi
 * Block Types: core/columns
 * Inserter: true
 * Description: A row of headline numbers - years in practice, clients served, rating, impact. Trust signal for any site type.
 *
 * @package Blockwright
 */
?>
<!-- wp:group {"metadata":{"name":"Stats Band"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"}}},"backgroundColor":"surface-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-2-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">

	<!-- wp:columns {"align":"wide","className":"bw-stats","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|large","left":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns alignwide bw-stats">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"700","lineHeight":"1.1"}},"textColor":"link","fontSize":"xxl"} -->
			<p class="has-text-align-center has-link-color has-text-color has-xxl-font-size" style="font-weight:700;line-height:1.1">20+</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"align":"center","className":"is-style-eyebrow","fontSize":"s"} -->
			<p class="has-text-align-center is-style-eyebrow has-s-font-size"><?php esc_html_e( 'Years of practice', 'blockwright' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"700","lineHeight":"1.1"}},"textColor":"link","fontSize":"xxl"} -->
			<p class="has-text-align-center has-link-color has-text-color has-xxl-font-size" style="font-weight:700;line-height:1.1">2,500+</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"align":"center","className":"is-style-eyebrow","fontSize":"s"} -->
			<p class="has-text-align-center is-style-eyebrow has-s-font-size"><?php esc_html_e( 'Clients served', 'blockwright' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"700","lineHeight":"1.1"}},"textColor":"link","fontSize":"xxl"} -->
			<p class="has-text-align-center has-link-color has-text-color has-xxl-font-size" style="font-weight:700;line-height:1.1">4.9★</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"align":"center","className":"is-style-eyebrow","fontSize":"s"} -->
			<p class="has-text-align-center is-style-eyebrow has-s-font-size"><?php esc_html_e( 'Average rating', 'blockwright' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"700","lineHeight":"1.1"}},"textColor":"link","fontSize":"xxl"} -->
			<p class="has-text-align-center has-link-color has-text-color has-xxl-font-size" style="font-weight:700;line-height:1.1">98%</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"align":"center","className":"is-style-eyebrow","fontSize":"s"} -->
			<p class="has-text-align-center is-style-eyebrow has-s-font-size"><?php esc_html_e( 'Would recommend', 'blockwright' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->

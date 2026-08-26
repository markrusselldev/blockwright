<?php
/**
 * Title: Pricing Table
 * Slug: blockwright/pricing-table
 * Categories: blockwright, text
 * Inserter: true
 * Description: A three-tier pricing table - plan name, price, feature list, and a button per tier.
 *
 * @package Blockwright
 */

?>
<!-- wp:group {"metadata":{"name":"Pricing Table"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"}}},"backgroundColor":"surface-1","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-1-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">
	<!-- wp:columns {"align":"wide","className":"bw-price-cards","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|small"}}}} -->
	<div class="wp-block-columns alignwide bw-price-cards">

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"radius":"var:preset|border-radius|m","width":"var:custom|border|width|thin"}},"borderColor":"border-default"} -->
		<div class="wp-block-column has-border-color has-border-default-border-color" style="border-width:var(--wp--custom--border--width--thin);border-radius:var(--wp--preset--border-radius--m);padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
			<!-- wp:heading {"level":3,"fontSize":"l"} -->
			<h3 class="wp-block-heading has-l-font-size"><?php esc_html_e( 'Starter', 'blockwright' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"baseline"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"fontSize":"xxl"} -->
				<p class="has-xxl-font-size" style="font-weight:700">$9</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"textColor":"text-2","fontSize":"s"} -->
				<p class="has-text-2-color has-text-color has-s-font-size"><?php esc_html_e( '/month', 'blockwright' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:paragraph {"textColor":"text-2","fontSize":"s"} -->
			<p class="has-text-2-color has-text-color has-s-font-size"><?php esc_html_e( 'Perfect for side projects and personal sites.', 'blockwright' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:list {"style":{"spacing":{"padding":{"left":"var:preset|spacing|small"}}},"fontSize":"s"} -->
			<ul class="wp-block-list has-s-font-size" style="padding-left:var(--wp--preset--spacing--small)">
				<!-- wp:list-item -->
				<li><?php esc_html_e( '1 site license', 'blockwright' ); ?></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Community support', 'blockwright' ); ?></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Basic templates', 'blockwright' ); ?></li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"width":100,"className":"is-style-outline"} -->
				<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Get Started', 'blockwright' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"radius":"var:preset|border-radius|m","width":"var:custom|border|width|medium"}},"borderColor":"link"} -->
		<div class="wp-block-column has-border-color has-link-border-color" style="border-width:var(--wp--custom--border--width--medium);border-radius:var(--wp--preset--border-radius--m);padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
			<!-- wp:heading {"level":3,"fontSize":"l"} -->
			<h3 class="wp-block-heading has-l-font-size"><?php esc_html_e( 'Pro', 'blockwright' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"baseline"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"fontSize":"xxl"} -->
				<p class="has-xxl-font-size" style="font-weight:700">$29</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"textColor":"text-2","fontSize":"s"} -->
				<p class="has-text-2-color has-text-color has-s-font-size"><?php esc_html_e( '/month', 'blockwright' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:paragraph {"textColor":"text-2","fontSize":"s"} -->
			<p class="has-text-2-color has-text-color has-s-font-size"><?php esc_html_e( 'For freelancers and growing businesses.', 'blockwright' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:list {"style":{"spacing":{"padding":{"left":"var:preset|spacing|small"}}},"fontSize":"s"} -->
			<ul class="wp-block-list has-s-font-size" style="padding-left:var(--wp--preset--spacing--small)">
				<!-- wp:list-item -->
				<li><?php esc_html_e( '5 site licenses', 'blockwright' ); ?></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Priority support', 'blockwright' ); ?></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><?php esc_html_e( 'All templates', 'blockwright' ); ?></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Pro patterns', 'blockwright' ); ?></li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"width":100,"className":"is-style-fill"} -->
				<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-fill"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Get Started', 'blockwright' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"radius":"var:preset|border-radius|m","width":"var:custom|border|width|thin"}},"borderColor":"border-default"} -->
		<div class="wp-block-column has-border-color has-border-default-border-color" style="border-width:var(--wp--custom--border--width--thin);border-radius:var(--wp--preset--border-radius--m);padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
			<!-- wp:heading {"level":3,"fontSize":"l"} -->
			<h3 class="wp-block-heading has-l-font-size"><?php esc_html_e( 'Agency', 'blockwright' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"baseline"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"fontSize":"xxl"} -->
				<p class="has-xxl-font-size" style="font-weight:700">$99</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"textColor":"text-2","fontSize":"s"} -->
				<p class="has-text-2-color has-text-color has-s-font-size"><?php esc_html_e( '/month', 'blockwright' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:paragraph {"textColor":"text-2","fontSize":"s"} -->
			<p class="has-text-2-color has-text-color has-s-font-size"><?php esc_html_e( 'For teams and agencies building at scale.', 'blockwright' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:list {"style":{"spacing":{"padding":{"left":"var:preset|spacing|small"}}},"fontSize":"s"} -->
			<ul class="wp-block-list has-s-font-size" style="padding-left:var(--wp--preset--spacing--small)">
				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Unlimited sites', 'blockwright' ); ?></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Dedicated support', 'blockwright' ); ?></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><?php esc_html_e( 'All templates', 'blockwright' ); ?></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><?php esc_html_e( 'Pro patterns', 'blockwright' ); ?></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><?php esc_html_e( 'White-label option', 'blockwright' ); ?></li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"width":100,"className":"is-style-outline"} -->
				<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Contact Sales', 'blockwright' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->

<?php
/**
 * Title: Services • Grid
 * Slug: blockwright/services-grid
 * Categories: featured, services
 * Keywords: services, features, offerings, grid, columns
 * Block Types: core/columns
 * Inserter: true
 * Description: A grid of services - an icon, title, description, and a link per service.
 *
 * @package Blockwright
 */

?>
<!-- wp:group {"metadata":{"name":"<?php esc_attr_e( 'Services Grid', 'blockwright' ); ?>"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"}}},"backgroundColor":"surface-1","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-1-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">

	<!-- wp:heading {"textAlign":"center","level":2} -->
	<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Our Services', 'blockwright' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","textColor":"text-2"} -->
	<p class="has-text-align-center has-text-2-color has-text-color"><?php esc_html_e( 'A short line introducing what you offer.', 'blockwright' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"var:preset|border-radius|l","width":"var:custom|border|width|thin"}},"borderColor":"border-subtle","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
		<div class="wp-block-column has-border-color has-border-subtle-border-color" style="border-width:var(--wp--custom--border--width--thin);border-radius:var(--wp--preset--border-radius--l);padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}}} -->
			<div class="wp-block-group">

				<!-- wp:icon {"icon":"core/styles","textColor":"primary","align":"center","style":{"dimensions":{"width":"3rem"}}} /-->

				<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"l"} -->
				<h3 class="wp-block-heading has-text-align-center has-l-font-size"><?php esc_html_e( 'First service', 'blockwright' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"center"} -->
				<p class="has-text-align-center"><?php esc_html_e( 'Say what the client gets from this service and who it is for.', 'blockwright' ); ?></p>
				<!-- /wp:paragraph -->

			</div>
			<!-- /wp:group -->

			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center"><a href="#"><?php esc_html_e( 'Learn more →', 'blockwright' ); ?></a></p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"var:preset|border-radius|l","width":"var:custom|border|width|thin"}},"borderColor":"border-subtle","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
		<div class="wp-block-column has-border-color has-border-subtle-border-color" style="border-width:var(--wp--custom--border--width--thin);border-radius:var(--wp--preset--border-radius--l);padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}}} -->
			<div class="wp-block-group">

				<!-- wp:icon {"icon":"core/desktop","textColor":"primary","align":"center","style":{"dimensions":{"width":"3rem"}}} /-->

				<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"l"} -->
				<h3 class="wp-block-heading has-text-align-center has-l-font-size"><?php esc_html_e( 'Second service', 'blockwright' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"center"} -->
				<p class="has-text-align-center"><?php esc_html_e( 'Describe the second service in a sentence or two.', 'blockwright' ); ?></p>
				<!-- /wp:paragraph -->

			</div>
			<!-- /wp:group -->

			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center"><a href="#"><?php esc_html_e( 'Learn more →', 'blockwright' ); ?></a></p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"var:preset|border-radius|l","width":"var:custom|border|width|thin"}},"borderColor":"border-subtle","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
		<div class="wp-block-column has-border-color has-border-subtle-border-color" style="border-width:var(--wp--custom--border--width--thin);border-radius:var(--wp--preset--border-radius--l);padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}}} -->
			<div class="wp-block-group">

				<!-- wp:icon {"icon":"core/chart-bar","textColor":"primary","align":"center","style":{"dimensions":{"width":"3rem"}}} /-->

				<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"l"} -->
				<h3 class="wp-block-heading has-text-align-center has-l-font-size"><?php esc_html_e( 'Third service', 'blockwright' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"center"} -->
				<p class="has-text-align-center"><?php esc_html_e( 'Describe the third service in a sentence or two.', 'blockwright' ); ?></p>
				<!-- /wp:paragraph -->

			</div>
			<!-- /wp:group -->

			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center"><a href="#"><?php esc_html_e( 'Learn more →', 'blockwright' ); ?></a></p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->

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
<!-- wp:group {"metadata":{"name":"Services Grid"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"}}},"backgroundColor":"surface-1","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-1-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">

	<!-- wp:heading {"textAlign":"center","level":2,"fontSize":"2xl"} -->
	<h2 class="wp-block-heading has-text-align-center has-2-xl-font-size"><?php esc_html_e( 'Our Services', 'blockwright' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","textColor":"text-2"} -->
	<p class="has-text-align-center has-text-2-color has-text-color"><?php esc_html_e( 'A short line introducing what you offer.', 'blockwright' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"var:preset|border-radius|l","width":"var:custom|border|width|thin"}},"borderColor":"border-subtle"} -->
		<div class="wp-block-column has-border-color has-border-subtle-border-color" style="border-width:var(--wp--custom--border--width--thin);border-radius:var(--wp--preset--border-radius--l);padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">

			<!-- wp:icon {"icon":"core/styles","textColor":"primary","align":"center","style":{"dimensions":{"width":"3rem"}}} /-->

			<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"l"} -->
			<h3 class="wp-block-heading has-text-align-center has-l-font-size"><?php esc_html_e( 'Brand Design', 'blockwright' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center"><?php esc_html_e( 'Create a memorable brand identity with custom logos, color palettes, and design systems that resonate with your audience.', 'blockwright' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center"><a href="#"><?php esc_html_e( 'Learn more →', 'blockwright' ); ?></a></p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"var:preset|border-radius|l","width":"var:custom|border|width|thin"}},"borderColor":"border-subtle"} -->
		<div class="wp-block-column has-border-color has-border-subtle-border-color" style="border-width:var(--wp--custom--border--width--thin);border-radius:var(--wp--preset--border-radius--l);padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">

			<!-- wp:icon {"icon":"core/desktop","textColor":"primary","align":"center","style":{"dimensions":{"width":"3rem"}}} /-->

			<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"l"} -->
			<h3 class="wp-block-heading has-text-align-center has-l-font-size"><?php esc_html_e( 'Web Development', 'blockwright' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center"><?php esc_html_e( 'Build fast, responsive websites with modern technologies. From WordPress to custom web applications.', 'blockwright' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center"><a href="#"><?php esc_html_e( 'Learn more →', 'blockwright' ); ?></a></p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"var:preset|border-radius|l","width":"var:custom|border|width|thin"}},"borderColor":"border-subtle"} -->
		<div class="wp-block-column has-border-color has-border-subtle-border-color" style="border-width:var(--wp--custom--border--width--thin);border-radius:var(--wp--preset--border-radius--l);padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">

			<!-- wp:icon {"icon":"core/chart-bar","textColor":"primary","align":"center","style":{"dimensions":{"width":"3rem"}}} /-->

			<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"l"} -->
			<h3 class="wp-block-heading has-text-align-center has-l-font-size"><?php esc_html_e( 'Marketing Strategy', 'blockwright' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center"><?php esc_html_e( 'Reach your target audience with data-driven marketing campaigns across digital channels.', 'blockwright' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center"><a href="#"><?php esc_html_e( 'Learn more →', 'blockwright' ); ?></a></p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->

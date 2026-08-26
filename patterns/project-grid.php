<?php
/**
 * Title: Project Grid
 * Slug: blockwright/project-grid
 * Categories: portfolio, featured
 * Description: Display portfolio projects in a responsive grid layout. Shows featured image, title, excerpt, and link to full project.
 * Keywords: portfolio, projects, work, grid, gallery, case study
 * Block Types: core/columns
 * Inserter: true
 *
 * @package Blockwright
 */

$placeholder_image = get_theme_file_uri( 'assets/images/placeholder-image.svg' );
?>
<!-- wp:group {"metadata":{"name":"Project Grid"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"}}},"backgroundColor":"surface-1","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-1-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">

	<!-- wp:heading {"textAlign":"center","level":2,"fontSize":"2xl"} -->
	<h2 class="wp-block-heading has-text-align-center has-2-xl-font-size"><?php esc_html_e( 'Selected Work', 'blockwright' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","textColor":"text-2","fontSize":"l"} -->
	<p class="has-text-align-center has-text-2-color has-text-color has-l-font-size"><?php esc_html_e( 'A selection of recent projects and case studies.', 'blockwright' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"},"blockGap":{"left":"var:preset|spacing|medium"}}}} -->
	<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--medium)">

		<!-- wp:column -->
		<div class="wp-block-column">

			<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":"var:preset|border-radius|m"}},"backgroundColor":"surface-2","layout":{"type":"constrained"}} -->
			<div class="wp-block-group has-surface-2-background-color has-background" style="border-radius:var(--wp--preset--border-radius--m);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">

				<!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"spacing":{"margin":{"top":"0"}},"border":{"width":"var:custom|border|width|thin","color":"var:preset|color|border-subtle","radius":{"topLeft":"var:preset|border-radius|m","topRight":"var:preset|border-radius|m"}}}} -->
				<figure class="wp-block-image size-large has-custom-border" style="margin-top:0"><img src="<?php echo esc_url( $placeholder_image ); ?>" alt="Project thumbnail" class="has-border-color" style="border-color:var(--wp--preset--color--border-subtle);border-width:var(--wp--custom--border--width--thin);border-top-left-radius:var(--wp--preset--border-radius--m);border-top-right-radius:var(--wp--preset--border-radius--m);aspect-ratio:16/9;object-fit:cover"/></figure>
				<!-- /wp:image -->

				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","right":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small"},"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)">

					<!-- wp:heading {"level":3,"fontSize":"m"} -->
					<h3 class="wp-block-heading has-m-font-size"><?php esc_html_e( 'E-Commerce Redesign', 'blockwright' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"textColor":"text-2","fontSize":"s"} -->
					<p class="has-text-2-color has-text-color has-s-font-size"><?php esc_html_e( 'Complete UX overhaul for a fashion retailer, resulting in 40% increase in conversions.', 'blockwright' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"fontSize":"s"} -->
					<p class="has-s-font-size"><a href="#"><?php esc_html_e( 'View Project →', 'blockwright' ); ?></a></p>
					<!-- /wp:paragraph -->

				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">

			<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":"var:preset|border-radius|m"}},"backgroundColor":"surface-2","layout":{"type":"constrained"}} -->
			<div class="wp-block-group has-surface-2-background-color has-background" style="border-radius:var(--wp--preset--border-radius--m);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">

				<!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"spacing":{"margin":{"top":"0"}},"border":{"width":"var:custom|border|width|thin","color":"var:preset|color|border-subtle","radius":{"topLeft":"var:preset|border-radius|m","topRight":"var:preset|border-radius|m"}}}} -->
				<figure class="wp-block-image size-large has-custom-border" style="margin-top:0"><img src="<?php echo esc_url( $placeholder_image ); ?>" alt="Project thumbnail" class="has-border-color" style="border-color:var(--wp--preset--color--border-subtle);border-width:var(--wp--custom--border--width--thin);border-top-left-radius:var(--wp--preset--border-radius--m);border-top-right-radius:var(--wp--preset--border-radius--m);aspect-ratio:16/9;object-fit:cover"/></figure>
				<!-- /wp:image -->

				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","right":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small"},"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)">

					<!-- wp:heading {"level":3,"fontSize":"m"} -->
					<h3 class="wp-block-heading has-m-font-size"><?php esc_html_e( 'SaaS Dashboard', 'blockwright' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"textColor":"text-2","fontSize":"s"} -->
					<p class="has-text-2-color has-text-color has-s-font-size"><?php esc_html_e( 'Analytics dashboard design for a B2B software company with real-time data visualization.', 'blockwright' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"fontSize":"s"} -->
					<p class="has-s-font-size"><a href="#"><?php esc_html_e( 'View Project →', 'blockwright' ); ?></a></p>
					<!-- /wp:paragraph -->

				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">

			<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":"var:preset|border-radius|m"}},"backgroundColor":"surface-2","layout":{"type":"constrained"}} -->
			<div class="wp-block-group has-surface-2-background-color has-background" style="border-radius:var(--wp--preset--border-radius--m);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">

				<!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"spacing":{"margin":{"top":"0"}},"border":{"width":"var:custom|border|width|thin","color":"var:preset|color|border-subtle","radius":{"topLeft":"var:preset|border-radius|m","topRight":"var:preset|border-radius|m"}}}} -->
				<figure class="wp-block-image size-large has-custom-border" style="margin-top:0"><img src="<?php echo esc_url( $placeholder_image ); ?>" alt="Project thumbnail" class="has-border-color" style="border-color:var(--wp--preset--color--border-subtle);border-width:var(--wp--custom--border--width--thin);border-top-left-radius:var(--wp--preset--border-radius--m);border-top-right-radius:var(--wp--preset--border-radius--m);aspect-ratio:16/9;object-fit:cover"/></figure>
				<!-- /wp:image -->

				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","right":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small"},"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)">

					<!-- wp:heading {"level":3,"fontSize":"m"} -->
					<h3 class="wp-block-heading has-m-font-size"><?php esc_html_e( 'Brand Identity System', 'blockwright' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"textColor":"text-2","fontSize":"s"} -->
					<p class="has-text-2-color has-text-color has-s-font-size"><?php esc_html_e( 'Complete brand refresh including logo, color system, typography, and brand guidelines.', 'blockwright' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"fontSize":"s"} -->
					<p class="has-s-font-size"><a href="#"><?php esc_html_e( 'View Project →', 'blockwright' ); ?></a></p>
					<!-- /wp:paragraph -->

				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->

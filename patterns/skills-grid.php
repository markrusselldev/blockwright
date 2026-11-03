<?php
/**
 * Title: Skills Grid
 * Slug: blockwright/skills-grid
 * Categories: portfolio, about
 * Description: Showcase skills and expertise in a responsive grid. Includes icons, titles, and descriptions.
 * Keywords: skills, expertise, capabilities, services, about, what I do
 * Block Types: core/columns
 * Inserter: true
 *
 * @package Blockwright
 */

?>
<!-- wp:group {"metadata":{"name":"<?php esc_attr_e( 'Skills Grid', 'blockwright' ); ?>"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"}}},"backgroundColor":"surface-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-2-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">

	<!-- wp:heading {"textAlign":"center","level":2} -->
	<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Skills & Expertise', 'blockwright' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","textColor":"text-2","fontSize":"l"} -->
	<p class="has-text-align-center has-text-2-color has-text-color has-l-font-size"><?php esc_html_e( 'What you bring to every project.', 'blockwright' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"},"blockGap":{"left":"var:preset|spacing|medium","top":"var:preset|spacing|medium"}}}} -->
	<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--medium)">

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}},"border":{"radius":"var:preset|border-radius|m","width":"var:custom|border|width|thin"}},"borderColor":"border-default","backgroundColor":"surface-1"} -->
		<div class="wp-block-column has-border-color has-border-default-border-color has-surface-1-background-color has-background" style="border-width:var(--wp--custom--border--width--thin);border-radius:var(--wp--preset--border-radius--m);padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">

			<!-- wp:icon {"icon":"core/cover","textColor":"primary","align":"center","style":{"dimensions":{"width":"2.5rem"}}} /-->

			<!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small"}}},"fontSize":"m"} -->
			<h3 class="wp-block-heading has-text-align-center has-m-font-size" style="margin-top:var(--wp--preset--spacing--x-small)"><?php esc_html_e( 'UI/UX Design', 'blockwright' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center","textColor":"text-2","fontSize":"s"} -->
			<p class="has-text-align-center has-text-2-color has-text-color has-s-font-size"><?php esc_html_e( 'How you design for the people using the work.', 'blockwright' ); ?></p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}},"border":{"radius":"var:preset|border-radius|m","width":"var:custom|border|width|thin"}},"borderColor":"border-default","backgroundColor":"surface-1"} -->
		<div class="wp-block-column has-border-color has-border-default-border-color has-surface-1-background-color has-background" style="border-width:var(--wp--custom--border--width--thin);border-radius:var(--wp--preset--border-radius--m);padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">

			<!-- wp:icon {"icon":"core/desktop","textColor":"primary","align":"center","style":{"dimensions":{"width":"2.5rem"}}} /-->

			<!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small"}}},"fontSize":"m"} -->
			<h3 class="wp-block-heading has-text-align-center has-m-font-size" style="margin-top:var(--wp--preset--spacing--x-small)"><?php esc_html_e( 'Web Development', 'blockwright' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center","textColor":"text-2","fontSize":"s"} -->
			<p class="has-text-align-center has-text-2-color has-text-color has-s-font-size"><?php esc_html_e( 'What you build and the tools you build it with.', 'blockwright' ); ?></p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}},"border":{"radius":"var:preset|border-radius|m","width":"var:custom|border|width|thin"}},"borderColor":"border-default","backgroundColor":"surface-1"} -->
		<div class="wp-block-column has-border-color has-border-default-border-color has-surface-1-background-color has-background" style="border-width:var(--wp--custom--border--width--thin);border-radius:var(--wp--preset--border-radius--m);padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">

			<!-- wp:icon {"icon":"core/chart-bar","textColor":"primary","align":"center","style":{"dimensions":{"width":"2.5rem"}}} /-->

			<!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small"}}},"fontSize":"m"} -->
			<h3 class="wp-block-heading has-text-align-center has-m-font-size" style="margin-top:var(--wp--preset--spacing--x-small)"><?php esc_html_e( 'Performance', 'blockwright' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center","textColor":"text-2","fontSize":"s"} -->
			<p class="has-text-align-center has-text-2-color has-text-color has-s-font-size"><?php esc_html_e( 'How you keep your work fast.', 'blockwright' ); ?></p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}},"border":{"radius":"var:preset|border-radius|m","width":"var:custom|border|width|thin"}},"borderColor":"border-default","backgroundColor":"surface-1"} -->
		<div class="wp-block-column has-border-color has-border-default-border-color has-surface-1-background-color has-background" style="border-width:var(--wp--custom--border--width--thin);border-radius:var(--wp--preset--border-radius--m);padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">

			<!-- wp:icon {"icon":"core/people","textColor":"primary","align":"center","style":{"dimensions":{"width":"2.5rem"}}} /-->

			<!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small"}}},"fontSize":"m"} -->
			<h3 class="wp-block-heading has-text-align-center has-m-font-size" style="margin-top:var(--wp--preset--spacing--x-small)"><?php esc_html_e( 'Accessibility', 'blockwright' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center","textColor":"text-2","fontSize":"s"} -->
			<p class="has-text-align-center has-text-2-color has-text-color has-s-font-size"><?php esc_html_e( 'How you make your work usable for everyone.', 'blockwright' ); ?></p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|medium","top":"var:preset|spacing|medium"}}}} -->
	<div class="wp-block-columns alignwide">

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}},"border":{"radius":"var:preset|border-radius|m","width":"var:custom|border|width|thin"}},"borderColor":"border-default","backgroundColor":"surface-1"} -->
		<div class="wp-block-column has-border-color has-border-default-border-color has-surface-1-background-color has-background" style="border-width:var(--wp--custom--border--width--thin);border-radius:var(--wp--preset--border-radius--m);padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">

			<!-- wp:icon {"icon":"core/search","textColor":"primary","align":"center","style":{"dimensions":{"width":"2.5rem"}}} /-->

			<!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small"}}},"fontSize":"m"} -->
			<h3 class="wp-block-heading has-text-align-center has-m-font-size" style="margin-top:var(--wp--preset--spacing--x-small)"><?php esc_html_e( 'User Research', 'blockwright' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center","textColor":"text-2","fontSize":"s"} -->
			<p class="has-text-align-center has-text-2-color has-text-color has-s-font-size"><?php esc_html_e( 'How you learn what users need.', 'blockwright' ); ?></p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}},"border":{"radius":"var:preset|border-radius|m","width":"var:custom|border|width|thin"}},"borderColor":"border-default","backgroundColor":"surface-1"} -->
		<div class="wp-block-column has-border-color has-border-default-border-color has-surface-1-background-color has-background" style="border-width:var(--wp--custom--border--width--thin);border-radius:var(--wp--preset--border-radius--m);padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">

			<!-- wp:icon {"icon":"core/category","textColor":"primary","align":"center","style":{"dimensions":{"width":"2.5rem"}}} /-->

			<!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small"}}},"fontSize":"m"} -->
			<h3 class="wp-block-heading has-text-align-center has-m-font-size" style="margin-top:var(--wp--preset--spacing--x-small)"><?php esc_html_e( 'Design Systems', 'blockwright' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center","textColor":"text-2","fontSize":"s"} -->
			<p class="has-text-align-center has-text-2-color has-text-color has-s-font-size"><?php esc_html_e( 'How you keep the work consistent across a project.', 'blockwright' ); ?></p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}},"border":{"radius":"var:preset|border-radius|m","width":"var:custom|border|width|thin"}},"borderColor":"border-default","backgroundColor":"surface-1"} -->
		<div class="wp-block-column has-border-color has-border-default-border-color has-surface-1-background-color has-background" style="border-width:var(--wp--custom--border--width--thin);border-radius:var(--wp--preset--border-radius--m);padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">

			<!-- wp:icon {"icon":"core/tip","textColor":"primary","align":"center","style":{"dimensions":{"width":"2.5rem"}}} /-->

			<!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small"}}},"fontSize":"m"} -->
			<h3 class="wp-block-heading has-text-align-center has-m-font-size" style="margin-top:var(--wp--preset--spacing--x-small)"><?php esc_html_e( 'Strategy', 'blockwright' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center","textColor":"text-2","fontSize":"s"} -->
			<p class="has-text-align-center has-text-2-color has-text-color has-s-font-size"><?php esc_html_e( 'How you connect the work to business goals.', 'blockwright' ); ?></p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}},"border":{"radius":"var:preset|border-radius|m","width":"var:custom|border|width|thin"}},"borderColor":"border-default","backgroundColor":"surface-1"} -->
		<div class="wp-block-column has-border-color has-border-default-border-color has-surface-1-background-color has-background" style="border-width:var(--wp--custom--border--width--thin);border-radius:var(--wp--preset--border-radius--m);padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">

			<!-- wp:icon {"icon":"core/comment","textColor":"primary","align":"center","style":{"dimensions":{"width":"2.5rem"}}} /-->

			<!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small"}}},"fontSize":"m"} -->
			<h3 class="wp-block-heading has-text-align-center has-m-font-size" style="margin-top:var(--wp--preset--spacing--x-small)"><?php esc_html_e( 'Communication', 'blockwright' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center","textColor":"text-2","fontSize":"s"} -->
			<p class="has-text-align-center has-text-2-color has-text-color has-s-font-size"><?php esc_html_e( 'How you keep clients informed during a project.', 'blockwright' ); ?></p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->

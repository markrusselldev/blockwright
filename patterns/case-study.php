<?php
/**
 * Title: Case Study
 * Slug: blockwright/case-study
 * Categories: portfolio
 * Description: Detailed project case study layout with challenge, solution, and results sections. Use the No Title or Landing Page template so the page title does not show above it.
 * Keywords: portfolio, case study, project, detail, work
 * Inserter: true
 *
 * @package Blockwright
 */

$placeholder_image = get_theme_file_uri( 'assets/images/placeholder-image.svg' );
?>
<!-- wp:group {"metadata":{"name":"<?php esc_attr_e( 'Case Study Hero', 'blockwright' ); ?>"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0"}}},"backgroundColor":"surface-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-2-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0">

	<!-- wp:image {"align":"full","aspectRatio":"21/9","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image alignfull size-full"><img src="<?php echo esc_url( $placeholder_image ); ?>" alt="<?php esc_attr_e( 'Project hero image', 'blockwright' ); ?>" style="aspect-ratio:21/9;object-fit:cover"/></figure>
	<!-- /wp:image -->

</div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"<?php esc_attr_e( 'Case Study Content', 'blockwright' ); ?>"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"}}},"backgroundColor":"surface-1","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-1-background-color has-background" style="padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">

	<!-- wp:heading {"level":1,"fontSize":"display"} -->
	<h1 class="wp-block-heading has-display-font-size"><?php esc_html_e( 'Project name', 'blockwright' ); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"textColor":"text-2","fontSize":"l"} -->
	<p class="has-text-2-color has-text-color has-l-font-size"><?php esc_html_e( 'One sentence on what you did and the result it had.', 'blockwright' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
	<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--medium)">

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"textColor":"text-2","fontSize":"xs"} -->
			<p class="has-text-2-color has-text-color has-xs-font-size"><?php esc_html_e( 'CLIENT', 'blockwright' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"fontSize":"s"} -->
			<p class="has-s-font-size"><strong><?php esc_html_e( 'Client name', 'blockwright' ); ?></strong></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"textColor":"text-2","fontSize":"xs"} -->
			<p class="has-text-2-color has-text-color has-xs-font-size"><?php esc_html_e( 'ROLE', 'blockwright' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"fontSize":"s"} -->
			<p class="has-s-font-size"><strong><?php esc_html_e( 'Your role', 'blockwright' ); ?></strong></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"textColor":"text-2","fontSize":"xs"} -->
			<p class="has-text-2-color has-text-color has-xs-font-size"><?php esc_html_e( 'YEAR', 'blockwright' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"fontSize":"s"} -->
			<p class="has-s-font-size"><strong><?php esc_html_e( 'Year', 'blockwright' ); ?></strong></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"textColor":"text-2","fontSize":"xs"} -->
			<p class="has-text-2-color has-text-color has-xs-font-size"><?php esc_html_e( 'SERVICES', 'blockwright' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"fontSize":"s"} -->
			<p class="has-s-font-size"><strong><?php esc_html_e( 'Services you provided', 'blockwright' ); ?></strong></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|medium"}}},"backgroundColor":"surface-1","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-1-background-color has-background" style="padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--medium)">

	<!-- wp:heading {"level":2} -->
	<h2 class="wp-block-heading"><?php esc_html_e( 'The Challenge', 'blockwright' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"fontSize":"l"} -->
	<p class="has-l-font-size"><?php esc_html_e( 'Describe the problem the client came to you with, and what it was costing them.', 'blockwright' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph -->
	<p><?php esc_html_e( 'Add what you learned when you looked into it.', 'blockwright' ); ?></p>
	<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}}},"backgroundColor":"surface-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-2-background-color has-background" style="padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)">

	<!-- wp:heading {"level":2} -->
	<h2 class="wp-block-heading"><?php esc_html_e( 'The Solution', 'blockwright' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"fontSize":"l"} -->
	<p class="has-l-font-size"><?php esc_html_e( 'Describe what you did and why you chose that approach.', 'blockwright' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph -->
	<p><?php esc_html_e( 'List the changes that made the biggest difference.', 'blockwright' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"},"blockGap":{"left":"var:preset|spacing|medium"}}}} -->
	<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--medium)">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"var:preset|border-radius|m"}}} -->
			<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( $placeholder_image ); ?>" alt="<?php esc_attr_e( 'Solution screenshot 1', 'blockwright' ); ?>" style="border-radius:var(--wp--preset--border-radius--m);aspect-ratio:4/3;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"var:preset|border-radius|m"}}} -->
			<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( $placeholder_image ); ?>" alt="<?php esc_attr_e( 'Solution screenshot 2', 'blockwright' ); ?>" style="border-radius:var(--wp--preset--border-radius--m);aspect-ratio:4/3;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}},"backgroundColor":"surface-1","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-1-background-color has-background" style="padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large)">

	<!-- wp:heading {"level":2} -->
	<h2 class="wp-block-heading"><?php esc_html_e( 'The Results', 'blockwright' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"fontSize":"l"} -->
	<p class="has-l-font-size"><?php esc_html_e( 'Report only results you can prove. Name what you measured and over what period.', 'blockwright' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"},"blockGap":{"left":"var:preset|spacing|medium"}}}} -->
	<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--medium)">

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}},"border":{"radius":"var:preset|border-radius|m","width":"var:custom|border|width|thin"}},"borderColor":"border-default","backgroundColor":"surface-2"} -->
		<div class="wp-block-column has-border-color has-border-default-border-color has-surface-2-background-color has-background" style="border-width:var(--wp--custom--border--width--thin);border-radius:var(--wp--preset--border-radius--m);padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
			<!-- wp:paragraph {"align":"center","textColor":"link","fontSize":"display"} -->
			<p class="has-text-align-center has-link-color has-text-color has-display-font-size"><strong><?php esc_html_e( '+00%', 'blockwright' ); ?></strong></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"align":"center","textColor":"text-2"} -->
			<p class="has-text-align-center has-text-2-color has-text-color"><?php esc_html_e( 'What you measured', 'blockwright' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}},"border":{"radius":"var:preset|border-radius|m","width":"var:custom|border|width|thin"}},"borderColor":"border-default","backgroundColor":"surface-2"} -->
		<div class="wp-block-column has-border-color has-border-default-border-color has-surface-2-background-color has-background" style="border-width:var(--wp--custom--border--width--thin);border-radius:var(--wp--preset--border-radius--m);padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
			<!-- wp:paragraph {"align":"center","textColor":"link","fontSize":"display"} -->
			<p class="has-text-align-center has-link-color has-text-color has-display-font-size"><strong><?php esc_html_e( '-00%', 'blockwright' ); ?></strong></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"align":"center","textColor":"text-2"} -->
			<p class="has-text-align-center has-text-2-color has-text-color"><?php esc_html_e( 'What you measured', 'blockwright' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}},"border":{"radius":"var:preset|border-radius|m","width":"var:custom|border|width|thin"}},"borderColor":"border-default","backgroundColor":"surface-2"} -->
		<div class="wp-block-column has-border-color has-border-default-border-color has-surface-2-background-color has-background" style="border-width:var(--wp--custom--border--width--thin);border-radius:var(--wp--preset--border-radius--m);padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
			<!-- wp:paragraph {"align":"center","textColor":"link","fontSize":"display"} -->
			<p class="has-text-align-center has-link-color has-text-color has-display-font-size"><strong><?php esc_html_e( '+00%', 'blockwright' ); ?></strong></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"align":"center","textColor":"text-2"} -->
			<p class="has-text-align-center has-text-2-color has-text-color"><?php esc_html_e( 'What you measured', 'blockwright' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|large"}}},"backgroundColor":"surface-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-2-background-color has-background" style="padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large)">

	<!-- wp:separator {"align":"wide","className":"is-style-wide"} -->
	<hr class="wp-block-separator alignwide has-alpha-channel-opacity is-style-wide"/>
	<!-- /wp:separator -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
	<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--medium)">

		<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"textColor":"text-2","fontSize":"s"} -->
			<p class="has-text-2-color has-text-color has-s-font-size"><?php esc_html_e( '← Previous Project', 'blockwright' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"fontSize":"m"} -->
			<p class="has-m-font-size"><a href="#"><?php esc_html_e( 'Previous project name', 'blockwright' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"className":"bw-text-end","textColor":"text-2","fontSize":"s"} -->
			<p class="bw-text-end has-text-2-color has-text-color has-s-font-size"><?php esc_html_e( 'Next Project →', 'blockwright' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"className":"bw-text-end","fontSize":"m"} -->
			<p class="bw-text-end has-m-font-size"><a href="#"><?php esc_html_e( 'Next project name', 'blockwright' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->

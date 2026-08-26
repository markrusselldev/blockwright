<?php
/**
 * Title: Case Study
 * Slug: blockwright/case-study
 * Categories: portfolio
 * Description: Detailed project case study layout with challenge, solution, and results sections. Perfect for showcasing individual portfolio pieces.
 * Keywords: portfolio, case study, project, detail, work
 * Inserter: true
 *
 * @package Blockwright
 */

$placeholder_image = get_theme_file_uri( 'assets/images/placeholder-image.svg' );
?>
<!-- wp:group {"metadata":{"name":"Case Study Hero"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0"}}},"backgroundColor":"surface-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-2-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0">

	<!-- wp:image {"align":"full","aspectRatio":"21/9","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image alignfull size-full"><img src="<?php echo esc_url( $placeholder_image ); ?>" alt="Project hero image" style="aspect-ratio:21/9;object-fit:cover"/></figure>
	<!-- /wp:image -->

</div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Case Study Content"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"}}},"backgroundColor":"surface-1","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-1-background-color has-background" style="padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">

	<!-- wp:heading {"level":1,"fontSize":"display"} -->
	<h1 class="wp-block-heading has-display-font-size"><?php esc_html_e( 'E-Commerce Platform Redesign', 'blockwright' ); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"textColor":"text-2","fontSize":"l"} -->
	<p class="has-text-2-color has-text-color has-l-font-size"><?php esc_html_e( 'A complete UX overhaul that increased conversions by 40% and reduced cart abandonment.', 'blockwright' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
	<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--medium)">

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"textColor":"text-2","fontSize":"xs"} -->
			<p class="has-text-2-color has-text-color has-xs-font-size"><?php esc_html_e( 'CLIENT', 'blockwright' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"fontSize":"s"} -->
			<p class="has-s-font-size"><strong><?php esc_html_e( 'Fashion Retailer Co.', 'blockwright' ); ?></strong></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"textColor":"text-2","fontSize":"xs"} -->
			<p class="has-text-2-color has-text-color has-xs-font-size"><?php esc_html_e( 'ROLE', 'blockwright' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"fontSize":"s"} -->
			<p class="has-s-font-size"><strong><?php esc_html_e( 'Lead Designer', 'blockwright' ); ?></strong></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"textColor":"text-2","fontSize":"xs"} -->
			<p class="has-text-2-color has-text-color has-xs-font-size"><?php esc_html_e( 'YEAR', 'blockwright' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"fontSize":"s"} -->
			<p class="has-s-font-size"><strong>2024</strong></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"textColor":"text-2","fontSize":"xs"} -->
			<p class="has-text-2-color has-text-color has-xs-font-size"><?php esc_html_e( 'SERVICES', 'blockwright' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"fontSize":"s"} -->
			<p class="has-s-font-size"><strong><?php esc_html_e( 'UX Design, UI Design, Research', 'blockwright' ); ?></strong></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|medium"}}},"backgroundColor":"surface-1","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-1-background-color has-background" style="padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--medium)">

	<!-- wp:heading {"level":2,"fontSize":"2xl"} -->
	<h2 class="wp-block-heading has-2-xl-font-size"><?php esc_html_e( 'The Challenge', 'blockwright' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"fontSize":"l"} -->
	<p class="has-l-font-size"><?php esc_html_e( 'The client\'s existing e-commerce platform suffered from poor mobile experience, confusing navigation, and a checkout process that caused 70% of users to abandon their carts.', 'blockwright' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph -->
	<p><?php esc_html_e( 'User research revealed that customers found it difficult to filter products, compare options, and understand shipping costs until the final checkout step. The mobile experience was particularly problematic, with tiny tap targets and horizontal scrolling issues.', 'blockwright' ); ?></p>
	<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}}},"backgroundColor":"surface-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-2-background-color has-background" style="padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)">

	<!-- wp:heading {"level":2,"fontSize":"2xl"} -->
	<h2 class="wp-block-heading has-2-xl-font-size"><?php esc_html_e( 'The Solution', 'blockwright' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"fontSize":"l"} -->
	<p class="has-l-font-size"><?php esc_html_e( 'We redesigned the entire shopping experience with a mobile-first approach, focusing on intuitive navigation and transparent pricing.', 'blockwright' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph -->
	<p><?php esc_html_e( 'Key improvements included a redesigned product filtering system with visual previews, a sticky cart summary showing running totals, and a streamlined three-step checkout with guest checkout option. We also implemented a "quick view" feature for faster product comparison without leaving the category page.', 'blockwright' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"},"blockGap":{"left":"var:preset|spacing|medium"}}}} -->
	<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--medium)">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"var:preset|border-radius|m"}}} -->
			<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( $placeholder_image ); ?>" alt="Solution screenshot 1" style="border-radius:var(--wp--preset--border-radius--m);aspect-ratio:4/3;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"var:preset|border-radius|m"}}} -->
			<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( $placeholder_image ); ?>" alt="Solution screenshot 2" style="border-radius:var(--wp--preset--border-radius--m);aspect-ratio:4/3;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}},"backgroundColor":"surface-1","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-1-background-color has-background" style="padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large)">

	<!-- wp:heading {"level":2,"fontSize":"2xl"} -->
	<h2 class="wp-block-heading has-2-xl-font-size"><?php esc_html_e( 'The Results', 'blockwright' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"fontSize":"l"} -->
	<p class="has-l-font-size"><?php esc_html_e( 'The redesigned platform launched to immediate positive feedback and measurable business impact.', 'blockwright' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"},"blockGap":{"left":"var:preset|spacing|medium"}}}} -->
	<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--medium)">

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}},"border":{"radius":"var:preset|border-radius|m","width":"var:custom|border|width|thin"}},"borderColor":"border-default","backgroundColor":"surface-2"} -->
		<div class="wp-block-column has-border-color has-border-default-border-color has-surface-2-background-color has-background" style="border-width:var(--wp--custom--border--width--thin);border-radius:var(--wp--preset--border-radius--m);padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
			<!-- wp:paragraph {"align":"center","textColor":"link","fontSize":"display"} -->
			<p class="has-text-align-center has-link-color has-text-color has-display-font-size"><strong>+40%</strong></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"align":"center","textColor":"text-2"} -->
			<p class="has-text-align-center has-text-2-color has-text-color"><?php esc_html_e( 'Conversion Rate', 'blockwright' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}},"border":{"radius":"var:preset|border-radius|m","width":"var:custom|border|width|thin"}},"borderColor":"border-default","backgroundColor":"surface-2"} -->
		<div class="wp-block-column has-border-color has-border-default-border-color has-surface-2-background-color has-background" style="border-width:var(--wp--custom--border--width--thin);border-radius:var(--wp--preset--border-radius--m);padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
			<!-- wp:paragraph {"align":"center","textColor":"link","fontSize":"display"} -->
			<p class="has-text-align-center has-link-color has-text-color has-display-font-size"><strong>-30%</strong></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"align":"center","textColor":"text-2"} -->
			<p class="has-text-align-center has-text-2-color has-text-color"><?php esc_html_e( 'Cart Abandonment', 'blockwright' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}},"border":{"radius":"var:preset|border-radius|m","width":"var:custom|border|width|thin"}},"borderColor":"border-default","backgroundColor":"surface-2"} -->
		<div class="wp-block-column has-border-color has-border-default-border-color has-surface-2-background-color has-background" style="border-width:var(--wp--custom--border--width--thin);border-radius:var(--wp--preset--border-radius--m);padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
			<!-- wp:paragraph {"align":"center","textColor":"link","fontSize":"display"} -->
			<p class="has-text-align-center has-link-color has-text-color has-display-font-size"><strong>+65%</strong></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"align":"center","textColor":"text-2"} -->
			<p class="has-text-align-center has-text-2-color has-text-color"><?php esc_html_e( 'Mobile Revenue', 'blockwright' ); ?></p>
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
			<p class="has-m-font-size"><a href="#"><?php esc_html_e( 'Brand Identity System', 'blockwright' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"align":"right","textColor":"text-2","fontSize":"s"} -->
			<p class="has-text-align-right has-text-2-color has-text-color has-s-font-size"><?php esc_html_e( 'Next Project →', 'blockwright' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"align":"right","fontSize":"m"} -->
			<p class="has-text-align-right has-m-font-size"><a href="#"><?php esc_html_e( 'SaaS Dashboard', 'blockwright' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->

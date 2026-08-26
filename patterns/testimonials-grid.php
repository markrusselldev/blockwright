<?php
/**
 * Title: Testimonials • Grid
 * Slug: blockwright/testimonials-grid
 * Categories: testimonials, featured
 * Keywords: testimonials, reviews, quotes, social proof, grid
 * Block Types: core/columns
 * Inserter: true
 * Description: A grid of customer testimonials - a quote, name, and role per card. Social proof; use real names and outcomes.
 *
 * @package Blockwright
 */

$avatar_url = get_theme_file_uri( 'assets/images/placeholder-avatar.svg' );
?>
<!-- wp:group {"metadata":{"name":"Testimonials Grid"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"}}},"backgroundColor":"surface-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-2-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">

	<!-- wp:heading {"textAlign":"center","level":2,"fontSize":"2xl"} -->
	<h2 class="wp-block-heading has-text-align-center has-2-xl-font-size"><?php esc_html_e( 'What people say', 'blockwright' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"var:preset|border-radius|l","width":"var:custom|border|width|thin"}},"borderColor":"border-subtle","backgroundColor":"surface-1"} -->
		<div class="wp-block-column has-border-color has-border-subtle-border-color has-surface-1-background-color has-background" style="border-width:var(--wp--custom--border--width--thin);border-radius:var(--wp--preset--border-radius--l);padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">

			<!-- wp:paragraph {"style":{"typography":{"fontStyle":"italic"}}} -->
			<p style="font-style:italic"><?php esc_html_e( '"A specific, believable quote about the result you delivered. Real names and concrete outcomes beat vague praise."', 'blockwright' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small","margin":{"top":"var:preset|spacing|x-small"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
			<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--x-small)">
				<!-- wp:image {"className":"blockwright-avatar-sm","sizeSlug":"thumbnail"} -->
				<figure class="wp-block-image size-thumbnail blockwright-avatar-sm"><img src="<?php echo esc_url( $avatar_url ); ?>" alt=""/></figure>
				<!-- /wp:image -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"s"} -->
					<p class="has-s-font-size" style="font-weight:600"><?php esc_html_e( 'Sarah Chen', 'blockwright' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"textColor":"text-2","fontSize":"xs"} -->
					<p class="has-text-2-color has-text-color has-xs-font-size"><?php esc_html_e( 'Owner, Example Co.', 'blockwright' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"var:preset|border-radius|l","width":"var:custom|border|width|thin"}},"borderColor":"border-subtle","backgroundColor":"surface-1"} -->
		<div class="wp-block-column has-border-color has-border-subtle-border-color has-surface-1-background-color has-background" style="border-width:var(--wp--custom--border--width--thin);border-radius:var(--wp--preset--border-radius--l);padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">

			<!-- wp:paragraph {"style":{"typography":{"fontStyle":"italic"}}} -->
			<p style="font-style:italic"><?php esc_html_e( '"A second quote. Pick ones that answer a doubt a new reader still has at this point on the page."', 'blockwright' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small","margin":{"top":"var:preset|spacing|x-small"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
			<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--x-small)">
				<!-- wp:image {"className":"blockwright-avatar-sm","sizeSlug":"thumbnail"} -->
				<figure class="wp-block-image size-thumbnail blockwright-avatar-sm"><img src="<?php echo esc_url( $avatar_url ); ?>" alt=""/></figure>
				<!-- /wp:image -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"s"} -->
					<p class="has-s-font-size" style="font-weight:600"><?php esc_html_e( 'Marcus Rodriguez', 'blockwright' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"textColor":"text-2","fontSize":"xs"} -->
					<p class="has-text-2-color has-text-color has-xs-font-size"><?php esc_html_e( 'Director, Sample Group', 'blockwright' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"var:preset|border-radius|l","width":"var:custom|border|width|thin"}},"borderColor":"border-subtle","backgroundColor":"surface-1"} -->
		<div class="wp-block-column has-border-color has-border-subtle-border-color has-surface-1-background-color has-background" style="border-width:var(--wp--custom--border--width--thin);border-radius:var(--wp--preset--border-radius--l);padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">

			<!-- wp:paragraph {"style":{"typography":{"fontStyle":"italic"}}} -->
			<p style="font-style:italic"><?php esc_html_e( '"A third quote. If you can, include a measurable result, time saved, revenue, or a number they will recognize."', 'blockwright' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small","margin":{"top":"var:preset|spacing|x-small"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
			<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--x-small)">
				<!-- wp:image {"className":"blockwright-avatar-sm","sizeSlug":"thumbnail"} -->
				<figure class="wp-block-image size-thumbnail blockwright-avatar-sm"><img src="<?php echo esc_url( $avatar_url ); ?>" alt=""/></figure>
				<!-- /wp:image -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"fontSize":"s"} -->
					<p class="has-s-font-size" style="font-weight:600"><?php esc_html_e( 'Emily Foster', 'blockwright' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"textColor":"text-2","fontSize":"xs"} -->
					<p class="has-text-2-color has-text-color has-xs-font-size"><?php esc_html_e( 'Founder, Creative Studio', 'blockwright' ); ?></p>
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

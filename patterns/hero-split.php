<?php
/**
 * Title: Hero • Split
 * Slug: blockwright/hero-split
 * Categories: hero, featured, call-to-action
 * Keywords: hero, split, columns, image, two-column
 * Block Types: core/columns
 * Inserter: true
 * Description: A two-column hero - a headline, intro, and buttons beside an image. Use the No Title or Landing Page template so the page title does not show above it.
 *
 * @package Blockwright
 */

$placeholder_image = get_template_directory_uri() . '/assets/images/placeholder-image.svg';
?>
<!-- wp:group {"metadata":{"name":"<?php esc_attr_e( 'Hero Split', 'blockwright' ); ?>"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"}}},"backgroundColor":"surface-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-2-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}}} -->
	<div class="wp-block-columns alignwide">

		<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}}} -->
		<div class="wp-block-column is-vertically-aligned-center" style="padding-left:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium)">

			<!-- wp:heading {"level":1} -->
			<h1 class="wp-block-heading"><?php esc_html_e( 'Your headline here', 'blockwright' ); ?></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"fontSize":"l"} -->
			<p class="has-l-font-size"><?php esc_html_e( 'A short sentence about what you offer and who it is for.', 'blockwright' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left","flexWrap":"wrap"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"is-style-fill"} -->
				<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Get started', 'blockwright' ); ?></a></div>
				<!-- /wp:button -->

				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Learn more', 'blockwright' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}}} -->
		<div class="wp-block-column is-vertically-aligned-center" style="padding-left:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium)">

			<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"width":"var:custom|border|width|thin","color":"var:preset|color|border-subtle"}}} -->
			<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( $placeholder_image ); ?>" alt="<?php esc_attr_e( 'Featured image placeholder', 'blockwright' ); ?>" class="has-border-color" style="border-color:var(--wp--preset--color--border-subtle);border-width:var(--wp--custom--border--width--thin);aspect-ratio:4/3;object-fit:cover"/></figure>
			<!-- /wp:image -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->

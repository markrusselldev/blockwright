<?php
/**
 * Title: Content • Media & Text
 * Slug: blockwright/content-media
 * Categories: featured, columns
 * Keywords: content, media, text, image, alternating, feature, about, service
 * Block Types: core/columns
 * Inserter: true
 * Description: Alternating media-and-text rows for explaining a service, approach, mission, or about section. Image left/text right, then flipped.
 *
 * @package Blockwright
 */

$placeholder_image = get_template_directory_uri() . '/assets/images/placeholder-image.svg';
?>
<!-- wp:group {"metadata":{"name":"Content Media & Text"},"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|x-large","margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"}}},"backgroundColor":"surface-1","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-1-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">

	<!-- wp:columns {"align":"wide","verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">

		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"width":"var:custom|border|width|thin","color":"var:preset|color|border-subtle","radius":"var:preset|border-radius|l"}}} -->
			<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( $placeholder_image ); ?>" alt="Image placeholder" class="has-border-color" style="border-color:var(--wp--preset--color--border-subtle);border-width:var(--wp--custom--border--width--thin);border-radius:var(--wp--preset--border-radius--l);aspect-ratio:4/3;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}}} -->
		<div class="wp-block-column is-vertically-aligned-center" style="padding-left:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium)">
			<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em","fontWeight":"600"}},"textColor":"text-2","fontSize":"s"} -->
			<p class="has-text-2-color has-text-color has-s-font-size" style="letter-spacing:0.08em;text-transform:uppercase;font-weight:600"><?php esc_html_e( 'What we do', 'blockwright' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"fontSize":"xl"} -->
			<h2 class="wp-block-heading has-xl-font-size"><?php esc_html_e( 'A headline for this section', 'blockwright' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"fontSize":"l"} -->
			<p class="has-l-font-size"><?php esc_html_e( 'Explain the service, approach, or mission here. Keep it to a couple of sentences that give the reader a clear reason to care, then point them to the next step.', 'blockwright' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p><a href="#"><?php esc_html_e( 'Learn more →', 'blockwright' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

	<!-- wp:columns {"align":"wide","verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">

		<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}}} -->
		<div class="wp-block-column is-vertically-aligned-center" style="padding-left:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium)">
			<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em","fontWeight":"600"}},"textColor":"text-2","fontSize":"s"} -->
			<p class="has-text-2-color has-text-color has-s-font-size" style="letter-spacing:0.08em;text-transform:uppercase;font-weight:600"><?php esc_html_e( 'How it works', 'blockwright' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"fontSize":"xl"} -->
			<h2 class="wp-block-heading has-xl-font-size"><?php esc_html_e( 'A second, flipped row', 'blockwright' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"fontSize":"l"} -->
			<p class="has-l-font-size"><?php esc_html_e( 'The image sits on the opposite side to create rhythm down the page. Duplicate either row and edit the copy to build out the section.', 'blockwright' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p><a href="#"><?php esc_html_e( 'Learn more →', 'blockwright' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"width":"var:custom|border|width|thin","color":"var:preset|color|border-subtle","radius":"var:preset|border-radius|l"}}} -->
			<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( $placeholder_image ); ?>" alt="Image placeholder" class="has-border-color" style="border-color:var(--wp--preset--color--border-subtle);border-width:var(--wp--custom--border--width--thin);border-radius:var(--wp--preset--border-radius--l);aspect-ratio:4/3;object-fit:cover"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->

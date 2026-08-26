<?php
/**
 * Title: Gallery • Image Grid
 * Slug: blockwright/gallery
 * Categories: gallery, media
 * Keywords: gallery, images, grid, photos, portfolio, showcase, work
 * Block Types: core/gallery
 * Inserter: true
 * Description: A static three-column image gallery for showing work, photos, or a portfolio sample - a heading, a short intro, and a cropped image grid.
 *
 * @package Blockwright
 */

$placeholder_image = get_template_directory_uri() . '/assets/images/placeholder-image.svg';
?>
<!-- wp:group {"metadata":{"name":"Gallery"},"align":"full","backgroundColor":"surface-1","style":{"spacing":{"blockGap":"var:preset|spacing|large","margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-1-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">

	<!-- wp:heading {"textAlign":"center"} -->
	<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Selected work', 'blockwright' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
	<p class="has-text-align-center has-medium-font-size"><?php esc_html_e( 'A visual sample of recent projects.', 'blockwright' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:gallery {"columns":3,"linkTo":"none","align":"wide"} -->
	<figure class="wp-block-gallery alignwide has-nested-images columns-3 is-cropped"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"var:preset|border-radius|l"}}} -->
	<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( $placeholder_image ); ?>" alt="Image placeholder" style="border-radius:var(--wp--preset--border-radius--l);aspect-ratio:4/3;object-fit:cover"/></figure>
	<!-- /wp:image -->

	<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"var:preset|border-radius|l"}}} -->
	<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( $placeholder_image ); ?>" alt="Image placeholder" style="border-radius:var(--wp--preset--border-radius--l);aspect-ratio:4/3;object-fit:cover"/></figure>
	<!-- /wp:image -->

	<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"var:preset|border-radius|l"}}} -->
	<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( $placeholder_image ); ?>" alt="Image placeholder" style="border-radius:var(--wp--preset--border-radius--l);aspect-ratio:4/3;object-fit:cover"/></figure>
	<!-- /wp:image -->

	<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"var:preset|border-radius|l"}}} -->
	<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( $placeholder_image ); ?>" alt="Image placeholder" style="border-radius:var(--wp--preset--border-radius--l);aspect-ratio:4/3;object-fit:cover"/></figure>
	<!-- /wp:image -->

	<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"var:preset|border-radius|l"}}} -->
	<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( $placeholder_image ); ?>" alt="Image placeholder" style="border-radius:var(--wp--preset--border-radius--l);aspect-ratio:4/3;object-fit:cover"/></figure>
	<!-- /wp:image -->

	<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"var:preset|border-radius|l"}}} -->
	<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( $placeholder_image ); ?>" alt="Image placeholder" style="border-radius:var(--wp--preset--border-radius--l);aspect-ratio:4/3;object-fit:cover"/></figure>
	<!-- /wp:image --></figure>
	<!-- /wp:gallery -->

</div>
<!-- /wp:group -->

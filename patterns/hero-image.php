<?php
/**
 * Title: Hero • Image Background
 * Slug: blockwright/hero-image
 * Categories: hero, featured
 * Keywords: hero, banner, cover, image, background, overlay, header, headline
 * Block Types: core/cover
 * Inserter: true
 * Description: A full-width hero with an image background, a legible dark scrim, and a centered headline, subhead, and call to action. The boldest way to open a page.
 *
 * @package Blockwright
 */

$placeholder_image = get_template_directory_uri() . '/assets/images/placeholder-image.svg';
?>
<!-- wp:cover {"url":"<?php echo esc_url( $placeholder_image ); ?>","dimRatio":40,"overlayColor":"media-scrim","isUserOverlayColor":true,"contentPosition":"center center","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large"}}},"metadata":{"name":"Hero: Image Background"}} -->
<div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--xx-large);padding-bottom:var(--wp--preset--spacing--xx-large)"><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( $placeholder_image ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-media-scrim-background-color has-background-dim-40 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"textColor":"on-media","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-on-media-color has-text-color"><!-- wp:heading {"textAlign":"center","level":1,"textColor":"on-media","fontSize":"xxl"} -->
<h1 class="wp-block-heading has-text-align-center has-on-media-color has-text-color has-xxl-font-size"><?php esc_html_e( 'Build something worth visiting', 'blockwright' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"on-media","fontSize":"l"} -->
<p class="has-text-align-center has-on-media-color has-text-color has-l-font-size"><?php esc_html_e( 'A short, confident line about what you make and who it is for - enough to earn the next scroll.', 'blockwright' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Get started', 'blockwright' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'See our work', 'blockwright' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

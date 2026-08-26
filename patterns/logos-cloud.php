<?php
/**
 * Title: Logos • Cloud
 * Slug: blockwright/logos-cloud
 * Categories: featured
 * Keywords: logos, clients, partners, brands, trust, social proof
 * Block Types: core/gallery
 * Inserter: true
 * Description: A row of client or partner logos - a quick trust signal near the top of a page.
 *
 * @package Blockwright
 */

$placeholder_logo = get_template_directory_uri() . '/assets/images/placeholder-logo.svg';
?>
<!-- wp:group {"metadata":{"name":"Logos Cloud"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"}}},"backgroundColor":"surface-1","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-1-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">

	<!-- wp:heading {"textAlign":"center","level":2,"fontSize":"2xl"} -->
	<h2 class="wp-block-heading has-text-align-center has-2-xl-font-size"><?php esc_html_e( 'Trusted By', 'blockwright' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center"><?php esc_html_e( 'A short line introducing the companies or clients you work with.', 'blockwright' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:gallery {"columns":5,"linkTo":"none","sizeSlug":"medium","align":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|small","left":"var:preset|spacing|medium"}}}} -->
	<figure class="wp-block-gallery aligncenter has-nested-images columns-5 is-cropped">

		<!-- wp:image {"sizeSlug":"medium","linkDestination":"none","style":{"border":{"width":"var:custom|border|width|thin","color":"var:preset|color|border-subtle","radius":"var:preset|border-radius|s"}}} -->
		<figure class="wp-block-image size-medium has-custom-border"><img src="<?php echo esc_url( $placeholder_logo ); ?>" alt="Partner logo" class="has-border-color" style="border-width:var(--wp--custom--border--width--thin);border-color:var(--wp--preset--color--border-subtle);border-radius:var(--wp--preset--border-radius--s)"/></figure>
		<!-- /wp:image -->

		<!-- wp:image {"sizeSlug":"medium","linkDestination":"none","style":{"border":{"width":"var:custom|border|width|thin","color":"var:preset|color|border-subtle","radius":"var:preset|border-radius|s"}}} -->
		<figure class="wp-block-image size-medium has-custom-border"><img src="<?php echo esc_url( $placeholder_logo ); ?>" alt="Partner logo" class="has-border-color" style="border-width:var(--wp--custom--border--width--thin);border-color:var(--wp--preset--color--border-subtle);border-radius:var(--wp--preset--border-radius--s)"/></figure>
		<!-- /wp:image -->

		<!-- wp:image {"sizeSlug":"medium","linkDestination":"none","style":{"border":{"width":"var:custom|border|width|thin","color":"var:preset|color|border-subtle","radius":"var:preset|border-radius|s"}}} -->
		<figure class="wp-block-image size-medium has-custom-border"><img src="<?php echo esc_url( $placeholder_logo ); ?>" alt="Partner logo" class="has-border-color" style="border-width:var(--wp--custom--border--width--thin);border-color:var(--wp--preset--color--border-subtle);border-radius:var(--wp--preset--border-radius--s)"/></figure>
		<!-- /wp:image -->

		<!-- wp:image {"sizeSlug":"medium","linkDestination":"none","style":{"border":{"width":"var:custom|border|width|thin","color":"var:preset|color|border-subtle","radius":"var:preset|border-radius|s"}}} -->
		<figure class="wp-block-image size-medium has-custom-border"><img src="<?php echo esc_url( $placeholder_logo ); ?>" alt="Partner logo" class="has-border-color" style="border-width:var(--wp--custom--border--width--thin);border-color:var(--wp--preset--color--border-subtle);border-radius:var(--wp--preset--border-radius--s)"/></figure>
		<!-- /wp:image -->

		<!-- wp:image {"sizeSlug":"medium","linkDestination":"none","style":{"border":{"width":"var:custom|border|width|thin","color":"var:preset|color|border-subtle","radius":"var:preset|border-radius|s"}}} -->
		<figure class="wp-block-image size-medium has-custom-border"><img src="<?php echo esc_url( $placeholder_logo ); ?>" alt="Partner logo" class="has-border-color" style="border-width:var(--wp--custom--border--width--thin);border-color:var(--wp--preset--color--border-subtle);border-radius:var(--wp--preset--border-radius--s)"/></figure>
		<!-- /wp:image -->

		<!-- wp:image {"sizeSlug":"medium","linkDestination":"none","style":{"border":{"width":"var:custom|border|width|thin","color":"var:preset|color|border-subtle","radius":"var:preset|border-radius|s"}}} -->
		<figure class="wp-block-image size-medium has-custom-border"><img src="<?php echo esc_url( $placeholder_logo ); ?>" alt="Partner logo" class="has-border-color" style="border-width:var(--wp--custom--border--width--thin);border-color:var(--wp--preset--color--border-subtle);border-radius:var(--wp--preset--border-radius--s)"/></figure>
		<!-- /wp:image -->

		<!-- wp:image {"sizeSlug":"medium","linkDestination":"none","style":{"border":{"width":"var:custom|border|width|thin","color":"var:preset|color|border-subtle","radius":"var:preset|border-radius|s"}}} -->
		<figure class="wp-block-image size-medium has-custom-border"><img src="<?php echo esc_url( $placeholder_logo ); ?>" alt="Partner logo" class="has-border-color" style="border-width:var(--wp--custom--border--width--thin);border-color:var(--wp--preset--color--border-subtle);border-radius:var(--wp--preset--border-radius--s)"/></figure>
		<!-- /wp:image -->

		<!-- wp:image {"sizeSlug":"medium","linkDestination":"none","style":{"border":{"width":"var:custom|border|width|thin","color":"var:preset|color|border-subtle","radius":"var:preset|border-radius|s"}}} -->
		<figure class="wp-block-image size-medium has-custom-border"><img src="<?php echo esc_url( $placeholder_logo ); ?>" alt="Partner logo" class="has-border-color" style="border-width:var(--wp--custom--border--width--thin);border-color:var(--wp--preset--color--border-subtle);border-radius:var(--wp--preset--border-radius--s)"/></figure>
		<!-- /wp:image -->

		<!-- wp:image {"sizeSlug":"medium","linkDestination":"none","style":{"border":{"width":"var:custom|border|width|thin","color":"var:preset|color|border-subtle","radius":"var:preset|border-radius|s"}}} -->
		<figure class="wp-block-image size-medium has-custom-border"><img src="<?php echo esc_url( $placeholder_logo ); ?>" alt="Partner logo" class="has-border-color" style="border-width:var(--wp--custom--border--width--thin);border-color:var(--wp--preset--color--border-subtle);border-radius:var(--wp--preset--border-radius--s)"/></figure>
		<!-- /wp:image -->

		<!-- wp:image {"sizeSlug":"medium","linkDestination":"none","style":{"border":{"width":"var:custom|border|width|thin","color":"var:preset|color|border-subtle","radius":"var:preset|border-radius|s"}}} -->
		<figure class="wp-block-image size-medium has-custom-border"><img src="<?php echo esc_url( $placeholder_logo ); ?>" alt="Partner logo" class="has-border-color" style="border-width:var(--wp--custom--border--width--thin);border-color:var(--wp--preset--color--border-subtle);border-radius:var(--wp--preset--border-radius--s)"/></figure>
		<!-- /wp:image -->

	</figure>
	<!-- /wp:gallery -->

</div>
<!-- /wp:group -->

<?php
/**
 * Title: Testimonial
 * Slug: blockwright/testimonial
 * Categories: blockwright, text
 * Inserter: true
 * Description: A single featured testimonial - one quote with attribution.
 *
 * @package Blockwright
 */

$avatar_url = get_theme_file_uri( 'assets/images/placeholder-avatar.svg' );
?>
<!-- wp:group {"metadata":{"name":"Testimonial"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"},"blockGap":"var:preset|spacing|small"}},"backgroundColor":"surface-1","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-1-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">
	<!-- wp:paragraph {"fontSize":"lead","style":{"typography":{"fontStyle":"italic","fontWeight":"400"}}} -->
	<p class="has-lead-font-size" style="font-style:italic;font-weight:400"><?php esc_html_e( '"A specific, believable quote about the result you delivered for a real customer."', 'blockwright' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
	<div class="wp-block-group">
		<!-- wp:image {"className":"blockwright-avatar-md","sizeSlug":"thumbnail"} -->
		<figure class="wp-block-image size-thumbnail blockwright-avatar-md"><img src="<?php echo esc_url( $avatar_url ); ?>" alt=""/></figure>
		<!-- /wp:image -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}}} -->
			<p class="has-base-font-size" style="font-weight:600"><?php esc_html_e( 'Jane Doe', 'blockwright' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"textColor":"text-2","fontSize":"s"} -->
			<p class="has-text-2-color has-text-color has-s-font-size"><?php esc_html_e( 'Owner, Example Co.', 'blockwright' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

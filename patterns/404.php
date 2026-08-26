<?php
/**
 * Title: 404
 * Slug: blockwright/404
 * Categories: blockwright
 * Description: Page not found layout with a clear message, search, and a way back home.
 * Inserter: false
 *
 * @package Blockwright
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small","padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large"}}},"layout":{"type":"constrained","justifyContent":"center","contentSize":"40rem"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--xx-large);padding-bottom:var(--wp--preset--spacing--xx-large)">
	<!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.12em"}},"textColor":"text-2","fontSize":"xs"} -->
	<p class="has-text-align-center has-text-2-color has-text-color has-xs-font-size" style="letter-spacing:0.12em;text-transform:uppercase"><?php esc_html_e( 'Error 404', 'blockwright' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"textAlign":"center","level":1} -->
	<h1 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Page not found', 'blockwright' ); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","textColor":"text-2"} -->
	<p class="has-text-align-center has-text-2-color has-text-color"><?php esc_html_e( 'The page you\'re looking for can\'t be found - it may have moved or never existed. Try a search, or head back home.', 'blockwright' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search this site","buttonUseIcon":true,"align":"center"} /-->

	<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--x-small)">
		<!-- wp:button {"className":"is-style-outline"} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Back to home', 'blockwright' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->

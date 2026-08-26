<?php
/**
 * Title: Guarantee Badges
 * Slug: blockwright/guarantee-badges
 * Categories: featured, columns
 * Keywords: guarantee, trust, badges, secure, money-back, support, warranty, reassurance
 * Inserter: true
 * Description: A row of trust signals - money-back guarantee, secure checkout, support, rating. Reassurance near a price or a form to lift conversion.
 *
 * @package Blockwright
 */

// Native core/icon names (theme baseline - swap per your offer).
$badges = array(
	array( 'core/receipt', 'Money-back guarantee' ),
	array( 'core/shield', 'Secure and private' ),
	array( 'core/help', 'Real human support' ),
	array( 'core/star-filled', 'Five-star rated' ),
);
?>
<!-- wp:group {"metadata":{"name":"Guarantee Badges"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}},"backgroundColor":"surface-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-2-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large)">

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}}} -->
	<div class="wp-block-columns alignwide">
		<?php foreach ( $badges as $badge ) : ?>
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center","verticalAlignment":"center"}} -->
			<div class="wp-block-group">
				<!-- wp:icon {"icon":"<?php echo esc_attr( $badge[0] ); ?>","textColor":"primary","style":{"dimensions":{"width":"1.75rem"}}} /-->
				<!-- wp:paragraph {"fontSize":"s","style":{"typography":{"fontWeight":"600"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
				<p class="has-s-font-size" style="margin-top:0;margin-bottom:0;font-weight:600"><?php echo esc_html( $badge[1] ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->

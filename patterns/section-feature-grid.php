<?php
/**
 * Title: Section • Feature Grid
 * Slug: blockwright/section-feature-grid
 * Categories: featured, columns
 * Keywords: features, grid, cards, benefits, icons
 * Inserter: true
 * Description: A grid of features or benefits - an icon, title, and short line per item.
 *
 * @package Blockwright
 */

// Native core/icon names (swap per your product). Idea / reliable / flexible.
$icons    = array( 'core/tip', 'core/shield', 'core/shuffle' );
$features = array(
	array( __( 'Feature one', 'blockwright' ), __( 'A short line on what this does and why the reader should care about it.', 'blockwright' ) ),
	array( __( 'Feature two', 'blockwright' ), __( 'Keep each description parallel in length so the row reads evenly.', 'blockwright' ) ),
	array( __( 'Feature three', 'blockwright' ), __( 'Swap the icons and copy to match your own product or service.', 'blockwright' ) ),
);
?>
<!-- wp:group {"metadata":{"name":"<?php esc_attr_e( 'Feature Grid', 'blockwright' ); ?>"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"}}},"backgroundColor":"surface-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-2-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">

	<!-- wp:heading {"textAlign":"center","level":2,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|large"}}}} -->
	<h2 class="wp-block-heading has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--large)"><?php esc_html_e( 'Features', 'blockwright' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}}} -->
	<div class="wp-block-columns alignwide">
		<?php foreach ( $features as $i => $feature ) : ?>
		<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small","padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"radius":"var:preset|border-radius|m","width":"var:custom|border|width|thin"}},"borderColor":"border-subtle","backgroundColor":"surface-1"} -->
		<div class="wp-block-column has-border-color has-border-subtle-border-color has-surface-1-background-color has-background" style="border-width:var(--wp--custom--border--width--thin);border-radius:var(--wp--preset--border-radius--m);padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)">
			<!-- wp:icon {"icon":"<?php echo esc_attr( $icons[ $i ] ); ?>","textColor":"primary","style":{"dimensions":{"width":"3rem"}}} /-->
			<!-- wp:heading {"level":3,"fontSize":"l"} -->
			<h3 class="wp-block-heading has-l-font-size"><?php echo esc_html( $feature[0] ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"text-2"} -->
			<p class="has-text-2-color has-text-color"><?php echo esc_html( $feature[1] ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->

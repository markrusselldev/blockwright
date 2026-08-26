<?php
/**
 * Title: Stats • Icon Grid
 * Slug: blockwright/stats-grid
 * Categories: featured, columns
 * Keywords: stats, numbers, metrics, icons, results, kpi, trust, counter
 * Block Types: core/columns
 * Inserter: true
 * Description: A grid of headline numbers, each led by an icon - years, projects, rating, response. An icon-led alternative to the stats band, pairs with the Stat Counter block.
 *
 * @package Blockwright
 */

// Native core/icon names (theme baseline - swap per your metrics).
$stats = array(
	array( 'core/calendar', '12', 'Years in practice' ),
	array( 'core/chart-bar', '480+', 'Projects delivered' ),
	array( 'core/star-filled', '4.9', 'Average rating' ),
	array( 'core/comment', '1.2k', 'Support replies a year' ),
);
?>
<!-- wp:group {"metadata":{"name":"Stats Icon Grid"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"}}},"backgroundColor":"surface-1","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-1-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|large","left":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns alignwide">
		<?php foreach ( $stats as $stat ) : ?>
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","alignItems":"center"}} -->
			<div class="wp-block-group">
				<!-- wp:icon {"icon":"<?php echo esc_attr( $stat[0] ); ?>","textColor":"primary","style":{"dimensions":{"width":"1.75rem"}}} /-->
				<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"xxl","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
				<h3 class="wp-block-heading has-text-align-center has-xxl-font-size" style="margin-top:0;margin-bottom:0"><?php echo esc_html( $stat[1] ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"align":"center","textColor":"text-2","fontSize":"s","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
				<p class="has-text-align-center has-text-2-color has-text-color has-s-font-size" style="margin-top:0;margin-bottom:0"><?php echo esc_html( $stat[2] ); ?></p>
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

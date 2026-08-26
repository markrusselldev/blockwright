<?php
/**
 * Title: Layout • Cluster
 * Slug: blockwright/layout-cluster
 * Categories: blockwright, layout
 * Description: Neutral horizontal cluster layout using flex with wrap and spacing for buttons, links, or meta.
 * Inserter: true
 *
 * @package Blockwright
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"flex-start"}} -->
<div class="wp-block-group">
	<!-- wp:paragraph -->
	<p><?php esc_html_e( 'Cluster item one', 'blockwright' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph -->
	<p><?php esc_html_e( 'Cluster item two', 'blockwright' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph -->
	<p><?php esc_html_e( 'Cluster item three', 'blockwright' ); ?></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

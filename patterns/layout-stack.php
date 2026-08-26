<?php
/**
 * Title: Layout • Stack
 * Slug: blockwright/layout-stack
 * Categories: blockwright, layout
 * Description: Neutral vertical stack with consistent block gap. Use as a base wrapper for grouped content.
 * Inserter: true
 *
 * @package Blockwright
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:paragraph -->
	<p><?php esc_html_e( 'Stack item one', 'blockwright' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph -->
	<p><?php esc_html_e( 'Stack item two', 'blockwright' ); ?></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

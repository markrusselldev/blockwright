<?php
/**
 * Title: Section (Constrained)
 * Slug: blockwright/section-constrained
 * Categories: blockwright, layout
 * Description: Canonical constrained section wrapper with consistent blockGap spacing for general page building.
 * Inserter: true
 *
 * @package Blockwright
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:heading -->
	<h2 class="wp-block-heading"><?php esc_html_e( 'Section heading', 'blockwright' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph -->
	<p><?php esc_html_e( 'Section content goes here. Add paragraphs, lists, or other blocks as needed.', 'blockwright' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons -->
	<div class="wp-block-buttons">
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Learn more', 'blockwright' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->

<?php
/**
 * Title: Subsection (H3 Constrained)
 * Slug: blockwright/subsection-constrained
 * Categories: blockwright, layout
 * Description: Canonical H3 subsection wrapper for use inside a larger section. H3 is first child with blockGap-driven spacing.
 * Inserter: true
 *
 * @package Blockwright
 */

?>
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:heading {"level":3} -->
	<h3 class="wp-block-heading"><?php esc_html_e( 'Subsection heading', 'blockwright' ); ?></h3>
	<!-- /wp:heading -->

	<!-- wp:paragraph -->
	<p><?php esc_html_e( 'Subsection content goes here. This wrapper ensures consistent spacing via blockGap.', 'blockwright' ); ?></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

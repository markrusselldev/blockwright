<?php
/**
 * Title: Page: Sales
 * Slug: blockwright/page-sales
 * Categories: featured
 * Block Types: core/post-content
 * Post Types: page
 * Inserter: true
 * Description: A long-form sales page in the classic Problem–Agitate–Solution order - hero, the problem, agitation, your solution, benefits, social proof, the offer, a guarantee, objections (FAQ), and the close. Replace each section's placeholder with your own copy.
 *
 * @package Blockwright
 */
?>
<!-- wp:pattern {"slug":"blockwright/hero-centered"} /-->

<!-- wp:group {"metadata":{"name":"Problem"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">
	<!-- wp:heading {"textAlign":"center","level":2,"fontSize":"2xl"} -->
	<h2 class="wp-block-heading has-text-align-center has-2-xl-font-size"><?php esc_html_e( 'Name the problem your reader is living with', 'blockwright' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"align":"center","fontSize":"l"} -->
	<p class="has-text-align-center has-l-font-size"><?php esc_html_e( 'Describe the pain in concrete, specific terms, so the reader thinks "that is exactly my situation." Stick to one clear problem, not five.', 'blockwright' ); ?></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Agitation"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"}}},"backgroundColor":"surface-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-2-background-color has-background" style="padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">
	<!-- wp:heading {"textAlign":"center","level":2,"fontSize":"2xl"} -->
	<h2 class="wp-block-heading has-text-align-center has-2-xl-font-size"><?php esc_html_e( 'What it is costing them', 'blockwright' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"align":"center","fontSize":"l"} -->
	<p class="has-text-align-center has-l-font-size"><?php esc_html_e( 'Agitate: make the cost of leaving it unsolved vivid, the time, money, stress, or missed opportunity it keeps creating. Do not offer the solution yet.', 'blockwright' ); ?></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"blockwright/content-media"} /-->
<!-- wp:pattern {"slug":"blockwright/section-feature-grid"} /-->
<!-- wp:pattern {"slug":"blockwright/testimonials-grid"} /-->
<!-- wp:pattern {"slug":"blockwright/pricing-table"} /-->

<!-- wp:group {"metadata":{"name":"Guarantee"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"}},"border":{"top":{"color":"var:preset|color|divider","width":"var:custom|border|width|thin"},"bottom":{"color":"var:preset|color|divider","width":"var:custom|border|width|thin"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--divider);border-top-width:var(--wp--custom--border--width--thin);border-bottom-color:var(--wp--preset--color--divider);border-bottom-width:var(--wp--custom--border--width--thin);padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">
	<!-- wp:heading {"textAlign":"center","level":2,"fontSize":"2xl"} -->
	<h2 class="wp-block-heading has-text-align-center has-2-xl-font-size"><?php esc_html_e( 'Your risk-free guarantee', 'blockwright' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"align":"center","fontSize":"l"} -->
	<p class="has-text-align-center has-l-font-size"><?php esc_html_e( 'State exactly what you promise and what happens if you do not deliver. Removing the reader\'s risk here is often what tips the decision.', 'blockwright' ); ?></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"blockwright/faq"} /-->
<!-- wp:pattern {"slug":"blockwright/cta-centered"} /-->

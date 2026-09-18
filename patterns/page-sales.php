<?php
/**
 * Title: Page: Sales
 * Slug: blockwright/page-sales
 * Categories: featured
 * Block Types: core/post-content
 * Post Types: page
 * Inserter: true
 * Description: A long-form sales page in the classic Problem-Agitate-Solution order - hero, the problem, agitation, your solution, benefits, social proof, the offer, a guarantee, objections (FAQ), and the close. Replace each section's placeholder with your own copy.
 *
 * @package Blockwright
 */
?>
<!-- wp:pattern {"slug":"blockwright/hero-centered"} /-->

<!-- wp:group {"metadata":{"name":"Problem"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">
	<!-- wp:heading {"textAlign":"center","level":2,"fontSize":"2xl"} -->
	<h2 class="wp-block-heading has-text-align-center has-2-xl-font-size"><?php esc_html_e( 'The problem', 'blockwright' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"align":"center","fontSize":"l"} -->
	<p class="has-text-align-center has-l-font-size"><?php esc_html_e( 'You put in the work, but the results keep falling short of what you know is possible.', 'blockwright' ); ?></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Agitation"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"}}},"backgroundColor":"surface-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-2-background-color has-background" style="padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">
	<!-- wp:heading {"textAlign":"center","level":2,"fontSize":"2xl"} -->
	<h2 class="wp-block-heading has-text-align-center has-2-xl-font-size"><?php esc_html_e( 'What it is costing you', 'blockwright' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"align":"center","fontSize":"l"} -->
	<p class="has-text-align-center has-l-font-size"><?php esc_html_e( 'Every month it goes unsolved is time, money, and momentum you do not get back, and the gap only widens.', 'blockwright' ); ?></p>
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
	<p class="has-text-align-center has-l-font-size"><?php esc_html_e( 'Try it for 30 days. If it is not the right fit, we will refund you in full, with no forms and no hassle.', 'blockwright' ); ?></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"blockwright/faq"} /-->
<!-- wp:pattern {"slug":"blockwright/cta-centered"} /-->

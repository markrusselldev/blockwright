<?php
/**
 * Title: About Intro
 * Slug: blockwright/about-intro
 * Categories: about, featured
 * Keywords: about, intro, mission, who we are, statement, lead
 * Block Types: core/group
 * Inserter: true
 * Description: A centered intro block - eyebrow, headline, and a lead paragraph. Works as an about, mission, or section opener.
 *
 * @package Blockwright
 */
?>
<!-- wp:group {"metadata":{"name":"About Intro"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"}}},"backgroundColor":"surface-1","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-1-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained","contentSize":"680px"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"align":"center","className":"is-style-eyebrow","fontSize":"s"} -->
		<p class="has-text-align-center is-style-eyebrow has-s-font-size"><?php esc_html_e( 'Who we are', 'blockwright' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"center","level":2,"fontSize":"xxl"} -->
		<h2 class="wp-block-heading has-text-align-center has-xxl-font-size"><?php esc_html_e( 'A short statement of what you do and who it\'s for', 'blockwright' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","fontSize":"l"} -->
		<p class="has-text-align-center has-l-font-size"><?php esc_html_e( 'Give the reader the essentials in two or three sentences - what you offer, who it\'s for, and why it matters. Keep it plain and warm; this is the block people read to decide whether to keep going.', 'blockwright' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
		<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--small)">
			<!-- wp:button {"className":"is-style-fill"} -->
			<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Learn more', 'blockwright' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->

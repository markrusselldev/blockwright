<?php
/**
 * Title: Steps • Process
 * Slug: blockwright/steps-process
 * Categories: featured, columns
 * Keywords: steps, process, how it works, first visit, timeline, numbered
 * Block Types: core/columns
 * Inserter: true
 * Description: Numbered steps for a "how it works", "your first visit", or "our process" section.
 *
 * @package Blockwright
 */
?>
<!-- wp:group {"metadata":{"name":"Steps Process"},"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|large","margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"}}},"backgroundColor":"surface-1","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-1-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">

	<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"className":"is-style-eyebrow","fontSize":"s"} -->
		<p class="is-style-eyebrow has-s-font-size"><?php esc_html_e( 'Our process', 'blockwright' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":2,"fontSize":"xl"} -->
		<h2 class="wp-block-heading has-xl-font-size"><?php esc_html_e( 'How it works', 'blockwright' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"textColor":"text-2"} -->
		<p class="has-text-2-color has-text-color"><?php esc_html_e( 'A short line introducing your process.', 'blockwright' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|large","left":"var:preset|spacing|x-large"}}}} -->
	<div class="wp-block-columns alignwide">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","lineHeight":"1"}},"textColor":"link","fontSize":"xxl"} -->
			<p class="has-link-color has-text-color has-xxl-font-size" style="font-weight:700;line-height:1">01</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3,"fontSize":"l"} -->
			<h3 class="wp-block-heading has-l-font-size"><?php esc_html_e( 'Get in touch', 'blockwright' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p><?php esc_html_e( 'Describe the first step in a sentence or two. Say what the reader does and what happens next.', 'blockwright' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","lineHeight":"1"}},"textColor":"link","fontSize":"xxl"} -->
			<p class="has-link-color has-text-color has-xxl-font-size" style="font-weight:700;line-height:1">02</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3,"fontSize":"l"} -->
			<h3 class="wp-block-heading has-l-font-size"><?php esc_html_e( 'We make a plan', 'blockwright' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p><?php esc_html_e( 'Describe the second step. Keep each one parallel in length so the row reads evenly.', 'blockwright' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","lineHeight":"1"}},"textColor":"link","fontSize":"xxl"} -->
			<p class="has-link-color has-text-color has-xxl-font-size" style="font-weight:700;line-height:1">03</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3,"fontSize":"l"} -->
			<h3 class="wp-block-heading has-l-font-size"><?php esc_html_e( 'Get started', 'blockwright' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p><?php esc_html_e( 'Describe the final step and the outcome the reader can expect once it\'s done.', 'blockwright' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","lineHeight":"1"}},"textColor":"link","fontSize":"xxl"} -->
			<p class="has-link-color has-text-color has-xxl-font-size" style="font-weight:700;line-height:1">04</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3,"fontSize":"l"} -->
			<h3 class="wp-block-heading has-l-font-size"><?php esc_html_e( 'And you\'re set', 'blockwright' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p><?php esc_html_e( 'Add a fourth step here, or delete this column if your process has three.', 'blockwright' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->

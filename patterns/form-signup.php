<?php
/**
 * Title: Form • Email Signup
 * Slug: blockwright/form-signup
 * Categories: contact, call-to-action
 * Keywords: form, email, signup, subscribe, newsletter, squeeze, lead, capture
 * Block Types: core/columns
 * Inserter: true
 * Description: A compact email-capture (squeeze) form - heading, one line, email field, submit. Style-only: connect delivery with a form/newsletter plugin (the bare form does not send on its own).
 *
 * @package Blockwright
 */
?>
<!-- wp:group {"metadata":{"name":"Email Signup"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"}}},"backgroundColor":"surface-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-2-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained","contentSize":"560px"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"textAlign":"center","level":2,"fontSize":"xl"} -->
		<h2 class="wp-block-heading has-text-align-center has-xl-font-size"><?php esc_html_e( 'Get updates in your inbox', 'blockwright' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","fontSize":"l"} -->
		<p class="has-text-align-center has-l-font-size"><?php esc_html_e( 'One short line on what subscribers get and how often. No spam.', 'blockwright' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:html -->
		<form method="post" action="" style="display:flex;gap:var(--wp--preset--spacing--x-small);flex-wrap:wrap;justify-content:center;margin-top:var(--wp--preset--spacing--x-small)">
			<input type="email" name="email" required placeholder="you@example.com" aria-label="Email address" style="flex:1 1 var(--wp--custom--form--field-min);max-width:var(--wp--custom--form--field-max)">
			<button type="submit" class="wp-element-button"><?php esc_html_e( 'Subscribe', 'blockwright' ); ?></button>
		</form>
		<!-- /wp:html -->
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->

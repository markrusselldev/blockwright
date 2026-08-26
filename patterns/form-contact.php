<?php
/**
 * Title: Form • Contact
 * Slug: blockwright/form-contact
 * Categories: contact
 * Keywords: form, contact, message, name, email, enquiry, get in touch
 * Block Types: core/columns
 * Inserter: true
 * Description: A simple name / email / message contact form. Style-only: connect delivery with a form plugin (the bare form does not send on its own).
 *
 * @package Blockwright
 */
?>
<!-- wp:group {"metadata":{"name":"Contact Form"},"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|large","margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"}}},"backgroundColor":"surface-1","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-1-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained","contentSize":"600px"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em","fontWeight":"600"}},"textColor":"text-2","fontSize":"s"} -->
		<p class="has-text-2-color has-text-color has-s-font-size" style="letter-spacing:0.08em;text-transform:uppercase;font-weight:600"><?php esc_html_e( 'Contact', 'blockwright' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":2,"fontSize":"xl"} -->
		<h2 class="wp-block-heading has-xl-font-size"><?php esc_html_e( 'Send us a message', 'blockwright' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:html -->
		<form method="post" action="" style="display:grid;gap:var(--wp--preset--spacing--small);max-width:var(--wp--custom--form--max-width)">
			<input type="text" name="name" required placeholder="Your name" aria-label="Your name">
			<input type="email" name="email" required placeholder="you@example.com" aria-label="Email address">
			<textarea name="message" rows="5" required placeholder="How can we help?" aria-label="Message"></textarea>
			<button type="submit" class="wp-element-button" style="justify-self:start"><?php esc_html_e( 'Send message', 'blockwright' ); ?></button>
		</form>
		<!-- /wp:html -->
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->

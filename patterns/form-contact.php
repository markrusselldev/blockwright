<?php
/**
 * Title: Form • Contact
 * Slug: blockwright/form-contact
 * Categories: contact
 * Keywords: form, contact, message, name, email, enquiry, get in touch
 * Inserter: true
 * Description: A simple name / email / message contact form. Style-only: connect delivery with a form plugin (the bare form does not send on its own).
 *
 * @package Blockwright
 */

$name_id    = wp_unique_id( 'bw-form-name-' );
$email_id   = wp_unique_id( 'bw-form-email-' );
$message_id = wp_unique_id( 'bw-form-message-' );
?>
<!-- wp:group {"metadata":{"name":"<?php esc_attr_e( 'Contact Form', 'blockwright' ); ?>"},"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|large","margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"}}},"backgroundColor":"surface-1","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-1-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained","contentSize":"600px"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"className":"is-style-eyebrow","fontSize":"s"} -->
		<p class="is-style-eyebrow has-s-font-size"><?php esc_html_e( 'Contact', 'blockwright' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":2,"fontSize":"xl"} -->
		<h2 class="wp-block-heading has-xl-font-size"><?php esc_html_e( 'Send us a message', 'blockwright' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:html -->
		<form method="post" action="" style="display:grid;gap:var(--wp--preset--spacing--small)">
			<div style="display:grid;gap:var(--wp--preset--spacing--xx-small)">
				<label for="<?php echo esc_attr( $name_id ); ?>" style="font-size:var(--wp--preset--font-size--s)"><?php esc_html_e( 'Your name', 'blockwright' ); ?></label>
				<input id="<?php echo esc_attr( $name_id ); ?>" type="text" name="your-name" required>
			</div>
			<div style="display:grid;gap:var(--wp--preset--spacing--xx-small)">
				<label for="<?php echo esc_attr( $email_id ); ?>" style="font-size:var(--wp--preset--font-size--s)"><?php esc_html_e( 'Email address', 'blockwright' ); ?></label>
				<input id="<?php echo esc_attr( $email_id ); ?>" type="email" name="email" required>
			</div>
			<div style="display:grid;gap:var(--wp--preset--spacing--xx-small)">
				<label for="<?php echo esc_attr( $message_id ); ?>" style="font-size:var(--wp--preset--font-size--s)"><?php esc_html_e( 'How can we help?', 'blockwright' ); ?></label>
				<textarea id="<?php echo esc_attr( $message_id ); ?>" name="message" rows="5" required></textarea>
			</div>
			<button type="submit" class="wp-element-button" style="justify-self:start"><?php esc_html_e( 'Send message', 'blockwright' ); ?></button>
		</form>
		<!-- /wp:html -->
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->

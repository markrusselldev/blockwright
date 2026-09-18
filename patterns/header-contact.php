<?php
/**
 * Title: Header: Contact
 * Slug: blockwright/header-contact
 * Categories: header
 * Block Types: core/template-part/header
 * Viewport Width: 1376
 * Description: Header for service businesses - branding and navigation with a phone number and a call-to-action button. Replace the placeholder phone and button link with your own.
 *
 * Branding (Site Logo + Site Title) on the left; navigation, a tel: phone link, and a
 * primary (is-style-fill) button on the right. Width follows the site layout (alignwide
 * inner); set Position -> Sticky on the outer group to pin it. The phone and button are
 * placeholders - edit them with your real number and link.
 */
?>
<!-- wp:group {"metadata":{"name":"Header: Contact"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}},"border":{"bottom":{"color":"var:preset|color|divider","width":"var:custom|border|width|thin"}}},"backgroundColor":"surface-1","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-1-background-color has-background" style="border-bottom-color:var(--wp--preset--color--divider);border-bottom-width:var(--wp--custom--border--width--thin);padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)">

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide">

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group">
<!-- wp:site-logo {"width":60} /-->
<!-- wp:site-title {"level":0,"isLink":true} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center","justifyContent":"right"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"className":"bw-call","fontSize":"m","style":{"typography":{"fontWeight":"600"}}} -->
<p class="bw-call has-m-font-size" style="font-weight:600"><a href="tel:+15555550100"><?php esc_html_e( '(555) 555-0100', 'blockwright' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Get in touch', 'blockwright' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->

<!-- wp:navigation {"overlayMenu":"mobile","overlayBackgroundColor":"surface-1","overlayTextColor":"text-1","fontSize":"m","layout":{"type":"flex","justifyContent":"right"}} /-->
</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

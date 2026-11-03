<?php
/**
 * Title: Navigation Overlay: Contact
 * Slug: blockwright/navigation-overlay-contact
 * Categories: navigation
 * Keywords: mobile menu, overlay, navigation, contact, call to action
 * Block Types: core/template-part/navigation-overlay
 * Description: Mobile menu with the site navigation, a tap-to-call phone link and a call-to-action button. Replace the placeholder phone and button link with your own.
 *
 * The menu that opens from the Header: Contact menu button. On phones that header hides its
 * button to make room for the site name, so the button and the full phone number live here,
 * above the menu links so a long menu cannot push them off screen.
 * The inner navigation is set to never collapse, so the overlay cannot open a second overlay.
 */
?>
<!-- wp:group {"metadata":{"name":"<?php esc_attr_e( 'Navigation Overlay', 'blockwright' ); ?>"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"dimensions":{"minHeight":"100vh"}},"backgroundColor":"surface-1","textColor":"text-1","layout":{"type":"default"}} -->
<div class="wp-block-group has-text-1-color has-surface-1-background-color has-text-color has-background" style="min-height:100vh;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group"><!-- wp:navigation-overlay-close /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group">

<!-- wp:paragraph {"fontSize":"l","style":{"typography":{"fontWeight":"600"}}} -->
<p class="has-l-font-size" style="font-weight:600"><a href="tel:+15555550100"><?php esc_html_e( '(555) 555-0100', 'blockwright' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Get in touch', 'blockwright' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->

<!-- wp:navigation {"ariaLabel":"<?php esc_attr_e( 'Mobile', 'blockwright' ); ?>","overlayMenu":"never","showSubmenuIcon":false,"submenuVisibility":"always","fontSize":"l","layout":{"type":"flex","orientation":"vertical"}} /-->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

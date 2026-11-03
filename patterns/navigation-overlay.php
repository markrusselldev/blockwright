<?php
/**
 * Title: Navigation Overlay
 * Slug: blockwright/navigation-overlay
 * Categories: navigation
 * Keywords: mobile menu, overlay, navigation
 * Block Types: core/template-part/navigation-overlay
 * Description: Mobile menu with the site navigation, opened from the header's menu button.
 *
 * The menu that opens from the Header and Header: Centered menu button. The inner navigation is
 * set to never collapse, so the overlay cannot open a second overlay.
 */
?>
<!-- wp:group {"metadata":{"name":"<?php esc_attr_e( 'Navigation Overlay', 'blockwright' ); ?>"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"dimensions":{"minHeight":"100vh"}},"backgroundColor":"surface-1","textColor":"text-1","layout":{"type":"default"}} -->
<div class="wp-block-group has-text-1-color has-surface-1-background-color has-text-color has-background" style="min-height:100vh;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group"><!-- wp:navigation-overlay-close /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group">

<!-- wp:navigation {"ariaLabel":"<?php esc_attr_e( 'Mobile', 'blockwright' ); ?>","overlayMenu":"never","showSubmenuIcon":false,"submenuVisibility":"always","fontSize":"l","layout":{"type":"flex","orientation":"vertical"}} /-->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

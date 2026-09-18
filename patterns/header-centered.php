<?php
/**
 * Title: Header: Centered
 * Slug: blockwright/header-centered
 * Categories: header
 * Block Types: core/template-part/header
 * Viewport Width: 1376
 * Description: Centered header with edge-to-edge background, content constrained to wideSize.
 *
 * Full-bleed background; content is alignwide (tracks wideSize) and centered in a
 * vertical flex stack. Width follows the site layout - select the inner group and
 * choose Full width for edge-to-edge content. Set Position -> Sticky on the outer
 * group to pin it. Sibling variant: header (logo left / nav right).
 */
?>
<!-- wp:group {"metadata":{"name":"Header Centered"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}},"border":{"bottom":{"color":"var:preset|color|divider","width":"var:custom|border|width|thin"}}},"backgroundColor":"surface-1","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-1-background-color has-background" style="border-bottom-color:var(--wp--preset--color--divider);border-bottom-width:var(--wp--custom--border--width--thin);padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)">

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group alignwide">

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group">
<!-- wp:site-logo {"width":60} /-->
<!-- wp:site-title {"level":0,"isLink":true,"textAlign":"center"} /-->
</div>
<!-- /wp:group -->

<!-- wp:navigation {"overlayBackgroundColor":"surface-1","overlayTextColor":"text-1","layout":{"type":"flex","justifyContent":"center"}} /-->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

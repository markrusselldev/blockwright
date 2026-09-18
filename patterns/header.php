<?php
/**
 * Title: Header
 * Slug: blockwright/header
 * Categories: header
 * Block Types: core/template-part/header
 * Viewport Width: 1376
 * Description: Default header - logo/title left, navigation right. Full-bleed background; content aligned to wideSize so it follows the site's content width.
 *
 * WIDTH follows the site layout, not the variant: the outer group is alignfull
 * (edge-to-edge background) and the inner row is alignwide (tracks wideSize). To make
 * the content edge-to-edge, select the inner group and choose Full width. To pin the
 * header on scroll, select the outer group and set Position -> Sticky (enabled via
 * appearanceTools) -- sticky is a toggle, not a separate variant.
 */
?>
<!-- wp:group {"metadata":{"name":"Header"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}},"border":{"bottom":{"color":"var:preset|color|divider","width":"var:custom|border|width|thin"}}},"backgroundColor":"surface-1","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-1-background-color has-background" style="border-bottom-color:var(--wp--preset--color--divider);border-bottom-width:var(--wp--custom--border--width--thin);padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)">

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide">

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group">
<!-- wp:site-logo {"width":60} /-->
<!-- wp:site-title {"level":0,"isLink":true} /-->
</div>
<!-- /wp:group -->

<!-- wp:navigation {"overlayMenu":"mobile","overlayBackgroundColor":"surface-1","overlayTextColor":"text-1","fontSize":"m","layout":{"type":"flex","justifyContent":"right"}} /-->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

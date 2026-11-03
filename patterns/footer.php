<?php
/**
 * Title: Footer
 * Slug: blockwright/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Default footer - compact two-column row with site title, credits, links, and social icons.
 *
 * Full-bleed background bar with content held to wideSize, so it aligns with the
 * standard header. Width follows the site layout - select the inner group and choose
 * Full width for edge-to-edge content. Sibling variants: footer-columns, footer-centered.
 */
?>
<!-- wp:group {"metadata":{"name":"<?php esc_attr_e( 'Footer', 'blockwright' ); ?>"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}},"border":{"top":{"color":"var:preset|color|divider","width":"var:custom|border|width|thin"}}},"backgroundColor":"surface-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-2-background-color has-background" style="border-top-color:var(--wp--preset--color--divider);border-top-width:var(--wp--custom--border--width--thin);padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large)">

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-columns alignwide">

<!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%">

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small","margin":{"bottom":"var:preset|spacing|x-small"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--x-small)">
<!-- wp:site-logo {"width":40} /-->
<!-- wp:site-title {"level":0,"isLink":true,"style":{"typography":{"fontSize":"var:preset|font-size|m"}}} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xxx-small"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"blockwright/copyright-year"}}},"style":{"typography":{"fontSize":"var:preset|font-size|s"}},"textColor":"text-2"} -->
<p class="has-text-2-color has-text-color" style="font-size:var(--wp--preset--font-size--s)">© <?php echo esc_html( date_i18n( 'Y' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|s"}},"textColor":"text-2"} -->
<p class="has-text-2-color has-text-color" style="font-size:var(--wp--preset--font-size--s)">· <?php /* translators: %s: a link to WordPress.org. */ printf( esc_html__( 'Proudly powered by %s', 'blockwright' ), '<a href="https://wordpress.org" rel="nofollow">WordPress</a>' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

</div>
<!-- /wp:column -->

<!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%">

<!-- wp:paragraph {"className":"bw-text-end","style":{"typography":{"fontSize":"var:preset|font-size|s"}},"textColor":"text-2"} -->
<p class="bw-text-end has-text-2-color has-text-color" style="font-size:var(--wp--preset--font-size--s)"><a href="#"><?php esc_html_e( 'Privacy', 'blockwright' ); ?></a> · <a href="#"><?php esc_html_e( 'Terms', 'blockwright' ); ?></a> · <a href="#"><?php esc_html_e( 'Contact', 'blockwright' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"text-2","iconColorValue":"var(--wp--preset--color--text-2)","size":"has-small-icon-size","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"right"}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only">
<!-- wp:social-link {"url":"#","service":"x"} /-->
<!-- wp:social-link {"url":"#","service":"github"} /-->
<!-- wp:social-link {"url":"#","service":"linkedin"} /-->
</ul>
<!-- /wp:social-links -->

</div>
<!-- /wp:column -->

</div>
<!-- /wp:columns -->

</div>
<!-- /wp:group -->

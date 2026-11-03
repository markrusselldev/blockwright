<?php
/**
 * Title: Footer: Centered
 * Slug: blockwright/footer-centered
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Centered footer with stacked site title, links, credits, and social icons.
 *
 * Constrained layout (no alignfull): content and background stay within contentSize,
 * in a centered vertical flex stack. Sibling variants: footer, footer-columns.
 */
?>
<!-- wp:group {"metadata":{"name":"<?php esc_attr_e( 'Footer Centered', 'blockwright' ); ?>"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"top":{"color":"var:preset|color|divider","width":"var:custom|border|width|thin"}}},"backgroundColor":"surface-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-surface-2-background-color has-background" style="border-top-color:var(--wp--preset--color--divider);border-top-width:var(--wp--custom--border--width--thin);padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)">

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group">

<!-- wp:site-logo {"width":48,"align":"center"} /-->

<!-- wp:site-title {"level":0,"isLink":true,"textAlign":"center","style":{"typography":{"fontSize":"var:preset|font-size|m"}}} /-->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var:preset|font-size|s"}},"textColor":"text-2"} -->
<p class="has-text-align-center has-text-2-color has-text-color" style="font-size:var(--wp--preset--font-size--s)"><a href="#"><?php esc_html_e( 'Privacy', 'blockwright' ); ?></a> · <a href="#"><?php esc_html_e( 'Terms', 'blockwright' ); ?></a> · <a href="#"><?php esc_html_e( 'Contact', 'blockwright' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xxx-small"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"blockwright/copyright-year"}}},"align":"center","style":{"typography":{"fontSize":"var:preset|font-size|s"}},"textColor":"text-2"} -->
<p class="has-text-align-center has-text-2-color has-text-color" style="font-size:var(--wp--preset--font-size--s)">© <?php echo esc_html( date_i18n( 'Y' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var:preset|font-size|s"}},"textColor":"text-2"} -->
<p class="has-text-align-center has-text-2-color has-text-color" style="font-size:var(--wp--preset--font-size--s)">· <?php /* translators: %s: a link to WordPress.org. */ printf( esc_html__( 'Proudly powered by %s', 'blockwright' ), '<a href="https://wordpress.org" rel="nofollow">WordPress</a>' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:social-links {"iconColor":"text-2","iconColorValue":"var(--wp--preset--color--text-2)","size":"has-small-icon-size","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only">
<!-- wp:social-link {"url":"#","service":"x"} /-->
<!-- wp:social-link {"url":"#","service":"github"} /-->
<!-- wp:social-link {"url":"#","service":"linkedin"} /-->
</ul>
<!-- /wp:social-links -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

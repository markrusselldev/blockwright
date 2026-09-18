<?php
/**
 * Title: Footer: Columns
 * Slug: blockwright/footer-columns
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Four-column footer with organized links and social icons.
 *
 * Four-column grid of category headings and link lists over a credits/social row.
 * The most structured footer. Sibling variants: footer, footer-centered.
 */
?>
<!-- wp:group {"metadata":{"name":"Footer Columns"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"}},"border":{"top":{"color":"var:preset|color|divider","width":"var:custom|border|width|thin"}}},"backgroundColor":"surface-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-2-background-color has-background" style="border-top-color:var(--wp--preset--color--divider);border-top-width:var(--wp--custom--border--width--thin);padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|x-small","margin":{"bottom":"var:preset|spacing|large"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--large)">
<!-- wp:site-logo {"width":40} /-->
<!-- wp:site-title {"level":0,"isLink":true,"style":{"typography":{"fontSize":"var:preset|font-size|m"}}} /-->
</div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-columns alignwide">

<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:heading {"level":3,"fontSize":"s"} -->
<h3 class="wp-block-heading has-s-font-size"><?php esc_html_e( 'Company', 'blockwright' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"s"} -->
<p class="has-s-font-size"><a href="#"><?php esc_html_e( 'About', 'blockwright' ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"s"} -->
<p class="has-s-font-size"><a href="#"><?php esc_html_e( 'Careers', 'blockwright' ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"s"} -->
<p class="has-s-font-size"><a href="#"><?php esc_html_e( 'Contact', 'blockwright' ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:heading {"level":3,"fontSize":"s"} -->
<h3 class="wp-block-heading has-s-font-size"><?php esc_html_e( 'Resources', 'blockwright' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"s"} -->
<p class="has-s-font-size"><a href="#"><?php esc_html_e( 'Documentation', 'blockwright' ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"s"} -->
<p class="has-s-font-size"><a href="#"><?php esc_html_e( 'Blog', 'blockwright' ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"s"} -->
<p class="has-s-font-size"><a href="#"><?php esc_html_e( 'Support', 'blockwright' ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:heading {"level":3,"fontSize":"s"} -->
<h3 class="wp-block-heading has-s-font-size"><?php esc_html_e( 'Product', 'blockwright' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"s"} -->
<p class="has-s-font-size"><a href="#"><?php esc_html_e( 'Features', 'blockwright' ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"s"} -->
<p class="has-s-font-size"><a href="#"><?php esc_html_e( 'Pricing', 'blockwright' ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"s"} -->
<p class="has-s-font-size"><a href="#"><?php esc_html_e( 'Changelog', 'blockwright' ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:heading {"level":3,"fontSize":"s"} -->
<h3 class="wp-block-heading has-s-font-size"><?php esc_html_e( 'Legal', 'blockwright' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"s"} -->
<p class="has-s-font-size"><a href="#"><?php esc_html_e( 'Privacy Policy', 'blockwright' ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"s"} -->
<p class="has-s-font-size"><a href="#"><?php esc_html_e( 'Terms of Service', 'blockwright' ); ?></a></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"fontSize":"s"} -->
<p class="has-s-font-size"><a href="#"><?php esc_html_e( 'Cookies', 'blockwright' ); ?></a></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->

</div>
<!-- /wp:columns -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--medium)">
<!-- wp:paragraph {"fontSize":"s","textColor":"text-2"} -->
<p class="has-text-2-color has-text-color has-s-font-size">© <?php echo esc_html( date_i18n( 'Y' ) ); ?> · <?php esc_html_e( 'Proudly powered by', 'blockwright' ); ?> <a href="https://wordpress.org" rel="nofollow">WordPress</a></p>
<!-- /wp:paragraph -->
<!-- wp:social-links {"iconColor":"text-2","iconColorValue":"var(--wp--preset--color--text-2)","className":"is-style-logos-only"} -->
<ul class="wp-block-social-links has-icon-color is-style-logos-only">
<!-- wp:social-link {"url":"#","service":"x"} /-->
<!-- wp:social-link {"url":"#","service":"github"} /-->
<!-- wp:social-link {"url":"#","service":"linkedin"} /-->
</ul>
<!-- /wp:social-links -->
</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

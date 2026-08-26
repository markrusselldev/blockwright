<?php
/**
 * Title: Announcement Bar
 * Slug: blockwright/announcement-bar
 * Categories: call-to-action, featured
 * Keywords: announcement, notice, promo, banner, offer, bar, sale, top
 * Inserter: true
 * Description: A slim full-width bar for the top of the page - a short announcement or promotion with a link. Drop it above the header to run site-wide.
 *
 * @package Blockwright
 */

?>
<!-- wp:group {"metadata":{"name":"Announcement Bar"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"backgroundColor":"surface-3","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-3-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small)">

	<!-- wp:paragraph {"align":"center","fontSize":"s","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
	<p class="has-text-align-center has-s-font-size" style="margin-top:0;margin-bottom:0"><?php esc_html_e( 'Now booking new projects for next quarter.', 'blockwright' ); ?> <a href="#"><?php esc_html_e( 'Get in touch', 'blockwright' ); ?></a></p>
	<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

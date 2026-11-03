<?php
/**
 * Title: Keep Reading
 * Slug: blockwright/related-posts
 * Categories: query, posts
 * Keywords: related, more posts, keep reading, recent
 * Inserter: true
 * Description: A compact "Keep reading" band of three recent posts for the end of a single post.
 *
 * @package Blockwright
 */

?>
<!-- wp:group {"metadata":{"name":"<?php esc_attr_e( 'Keep Reading', 'blockwright' ); ?>"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"}}},"backgroundColor":"surface-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-2-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">

	<!-- wp:heading {"level":2,"fontSize":"xl"} -->
	<h2 class="wp-block-heading has-xl-font-size"><?php esc_html_e( 'Keep reading', 'blockwright' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:query {"query":{"perPage":3,"postType":"post","sticky":"ignore"}} -->
	<div class="wp-block-query">
		<!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
		<!-- wp:group -->
		<div class="wp-block-group">
			<!-- wp:post-featured-image {"isLink":true} /-->
			<!-- wp:post-title {"isLink":true,"level":3} /-->
			<!-- wp:post-date {"isLink":true,"textColor":"text-2","fontSize":"xs"} /-->
		</div>
		<!-- /wp:group -->
		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->

</div>
<!-- /wp:group -->

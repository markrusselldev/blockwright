<?php
/**
 * Title: Post Summary
 * Slug: blockwright/post-summary
 * Categories: blockwright, posts
 * Block Types: core/query, core/post-template
 * Description: Standard post summary for archives and query loops. Use inside a post-template block.
 * Inserter: true
 *
 * @package Blockwright
 */

?>
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:post-featured-image {"isLink":true} /-->
	<!-- wp:post-title {"isLink":true,"level":2} /-->
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"},"typography":{"textTransform":"uppercase","letterSpacing":"0.06em"}},"textColor":"text-2","fontSize":"xs","layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
	<div class="wp-block-group has-text-2-color has-text-color has-xs-font-size" style="letter-spacing:0.06em;text-transform:uppercase">
		<!-- wp:post-terms {"term":"category"} /-->
		<!-- wp:post-date {"isLink":true} /-->
		<!-- wp:post-author {"showAvatar":false,"showBio":false,"isLink":true} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:post-excerpt {"moreText":"Read more"} /-->
</div>
<!-- /wp:group -->

<?php
/**
 * Title: Post Meta • Standard
 * Slug: blockwright/post-meta
 * Categories: blockwright
 * Inserter: true
 * Description: Author, date, and categories below titles. Icon-styled variant available via block styles.
 *
 * @package Blockwright
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"},"typography":{"textTransform":"uppercase","letterSpacing":"0.06em"}},"textColor":"text-2","fontSize":"xs","layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group has-text-2-color has-text-color has-xs-font-size" style="letter-spacing:0.06em;text-transform:uppercase">
	<!-- wp:post-terms {"term":"category"} /-->
	<!-- wp:post-date {"isLink":true} /-->
	<!-- wp:post-author {"showAvatar":false,"showBio":false,"isLink":true} /-->
</div>
<!-- /wp:group -->

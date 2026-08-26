<?php
/**
 * Title: Author Bio
 * Slug: blockwright/author-bio
 * Categories: blockwright, posts
 * Keywords: author, bio, byline, writer, about
 * Inserter: true
 * Description: An end-of-post author box - avatar, linked name, and bio, filled automatically from the post author's profile. Drop it at the bottom of the single-post template.
 *
 * @package Blockwright
 */

?>
<!-- wp:group {"metadata":{"name":"Author Bio"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"},"border":{"top":{"color":"var:preset|color|divider","width":"var:custom|border|width|thin"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--divider);border-top-width:var(--wp--custom--border--width--thin);padding-top:var(--wp--preset--spacing--medium)">
	<!-- wp:avatar {"size":56,"style":{"border":{"radius":"50%"}}} /-->

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group">
		<!-- wp:post-author-name {"isLink":true,"fontSize":"m"} /-->
		<!-- wp:post-author-biography {"textColor":"text-2","fontSize":"s"} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

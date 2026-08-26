<?php
/**
 * Title: Archive • Feature Grid
 * Slug: blockwright/archive-feature-grid
 * Categories: query, posts
 * Inserter: true
 * Description: Blog or archive layout - a query loop showing recent posts in a feature grid.
 *
 * @package Blockwright
 */

?>
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:query {"query":{"perPage":6,"postType":"post"}} -->
	<div class="wp-block-query">
		<!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
		<!-- wp:group -->
		<div class="wp-block-group">
			<!-- wp:post-featured-image {"isLink":true} /-->
			<!-- wp:post-title {"isLink":true,"level":3} /-->
			<!-- wp:post-excerpt {"moreText":"Read more"} /-->
		</div>
		<!-- /wp:group -->
		<!-- /wp:post-template -->

		<!-- wp:query-pagination /-->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->

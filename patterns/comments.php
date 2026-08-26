<?php
/**
 * Title: Comments
 * Slug: blockwright/comments
 * Categories: blockwright
 * Block Types: core/comments
 * Description: Comments section with title, threaded list, pagination, and form. Use on posts where discussion is enabled.
 * Inserter: true
 *
 * @package Blockwright
 */

?>
<!-- wp:comments -->
<div class="wp-block-comments">
	<!-- wp:comments-title {"level":2,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|medium"}}}} /-->

	<!-- wp:comment-template -->
		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|x-small"},"border":{"top":{"color":"var:preset|color|divider","width":"var:custom|border|width|thin"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--divider);border-top-width:var(--wp--custom--border--width--thin);padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)">

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
			<div class="wp-block-group">
				<!-- wp:avatar {"size":40,"style":{"border":{"radius":"50%"}}} /-->

				<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:comment-author-name {"fontSize":"s","style":{"typography":{"fontWeight":"600"}}} /-->

					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"},"typography":{"textTransform":"uppercase","letterSpacing":"0.06em"}},"textColor":"text-2","fontSize":"xs","layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
					<div class="wp-block-group has-text-2-color has-text-color has-xs-font-size" style="letter-spacing:0.06em;text-transform:uppercase">
						<!-- wp:comment-date /-->
						<!-- wp:comment-edit-link /-->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:comment-content /-->

			<!-- wp:comment-reply-link {"fontSize":"s"} /-->
		</div>
		<!-- /wp:group -->
	<!-- /wp:comment-template -->

	<!-- wp:comments-pagination {"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
		<!-- wp:comments-pagination-previous /-->
		<!-- wp:comments-pagination-numbers /-->
		<!-- wp:comments-pagination-next /-->
	<!-- /wp:comments-pagination -->

	<!-- wp:post-comments-form {"style":{"spacing":{"margin":{"top":"var:preset|spacing|large"}}}} /-->
</div>
<!-- /wp:comments -->

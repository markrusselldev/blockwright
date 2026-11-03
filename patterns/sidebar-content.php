<?php
/**
 * Title: Sidebar Content
 * Slug: blockwright/sidebar-content
 * Categories: blockwright
 * Description: The search box, categories, recent posts and archives in the sidebar template part.
 * Inserter: false
 *
 * @package Blockwright
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)">
	<!-- wp:search {"label":"<?php echo esc_attr_x( 'Search', 'search form label', 'blockwright' ); ?>","showLabel":false,"placeholder":"<?php echo esc_attr_x( 'Search...', 'sidebar search input placeholder', 'blockwright' ); ?>","buttonText":"<?php echo esc_attr_x( 'Search', 'search button text', 'blockwright' ); ?>","buttonUseIcon":true} /-->

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"fontSize":"m","style":{"typography":{"fontWeight":"600"}}} -->
		<h2 class="wp-block-heading has-m-font-size" style="font-weight:600"><?php esc_html_e( 'Categories', 'blockwright' ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:categories {"showPostCounts":true,"style":{"typography":{"fontSize":"var:preset|font-size|s"}}} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"fontSize":"m","style":{"typography":{"fontWeight":"600"}}} -->
		<h2 class="wp-block-heading has-m-font-size" style="font-weight:600"><?php esc_html_e( 'Recent Posts', 'blockwright' ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:latest-posts {"postsToShow":5,"displayPostDate":true,"style":{"typography":{"fontSize":"var:preset|font-size|s"}}} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"fontSize":"m","style":{"typography":{"fontWeight":"600"}}} -->
		<h2 class="wp-block-heading has-m-font-size" style="font-weight:600"><?php esc_html_e( 'Archives', 'blockwright' ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:archives {"style":{"typography":{"fontSize":"var:preset|font-size|s"}}} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

<?php
/**
 * Title: Blog with Sidebar
 * Slug: blockwright/template-home-sidebar
 * Categories: posts
 * Template Types: front-page, home, index
 * Post Types: wp_template
 * Description: A full blog home layout: the latest posts in a single column beside the sidebar.
 *
 * @package Blockwright
 */

?>
<!-- wp:template-part {"slug":"header","area":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","align":"full","layout":{"type":"constrained"},"metadata":{"name":"<?php esc_attr_e( 'Main', 'blockwright' ); ?>"}} -->
<main class="wp-block-group alignfull">
  <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|x-large"}}}} -->
  <div class="wp-block-columns alignwide">

    <!-- wp:column {"width":"66.66%"} -->
    <div class="wp-block-column" style="flex-basis:66.66%">
      <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}},"layout":{"type":"constrained"}} -->
      <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large)">
        <!-- wp:pattern {"slug":"blockwright/blog-heading"} /-->
        <!-- wp:query {"query":{"inherit":true}} -->
        <div class="wp-block-query">
          <!-- wp:post-template {"layout":{"type":"default"}} -->
          <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|large"}},"border":{"bottom":{"color":"var:preset|color|divider","width":"var:custom|border|width|thin"}}},"layout":{"type":"default"}} -->
          <div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--divider);border-bottom-width:var(--wp--custom--border--width--thin);padding-bottom:var(--wp--preset--spacing--large)">
            <!-- wp:post-featured-image {"isLink":true} /-->
            <!-- wp:post-title {"isLink":true,"level":2} /-->
            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"},"typography":{"textTransform":"uppercase","letterSpacing":"0.06em"}},"textColor":"text-2","fontSize":"xs","layout":{"type":"flex","flexWrap":"wrap"}} -->
            <div class="wp-block-group has-text-2-color has-text-color has-xs-font-size" style="letter-spacing:0.06em;text-transform:uppercase">
              <!-- wp:post-terms {"term":"category"} /-->
              <!-- wp:post-date /-->
            </div>
            <!-- /wp:group -->
            <!-- wp:post-excerpt /-->
            <!-- wp:read-more /-->
          </div>
          <!-- /wp:group -->
          <!-- /wp:post-template -->
          <!-- wp:query-no-results -->
          <!-- wp:pattern {"slug":"blockwright/no-results"} /-->
          <!-- wp:pattern {"slug":"blockwright/search-form"} /-->
          <!-- /wp:query-no-results -->
          <!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
          <!-- wp:query-pagination-previous /-->
          <!-- wp:query-pagination-numbers /-->
          <!-- wp:query-pagination-next /-->
          <!-- /wp:query-pagination -->
        </div>
        <!-- /wp:query -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"33.33%","className":"bw-sidebar-column"} -->
    <div class="wp-block-column bw-sidebar-column" style="flex-basis:33.33%">
      <!-- wp:template-part {"slug":"sidebar","tagName":"aside"} /-->
    </div>
    <!-- /wp:column -->

  </div>
  <!-- /wp:columns -->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","area":"footer","tagName":"footer"} /-->

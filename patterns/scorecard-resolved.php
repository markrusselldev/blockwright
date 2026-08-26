<?php
/**
 * Title: Scorecard • Resolved
 * Slug: blockwright/scorecard-resolved
 * Categories: featured, text
 * Keywords: scorecard, inspection, resolved, after, report, record, audit, status, checklist
 * Block Types: core/group
 * Inserter: true
 * Description: The all-green "after" companion to Scorecard - every row resolved. Pairs with Scorecard for a before/after; here you fill the labels and statuses, the tones are already green.
 *
 * @package Blockwright
 */
?>
<!-- wp:group {"metadata":{"name":"Scorecard Wrap"},"style":{"spacing":{"blockGap":"var:preset|spacing|x-small","padding":{"right":"0","left":"0"}}},"layout":{"type":"constrained","contentSize":"460px"}} -->
<div class="wp-block-group" style="padding-right:0;padding-left:0">

<!-- wp:group {"metadata":{"name":"Scorecard"},"style":{"spacing":{"blockGap":"0px"}},"backgroundColor":"surface-1","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-surface-1-background-color has-background">

	<!-- wp:group {"metadata":{"name":"Header"},"className":"bw-scorecard-head","style":{"spacing":{"blockGap":"var:preset|spacing|small","padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"bottom":{"color":"var:preset|color|border-subtle","width":"var:custom|border|width|thin"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
	<div class="wp-block-group bw-scorecard-head" style="border-bottom-color:var(--wp--preset--color--border-subtle);border-bottom-width:var(--wp--custom--border--width--thin);padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--medium)">

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
		<div class="wp-block-group">
			<!-- wp:icon {"icon":"core/file","textColor":"primary","style":{"dimensions":{"width":"22px"}}} /-->
				<!-- wp:paragraph {"className":"bw-scorecard-title","style":{"typography":{"fontWeight":"600"}},"fontSize":"s"} -->
				<p class="bw-scorecard-title has-s-font-size" style="font-weight:600"><?php esc_html_e( 'Site and systems check', 'blockwright' ); ?></p>
				<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:paragraph {"className":"bw-scorecard-ref","textColor":"text-2","fontSize":"s","fontFamily":"mono","style":{"typography":{"lineHeight":"1"}}} -->
		<p class="bw-scorecard-ref has-text-2-color has-text-color has-mono-font-family has-s-font-size" style="line-height:1"><?php esc_html_e( 'REF-0000', 'blockwright' ); ?></p>
		<!-- /wp:paragraph -->

	</div>
	<!-- /wp:group -->

	<!-- wp:group {"metadata":{"name":"Rows"},"style":{"spacing":{"blockGap":"0px","padding":{"left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
<?php
$rows = array(
	array( __( 'A finding that failed', 'blockwright' ), __( 'Passed', 'blockwright' ) ),
	array( __( 'Another problem found', 'blockwright' ), __( 'Fixed', 'blockwright' ) ),
	array( __( 'Something needing attention', 'blockwright' ), __( 'Current', 'blockwright' ) ),
	array( __( 'A status still in progress', 'blockwright' ), __( 'Done', 'blockwright' ) ),
	array( __( 'Another item to review', 'blockwright' ), __( 'Cleared', 'blockwright' ) ),
	array( __( 'A check that passed', 'blockwright' ), __( 'Passed', 'blockwright' ) ),
	array( __( 'Confirmed and verified', 'blockwright' ), __( 'Verified', 'blockwright' ) ),
);
$last = count( $rows ) - 1;
foreach ( $rows as $i => $row ) {
	list( $label, $row_status ) = $row;
	$border                     = $i < $last
		? ',"border":{"bottom":{"color":"var:preset|color|border-subtle","width":"var:custom|border|width|thin"}}'
		: '';
	$border_css                 = $i < $last
		? 'border-bottom-color:var(--wp--preset--color--border-subtle);border-bottom-width:var(--wp--custom--border--width--thin);'
		: '';
	?>
		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}}<?php echo $border; // phpcs:ignore ?>},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
		<div class="wp-block-group" style="<?php echo esc_attr( $border_css ); ?>padding-top:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small)"><!-- wp:paragraph {"fontSize":"s"} -->
		<p class="has-s-font-size"><?php echo esc_html( $label ); ?></p>
		<!-- /wp:paragraph --><!-- wp:paragraph {"className":"bw-scorecard-chip","backgroundColor":"success-100","textColor":"success-800","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxx-small","bottom":"var:preset|spacing|xxx-small","left":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small"}},"border":{"radius":"var:preset|border-radius|m"},"typography":{"fontWeight":"600"}},"fontSize":"s"} -->
		<p class="bw-scorecard-chip has-success-800-color has-success-100-background-color has-text-color has-background has-s-font-size" style="border-radius:var(--wp--preset--border-radius--m);padding-top:var(--wp--preset--spacing--xxx-small);padding-bottom:var(--wp--preset--spacing--xxx-small);padding-left:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--x-small);font-weight:600"><?php echo esc_html( $row_status ); ?></p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:group -->
<?php } ?>

	</div>
	<!-- /wp:group -->

	<!-- wp:group {"metadata":{"name":"Footer"},"className":"bw-scorecard-foot","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"top":{"color":"var:preset|color|border-subtle","width":"var:custom|border|width|thin"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group bw-scorecard-foot" style="border-top-color:var(--wp--preset--color--border-subtle);border-top-width:var(--wp--custom--border--width--thin);padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--medium)">
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"s"} -->
		<p class="has-text-2-color has-text-color has-s-font-size"><?php esc_html_e( 'What the same record looks like once the work is done.', 'blockwright' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:paragraph {"className":"bw-scorecard-stamp"} -->
	<p class="bw-scorecard-stamp"><?php esc_html_e( 'Fixed', 'blockwright' ); ?></p>
	<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"center","textColor":"text-2","fontSize":"s"} -->
<p class="has-text-align-center has-text-2-color has-text-color has-s-font-size"><?php esc_html_e( 'Caption this graphic so it reads as a sample, not live data - say what it is.', 'blockwright' ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

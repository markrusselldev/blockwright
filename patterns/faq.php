<?php
/**
 * Title: FAQ
 * Slug: blockwright/faq
 * Categories: text
 * Keywords: faq, questions, answers, accordion, help, support, details
 * Block Types: core/group
 * Inserter: true
 * Description: A frequently-asked-questions accordion - collapsible question-and-answer pairs (core Details block, no plugin) that handle objections before they stop the sale.
 *
 * @package Blockwright
 */

?>
<!-- wp:group {"metadata":{"name":"FAQ"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"}}},"backgroundColor":"surface-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-2-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">

	<!-- wp:heading {"level":2,"fontSize":"2xl"} -->
	<h2 class="wp-block-heading has-2-xl-font-size"><?php esc_html_e( 'Frequently asked questions', 'blockwright' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph -->
	<p><?php esc_html_e( 'Still have a question?', 'blockwright' ); ?> <a href="#"><?php esc_html_e( 'Get in touch', 'blockwright' ); ?></a>.</p>
	<!-- /wp:paragraph -->

	<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--medium)">
<?php
$items = array(
	array(
		__( 'A question your customers actually ask', 'blockwright' ),
		__( 'Answer it plainly in two or three sentences. Address the worry behind the question, not just the literal words.', 'blockwright' ),
	),
	array(
		__( 'A common objection, phrased as a question', 'blockwright' ),
		__( 'Keep the answer short and reassuring. This is where you remove doubt before it stops the sale.', 'blockwright' ),
	),
	array(
		__( 'A question about how it works', 'blockwright' ),
		__( 'A clear, direct answer. Swap these for the real questions your buyers ask most.', 'blockwright' ),
	),
	array(
		__( 'A question that needs a longer answer', 'blockwright' ),
		__( 'Some answers run longer. The accordion keeps the page short - the reader opens only what they care about.', 'blockwright' ),
	),
	array(
		__( 'A question about price, terms, or your guarantee', 'blockwright' ),
		__( 'End on a reassuring note. If you offer a guarantee or refund policy, this is a good place to state it.', 'blockwright' ),
	),
);
foreach ( $items as $item ) {
	list( $q, $a ) = $item;
	?>
		<!-- wp:details {"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}},"border":{"bottom":{"color":"var:preset|color|border-subtle","width":"var:custom|border|width|thin"}}}} -->
		<details class="wp-block-details" style="border-bottom-color:var(--wp--preset--color--border-subtle);border-bottom-width:var(--wp--custom--border--width--thin);padding-top:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small)"><summary><?php echo esc_html( $q ); ?></summary>
		<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small"}}},"textColor":"text-2"} -->
		<p class="has-text-2-color has-text-color" style="margin-top:var(--wp--preset--spacing--x-small)"><?php echo esc_html( $a ); ?></p>
		<!-- /wp:paragraph -->
		</details>
		<!-- /wp:details -->
<?php } ?>

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->

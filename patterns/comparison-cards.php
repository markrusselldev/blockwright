<?php
/**
 * Title: Comparison Cards
 * Slug: blockwright/comparison-cards
 * Categories: call-to-action, columns
 * Keywords: comparison, versus, us vs them, why us, before after, difference, sell
 * Block Types: core/columns
 * Inserter: true
 * Description: A two-card "the usual way vs working with us" comparison - the honest contrast that turns a hesitant reader into an enquiry.
 *
 * @package Blockwright
 */

$usual = array(
	'Weeks of back-and-forth with no clear plan',
	'Surprise costs added at the end',
	'You chase them for updates',
);
$ours = array(
	'A clear, fixed quote before we start',
	'Weekly progress you can actually see',
	'Launched, then supported - we do not disappear',
);
?>
<!-- wp:group {"metadata":{"name":"Comparison Cards"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"}}},"backgroundColor":"surface-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-2-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">

	<!-- wp:heading {"textAlign":"center","level":2,"fontSize":"2xl","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|large"}}}} -->
	<h2 class="wp-block-heading has-text-align-center has-2-xl-font-size" style="margin-bottom:var(--wp--preset--spacing--large)"><?php esc_html_e( 'See the difference', 'blockwright' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}}} -->
	<div class="wp-block-columns alignwide">

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"radius":"var:preset|border-radius|m","width":"var:custom|border|width|thin"}},"borderColor":"border-subtle","backgroundColor":"surface-1"} -->
		<div class="wp-block-column has-border-color has-border-subtle-border-color has-surface-1-background-color has-background" style="border-width:var(--wp--custom--border--width--thin);border-radius:var(--wp--preset--border-radius--m);padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)">
			<!-- wp:heading {"level":3,"fontSize":"l","textColor":"text-2"} -->
			<h3 class="wp-block-heading has-text-2-color has-text-color has-l-font-size"><?php esc_html_e( 'The usual way', 'blockwright' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:list {"textColor":"text-2"} -->
			<ul class="wp-block-list has-text-2-color has-text-color">
				<?php foreach ( $usual as $item ) : ?>
				<!-- wp:list-item -->
				<li><?php echo esc_html( $item ); ?></li>
				<!-- /wp:list-item -->
				<?php endforeach; ?>
			</ul>
			<!-- /wp:list -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"radius":"var:preset|border-radius|m","width":"var:custom|border|width|medium"}},"borderColor":"primary","backgroundColor":"surface-1"} -->
		<div class="wp-block-column has-border-color has-primary-border-color has-surface-1-background-color has-background" style="border-width:var(--wp--custom--border--width--medium);border-radius:var(--wp--preset--border-radius--m);padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)">
			<!-- wp:paragraph {"textColor":"primary","fontSize":"s","style":{"typography":{"textTransform":"uppercase","fontWeight":"600"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|x-small"}}}} -->
			<p class="has-primary-color has-text-color has-s-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--x-small);font-weight:600;text-transform:uppercase"><?php esc_html_e( 'Recommended', 'blockwright' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3,"fontSize":"l"} -->
			<h3 class="wp-block-heading has-l-font-size"><?php esc_html_e( 'Working with us', 'blockwright' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:list -->
			<ul class="wp-block-list">
				<?php foreach ( $ours as $item ) : ?>
				<!-- wp:list-item -->
				<li><?php echo esc_html( $item ); ?></li>
				<!-- /wp:list-item -->
				<?php endforeach; ?>
			</ul>
			<!-- /wp:list -->
			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--medium)">
				<!-- wp:button {"className":"is-style-fill"} -->
				<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Get a quote', 'blockwright' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->

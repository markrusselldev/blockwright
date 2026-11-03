<?php
/**
 * Title: Team • Grid
 * Slug: blockwright/team-grid
 * Categories: team, about, featured
 * Keywords: team, staff, people, about, members
 * Block Types: core/columns
 * Inserter: true
 * Description: A team grid - a photo, name, and role per person.
 *
 * @package Blockwright
 */

$placeholder_avatar = get_template_directory_uri() . '/assets/images/placeholder-avatar.svg';
?>
<!-- wp:group {"metadata":{"name":"<?php esc_attr_e( 'Team Grid', 'blockwright' ); ?>"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"}}},"backgroundColor":"surface-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-2-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">

	<!-- wp:heading {"textAlign":"center","level":2} -->
	<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Meet Our Team', 'blockwright' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"var:preset|border-radius|l","width":"var:custom|border|width|thin"}},"borderColor":"border-subtle","backgroundColor":"surface-1"} -->
		<div class="wp-block-column has-border-color has-border-subtle-border-color has-surface-1-background-color has-background" style="border-width:var(--wp--custom--border--width--thin);border-radius:var(--wp--preset--border-radius--l);padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">

			<!-- wp:image {"align":"center","sizeSlug":"medium","linkDestination":"none","style":{"border":{"width":"var:custom|border|width|thin","color":"var:preset|color|border-subtle","radius":"50%"}}} -->
			<figure class="wp-block-image aligncenter size-medium has-custom-border"><img src="<?php echo esc_url( $placeholder_avatar ); ?>" alt="<?php esc_attr_e( 'Team member photo', 'blockwright' ); ?>" class="has-border-color" style="border-width:var(--wp--custom--border--width--thin);border-color:var(--wp--preset--color--border-subtle);border-radius:50%"/></figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"align":"center","fontSize":"l"} -->
			<p class="has-text-align-center has-l-font-size"><strong><?php esc_html_e( 'Full Name', 'blockwright' ); ?></strong></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"align":"center","fontSize":"s","textColor":"text-2"} -->
			<p class="has-text-align-center has-text-2-color has-text-color has-s-font-size"><?php esc_html_e( 'Job title', 'blockwright' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center"><?php esc_html_e( 'One line on what this person does.', 'blockwright' ); ?></p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"var:preset|border-radius|l","width":"var:custom|border|width|thin"}},"borderColor":"border-subtle","backgroundColor":"surface-1"} -->
		<div class="wp-block-column has-border-color has-border-subtle-border-color has-surface-1-background-color has-background" style="border-width:var(--wp--custom--border--width--thin);border-radius:var(--wp--preset--border-radius--l);padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">

			<!-- wp:image {"align":"center","sizeSlug":"medium","linkDestination":"none","style":{"border":{"width":"var:custom|border|width|thin","color":"var:preset|color|border-subtle","radius":"50%"}}} -->
			<figure class="wp-block-image aligncenter size-medium has-custom-border"><img src="<?php echo esc_url( $placeholder_avatar ); ?>" alt="<?php esc_attr_e( 'Team member photo', 'blockwright' ); ?>" class="has-border-color" style="border-width:var(--wp--custom--border--width--thin);border-color:var(--wp--preset--color--border-subtle);border-radius:50%"/></figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"align":"center","fontSize":"l"} -->
			<p class="has-text-align-center has-l-font-size"><strong><?php esc_html_e( 'Full Name', 'blockwright' ); ?></strong></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"align":"center","fontSize":"s","textColor":"text-2"} -->
			<p class="has-text-align-center has-text-2-color has-text-color has-s-font-size"><?php esc_html_e( 'Job title', 'blockwright' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center"><?php esc_html_e( 'One line on what this person does.', 'blockwright' ); ?></p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"var:preset|border-radius|l","width":"var:custom|border|width|thin"}},"borderColor":"border-subtle","backgroundColor":"surface-1"} -->
		<div class="wp-block-column has-border-color has-border-subtle-border-color has-surface-1-background-color has-background" style="border-width:var(--wp--custom--border--width--thin);border-radius:var(--wp--preset--border-radius--l);padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">

			<!-- wp:image {"align":"center","sizeSlug":"medium","linkDestination":"none","style":{"border":{"width":"var:custom|border|width|thin","color":"var:preset|color|border-subtle","radius":"50%"}}} -->
			<figure class="wp-block-image aligncenter size-medium has-custom-border"><img src="<?php echo esc_url( $placeholder_avatar ); ?>" alt="<?php esc_attr_e( 'Team member photo', 'blockwright' ); ?>" class="has-border-color" style="border-width:var(--wp--custom--border--width--thin);border-color:var(--wp--preset--color--border-subtle);border-radius:50%"/></figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"align":"center","fontSize":"l"} -->
			<p class="has-text-align-center has-l-font-size"><strong><?php esc_html_e( 'Full Name', 'blockwright' ); ?></strong></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"align":"center","fontSize":"s","textColor":"text-2"} -->
			<p class="has-text-align-center has-text-2-color has-text-color has-s-font-size"><?php esc_html_e( 'Job title', 'blockwright' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center"><?php esc_html_e( 'One line on what this person does.', 'blockwright' ); ?></p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->

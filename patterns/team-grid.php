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
<!-- wp:group {"metadata":{"name":"Team Grid"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"}}},"backgroundColor":"surface-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-surface-2-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">

	<!-- wp:heading {"textAlign":"center","level":2,"fontSize":"2xl"} -->
	<h2 class="wp-block-heading has-text-align-center has-2-xl-font-size"><?php esc_html_e( 'Meet Our Team', 'blockwright' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"var:preset|border-radius|l","width":"var:custom|border|width|thin"}},"borderColor":"border-subtle","backgroundColor":"surface-1"} -->
		<div class="wp-block-column has-border-color has-border-subtle-border-color has-surface-1-background-color has-background" style="border-width:var(--wp--custom--border--width--thin);border-radius:var(--wp--preset--border-radius--l);padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">

			<!-- wp:image {"align":"center","sizeSlug":"medium","linkDestination":"none","style":{"border":{"width":"var:custom|border|width|thin","color":"var:preset|color|border-subtle","radius":"50%"}}} -->
			<figure class="wp-block-image aligncenter size-medium has-custom-border"><img src="<?php echo esc_url( $placeholder_avatar ); ?>" alt="Team member photo" class="has-border-color" style="border-width:var(--wp--custom--border--width--thin);border-color:var(--wp--preset--color--border-subtle);border-radius:50%"/></figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"align":"center","fontSize":"l"} -->
			<p class="has-text-align-center has-l-font-size"><strong><?php esc_html_e( 'Sarah Chen', 'blockwright' ); ?></strong></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"align":"center","fontSize":"s","textColor":"text-2"} -->
			<p class="has-text-align-center has-text-2-color has-text-color has-s-font-size"><?php esc_html_e( 'Lead Designer', 'blockwright' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center"><?php esc_html_e( 'Creates beautiful, user-centered designs with a focus on accessibility and brand consistency.', 'blockwright' ); ?></p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"var:preset|border-radius|l","width":"var:custom|border|width|thin"}},"borderColor":"border-subtle","backgroundColor":"surface-1"} -->
		<div class="wp-block-column has-border-color has-border-subtle-border-color has-surface-1-background-color has-background" style="border-width:var(--wp--custom--border--width--thin);border-radius:var(--wp--preset--border-radius--l);padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">

			<!-- wp:image {"align":"center","sizeSlug":"medium","linkDestination":"none","style":{"border":{"width":"var:custom|border|width|thin","color":"var:preset|color|border-subtle","radius":"50%"}}} -->
			<figure class="wp-block-image aligncenter size-medium has-custom-border"><img src="<?php echo esc_url( $placeholder_avatar ); ?>" alt="Team member photo" class="has-border-color" style="border-width:var(--wp--custom--border--width--thin);border-color:var(--wp--preset--color--border-subtle);border-radius:50%"/></figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"align":"center","fontSize":"l"} -->
			<p class="has-text-align-center has-l-font-size"><strong><?php esc_html_e( 'Marcus Rodriguez', 'blockwright' ); ?></strong></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"align":"center","fontSize":"s","textColor":"text-2"} -->
			<p class="has-text-align-center has-text-2-color has-text-color has-s-font-size"><?php esc_html_e( 'Operations Lead', 'blockwright' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center"><?php esc_html_e( 'Builds scalable, performant applications with expertise in modern web technologies and architecture.', 'blockwright' ); ?></p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"var:preset|border-radius|l","width":"var:custom|border|width|thin"}},"borderColor":"border-subtle","backgroundColor":"surface-1"} -->
		<div class="wp-block-column has-border-color has-border-subtle-border-color has-surface-1-background-color has-background" style="border-width:var(--wp--custom--border--width--thin);border-radius:var(--wp--preset--border-radius--l);padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">

			<!-- wp:image {"align":"center","sizeSlug":"medium","linkDestination":"none","style":{"border":{"width":"var:custom|border|width|thin","color":"var:preset|color|border-subtle","radius":"50%"}}} -->
			<figure class="wp-block-image aligncenter size-medium has-custom-border"><img src="<?php echo esc_url( $placeholder_avatar ); ?>" alt="Team member photo" class="has-border-color" style="border-width:var(--wp--custom--border--width--thin);border-color:var(--wp--preset--color--border-subtle);border-radius:50%"/></figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"align":"center","fontSize":"l"} -->
			<p class="has-text-align-center has-l-font-size"><strong><?php esc_html_e( 'Emily Foster', 'blockwright' ); ?></strong></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"align":"center","fontSize":"s","textColor":"text-2"} -->
			<p class="has-text-align-center has-text-2-color has-text-color has-s-font-size"><?php esc_html_e( 'Project Manager', 'blockwright' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center"><?php esc_html_e( 'Orchestrates projects with precision, ensuring teams deliver exceptional results on time and on budget.', 'blockwright' ); ?></p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->

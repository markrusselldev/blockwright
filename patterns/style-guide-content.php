<?php
/**
 * Title: Style Guide Content
 * Slug: blockwright/style-guide-content
 * Categories: blockwright
 * Description: The body of the Style Guide page template.
 * Inserter: false
 *
 * @package Blockwright
 */

?>
<!-- wp:group {"tagName":"main","align":"full","style":{"spacing":{"margin":{"top":"var:preset|spacing|large"},"padding":{"bottom":"var:preset|spacing|x-large"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--x-large)">

	<!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull">
		<!-- wp:heading {"level":1} --><h1 class="wp-block-heading"><?php esc_html_e( 'Style guide', 'blockwright' ); ?></h1><!-- /wp:heading -->
		<!-- wp:paragraph {"fontSize":"l"} --><p class="has-l-font-size"><?php echo wp_kses_post( __( 'The theme&#8217;s foundations - color scales, type, spacing, buttons, editorial roles - and the pattern library grouped by purpose. Insert a pattern from the editor&#8217;s <strong>+ &rarr; Patterns</strong> panel and edit the placeholder copy. This is a reference page. Delete it before you launch.', 'blockwright' ) ); ?></p><!-- /wp:paragraph -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"s","style":{"typography":{"lineHeight":"2"}}} --><p class="has-text-2-color has-text-color has-s-font-size" style="line-height:2"><a href="#elements"><?php esc_html_e( 'Elements', 'blockwright' ); ?></a> &middot; <a href="#starters"><?php esc_html_e( 'Heroes', 'blockwright' ); ?></a> &middot; <a href="#content"><?php esc_html_e( 'Content sections', 'blockwright' ); ?></a> &middot; <a href="#offering"><?php esc_html_e( 'Services & pricing', 'blockwright' ); ?></a> &middot; <a href="#proof"><?php esc_html_e( 'Social proof', 'blockwright' ); ?></a> &middot; <a href="#people"><?php esc_html_e( 'Team & people', 'blockwright' ); ?></a> &middot; <a href="#work"><?php esc_html_e( 'Portfolio & work', 'blockwright' ); ?></a> &middot; <a href="#cta"><?php esc_html_e( 'Calls to action', 'blockwright' ); ?></a> &middot; <a href="#contact"><?php esc_html_e( 'Contact & location', 'blockwright' ); ?></a> &middot; <a href="#blog"><?php esc_html_e( 'Blog & posts', 'blockwright' ); ?></a> &middot; <a href="#utility"><?php esc_html_e( 'Utility', 'blockwright' ); ?></a> &middot; <a href="#widths"><?php esc_html_e( 'Content widths', 'blockwright' ); ?></a></p><!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:separator {"align":"full","backgroundColor":"divider","textColor":"divider","className":"is-style-wide"} --><hr class="wp-block-separator alignfull has-text-color has-divider-color has-alpha-channel-opacity has-divider-background-color has-background is-style-wide"/><!-- /wp:separator -->

	<!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull">
		<!-- wp:heading {"level":2,"anchor":"elements"} --><h2 class="wp-block-heading" id="elements"><?php esc_html_e( 'Elements', 'blockwright' ); ?></h2><!-- /wp:heading -->
		<!-- wp:paragraph {"fontSize":"l"} --><p class="has-l-font-size"><?php esc_html_e( 'The building blocks every pattern is made from. Each item is labeled with the class or token you type to use it.', 'blockwright' ); ?></p><!-- /wp:paragraph -->
		<!-- wp:heading {"level":3,"fontSize":"m","style":{"spacing":{"margin":{"top":"var:preset|spacing|large"}}}} --><h3 class="wp-block-heading has-m-font-size" style="margin-top:var(--wp--preset--spacing--large)"><?php esc_html_e( 'Colors', 'blockwright' ); ?></h3><!-- /wp:heading --><!-- wp:paragraph {"fontSize":"s","textColor":"text-2"} --><p class="has-text-2-color has-text-color has-s-font-size"><?php echo wp_kses_post( __( 'Role tokens, applied as <code>has-{slug}-color</code> for text or <code>has-{slug}-background-color</code> for a fill. Every value is adaptive - it follows the visitor&#8217;s light or dark setting.', 'blockwright' ) ); ?></p><!-- /wp:paragraph -->
	<!-- wp:html -->
	<div style="display:flex;flex-wrap:wrap;gap:1rem;margin-top:1rem">
		<figure style="margin:0;width:8.5rem">
			<div style="height:56px;border:1px solid var(--wp--preset--color--border-subtle);border-radius:6px;background:var(--wp--preset--color--primary)"></div>
			<figcaption style="font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;color:var(--wp--preset--color--text-2);margin-top:0.35rem;word-break:break-all">primary</figcaption>
		</figure>
		<figure style="margin:0;width:8.5rem">
			<div style="height:56px;border:1px solid var(--wp--preset--color--border-subtle);border-radius:6px;background:var(--wp--preset--color--on-primary)"></div>
			<figcaption style="font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;color:var(--wp--preset--color--text-2);margin-top:0.35rem;word-break:break-all">on-primary</figcaption>
		</figure>
		<figure style="margin:0;width:8.5rem">
			<div style="height:56px;border:1px solid var(--wp--preset--color--border-subtle);border-radius:6px;background:var(--wp--preset--color--link)"></div>
			<figcaption style="font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;color:var(--wp--preset--color--text-2);margin-top:0.35rem;word-break:break-all">link</figcaption>
		</figure>
		<figure style="margin:0;width:8.5rem">
			<div style="height:56px;border:1px solid var(--wp--preset--color--border-subtle);border-radius:6px;background:var(--wp--preset--color--link-visited)"></div>
			<figcaption style="font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;color:var(--wp--preset--color--text-2);margin-top:0.35rem;word-break:break-all">link-visited</figcaption>
		</figure>
		<figure style="margin:0;width:8.5rem">
			<div style="height:56px;border:1px solid var(--wp--preset--color--border-subtle);border-radius:6px;background:var(--wp--preset--color--text-1)"></div>
			<figcaption style="font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;color:var(--wp--preset--color--text-2);margin-top:0.35rem;word-break:break-all">text-1</figcaption>
		</figure>
		<figure style="margin:0;width:8.5rem">
			<div style="height:56px;border:1px solid var(--wp--preset--color--border-subtle);border-radius:6px;background:var(--wp--preset--color--text-2)"></div>
			<figcaption style="font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;color:var(--wp--preset--color--text-2);margin-top:0.35rem;word-break:break-all">text-2</figcaption>
		</figure>
		<figure style="margin:0;width:8.5rem">
			<div style="height:56px;border:1px solid var(--wp--preset--color--border-subtle);border-radius:6px;background:var(--wp--preset--color--text-strong)"></div>
			<figcaption style="font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;color:var(--wp--preset--color--text-2);margin-top:0.35rem;word-break:break-all">text-strong</figcaption>
		</figure>
		<figure style="margin:0;width:8.5rem">
			<div style="height:56px;border:1px solid var(--wp--preset--color--border-subtle);border-radius:6px;background:var(--wp--preset--color--surface-1)"></div>
			<figcaption style="font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;color:var(--wp--preset--color--text-2);margin-top:0.35rem;word-break:break-all">surface-1</figcaption>
		</figure>
		<figure style="margin:0;width:8.5rem">
			<div style="height:56px;border:1px solid var(--wp--preset--color--border-subtle);border-radius:6px;background:var(--wp--preset--color--surface-2)"></div>
			<figcaption style="font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;color:var(--wp--preset--color--text-2);margin-top:0.35rem;word-break:break-all">surface-2</figcaption>
		</figure>
		<figure style="margin:0;width:8.5rem">
			<div style="height:56px;border:1px solid var(--wp--preset--color--border-subtle);border-radius:6px;background:var(--wp--preset--color--surface-3)"></div>
			<figcaption style="font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;color:var(--wp--preset--color--text-2);margin-top:0.35rem;word-break:break-all">surface-3</figcaption>
		</figure>
		<figure style="margin:0;width:8.5rem">
			<div style="height:56px;border:1px solid var(--wp--preset--color--border-subtle);border-radius:6px;background:var(--wp--preset--color--surface-4)"></div>
			<figcaption style="font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;color:var(--wp--preset--color--text-2);margin-top:0.35rem;word-break:break-all">surface-4</figcaption>
		</figure>
		<figure style="margin:0;width:8.5rem">
			<div style="height:56px;border:1px solid var(--wp--preset--color--border-subtle);border-radius:6px;background:var(--wp--preset--color--border-default)"></div>
			<figcaption style="font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;color:var(--wp--preset--color--text-2);margin-top:0.35rem;word-break:break-all">border-default</figcaption>
		</figure>
		<figure style="margin:0;width:8.5rem">
			<div style="height:56px;border:1px solid var(--wp--preset--color--border-subtle);border-radius:6px;background:var(--wp--preset--color--border-strong)"></div>
			<figcaption style="font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;color:var(--wp--preset--color--text-2);margin-top:0.35rem;word-break:break-all">border-strong</figcaption>
		</figure>
		<figure style="margin:0;width:8.5rem">
			<div style="height:56px;border:1px solid var(--wp--preset--color--border-subtle);border-radius:6px;background:var(--wp--preset--color--divider)"></div>
			<figcaption style="font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;color:var(--wp--preset--color--text-2);margin-top:0.35rem;word-break:break-all">divider</figcaption>
		</figure>
	</div>
	<!-- /wp:html --><!-- wp:paragraph {"fontSize":"s","textColor":"text-2"} --><p class="has-text-2-color has-text-color has-s-font-size"><?php echo wp_kses_post( __( 'Brand ramp - the accessible tonal scale derived from your brand color (<code>primary-50</code> to <code>primary-950</code>). <code>primary</code> itself is the scheme&#8217;s brand color.', 'blockwright' ) ); ?></p><!-- /wp:paragraph -->
	<!-- wp:html -->
	<div style="display:flex;flex-wrap:wrap;margin-top:1rem;border-radius:6px;overflow:hidden;border:1px solid var(--wp--preset--color--border-subtle)"><div style="flex:1 1 3rem;min-width:3rem"><div style="height:44px;background:var(--wp--preset--color--primary-50)"></div><div style="font-family:var(--wp--preset--font-family--mono);font-size:0.7rem;color:var(--wp--preset--color--text-2);text-align:center;padding:0.3rem 0">50</div></div><div style="flex:1 1 3rem;min-width:3rem"><div style="height:44px;background:var(--wp--preset--color--primary-100)"></div><div style="font-family:var(--wp--preset--font-family--mono);font-size:0.7rem;color:var(--wp--preset--color--text-2);text-align:center;padding:0.3rem 0">100</div></div><div style="flex:1 1 3rem;min-width:3rem"><div style="height:44px;background:var(--wp--preset--color--primary-200)"></div><div style="font-family:var(--wp--preset--font-family--mono);font-size:0.7rem;color:var(--wp--preset--color--text-2);text-align:center;padding:0.3rem 0">200</div></div><div style="flex:1 1 3rem;min-width:3rem"><div style="height:44px;background:var(--wp--preset--color--primary-300)"></div><div style="font-family:var(--wp--preset--font-family--mono);font-size:0.7rem;color:var(--wp--preset--color--text-2);text-align:center;padding:0.3rem 0">300</div></div><div style="flex:1 1 3rem;min-width:3rem"><div style="height:44px;background:var(--wp--preset--color--primary-400)"></div><div style="font-family:var(--wp--preset--font-family--mono);font-size:0.7rem;color:var(--wp--preset--color--text-2);text-align:center;padding:0.3rem 0">400</div></div><div style="flex:1 1 3rem;min-width:3rem"><div style="height:44px;background:var(--wp--preset--color--primary-500)"></div><div style="font-family:var(--wp--preset--font-family--mono);font-size:0.7rem;color:var(--wp--preset--color--text-2);text-align:center;padding:0.3rem 0">500</div></div><div style="flex:1 1 3rem;min-width:3rem"><div style="height:44px;background:var(--wp--preset--color--primary-600)"></div><div style="font-family:var(--wp--preset--font-family--mono);font-size:0.7rem;color:var(--wp--preset--color--text-2);text-align:center;padding:0.3rem 0">600</div></div><div style="flex:1 1 3rem;min-width:3rem"><div style="height:44px;background:var(--wp--preset--color--primary-700)"></div><div style="font-family:var(--wp--preset--font-family--mono);font-size:0.7rem;color:var(--wp--preset--color--text-2);text-align:center;padding:0.3rem 0">700</div></div><div style="flex:1 1 3rem;min-width:3rem"><div style="height:44px;background:var(--wp--preset--color--primary-800)"></div><div style="font-family:var(--wp--preset--font-family--mono);font-size:0.7rem;color:var(--wp--preset--color--text-2);text-align:center;padding:0.3rem 0">800</div></div><div style="flex:1 1 3rem;min-width:3rem"><div style="height:44px;background:var(--wp--preset--color--primary-900)"></div><div style="font-family:var(--wp--preset--font-family--mono);font-size:0.7rem;color:var(--wp--preset--color--text-2);text-align:center;padding:0.3rem 0">900</div></div><div style="flex:1 1 3rem;min-width:3rem"><div style="height:44px;background:var(--wp--preset--color--primary-950)"></div><div style="font-family:var(--wp--preset--font-family--mono);font-size:0.7rem;color:var(--wp--preset--color--text-2);text-align:center;padding:0.3rem 0">950</div></div>
	</div>
	<!-- /wp:html --><!-- wp:paragraph {"fontSize":"s","textColor":"text-2"} --><p class="has-text-2-color has-text-color has-s-font-size"><?php esc_html_e( 'Neutral ramp - surfaces, text, and borders derive from this scale.', 'blockwright' ); ?></p><!-- /wp:paragraph -->
	<!-- wp:html -->
	<div style="display:flex;flex-wrap:wrap;margin-top:1rem;border-radius:6px;overflow:hidden;border:1px solid var(--wp--preset--color--border-subtle)"><div style="flex:1 1 3rem;min-width:3rem"><div style="height:44px;background:var(--wp--preset--color--neutral-0)"></div><div style="font-family:var(--wp--preset--font-family--mono);font-size:0.7rem;color:var(--wp--preset--color--text-2);text-align:center;padding:0.3rem 0">0</div></div><div style="flex:1 1 3rem;min-width:3rem"><div style="height:44px;background:var(--wp--preset--color--neutral-50)"></div><div style="font-family:var(--wp--preset--font-family--mono);font-size:0.7rem;color:var(--wp--preset--color--text-2);text-align:center;padding:0.3rem 0">50</div></div><div style="flex:1 1 3rem;min-width:3rem"><div style="height:44px;background:var(--wp--preset--color--neutral-100)"></div><div style="font-family:var(--wp--preset--font-family--mono);font-size:0.7rem;color:var(--wp--preset--color--text-2);text-align:center;padding:0.3rem 0">100</div></div><div style="flex:1 1 3rem;min-width:3rem"><div style="height:44px;background:var(--wp--preset--color--neutral-200)"></div><div style="font-family:var(--wp--preset--font-family--mono);font-size:0.7rem;color:var(--wp--preset--color--text-2);text-align:center;padding:0.3rem 0">200</div></div><div style="flex:1 1 3rem;min-width:3rem"><div style="height:44px;background:var(--wp--preset--color--neutral-300)"></div><div style="font-family:var(--wp--preset--font-family--mono);font-size:0.7rem;color:var(--wp--preset--color--text-2);text-align:center;padding:0.3rem 0">300</div></div><div style="flex:1 1 3rem;min-width:3rem"><div style="height:44px;background:var(--wp--preset--color--neutral-400)"></div><div style="font-family:var(--wp--preset--font-family--mono);font-size:0.7rem;color:var(--wp--preset--color--text-2);text-align:center;padding:0.3rem 0">400</div></div><div style="flex:1 1 3rem;min-width:3rem"><div style="height:44px;background:var(--wp--preset--color--neutral-500)"></div><div style="font-family:var(--wp--preset--font-family--mono);font-size:0.7rem;color:var(--wp--preset--color--text-2);text-align:center;padding:0.3rem 0">500</div></div><div style="flex:1 1 3rem;min-width:3rem"><div style="height:44px;background:var(--wp--preset--color--neutral-600)"></div><div style="font-family:var(--wp--preset--font-family--mono);font-size:0.7rem;color:var(--wp--preset--color--text-2);text-align:center;padding:0.3rem 0">600</div></div><div style="flex:1 1 3rem;min-width:3rem"><div style="height:44px;background:var(--wp--preset--color--neutral-700)"></div><div style="font-family:var(--wp--preset--font-family--mono);font-size:0.7rem;color:var(--wp--preset--color--text-2);text-align:center;padding:0.3rem 0">700</div></div><div style="flex:1 1 3rem;min-width:3rem"><div style="height:44px;background:var(--wp--preset--color--neutral-800)"></div><div style="font-family:var(--wp--preset--font-family--mono);font-size:0.7rem;color:var(--wp--preset--color--text-2);text-align:center;padding:0.3rem 0">800</div></div><div style="flex:1 1 3rem;min-width:3rem"><div style="height:44px;background:var(--wp--preset--color--neutral-900)"></div><div style="font-family:var(--wp--preset--font-family--mono);font-size:0.7rem;color:var(--wp--preset--color--text-2);text-align:center;padding:0.3rem 0">900</div></div><div style="flex:1 1 3rem;min-width:3rem"><div style="height:44px;background:var(--wp--preset--color--neutral-950)"></div><div style="font-family:var(--wp--preset--font-family--mono);font-size:0.7rem;color:var(--wp--preset--color--text-2);text-align:center;padding:0.3rem 0">950</div></div><div style="flex:1 1 3rem;min-width:3rem"><div style="height:44px;background:var(--wp--preset--color--neutral-1000)"></div><div style="font-family:var(--wp--preset--font-family--mono);font-size:0.7rem;color:var(--wp--preset--color--text-2);text-align:center;padding:0.3rem 0">1000</div></div>
	</div>
	<!-- /wp:html --><!-- wp:paragraph {"fontSize":"s","textColor":"text-2"} --><p class="has-text-2-color has-text-color has-s-font-size"><?php esc_html_e( 'Semantic status colors - each has a full 50-950 ramp; the 500 is shown.', 'blockwright' ); ?></p><!-- /wp:paragraph -->
	<!-- wp:html -->
	<div style="display:flex;flex-wrap:wrap;gap:1rem;margin-top:1rem">
		<figure style="margin:0;width:8.5rem">
			<div style="height:56px;border:1px solid var(--wp--preset--color--border-subtle);border-radius:6px;background:var(--wp--preset--color--success-500)"></div>
			<figcaption style="font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;color:var(--wp--preset--color--text-2);margin-top:0.35rem;word-break:break-all">success-500</figcaption>
		</figure>
		<figure style="margin:0;width:8.5rem">
			<div style="height:56px;border:1px solid var(--wp--preset--color--border-subtle);border-radius:6px;background:var(--wp--preset--color--warning-500)"></div>
			<figcaption style="font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;color:var(--wp--preset--color--text-2);margin-top:0.35rem;word-break:break-all">warning-500</figcaption>
		</figure>
		<figure style="margin:0;width:8.5rem">
			<div style="height:56px;border:1px solid var(--wp--preset--color--border-subtle);border-radius:6px;background:var(--wp--preset--color--danger-500)"></div>
			<figcaption style="font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;color:var(--wp--preset--color--text-2);margin-top:0.35rem;word-break:break-all">danger-500</figcaption>
		</figure>
	</div>
	<!-- /wp:html -->
		<!-- wp:heading {"level":3,"fontSize":"m","style":{"spacing":{"margin":{"top":"var:preset|spacing|large"}}}} --><h3 class="wp-block-heading has-m-font-size" style="margin-top:var(--wp--preset--spacing--large)"><?php esc_html_e( 'Typography', 'blockwright' ); ?></h3><!-- /wp:heading --><!-- wp:paragraph {"fontSize":"s","textColor":"text-2"} --><p class="has-text-2-color has-text-color has-s-font-size"><?php echo wp_kses_post( __( 'Font sizes, applied as <code>has-{slug}-font-size</code>. Each line is set at the size it names.', 'blockwright' ) ); ?></p><!-- /wp:paragraph --><!-- wp:paragraph {"fontSize":"display","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small","bottom":"0"}}}} --><p class="has-display-font-size" style="margin-top:var(--wp--preset--spacing--x-small);margin-bottom:0">has-display-font-size</p><!-- /wp:paragraph --><!-- wp:paragraph {"fontSize":"xxxl","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small","bottom":"0"}}}} --><p class="has-xxxl-font-size" style="margin-top:var(--wp--preset--spacing--x-small);margin-bottom:0">has-xxxl-font-size</p><!-- /wp:paragraph --><!-- wp:paragraph {"fontSize":"xxl","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small","bottom":"0"}}}} --><p class="has-xxl-font-size" style="margin-top:var(--wp--preset--spacing--x-small);margin-bottom:0">has-xxl-font-size</p><!-- /wp:paragraph --><!-- wp:paragraph {"fontSize":"xl","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small","bottom":"0"}}}} --><p class="has-xl-font-size" style="margin-top:var(--wp--preset--spacing--x-small);margin-bottom:0">has-xl-font-size</p><!-- /wp:paragraph --><!-- wp:paragraph {"fontSize":"lead","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small","bottom":"0"}}}} --><p class="has-lead-font-size" style="margin-top:var(--wp--preset--spacing--x-small);margin-bottom:0">has-lead-font-size</p><!-- /wp:paragraph --><!-- wp:paragraph {"fontSize":"l","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small","bottom":"0"}}}} --><p class="has-l-font-size" style="margin-top:var(--wp--preset--spacing--x-small);margin-bottom:0">has-l-font-size</p><!-- /wp:paragraph --><!-- wp:paragraph {"fontSize":"base","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small","bottom":"0"}}}} --><p class="has-base-font-size" style="margin-top:var(--wp--preset--spacing--x-small);margin-bottom:0">has-base-font-size</p><!-- /wp:paragraph --><!-- wp:paragraph {"fontSize":"m","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small","bottom":"0"}}}} --><p class="has-m-font-size" style="margin-top:var(--wp--preset--spacing--x-small);margin-bottom:0">has-m-font-size</p><!-- /wp:paragraph --><!-- wp:paragraph {"fontSize":"s","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small","bottom":"0"}}}} --><p class="has-s-font-size" style="margin-top:var(--wp--preset--spacing--x-small);margin-bottom:0">has-s-font-size</p><!-- /wp:paragraph --><!-- wp:paragraph {"fontSize":"xs","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small","bottom":"0"}}}} --><p class="has-xs-font-size" style="margin-top:var(--wp--preset--spacing--x-small);margin-bottom:0">has-xs-font-size</p><!-- /wp:paragraph --><!-- wp:paragraph {"fontSize":"xxs","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small","bottom":"0"}}}} --><p class="has-xxs-font-size" style="margin-top:var(--wp--preset--spacing--x-small);margin-bottom:0">has-xxs-font-size</p><!-- /wp:paragraph --><!-- wp:paragraph {"fontSize":"s","textColor":"text-2"} --><p class="has-text-2-color has-text-color has-s-font-size"><?php echo wp_kses_post( __( 'Font families, applied as <code>has-{slug}-font-family</code>.', 'blockwright' ) ); ?></p><!-- /wp:paragraph --><!-- wp:paragraph {"fontFamily":"headings","fontSize":"l","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small","bottom":"0"}}}} --><p class="has-headings-font-family has-l-font-size" style="margin-top:var(--wp--preset--spacing--x-small);margin-bottom:0">has-headings-font-family</p><!-- /wp:paragraph --><!-- wp:paragraph {"fontFamily":"body","fontSize":"l","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small","bottom":"0"}}}} --><p class="has-body-font-family has-l-font-size" style="margin-top:var(--wp--preset--spacing--x-small);margin-bottom:0">has-body-font-family</p><!-- /wp:paragraph --><!-- wp:paragraph {"fontFamily":"mono","fontSize":"l","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small","bottom":"0"}}}} --><p class="has-mono-font-family has-l-font-size" style="margin-top:var(--wp--preset--spacing--x-small);margin-bottom:0">has-mono-font-family</p><!-- /wp:paragraph -->
		<!-- wp:heading {"level":3,"fontSize":"m","style":{"spacing":{"margin":{"top":"var:preset|spacing|large"}}}} --><h3 class="wp-block-heading has-m-font-size" style="margin-top:var(--wp--preset--spacing--large)"><?php esc_html_e( 'Buttons', 'blockwright' ); ?></h3><!-- /wp:heading --><!-- wp:paragraph {"fontSize":"s","textColor":"text-2"} --><p class="has-text-2-color has-text-color has-s-font-size"><?php esc_html_e( 'Four emphasis tiers, strongest to quietest. Use one primary (Fill) per view and let the rest recede. All adapt to the color variation and to light/dark, and meet WCAG AA. The Styles panel labels these Fill / Soft / Outline / Subtle.', 'blockwright' ); ?></p><!-- /wp:paragraph -->
		<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
		<div class="wp-block-columns are-vertically-aligned-center" style="margin-top:var(--wp--preset--spacing--small)">
			<!-- wp:column {"verticalAlignment":"center","width":"13rem"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:13rem">
				<!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button {"className":"is-style-fill"} --><div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Get started', 'blockwright' ); ?></a></div><!-- /wp:button --></div><!-- /wp:buttons -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center">
				<!-- wp:paragraph {"textColor":"text-2","fontSize":"xs","fontFamily":"mono","style":{"spacing":{"margin":{"bottom":"0"}}}} --><p class="has-text-2-color has-text-color has-mono-font-family has-xs-font-size" style="margin-bottom:0">is-style-fill</p><!-- /wp:paragraph -->
				<!-- wp:paragraph {"textColor":"text-2","fontSize":"s","style":{"spacing":{"margin":{"top":"var:preset|spacing|xx-small"}}}} --><p class="has-text-2-color has-text-color has-s-font-size" style="margin-top:var(--wp--preset--spacing--xx-small)"><?php esc_html_e( 'Fill, the one main action', 'blockwright' ); ?></p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
		<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
		<div class="wp-block-columns are-vertically-aligned-center" style="margin-top:var(--wp--preset--spacing--small)">
			<!-- wp:column {"verticalAlignment":"center","width":"13rem"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:13rem">
				<!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button {"className":"is-style-soft"} --><div class="wp-block-button is-style-soft"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Get started', 'blockwright' ); ?></a></div><!-- /wp:button --></div><!-- /wp:buttons -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center">
				<!-- wp:paragraph {"textColor":"text-2","fontSize":"xs","fontFamily":"mono","style":{"spacing":{"margin":{"bottom":"0"}}}} --><p class="has-text-2-color has-text-color has-mono-font-family has-xs-font-size" style="margin-bottom:0">is-style-soft</p><!-- /wp:paragraph -->
				<!-- wp:paragraph {"textColor":"text-2","fontSize":"s","style":{"spacing":{"margin":{"top":"var:preset|spacing|xx-small"}}}} --><p class="has-text-2-color has-text-color has-s-font-size" style="margin-top:var(--wp--preset--spacing--xx-small)"><?php esc_html_e( 'Soft, secondary emphasis', 'blockwright' ); ?></p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
		<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
		<div class="wp-block-columns are-vertically-aligned-center" style="margin-top:var(--wp--preset--spacing--small)">
			<!-- wp:column {"verticalAlignment":"center","width":"13rem"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:13rem">
				<!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} --><div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Get started', 'blockwright' ); ?></a></div><!-- /wp:button --></div><!-- /wp:buttons -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center">
				<!-- wp:paragraph {"textColor":"text-2","fontSize":"xs","fontFamily":"mono","style":{"spacing":{"margin":{"bottom":"0"}}}} --><p class="has-text-2-color has-text-color has-mono-font-family has-xs-font-size" style="margin-bottom:0">is-style-outline</p><!-- /wp:paragraph -->
				<!-- wp:paragraph {"textColor":"text-2","fontSize":"s","style":{"spacing":{"margin":{"top":"var:preset|spacing|xx-small"}}}} --><p class="has-text-2-color has-text-color has-s-font-size" style="margin-top:var(--wp--preset--spacing--xx-small)"><?php esc_html_e( 'Outline, quiet secondary', 'blockwright' ); ?></p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
		<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
		<div class="wp-block-columns are-vertically-aligned-center" style="margin-top:var(--wp--preset--spacing--small)">
			<!-- wp:column {"verticalAlignment":"center","width":"13rem"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:13rem">
				<!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button {"className":"is-style-subtle"} --><div class="wp-block-button is-style-subtle"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Get started', 'blockwright' ); ?></a></div><!-- /wp:button --></div><!-- /wp:buttons -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center">
				<!-- wp:paragraph {"textColor":"text-2","fontSize":"xs","fontFamily":"mono","style":{"spacing":{"margin":{"bottom":"0"}}}} --><p class="has-text-2-color has-text-color has-mono-font-family has-xs-font-size" style="margin-bottom:0">is-style-subtle</p><!-- /wp:paragraph -->
				<!-- wp:paragraph {"textColor":"text-2","fontSize":"s","style":{"spacing":{"margin":{"top":"var:preset|spacing|xx-small"}}}} --><p class="has-text-2-color has-text-color has-s-font-size" style="margin-top:var(--wp--preset--spacing--xx-small)"><?php esc_html_e( 'Subtle, lowest emphasis', 'blockwright' ); ?></p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
		<!-- wp:heading {"level":3,"fontSize":"m","style":{"spacing":{"margin":{"top":"var:preset|spacing|large"}}}} --><h3 class="wp-block-heading has-m-font-size" style="margin-top:var(--wp--preset--spacing--large)"><?php esc_html_e( 'Links', 'blockwright' ); ?></h3><!-- /wp:heading --><!-- wp:paragraph {"fontSize":"s","textColor":"text-2"} --><p class="has-text-2-color has-text-color has-s-font-size"><?php echo wp_kses_post( __( 'The <code>a</code> element. Inline links use the link color with an underline.', 'blockwright' ) ); ?></p><!-- /wp:paragraph --><!-- wp:paragraph {"fontSize":"base"} --><p class="has-base-font-size"><?php echo wp_kses_post( __( 'A paragraph with an <a href="#elements">inline link</a> and following text, so it can be seen in running copy.', 'blockwright' ) ); ?></p><!-- /wp:paragraph -->
		<!-- wp:heading {"level":3,"fontSize":"m","style":{"spacing":{"margin":{"top":"var:preset|spacing|large"}}}} --><h3 class="wp-block-heading has-m-font-size" style="margin-top:var(--wp--preset--spacing--large)"><?php esc_html_e( 'Editorial roles', 'blockwright' ); ?></h3><!-- /wp:heading --><!-- wp:paragraph {"fontSize":"s","textColor":"text-2"} --><p class="has-text-2-color has-text-color has-s-font-size"><?php esc_html_e( 'Brand-colored text styles for labels and notes. Each carries the scheme hue through tokens, so it re-hues with the color variation and meets WCAG AA in light and dark. The Styles panel labels these Eyebrow / Badge, plus a Callout group style.', 'blockwright' ); ?></p><!-- /wp:paragraph --><!-- wp:paragraph {"className":"is-style-eyebrow","fontSize":"xs"} --><p class="is-style-eyebrow has-xs-font-size"><?php esc_html_e( 'What we do', 'blockwright' ); ?></p><!-- /wp:paragraph -->
		<!-- wp:heading {"level":4,"style":{"spacing":{"margin":{"top":"0"}}}} --><h4 class="wp-block-heading" style="margin-top:0"><?php esc_html_e( 'Eyebrow above a heading', 'blockwright' ); ?></h4><!-- /wp:heading -->
		<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|small"},"padding":{"left":"0","right":"0"}}},"layout":{"type":"constrained"}} --><div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--small);padding-left:0;padding-right:0"><!-- wp:paragraph {"className":"is-style-badge","style":{"spacing":{"margin":{"top":"0"}}}} --><p class="is-style-badge" style="margin-top:0"><?php esc_html_e( 'New', 'blockwright' ); ?></p><!-- /wp:paragraph --></div><!-- /wp:group -->
		<!-- wp:group {"className":"is-style-callout","style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}},"layout":{"type":"constrained"}} --><div class="wp-block-group is-style-callout" style="margin-top:var(--wp--preset--spacing--small)"><!-- wp:paragraph {"className":"is-style-eyebrow","fontSize":"xs"} --><p class="is-style-eyebrow has-xs-font-size"><?php esc_html_e( 'Note', 'blockwright' ); ?></p><!-- /wp:paragraph --><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} --><p style="margin-top:0;margin-bottom:0"><?php esc_html_e( 'A subtle brand-tinted callout band for a highlighted note or aside. Body text stays the neutral text token, at least 4.5:1 on the tint in both modes.', 'blockwright' ); ?></p><!-- /wp:paragraph --></div><!-- /wp:group -->
		<!-- wp:heading {"level":3,"fontSize":"m","style":{"spacing":{"margin":{"top":"var:preset|spacing|large"}}}} --><h3 class="wp-block-heading has-m-font-size" style="margin-top:var(--wp--preset--spacing--large)"><?php esc_html_e( 'Forms', 'blockwright' ); ?></h3><!-- /wp:heading --><!-- wp:paragraph {"fontSize":"s","textColor":"text-2"} --><p class="has-text-2-color has-text-color has-s-font-size"><?php esc_html_e( 'Native form controls, styled at the element level (no class needed). A form plugin that ships its own styling takes over when present.', 'blockwright' ); ?></p><!-- /wp:paragraph -->
	<!-- wp:html -->
	<div style="display:flex;flex-direction:column;gap:0.75rem;max-width:24rem;margin-top:1rem">
		<label for="bw-sg-text"><?php esc_html_e( 'Text input', 'blockwright' ); ?></label>
		<input id="bw-sg-text" type="text" placeholder="<?php esc_attr_e( 'Placeholder text', 'blockwright' ); ?>">
		<label for="bw-sg-select"><?php esc_html_e( 'Select', 'blockwright' ); ?></label>
		<select id="bw-sg-select"><option><?php esc_html_e( 'Select an option', 'blockwright' ); ?></option></select>
		<label for="bw-sg-textarea"><?php esc_html_e( 'Textarea', 'blockwright' ); ?></label>
		<textarea id="bw-sg-textarea" rows="2"></textarea>
		<button type="submit"><?php esc_html_e( 'Submit', 'blockwright' ); ?></button>
	</div>
	<!-- /wp:html -->
		<!-- wp:heading {"level":3,"fontSize":"m","style":{"spacing":{"margin":{"top":"var:preset|spacing|large"}}}} --><h3 class="wp-block-heading has-m-font-size" style="margin-top:var(--wp--preset--spacing--large)"><?php esc_html_e( 'Spacing', 'blockwright' ); ?></h3><!-- /wp:heading --><!-- wp:paragraph {"fontSize":"s","textColor":"text-2"} --><p class="has-text-2-color has-text-color has-s-font-size"><?php echo wp_kses_post( __( 'The spacing scale, applied through block spacing controls (emitted as <code>var:preset|spacing|{slug}</code>). Bars are drawn to scale.', 'blockwright' ) ); ?></p><!-- /wp:paragraph -->
	<!-- wp:html -->
	<div style="display:flex;flex-direction:column;gap:0.5rem;margin-top:1rem">
		<div style="display:flex;align-items:center;gap:1rem">
			<div style="height:1rem;width:var(--wp--preset--spacing--xxx-small);min-width:2px;background:var(--wp--preset--color--primary);border-radius:2px"></div>
			<span style="font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;color:var(--wp--preset--color--text-2)">spacing.xxx-small</span>
		</div>
		<div style="display:flex;align-items:center;gap:1rem">
			<div style="height:1rem;width:var(--wp--preset--spacing--xx-small);min-width:2px;background:var(--wp--preset--color--primary);border-radius:2px"></div>
			<span style="font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;color:var(--wp--preset--color--text-2)">spacing.xx-small</span>
		</div>
		<div style="display:flex;align-items:center;gap:1rem">
			<div style="height:1rem;width:var(--wp--preset--spacing--x-small);min-width:2px;background:var(--wp--preset--color--primary);border-radius:2px"></div>
			<span style="font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;color:var(--wp--preset--color--text-2)">spacing.x-small</span>
		</div>
		<div style="display:flex;align-items:center;gap:1rem">
			<div style="height:1rem;width:var(--wp--preset--spacing--small);min-width:2px;background:var(--wp--preset--color--primary);border-radius:2px"></div>
			<span style="font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;color:var(--wp--preset--color--text-2)">spacing.small</span>
		</div>
		<div style="display:flex;align-items:center;gap:1rem">
			<div style="height:1rem;width:var(--wp--preset--spacing--medium);min-width:2px;background:var(--wp--preset--color--primary);border-radius:2px"></div>
			<span style="font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;color:var(--wp--preset--color--text-2)">spacing.medium</span>
		</div>
		<div style="display:flex;align-items:center;gap:1rem">
			<div style="height:1rem;width:var(--wp--preset--spacing--large);min-width:2px;background:var(--wp--preset--color--primary);border-radius:2px"></div>
			<span style="font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;color:var(--wp--preset--color--text-2)">spacing.large</span>
		</div>
		<div style="display:flex;align-items:center;gap:1rem">
			<div style="height:1rem;width:var(--wp--preset--spacing--x-large);min-width:2px;background:var(--wp--preset--color--primary);border-radius:2px"></div>
			<span style="font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;color:var(--wp--preset--color--text-2)">spacing.x-large</span>
		</div>
		<div style="display:flex;align-items:center;gap:1rem">
			<div style="height:1rem;width:var(--wp--preset--spacing--xx-large);min-width:2px;background:var(--wp--preset--color--primary);border-radius:2px"></div>
			<span style="font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;color:var(--wp--preset--color--text-2)">spacing.xx-large</span>
		</div>
		<div style="display:flex;align-items:center;gap:1rem">
			<div style="height:1rem;width:var(--wp--preset--spacing--xxx-large);min-width:2px;background:var(--wp--preset--color--primary);border-radius:2px"></div>
			<span style="font-family:var(--wp--preset--font-family--mono);font-size:0.75rem;color:var(--wp--preset--color--text-2)">spacing.xxx-large</span>
		</div>
	</div>
	<!-- /wp:html -->
	</div>
	<!-- /wp:group -->

	<!-- wp:separator {"align":"full","backgroundColor":"divider","textColor":"divider","className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large"}}}} --><hr class="wp-block-separator alignfull has-text-color has-divider-color has-alpha-channel-opacity has-divider-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--x-large)"/><!-- /wp:separator -->

	<!-- wp:group {"align":"full","layout":{"type":"constrained"}} --><div class="wp-block-group alignfull"><!-- wp:heading {"level":2,"anchor":"starters"} --><h2 class="wp-block-heading" id="starters"><?php esc_html_e( 'Heroes', 'blockwright' ); ?></h2><!-- /wp:heading --></div><!-- /wp:group -->
	<!-- wp:separator {"align":"full","backgroundColor":"divider","textColor":"divider","className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large","bottom":"0"}}}} --><hr class="wp-block-separator alignfull has-text-color has-divider-color has-alpha-channel-opacity has-divider-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--x-large);margin-bottom:0"/><!-- /wp:separator -->
	<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|x-small","margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--medium)">
		<!-- wp:heading {"level":3,"fontSize":"m"} --><h3 class="wp-block-heading has-m-font-size"><?php echo esc_html_x( 'Hero • Centered', 'Pattern title', 'blockwright' ); ?></h3><!-- /wp:heading -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"s"} --><p class="has-text-2-color has-text-color has-s-font-size"><?php echo esc_html_x( 'A centered hero - a large headline, subhead, and buttons over a full-width band. Use the No Title or Landing Page template so the page title does not show above it.', 'Pattern description', 'blockwright' ); ?></p><!-- /wp:paragraph -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"xs","fontFamily":"mono"} --><p class="has-text-2-color has-text-color has-mono-font-family has-xs-font-size">blockwright/hero-centered</p><!-- /wp:paragraph -->
		<!-- wp:pattern {"slug":"blockwright/hero-centered"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:separator {"align":"full","backgroundColor":"divider","textColor":"divider","className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large","bottom":"0"}}}} --><hr class="wp-block-separator alignfull has-text-color has-divider-color has-alpha-channel-opacity has-divider-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--x-large);margin-bottom:0"/><!-- /wp:separator -->
	<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|x-small","margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--medium)">
		<!-- wp:heading {"level":3,"fontSize":"m"} --><h3 class="wp-block-heading has-m-font-size"><?php echo esc_html_x( 'Hero • Split', 'Pattern title', 'blockwright' ); ?></h3><!-- /wp:heading -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"s"} --><p class="has-text-2-color has-text-color has-s-font-size"><?php echo esc_html_x( 'A two-column hero - a headline, intro, and buttons beside an image. Use the No Title or Landing Page template so the page title does not show above it.', 'Pattern description', 'blockwright' ); ?></p><!-- /wp:paragraph -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"xs","fontFamily":"mono"} --><p class="has-text-2-color has-text-color has-mono-font-family has-xs-font-size">blockwright/hero-split</p><!-- /wp:paragraph -->
		<!-- wp:pattern {"slug":"blockwright/hero-split"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:separator {"align":"full","backgroundColor":"divider","textColor":"divider","className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large","bottom":"0"}}}} --><hr class="wp-block-separator alignfull has-text-color has-divider-color has-alpha-channel-opacity has-divider-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--x-large);margin-bottom:0"/><!-- /wp:separator -->
	<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|x-small","margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--medium)">
		<!-- wp:heading {"level":3,"fontSize":"m"} --><h3 class="wp-block-heading has-m-font-size"><?php echo esc_html_x( 'Hero • Basic', 'Pattern title', 'blockwright' ); ?></h3><!-- /wp:heading -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"s"} --><p class="has-text-2-color has-text-color has-s-font-size"><?php echo esc_html_x( 'A minimal hero - a headline, short intro, and buttons. The simplest page opener. Use the No Title or Landing Page template so the page title does not show above it.', 'Pattern description', 'blockwright' ); ?></p><!-- /wp:paragraph -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"xs","fontFamily":"mono"} --><p class="has-text-2-color has-text-color has-mono-font-family has-xs-font-size">blockwright/hero-basic</p><!-- /wp:paragraph -->
		<!-- wp:pattern {"slug":"blockwright/hero-basic"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:separator {"align":"full","backgroundColor":"divider","textColor":"divider","className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large","bottom":"0"}}}} --><hr class="wp-block-separator alignfull has-text-color has-divider-color has-alpha-channel-opacity has-divider-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--x-large);margin-bottom:0"/><!-- /wp:separator -->
	<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|x-small","margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--medium)">
		<!-- wp:heading {"level":3,"fontSize":"m"} --><h3 class="wp-block-heading has-m-font-size"><?php echo esc_html_x( 'Hero • Image Background', 'Pattern title', 'blockwright' ); ?></h3><!-- /wp:heading -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"s"} --><p class="has-text-2-color has-text-color has-s-font-size"><?php echo esc_html_x( 'A full-width hero with an image background, a legible dark scrim, and a centered headline, subhead, and call to action. Use the No Title or Landing Page template so the page title does not show above it.', 'Pattern description', 'blockwright' ); ?></p><!-- /wp:paragraph -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"xs","fontFamily":"mono"} --><p class="has-text-2-color has-text-color has-mono-font-family has-xs-font-size">blockwright/hero-image</p><!-- /wp:paragraph -->
		<!-- wp:pattern {"slug":"blockwright/hero-image"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:separator {"align":"full","backgroundColor":"divider","textColor":"divider","className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large"}}}} --><hr class="wp-block-separator alignfull has-text-color has-divider-color has-alpha-channel-opacity has-divider-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--x-large)"/><!-- /wp:separator -->
	<!-- wp:group {"align":"full","layout":{"type":"constrained"}} --><div class="wp-block-group alignfull"><!-- wp:heading {"level":2,"anchor":"content"} --><h2 class="wp-block-heading" id="content"><?php esc_html_e( 'Content sections', 'blockwright' ); ?></h2><!-- /wp:heading --></div><!-- /wp:group -->
	<!-- wp:separator {"align":"full","backgroundColor":"divider","textColor":"divider","className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large","bottom":"0"}}}} --><hr class="wp-block-separator alignfull has-text-color has-divider-color has-alpha-channel-opacity has-divider-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--x-large);margin-bottom:0"/><!-- /wp:separator -->
	<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|x-small","margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--medium)">
		<!-- wp:heading {"level":3,"fontSize":"m"} --><h3 class="wp-block-heading has-m-font-size"><?php echo esc_html_x( 'Content • Media & Text', 'Pattern title', 'blockwright' ); ?></h3><!-- /wp:heading -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"s"} --><p class="has-text-2-color has-text-color has-s-font-size"><?php echo esc_html_x( 'Alternating media-and-text rows for explaining a service, approach, mission, or about section. Image left/text right, then flipped.', 'Pattern description', 'blockwright' ); ?></p><!-- /wp:paragraph -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"xs","fontFamily":"mono"} --><p class="has-text-2-color has-text-color has-mono-font-family has-xs-font-size">blockwright/content-media</p><!-- /wp:paragraph -->
		<!-- wp:pattern {"slug":"blockwright/content-media"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:separator {"align":"full","backgroundColor":"divider","textColor":"divider","className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large","bottom":"0"}}}} --><hr class="wp-block-separator alignfull has-text-color has-divider-color has-alpha-channel-opacity has-divider-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--x-large);margin-bottom:0"/><!-- /wp:separator -->
	<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|x-small","margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--medium)">
		<!-- wp:heading {"level":3,"fontSize":"m"} --><h3 class="wp-block-heading has-m-font-size"><?php echo esc_html_x( 'About Intro', 'Pattern title', 'blockwright' ); ?></h3><!-- /wp:heading -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"s"} --><p class="has-text-2-color has-text-color has-s-font-size"><?php echo esc_html_x( 'A centered intro block - eyebrow, headline, and a lead paragraph. Works as an about, mission, or section opener.', 'Pattern description', 'blockwright' ); ?></p><!-- /wp:paragraph -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"xs","fontFamily":"mono"} --><p class="has-text-2-color has-text-color has-mono-font-family has-xs-font-size">blockwright/about-intro</p><!-- /wp:paragraph -->
		<!-- wp:pattern {"slug":"blockwright/about-intro"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:separator {"align":"full","backgroundColor":"divider","textColor":"divider","className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large","bottom":"0"}}}} --><hr class="wp-block-separator alignfull has-text-color has-divider-color has-alpha-channel-opacity has-divider-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--x-large);margin-bottom:0"/><!-- /wp:separator -->
	<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|x-small","margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--medium)">
		<!-- wp:heading {"level":3,"fontSize":"m"} --><h3 class="wp-block-heading has-m-font-size"><?php echo esc_html_x( 'Steps • Process', 'Pattern title', 'blockwright' ); ?></h3><!-- /wp:heading -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"s"} --><p class="has-text-2-color has-text-color has-s-font-size"><?php echo esc_html_x( 'Numbered steps for a "how it works", "your first visit", or "our process" section.', 'Pattern description', 'blockwright' ); ?></p><!-- /wp:paragraph -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"xs","fontFamily":"mono"} --><p class="has-text-2-color has-text-color has-mono-font-family has-xs-font-size">blockwright/steps-process</p><!-- /wp:paragraph -->
		<!-- wp:pattern {"slug":"blockwright/steps-process"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:separator {"align":"full","backgroundColor":"divider","textColor":"divider","className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large","bottom":"0"}}}} --><hr class="wp-block-separator alignfull has-text-color has-divider-color has-alpha-channel-opacity has-divider-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--x-large);margin-bottom:0"/><!-- /wp:separator -->
	<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|x-small","margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--medium)">
		<!-- wp:heading {"level":3,"fontSize":"m"} --><h3 class="wp-block-heading has-m-font-size"><?php echo esc_html_x( 'Section • Feature Grid', 'Pattern title', 'blockwright' ); ?></h3><!-- /wp:heading -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"s"} --><p class="has-text-2-color has-text-color has-s-font-size"><?php echo esc_html_x( 'A grid of features or benefits - an icon, title, and short line per item.', 'Pattern description', 'blockwright' ); ?></p><!-- /wp:paragraph -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"xs","fontFamily":"mono"} --><p class="has-text-2-color has-text-color has-mono-font-family has-xs-font-size">blockwright/section-feature-grid</p><!-- /wp:paragraph -->
		<!-- wp:pattern {"slug":"blockwright/section-feature-grid"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:separator {"align":"full","backgroundColor":"divider","textColor":"divider","className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large","bottom":"0"}}}} --><hr class="wp-block-separator alignfull has-text-color has-divider-color has-alpha-channel-opacity has-divider-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--x-large);margin-bottom:0"/><!-- /wp:separator -->
	<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|x-small","margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--medium)">
		<!-- wp:heading {"level":3,"fontSize":"m"} --><h3 class="wp-block-heading has-m-font-size"><?php echo esc_html_x( 'Section (Constrained)', 'Pattern title', 'blockwright' ); ?></h3><!-- /wp:heading -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"s"} --><p class="has-text-2-color has-text-color has-s-font-size"><?php echo esc_html_x( 'A section at the site\'s content width, for general page building.', 'Pattern description', 'blockwright' ); ?></p><!-- /wp:paragraph -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"xs","fontFamily":"mono"} --><p class="has-text-2-color has-text-color has-mono-font-family has-xs-font-size">blockwright/section-constrained</p><!-- /wp:paragraph -->
		<!-- wp:pattern {"slug":"blockwright/section-constrained"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:separator {"align":"full","backgroundColor":"divider","textColor":"divider","className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large","bottom":"0"}}}} --><hr class="wp-block-separator alignfull has-text-color has-divider-color has-alpha-channel-opacity has-divider-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--x-large);margin-bottom:0"/><!-- /wp:separator -->
	<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|x-small","margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--medium)">
		<!-- wp:heading {"level":3,"fontSize":"m"} --><h3 class="wp-block-heading has-m-font-size"><?php echo esc_html_x( 'Subsection (H3 Constrained)', 'Pattern title', 'blockwright' ); ?></h3><!-- /wp:heading -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"s"} --><p class="has-text-2-color has-text-color has-s-font-size"><?php echo esc_html_x( 'An H3 subsection for use inside a larger section.', 'Pattern description', 'blockwright' ); ?></p><!-- /wp:paragraph -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"xs","fontFamily":"mono"} --><p class="has-text-2-color has-text-color has-mono-font-family has-xs-font-size">blockwright/subsection-constrained</p><!-- /wp:paragraph -->
		<!-- wp:pattern {"slug":"blockwright/subsection-constrained"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:separator {"align":"full","backgroundColor":"divider","textColor":"divider","className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large","bottom":"0"}}}} --><hr class="wp-block-separator alignfull has-text-color has-divider-color has-alpha-channel-opacity has-divider-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--x-large);margin-bottom:0"/><!-- /wp:separator -->
	<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|x-small","margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--medium)">
		<!-- wp:heading {"level":3,"fontSize":"m"} --><h3 class="wp-block-heading has-m-font-size"><?php echo esc_html_x( 'Layout • Stack', 'Pattern title', 'blockwright' ); ?></h3><!-- /wp:heading -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"s"} --><p class="has-text-2-color has-text-color has-s-font-size"><?php echo esc_html_x( 'Neutral vertical stack with consistent block gap. Use as a base wrapper for grouped content.', 'Pattern description', 'blockwright' ); ?></p><!-- /wp:paragraph -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"xs","fontFamily":"mono"} --><p class="has-text-2-color has-text-color has-mono-font-family has-xs-font-size">blockwright/layout-stack</p><!-- /wp:paragraph -->
		<!-- wp:pattern {"slug":"blockwright/layout-stack"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:separator {"align":"full","backgroundColor":"divider","textColor":"divider","className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large","bottom":"0"}}}} --><hr class="wp-block-separator alignfull has-text-color has-divider-color has-alpha-channel-opacity has-divider-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--x-large);margin-bottom:0"/><!-- /wp:separator -->
	<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|x-small","margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--medium)">
		<!-- wp:heading {"level":3,"fontSize":"m"} --><h3 class="wp-block-heading has-m-font-size"><?php echo esc_html_x( 'Layout • Cluster', 'Pattern title', 'blockwright' ); ?></h3><!-- /wp:heading -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"s"} --><p class="has-text-2-color has-text-color has-s-font-size"><?php echo esc_html_x( 'Neutral horizontal cluster layout using flex with wrap and spacing for buttons, links, or meta.', 'Pattern description', 'blockwright' ); ?></p><!-- /wp:paragraph -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"xs","fontFamily":"mono"} --><p class="has-text-2-color has-text-color has-mono-font-family has-xs-font-size">blockwright/layout-cluster</p><!-- /wp:paragraph -->
		<!-- wp:pattern {"slug":"blockwright/layout-cluster"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:separator {"align":"full","backgroundColor":"divider","textColor":"divider","className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large","bottom":"0"}}}} --><hr class="wp-block-separator alignfull has-text-color has-divider-color has-alpha-channel-opacity has-divider-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--x-large);margin-bottom:0"/><!-- /wp:separator -->
	<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|x-small","margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--medium)">
		<!-- wp:heading {"level":3,"fontSize":"m"} --><h3 class="wp-block-heading has-m-font-size"><?php echo esc_html_x( 'Divider • Icon', 'Pattern title', 'blockwright' ); ?></h3><!-- /wp:heading -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"s"} --><p class="has-text-2-color has-text-color has-s-font-size"><?php echo esc_html_x( 'A brand-colored divider line with a small centered icon. Swap the icon for your logo, an image, or any icon from the picker; drop several down a page, each with a different icon.', 'Pattern description', 'blockwright' ); ?></p><!-- /wp:paragraph -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"xs","fontFamily":"mono"} --><p class="has-text-2-color has-text-color has-mono-font-family has-xs-font-size">blockwright/divider-icon</p><!-- /wp:paragraph -->
		<!-- wp:pattern {"slug":"blockwright/divider-icon"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:separator {"align":"full","backgroundColor":"divider","textColor":"divider","className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large"}}}} --><hr class="wp-block-separator alignfull has-text-color has-divider-color has-alpha-channel-opacity has-divider-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--x-large)"/><!-- /wp:separator -->
	<!-- wp:group {"align":"full","layout":{"type":"constrained"}} --><div class="wp-block-group alignfull"><!-- wp:heading {"level":2,"anchor":"offering"} --><h2 class="wp-block-heading" id="offering"><?php esc_html_e( 'Services & pricing', 'blockwright' ); ?></h2><!-- /wp:heading --></div><!-- /wp:group -->
	<!-- wp:separator {"align":"full","backgroundColor":"divider","textColor":"divider","className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large","bottom":"0"}}}} --><hr class="wp-block-separator alignfull has-text-color has-divider-color has-alpha-channel-opacity has-divider-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--x-large);margin-bottom:0"/><!-- /wp:separator -->
	<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|x-small","margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--medium)">
		<!-- wp:heading {"level":3,"fontSize":"m"} --><h3 class="wp-block-heading has-m-font-size"><?php echo esc_html_x( 'Services • Grid', 'Pattern title', 'blockwright' ); ?></h3><!-- /wp:heading -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"s"} --><p class="has-text-2-color has-text-color has-s-font-size"><?php echo esc_html_x( 'A grid of services - an icon, title, description, and a link per service.', 'Pattern description', 'blockwright' ); ?></p><!-- /wp:paragraph -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"xs","fontFamily":"mono"} --><p class="has-text-2-color has-text-color has-mono-font-family has-xs-font-size">blockwright/services-grid</p><!-- /wp:paragraph -->
		<!-- wp:pattern {"slug":"blockwright/services-grid"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:separator {"align":"full","backgroundColor":"divider","textColor":"divider","className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large","bottom":"0"}}}} --><hr class="wp-block-separator alignfull has-text-color has-divider-color has-alpha-channel-opacity has-divider-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--x-large);margin-bottom:0"/><!-- /wp:separator -->
	<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|x-small","margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--medium)">
		<!-- wp:heading {"level":3,"fontSize":"m"} --><h3 class="wp-block-heading has-m-font-size"><?php echo esc_html_x( 'Pricing Table', 'Pattern title', 'blockwright' ); ?></h3><!-- /wp:heading -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"s"} --><p class="has-text-2-color has-text-color has-s-font-size"><?php echo esc_html_x( 'A three-tier pricing table - plan name, price, feature list, and a button per tier.', 'Pattern description', 'blockwright' ); ?></p><!-- /wp:paragraph -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"xs","fontFamily":"mono"} --><p class="has-text-2-color has-text-color has-mono-font-family has-xs-font-size">blockwright/pricing-table</p><!-- /wp:paragraph -->
		<!-- wp:pattern {"slug":"blockwright/pricing-table"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:separator {"align":"full","backgroundColor":"divider","textColor":"divider","className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large","bottom":"0"}}}} --><hr class="wp-block-separator alignfull has-text-color has-divider-color has-alpha-channel-opacity has-divider-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--x-large);margin-bottom:0"/><!-- /wp:separator -->
	<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|x-small","margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--medium)">
		<!-- wp:heading {"level":3,"fontSize":"m"} --><h3 class="wp-block-heading has-m-font-size"><?php echo esc_html_x( 'Comparison Cards', 'Pattern title', 'blockwright' ); ?></h3><!-- /wp:heading -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"s"} --><p class="has-text-2-color has-text-color has-s-font-size"><?php echo esc_html_x( 'A two-card "the usual way vs working with us" comparison.', 'Pattern description', 'blockwright' ); ?></p><!-- /wp:paragraph -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"xs","fontFamily":"mono"} --><p class="has-text-2-color has-text-color has-mono-font-family has-xs-font-size">blockwright/comparison-cards</p><!-- /wp:paragraph -->
		<!-- wp:pattern {"slug":"blockwright/comparison-cards"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:separator {"align":"full","backgroundColor":"divider","textColor":"divider","className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large"}}}} --><hr class="wp-block-separator alignfull has-text-color has-divider-color has-alpha-channel-opacity has-divider-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--x-large)"/><!-- /wp:separator -->
	<!-- wp:group {"align":"full","layout":{"type":"constrained"}} --><div class="wp-block-group alignfull"><!-- wp:heading {"level":2,"anchor":"proof"} --><h2 class="wp-block-heading" id="proof"><?php esc_html_e( 'Social proof', 'blockwright' ); ?></h2><!-- /wp:heading --></div><!-- /wp:group -->
	<!-- wp:separator {"align":"full","backgroundColor":"divider","textColor":"divider","className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large","bottom":"0"}}}} --><hr class="wp-block-separator alignfull has-text-color has-divider-color has-alpha-channel-opacity has-divider-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--x-large);margin-bottom:0"/><!-- /wp:separator -->
	<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|x-small","margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--medium)">
		<!-- wp:heading {"level":3,"fontSize":"m"} --><h3 class="wp-block-heading has-m-font-size"><?php echo esc_html_x( 'Stats Band', 'Pattern title', 'blockwright' ); ?></h3><!-- /wp:heading -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"s"} --><p class="has-text-2-color has-text-color has-s-font-size"><?php echo esc_html_x( 'A row of headline numbers - years in practice, clients served, rating, impact. Trust signal for any site type.', 'Pattern description', 'blockwright' ); ?></p><!-- /wp:paragraph -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"xs","fontFamily":"mono"} --><p class="has-text-2-color has-text-color has-mono-font-family has-xs-font-size">blockwright/stats-band</p><!-- /wp:paragraph -->
		<!-- wp:pattern {"slug":"blockwright/stats-band"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:separator {"align":"full","backgroundColor":"divider","textColor":"divider","className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large","bottom":"0"}}}} --><hr class="wp-block-separator alignfull has-text-color has-divider-color has-alpha-channel-opacity has-divider-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--x-large);margin-bottom:0"/><!-- /wp:separator -->
	<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|x-small","margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--medium)">
		<!-- wp:heading {"level":3,"fontSize":"m"} --><h3 class="wp-block-heading has-m-font-size"><?php echo esc_html_x( 'Stats • Icon Grid', 'Pattern title', 'blockwright' ); ?></h3><!-- /wp:heading -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"s"} --><p class="has-text-2-color has-text-color has-s-font-size"><?php echo esc_html_x( 'A grid of headline numbers, each led by an icon - years, projects, rating, response. An icon-led alternative to the stats band. Pairs with the Stat Counter block from Blockwright Blocks.', 'Pattern description', 'blockwright' ); ?></p><!-- /wp:paragraph -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"xs","fontFamily":"mono"} --><p class="has-text-2-color has-text-color has-mono-font-family has-xs-font-size">blockwright/stats-grid</p><!-- /wp:paragraph -->
		<!-- wp:pattern {"slug":"blockwright/stats-grid"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:separator {"align":"full","backgroundColor":"divider","textColor":"divider","className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large","bottom":"0"}}}} --><hr class="wp-block-separator alignfull has-text-color has-divider-color has-alpha-channel-opacity has-divider-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--x-large);margin-bottom:0"/><!-- /wp:separator -->
	<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|x-small","margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--medium)">
		<!-- wp:heading {"level":3,"fontSize":"m"} --><h3 class="wp-block-heading has-m-font-size"><?php echo esc_html_x( 'Testimonials • Grid', 'Pattern title', 'blockwright' ); ?></h3><!-- /wp:heading -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"s"} --><p class="has-text-2-color has-text-color has-s-font-size"><?php echo esc_html_x( 'A grid of customer testimonials - a quote, name, and role per card. Social proof; use real names and outcomes.', 'Pattern description', 'blockwright' ); ?></p><!-- /wp:paragraph -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"xs","fontFamily":"mono"} --><p class="has-text-2-color has-text-color has-mono-font-family has-xs-font-size">blockwright/testimonials-grid</p><!-- /wp:paragraph -->
		<!-- wp:pattern {"slug":"blockwright/testimonials-grid"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:separator {"align":"full","backgroundColor":"divider","textColor":"divider","className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large","bottom":"0"}}}} --><hr class="wp-block-separator alignfull has-text-color has-divider-color has-alpha-channel-opacity has-divider-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--x-large);margin-bottom:0"/><!-- /wp:separator -->
	<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|x-small","margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--medium)">
		<!-- wp:heading {"level":3,"fontSize":"m"} --><h3 class="wp-block-heading has-m-font-size"><?php echo esc_html_x( 'Testimonial', 'Pattern title', 'blockwright' ); ?></h3><!-- /wp:heading -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"s"} --><p class="has-text-2-color has-text-color has-s-font-size"><?php echo esc_html_x( 'A single featured testimonial - one quote with attribution.', 'Pattern description', 'blockwright' ); ?></p><!-- /wp:paragraph -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"xs","fontFamily":"mono"} --><p class="has-text-2-color has-text-color has-mono-font-family has-xs-font-size">blockwright/testimonial</p><!-- /wp:paragraph -->
		<!-- wp:pattern {"slug":"blockwright/testimonial"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:separator {"align":"full","backgroundColor":"divider","textColor":"divider","className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large","bottom":"0"}}}} --><hr class="wp-block-separator alignfull has-text-color has-divider-color has-alpha-channel-opacity has-divider-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--x-large);margin-bottom:0"/><!-- /wp:separator -->
	<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|x-small","margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--medium)">
		<!-- wp:heading {"level":3,"fontSize":"m"} --><h3 class="wp-block-heading has-m-font-size"><?php echo esc_html_x( 'Logos • Cloud', 'Pattern title', 'blockwright' ); ?></h3><!-- /wp:heading -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"s"} --><p class="has-text-2-color has-text-color has-s-font-size"><?php echo esc_html_x( 'A grid of client or partner logos - a quick trust signal near the top of a page.', 'Pattern description', 'blockwright' ); ?></p><!-- /wp:paragraph -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"xs","fontFamily":"mono"} --><p class="has-text-2-color has-text-color has-mono-font-family has-xs-font-size">blockwright/logos-cloud</p><!-- /wp:paragraph -->
		<!-- wp:pattern {"slug":"blockwright/logos-cloud"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:separator {"align":"full","backgroundColor":"divider","textColor":"divider","className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large","bottom":"0"}}}} --><hr class="wp-block-separator alignfull has-text-color has-divider-color has-alpha-channel-opacity has-divider-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--x-large);margin-bottom:0"/><!-- /wp:separator -->
	<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|x-small","margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--medium)">
		<!-- wp:heading {"level":3,"fontSize":"m"} --><h3 class="wp-block-heading has-m-font-size"><?php echo esc_html_x( 'Guarantee Badges', 'Pattern title', 'blockwright' ); ?></h3><!-- /wp:heading -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"s"} --><p class="has-text-2-color has-text-color has-s-font-size"><?php echo esc_html_x( 'A row of trust signals - money-back guarantee, secure checkout, support, rating. Use near a price or a form.', 'Pattern description', 'blockwright' ); ?></p><!-- /wp:paragraph -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"xs","fontFamily":"mono"} --><p class="has-text-2-color has-text-color has-mono-font-family has-xs-font-size">blockwright/guarantee-badges</p><!-- /wp:paragraph -->
		<!-- wp:pattern {"slug":"blockwright/guarantee-badges"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:separator {"align":"full","backgroundColor":"divider","textColor":"divider","className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large","bottom":"0"}}}} --><hr class="wp-block-separator alignfull has-text-color has-divider-color has-alpha-channel-opacity has-divider-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--x-large);margin-bottom:0"/><!-- /wp:separator -->
	<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|x-small","margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--medium)">
		<!-- wp:heading {"level":3,"fontSize":"m"} --><h3 class="wp-block-heading has-m-font-size"><?php echo esc_html_x( 'Scorecard', 'Pattern title', 'blockwright' ); ?></h3><!-- /wp:heading -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"s"} --><p class="has-text-2-color has-text-color has-s-font-size"><?php echo esc_html_x( 'A compact inspection record - a titled header with a reference, rows of label-and-status chips, and a footer note. Pairs with Scorecard • Resolved for a before/after. Good for an audit, checklist, or systems review.', 'Pattern description', 'blockwright' ); ?></p><!-- /wp:paragraph -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"xs","fontFamily":"mono"} --><p class="has-text-2-color has-text-color has-mono-font-family has-xs-font-size">blockwright/scorecard</p><!-- /wp:paragraph -->
		<!-- wp:group {"align":"full","backgroundColor":"surface-2","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group alignfull has-surface-2-background-color has-background" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--small)">
			<!-- wp:pattern {"slug":"blockwright/scorecard"} /-->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
	<!-- wp:separator {"align":"full","backgroundColor":"divider","textColor":"divider","className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large"}}}} --><hr class="wp-block-separator alignfull has-text-color has-divider-color has-alpha-channel-opacity has-divider-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--x-large)"/><!-- /wp:separator -->
	<!-- wp:group {"align":"full","layout":{"type":"constrained"}} --><div class="wp-block-group alignfull"><!-- wp:heading {"level":2,"anchor":"people"} --><h2 class="wp-block-heading" id="people"><?php esc_html_e( 'Team & people', 'blockwright' ); ?></h2><!-- /wp:heading --></div><!-- /wp:group -->
	<!-- wp:separator {"align":"full","backgroundColor":"divider","textColor":"divider","className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large","bottom":"0"}}}} --><hr class="wp-block-separator alignfull has-text-color has-divider-color has-alpha-channel-opacity has-divider-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--x-large);margin-bottom:0"/><!-- /wp:separator -->
	<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|x-small","margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--medium)">
		<!-- wp:heading {"level":3,"fontSize":"m"} --><h3 class="wp-block-heading has-m-font-size"><?php echo esc_html_x( 'Team • Grid', 'Pattern title', 'blockwright' ); ?></h3><!-- /wp:heading -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"s"} --><p class="has-text-2-color has-text-color has-s-font-size"><?php echo esc_html_x( 'A team grid - a photo, name, and role per person.', 'Pattern description', 'blockwright' ); ?></p><!-- /wp:paragraph -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"xs","fontFamily":"mono"} --><p class="has-text-2-color has-text-color has-mono-font-family has-xs-font-size">blockwright/team-grid</p><!-- /wp:paragraph -->
		<!-- wp:pattern {"slug":"blockwright/team-grid"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:separator {"align":"full","backgroundColor":"divider","textColor":"divider","className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large","bottom":"0"}}}} --><hr class="wp-block-separator alignfull has-text-color has-divider-color has-alpha-channel-opacity has-divider-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--x-large);margin-bottom:0"/><!-- /wp:separator -->
	<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|x-small","margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--medium)">
		<!-- wp:heading {"level":3,"fontSize":"m"} --><h3 class="wp-block-heading has-m-font-size"><?php echo esc_html_x( 'Profile Detail', 'Pattern title', 'blockwright' ); ?></h3><!-- /wp:heading -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"s"} --><p class="has-text-2-color has-text-color has-s-font-size"><?php echo esc_html_x( 'A single-person profile - portrait, name, title/credentials, and bio. For a provider, attorney, artist, or team member detail.', 'Pattern description', 'blockwright' ); ?></p><!-- /wp:paragraph -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"xs","fontFamily":"mono"} --><p class="has-text-2-color has-text-color has-mono-font-family has-xs-font-size">blockwright/profile-detail</p><!-- /wp:paragraph -->
		<!-- wp:pattern {"slug":"blockwright/profile-detail"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:separator {"align":"full","backgroundColor":"divider","textColor":"divider","className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large","bottom":"0"}}}} --><hr class="wp-block-separator alignfull has-text-color has-divider-color has-alpha-channel-opacity has-divider-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--x-large);margin-bottom:0"/><!-- /wp:separator -->
	<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|x-small","margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--medium)">
		<!-- wp:heading {"level":3,"fontSize":"m"} --><h3 class="wp-block-heading has-m-font-size"><?php echo esc_html_x( 'Skills Grid', 'Pattern title', 'blockwright' ); ?></h3><!-- /wp:heading -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"s"} --><p class="has-text-2-color has-text-color has-s-font-size"><?php echo esc_html_x( 'Showcase skills and expertise in a responsive grid. Includes icons, titles, and descriptions.', 'Pattern description', 'blockwright' ); ?></p><!-- /wp:paragraph -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"xs","fontFamily":"mono"} --><p class="has-text-2-color has-text-color has-mono-font-family has-xs-font-size">blockwright/skills-grid</p><!-- /wp:paragraph -->
		<!-- wp:pattern {"slug":"blockwright/skills-grid"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:separator {"align":"full","backgroundColor":"divider","textColor":"divider","className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large"}}}} --><hr class="wp-block-separator alignfull has-text-color has-divider-color has-alpha-channel-opacity has-divider-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--x-large)"/><!-- /wp:separator -->
	<!-- wp:group {"align":"full","layout":{"type":"constrained"}} --><div class="wp-block-group alignfull"><!-- wp:heading {"level":2,"anchor":"work"} --><h2 class="wp-block-heading" id="work"><?php esc_html_e( 'Portfolio & work', 'blockwright' ); ?></h2><!-- /wp:heading --></div><!-- /wp:group -->
	<!-- wp:separator {"align":"full","backgroundColor":"divider","textColor":"divider","className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large","bottom":"0"}}}} --><hr class="wp-block-separator alignfull has-text-color has-divider-color has-alpha-channel-opacity has-divider-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--x-large);margin-bottom:0"/><!-- /wp:separator -->
	<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|x-small","margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--medium)">
		<!-- wp:heading {"level":3,"fontSize":"m"} --><h3 class="wp-block-heading has-m-font-size"><?php echo esc_html_x( 'Project Grid', 'Pattern title', 'blockwright' ); ?></h3><!-- /wp:heading -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"s"} --><p class="has-text-2-color has-text-color has-s-font-size"><?php echo esc_html_x( 'Portfolio projects in a responsive grid - an image, title, summary, and a link to the full project.', 'Pattern description', 'blockwright' ); ?></p><!-- /wp:paragraph -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"xs","fontFamily":"mono"} --><p class="has-text-2-color has-text-color has-mono-font-family has-xs-font-size">blockwright/project-grid</p><!-- /wp:paragraph -->
		<!-- wp:pattern {"slug":"blockwright/project-grid"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:separator {"align":"full","backgroundColor":"divider","textColor":"divider","className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large","bottom":"0"}}}} --><hr class="wp-block-separator alignfull has-text-color has-divider-color has-alpha-channel-opacity has-divider-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--x-large);margin-bottom:0"/><!-- /wp:separator -->
	<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|x-small","margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--medium)">
		<!-- wp:heading {"level":3,"fontSize":"m"} --><h3 class="wp-block-heading has-m-font-size"><?php echo esc_html_x( 'Case Study', 'Pattern title', 'blockwright' ); ?></h3><!-- /wp:heading -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"s"} --><p class="has-text-2-color has-text-color has-s-font-size"><?php echo esc_html_x( 'Detailed project case study layout with challenge, solution, and results sections. Use the No Title or Landing Page template so the page title does not show above it.', 'Pattern description', 'blockwright' ); ?></p><!-- /wp:paragraph -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"xs","fontFamily":"mono"} --><p class="has-text-2-color has-text-color has-mono-font-family has-xs-font-size">blockwright/case-study</p><!-- /wp:paragraph -->
		<!-- wp:pattern {"slug":"blockwright/case-study"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:separator {"align":"full","backgroundColor":"divider","textColor":"divider","className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large","bottom":"0"}}}} --><hr class="wp-block-separator alignfull has-text-color has-divider-color has-alpha-channel-opacity has-divider-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--x-large);margin-bottom:0"/><!-- /wp:separator -->
	<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|x-small","margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--medium)">
		<!-- wp:heading {"level":3,"fontSize":"m"} --><h3 class="wp-block-heading has-m-font-size"><?php echo esc_html_x( 'Gallery • Image Grid', 'Pattern title', 'blockwright' ); ?></h3><!-- /wp:heading -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"s"} --><p class="has-text-2-color has-text-color has-s-font-size"><?php echo esc_html_x( 'A static three-column image gallery for showing work, photos, or a portfolio sample - a heading, a short intro, and a cropped image grid.', 'Pattern description', 'blockwright' ); ?></p><!-- /wp:paragraph -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"xs","fontFamily":"mono"} --><p class="has-text-2-color has-text-color has-mono-font-family has-xs-font-size">blockwright/gallery</p><!-- /wp:paragraph -->
		<!-- wp:pattern {"slug":"blockwright/gallery"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:separator {"align":"full","backgroundColor":"divider","textColor":"divider","className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large"}}}} --><hr class="wp-block-separator alignfull has-text-color has-divider-color has-alpha-channel-opacity has-divider-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--x-large)"/><!-- /wp:separator -->
	<!-- wp:group {"align":"full","layout":{"type":"constrained"}} --><div class="wp-block-group alignfull"><!-- wp:heading {"level":2,"anchor":"cta"} --><h2 class="wp-block-heading" id="cta"><?php esc_html_e( 'Calls to action', 'blockwright' ); ?></h2><!-- /wp:heading --></div><!-- /wp:group -->
	<!-- wp:separator {"align":"full","backgroundColor":"divider","textColor":"divider","className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large","bottom":"0"}}}} --><hr class="wp-block-separator alignfull has-text-color has-divider-color has-alpha-channel-opacity has-divider-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--x-large);margin-bottom:0"/><!-- /wp:separator -->
	<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|x-small","margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--medium)">
		<!-- wp:heading {"level":3,"fontSize":"m"} --><h3 class="wp-block-heading has-m-font-size"><?php echo esc_html_x( 'CTA • Centered', 'Pattern title', 'blockwright' ); ?></h3><!-- /wp:heading -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"s"} --><p class="has-text-2-color has-text-color has-s-font-size"><?php echo esc_html_x( 'A centered call-to-action band - a heading, one line, and two buttons. Use it to close a page.', 'Pattern description', 'blockwright' ); ?></p><!-- /wp:paragraph -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"xs","fontFamily":"mono"} --><p class="has-text-2-color has-text-color has-mono-font-family has-xs-font-size">blockwright/cta-centered</p><!-- /wp:paragraph -->
		<!-- wp:pattern {"slug":"blockwright/cta-centered"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:separator {"align":"full","backgroundColor":"divider","textColor":"divider","className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large","bottom":"0"}}}} --><hr class="wp-block-separator alignfull has-text-color has-divider-color has-alpha-channel-opacity has-divider-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--x-large);margin-bottom:0"/><!-- /wp:separator -->
	<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|x-small","margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--medium)">
		<!-- wp:heading {"level":3,"fontSize":"m"} --><h3 class="wp-block-heading has-m-font-size"><?php echo esc_html_x( 'CTA • Stripe', 'Pattern title', 'blockwright' ); ?></h3><!-- /wp:heading -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"s"} --><p class="has-text-2-color has-text-color has-s-font-size"><?php echo esc_html_x( 'A full-width call-to-action stripe - a shaded band with one line of text and buttons.', 'Pattern description', 'blockwright' ); ?></p><!-- /wp:paragraph -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"xs","fontFamily":"mono"} --><p class="has-text-2-color has-text-color has-mono-font-family has-xs-font-size">blockwright/cta-stripe</p><!-- /wp:paragraph -->
		<!-- wp:pattern {"slug":"blockwright/cta-stripe"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:separator {"align":"full","backgroundColor":"divider","textColor":"divider","className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large","bottom":"0"}}}} --><hr class="wp-block-separator alignfull has-text-color has-divider-color has-alpha-channel-opacity has-divider-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--x-large);margin-bottom:0"/><!-- /wp:separator -->
	<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|x-small","margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--medium)">
		<!-- wp:heading {"level":3,"fontSize":"m"} --><h3 class="wp-block-heading has-m-font-size"><?php echo esc_html_x( 'Offer Callout', 'Pattern title', 'blockwright' ); ?></h3><!-- /wp:heading -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"s"} --><p class="has-text-2-color has-text-color has-s-font-size"><?php echo esc_html_x( 'A bold promotional callout - an eyebrow, a headline offer, the terms, and one button. For a limited-time deal.', 'Pattern description', 'blockwright' ); ?></p><!-- /wp:paragraph -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"xs","fontFamily":"mono"} --><p class="has-text-2-color has-text-color has-mono-font-family has-xs-font-size">blockwright/offer-callout</p><!-- /wp:paragraph -->
		<!-- wp:pattern {"slug":"blockwright/offer-callout"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:separator {"align":"full","backgroundColor":"divider","textColor":"divider","className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large","bottom":"0"}}}} --><hr class="wp-block-separator alignfull has-text-color has-divider-color has-alpha-channel-opacity has-divider-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--x-large);margin-bottom:0"/><!-- /wp:separator -->
	<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|x-small","margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--medium)">
		<!-- wp:heading {"level":3,"fontSize":"m"} --><h3 class="wp-block-heading has-m-font-size"><?php echo esc_html_x( 'Announcement Bar', 'Pattern title', 'blockwright' ); ?></h3><!-- /wp:heading -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"s"} --><p class="has-text-2-color has-text-color has-s-font-size"><?php echo esc_html_x( 'A slim full-width bar for the top of the page - a short announcement or promotion with a link. Drop it above the header to run site-wide.', 'Pattern description', 'blockwright' ); ?></p><!-- /wp:paragraph -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"xs","fontFamily":"mono"} --><p class="has-text-2-color has-text-color has-mono-font-family has-xs-font-size">blockwright/announcement-bar</p><!-- /wp:paragraph -->
		<!-- wp:pattern {"slug":"blockwright/announcement-bar"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:separator {"align":"full","backgroundColor":"divider","textColor":"divider","className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large"}}}} --><hr class="wp-block-separator alignfull has-text-color has-divider-color has-alpha-channel-opacity has-divider-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--x-large)"/><!-- /wp:separator -->
	<!-- wp:group {"align":"full","layout":{"type":"constrained"}} --><div class="wp-block-group alignfull"><!-- wp:heading {"level":2,"anchor":"contact"} --><h2 class="wp-block-heading" id="contact"><?php esc_html_e( 'Contact & location', 'blockwright' ); ?></h2><!-- /wp:heading --></div><!-- /wp:group -->
	<!-- wp:separator {"align":"full","backgroundColor":"divider","textColor":"divider","className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large","bottom":"0"}}}} --><hr class="wp-block-separator alignfull has-text-color has-divider-color has-alpha-channel-opacity has-divider-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--x-large);margin-bottom:0"/><!-- /wp:separator -->
	<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|x-small","margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--medium)">
		<!-- wp:heading {"level":3,"fontSize":"m"} --><h3 class="wp-block-heading has-m-font-size"><?php echo esc_html_x( 'Contact • Simple', 'Pattern title', 'blockwright' ); ?></h3><!-- /wp:heading -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"s"} --><p class="has-text-2-color has-text-color has-s-font-size"><?php echo esc_html_x( 'A simple contact section - a heading, short intro, and your contact details.', 'Pattern description', 'blockwright' ); ?></p><!-- /wp:paragraph -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"xs","fontFamily":"mono"} --><p class="has-text-2-color has-text-color has-mono-font-family has-xs-font-size">blockwright/contact-simple</p><!-- /wp:paragraph -->
		<!-- wp:pattern {"slug":"blockwright/contact-simple"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:separator {"align":"full","backgroundColor":"divider","textColor":"divider","className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large","bottom":"0"}}}} --><hr class="wp-block-separator alignfull has-text-color has-divider-color has-alpha-channel-opacity has-divider-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--x-large);margin-bottom:0"/><!-- /wp:separator -->
	<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|x-small","margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--medium)">
		<!-- wp:heading {"level":3,"fontSize":"m"} --><h3 class="wp-block-heading has-m-font-size"><?php echo esc_html_x( 'Form • Contact', 'Pattern title', 'blockwright' ); ?></h3><!-- /wp:heading -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"s"} --><p class="has-text-2-color has-text-color has-s-font-size"><?php echo esc_html_x( 'A simple name / email / message contact form. Style-only: connect delivery with a form plugin (the bare form does not send on its own).', 'Pattern description', 'blockwright' ); ?></p><!-- /wp:paragraph -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"xs","fontFamily":"mono"} --><p class="has-text-2-color has-text-color has-mono-font-family has-xs-font-size">blockwright/form-contact</p><!-- /wp:paragraph -->
		<!-- wp:pattern {"slug":"blockwright/form-contact"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:separator {"align":"full","backgroundColor":"divider","textColor":"divider","className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large","bottom":"0"}}}} --><hr class="wp-block-separator alignfull has-text-color has-divider-color has-alpha-channel-opacity has-divider-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--x-large);margin-bottom:0"/><!-- /wp:separator -->
	<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|x-small","margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--medium)">
		<!-- wp:heading {"level":3,"fontSize":"m"} --><h3 class="wp-block-heading has-m-font-size"><?php echo esc_html_x( 'Form • Email Signup', 'Pattern title', 'blockwright' ); ?></h3><!-- /wp:heading -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"s"} --><p class="has-text-2-color has-text-color has-s-font-size"><?php echo esc_html_x( 'A compact email-capture form - heading, one line, email field, submit. Style-only: connect delivery with a form/newsletter plugin (the bare form does not send on its own).', 'Pattern description', 'blockwright' ); ?></p><!-- /wp:paragraph -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"xs","fontFamily":"mono"} --><p class="has-text-2-color has-text-color has-mono-font-family has-xs-font-size">blockwright/form-signup</p><!-- /wp:paragraph -->
		<!-- wp:pattern {"slug":"blockwright/form-signup"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:separator {"align":"full","backgroundColor":"divider","textColor":"divider","className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large","bottom":"0"}}}} --><hr class="wp-block-separator alignfull has-text-color has-divider-color has-alpha-channel-opacity has-divider-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--x-large);margin-bottom:0"/><!-- /wp:separator -->
	<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|x-small","margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--medium)">
		<!-- wp:heading {"level":3,"fontSize":"m"} --><h3 class="wp-block-heading has-m-font-size"><?php echo esc_html_x( 'Location & Hours', 'Pattern title', 'blockwright' ); ?></h3><!-- /wp:heading -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"s"} --><p class="has-text-2-color has-text-color has-s-font-size"><?php echo esc_html_x( 'Address, opening hours, and a "Get directions" link. No embedded third-party map by default (privacy); add an embed block if you want one.', 'Pattern description', 'blockwright' ); ?></p><!-- /wp:paragraph -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"xs","fontFamily":"mono"} --><p class="has-text-2-color has-text-color has-mono-font-family has-xs-font-size">blockwright/location-hours</p><!-- /wp:paragraph -->
		<!-- wp:pattern {"slug":"blockwright/location-hours"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:separator {"align":"full","backgroundColor":"divider","textColor":"divider","className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large","bottom":"0"}}}} --><hr class="wp-block-separator alignfull has-text-color has-divider-color has-alpha-channel-opacity has-divider-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--x-large);margin-bottom:0"/><!-- /wp:separator -->
	<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|x-small","margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--medium)">
		<!-- wp:heading {"level":3,"fontSize":"m"} --><h3 class="wp-block-heading has-m-font-size"><?php echo esc_html_x( 'FAQ', 'Pattern title', 'blockwright' ); ?></h3><!-- /wp:heading -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"s"} --><p class="has-text-2-color has-text-color has-s-font-size"><?php echo esc_html_x( 'A frequently-asked-questions accordion - collapsible question-and-answer pairs (core Details block, no plugin).', 'Pattern description', 'blockwright' ); ?></p><!-- /wp:paragraph -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"xs","fontFamily":"mono"} --><p class="has-text-2-color has-text-color has-mono-font-family has-xs-font-size">blockwright/faq</p><!-- /wp:paragraph -->
		<!-- wp:pattern {"slug":"blockwright/faq"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:separator {"align":"full","backgroundColor":"divider","textColor":"divider","className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large"}}}} --><hr class="wp-block-separator alignfull has-text-color has-divider-color has-alpha-channel-opacity has-divider-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--x-large)"/><!-- /wp:separator -->
	<!-- wp:group {"align":"full","layout":{"type":"constrained"}} --><div class="wp-block-group alignfull"><!-- wp:heading {"level":2,"anchor":"blog"} --><h2 class="wp-block-heading" id="blog"><?php esc_html_e( 'Blog & posts', 'blockwright' ); ?></h2><!-- /wp:heading --></div><!-- /wp:group -->
	<!-- wp:separator {"align":"full","backgroundColor":"divider","textColor":"divider","className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large","bottom":"0"}}}} --><hr class="wp-block-separator alignfull has-text-color has-divider-color has-alpha-channel-opacity has-divider-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--x-large);margin-bottom:0"/><!-- /wp:separator -->
	<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|x-small","margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--medium)">
		<!-- wp:heading {"level":3,"fontSize":"m"} --><h3 class="wp-block-heading has-m-font-size"><?php echo esc_html_x( 'Post Summary', 'Pattern title', 'blockwright' ); ?></h3><!-- /wp:heading -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"s"} --><p class="has-text-2-color has-text-color has-s-font-size"><?php echo esc_html_x( 'Standard post summary for archives and query loops. Use inside a post-template block.', 'Pattern description', 'blockwright' ); ?></p><!-- /wp:paragraph -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"xs","fontFamily":"mono"} --><p class="has-text-2-color has-text-color has-mono-font-family has-xs-font-size">blockwright/post-summary</p><!-- /wp:paragraph -->
		<!-- wp:pattern {"slug":"blockwright/post-summary"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:separator {"align":"full","backgroundColor":"divider","textColor":"divider","className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large","bottom":"0"}}}} --><hr class="wp-block-separator alignfull has-text-color has-divider-color has-alpha-channel-opacity has-divider-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--x-large);margin-bottom:0"/><!-- /wp:separator -->
	<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|x-small","margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--medium)">
		<!-- wp:heading {"level":3,"fontSize":"m"} --><h3 class="wp-block-heading has-m-font-size"><?php echo esc_html_x( 'Post Meta • Standard', 'Pattern title', 'blockwright' ); ?></h3><!-- /wp:heading -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"s"} --><p class="has-text-2-color has-text-color has-s-font-size"><?php echo esc_html_x( 'Author, date, and categories below titles.', 'Pattern description', 'blockwright' ); ?></p><!-- /wp:paragraph -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"xs","fontFamily":"mono"} --><p class="has-text-2-color has-text-color has-mono-font-family has-xs-font-size">blockwright/post-meta</p><!-- /wp:paragraph -->
		<!-- wp:pattern {"slug":"blockwright/post-meta"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:separator {"align":"full","backgroundColor":"divider","textColor":"divider","className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large","bottom":"0"}}}} --><hr class="wp-block-separator alignfull has-text-color has-divider-color has-alpha-channel-opacity has-divider-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--x-large);margin-bottom:0"/><!-- /wp:separator -->
	<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|x-small","margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--medium)">
		<!-- wp:heading {"level":3,"fontSize":"m"} --><h3 class="wp-block-heading has-m-font-size"><?php echo esc_html_x( 'Archive • Feature Grid', 'Pattern title', 'blockwright' ); ?></h3><!-- /wp:heading -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"s"} --><p class="has-text-2-color has-text-color has-s-font-size"><?php echo esc_html_x( 'Blog or archive layout - a query loop showing recent posts in a feature grid.', 'Pattern description', 'blockwright' ); ?></p><!-- /wp:paragraph -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"xs","fontFamily":"mono"} --><p class="has-text-2-color has-text-color has-mono-font-family has-xs-font-size">blockwright/archive-feature-grid</p><!-- /wp:paragraph -->
		<!-- wp:pattern {"slug":"blockwright/archive-feature-grid"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:separator {"align":"full","backgroundColor":"divider","textColor":"divider","className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large","bottom":"0"}}}} --><hr class="wp-block-separator alignfull has-text-color has-divider-color has-alpha-channel-opacity has-divider-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--x-large);margin-bottom:0"/><!-- /wp:separator -->
	<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|x-small","margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--medium)">
		<!-- wp:heading {"level":3,"fontSize":"m"} --><h3 class="wp-block-heading has-m-font-size"><?php echo esc_html_x( 'Keep Reading', 'Pattern title', 'blockwright' ); ?></h3><!-- /wp:heading -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"s"} --><p class="has-text-2-color has-text-color has-s-font-size"><?php echo esc_html_x( 'A compact "Keep reading" band of three recent posts for the end of a single post.', 'Pattern description', 'blockwright' ); ?></p><!-- /wp:paragraph -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"xs","fontFamily":"mono"} --><p class="has-text-2-color has-text-color has-mono-font-family has-xs-font-size">blockwright/related-posts</p><!-- /wp:paragraph -->
		<!-- wp:pattern {"slug":"blockwright/related-posts"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:separator {"align":"full","backgroundColor":"divider","textColor":"divider","className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large","bottom":"0"}}}} --><hr class="wp-block-separator alignfull has-text-color has-divider-color has-alpha-channel-opacity has-divider-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--x-large);margin-bottom:0"/><!-- /wp:separator -->
	<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|x-small","margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--medium)">
		<!-- wp:heading {"level":3,"fontSize":"m"} --><h3 class="wp-block-heading has-m-font-size"><?php echo esc_html_x( 'Author Bio', 'Pattern title', 'blockwright' ); ?></h3><!-- /wp:heading -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"s"} --><p class="has-text-2-color has-text-color has-s-font-size"><?php echo esc_html_x( 'An end-of-post author box - avatar, linked name, and bio, filled automatically from the post author\'s profile. Drop it at the bottom of the single-post template.', 'Pattern description', 'blockwright' ); ?></p><!-- /wp:paragraph -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"xs","fontFamily":"mono"} --><p class="has-text-2-color has-text-color has-mono-font-family has-xs-font-size">blockwright/author-bio</p><!-- /wp:paragraph -->
		<!-- wp:pattern {"slug":"blockwright/author-bio"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:separator {"align":"full","backgroundColor":"divider","textColor":"divider","className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large","bottom":"0"}}}} --><hr class="wp-block-separator alignfull has-text-color has-divider-color has-alpha-channel-opacity has-divider-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--x-large);margin-bottom:0"/><!-- /wp:separator -->
	<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|x-small","margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--medium)">
		<!-- wp:heading {"level":3,"fontSize":"m"} --><h3 class="wp-block-heading has-m-font-size"><?php echo esc_html_x( 'Comments', 'Pattern title', 'blockwright' ); ?></h3><!-- /wp:heading -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"s"} --><p class="has-text-2-color has-text-color has-s-font-size"><?php echo esc_html_x( 'Comments section with title, threaded list, pagination, and form. Use on posts where discussion is enabled.', 'Pattern description', 'blockwright' ); ?></p><!-- /wp:paragraph -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"xs","fontFamily":"mono"} --><p class="has-text-2-color has-text-color has-mono-font-family has-xs-font-size">blockwright/comments</p><!-- /wp:paragraph -->
		<!-- wp:pattern {"slug":"blockwright/comments"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:separator {"align":"full","backgroundColor":"divider","textColor":"divider","className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large"}}}} --><hr class="wp-block-separator alignfull has-text-color has-divider-color has-alpha-channel-opacity has-divider-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--x-large)"/><!-- /wp:separator -->
	<!-- wp:group {"align":"full","layout":{"type":"constrained"}} --><div class="wp-block-group alignfull"><!-- wp:heading {"level":2,"anchor":"utility"} --><h2 class="wp-block-heading" id="utility"><?php esc_html_e( 'Utility', 'blockwright' ); ?></h2><!-- /wp:heading --></div><!-- /wp:group -->
	<!-- wp:separator {"align":"full","backgroundColor":"divider","textColor":"divider","className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large","bottom":"0"}}}} --><hr class="wp-block-separator alignfull has-text-color has-divider-color has-alpha-channel-opacity has-divider-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--x-large);margin-bottom:0"/><!-- /wp:separator -->
	<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|x-small","margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--medium)">
		<!-- wp:heading {"level":3,"fontSize":"m"} --><h3 class="wp-block-heading has-m-font-size"><?php echo esc_html_x( '404', 'Pattern title', 'blockwright' ); ?></h3><!-- /wp:heading -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"s"} --><p class="has-text-2-color has-text-color has-s-font-size"><?php echo esc_html_x( 'Page not found layout with a clear message, search, and a way back home.', 'Pattern description', 'blockwright' ); ?></p><!-- /wp:paragraph -->
		<!-- wp:paragraph {"textColor":"text-2","fontSize":"xs","fontFamily":"mono"} --><p class="has-text-2-color has-text-color has-mono-font-family has-xs-font-size">blockwright/404</p><!-- /wp:paragraph -->
		<!-- wp:pattern {"slug":"blockwright/404"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:separator {"align":"full","backgroundColor":"divider","textColor":"divider","className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large"}}}} --><hr class="wp-block-separator alignfull has-text-color has-divider-color has-alpha-channel-opacity has-divider-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--x-large)"/><!-- /wp:separator -->
	<!-- wp:group {"align":"full","layout":{"type":"constrained"}} --><div class="wp-block-group alignfull">
		<!-- wp:heading {"level":2,"anchor":"widths"} --><h2 class="wp-block-heading" id="widths"><?php esc_html_e( 'Content widths', 'blockwright' ); ?></h2><!-- /wp:heading -->
		<!-- wp:paragraph {"fontSize":"l"} --><p class="has-l-font-size"><?php echo wp_kses_post( __( 'A page takes its content width from the editor&#8217;s <strong>Page &rarr; Template</strong> dropdown. These bands show the site&#8217;s standard and wide widths and full width.', 'blockwright' ) ); ?></p><!-- /wp:paragraph -->
		<!-- wp:group {"backgroundColor":"surface-2","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"var:preset|spacing|small"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group has-surface-2-background-color has-background" style="margin-top:var(--wp--preset--spacing--small);padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--small)"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"600"}}} --><p class="has-text-align-center" style="font-weight:600"><?php esc_html_e( 'Standard, reading width', 'blockwright' ); ?></p><!-- /wp:paragraph --></div>
		<!-- /wp:group -->
		<!-- wp:group {"align":"wide","backgroundColor":"surface-2","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"var:preset|spacing|small"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group alignwide has-surface-2-background-color has-background" style="margin-top:var(--wp--preset--spacing--small);padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--small)"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"600"}}} --><p class="has-text-align-center" style="font-weight:600"><?php esc_html_e( 'Wide', 'blockwright' ); ?></p><!-- /wp:paragraph --></div>
		<!-- /wp:group -->
		<!-- wp:group {"align":"full","backgroundColor":"surface-3","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"var:preset|spacing|small"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group alignfull has-surface-3-background-color has-background" style="margin-top:var(--wp--preset--spacing--small);padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--small)"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"600"}}} --><p class="has-text-align-center" style="font-weight:600"><?php esc_html_e( 'Full width, edge to edge', 'blockwright' ); ?></p><!-- /wp:paragraph --></div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

</main>
<!-- /wp:group -->

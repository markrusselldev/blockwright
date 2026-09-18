/**
 * Register Blockwright block style variations in the editor.
 *
 * Name-only registration; the actual styling lives in CSS
 * (in the button-variant styles). Group style
 * variations are registered declaratively via /styles/*.json instead -
 * that path can't target the button's inner <a>, so buttons use this.
 */
(function (blocks, i18n) {
	if (!blocks || !blocks.registerBlockStyle) {
		return;
	}

	const __ =
		i18n && i18n.__
			? i18n.__
			: function (s) {
					return s;
				};

	blocks.registerBlockStyle('core/button', {
		name: 'soft',
		label: __('Soft', 'blockwright'),
	});

	blocks.registerBlockStyle('core/button', {
		name: 'subtle',
		label: __('Subtle', 'blockwright'),
	});

	// Editorial-layer paragraph styles. Name-only; styling in
	// the theme styles (brand color via tokens, so both re-hue with the
	// scheme and stay AA in light/dark). Eyebrow is the uppercase kicker label
	// above a heading; badge is a small brand pill.
	blocks.registerBlockStyle('core/paragraph', {
		name: 'eyebrow',
		label: __('Eyebrow', 'blockwright'),
	});

	blocks.registerBlockStyle('core/paragraph', {
		name: 'badge',
		label: __('Badge', 'blockwright'),
	});

	// Callout band (core/group): a SUBTLE brand-tinted aside, not the solid tonal
	// container. Styling via color-mix over surface-1 (like
	// .bw-scorecard-foot) so it stays a faint wash in light AND dark - accent-soft (M3
	// tone 30 in dark) read as the straight brand color, which is wrong for a band.
	blocks.registerBlockStyle('core/group', {
		name: 'callout',
		label: __('Callout', 'blockwright'),
	});

	// Opt-in brand-colored site title (default stays the neutral wordmark, brand on
	// hover). Prominent element -> a deliberate one-click choice, not a default. Styling
	// in the theme base styles (targets the inner <a>, like the button styles - a
	// styles/*.json variation partial does NOT emit CSS for elements.link on site-title).
	blocks.registerBlockStyle('core/site-title', {
		name: 'brand',
		label: __('Brand color', 'blockwright'),
	});

	// Brand divider: a separator drawn in the brand tone instead of the neutral
	// divider line. Styling in the theme styles (is-style-brand on core/separator).
	blocks.registerBlockStyle('core/separator', {
		name: 'brand',
		label: __('Brand', 'blockwright'),
	});

	// Icon divider: a centered mark (site logo / image / icon) flanked by two brand
	// hairlines. Applied to a flex Row via the "Divider Icon" pattern; the lines are
	// drawn by the style's ::before/::after (theme styles).
	blocks.registerBlockStyle('core/group', {
		name: 'icon-divider',
		label: __('Icon divider', 'blockwright'),
	});

	// Circle image: crop the image to a perfect circle (the social-avatar look).
	// Styling in assets/blocks/image.css (border-radius 50% + square aspect + cover).
	// Pair with the image block's focal-point picker to center a face in the circle.
	blocks.registerBlockStyle('core/image', {
		name: 'circle',
		label: __('Circle', 'blockwright'),
	});
})(window.wp && window.wp.blocks, window.wp && window.wp.i18n);

/**
 * Register Blockwright block style variations in the editor.
 *
 * Name-only registration; the actual styling lives in CSS
 * (src/styles/_buttons.scss for the button variants). Group style
 * variations are registered declaratively via /styles/*.json instead -
 * that path can't target the button's inner <a>, so buttons use this.
 */
(function (blocks, i18n) {
	if (!blocks || !blocks.registerBlockStyle) {
		return;
	}

	var __ =
		i18n && i18n.__
			? i18n.__
			: function (s) {
					return s;
				};

	blocks.registerBlockStyle('core/button', {
		name: 'accent',
		label: __('Accent', 'blockwright'),
	});

	blocks.registerBlockStyle('core/button', {
		name: 'subtle',
		label: __('Subtle', 'blockwright'),
	});
})(window.wp && window.wp.blocks, window.wp && window.wp.i18n);

(function (wp) {
	if (!wp || !wp.data || !wp.domReady) {
		return;
	}

	const { select, subscribe } = wp.data;
	const CLASS_NAME = 'bw-hide-editor-title';
	const PAD_VALUE = '1rem';
	const WRAPPERS = [
		'.edit-post-visual-editor__post-title-wrapper',
		'.editor-post-title',
		'.editor-post-title__input',
		'.block-editor-post-title',
	];
	const IFRAME_SELECTOR =
		'iframe.editor-canvas, iframe[name^="editor-canvas"], .edit-post-visual-editor iframe, .block-editor-iframe';

	const raf = (fn) => requestAnimationFrame(fn);
	const raf2 = (fn) => requestAnimationFrame(() => requestAnimationFrame(fn));

	function currentTemplate() {
		try {
			return (
				select('core/editor').getEditedPostAttribute('template') || ''
			);
		} catch (e) {
			return '';
		}
	}

	function applyToDoc(doc, hide) {
		if (!doc || !doc.documentElement) {
			return;
		}

		const root = doc.documentElement;
		const hasClass = root.classList.contains(CLASS_NAME);
		if (hide !== hasClass) {
			root.classList.toggle(CLASS_NAME, hide);
		}

		const desiredDisplay = hide ? 'none' : '';
		for (const selector of WRAPPERS) {
			const el = doc.querySelector(selector);
			if (el && el.style.display !== desiredDisplay) {
				el.style.display = desiredDisplay;
			}
		}

		const padTarget =
			doc.querySelector('.editor-styles-wrapper') ||
			doc.querySelector('.block-editor-writing-flow');
		if (padTarget) {
			const nextPad = hide ? PAD_VALUE : '';
			if (padTarget.style.paddingTop !== nextPad) {
				padTarget.style.paddingTop = nextPad;
			}
		}
	}

	function scheduleIframe(iframe, hide) {
		if (!iframe) {
			return;
		}

		const run = () => {
			try {
				const doc = iframe.contentDocument;
				if (doc) {
					raf2(() => applyToDoc(doc, hide));
				}
			} catch (e) {
				// cross-origin or unavailable
			}
		};

		try {
			const doc = iframe.contentDocument;
			if (doc && doc.readyState === 'complete') {
				raf2(run);
			} else if (!iframe.dataset.atnNoTitleLoad) {
				iframe.addEventListener('load', () => raf2(run), {
					once: true,
				});
				iframe.dataset.atnNoTitleLoad = '1';
			}
		} catch (e) {
			// ignore
		}
	}

	function runAll(template) {
		const hide = template === 'page-no-title';

		raf2(() => applyToDoc(document, hide));

		const iframe = document.querySelector(IFRAME_SELECTOR);
		if (iframe) {
			scheduleIframe(iframe, hide);
		}
	}

	let lastTemplate;

	function maybeRun() {
		const tpl = currentTemplate();
		if (tpl === lastTemplate) {
			return;
		}

		lastTemplate = tpl;
		runAll(tpl);
	}

	wp.domReady(() => {
		lastTemplate = currentTemplate();
		runAll(lastTemplate);
		subscribe(() => raf(maybeRun));
	});
})(window.wp);

import './styles/theme-base.scss';
import './styles/index.scss';

// A submenu opened by hover closes with Esc while the pointer stays on it. Core handles Esc only
// for a submenu opened by click. Telling core the pointer left resets its open state, so the
// toggle's aria-expanded stays true to what shows; the class holds the menu shut against core's
// :hover rule until the pointer really leaves.
document.addEventListener('keydown', (event) => {
	if (event.key !== 'Escape') {
		return;
	}
	document
		.querySelectorAll(
			'.wp-block-navigation .has-child:not(.open-on-click):hover'
		)
		.forEach((item) => {
			if (item.contains(item.ownerDocument.activeElement)) {
				return;
			}
			item.classList.add('bw-submenu-dismissed');
			item.dispatchEvent(new window.PointerEvent('pointerleave'));
			const reset = (leave) => {
				if (leave.isTrusted) {
					item.classList.remove('bw-submenu-dismissed');
					item.removeEventListener('pointerleave', reset);
				}
			};
			item.addEventListener('pointerleave', reset);
		});
});

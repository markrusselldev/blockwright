<?php
/**
 * Companion-plugin notice.
 *
 * Recommends the free Blockwright Blocks plugin from WordPress.org: on the Themes screen only, only while the plugin is not active,
 * only to users who can install or activate plugins, and dismissible for good (remembered per
 * user). The link opens WordPress's own plugin installer or Plugins screen; nothing installs
 * without the user's action.
 *
 * @package Blockwright
 * @license GPL-2.0-or-later
 */

namespace Blockwright\Companion;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

const PLUGIN_SLUG  = 'blockwright-blocks';
const PLUGIN_FILE  = 'blockwright-blocks/blockwright-blocks.php';
const DISMISS_META = 'blockwright_companion_dismissed';
const AJAX_ACTION  = 'blockwright_dismiss_companion';

add_action(
	'admin_notices',
	static function () {
		$screen = get_current_screen();
		if ( ! $screen || 'themes' !== $screen->id || defined( 'BLOCKWRIGHT_BLOCKS_VERSION' ) ) {
			return;
		}
		if ( ! current_user_can( 'install_plugins' ) && ! current_user_can( 'activate_plugins' ) ) {
			return;
		}
		if ( get_user_meta( get_current_user_id(), DISMISS_META, true ) ) {
			return;
		}
		$installed = file_exists( WP_PLUGIN_DIR . '/' . PLUGIN_FILE );
		if ( ! $installed && ! current_user_can( 'install_plugins' ) ) {
			return;
		}
		$url     = $installed
			? admin_url( 'plugins.php?plugin_status=inactive&s=' . PLUGIN_SLUG )
			: admin_url( 'plugin-install.php?tab=search&type=term&s=' . PLUGIN_SLUG );
		$message = sprintf(
			'%1$s <a href="%2$s">%3$s</a>',
			esc_html__( 'Blockwright pairs with the free Blockwright Blocks plugin: its Design tool sets your site\'s colors, and its blocks follow the theme\'s light and dark modes.', 'blockwright' ),
			esc_url( $url ),
			$installed ? esc_html__( 'Activate Blockwright Blocks', 'blockwright' ) : esc_html__( 'Get Blockwright Blocks', 'blockwright' )
		);
		wp_admin_notice(
			$message,
			array(
				'type'        => 'info',
				'dismissible' => true,
				'id'          => 'blockwright-companion-notice',
			)
		);
		// WordPress's dismiss button only hides the notice for this page view; record the dismissal.
		$nonce = wp_create_nonce( AJAX_ACTION );
		wp_print_inline_script_tag(
			"document.addEventListener('click',function(e){var b=e.target.closest('#blockwright-companion-notice .notice-dismiss');if(!b){return;}"
			. "var d=new FormData();d.append('action'," . wp_json_encode( AJAX_ACTION ) . ");d.append('_ajax_nonce'," . wp_json_encode( $nonce ) . ');'
			. 'fetch(' . wp_json_encode( admin_url( 'admin-ajax.php' ) ) . ",{method:'POST',credentials:'same-origin',body:d});});"
		);
	}
);

add_action(
	'wp_ajax_' . AJAX_ACTION,
	static function () {
		check_ajax_referer( AJAX_ACTION );
		update_user_meta( get_current_user_id(), DISMISS_META, time() );
		wp_send_json_success();
	}
);

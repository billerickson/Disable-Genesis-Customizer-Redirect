<?php
/**
 * Plugin Name: BE Genesis Theme Settings
 * Plugin URI:  https://github.com/billerickson/
 * Description: Access the theme settings page without redirecting to customizer
 * Author:      Bill Erickson
 * Author URI:  https://www.billerickson.net
 * Version:     1.1.0
 */

/**
 * Load our classes
 *
 */
function be_disable_genesis_redirect() {
	global $_genesis_admin_settings;
	$_genesis_admin_settings->redirect_to = false;
}
add_action( 'genesis_admin_menu', 'be_disable_genesis_redirect', 1 );

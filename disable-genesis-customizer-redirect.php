<?php
/**
 * Plugin Name: Disable Genesis Customizer Redirect
 * Plugin URI:  https://github.com/billerickson/Disable-Genesis-Customizer-Redirect
 * Description: Access the theme settings page without redirecting to customizer
 * Author:      Bill Erickson
 * Author URI:  https://www.billerickson.net
 * Version:     1.0.1
 */

/**
 * Load our classes
 *
 */
function be_disable_genesis_redirect() {
	global $_genesis_admin_settings, $_genesis_admin_seo_settings;
	$_genesis_admin_settings->redirect_to = '/wp-admin/admin.php?page=genesis&noredirect';
	$_genesis_admin_seo_settings->redirect_to = '/wp-admin/admin.php?page=seo-settings&noredirect';
}
add_action( 'genesis_admin_menu', 'be_disable_genesis_redirect', 11 );

<?php
/**
 * Plugin Name: Shippo Shipping PRO for WooCommerce
 * Plugin URI: https://1teamsoftware.com/product/woocommerce-shippo-shipping-pro/
 * Description: Displays live shipping rates at cart / checkout pages, streamlines returns, validates shipping address and simplifies creation of shipping labels with automated email tracking notifications.
 * Version: 2.0.8
 * Requires at least: 5.6
 * Tested up to: 6.0.1
 * Requires PHP: 7.3
 * WC requires at least: 6.0
 * WC tested up to: 6.6.1
 * Author: OneTeamSoftware
 * Author URI: http://oneteamsoftware.com/
 * Developer: OneTeamSoftware
 * Developer URI: http://oneteamsoftware.com/
 * Text Domain: wc-shippo-shipping
 * Domain Path: /languages
 *
 * Copyright: © 2022 FlexRC, Canada.
 */

/*********************************************************************/
/*  PROGRAM          FlexRC                                          */
/*  PROPERTY         3-7170 Ash Cres                                 */
/*  OF               Vancouver BC   V6P 3K7                          */
/*  				 Voice 604 800-7879                              */
/*                                                                   */
/*  Any usage / copying / extension or modification without          */
/*  prior authorization is prohibited                                */
/*********************************************************************/

namespace OneTeamSoftware\WC\Shipping;

defined('ABSPATH') || exit;

if (file_exists(__DIR__ . '/includes/autoloader.php')) {
	include_once(__DIR__ . '/includes/autoloader.php');
} else if (file_exists('phar://' . __DIR__ . '/includes.phar/autoloader.php')) {
	include_once('phar://' . __DIR__ . '/includes.phar/autoloader.php');
}

if (class_exists(__NAMESPACE__ . '\\PluginPro')) {
	include_once(__DIR__ . '/vendor/autoload.php');

	(new PluginPro(
			__FILE__, 
			'Shippo', 
			sprintf('<div class="notice notice-info inline"><p>%s<br/><li><a href="%s" target="_blank">%s</a><br/><li><a href="%s" target="_blank">%s</a></p></div>', 
				__('Real-time Shippo shipping rates, shipping label creation and tracking of the shipments', 'wc-shippo-shipping'),
				'https://1teamsoftware.com/contact-us/',
				__('Do you have any questions or requests?', 'wc-shippo-shipping'),
				'https://1teamsoftware.com/product/woocommerce-shippo-shipping-pro/', 
				__('Do you like our plugin and can recommend to others?', 'wc-shippo-shipping')
			),
			'2.0.8',
			function() {
				class ShippingMethod_wc_shippo_shipping extends ShippingMethodPro {}
			}
		)
	)->register();
} else if (is_admin()) {
	add_action('admin_notices', function() {
		echo sprintf(
			'<div class="notice notice-error error"><p><strong>%s</strong> %s %s <a href="%s" target="_blank">%s</a> %s</p></div>', 
			__('Shippo Shipping PRO', 'wc-shippo-shipping'),
			__('plugin can not be loaded.', 'wc-shippo-shipping'),
			__('Please contact', 'wc-shippo-shipping'),
			'https://1teamsoftware.com/contact-us/',
			__('1TeamSoftware support', 'wc-shippo-shipping'),
			__('for assistance.', 'wc-shippo-shipping')
		);
	});
}
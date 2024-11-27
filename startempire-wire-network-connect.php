<?php
/**
 * Plugin Name:     Startempire Wire Network Connect
 * Plugin URI:      startempirewire.com
 * Description:     Plugin to connect and share data between the WordPress Powered Startempire Wire Entrepreneur Community and Wire Bot AI's Browser Extension.
 * Author:          Philoveracity Design
 * Author URI:      Philoveracity.com
 * Text Domain:     startempire-wire-network-connect
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Startempire_Wire_Network_Connect
 */



// If this file is called directly, abort.
if (!defined('WPINC')) {
	die;
}

// Define constants for plugin path and URL for easy access.
define('STARTEMPIRE_WIRE_NETWORK_CONNECT_PATH', plugin_dir_path(__FILE__));
define('STARTEMPIRE_WIRE_NETWORK_CONNECT_URL', plugin_dir_url(__FILE__));

// Include the main plugin class file.
require_once STARTEMPIRE_WIRE_NETWORK_CONNECT_PATH . 'inc/class-startempire-wire-network-connect.php';

$startempire_wire_network_connect = new Startempire_Wire_Network_Connect();
register_activation_hook(__FILE__, array($startempire_wire_network_connect, 'activate'));
register_deactivation_hook(__FILE__, array($startempire_wire_network_connect, 'deactivate'));

// Run the plugin.
$startempire_wire_network_connect->run();

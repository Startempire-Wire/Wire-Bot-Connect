<?php
/**
 * Plugin Name:     Wire Bot Connect
 * Plugin URI:      startempirewire.com
 * Description:     Plugin to connect and share data between the WordPress Powered Startempire Wire Entrepreneur Community and Wire Bot AI's Browser Extension.
 * Author:          Philoveracity Design
 * Author URI:      Philoveracity.com
 * Text Domain:     wire-bot-connect
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Wire_Bot_Connect
 */



// If this file is called directly, abort.
if (!defined('WPINC')) {
	die;
}

// Define constants for plugin path and URL for easy access.
define('WIRE_BOT_CONNECT_PATH', plugin_dir_path(__FILE__));
define('WIRE_BOT_CONNECT_URL', plugin_dir_url(__FILE__));

// Include the main plugin class file.
require_once WIRE_BOT_CONNECT_PATH . 'inc/class-wire-bot-connect.php';

// Run the plugin.
$wire_bot_connect = new Wire_Bot_Connect();
$wire_bot_connect->run();

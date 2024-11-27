<?php

// Include the REST API class file.
require_once STARTEMPIRE_WIRE_NETWORK_CONNECT_PATH . 'inc/class-startempire-wire-network-connect-rest-api.php';
// Include the public class file.
require_once STARTEMPIRE_WIRE_NETWORK_CONNECT_PATH . 'public/class-startempire-wire-network-connect-public.php';

class Startempire_Wire_Network_Connect {
    public function __construct() {
		// Include the REST API class file.
        require_once STARTEMPIRE_WIRE_NETWORK_CONNECT_PATH . 'inc/class-startempire-wire-network-connect-rest-api.php';
		// Include the public class file.
        require_once STARTEMPIRE_WIRE_NETWORK_CONNECT_PATH . 'public/class-startempire-wire-network-connect-public.php';


        // Instantiate the REST API class.
        $this->rest_api = new Startempire_Wire_Network_Connect_Rest_Api();
		// Create a new instance of the public class.
        $this->public = new Startempire_Wire_Network_Connect_Public();
    }

	public function activate() {
        // Code to run when the plugin is activated.

    }

    public function deactivate() {
        // Code to run when the plugin is deactivated.

    }

    public function run() {
		 // Hook into the 'wp_enqueue_scripts' action to enqueue scripts and styles.
		 add_action('wp_enqueue_scripts', array($this->public, 'enqueue_scripts'));
		 add_action('wp_enqueue_scripts', array($this->public, 'enqueue_styles'));

		// Register the REST API endpoints.
		add_action('rest_api_init', array($this->rest_api, 'register_endpoints'));

		// Add the connect button on the BuddyBoss profile page.
		add_action('bp_after_member_header', array($this->public, 'add_connect_button'));

    }

    // Add other methods as needed.
}

<?php


class Wire_Bot_Connect {
    public function __construct() {
		// Include the REST API class file.
        require_once WIRE_BOT_CONNECT_PATH . 'inc/class-wire-bot-connect-rest-api.php';
		// Include the public class file.
        require_once WIRE_BOT_CONNECT_PATH . 'public/class-wire-bot-connect-public.php';


        // Instantiate the REST API class.
        $this->rest_api = new Wire_Bot_Connect_Rest_Api();
		// Create a new instance of the public class.
        $this->public = new Wire_Bot_Connect_Public();
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

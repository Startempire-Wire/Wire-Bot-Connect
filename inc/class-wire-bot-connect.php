<?php


class Wire_Bot_Connect {
    public function __construct() {
		// Include the REST API class file.
        require_once WIRE_BOT_CONNECT_PATH . 'inc/class-wire-bot-connect-rest-api.php';

        // Instantiate the REST API class.
        $this->rest_api = new Wire_Bot_Connect_Rest_Api();
    }

    public function run() {
		 // Register the REST API endpoints.
		 add_action('rest_api_init', array($this->rest_api, 'register_endpoints'));
    }

    // Add other methods as needed.
}

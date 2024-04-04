<?php
class Wire_Bot_Connect_Public {

    public function __construct() {
        // Initialize your public-facing functionality here.
    }

    public function enqueue_scripts() {
		$script_path = plugin_dir_path(__FILE__) . '../js/wire-bot-connect.js';
    	$version = filemtime($script_path);

        // Enqueue your scripts here.
		wp_enqueue_script(
            'wire-bot-connect-public',
            plugin_dir_url(__FILE__) . '../js/wire-bot-connect.js',
            array(), // Dependencies. Add 'jquery' here if you're using jQuery in your script.
            $version, // Version number.
            true // Load the script in the footer.
        );
    }

    public function enqueue_styles() {
		$style_path = plugin_dir_path(__FILE__) . '../css/wire-bot-connect.css';
    	$version = filemtime($style_path);
		
        // Enqueue your styles here.
		wp_enqueue_style(
            'wire-bot-connect-public', // The handle of your style.
            plugin_dir_url(__FILE__) . '../css/wire-bot-connect.css', // The path to your style file.
            array(), // The dependencies of your style.
            $version // The version number of your style.
        );
    }

    public function add_connect_button() {
        // Check if the user is logged in.
        if (is_user_logged_in()) {
            // Output the "Connect to Browser Extension" button.
            echo '<button id="connect-extension-button">Connect to Browser Extension</button>';
        }
    }
}

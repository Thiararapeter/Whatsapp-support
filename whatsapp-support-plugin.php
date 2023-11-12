<?php
/*
Plugin Name: WhatsApp Support Plugin
Description: Adds WhatsApp support button and admin menu for configuration.
Version: 1.0
Author: Your Name
*/

// Include styles and scripts
include_once(plugin_dir_path(__FILE__) . 'admin.php');
include_once(plugin_dir_path(__FILE__) . 'whatsapp-support.php');

// Activation code, if needed
register_activation_hook(__FILE__, 'whatsapp_support_activate');

// Deactivation code, if needed
register_deactivation_hook(__FILE__, 'whatsapp_support_deactivate');

// Enqueue styles and scripts
function whatsapp_support_enqueue_scripts() {
    // Enqueue styles
    wp_enqueue_style('whatsapp-support-styles', plugin_dir_url(__FILE__) . 'style.css');

    // Enqueue scripts
    wp_enqueue_script('whatsapp-support-script', plugin_dir_url(__FILE__) . 'script.js', array('jquery'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'whatsapp_support_enqueue_scripts');

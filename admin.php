<?php
// Add admin menu
function whatsapp_support_menu() {
    add_menu_page(
        'WhatsApp Support Settings',
        'WhatsApp Support',
        'manage_options',
        'whatsapp-support-settings',
        'whatsapp_support_settings_page'
    );
}

add_action('admin_menu', 'whatsapp_support_menu');

// Register settings
function whatsapp_support_register_settings() {
    register_setting('whatsapp_support_settings_group', 'whatsapp_number');
}

add_action('admin_init', 'whatsapp_support_register_settings');

// WhatsApp Support Settings Page
function whatsapp_support_settings_page() {
    ?>
    <div class="wrap">
        <h1>WhatsApp Support Settings</h1>
        <form method="post" action="options.php">
            <?php settings_fields('whatsapp_support_settings_group'); ?>
            <?php do_settings_sections('whatsapp_support_settings_group'); ?>
            <label for="whatsapp_number">WhatsApp Number:</label>
            <input type="text" id="whatsapp_number" name="whatsapp_number" value="<?php echo esc_attr(get_option('whatsapp_number')); ?>">
            <?php submit_button(); ?>
        </form>
    </div>
    <?php
}

// Activation code
function whatsapp_support_activate() {
    // Add activation code here
}

// Deactivation code
function whatsapp_support_deactivate() {
    // Add deactivation code here
}

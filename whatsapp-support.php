<?php
// Enqueue Font Awesome stylesheet directly in the HTML
function enqueue_font_awesome_in_html() {
    echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">';
}

add_action('wp_head', 'enqueue_font_awesome_in_html');

// Enqueue JS script
function enqueue_whatsapp_script() {
    wp_enqueue_script('whatsapp-support-script', plugin_dir_url(__FILE__) . 'script.js', array('jquery'), '', true);
}

add_action('wp_enqueue_scripts', 'enqueue_whatsapp_script');

// Add WhatsApp support button to the footer
function add_whatsapp_support_button() {
    $whatsapp_number = esc_attr(get_option('whatsapp_number'));
    ?>

    <div class="whatsapp-support">
        <button onclick="window.open('https://api.whatsapp.com/send?phone=<?php echo esc_attr($whatsapp_number); ?>', '_blank')">
            <i class='fa fa-whatsapp'></i> WhatsApp Support
        </button>
    </div>
    <?php
}

add_action('wp_footer', 'add_whatsapp_support_button');

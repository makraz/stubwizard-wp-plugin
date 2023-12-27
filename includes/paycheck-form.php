<?php

add_shortcode('paycheck', 'show_paycheck');
add_action('wp_enqueue_scripts', 'enqueue_custom_styles', 10000); // Higher priority than Elementor
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts', 10000); // Higher priority than Elementor

function enqueue_custom_styles() {
    // Enqueue your custom styles
    wp_enqueue_style('paycheck-plugin', MY_PLUGIN_URL . 'dist/paycheck-plugin.css', array(), '1.0.0', 'all');
}

function enqueue_custom_scripts() {
    // Enqueue your custom scripts
    wp_enqueue_script('paycheck-plugin', MY_PLUGIN_URL . 'dist/paycheck-plugin.js', array('jquery'), '1.0.0', true);
}

function show_paycheck(): void
{
    include_once(PLUGIN_PATH . '/includes/templates/paycheck-template.php');
}

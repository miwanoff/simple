<?php
if (!class_exists('Kirki')) {
    return;
}
Kirki::add_config('sydney2021', array(
    'capability' => 'edit_theme_options',
    'option_type' => 'theme_mod',
));

/**
 * General Settings
 */
require get_template_directory() . '/inc/customizer/sections/general.php';

// Kirki::add_section('general_settings', array(
//     'title' => esc_attr__('General settings', 'sydney2021'),
//     'priority' => 1,
//     'capability' => 'edit_theme_options',
// ));
// Kirki::add_field('sydney2021', array(
//     'type' => 'text',
//     'settings' => 'al-logo',
//     'label' => esc_html__('Insert your logo', 'sydney2021'),
//     'section' => 'general_settings',
//     'default' => 'sydney2021',
// ));

//KIRKI CONFIGURATION

//General configuration for Kirki
Kirki::add_config('theme_config_id', [
    'capability' => 'edit_theme_options',
    'option_type' => 'theme_mod',
]);

add_filter('kirki_telemetry', '__return_false');



/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */

function sydney2021_customize_preview_js()
{
    wp_enqueue_script('sydney2021-customizer', get_template_directory_uri() . '/js/customizer.js', array('customize-preview'), '20151215', true);
}
add_action('customize_preview_init', 'sydney2021_customize_preview_js');
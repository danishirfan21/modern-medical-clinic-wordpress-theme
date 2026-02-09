<?php

function clinic_assets() {
    // Enqueue Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Source+Sans+Pro:wght@400;600&display=swap', array(), null);

    // Enqueue Styles
    wp_enqueue_style(
        'clinic-tokens',
        get_template_directory_uri() . '/assets/css/tokens.css'
    );
    wp_enqueue_style(
        'clinic-style',
        get_template_directory_uri() . '/assets/css/style.css'
    );

    // Enqueue Scripts
    wp_enqueue_script(
        'clinic-main',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        '1.0',
        true
    );
    wp_enqueue_script(
        'clinic-carousel',
        get_template_directory_uri() . '/assets/js/carousel.js',
        array('clinic-main'),
        '1.0',
        true
    );
    wp_enqueue_script(
        'clinic-mobile-cta',
        get_template_directory_uri() . '/assets/js/mobile-cta.js',
        array('clinic-main'),
        '1.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'clinic_assets');

function clinic_features() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'clinic_features');

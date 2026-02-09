<?php

function clinic_assets() {

    wp_enqueue_style(
        'main-style',
        get_template_directory_uri() . '/css/style.css'
    );

    wp_enqueue_script(
        'main-js',
        get_template_directory_uri() . '/js/script.js',
        array(),
        false,
        true
    );
}

add_action('wp_enqueue_scripts', 'clinic_assets');

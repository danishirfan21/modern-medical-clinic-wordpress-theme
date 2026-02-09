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

/**
 * Automatic Template Routing
 * Maps slugs to templates even if the page doesn't exist in the database.
 */
function clinic_template_routing($template) {
    if (is_404()) {
        $slug = trim($_SERVER['REQUEST_URI'], '/');
        // Handle subdirectories if WP is not in root
        $path_parts = explode('/', $slug);
        $slug = end($path_parts);

        // Remove query strings
        $slug = explode('?', $slug)[0];

        $templates = array(
            'about'          => 'page-about.php',
            'services'       => 'page-services.php',
            'doctors'        => 'page-doctors.php',
            'contact'        => 'page-contact.php',
            'doctor-profile' => 'page-doctor-profile.php'
        );

        if (isset($templates[$slug])) {
            $new_template = locate_template(array($templates[$slug]));
            if (!empty($new_template)) {
                // If we're routing to a known page template, clear the 404
                // state so WordPress (and the browser tab title) treat this
                // as a normal page. Also send a 200 status header.
                status_header(200);
                global $wp_query;
                if ( isset( $wp_query ) ) {
                    $wp_query->is_404 = false;
                    $wp_query->is_page = true;
                }

                return $new_template;
            }
        }
    }
    return $template;
}
add_filter('template_include', 'clinic_template_routing');

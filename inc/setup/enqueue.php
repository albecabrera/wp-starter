<?php
function wpstarter_enqueue_scripts() {
    $version = wp_get_theme()->get('Version');

    wp_enqueue_style(
        'wpstarter-main',
        get_template_directory_uri() . '/assets/css/output.css',
        [],
        $version
    );

    wp_enqueue_script(
        'wpstarter-main',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        $version,
        true
    );
}
add_action('wp_enqueue_scripts', 'wpstarter_enqueue_scripts');

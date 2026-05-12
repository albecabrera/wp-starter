<?php
function wpstarter_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'comment-form', 'gallery', 'caption']);
    add_theme_support('custom-logo');
    add_theme_support('menus');

    register_nav_menus([
        'primary' => __('Primary Menu', 'wp-starter'),
        'footer'  => __('Footer Menu', 'wp-starter'),
    ]);

    add_image_size('hero', 1920, 800, true);
    add_image_size('card', 600, 400, true);
}
add_action('after_setup_theme', 'wpstarter_setup');

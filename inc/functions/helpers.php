<?php
/**
 * Safe ACF wrapper — works with or without ACF active
 */
function wpstarter_get_field($key, $post_id = null) {
    if (function_exists('get_field')) {
        return get_field($key, $post_id);
    }
    return get_post_meta($post_id ?: get_the_ID(), '_' . $key, true);
}

/**
 * Get image tag with lazy loading
 */
function wpstarter_image($attachment_id, $size = 'large', $class = '') {
    if (!$attachment_id) return '';
    return wp_get_attachment_image($attachment_id, $size, false, [
        'class'   => $class,
        'loading' => 'lazy',
    ]);
}

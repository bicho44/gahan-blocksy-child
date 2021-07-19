<?php
if (!defined('WP_DEBUG')) {
	die('Direct access forbidden.');
}
add_action('wp_enqueue_scripts', function () {
	wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
});

/**
 * Load IMGD Framework compatibility file.
 */
// get_template_part('imgd/imgd','CPT_Gahan');
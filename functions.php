<?php
if (! defined('WP_DEBUG')) {
	die( 'Direct access forbidden.' );
}
add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
});

/**
 * Load IMGD Framework compatibility file.
 */
//require get_template_directory() . '/imgd/imgd_funciones.php';
require get_template_directory() . '/imgd/imgd_CPT_Gahan.php';

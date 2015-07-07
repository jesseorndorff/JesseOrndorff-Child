<?php
/*
Author: Simon Bouchard
URL: htp://simonbouchard.com
*/

/**
 *
 * Unload parent theme sytlesheets
 * 
 */
function child_unload_styles() {
    wp_deregister_style( 'stylesheet' );
}
add_action( 'wp_print_styles', 'child_unload_styles', 100 );

/**
 *
 * Load child theme stylesheet
 * 
 */
function child_theme_styles() {
	wp_register_style( 'stylesheet-child', get_stylesheet_directory_uri() . '/style.css' );
	wp_enqueue_style( 'stylesheet-child' );
}
add_action( 'wp_enqueue_scripts', 'child_theme_styles', 101 );
?>

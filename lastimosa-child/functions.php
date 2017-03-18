<?php if ( ! defined( 'ABSPATH' ) ) die( 'Direct access forbidden.' );

/**
 * Ensures that the child theme's style is loaded after the parent.
 */
add_action( 'wp_enqueue_scripts', 'generate_remove_scripts' );
function generate_remove_scripts() 
{
    wp_dequeue_style( 'fw-theme-style-css' );
}

add_action( 'wp_enqueue_scripts', 'generate_move_scripts', 999 );
function generate_move_scripts() 
{
    if ( is_child_theme() ) :
        wp_enqueue_style( 'fw-theme-style-css', get_stylesheet_uri(), true, filemtime( get_stylesheet_directory() . '/style.css' ), 'all' );
    endif;
}
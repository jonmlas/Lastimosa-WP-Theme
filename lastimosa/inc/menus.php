<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Direct access forbidden.' ); }
/**
 * Register menus
 */

// This theme uses wp_nav_menu() in two locations.

$atts = c_get_option('header_topbar');
if($atts['yes']['topbar_left_menu']['display'] == 'yes') :
	register_nav_menus( array(
		'top-left'   => __( 'Top left menu', 'unyson' )
	) );
endif;

if($atts['yes']['topbar_right_menu']['display'] == 'yes') :
	register_nav_menus( array(
		'top-right'   => __( 'Top right menu', 'unyson' )
	) );
endif;

/* to be deleted
$header_layout = c_get_option('header_layout');
if($header_layout['layout'] == 'layout-2'):
	register_nav_menus( array(
		'before-main'   => __( 'Before main menu', 'unyson' )
	) );
endif;*/

register_nav_menus( array(
	'main'   => __( 'Main menu', 'unyson' ),
	'footer' => __( 'Footer menu', 'unyson' ),
) );
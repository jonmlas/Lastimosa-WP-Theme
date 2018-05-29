<?php if ( ! defined( 'FW' ) ) { die( 'Forbidden' ); }

// Checks if it has user visibility defined.
if(lastimosa_options_get_user_visibility($atts)) return;

// Section Classes
$class 		= array();
$class[] 	= 'sec-' . substr($atts['id'], 0, 10);
$class 		= array_merge( $class, lastimosa_get_option_advanced_class( $atts ) );

//Container Classes
$container_class = array();
$container_class[] = $atts['width'];
if ( !empty($atts['height']) && !empty($atts['height']['select']) && $atts['height']['select'] != 'custom' ) 		$container_class[] = $atts['height']['select'];
if ( isset( $atts['is_vertical_center'] ) && $atts['is_vertical_center'] ) 	$container_class[] = 'vertical-center';

include dirname( __FILE__ ) .'/'.$atts['style']['selected'].'.php';
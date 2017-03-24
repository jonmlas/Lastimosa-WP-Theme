<?php if ( ! defined( 'FW' ) ) { die( 'Forbidden' ); }

$atts['shortcode'] = 'testimonials ' . $atts['design']['layout']['selected'] . '-' . $atts['design']['style']['selected'];
$attr = lastimosa_get_shortcode_attr($atts);

include dirname( __FILE__ ) . '/' . $atts['design']['layout']['selected'] . '-' . $atts['design']['style']['selected'].'.php';
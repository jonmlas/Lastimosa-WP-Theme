<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}


/* To be deleted.

add_filter( 'less_vars', 'section_less_vars', 10, 2 );

function section_less_vars( $vars, $handle ) {
    if ( ! empty( $atts['section_border'] ) ) {
		$section_border = $atts['section_border'];
	} else {
		$section_border = '';
	}
    $vars[ 'section_border' ] = $section_border;
    return $vars;
}*/
<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
if ( empty( $atts['image'] ) )	return;

echo lastimosa_get_option_link( $atts['link'], lastimosa_get_option_image( $atts ) );
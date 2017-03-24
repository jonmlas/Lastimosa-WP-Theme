<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'main' => array(
		'title'   => __( 'Page Settings', 'unyson' ),
		'type'    => 'tab',
		'options' => array(
			fw()->theme->get_options( 'page-options' ),
		),
	),
);
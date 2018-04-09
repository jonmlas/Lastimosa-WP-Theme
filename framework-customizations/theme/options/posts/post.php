<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'main' => array(
		'title'   => __( 'Post Settings', 'unyson' ),
		'type'    => 'tab',
		'options' => array(
			fw()->theme->get_options( 'post-options' ),
		),
	),
);
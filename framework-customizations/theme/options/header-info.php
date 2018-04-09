<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'header_info' => array(
		'type' => 'multi',
		'label' => false,
		/*'attr' => array(
			'class' => '',
		),*/
		'inner-options' => array(
			'content'    => array(
				'label' => __( 'Content', 'unyson' ),
				'desc'  => __( 'Display an additional phone number or some extra info in your header.', 'unyson' ),
				'type'  => 'wp-editor',
				'value' => ''
			),	
		),
	),			
);
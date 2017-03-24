<?php if (!defined('FW')) die('Forbidden');

$options = array(
	'events'       => array(
		'type'         => 'multi-picker',
		'label'        => false,
		'desc'         => false,
		'picker'       => array(
			'style' => array(
				'label'   => __( 'Style', 'unyson' ),
				'type'    => 'select',
				'choices' => array(
					'default'  => __( 'Default Events List', 'unyson' ),
				),
			)
		),
		'choices'      => array(
			/*'default'  => array(
				'images'       => array(
					'label' => __( 'Images', 'unyson' ),
					'desc'  => __( 'Upload Images',	'unyson' ),
					'type'  => 'multi-upload',
				),
			),*/
		),
		'show_borders' => false,
	),	
);
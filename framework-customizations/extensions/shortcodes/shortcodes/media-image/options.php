<?php if ( ! defined( 'FW' ) ) { die( 'Forbidden' ); }

$options = array(
	'tab_image' => array(
		'title'   => __( 'Image Settings', 'lastimosa' ),
		'type'    => 'tab',
		'options' => array(
			'id'    => array( 
				'type' => 'unique' 
			),
			'image'  => array(
				'label'         => false,
				'type'          => 'multi',
				'value'         => array(),
				'desc'          => false,
				'inner-options' => options_image(),
			),
		),
	),				
	'tab_animate' => array(
		'title'   => __( 'Animation', 'lastimosa' ),
		'type'    => 'tab',
		'options' => array(
			'animate'  => array(
				'label'         => false,
				'type'          => 'multi',
				'value'         => array(),
				'desc'          => false,
				'inner-options' => lastimosa_options_animate(),
			),
		),
	),
	'tab_visibility' => array(
		'title'   => __( 'Visibility', 'lastimosa' ),
		'type'    => 'tab',
		'options' => array(
			'visibility'  => array(
				'label'         => false,
				'type'          => 'multi',
				'value'         => array(),
				'desc'          => false,
				'inner-options' => lastimosa_options_visibility(),
			),
		),
	),
	'tab_advanced' => array(
		'title'   => __( 'Advanced', 'lastimosa' ),
		'type'    => 'tab',
		'options' => array(
			//'margin' 	=> lastimosa_options_box('Margin'),
			//'padding' 	=> lastimosa_options_box('Padding'),
			'custom_id' => lastimosa_options_custom_id(),
			'class' 	=> lastimosa_options_class(),
		),
	),
);
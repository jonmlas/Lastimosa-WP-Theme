<?php if (!defined('FW')) die('Forbidden');

$options = array(
	'tab_image' => array(
		'title'   => __( 'Image Settings', 'unyson' ),
		'type'    => 'tab',
		'options' => array(
			'image'  => array(
				'label'         => false,
				'type'          => 'multi',
				'value'         => array(),
				'desc'          => false,
				'inner-options' => options_image(),	
			),
		),
	),
	'tab_heading' => array(
		'title'   => __( 'Heading', 'unyson' ),
		'type'    => 'tab',
		'options' => array(
			'heading'  => array(
				'label'         => false,
				'type'          => 'multi',
				'value'         => array(),
				'desc'          => false,
				'inner-options' => options_heading(),	
			),
		),
	),
	'tab_description' => array(
		'title'   => __( 'Description', 'unyson' ),
		'type'    => 'tab',
		'options' => array(
			'description'  => array(
				'label'         => false,
				'type'          => 'multi',
				'value'         => array(),
				'desc'          => false,
				'inner-options' => options_text()	
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

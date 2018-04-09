<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'tab_text' => array(
		'title'   => __( 'Code', 'lastimosa' ),
		'type'    => 'tab',
		'options' => array(
			'text'  => array(
				'label'         => false,
				'type'          => 'multi',
				'value'         => array(),
				'desc'          => false,
				'inner-options' => array(
					'content' => array(
						'type'   => 'textarea',
						'label'  => __( 'Content', 'fw' ),
						'desc'   => __( 'Enter some HTML/CSS/Javascript codes here', 'fw' )
					),
				),	
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


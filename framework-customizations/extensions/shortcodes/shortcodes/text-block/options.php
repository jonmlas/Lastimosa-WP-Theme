<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'tab_text' => array(
		'title'   => __( 'Content', 'unyson' ),
		'type'    => 'tab',
		'options' => array(
			'text'  => array(
				'label'         => false,
				'type'          => 'multi',
				'value'         => array(),
				'desc'          => false,
				'inner-options' => options_text(),
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
	'tab_advanced' => array(
		'title'   => __( 'Advanced', 'lastimosa' ),
		'type'    => 'tab',
		'options' => array(
				'advanced_group' => array(
				'title'   => __( 'Advance', 'unyson' ),
				'type'    => 'group',
				'options' => array(
					//'margin' 	=> lastimosa_options_box('Margin'),
					//'padding' 	=> lastimosa_options_box('Padding'),
					'visibility'  => array(
						'label'         => false,
						'type'          => 'multi',
						'value'         => array(),
						'desc'          => false,
						'inner-options' => lastimosa_options_visibility(),
					),
					'custom_id' => lastimosa_options_custom_id(),
					'class' 	=> lastimosa_options_class(),
				),
			),
		),
	),	
);
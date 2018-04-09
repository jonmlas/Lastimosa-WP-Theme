<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'tab_list' => array(
		'title'   => __( 'List', 'lastimosa' ),
		'type'    => 'tab',
		'options' => array(
			'icon_list'             => array(
				'label'         => __( 'Add/Edit Icon List', 'unyson' ),
				'type'          => 'addable-popup',
				'desc'          => __( 'Add, remove and edit the list of icons.', 'unyson' ),
				'template'      => '{{- title }}',
				'popup-options' => array(
					'select'       => array(
						'type'         => 'multi-picker',
						'label'        => false,
						'desc'         => false,
						'picker'       => array(
							'type' => array(
								'label'   => __( 'Icon Type', 'unyson' ),
								'type'    => 'select',
								'choices' => array(
									'font_type'  => __( 'Font Icon', 'unyson' ),
									'image_type' => __( 'Image Icon', 'unyson' )
								),
								'desc'    => __( 'Select the type of Icon you want to use.','unyson' ),
							)
						),
						'choices'      => array(
							'font_type'  => array(
								'font'       => array(
									'type' => 'icon',
									'label' => __( 'Icon', 'fw' )
								),
							),
							'image_type' => array(
								'image'             => array(
									'label' => __( 'Upload Image', 'unyson' ),
									'type'  => 'upload',
								),
							),
						),
						'show_borders' => false,
					),
					'title'    => array(
						'type'  => 'text',
						'label' => __( 'Title', 'fw' ),
						'desc'  => __( 'Icon title', 'fw' ),
					)
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
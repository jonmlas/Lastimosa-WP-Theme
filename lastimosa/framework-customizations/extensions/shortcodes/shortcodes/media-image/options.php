<?php if ( ! defined( 'FW' ) ) { die( 'Forbidden' ); }

$options = array(
	'tab_image' => array(
		'title'   => __( 'Image Settings', 'lastimosa' ),
		'type'    => 'tab',
		'options' => array(
			'id'    => array( 
				'type' => 'unique' 
			),
			'image'     => array(
				'type'  => 'upload',
				'label' => __( 'Choose Image', 'lastimosa' ),
				'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'lastimosa' )
			),
			'width'  => array(
				'type'  => 'text',
				'label' => __( 'Width', 'lastimosa' ),
				'desc'  => __( 'Set image width in pixels. E.g.: 100', 'lastimosa' ),
				'value' => ''
			),
			'height' => array(
				'type'  => 'text',
				'label' => __( 'Height', 'lastimosa' ),
				'desc'  => __( 'Set image height in pixels. E.g.: 50', 'lastimosa' ),
				'value' => ''
			),
			'alignment_group' => lastimosa_option_alignment(),
			'link' => lastimosa_option_link(),
			/*'style'       => array(
				'type'         => 'multi-picker',
				'label'        => false,
				'desc'         => false,
				'picker'       => array(
					'image_style' => array(
						'label'   => __( 'Image Style', 'lastimosa' ),
						'type'    => 'select',
						'choices' => array(
							''  => __( 'No Styling', 'lastimosa' ),
							'border' => __( 'Border', 'lastimosa' ),
							'round' => __( 'Rounded Corners', 'lastimosa' ),
							'circle' => __( 'Circle (must have equal width & height)', 'lastimosa' ),
							'round-border' => __( 'Rounded Corners + Border', 'lastimosa' ),
							'circle-border' => __( 'Circle + Border', 'lastimosa' ),
						),
						'value'	 => '',
						'desc'    => __( 'Choose a style', 'lastimosa' ),
					)
				),
			),*/
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
				'inner-options' => lastimosa_option_animate(),
			),
		),
	),
	'tab_advanced' => array(
		'title'   => __( 'Advanced', 'unyson' ),
		'type'    => 'tab',
		'options' => array(
			'advanced_group' => array(
				'title'   => __( 'Advance', 'unyson' ),
				'type'    => 'group',
				'options' => array(
					'spacing'   => lastimosa_option_spacing( array(	'all' => array( 'value' => 'py-2' ) ) ),
					'border' 	=> array(
						'label'         => false,
						'type'          => 'multi',
						'value'         => array(),
						'desc'          => false,
						'inner-options' => array(
							'side' 		=> lastimosa_option_box_border('Border'),
							'color'		=> lastimosa_option_color_select('Border'),
							'radius'	=> lastimosa_option_box_border_radius('Border-radius')
						)
					),
					'visibility'=> lastimosa_option_visibility(),
					'class' 		=> lastimosa_option_class(),
				),
			),
		),
	),
);
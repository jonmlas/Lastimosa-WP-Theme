<?php if (!defined('FW')) die('Forbidden');

$options = array(
	'id'    => array( 
		'type' => 'unique' 
	),
	'tab_portfolio' => array(
		'title'   => __( 'Settings', 'lastimosa' ),
		'type'    => 'tab',
		'options' => array(
			'view' => array(
				'label'   => __('View', 'lastimosa'),
				'desc'    => __('Choose what view file should the shortcode pick', 'lastimosa'),
				'type'    => 'select',
				'choices' => array(
					'style-1'    => __('Style 1: Default', 'lastimosa'),
					//'style-2'    => __('Style 2', 'lastimosa'),
					//'style-3'    => __('Style 3', 'lastimosa'),
					//'rand' => __('Random Style', 'lastimosa')
				)
			),
			'width'  	=> array(
				'label' => __( 'Width', 'lastimosa' ),
				'type'  => 'short-text',
				'value' => 440,
				'desc'  => __( 'Width of the thumbnail(In Pixels).','lastimosa' ),
			),
			'height'  	=> array(
				'label' => __( 'Height', 'lastimosa' ),
				'type'  => 'short-text',
				'value' => 280,
				'desc'  => __( 'Height of the thumbnail(In Pixels).','lastimosa' ),
			),
			'crop'                    => array(
				'label'        => __( 'Crop', 'lastimosa' ),
				'type'         => 'switch',
				'right-choice' => array(
					'value' => true,
					'label' => __( 'Yes', 'lastimosa' )
				),
				'left-choice'  => array(
					'value' => false,
					'label' => __( 'No', 'lastimosa' )
				),
				'value'        => true,
				'desc'         => __( 'Crop the thumbnail.','lastimosa' ),
			),
			'hover_effect'                    => array(
				'label'   => __( 'Hover Effect', 'lastimosa' ),
				'type'    => 'select',
				'value'   => 'fade',
				'desc'    => __( 'The mouse hover effect of the image',	'lastimosa' ),
				'choices' => array(
					'fade' 			=> __( 'Fade', 'lastimosa' ),
					'push-up' 		=> __( 'Push Up', 'lastimosa' ),
					'push-down' 	=> __( 'Push Down', 'lastimosa' ),
					'push-left' 	=> __( 'Push Left', 'lastimosa' ),
					'push-right' 	=> __( 'Push Right', 'lastimosa' ),
					'slide-up' 		=> __( 'Slide Up', 'lastimosa' ),
					'slide-down' 	=> __( 'Slide Down', 'lastimosa' ),
					'slide-left' 	=> __( 'Slide Left', 'lastimosa' ),
					'slide-right' 	=> __( 'Slide Right', 'lastimosa' ),
					'reveal-up' 	=> __( 'Reveal Up', 'lastimosa' ),
					'reveal-down' 	=> __( 'Reveal Down', 'lastimosa' ),
					'reveal-left' 	=> __( 'Reveal Left', 'lastimosa' ),
					'reveal-right' 	=> __( 'Reveal Right', 'lastimosa' ),
					'hinge-up' 		=> __( 'Hinge Up', 'lastimosa' ),
					'hinge-down'	=> __( 'Hinge Down', 'lastimosa' ),
					'hinge-left' 	=> __( 'Hinge Left', 'lastimosa' ),
					'hinge-right' 	=> __( 'Hinge Right', 'lastimosa' ),
					'flip-horiz' 	=> __( 'Flip Horizontal', 'lastimosa' ),
					'flip-vert' 	=> __( 'Flip Vertical', 'lastimosa' ),
					'flip-diag-1' 	=> __( 'Flip Diagonal 1', 'lastimosa' ),
					'flip-diag-2' 	=> __( 'Flip Diagonal 2', 'lastimosa' ),
					'shutter-out-horiz' 	=> __( 'Shutter Out Horizontal', 'lastimosa' ),
					'shutter-out-vert' 		=> __( 'Shutter Out Vertical', 'lastimosa' ),
					'shutter-out-diag-1' 	=> __( 'Shutter Out ', 'lastimosa' ),
					'shutter-out-diag-2' 	=> __( 'Shutter Out ', 'lastimosa' ),
					'shutter-in-horiz' 		=> __( 'Shutter In Horizontal', 'lastimosa' ),
					'shutter-in-vert' 		=> __( 'Shutter In Vertical', 'lastimosa' ),
					'shutter-in-out-horiz' 	=> __( 'Shutter In Out Horizontal', 'lastimosa' ),
					'shutter-in-out-vert' 	=> __( 'Shutter In Out Vertical', 'lastimosa' ),
					'shutter-in-out-diag-1' => __( 'Shutter In Out Diagonal 1', 'lastimosa' ),
					'shutter-in-out-diag-2' => __( 'Shutter In Out Diagonal 2', 'lastimosa' ),
					'fold-up' 		=> __( 'Fold Up', 'lastimosa' ),
					'fold-down' 	=> __( 'Fold Down', 'lastimosa' ),
					'fold-left' 	=> __( 'Fold Left', 'lastimosa' ),
					'fold-right' 	=> __( 'Fold Right', 'lastimosa' ),
					'zoom-in' 		=> __( 'Zoom In', 'lastimosa' ),
					'zoom-out' 		=> __( 'Zoom Out', 'lastimosa' ),
					'zoom-out-up' 	=> __( 'Zoom Out Up', 'lastimosa' ),
					'zoom-out-down' => __( 'Zoom Out Down', 'lastimosa' ),
					'zoom-out-left' => __( 'Zoom Out', 'lastimosa' ),
					'zoom-out-right' => __( 'Zoom Out', 'lastimosa' ),
					'zoom-out-flip-horiz'	 => __( 'Zoom Out', 'lastimosa' ),
					'zoom-out-flip-vert'	 => __( 'Zoom Out', 'lastimosa' ),
					'blur' 			=> __( 'Blur', 'lastimosa' ),
				),
			),
			'filter'           => array(
				'label'        => __( 'Display Filter', 'lastimosa' ),
				'type'         => 'switch',
				'right-choice' => array(
					'value' => 'yes',
					'label' => __( 'Yes', 'lastimosa' )
				),
				'left-choice'  => array(
					'value' => 'no',
					'label' => __( 'No', 'lastimosa' )
				),
				'value'        => 'yes',
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
				'inner-options' => lastimosa_option_animate(),
			),
		),
	),
	'tab_advanced' => array(
		'title'   => __( 'Advanced', 'lastimosa' ),
		'type'    => 'tab',
		'options' => array(
			'spacing'   => lastimosa_option_spacing(),
			'visibility'=> lastimosa_option_visibility(),
			'class' 		=> lastimosa_option_class(),
		),
	),
);
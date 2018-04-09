<?php if (!defined('FW')) die('Forbidden');

$options = array(
	'tab_portfolio' => array(
		'title'   => __( 'Settings', 'unyson' ),
		'type'    => 'tab',
		'options' => array(
			'portfolio'  => array(
				'label'         => false,
				'type'          => 'multi',
				'value'         => array(),
				'desc'          => false,
				'inner-options' => array(
					'view' => array(
						'label'   => __('View', 'unyson'),
						'desc'    => __('Choose what view file should the shortcode pick', 'unyson'),
						'type'    => 'select',
						'choices' => array(
							'style-1'    => __('Style 1', 'unyson'),
							'style-2'    => __('Style 2', 'unyson'),
							'style-3'    => __('Style 3', 'unyson'),
							'rand' => __('Random Style', 'unyson')
						)
					),
					'width'  	=> array(
						'label' => __( 'Width', 'unyson' ),
						'type'  => 'short-text',
						'value' => 440,
						'desc'  => __( 'Width of the thumbnail(In Pixels).','unyson' ),
					),
					'height'  	=> array(
						'label' => __( 'Height', 'unyson' ),
						'type'  => 'short-text',
						'value' => 275,
						'desc'  => __( 'Height of the thumbnail(In Pixels).','unyson' ),
					),
					'crop'                    => array(
						'label'        => __( 'Crop', 'unyson' ),
						'type'         => 'switch',
						'right-choice' => array(
							'value' => true,
							'label' => __( 'Yes', 'unyson' )
						),
						'left-choice'  => array(
							'value' => false,
							'label' => __( 'No', 'unyson' )
						),
						'value'        => true,
						'desc'         => __( 'Crop the thumbnail.','unyson' ),
					),
					'hover_effect'                    => array(
						'label'   => __( 'Hover Effect', 'unyson' ),
						'type'    => 'select',
						'value'   => 'fade',
						'desc'    => __( 'The mouse hover effect of the image',	'unyson' ),
						'choices' => array(
							'fade' 			=> __( 'Fade', 'unyson' ),
							'push-up' 		=> __( 'Push Up', 'unyson' ),
							'push-down' 	=> __( 'Push Down', 'unyson' ),
							'push-left' 	=> __( 'Push Left', 'unyson' ),
							'push-right' 	=> __( 'Push Right', 'unyson' ),
							'slide-up' 		=> __( 'Slide Up', 'unyson' ),
							'slide-down' 	=> __( 'Slide Down', 'unyson' ),
							'slide-left' 	=> __( 'Slide Left', 'unyson' ),
							'slide-right' 	=> __( 'Slide Right', 'unyson' ),
							'reveal-up' 	=> __( 'Reveal Up', 'unyson' ),
							'reveal-down' 	=> __( 'Reveal Down', 'unyson' ),
							'reveal-left' 	=> __( 'Reveal Left', 'unyson' ),
							'reveal-right' 	=> __( 'Reveal Right', 'unyson' ),
							'hinge-up' 		=> __( 'Hinge Up', 'unyson' ),
							'hinge-down'	=> __( 'Hinge Down', 'unyson' ),
							'hinge-left' 	=> __( 'Hinge Left', 'unyson' ),
							'hinge-right' 	=> __( 'Hinge Right', 'unyson' ),
							'flip-horiz' 	=> __( 'Flip Horizontal', 'unyson' ),
							'flip-vert' 	=> __( 'Flip Vertical', 'unyson' ),
							'flip-diag-1' 	=> __( 'Flip Diagonal 1', 'unyson' ),
							'flip-diag-2' 	=> __( 'Flip Diagonal 2', 'unyson' ),
							'shutter-out-horiz' 	=> __( 'Shutter Out Horizontal', 'unyson' ),
							'shutter-out-vert' 		=> __( 'Shutter Out Vertical', 'unyson' ),
							'shutter-out-diag-1' 	=> __( 'Shutter Out ', 'unyson' ),
							'shutter-out-diag-2' 	=> __( 'Shutter Out ', 'unyson' ),
							'shutter-in-horiz' 		=> __( 'Shutter In Horizontal', 'unyson' ),
							'shutter-in-vert' 		=> __( 'Shutter In Vertical', 'unyson' ),
							'shutter-in-out-horiz' 	=> __( 'Shutter In Out Horizontal', 'unyson' ),
							'shutter-in-out-vert' 	=> __( 'Shutter In Out Vertical', 'unyson' ),
							'shutter-in-out-diag-1' => __( 'Shutter In Out Diagonal 1', 'unyson' ),
							'shutter-in-out-diag-2' => __( 'Shutter In Out Diagonal 2', 'unyson' ),
							'fold-up' 		=> __( 'Fold Up', 'unyson' ),
							'fold-down' 	=> __( 'Fold Down', 'unyson' ),
							'fold-left' 	=> __( 'Fold Left', 'unyson' ),
							'fold-right' 	=> __( 'Fold Right', 'unyson' ),
							'zoom-in' 		=> __( 'Zoom In', 'unyson' ),
							'zoom-out' 		=> __( 'Zoom Out', 'unyson' ),
							'zoom-out-up' 	=> __( 'Zoom Out Up', 'unyson' ),
							'zoom-out-down' => __( 'Zoom Out Down', 'unyson' ),
							'zoom-out-left' => __( 'Zoom Out', 'unyson' ),
							'zoom-out-right' => __( 'Zoom Out', 'unyson' ),
							'zoom-out-flip-horiz'	 => __( 'Zoom Out', 'unyson' ),
							'zoom-out-flip-vert'	 => __( 'Zoom Out', 'unyson' ),
							'blur' 			=> __( 'Blur', 'unyson' ),
						),
					),
					'filter'           => array(
						'label'        => __( 'Display Filter', 'unyson' ),
						'type'         => 'switch',
						'right-choice' => array(
							'value' => 'yes',
							'label' => __( 'Yes', 'unyson' )
						),
						'left-choice'  => array(
							'value' => 'no',
							'label' => __( 'No', 'unyson' )
						),
						'value'        => 'yes',
					)
				),
			),
		),
	),
);
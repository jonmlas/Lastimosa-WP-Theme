<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(
	'id'    => array( 
		'type' => 'unique' 
	),
	'tab_layout' => array(
		'title'   => __( 'Layout', 'unyson' ),
		'type'    => 'tab',
		'options' => array(
			'alignment' =>	array(
				'type'    => 'select',
				'label'   => __('Content Alignment', 'lastimosa'),
				'desc'		=> __('Displays how the elements inside this column will be aligned.', 'lastimosa'),
				'value' => '',
				'choices' => array(
					'' 						=> __('None', 'lastimosa'),
					array(
						'attr'    	=> array(
							'label'         => __( 'Display in all viewports', 'lastimosa' ),
							//'data-whatever' => 'some data',
						),
						'choices' => array(
							'text-left' 	=> __(  'Left align items', 'lastimosa' ),
							'text-center' => __( 'Center aligned items', 'lastimosa' ),
							'text-right' 	=> __( 'Right aligned items', 'lastimosa' ),
						),
					),
					array(
						'attr'    	=> array(
							'label'         => __( 'Align on viewports sized SM (small) or wider', 'lastimosa' ),
						),
						'choices' => array(
							'text-sm-left' 		=> __( 'Left align items if screen ≥ 576px', 'lastimosa' ),
							'text-sm-center' 	=> __( 'Center aligned items if screen ≥ 576px', 'lastimosa' ),
							'text-sm-right' 	=> __( 'Right aligned items if screen ≥ 576px', 'lastimosa' ),
						),
					),
					array(
						'attr'    	=> array(
							'label'         => __( 'Align on viewports sized MD (medium) or wider', 'lastimosa' ),
						),
						'choices' => array(
							'text-md-left' 		=> __(  'Left align items if screen ≥ 768px', 'lastimosa' ),
							'text-md-center' 	=> __( 'Center aligned items if screen ≥ 768px', 'lastimosa' ),
							'text-md-right' 	=> __( 'Right aligned items if screen ≥ 768px', 'lastimosa' ),
						),
					),
					array(
						'attr'    	=> array(
							'label'         => __( 'Align on viewports sized LG (large) or wider', 'lastimosa' ),
						),
						'choices' => array(
							'text-lg-left' 		=> __( 'Left align items if screen ≥ 992px', 'lastimosa' ),
							'text-lg-center' 	=> __( 'Center aligned items if screen ≥ 992px', 'lastimosa' ),
							'text-lg-right' 	=> __( 'Right aligned items if screen ≥ 992px', 'lastimosa' ),
						),
					),
					array(
						'attr'    	=> array(
							'label'         => __( 'Align on viewports sized XL (extra-large) or wider', 'lastimosa' ),
						),
						'choices' => array(
							'text-xl-left' 		=> __( 'Left align items if screen ≥ 1200px', 'lastimosa' ),
							'text-xl-center' 	=> __( 'Center aligned items if screen ≥ 1200px', 'lastimosa' ),
							'text-xl-right' 	=> __( 'Right aligned items if screen ≥ 1200px', 'lastimosa' ),
						),
					),
				)
			),
			'height'   => array(
				'label'        => __( 'Height', 'unyson' ),
				'type'         => 'switch',
				'left-choice'  => array(
					'value' => '',
					'label' => __( 'Auto', 'unyson' )
				),
				'right-choice' => array(
					'value' => 'h-100',
					'label' => __( 'Full', 'unyson' )
				),
				'value'        => '',
				'desc'    => __( 'Defines the height of the content area.','lastimosa' ),
			),
		),
	),
	'tab_bg' => array(
		'title'   => __( 'Background', 'unyson' ),
		'type'    => 'tab',
		'options' => array(
			'background' => lastimosa_option_bg_atts('Column')
		),
	),
	'tab_hover' => array(
		'title'   => __( 'Hover', 'lastimosa' ),
		'type'    => 'tab',
		'options' => array(
			'hover'  => array(
				'label'  => false,
				'type'   => 'multi',
				'value'  => array(),
				'desc'   => false,
				'inner-options' => array(
					'2d' 						=> lastimosa_option_hover_2d(),
					'background' 		=> lastimosa_option_hover_background(),
					'border'				=> lastimosa_option_hover_border(),
					'shadow'				=> lastimosa_option_hover_shadow(),
					'speech_bubbles'	=> lastimosa_option_hover_speech_bubbles(),
					'curls'					=> lastimosa_option_hover_curls(),
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
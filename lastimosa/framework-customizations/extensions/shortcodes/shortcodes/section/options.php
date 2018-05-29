<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(
	'tab_layout' => array(
		'title'   => __( 'Layout', 'lastimosa' ),
		'type'    => 'tab',
		'options' => array(
			'layout_group' => array(
				'type'    => 'group',
				'options' => array(
					'id'    => array( 
						'type' => 'unique' 
					),
					'custom_id' => lastimosa_option_custom_id('Section Name','This will be the Section\'s ID'),
					'width'   => array(
						'label'        => __( 'Content Width', 'lastimosa' ),
						'type'         => 'switch',
						'left-choice'  => array(
							'value' => 'container',
							'label' => __( 'Fixed Width', 'lastimosa' )
						),
						'right-choice' => array(
							'value' => 'container-fluid',
							'label' => __( 'Full Width', 'lastimosa' )
						),
						'value'        => '',
						'desc'    => __( 'Defines the width of the content area.','lastimosa' ),
					),
					'height' => array(
						'type'    	=> 'multi-picker',
						'label'     => false,
						'desc'      => false,
						'picker'    => array(
							'select' => array(
								'label'   => __('Height', 'lastimosa'),
								'type'    => 'select',
								'value'   => '',
								'choices' => array(
									''  => 'auto',
									'full-vh' 		=> __( 'full screen (100% monitor height)', 'lastimosa' ),
									'two-thirds-vh' => __( 'two thirds screen (75% monitor height)', 'lastimosa' ),
									'half-vh'		=> __( 'half screen (50% monitor height)', 'lastimosa' ),
									'quarter-vh' 	=> __( 'quarter screen (25% monitor height)', 'lastimosa' ),
									'custom' 		=> __( 'custom', 'lastimosa' ),
								),
								'desc'    => __( 'Set the height for this section', 'lastimosa' ),
							)
						),
						'choices' => array(
							/*'parallax'    => array(
								'height'  => array(
									'type'  => 'text',
									'label' => __( 'Height', 'lastimosa' ),
									'help'  => __('In pixels or in percentage. E.g.: \'80px\' or  \'25%\'', 'lastimosa'),
								),
							),*/
							'custom'    => array(
								'height' => array(
									'label' => __('Custom Height', 'fw'),
									'desc'  => __('Enter Custom Height Value', 'fw'),
									'type'  => 'text',
								),
							),
						),
						'show_borders' => false,
					),
					'grid_gutter_width'                => array(
						'label' => __( 'Column Gutter Size', 'lastimosa' ),
						'type'  => 'short-text',
						'value' => '30',
						'desc'  => __( 'The space(grid gutter width) between the columns. Default for Bootstrap is 30px.', 'lastimosa' ),
						'help'  => __( 'Enter the value withouth the \'px\' unit. i.e.: \'45\'.', 'lastimosa' )
					),
					'is_vertical_center' => array(
						'label'        => __('Vertical Center', 'fw'),
						'type'         => 'switch',
						'desc'    => __( 'Vertically center contents regardless of the height.', 'lastimosa' ),
					),
				),
			),
		),
	),
	'tab_bg' => array(
		'title'   => __( 'Background', 'lastimosa' ),
		'type'    => 'tab',
		'options' => array(
			'style' => array(
				'type'    	=> 'multi-picker',
				'label'     => false,
				'desc'      => false,
				'picker'    => array(
					'selected' => array(
						'label'   => __('Style', 'lastimosa'),
						'type'    => 'select',
						'value'   => 'default',
						'choices' => array(
							'default'  	=> __( 'Default', 'lastimosa' ),
							'parallax' 	=> __( 'Parallax', 'lastimosa' ),
							'video' 	=> __( 'Video', 'lastimosa' )
						),
					)
				),
				'choices' => array(
					'default'    => array(
						'background' => lastimosa_option_bg_atts('Section')
					),
					'parallax'    => array(
						'background' => lastimosa_option_bg_atts('Section')
					),
					'video'    => array(
						'url' => array(
							'label' => __('Background Video', 'fw'),
							'desc'  => __('Insert Video URL to embed this video', 'fw'),
							'type'  => 'text',
						),
					),
				),
				'show_borders' => false,
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
			'advanced_group' => array(
				'title'   => __( 'Advance', 'lastimosa' ),
				'type'    => 'group',
				'options' => array(
					'spacing'   => lastimosa_option_spacing(/* array(	'md' => array( 'value' => 'py-md-5' ) ) */),
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
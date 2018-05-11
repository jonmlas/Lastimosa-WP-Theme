<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(
	'tab_layout' => array(
		'title'   => __( 'Layout', 'unyson' ),
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
						'label'        => __( 'Content Width', 'unyson' ),
						'type'         => 'switch',
						'left-choice'  => array(
							'value' => 'container',
							'label' => __( 'Fixed Width', 'unyson' )
						),
						'right-choice' => array(
							'value' => 'container-fluid',
							'label' => __( 'Full Width', 'unyson' )
						),
						'value'        => '',
						'desc'    => __( 'Defines the width of the content area.','unyson' ),
					),
					'height' => array(
						'type'    	=> 'multi-picker',
						'label'     => false,
						'desc'      => false,
						'picker'    => array(
							'select' => array(
								'label'   => __('Height', 'unyson'),
								'type'    => 'select',
								'value'   => '',
								'choices' => array(
									''  => 'auto',
									'full-vh' 		=> __( 'full screen (100% monitor height)', 'unyson' ),
									'two-thirds-vh' => __( 'two thirds screen (75% monitor height)', 'unyson' ),
									'half-vh'		=> __( 'half screen (50% monitor height)', 'unyson' ),
									'quarter-vh' 	=> __( 'quarter screen (25% monitor height)', 'unyson' ),
									'custom' 		=> __( 'custom', 'unyson' ),
								),
								'desc'    => __( 'Set the height for this section', 'unyson' ),
							)
						),
						'choices' => array(
							/*'parallax'    => array(
								'height'  => array(
									'type'  => 'text',
									'label' => __( 'Height', 'unyson' ),
									'help'  => __('In pixels or in percentage. E.g.: \'80px\' or  \'25%\'', 'unyson'),
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
						'label' => __( 'Column Gutter Size', 'unyson' ),
						'type'  => 'short-text',
						'value' => '30px',
						'desc'  => __( 'The space(grid gutter width) between the columns. Default(Bootstrap) is 30px.','unyson' ),
					),
					'is_vertical_center' => array(
						'label'        => __('Vertical Center', 'fw'),
						'type'         => 'switch',
						'desc'    => __( 'Vertically center contents regardless of the height.', 'unyson' ),
					),
				),
			),
		),
	),
	'tab_bg' => array(
		'title'   => __( 'Background', 'unyson' ),
		'type'    => 'tab',
		'options' => array(
			'style' => array(
				'type'    	=> 'multi-picker',
				'label'     => false,
				'desc'      => false,
				'picker'    => array(
					'selected' => array(
						'label'   => __('Style', 'unyson'),
						'type'    => 'select',
						'value'   => 'default',
						'choices' => array(
							'default'  	=> __( 'Default', 'unyson' ),
							'parallax' 	=> __( 'Parallax', 'unyson' ),
							'video' 	=> __( 'Video', 'unyson' )
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
		'title'   => __( 'Advanced', 'unyson' ),
		'type'    => 'tab',
		'options' => array(
			'advanced_group' => array(
				'title'   => __( 'Advance', 'unyson' ),
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
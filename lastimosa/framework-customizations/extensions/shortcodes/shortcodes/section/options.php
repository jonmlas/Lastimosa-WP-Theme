<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(
	'layout' => array(
		'title'   => __( 'Layout', 'unyson' ),
		'type'    => 'tab',
		'options' => array(
			'layout_group' => array(
				'type'    => 'group',
				'options' => array(
					'id'    => array( 
						'type' => 'unique' 
					),
					'width'       => array(
						'type'         => 'multi-picker',
						'label'        => false,
						'desc'         => false,
						'picker'       => array(
							'select' => array(
								'label'        => __( 'Width', 'unyson' ),
								'type'         => 'switch',
								'left-choice'  => array(
									'value' => 'fluid',
									'label' => __( 'Full Width', 'unyson' )
								),
								'right-choice' => array(
									'value' => '',
									'label' => __( 'Fixed Width', 'unyson' )
								),
								'value'        => 'fluid',
							)
						),
						'choices'      => array(
							'fluid' => array(
								'content_width' => array(
									'label'        => __( 'Content', 'unyson' ),
									'type'         => 'switch',
									'left-choice'  => array(
										'value' => 'fluid',
										'label' => __( 'Full Width', 'unyson' )
									),
									'right-choice' => array(
										'value' => '',
										'label' => __( 'Fixed Width', 'unyson' )
									),
									'value'        => '',
									'desc'    => __( 'Defines the width of the content area.','unyson' ),
								),
							),
						),
						'show_borders' => false,
					),
					'height' => array(
						'type'    	=> 'multi-picker',
						'label'     => false,
						'desc'      => false,
						'picker'    => array(
							'select' => array(
								'label'   => __('Height', 'unyson'),
								'type'    => 'select',
								'value'   => 'default',
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
					'row_eq_height' => array(
						'label'        => __('Equal Height Columns', 'fw'),
						'type'         => 'switch',
						'desc'    => __( 'All of the columns will stretch vertically to occupy the same height as the tallest column.', 'unyson' ),
					),
					'is_vertical_center' => array(
						'label'        => __('Vertical Center', 'fw'),
						'type'         => 'switch',
						'desc'    => __( 'Vertically center contents regardless of the height.', 'unyson' ),
					),
					'border'                    => array(
						'label'   => __( 'Border', 'unyson' ),
						'type'    => 'select',
						'value'   => '',
						'desc'    => __( 'Add a border around the section',
							'unyson' ),
						'choices' => array(
							''  => '---',
							'full-border' => __( 'full borders', 'unyson' ),
							'top-bottom-border' => __( 'top & bottom borders only', 'unyson' ),
							'left-right-border' => __( 'left & right borders only', 'unyson' ),
							'top-border' => __( 'top border only', 'unyson' ),
							'bottom-border' => __( 'bottom border only', 'unyson' ),
							'left-border' => __( 'left border only', 'unyson' ),
							'right-border' => __( 'right border only', 'unyson' ),
						),
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
						'background' => options_bg_atts('Section')
					),
					'parallax'    => array(
						'background' => options_bg_atts('Section')
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
	'tab_advanced' => array(
		'title'   => __( 'Advanced', 'unyson' ),
		'type'    => 'tab',
		'options' => array(
			'advanced_group' => array(
				'title'   => __( 'Advance', 'unyson' ),
				'type'    => 'group',
				'options' => array(
					'margin' 	=> lastimosa_options_box('Margin'),
					'padding' 	=> lastimosa_options_box('Padding','60px','0','60px','0'),
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
<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'header_topbar'       => array(
		'type'         => 'multi-picker',
		'label'        => false,
		'desc'         => false,
		'picker'       => array(
			'display' => array(
				'label'        => __( 'Display the Top Bar', 'unyson' ),
				'type'         => 'switch',
				'right-choice' => array(
					'value' => 'yes',
					'label' => __( 'Yes', 'unyson' )
				),
				'left-choice'  => array(
					'value' => 'no',
					'label' => __( 'No', 'unyson' )
				),
				'value'        => 'no',
				'desc'         => __( 'This will display the top bar in the header',
					'unyson' ),
			)
		),
		'choices'      => array(
			'yes'  => array(
				'main_style_group' => array(
					'type' => 'group',
					'options' => array(
						'bg_color' => array(
							'label' => __( 'Background Color', 'unyson' ),
							'type'  => 'rgba-color-picker',
							'value' => 'rgba(255, 255, 255, 1)',
							'desc'  => __( 'Enter the background color of the header top bar. ', 'unyson' ),
						),
						'height'    => array(
							'label' => __( 'Height', 'unyson' ),
							'type'  => 'short-text',
							'value' => '20px',
							'desc'  => __( 'Enter the height of the topbar in pixels. ', 'unyson' ),
						),
					),
				),
				'left_style_group' => array(
					'type' => 'group',
					'options' => array(
						'topbar_left_content_typography'  => array(
							'label' => __( 'Left Top Bar Typography', 'unyson' ),
							'type'  => 'typography',
							'value' => array(
								'size'   => 17,
								'family' => 'Verdana',
								'style'  => '300italic',
								'color'  => '#0000ff'
							),
						),
						'topbar_left_content'    => array(
							'label' => __( 'Left Top Bar Content', 'unyson' ),
							'desc'  => __( 'Enter the content for the left part of the top bar', 'unyson' ),
							'type'  => 'text',
							'value' => '',
						),
						'topbar_left_menu' => array(
							'type'         => 'multi-picker',
							'label'        => false,
							'desc'         => false,
							'picker'       => array(
								'display' => array(
									'label'        => __( 'Top Bar Left Menu', 'unyson' ),
									'type'         => 'switch',
									'right-choice' => array(
										'value' => 'yes',
										'label' => __( 'Yes', 'unyson' )
									),
									'left-choice'  => array(
										'value' => 'no',
										'label' => __( 'No', 'unyson' )
									),
									'value'        => 'no',
									'desc'         => __( 'This will display a menu in the left topbar',
										'unyson' ),
								)
							),
							'choices'      => array(
								'yes'  => array(
									'style_group' => array(
										'type' => 'group',
										'options' => array(
											'active_color'  => array(
												'label' => __( 'Active Color', 'unyson' ),
												'type'  => 'color-picker',
												'value' => '#000',
											),
											'hover_color'  => array(
												'label' => __( 'Hover Color', 'unyson' ),
												'type'  => 'color-picker',
												'value' => '#000',
											),	
										),
									),			
								),
							),
						),
					),
				),
				'right_style_group' => array(
					'type' => 'group',
					'options' => array(
						'topbar_right_content'    => array(
							'label' => __( 'Right Top Bar Content', 'unyson' ),
							'desc'  => __( 'Enter the content for the right part of the top bar', 'unyson' ),
							'type'  => 'text',
							'value' => '',
						),	
						'topbar_right_content_typography'  => array(
							'label' => __( 'Right Top Bar Typography', 'unyson' ),
							'type'  => 'typography',
							'value' => array(
								'size'   => 17,
								'family' => 'Verdana',
								'style'  => '300italic',
								'color'  => '#0000ff'
							),
						),
						'topbar_right_menu' => array(
							'type'         => 'multi-picker',
							'label'        => false,
							'desc'         => false,
							'picker'       => array(
								'display' => array(
									'label'        => __( 'Top Bar Right Menu', 'unyson' ),
									'type'         => 'switch',
									'right-choice' => array(
										'value' => 'yes',
										'label' => __( 'Yes', 'unyson' )
									),
									'left-choice'  => array(
										'value' => 'no',
										'label' => __( 'No', 'unyson' )
									),
									'value'        => 'no',
									'desc'         => __( 'This will display a menu in the right topbar',
										'unyson' ),
								)
							),
							'choices'      => array(
								'yes'  => array(
									'style_group' => array(
										'type' => 'group',
										'options' => array(
											'active_color'  => array(
												'label' => __( 'Active Color', 'unyson' ),
												'type'  => 'color-picker',
												'value' => '#000',
											),
											'hover_color'              => array(
												'label' => __( 'Hover Color', 'unyson' ),
												'type'  => 'color-picker',
												'value' => '#000',
											),	
										),
									),			
								),
							),
						),	
					),
				),			
			),
		),
		'show_borders' => false,
	),				
);
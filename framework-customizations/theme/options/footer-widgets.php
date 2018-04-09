<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
$uri = get_template_directory_uri();

$options = array(
	'footer_widgets'  => array(
		'type'         => 'multi-picker',
		'label'        => false,
		'desc'         => false,
		'picker'       => array(
			'selected_value' => array(
				'label'        => __( 'Footer Widgets', 'unyson' ),
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
				'desc'  => __('Show footer widgets?', 'unyson'),
			)
		),
		'choices'      => array(
			'yes'  => array(
				'widget_group' => array(
					'type' => 'group',
					'options' => array(
						'columns-picker' => array(
							'type'         => 'multi-picker',
							'label'        => false,
							'desc'         => false,
							'picker'       => array(
								'columns' => array(
									'label'   => __('Footer Widget Columns', 'unyson'),
									'desc'    => __('Set the number of columns', 'unyson'),
									'type'    => 'select',
									'value'   => 'col-md-4',
									'choices' => array(
										'col-md-6' 	=> __('2 equal columns', 'unyson'),
										'col-md-6-a'=> __('2 columns (2/3 + 1/3)', 'unyson'),
										'col-md-6-b'=> __('2 columns (1/3 + 2/3)', 'unyson'),
										'col-md-4'  => __('3 equal columns', 'unyson'),
										'col-md-4-a'=> __('3 columns (1/4 + 1/2 + 1/4)', 'unyson'),
										'col-md-4-b'=> __('3 columns (1/4 + 1/4 + 1/2)', 'unyson'),
										'col-md-4-c'=> __('3 columns (1/3 + 1/6 + 1/2)', 'unyson'),
										'col-md-3'  => __('4 equal columns', 'unyson'),
										'col-md-15' => __('5 equal columns', 'unyson'),
									),
								),
							),
							'choices'      => array(
								'col-md-6'  => array(
									'img'  => array(
										'type'  => 'html',
										'label' => '',
										'desc' => '',
										'html' => __( '<img src="'.$uri.'/images/options/footer-widget-col-md-6.png">', 'unyson' ),
									)
								),
								'col-md-4'  => array(
									'img'  => array(
										'type'  => 'html',
										'label' => '',
										'desc' => '',
										'html' => __( '<img src="'.$uri.'/images/options/footer-widget-col-md-4.png">', 'unyson' ),
									)
								),
							),
						),
						'heading_typography'=> array(
							'label' => __( 'Heading Typography', 'unyson' ),
							'type'  => 'typography',
							'value' => array(
								'size'   => 16,
								'family' => 'Verdana',
								'style'  => '300',
								'color'  => '#000'
							),
						),
						'typography'=> array(
							'label' => __( 'Typography', 'unyson' ),
							'type'  => 'typography',
							'value' => array(
								'size'   => 14,
								'family' => 'Verdana',
								'style'  => '300',
								'color'  => '#000'
							),
						),
						'text_link_color'   => array(
							'label' => __( '', 'unyson' ),
							'type'  => 'color-picker',
							'value' => '#cccccc',
							'desc'  => __( 'Link Color', 'unyson' ),
						),
						'text_link_hover_color'   => array(
							'label' => __( '', 'unyson' ),
							'type'  => 'color-picker',
							'value' => '#999999',
							'desc'  => __( 'Link Hover Color', 'unyson' ),
						),
					),
				),
				'bg_group' => array(
					'type' => 'group',
					'options' =>  array(
						'background' => options_bg_atts('Widget')
					),
				),
				'overlay_options' => array(
					'type'  => 'multi-picker',
					'label' => false,
					'desc'  => false,
					'picker' => array(
						'overlay' => array(
							'type'  => 'switch',
							'label' => __( 'Overlay Color', 'unyson' ),
							'desc'  => __( 'Enable image overlay color?', 'unyson' ),
							'value' => 'no',
							'right-choice' => array(
								'value' => 'yes',
								'label' => __('Yes', 'unyson'),
							),
							'left-choice' => array(
								'value' => 'no',
								'label' => __('No', 'unyson'),
							),
						),
					),
					'choices' => array(
						'no'  => array(),
						'yes' => array(
							'overlay_color'    => array(
									'label' => __( 'Overlay Color', 'unyson' ),
									'type'  => 'color-picker',
									'value' => '#000',
								),
							'overlay_color_opacity' => array(
								'type'  => 'slider',
								'value' => 100,
								'properties' => array(
									'min' => 0,
									'max' => 100,
									'sep' => 1,
								),
								'label' => __('', 'unyson'),
								'desc'  => __('Select the overlay color opacity in %', 'unyson'),
							)
						),
					),
				),
				'padding_top'       => array(
					'type'         => 'multi-picker',
					'label'        => false,
					'desc'         => false,
					'picker'       => array(
						'select' => array(
							'label'   => __( 'Padding Top', 'unyson' ),
							'type'    => 'select',
							'value'   => '30',
							'choices' => array(
								'0'  	=> __( '(0px) none', 'unyson' ),
								'15' 	=> __( '(15px) extra small', 'unyson' ),
								'30'	=> __( '(30px) small', 'unyson' ),
								'45' 	=> __( '(45px) small-medium ', 'unyson' ),
								'60' 	=> __( '(60px) medium ', 'unyson' ),
								'75' 	=> __( '(75px) medium-large', 'unyson' ),
								'90' 	=> __( '(90px) large', 'unyson' ),
								'105' 	=> __( '(105px) extra large ', 'unyson' ),
								'120' 	=> __( '(120px) jumbo ', 'unyson' ),
								'custom'=> __( 'custom', 'unyson' )
							),
							'desc'    => __( 'The padding at the top of this section','unyson' ),
						)
					),
					'choices'      => array(
						'custom'  => array(
							'size'  => array(
								'type'  => 'text',
								'label' => __( '', 'unyson' ),
								'value'   => '60px',
								'desc'  => __( 'Enter the size of the padding in pixels.','unyson' )
							),
						),
						
					),
					'show_borders' => false,
				),
				'padding_bottom'       => array(
					'type'         => 'multi-picker',
					'label'        => false,
					'desc'         => false,
					'picker'       => array(
						'select' => array(
							'label'   => __( 'Padding Bottom', 'unyson' ),
							'type'    => 'select',
							'value'   => '30',
							'choices' => array(
								'0'  	=> __( '(0px) none', 'unyson' ),
								'15' 	=> __( '(15px) extra small', 'unyson' ),
								'30'	=> __( '(30px) small', 'unyson' ),
								'45' 	=> __( '(45px) small-medium ', 'unyson' ),
								'60' 	=> __( '(60px) medium ', 'unyson' ),
								'75' 	=> __( '(75px) medium-large', 'unyson' ),
								'90' 	=> __( '(90px) large', 'unyson' ),
								'105' 	=> __( '(105px) extra large ', 'unyson' ),
								'120' 	=> __( '(120px) jumbo ', 'unyson' ),
								'custom'=> __( 'custom', 'unyson' )
							),
							'desc'    => __( 'The padding at the bottom of this section','unyson' ),
						)
					),
					'choices'      => array(
						'custom'  => array(
							'size'  => array(
								'type'  => 'text',
								'label' => __( '', 'unyson' ),
								'value'   => '60px',
								'desc'  => __( 'Enter the size of the padding in pixels.','unyson' )
							),
						),
						
					),
					'show_borders' => false,
				),
			),
		),
		'show_borders' => false,
	),	
);
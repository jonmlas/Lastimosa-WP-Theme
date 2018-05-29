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
			'enabled' => array(
				'label'        => __( 'Footer Widgets', 'lastimosa' ),
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
				'desc'  => __('Show footer widgets?', 'lastimosa'),
			)
		),
		'choices'      => array(
			'yes'  => array(
				'widget_group' => array(
					'type' => 'group',
					'options' => array(
						'style' => array(
							'type'         => 'multi-picker',
							'label'        => false,
							'desc'         => false,
							'picker'       => array(
								'selected' => array(
									'label'   => __('Style', 'lastimosa'),
									'desc'    => __('Set the columns and style', 'lastimosa'),
									'type'    => 'select',
									'value'   => 'col-md-4',
									'choices' => array(
										'col-md-12' => __('1 column', 'lastimosa'),
										'col-md-6' 	=> __('2 equal columns', 'lastimosa'),
										'col-md-6-a'=> __('2 columns (2/3 + 1/3)', 'lastimosa'),
										'col-md-6-b'=> __('2 columns (1/3 + 2/3)', 'lastimosa'),
										'col-md-4'  => __('3 equal columns', 'lastimosa'),
										'col-md-4-a'=> __('3 columns (1/4 + 1/2 + 1/4)', 'lastimosa'),
										'col-md-4-b'=> __('3 columns (1/4 + 1/4 + 1/2)', 'lastimosa'),
										'col-md-4-c'=> __('3 columns (1/3 + 1/6 + 1/2)', 'lastimosa'),
										'col-md-3'  => __('4 equal columns', 'lastimosa'),
										'col-md-5' => __('5 equal columns', 'lastimosa'),
									),
								),
							),
							'choices'      => array(
								'col-md-6'  => array(
									'img'  => array(
										'type'  => 'html',
										'label' => '',
										'desc' => '',
										'html' => __( '<img src="'.$uri.'/images/options/footer-widget-col-md-6.png">', 'lastimosa' ),
									)
								),
								'col-md-4'  => array(
									'img'  => array(
										'type'  => 'html',
										'label' => '',
										'desc' => '',
										'html' => __( '<img src="'.$uri.'/images/options/footer-widget-col-md-4.png">', 'lastimosa' ),
									)
								),
							),
						),
						'container' => array(
							'label'   => __( 'Container', 'lastimosa' ),
							'type'    => 'image-picker',
							'value'   => 'container',
							'desc'    => __( 'Container layout for the widget.', 'lastimosa' ),
							'choices' => array(
								'container' => array(
									'small' => array(
										'height' => 70,
										'src'    => $uri . '/images/image-picker/container-thumb.png'
									),
									'large' => array(
										'height' => 214,
										'src'    => $uri . '/images/image-picker/container.png'
									),
								),
								'container-fluid' => array(
									'small' => array(
										'height' => 70,
										'src'    => $uri . '/images/image-picker/container-fluid-thumb.png'
									),
									'large' => array(
										'height' => 214,
										'src'    => $uri . '/images/image-picker/container-fluid.png'
									),
								),
							),
						),
						'heading_typography'=> array(
							'label' => __( 'Heading', 'lastimosa' ),
							'desc' => __( 'Typography for the widget headings', 'lastimosa' ),
							'type'  => 'typography',
							'value' => array(
								'size'   => 16,
								'family' => 'Open Sans',
								'style'  => '600',
								'color'  => '#000'
							),
						),
						'typography'=> array(
							'label' => __( 'Content', 'lastimosa' ),
							'desc' => __( 'Typography for the widget content', 'lastimosa' ),
							'type'  => 'typography',
							'value' => array(
								'size'   => 14,
								'family' => 'Open Sans',
								'style'  => '300',
								'color'  => '#000'
							),
						),
						'link_color'   			=> lastimosa_option_color_picker('','#333', 'Widget link color'),
						'link_hover_color'	=> lastimosa_option_color_picker('','#666', 'Widget link hover color'),
					),
				),
				'bg_group' => array(
					'type' => 'group',
					'options' =>  array(
						'background' => lastimosa_option_bg_atts('Widget')
					),
				),
				/*'overlay' => array(
					'type'  => 'multi-picker',
					'label' => false,
					'desc'  => false,
					'picker' => array(
						'overlay' => array(
							'type'  => 'switch',
							'label' => __( 'Overlay Color', 'lastimosa' ),
							'desc'  => __( 'Enable widget color overlay?', 'lastimosa' ),
							'value' => 'no',
							'right-choice' => array(
								'value' => 'yes',
								'label' => __('Yes', 'lastimosa'),
							),
							'left-choice' => array(
								'value' => 'no',
								'label' => __('No', 'lastimosa'),
							),
						),
					),
					'choices' => array(
						'no'  => array(),
						'yes' => array(
							'color'    => array(
									'label' => __( '', 'lastimosa' ),
									'desc' => __( 'Overlay Color', 'lastimosa' ),
									'type'  => 'color-picker',
									'value' => '#000',
								),
							'opacity' => array(
								'type'  => 'slider',
								'value' => 100,
								'properties' => array(
									'min' => 0,
									'max' => 100,
									'sep' => 1,
								),
								'label' => __( '', 'lastimosa' ),
								'desc'  => __( 'Select the overlay color opacity in %', 'lastimosa' ),
							)
						),
					),
				), */
			),
		),
		'show_borders' => false,
	),	
);
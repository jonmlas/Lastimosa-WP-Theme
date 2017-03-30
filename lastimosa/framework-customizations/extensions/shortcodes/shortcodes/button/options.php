<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$uri = fw_get_template_customizations_directory_uri('/extensions/shortcodes/shortcodes/button/static');

$options = array(
	'tab_button' => array(
		'title'   => __( 'Button', 'unyson' ),
		'type'    => 'tab',
		'options' => array(
			'id'    => array( 
				'type' => 'unique' 
			),
			'text'  => array(
				'label' => __( 'Label', 'fw' ),
				'desc'  => __( 'Enter the button text', 'fw' ),
				'type'  => 'text',
				'value' => 'Submit'
			),
			'link_group' => array(
				'type' => 'group',
				'options' => options_link()
			),
			
			'alignment' => array(
				'label' => __( 'Alignment', 'fw' ),
				'desc'  => __( 'Choose button alignment', 'fw' ),
				'type'  => 'image-picker',
				'value' => '',
				'choices' => array(
					'' => array(
						'small' => array(
							'height' => 50,
							'src' => $uri .'/img/image-picker/no-align.jpg',
							'title' => __('None','fw')
						),
					),
					'text-left' => array(
						'small' => array(
							'height' => 50,
							'src' => $uri .'/img/image-picker/left-position.jpg',
							'title' => __('Left','fw')
						),
					),
					'text-center' => array(
						'small' => array(
							'height' => 50,
							'src' => $uri .'/img/image-picker/center-position.jpg',
							'title' => __('Center','fw')
						),
					),
					'text-right' => array(
						'small' => array(
							'height' => 50,
							'src' => $uri .'/img/image-picker/right-position.jpg',
							'title' => __('Right','fw')
						),
					),
					'alignleft' => array(
						'small' => array(
							'height' => 50,
							'src' => $uri .'/img/image-picker/float-left.jpg',
							'title' => __('Float Left','fw')
						),
					),
					'alignright' => array(
						'small' => array(
							'height' => 50,
							'src' => $uri .'/img/image-picker/float-right.jpg',
							'title' => __('Float Right','fw')
						),
					),
				),
			),
		),
	),
	'tab_style' => array(
		'title'   => __( 'Style', 'unyson' ),
		'type'    => 'tab',
		'options' => array(
			'design'       => array(
				'type'         => 'multi-picker',
				'label'        => false,
				'desc'         => false,
				'picker'       => array(
					'selected' => array(
						'label'   => __( 'Design', 'unyson' ),
						'type'    => 'select',
						'choices' => array(
							'predefined'  => __( 'Predefined Button (TBA)', 'unyson' ),
							'custom' => __( 'Custom Button', 'unyson' )
						),
						'desc'    => __( '','unyson' ),
					)
				),
				'choices'      => array(
					'predefined'  => array(
					),
					'custom' => array(
						'style'  => array(
							'label'   => __( 'Style', 'fw' ),
							'desc'    => __( 'Choose button style', 'fw' ),
							'type'  => 'image-picker',
							'value' => '',
							'choices' => array(
								'btn-default' => array(
									'small' => array(
										'height' => 67,
										'src' => $uri .'/img/image-picker/btn-default-sm.png'
									),
									'large' => array(
										'height' => 200,
										'src' => $uri .'/img/image-picker/btn-default.png'
									),
								),
								'btn-gradient' => array(
									'small' => array(
										'height' => 67,
										'src' => $uri .'/img/image-picker/btn-gradient-sm.png'
									),
									'large' => array(
										'height' => 200,
										'src' => $uri .'/img/image-picker/btn-gradient.png'
									),
								),
								'btn-raised' => array(
									'small' => array(
										'height' => 67,
										'src' => $uri .'/img/image-picker/btn-raised-sm.png'
									),
									'large' => array(
										'height' => 200,
										'src' => $uri .'/img/image-picker/btn-raised.png'
									),
								),
								'btn-outline' => array(
									'small' => array(
										'height' => 67,
										'src' => $uri .'/img/image-picker/btn-outline-sm.png'
									),
									'large' => array(
										'height' => 200,
										'src' => $uri .'/img/image-picker/btn-outline.png'
									),
								),
							),
						),
						'text_color' => lastimosa_options_color_picker('Text Color','#636c72'),
						'bg_color' => lastimosa_options_color_picker('Background Color'),
						'text_hover_color' => lastimosa_options_color_picker('Text Hover Color'),
						'bg_hover_color' => lastimosa_options_color_picker('Background Hover Color','#286090'),
						'size' => array(
							'type'    	=> 'multi-picker',
							'label'     => false,
							'desc'      => false,
							'picker'    => array(
								'selected' => array(
									'label'   => __('Size', 'unyson'),
									'type'    => 'select',
									'value'   => 'btn-md',
									'choices' => array(
										'btn-xs' => __( 'Extra Small', 'fw' ),
										'btn-sm' => __( 'Small', 'fw' ),
										'btn-md' => __( 'Normal', 'fw' ),
										'btn-lg' => __( 'Large', 'fw' ),
										'btn-xlg' => __( 'Extra Large', 'fw' ),
										'custom' 		=> __( 'custom', 'unyson' ),
									),
									'desc'    => __( 'Set the height for this section', 'unyson' ),
								)
							),
							'choices' => array(
								'custom'    => array(
									'font' => array(
										'label' => __('', 'fw'),
										'desc'  => __('Font Size. e.g.: 16px', 'fw'),
										'value' => '16px',
										'type'  => 'short-text',
									),
									'width' => array(
										'label' => __('', 'fw'),
										'desc'  => __('Button Width. e.g.: 200px', 'fw'),
										'value' => '200px',
										'type'  => 'short-text',
									),
									'height' => array(
										'label' => __('', 'fw'),
										'desc'  => __('Button Height. e.g.: 50px', 'fw'),
										'value' => '50px',
										'type'  => 'short-text',
									),
								),
							),
							'show_borders' => false,
						),
						'full_width' => array(
							'type'  => 'switch',
							'label' => __( '', 'fw' ),
							'desc'  => __( 'Make this button full width?', 'fw' ),
							'value' => '',
							'right-choice' => array(
								'value' => true,
								'label' => __('Yes', 'fw'),
							),
							'left-choice' => array(
								'value' => false,
								'label' => __('No', 'fw'),
							),
						),
						'edges' => array(
							'label'   => __( 'Edges Style', 'unyson' ),
							'type'    => 'select',
							'value'   => '',
							'choices' => array(
								''  	 => __( 'Default', 'unyson' ),
								'sharp'  => __( 'Sharp Corners Button', 'unyson' ),
								'round'  => __( 'Rounded Edges', 'unyson' ),
								'circle' => __( 'Circle Button', 'unyson' ),
							),
						),
						'icon' => array(
							'type'  => 'icon',
							'label' => __( 'Icon', 'fw' )
						),
						'icon_position' => array(
							'type'  => 'switch',
							'label' => __( '', 'fw' ),
							'desc'  => __( 'Icon position', 'fw' ),
							'right-choice' => array(
								'value' => 'left',
								'label' => __('Left Side (Before Text)', 'fw'),
							),
							'left-choice' => array(
								'value' => 'right',
								'label' => __('Right Side (After Text)', 'fw'),
							),
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
				'inner-options' => lastimosa_options_animate(),
			),
		),
	),
	'tab_visibility' => array(
		'title'   => __( 'Visibility', 'lastimosa' ),
		'type'    => 'tab',
		'options' => array(
			'visibility'  => array(
				'label'         => false,
				'type'          => 'multi',
				'value'         => array(),
				'desc'          => false,
				'inner-options' => lastimosa_options_visibility(),
			),
		),
	),
	'tab_advanced' => array(
		'title'   => __( 'Advanced', 'lastimosa' ),
		'type'    => 'tab',
		'options' => array(
			'margin' 	=> lastimosa_options_box('Margin'),
			'padding' 	=> lastimosa_options_box('Padding'),
			'custom_id' => lastimosa_options_custom_id(),
			'class' 	=> lastimosa_options_class(),
		),
	),
);

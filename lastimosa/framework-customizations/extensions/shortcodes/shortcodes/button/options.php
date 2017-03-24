<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$uri = fw_get_template_customizations_directory_uri('/extensions/shortcodes/shortcodes/button/static');

$theme_colors = c_get_option('theme_colors');
$text_color['text-default'] = __( 'Default' , 'unyson');
foreach($theme_colors as $theme_color) {
  $text_color['text-'.sanitize_title_with_dashes($theme_color['text'])] = __( $theme_color['text'] , 'unyson');
}

$bg_color['text-default'] = __( 'Default' , 'unyson');
foreach($theme_colors as $theme_color) {
  $bg_color['bg-'.sanitize_title_with_dashes($theme_color['text'])] = __( $theme_color['text'] , 'unyson');
}

$text_hover_color['#333333'] = __( 'Default' , 'unyson');
foreach($theme_colors as $theme_color) {
  $text_hover_color[$theme_color['color']] = __( $theme_color['text'] , 'unyson');
}

$bg_hover_color['#e6e6e6'] = __( 'Default' , 'unyson');
foreach($theme_colors as $theme_color) {
  $bg_hover_color[$theme_color['color']] = __( $theme_color['text'] , 'unyson');
}

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
			'size_group' => array(
				'type' => 'group',
				'options' => array(
					'size'  => array(
						'label' => __( 'Size', 'fw' ),
						'desc'  => __( 'Choose button size', 'fw' ),
						'attr'  => array( 'class' => 'fw-checkbox-float-left' ),
						'type'  => 'radio',
						'value' => 'btn-md',
						'choices' => array(
							'btn-xs' => __( 'Extra Small', 'fw' ),
							'btn-sm' => __( 'Small', 'fw' ),
							'btn-md' => __( 'Normal', 'fw' ),
							'btn-lg' => __( 'Large', 'fw' ),
						)
					),
					'full_width' => array(
						'type'  => 'switch',
						'label' => __( '', 'fw' ),
						'desc'  => __( 'Make this button full width?', 'fw' ),
						'value' => '',
						'right-choice' => array(
							'value' => 'btn-block',
							'label' => __('Yes', 'fw'),
						),
						'left-choice' => array(
							'value' => '',
							'label' => __('No', 'fw'),
						),
					),
				)
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
			'icon_group' => array(
				'type' => 'group',
				'options' => array(
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
				)
			),
		),
	),
	'tab_style' => array(
		'title'   => __( 'Style', 'unyson' ),
		'type'    => 'tab',
		'options' => array(
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
			'text_color' => array(
				'label'   => __( 'Text Color', 'unyson' ),
				'type'    => 'select',
				'value'   => '',
				'choices' => $text_color,
			),
			'bg_color' => array(
				'label'   => __( 'Background Color', 'unyson' ),
				'type'    => 'select',
				'value'   => '',
				'choices' => $bg_color,
			),
			'text_hover_color' => array(
				'label'   => __( 'Text Hover Color', 'unyson' ),
				'type'    => 'select',
				'value'   => '',
				'choices' => $text_hover_color,
			),
			'bg_hover_color' => array(
				'label'   => __( 'Background Hover Color', 'unyson' ),
				'type'    => 'select',
				'value'   => '',
				'choices' => $bg_hover_color,
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
			)
		),
	),
	'tab_advanced' => array(
		'title'   => __( 'Advanced', 'unyson' ),
		'type'    => 'tab',
		'options' => array(
			//'margin' 	=> lastimosa_options_box('Margin'),
			//'padding' 	=> lastimosa_options_box('Padding'),
			'custom_id' => lastimosa_options_custom_id(),
			'class' 	=> lastimosa_options_class(),
		),
	),
);

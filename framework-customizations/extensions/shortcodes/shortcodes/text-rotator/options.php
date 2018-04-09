<?php if (!defined('FW')) {
	die('Forbidden');
}

$theme_colors = c_get_option('theme_colors');
$color['text-default'] = __( 'Default' , 'unyson');
foreach($theme_colors as $theme_color) {
  $color['text-'.sanitize_title_with_dashes($theme_color['text'])] = __( $theme_color['text'] , 'unyson');
}

$options = array(
	'tab_heading' => array(
		'title'   => __( 'Heading', 'unyson' ),
		'type'    => 'tab',
		'options' => array(
			'id'    => array( 
				'type' => 'unique' 
			),
			'heading'  => array(
				'label'         => false,
				'type'          => 'multi',
				'value'         => array(),
				'desc'          => false,
				'inner-options' => array(
					'prepend_text'    => array(
						'type'  => 'text',
						'label' => __( 'Prepended static text', 'fw' ),
						'desc'   => __( 'The text that is added in the beginning of the sentence.','unyson' ),
						// 'attr'  => array('class' => 'no-bottom-border'), // not working... tba
					),
					'rotating_text'            => array(
						'label'  => __( 'Addable Option', 'unyson' ),
						'type'   => 'addable-option',
						'option' => array(
							'type' => 'text',
						),
						'value'  => array( 'cool', 'great', 'smart' ),
						'desc'   => __( 'Add, Remove and Edit the rotating text','unyson' ),
					),
					'append_text'    => array(
						'type'  => 'text',
						'label' => __( 'Appended static text', 'fw' ),
						'desc'   => __( 'The text that is added in the end of the sentence.','unyson' ),
						// 'attr'  => array('class' => 'no-bottom-border'), // not working... tba
					),
					'link_group' => array(
						'type' => 'group',
						'options' => options_link()
					),
					'size' => array(
						'type'    => 'select',
						'label'   => __('Size', 'fw'),
						'value'   => 'h2',
						'choices' => array(
							'h1' => 'H1',
							'h2' => 'H2',
							'h3' => 'H3',
							'h4' => 'H4',
							'h5' => 'H5',
							'h6' => 'H6',
							'p' => 'p',
						)
					),
					'color'                    => array(
						'label'   => __( 'Color', 'unyson' ),
						'type'    => 'select',
						'value'   => '',
						'choices' => $color,
					),
					'formatting'                => array(
						'label'   => __( 'Formatting', 'unyson' ),
						'type'    => 'checkboxes',
						'value'   => array(
							'bold' => false,
							'italic' => false,
						),
						'choices' => array(
							'bold' => __( 'Bold', 'unyson' ),
							'italic' => __( 'Italic', 'unyson' ),
						),
					),
					'alignment' => array(
						'type'    => 'select',
						'label'   => __('Text Alignment', 'fw'),
						'choices' => array(
							'text-left' => 'Left aligned text',
							'text-center' => 'Center aligned text',
							'text-right' => 'Right aligned text',
							'text-justify' => 'Justified text',
							'text-nowrap' => 'No wrap text',
						)
					),
					'transformation' => array(
						'type'    => 'select',
						'label'   => __('Text Transformation', 'fw'),
						'value'   => '',
						'choices' => array(
							''  => 'none',
							'text-lowercase' => 'lowercased text',
							'text-uppercase' => 'UPPERCASED TEXT',
							'text-capitalize' => 'Capitalized Text',
						)
					),
				),
			),
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
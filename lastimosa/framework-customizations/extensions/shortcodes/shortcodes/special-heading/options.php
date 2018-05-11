<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(
	'id'    => array( 
		'type' => 'unique' 
	),
	'tab_heading' => array(
		'title'   => __( 'Heading', 'lastimosa' ),
		'type'    => 'tab',
		'options' => array(
			'heading'  => array(
				'label'         => false,
				'type'          => 'multi',
				'value'         => array(),
				'desc'          => false,
				'inner-options' => array(
					'text'    => array(
						'type'  => 'text',
						'label' => __( 'Heading', 'fw' ),
						// 'attr'  => array('class' => 'no-bottom-border'), // not working... tba
					),
					'css_tag' => lastimosa_option_css_tag( '', 'CSS Tag' ),
					'color'		=> lastimosa_option_color_select( 'Heading' ),
					'formatting' => array(
						'label'   => __( '', 'lastimosa' ),
						'type'    => 'checkboxes',
						'value'   => array(
							'bold' => false,
							'italic' => false,
						),
						'choices' => array(
							'bold' => __( 'Bold', 'lastimosa' ),
							'italic' => __( 'Italic', 'lastimosa' ),
						),
						'inline' => true,
					),
					'link' => lastimosa_option_link(),
					'text-alignment' => lastimosa_option_text_alignment(),
					'text-transform' => lastimosa_option_text_transform('Text transform.',''),					 
				),
			),
		),
	),
	'tab_subheading' => array(
		'title'   => __( 'Subheading', 'lastimosa' ),
		'type'    => 'tab',
		'options' => array(
			'subheading'  => array(
				'label'         => false,
				'type'          => 'multi',
				'value'         => array(),
				'desc'          => false,
				'inner-options' => array(
					'content' => array(
						'type'   => 'wp-editor',
						//'teeny'  => false, //Whether to output the minimal editor configuration used in PressThis
						'reinit' => true,
						'label'  => __( 'Content', 'lastimosa' ),
						'desc'   => __( 'Enter content for this texblock', 'lastimosa' ),
						'tinymce' => true, //Load TinyMCE, can be used to pass settings directly to TinyMCE using an array. Default: true
						'size' => 'large',
						'editor_height' => 425, //The height to set the editor in pixels. If set, will be used instead of textarea_rows. 
						//'editor_type' => 'tinymce',
						'wpautop' => true, //Whether to use wpautop for adding in paragraphs. Note that the paragraphs are added automatically when wpautop is false.
						'value' => ''
					),
					'color'	=> lastimosa_option_color_select('Subheading')
				)
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
					//'margin' 	=> lastimosa_option_box('Margin'),
					//'padding' 	=> lastimosa_option_box('Padding'),
					'visibility'=> lastimosa_option_visibility(),
					'custom_id' => lastimosa_option_custom_id(),
					'class' 		=> lastimosa_option_class(),
				),
			),
		),
	),
);
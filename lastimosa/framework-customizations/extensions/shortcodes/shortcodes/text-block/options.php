<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'id'    => array( 
		'type' => 'unique' 
	),
	'tab_text' => array(
		'title'   => __( 'Content', 'lastimosa' ),
		'type'    => 'tab',
		'options' => array(
			'text' => array(
				'type'   => 'wp-editor',
				//'teeny'  => false, //Whether to output the minimal editor configuration used in PressThis
				'reinit' => true,
				'label'  => __( 'Content', 'lastimosa' ),
				'desc'   => __( 'Enter content for this texblock', 'lastimosa' ),
				'tinymce' => true, //Load TinyMCE, can be used to pass settings directly to TinyMCE using an array. Default: true
				'size' => 'large',
				'editor_height' => 425, //The height to set the editor in pixels. If set, will be used instead of textarea_rows. 
				//'editor_type' => 'tinymce',
				'shortcodes' => true,
				'wpautop' => true, //Whether to use wpautop for adding in paragraphs. Note that the paragraphs are added automatically when wpautop is false.
				'value' => ''
			),
			'color'	=> lastimosa_option_color_select('Text')
		),
	),
	'tab_more' => array(
		'title'   => __( 'Show More', 'lastimosa' ),
		'type'    => 'tab',
		'options' => array(
			'show_more'  => array(
				'label'         => false,
				'type'          => 'multi',
				'value'         => array(),
				'desc'          => false,
				'inner-options' => array(
					'enable' => array(
						'type'  => 'switch',
						'value' => false,
						'label' => __('Enable', 'lastimosa'),
						'left-choice' => array(
								'value' => false,
								'label' => __('Disabled', 'lastimosa'),
						),
						'right-choice' => array(
								'value' => true,
								'label' => __('Enabled', 'lastimosa'),
						),
					),
					'show_button'	=> array(
						'type'  => 'text',
						'value' => 'Show More',
						'label' => __('Show Button Text', 'lastimosa'),
						'desc'  => __('', 'lastimosa'),
					),
					'hide_button'	=> array(
						'type'  => 'text',
						'value' => 'Show Less',
						'label' => __('Hide Button Text', 'lastimosa'),
						'desc'  => __('', 'lastimosa'),
					),
				),
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
			'spacing'   => lastimosa_option_spacing(),
			'visibility'=> lastimosa_option_visibility(),
			'class' 		=> lastimosa_option_class(),
		),
	),		
);
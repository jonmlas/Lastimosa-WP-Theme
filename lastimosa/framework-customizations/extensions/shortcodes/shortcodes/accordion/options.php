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
			'tabs' => array(
				'type'          => 'addable-popup',
				'label'         => __( 'Tabs', 'lastimosa' ),
				'popup-title'   => __( 'Add/Edit Tabs', 'lastimosa' ),
				'desc'          => __( 'Create your tabs', 'lastimosa' ),
				'size'					=> 'large',
				'template'      => '{{= tab_title }}',
				'popup-options' => array(
					'tab_title'   => array(
						'type'  => 'text',
						'label' => __('Title', 'lastimosa')
					),
					'tab_content' => array(
						'type'  => 'wp-editor',
						'shortcodes' => true,
						'editor_height' => 350,
						'label' => __('Content', 'lastimosa')
					),
				),
			),
		),
	),
	'tab_style' => array(
		'title'   => __( 'Style', 'lastimosa' ),
		'type'    => 'tab',
		'options' => array(
			'style'       => array(
				'type'         => 'multi-picker',
				'label'        => false,
				'desc'         => false,
				'picker'       => array(
					'selected' => array(
						'label'   => __( 'Style', 'lastimosa' ),
						'type'    => 'select',
						'choices' => array(
							'style-1' => __( 'Default', 'lastimosa' ),
							'style-2' => __( 'Bootstrap', 'lastimosa' ),
						),
						'value'	  => 'style-1',
						'desc'    => __( 'Select the layout for the header','lastimosa' ),
					)
				),
				'choices'      => array(
					/*'style-1'  => array(
						'thumbnail'                      => array(
							'label' => __( '', 'lastimosa' ),
							'type'  => 'html',						
							'html'  => '<img src="'.$uri.'/images/image-picker/header-layout-1.jpg">',
						),
					), */
					// Add Another Style
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
		'title'   => __( 'Advanced', 'lastimosa' ),
		'type'    => 'tab',
		'options' => array(
			'spacing'   => lastimosa_option_spacing(),
			'visibility'=> lastimosa_option_visibility(),
			'class' 		=> lastimosa_option_class(),
		),
	),		
);
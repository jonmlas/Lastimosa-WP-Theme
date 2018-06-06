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
			'value' => array(
				'type'  => 'slider',
				'value' => 25,
				'properties' => array(
					'min' => 0,
					'max' => 100,
					'step' => 1, // Set slider step. Always > 0. Could be fractional.
				),
				'label' => __('Percentage Value', 'lastimosa'),
				'desc'  => __('Slide percentage value between 0 and 100', 'lastimosa'),
			),
			'text'	=> array(
				'type' => 'text',
				'value' => 'Skill or Task',
				'label' => __('Title', 'lastimosa'),
				'desc'  => __('Enter the progress bar\'s title', 'lastimosa'),
			),
		),
	),
	'tab_style' => array(
		'title'   => __( 'Style', 'lastimosa' ),
		'type'    => 'tab',
		'options' => array(
			'style_group' => array(
				'type'	=> 'group',
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
									'style-1' => __( 'Style 1: Bootstrap Default', 'lastimosa' ),
									'style-2' => __( 'Style 2', 'lastimosa' ),
								),
								'value'	  => 'style-1',
								'desc'    => __( 'Select the layout for the header','lastimosa' ),
							)
						),
						'choices'      => array(
							'style-1'  => array(
								/*'thumbnail'                      => array(
									'label' => __( '', 'lastimosa' ),
									'type'  => 'html',						
									'html'  => '<img src="'.$uri.'/images/image-picker/header-layout-1.jpg">',
								),*/
							),
							// Add Another Style
						),
						'show_borders' => false,
					),
					'bg_color'	=> lastimosa_option_color_select('Bar', 'bg'),
					'font_size' => array(
						'label'   => __( '', 'lastimosa' ),
						'type'    => 'select',
						'value'   => '',
						'desc'    => sprintf( __( 'Text size. Add or modify font sizes by clicking <a href="%s" target="_blank">here</a>.', 'lastimosa' ), admin_url( 'themes.php?page=fw-settings#fw-options-tab-tab_typography') ),
						'choices' => lastimosa_option_font_sizes(),
					),
					'color'	=> lastimosa_option_color_select('Text'),
					'height'	=> array(
						'label'   => __( '', 'lastimosa' ),
						'type'    => 'short-text',
						'value'   => '',
						'desc'		=> __( 'Bar\'s height. Enter in pixels including the unit. i.e.: \'45px\'', 'lastimosa' ),
					),
					'striped'		=> array(
						'type'  => 'checkbox',
						'value' => false, // checked/unchecked
						'label' => __('', 'lastimosa'),
						'desc'  => __('Check to apply a stripe via CSS gradient over the progress bar\'s background color.', 'lastimosa'),
						'text'  => __('Striped', 'lastimosa'),
					),
					'animated_stripe'		=> array(
						'type'  => 'checkbox',
						'value' => false, // checked/unchecked
						'label' => __('', 'lastimosa'),
						'desc'  => __('Check to animate the stripes right to left via CSS3 animations.', 'lastimosa'),
						'text'  => __('Animated Stripe', 'lastimosa'),
						'help'  => __('Striped must be checked in order for animation to take effect.', 'lastimosa'),
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
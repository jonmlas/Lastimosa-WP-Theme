<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$uri = fw_get_template_customizations_directory_uri('/extensions/shortcodes/shortcodes/button/static');

$options = array(
	'id'    => array( 
		'type' => 'unique' 
	),
	'tab_button' => array(
		'title'   => __( 'Button', 'lastimosa' ),
		'type'    => 'tab',
		'options' => array(
			'text'  => array(
				'label' => __( 'Label', 'fw' ),
				'desc'  => __( 'Enter the button text', 'fw' ),
				'type'  => 'text',
				'value' => 'Submit'
			),
			'link' 	=> lastimosa_option_link(),			
			'float' => lastimosa_option_alignment(),
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
							'btn-default' => __( 'Default', 'lastimosa' ),
							'btn-outline' => __( 'Outline', 'lastimosa' ),
							'btn-rounded' => __( 'Rounded', 'lastimosa' ),
							'btn-squared' => __( 'Squared', 'lastimosa' ),
						),
						'value'	  => 'btn-default',
						'desc'    => __( 'Select button style','lastimosa' ),
					)
				),
				'choices'   => array(
					'btn-default' => array(
						'preview' => array(
							'label' => __( '', 'lastimosa' ),
							'type'  => 'html',						
							'html'  => '<button type="button" class="btn btn-block btn-primary">Button</button>',
						),
					),
					'btn-outline' => array(
						'preview'	=> array(
							'label' => __( '', 'lastimosa' ),
							'type'  => 'html',						
							'html'  => '<button type="button" class="btn btn-outline btn-primary">Button</button>',
						),
					),
					'btn-rounded' => array(
						'preview'	=> array(
							'label' => __( '', 'lastimosa' ),
							'type'  => 'html',						
							'html'  => '<button type="button" class="btn btn-round btn-primary">Button</button>',
						),
					),
					'btn-squared' => array(
						'preview'	=> array(
							'label' => __( '', 'lastimosa' ),
							'type'  => 'html',						
							'html'  => '<button type="button" class="btn btn-squared btn-primary">Button</button>',
						),
					),
				),
				'show_borders' => false,
			),
			'color'			=> array(
				'label'   => __( 'Color', 'lastimosa' ),
				'type'    => 'select',
				'value'   => '',
				'desc'		=> __( 'Select button color', 'lastimosa' ),
				'help'		=> sprintf( __( 'Add or modify the color palettes by clicking <a href="%s" target="_blank">here</a>.', 'lastimosa' ), admin_url( 'themes.php?page=fw-settings#fw-options-tab-tab_button')
				),
				'choices' => lastimosa_option_button_colors(),
			),
			'size'     => array(
				'label'   => __( 'Size', 'unyson' ),
				'type'    => 'select',
				'value'   => 'btn-md',
				'desc'		=> __( 'Select button size', 'lastimosa' ),
				'help'		=> sprintf( __( 'Add or modify the button sizes by clicking <a href="%s" target="_blank">here</a>.', 'lastimosa' ), admin_url( 'themes.php?page=fw-settings#fw-options-tab-tab_button')
				),
				'choices' => lastimosa_option_button_sizes(),
			),
			'is_full_width' => array(
				'type'  => 'switch',
				'label' => __( '', 'lastimosa' ),
				'desc'  => __( 'Make this button full width?', 'lastimosa' ),
				'value' => false,
				'right-choice' => array(
					'value' => true,
					'label' => __('Yes', 'lastimosa'),
				),
				'left-choice' => array(
					'value' => false,
					'label' => __('No', 'lastimosa'),
				),
			),
			'icon' => array(
				'type'  => 'icon-v2',
				'preview_size' => 'medium', //small | medium | large | sauron		 * Yes, sauron. Definitely try it. Great one.
				'modal_size' => 'large', // small | medium | large
				//'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
				'label' => __('Icon', 'lastimosa'),
				'desc'  => __('Add Icon', 'lastimosa'),
				//'help'  => __('Help tip', '{domain}'),
		),
			'icon_position' => array(
				'type'  => 'switch',
				'label' => __( '', 'lastimosa' ),
				'desc'  => __( 'Icon position', 'lastimosa' ),
				'value' => true,
				'right-choice' => array(
					'value' => true,
					'label' => __('Right Side (After Text)', 'lastimosa'),
				),
				'left-choice' => array(
					'value' => false,
					'label' => __('Left Side (Before Text)', 'lastimosa'),
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

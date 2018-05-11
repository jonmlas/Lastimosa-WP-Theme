<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'id'    => array( 
		'type' => 'unique' 
	),
	'tab_list' => array(
		'title'   => __( 'Content', 'lastimosa' ),
		'type'    => 'tab',
		'options' => array(
			'icon' => array(
				'type' => 'icon-v2',
				'preview_size' => 'medium',
				'modal_size' => 'medium',
				//'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
				'label' => __('Icon', 'lastimosa'),
				'desc'  => __('Select an Icon.', 'lastimosa'),
				//'help'  => __('Help tip', 'lastimosa'),
			),
			'title'    => array(
				'type'  => 'text',
				'label' => __( 'Title', 'fw' ),
				'desc'  => __( 'Icon title', 'fw' ),
			),
			'icon_position' => array(
				'type'  => 'switch',
				'label' => __( '', 'lastimosa' ),
				'desc'  => __( 'Icon position', 'lastimosa' ),
				'value' => false,
				'left-choice' => array(
					'value' => false,
					'label' => __('Before Title', 'lastimosa'),
				),
				'right-choice' => array(
					'value' => true,
					'label' => __('After Title', 'lastimosa'),
				),
			),
		),
	),
	'tab_style' => array(
		'title'   => __( 'Style', 'lastimosa' ),
		'type'    => 'tab',
		'options' => array(
			'icon_size' => array(
				'label'   => __( 'Icon Size', 'lastimosa' ),
				'type'    => 'select',
				'value'   => '',
				'desc'    => __( 'Size for font icons', 'lastimosa' ),
				'help'		=> sprintf( __( 'Add or modify sizes by clicking <a href="%s" target="_blank">here</a>.', 'lastimosa' ), admin_url( 'themes.php?page=fw-settings#fw-options-tab-tab_typography') ),
				'choices' => lastimosa_option_font_sizes(),
			),
			'icon_color'	=> lastimosa_option_color_select( 'Icon' ),
			'css_tag' => lastimosa_option_css_tag( 'Title CSS Tag', '', 'h4' ),
			'title_size' => array(
				'label'   => __( '', 'lastimosa' ),
				'type'    => 'select',
				'value'   => '',
				'desc'    => __( 'Size of the title', 'lastimosa' ),
				'help'		=> sprintf( __( 'Add or modify sizes by clicking <a href="%s" target="_blank">here</a>.', 'lastimosa' ), admin_url( 'themes.php?page=fw-settings#fw-options-tab-tab_typography') ),
				'choices' => lastimosa_option_font_sizes(),
			),
			'title_color'	=> lastimosa_option_color_select( 'Title' ),
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
					'spacing'   => lastimosa_option_spacing(),
					'visibility'=> lastimosa_option_visibility(),
					'class' 		=> lastimosa_option_class(),
				),
			),
		),
	),
);
<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
//Access the WordPress Contact Fort via an Array
$cf7_forms = array();
$args = array('post_type' => 'wpcf7_contact_form', 'posts_per_page' => -1);
$cf7_forms_obj = get_posts( $args );    
foreach ($cf7_forms_obj as $cf7_form) {
$cf7_forms[$cf7_form->ID] = $cf7_form->post_title; }

$options = array(
	'tab_forms' => array(
		'title'   => __( 'Forms', 'unyson' ),
		'type'    => 'tab',
		'options' => array(
			'forms_group' => array(
				'type'    => 'group',
				'options' => array(
					'id'    => array( 
						'type' => 'unique' 
					),
					'contact_form' => array(
						'type'  => 'select',
						'label' => __('Choose a form :', 'lastimosa'),
						'desc'  => __('', 'lastimosa'),
						'choices' => $cf7_forms
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
				'inner-options' => lastimosa_options_animate(),
			),
		),
	),
	'tab_advanced' => array(
		'title'   => __( 'Advanced', 'unyson' ),
		'type'    => 'tab',
		'options' => array(
			'advanced_group' => array(
				'type'    => 'group',
				'options' => array(
					'margin' 	=> lastimosa_options_box('Margin'),
					'padding' 	=> lastimosa_options_box('Padding'),
					'visibility'  => array(
						'label'         => false,
						'type'          => 'multi',
						'value'         => array(),
						'desc'          => false,
						'inner-options' => lastimosa_options_visibility(),
					),
					'custom_id' => lastimosa_options_custom_id(),
					'class' 	=> lastimosa_options_class(),
				),
			),
		),
	),
);
<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'page_side' => array(
		'title'    => __( 'Page Options', 'lastimosa' ),
		'type'     => 'box',
		'context'  => 'side',
		'priority' => 'low',
		'options'  => array(
			'page_settings_group' => array(
				'type' => 'group',
				'options' => array(
					'page_header' => array(
						'label'   => __( 'Header Settings', 'lastimosa' ),
						'type'    => 'select',
						'value'   => '',
						'desc'    => __( 'Options for the header on this page. ',	'lastimosa' ),
						'choices' => array(
							''  => __( 'Default', 'lastimosa' ),
							'transparent' => __( 'Transparent', 'lastimosa' ),
							'd-none' => __( 'Hide the header on this page', 'lastimosa' ),
						),
					),
					'hide_page_title' => array(
						'label' => false,
						'type'  => 'checkbox',
						'value' => false,
						'text'  => __( 'Hide Page Title', 'lastimosa' ),
					),
					'hide_footer_widgets' => array(
						'label' => false,
						'type'  => 'checkbox',
						'value' => false,
						'text'  => __( 'Hide Footer Widgets', 'lastimosa' ),
					),
				),
			),
		),
	), 
	'main' => array(
		'title'   => __( 'Page Settings', 'unyson' ),
		'type'    => 'tab',
		'options' => array(
			fw()->theme->get_options( 'page-options' ),
		),
	),
);
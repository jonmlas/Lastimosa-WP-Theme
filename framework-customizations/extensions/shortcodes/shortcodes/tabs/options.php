<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'tabs' => array(
		'type'          => 'addable-popup',
		'label'         => __( 'Tabs', 'fw' ),
		'popup-title'   => __( 'Add/Edit Tab', 'fw' ),
		'desc'          => __( 'Create your tabs', 'fw' ),
		'template'      => '{{=tab_title}}',
		'size' => 'large', // small, medium, large
		'popup-options' => array(
			'tab_title' => array(
				'type'  => 'text',
				'label' => __('Title', 'fw')
			),
			'tab_content' => array(
				'type'  => 'wp-editor',
				'label' => __('Content', 'fw'),
				'reinit' => true,
			)
		),
	),
	'tabs_class' => array(
		'label'   => __('CSS Class', 'unyson'),
		'desc'    => __('Enter the CSS Class of the tabs', 'unyson'),
		'type'    => 'text'
	),
);
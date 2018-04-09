<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'view' => array(
		'label'   => __( 'Style', 'unyson' ),
		'type'    => 'select',
		'value'   => 'default',
		'choices' => array(
			'default' => __( 'Default', 'unyson' ),
			'style-2' => __( 'Style 2', 'unyson' ),
		),
	),
	'image' => array(
		'label' => __( 'Team Member Image', 'fw' ),
		'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' ),
		'type'  => 'upload'
	),
	'name'  => array(
		'label' => __( 'Team Member Name', 'fw' ),
		'desc'  => __( 'Name of the person', 'fw' ),
		'type'  => 'text',
		'value' => ''
	),
	'job'   => array(
		'label' => __( 'Team Member Job Title', 'fw' ),
		'desc'  => __( 'Job title of the person.', 'fw' ),
		'type'  => 'text',
		'value' => ''
	),
	'desc'  => array(
		'label' => __( 'Team Member Description', 'fw' ),
		'desc'  => __( 'Enter a few words that describe the person', 'fw' ),
		'type'  => 'textarea',
		'value' => ''
	),
	'img_style'  => array(
		'label' => __( 'Image Style', 'fw' ),
		'desc'  => __( 'Choose your image styling. ', 'fw' ),
		'type'  => 'select',
		'value' => '',
		'choices' => array(
			''  			=> __( 'None', 'unyson' ),
			'img-rounded'   => __( 'Rounded', 'unyson' ),
			'img-circle'   	=> __( 'Circle', 'unyson' ),
			'img-thumbnail' => __( 'Thumbnail', 'unyson' ),
		),
	),
);
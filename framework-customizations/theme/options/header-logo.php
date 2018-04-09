<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'header_logo' => array(
		'type' => 'multi',
		'label' => false,
		/*'attr' => array(
			'class' => '',
		),*/
		'inner-options' => array(
			'name'    	=> array(
				'label' => __( 'Logo', 'unyson' ),
				'desc'  => __( 'Enter your website\'s name', 'unyson' ),
				'type'  => 'text',
				'value' => get_bloginfo( 'name' )
			),
			'color'     => array(
				'label' => __( '', 'unyson' ),
				'desc' 	=> __( 'Text logo color', 'unyson' ),
				'type'  => 'color-picker',
				'value' => '#000000',
			),
			'image'  => array(
				'label' => __( 'Logo Upload', 'unyson' ),
				'desc'  => __( 'Upload your website logo', 'unyson' ),
				'type'  => 'upload',
			),
			'width'                => array(
				'label' => __( 'Width', 'unyson' ),
				'type'  => 'short-text',
				'value' => '250px',
				'desc'  => __( 'The logo\'s width.','unyson' ),
			),
		),
	),			
);
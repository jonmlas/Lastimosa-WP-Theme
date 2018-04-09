<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$uri = get_template_directory_uri();

$options = array(
	'theme_options' => array(
		'type' => 'multi',
		'label' => false,
		/*'attr' => array(
			'class' => '',
		),*/
		'inner-options' => array(
			'favicon' => array(
				'label' => __( 'Favicon', 'unyson' ),
				'desc'  => __( 'Upload a favicon image', 'unyson' ),
				'type'  => 'upload'
			),
		),
	),
);

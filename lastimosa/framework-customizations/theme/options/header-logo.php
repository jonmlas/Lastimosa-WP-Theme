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
				'label' => __( 'Logo', 'lastimosa' ),
				'desc'  => __( 'Enter your website\'s name', 'lastimosa' ),
				'type'  => 'text',
				'value' => get_bloginfo( 'name' )
			),
			'color'     => array(
				'label' => __( '', 'lastimosa' ),
				'desc' 	=> __( 'Text logo color', 'lastimosa' ),
				'type'  => 'color-picker',
				'value' => '#000000',
			),
			'image'  => array(
				'label' => __( 'Logo Upload', 'lastimosa' ),
				'desc'  => __( 'Upload your website logo', 'lastimosa' ),
				'type'  => 'upload',
			),
			'width'                => array(
				'label' => __( 'Width', 'lastimosa' ),
				'type'  => 'short-text',
				'value' => '',
				'desc'  => __( 'The logo\'s width. Input value in pixel without the \'px\' sign. i.e.: <strong>260</strong>','lastimosa' ),
			),
			'tagline'   => array(
				'label'        => __( 'Hide Tagline', 'lastimosa' ),
				'type'         => 'switch',
				'left-choice'  => array(
					'value' => '',
					'label' => __( 'No', 'lastimosa' )
				),
				'right-choice' => array(
					'value' => ' d-none',
					'label' => __( 'Yes', 'lastimosa' )
				),
				'value'  	=> '',
				'desc'    => __( 'Select Yes to hide the Tagline','lastimosa' ),
			),
		),
	),			
);
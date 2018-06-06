<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

//$uri = get_template_directory_uri();

$options = array(
	'page_options' => array(
		'type' => 'multi',
		'label' => false,
		/*'attr' => array(
			'class' => '',
		),*/
		'inner-options' => array(
			/*'hide_title' => array(
				'label'        => __( 'Hide Title?', 'unyson' ),
				'type'         => 'switch',
				'right-choice' => array(
					'value' => true,
					'label' => __( 'Yes', 'unyson' )
				),
				'left-choice'  => array(
					'value' => false,
					'label' => __( 'No', 'unyson' )
				),
				'value'        => false,
				
			),
			'footer_scripts' => array(
				'label' => __( 'Footer Scripts', 'unyson' ),
				'type'  => 'textarea',
				'desc'  => __( 'Enter Footer Scripts. Include &#039;&lt;script&gt; ... &lt;/script&gt;&#039; tags', 'unyson' ),
			),*/
		),
	),
);

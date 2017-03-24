<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$uri = get_template_directory_uri();

$options = array(
	'theme_layout' => array(
		'type' => 'multi',
		'label' => false,
		/*'attr' => array(
			'class' => '',
		),*/
		'inner-options' => array(
		
			'content-width'                => array(
				'label' => __( 'Container Width', 'unyson' ),
				'type'  => 'short-text',
				'value' => '1400px',
				'desc'  => __( 'The container width of your site\'s content. Enter in pixel or in percentage. ie: \'1130px\' or \'100%\' ', 'unyson' ),
			),
			'site-layout'       => array(
				'type'         => 'multi-picker',
				'label'        => false,
				'desc'         => false,
				'picker'       => array(
					'layout' => array(
						'label'   => __( 'Site Layout', 'unyson' ),
						'type'    => 'select',
						'value'    => 'full',
						'choices' => array(
							'container-fluid'  => __( 'Full Width', 'unyson' ),
							'container' => __( 'Boxed', 'unyson' )
						),
						'desc'    => __( '', 'unyson' ),
					)
				),
				'choices'      => array(
					'container-fluid'  => array(
					),
					'container' => array(
						'bg_group' => array(
							'type' => 'group',
							'options' =>  array(
								'background' => options_bg_atts('Container')
							),
						),
					),
				),
				'show_borders' => false,
			),
			'body' => array(
				'type' => 'multi',
				'label' => false,
				'inner-options' => array(
					'bg_group' => array(
						'type' => 'group',
						'options' =>  array(
							'background' => options_bg_atts('Body')
						),
					),	
				)
			),
		),
	),
);
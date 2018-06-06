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
		
			'container-width'                => array(
				'label' => __( 'Container Width', 'lastimosa' ),
				'type'  => 'short-text',
				'value' => '1200px',
				'desc'  => __( 'The container width of your site\'s content. Enter in pixel or in percentage. ie: \'1130px\' or \'100%\' ', 'lastimosa' ),
				'help'  => __( '<p><strong>Accepted Values</strong><br>
												Pixel: 1200px<br>
												Em: 75em<br>
												Rem: 75rem<br>
												Percentage: 80%<br>
												Unitless: 1200</p>', 'lastimosa' ),
			),
			'layout'       => array(
				'type'         => 'multi-picker',
				'label'        => false,
				'desc'         => false,
				'picker'       => array(
					'selected' => array(
						'label'   => __( 'Site Layout', 'lastimosa' ),
						'type'    => 'select',
						'value'    => 'full',
						'choices' => array(
							'container-fluid'  => __( 'Full Width Layout', 'lastimosa' ),
							'container' => __( 'Boxed Layout', 'lastimosa' )
						),
						'desc'    => __( '', 'lastimosa' ),
					)
				),
				'choices'      => array(
					'container-fluid' => array(
						'thumbnail' => array(
							'label' => __( '', 'lastimosa' ),
							'type'  => 'html',						
							'html'  => '<img src="'.$uri.'/images/image-picker/layout-full-width.jpg">',
						),
					),
					'container' => array(
						'thumbnail' => array(
							'label' => __( '', 'lastimosa' ),
							'type'  => 'html',						
							'html'  => '<img src="'.$uri.'/images/image-picker/layout-boxed.jpg">',
						),
						'bg_group' => array(
							'type' => 'group',
							'options' =>  array(
								'background' => lastimosa_option_bg_atts('Container')
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
							'background' => lastimosa_option_bg_atts('Body')
						),
					),	
				)
			),
			'content_width' => array(
				'type'  => 'slider',
				'value' => 70,
				'properties' => array(
						/*
						'min' => 0,
						'max' => 100,
						'step' => 1, // Set slider step. Always > 0. Could be fractional.
						*/
				),
				'label' => __('Content Width', 'lastimosa'),
				'desc'  => __('Width of the content area. Sidebar width will automatically be the difference between the total width and the content width.', 'lastimosa'),
			),
		),
	),
);
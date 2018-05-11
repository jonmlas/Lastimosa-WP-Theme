<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
$uri = get_template_directory_uri();
$options = array(
	'header_layout' => array(
		'type' => 'multi',
		'label' => false,
		/*'attr' => array(
			'class' => '',
		),*/
		'inner-options' => array(
			'style'       => array(
				'type'         => 'multi-picker',
				'label'        => false,
				'desc'         => false,
				'picker'       => array(
					'selected' => array(
						'label'   => __( 'Header Design', 'lastimosa' ),
						'type'    => 'select',
						'choices' => array(
							'style-1' => __( '1. Logo left / Menu right', 'lastimosa' ),
							'style-2' => __( '2. Logo left / Menu bottom left', 'lastimosa' ),
							'style-3' => __( '3. Logo center / Menu left & right', 'lastimosa' ),
							'style-4' => __( '4. Logo center / Menu bottom center', 'lastimosa' ),
							//'layout-5' => __( 'Layout 4: Logo center / Menu bottom', 'lastimosa' )

						),
						'value'	  => 'style-1',
						'desc'    => __( 'Select the layout for the header','lastimosa' ),
					)
				),
				'choices'      => array(
					'style-1'  => array(
						'thumbnail'                      => array(
							'label' => __( '', 'lastimosa' ),
							'type'  => 'html',						
							'html'  => '<img src="'.$uri.'/images/image-picker/header-layout-1.jpg">',
						),
						/*'min_height'=> array(
							'label' => __( 'Height', 'lastimosa' ),
							'type'  => 'text',
							'value' => '150px',
							'desc'  => __( 'Enter the minimum height of the header','lastimosa' ),
						),*/
					),
					'style-2'  => array(
						'thumbnail'                      => array(
							'label' => __( '', 'lastimosa' ),
							'type'  => 'html',						
							'html'  => '<img src="'.$uri.'/images/image-picker/header-layout-2.jpg">',
						),
					),
					'style-3'  => array(
						'thumbnail'                      => array(
							'label' => __( '', 'lastimosa' ),
							'type'  => 'html',						
							'html'  => '<img src="'.$uri.'/images/image-picker/header-layout-3.jpg">',
						),
					),
					'style-4'  => array(
						'thumbnail'                      => array(
							'label' => __( '', 'lastimosa' ),
							'type'  => 'html',						
							'html'  => '<img src="'.$uri.'/images/image-picker/header-layout-4.jpg">',
						),
					),

				),
				'show_borders' => false,
			),
			'container' => array(
				'label'   => __( 'Container', 'lastimosa' ),
				'type'    => 'image-picker',
				'value'   => 'container',
				'desc'    => __( 'Container layout for the header.', 'lastimosa' ),
				'choices' => array(
					'container' => array(
						'small' => array(
							'height' => 70,
							'src'    => $uri . '/images/image-picker/container-thumb.png'
						),
						'large' => array(
							'height' => 214,
							'src'    => $uri . '/images/image-picker/container.png'
						),
					),
					'container-fluid' => array(
						'small' => array(
							'height' => 70,
							'src'    => $uri . '/images/image-picker/container-fluid-thumb.png'
						),
						'large' => array(
							'height' => 214,
							'src'    => $uri . '/images/image-picker/container-fluid.png'
						),
					),
				),
			),
			'background_color' => array(
				'label' => __( 'Background Color', 'lastimosa' ),
				'type'  => 'rgba-color-picker',
				'value' => '',
			),
		),
	),
);

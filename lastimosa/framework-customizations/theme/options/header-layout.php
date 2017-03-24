<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
$uri = get_template_directory_uri();
$options = array(
	'header_layout'       => array(
		'type'         => 'multi-picker',
		'label'        => false,
		'desc'         => false,
		'picker'       => array(
			'selected' => array(
				'label'   => __( 'Multi Picker: Select', 'unyson' ),
				'type'    => 'select',
				'choices' => array(
					'layout-1' => __( 'Layout 1: Logo left / Menu right', 'unyson' ),
					'layout-2' => __( 'Layout 2: Logo left / Menu bottom', 'unyson' ),
					'layout-3' => __( 'Layout 3: Logo center / Menu left & right', 'unyson' ),
					'layout-4' => __( 'Layout 4: Logo center / Menu bottom', 'unyson' ),
					//'layout-5' => __( 'Layout 4: Logo center / Menu bottom', 'unyson' )
					
				),
				'value'	  => 'layout-1',
				'desc'    => __( 'Select the layout for the header','unyson' ),
			)
		),
		'choices'      => array(
			'layout-1'  => array(
				'thumbnail'                      => array(
					'label' => __( '', 'unyson' ),
					'type'  => 'html',						
					'html'  => '<img src="'.$uri.'/images/image-picker/header-layout1.jpg">',
				),
				/*'min_height'=> array(
					'label' => __( 'Height', 'unyson' ),
					'type'  => 'text',
					'value' => '150px',
					'desc'  => __( 'Enter the minimum height of the header','unyson' ),
				),*/
				'background_color' => array(
					'label' => __( 'Background Color', 'unyson' ),
					'type'  => 'rgba-color-picker',
					'value' => 'rgba(255, 255, 255, .0)',
				),
				/*'inline_info'       => array(
					'type'         => 'multi-picker',
					'label'        => false,
					'desc'         => false,
					'picker'       => array(
						'selected' => array(
							'label'   => __( 'Inline Info', 'unyson' ),
							'type'    => 'select',
							'choices' => array(
								''  => __( 'None', 'unyson' ),
								'text' => __( 'Custom Text Content', 'unyson' ),
								'social_icons' => __( 'Social Icons (TBA)', 'unyson' ),
							),
							'value' => '',
							'desc'    => __( 'Select the type of addition content to be displayed in the menu bar.','unyson' ),
						)
					),
					'choices'      => array(
						'text'  => array(
							'content'    => array(
								'label' => __( 'Content', 'unyson' ),
								'desc'  => __( 'Display an additional phone number or some extra info in your header.', 'unyson' ),
								'type'  => 'wp-editor',
								'value' => ''
							),
							'color'  => array(
								'label'   => __( 'Color', 'unyson' ),
								'type'    => 'select',
								'value'   => '',
								'choices' => $color,
							),
						),
					),
					'show_borders' => false,
				),*/
			),
			'layout-2'  => array(
				'thumbnail'                      => array(
					'label' => __( '', 'unyson' ),
					'type'  => 'html',						
					'html'  => '<img src="'.$uri.'/images/image-picker/header-layout2.jpg">',
				),
				'bg_color' => array(
					'label' => __( 'Background Color', 'unyson' ),
					'type'  => 'rgba-color-picker',
					'value' => 'rgba(255, 255, 255, .0)',
				),
			),
			'layout-3'  => array(
				'thumbnail'                      => array(
					'label' => __( '', 'unyson' ),
					'type'  => 'html',						
					'html'  => '<img src="'.$uri.'/images/image-picker/header-layout3.jpg">',
				),
				'bg_color' => array(
					'label' => __( 'Background Color', 'unyson' ),
					'type'  => 'rgba-color-picker',
					'value' => 'rgba(255, 255, 255, .0)',
				),
			),
			'layout-4'  => array(
				'thumbnail'                      => array(
					'label' => __( '', 'unyson' ),
					'type'  => 'html',						
					'html'  => '<img src="'.$uri.'/images/image-picker/header-layout4.jpg">',
				),
				'bg_color' => array(
					'label' => __( 'Background Color', 'unyson' ),
					'type'  => 'rgba-color-picker',
					'value' => 'rgba(255, 255, 255, .0)',
				),
			),
			
		),
		'show_borders' => false,
	),
	/*'layout' => array(
		'label'   => __( 'Layout', 'unyson' ),
		'type'    => 'image-picker',
		'value'   => 'layout-1',
		'desc'    => __( 'Select the layout of the header', 'unyson' ),
		'choices' => array(
			'layout-1' => array(
				'small' => array(
					'height' => 75,
					'src'    => $uri . '/images/image-picker/header-layout1.jpg'
				),
				'large' => array(
					'height' => 214,
					'src'    => $uri . '/images/image-picker/header-layout1.jpg'
				),
			),
			'layout-2' => array(
				'small' => array(
					'height' => 75,
					'src'    => $uri . '/images/image-picker/header-layout2.jpg'
				),
				'large' => array(
					'height' => 214,
					'src'    => $uri . '/images/image-picker/header-layout2.jpg'
				),
			),
			'layout-3' => array(
				'small' => array(
					'height' => 75,
					'src'    => $uri . '/images/image-picker/header-layout3.jpg'
				),
				'large' => array(
					'height' => 214,
					'src'    => $uri . '/images/image-picker/header-layout3.jpg'
				),
			),
			'layout-4' => array(
				'small' => array(
					'height' => 75,
					'src'    => $uri . '/images/image-picker/header-layout4.jpg'
				),
				'large' => array(
					'height' => 214,
					'src'    => $uri . '/images/image-picker/header-layout4.jpg'
				),
			),
		),
	),*/
);

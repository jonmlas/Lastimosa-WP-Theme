<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$uri = get_template_directory_uri();

$options = array(
	'footer_copyright' => array(
		'type' => 'multi',
		'label' => false,
		/*'attr' => array(
			'class' => '',
		),*/
		'inner-options' => array(
			'copyright' => array(
				'label' => __( 'Copyright', 'unyson' ),
				'desc'  => __( 'Enter the copyright text', 'unyson' ),
				'type'  => 'text',
				'value' => '© Copyright 2016 <a href="http://lastimosa.com.ph">Lastimosa Theme</a>',
			),
			'typography'=> array(
				'label' => __( 'Typography', 'unyson' ),
				'type'  => 'typography',
				'value' => array(
					'size'   => 14,
					'family' => 'Verdana',
					'style'  => '300italic',
					'color'  => '#fff'
				),
			),
			'alignment' => array(
				'label' => __( 'Alignment', 'fw' ),
				'desc'  => __( 'Choose button alignment', 'fw' ),
				'type'  => 'image-picker',
				'value' => '',
				'choices' => array(
					'' => array(
						'small' => array(
							'height' => 50,
							'src' => $uri .'/images/image-picker/no-align.jpg',
							'title' => __('None','fw')
						),
					),
					'pull-left' => array(
						'small' => array(
							'height' => 50,
							'src' => $uri .'/images/image-picker/left-position.jpg',
							'title' => __('Left','fw')
						),
					),
					'text-center' => array(
						'small' => array(
							'height' => 50,
							'src' => $uri .'/images/image-picker/center-position.jpg',
							'title' => __('Center','fw')
						),
					),
					'pull-right' => array(
						'small' => array(
							'height' => 50,
							'src' => $uri .'/images/image-picker/right-position.jpg',
							'title' => __('Right','fw')
						),
					),
				),
			),
			'link_color'    => array(
				'label' => __( 'Link Color', 'unyson' ),
				'type'  => 'color-picker',
				'value' => '#fff',
			),
			'bg_color'    => array(
				'label' => __( 'Background Color', 'unyson' ),
				'type'  => 'color-picker',
				'value' => '#000',
			),
		),
	),
);
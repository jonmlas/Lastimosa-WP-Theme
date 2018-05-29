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
			'text' => array(
				'label' => __( 'Copyright', 'lastimosa' ),
				'desc'  => __( 'Enter the copyright text', 'lastimosa' ),
				'type'  => 'text',
				'value' => '© Copyright 2018 <a href="http://theme.lastimosa.com.ph">Lastimosa Theme</a>',
			),
			'typography'=> array(
				'label' => __( 'Typography', 'lastimosa' ),
				'type'  => 'typography',
				'value' => array(
					'size'   => 14,
					'family' => 'Open Sans',
					'style'  => 'Regular',
					'color'  => '#fff'
				),
			),
			'alignment' => array(
				'label' => __( 'Alignment', 'lastimosa' ),
				'desc'  => __( 'Choose button alignment', 'lastimosa' ),
				'type'  => 'image-picker',
				'value' => '',
				'choices' => array(
					'' => array(
						'small' => array(
							'height' => 50,
							'src' => $uri .'/images/image-picker/no-align.jpg',
							'title' => __('None','lastimosa')
						),
					),
					'pull-left' => array(
						'small' => array(
							'height' => 50,
							'src' => $uri .'/images/image-picker/left-position.jpg',
							'title' => __('Left','lastimosa')
						),
					),
					'text-center' => array(
						'small' => array(
							'height' => 50,
							'src' => $uri .'/images/image-picker/center-position.jpg',
							'title' => __('Center','lastimosa')
						),
					),
					'pull-right' => array(
						'small' => array(
							'height' => 50,
							'src' => $uri .'/images/image-picker/right-position.jpg',
							'title' => __('Right','lastimosa')
						),
					),
				),
			),
			'link_color'    => array(
				'label' => __( 'Link Color', 'lastimosa' ),
				'type'  => 'color-picker',
				'value' => '#fff',
			),
			'bg_color'    => array(
				'label' => __( 'Background Color', 'lastimosa' ),
				'type'  => 'color-picker',
				'value' => '#000',
			),
		),
	),
);
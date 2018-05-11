<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
$uri = get_template_directory_uri();
$options = array(
	'footer_menu'  => array(
		'type' => 'multi',
		'label' => false,
		/*'attr' => array(
			'class' => '',
		),*/
		'inner-options' => array(
			'typography' => array(
				'label' => __( 'Typography', 'lastimosa' ),
				'type'  => 'typography',
				'value' => array(
					'size'   => 15,
					'family' => 'Open Sans',
					'style'  => 'Regular',
					'color'  => '#fff'
				),
			),
			'alignment' => array(
				'label'   => __( 'Alignment', 'lastimosa' ),
				'type'    => 'image-picker',
				'value'   => 'navbar-left',
				'desc'    => __( 'Select the alignment of the Menu. Left, Center, Right', 'lastimosa' ),
				'choices' => array(
					'navbar-nav' => array(
						'small' => array(
							'height' => 70,
							'src'    => $uri . '/images/image-picker/thumb1.jpg'
						),
						'large' => array(
							'height' => 214,
							'src'    => $uri . '/images/image-picker/tooltip1.jpg'
						),
					),
					'nav-justified' => array(
						'small' => array(
							'height' => 70,
							'src'    => $uri . '/images/image-picker/thumb1.jpg'
						),
						'large' => array(
							'height' => 214,
							'src'    => $uri . '/images/image-picker/tooltip1.jpg'
						),
					),
					'navbar-nav navbar-right' => array(
						'small' => array(
							'height' => 70,
							'src'    => $uri . '/images/image-picker/thumb2.jpg'
						),
						'large' => array(
							'height' => 214,
							'src'    => $uri . '/images/image-picker/tooltip2.jpg'
						),
					),
				),
			),
			'active_color'  => array(
				'label' => __( 'Active Color', 'lastimosa' ),
				'type'  => 'color-picker',
				'value' => '#000',
			),
			'hover_color'   => array(
				'label' => __( 'Hover Color', 'lastimosa' ),
				'type'  => 'color-picker',
				'value' => '#000',
			),
		),
	),
);
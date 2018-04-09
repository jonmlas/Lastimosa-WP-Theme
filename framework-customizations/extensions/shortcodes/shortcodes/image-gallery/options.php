<?php if (!defined('FW')) die('Forbidden');

$options = array(
	'tab_image_gallery' => array(
		'title'   => __( 'Layout', 'lastimosa' ),
		'type'    => 'tab',
		'options' => array(
			'id'    => array( 
				'type' => 'unique' 
			),
			'image_gallery'       => array(
				'type'         => 'multi-picker',
				'label'        => false,
				'desc'         => false,
				'picker'       => array(
					'style' => array(
						'label'   => __( 'Style', 'unyson' ),
						'type'    => 'select',
						'choices' => array(
							'grid'  => __( 'Basic Grid', 'unyson' ),
							'masonry' => __( 'Masonry', 'unyson' )
						),
					)
				),
				'choices'      => array(
					'grid'  => array(
						'images'       => array(
							'label' => __( 'Images', 'unyson' ),
							'desc'  => __( 'Upload Images',	'unyson' ),
							'type'  => 'multi-upload',
						),
					),
					'masonry' => array(
						'images'       => array(
							'label' => __( 'Images', 'unyson' ),
							'desc'  => __( 'Upload Images',	'unyson' ),
							'type'  => 'multi-upload',
						),
					),
				),
				'show_borders' => false,
			),	
		),
	),
);
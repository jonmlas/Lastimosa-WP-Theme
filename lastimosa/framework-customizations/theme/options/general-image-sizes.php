<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'theme_image_sizes'  => array(
		'label'        => false,
		'type'         => 'addable-box',
		'value'        => array(
			array(
				'name'		=> 'Custom Size 1',
				'width'		=> 450,
				'height' 	=> 250,
				'crop'		=> false,
			),	
		),
		//'box-controls' => array('custom' => '<small class="dashicons dashicons-smiley" title="Custom"></small>',),
		'box-options' => array(
			'name'   => array(
				'label' => __( 'Name', 'lastimosa' ),
				'type'  => 'text',
				'value' => '',
			),
			'width'  => array(
				'label' => __( 'Width', 'lastimosa' ),
				'type'  => 'text',
				'value' => '',
			),
			'height'  => array(
				'label' => __( 'Height', 'lastimosa' ),
				'type'  => 'text',
				'value' => '',
			),
			'crop'  => array(
				'label' => __( 'Crop', 'lastimosa' ),
				'type'  => 'select',
				'value' => 'false',
				'choices' => array(
        	'false' 			=> __('No Crop', 'lastimosa'),
					'true' 				=> __('Cropped', 'lastimosa'),
					'top-left' 		=> __('Top Left', 'lastimosa'),
					'top-center'	=> __('Top Center', 'lastimosa'),
					'top-right'		=> __('Top Right', 'lastimosa'),
					'center-left'	=> __('Center Left', 'lastimosa'),
					'center'			=> __('Center', 'lastimosa'),
					'center-right'=> __('Center Right', 'lastimosa'),
					'bottom-left'	=> __('Bottom Left', 'lastimosa'),
					'bottom-center'=> __('Bottom Center', 'lastimosa'),
					'bottom-right'=> __('Bottom Right', 'lastimosa'),
				),
			),
		),
		'template' => '{{- name }}: {{- width }} x {{- height }}',
		//'limit' => 3,
	),
);

$theme_image_sizes = lastimosa_get_option('theme_image_sizes');
if( !empty($theme_image_sizes)) {
	foreach( $theme_image_sizes as $key => $value ) {
		$name		= sanitize_title_with_dashes($theme_image_sizes[$key]['name']);
		$width 	= preg_replace('/[^0-9]/', '', $theme_image_sizes[$key]['width']);
		$height	= preg_replace('/[^0-9]/', '', $theme_image_sizes[$key]['height']);
		$crop 	= ( $theme_image_sizes[$key]['crop'] == 'false' ) ? false :
							( $theme_image_sizes[$key]['crop'] == 'true' ) ? true :
							( $theme_image_sizes[$key]['crop'] == 'top-left' ) ? array( 'left', 'top' ) : '';
							( $theme_image_sizes[$key]['crop'] == 'top-center' ) ? array( 'center', 'top' ) : '';
							( $theme_image_sizes[$key]['crop'] == 'top-right' ) ? array( 'right', 'top' ) : '';
							( $theme_image_sizes[$key]['crop'] == 'center-left' ) ? array( 'left', 'center' ) : '';
							( $theme_image_sizes[$key]['crop'] == 'center' ) ? array( 'center', 'center' ) : '';
							( $theme_image_sizes[$key]['crop'] == 'center-right' ) ? array( 'right', 'center' ) : '';
							( $theme_image_sizes[$key]['crop'] == 'bottom-left' ) ? array( 'left', 'bottom' ) : '';
							( $theme_image_sizes[$key]['crop'] == 'bottom-center' ) ? array( 'center', 'bottom' ) : '';
							( $theme_image_sizes[$key]['crop'] == 'bottom-right' ) ? array( 'right', 'bottom' ) : '';
		add_image_size( $name, $width, $height, $crop );
	}
}
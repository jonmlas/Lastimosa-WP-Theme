<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
$uri = get_template_directory_uri();
/*$theme_colors = lastimosa_get_option('theme_colors');
fw_print($theme_colors);
$color['text-default'] = __( 'Default' , 'unyson');
foreach($theme_colors as $theme_color) {
  $color['text-'.sanitize_title_with_dashes($theme_color['text'])] = __( $theme_color['text'] , 'unyson');
}*/
if ( fw_ext('megamenu') ) {
	$megamenu = __( 'Style 2: Unyson Megamenu', 'unyson' );
}else{
	$megamenu = array(
		'text' => __( 'Style 2: Unyson Megamenu (Deactivated)', 'unyson' ),
		'attr' => array(
			'disabled'         => 'disabled',
		),
	);
}

$options = array(
	'header_menu'       => array(
		'type'         => 'multi-picker',
		'label'        => false,
		'desc'         => false,
		'picker'       => array(
			'selected' => array(
				'label'   => __( 'Style', 'unyson' ),
				'type'    => 'select',
				'choices' => array(
					'style_1'  	=> __( 'Style 1: Bootstrap', 'unyson' ),
					'style_2'	=> $megamenu,
					'style_3' 	=> __( 'Style 3: Underline below a menu item', 'unyson' ),
					'style_4' 	=> __( 'Style 4: Underline above a menu item', 'unyson' ),
				),
				'value' => 'style_1',
				'desc'    => __( 'Select menu style.','unyson' ),
			)
		),
		'choices'      => array(
			'style_1'  => array(
				'typography' => array(
					'label' => __( 'Typography', 'unyson' ),
					'type'  => 'typography',
					'value' => array(
						'size'   => 17,
						'family' => 'Verdana',
						'style'  => 'normal',
						'color'  => '#000000'
					),
				),
				'background_color' => array(
					'label' => __( 'Background Color', 'unyson' ),
					'type'  => 'rgba-color-picker',
					'value' => 'rgba(255, 255, 255, .0)',
				),
				'hover_color'              => array(
					'label' => __( 'Hover Color', 'unyson' ),
					'type'  => 'color-picker',
					'value' => '#f5f5f5',
				),
				'hover_background_color'              => array(
					'label' => __( 'Hover Background Color', 'unyson' ),
					'type'  => 'color-picker',
					'value' => '#666666',
				),
				'active_color'  => array(
					'label' => __( 'Active Color', 'unyson' ),
					'type'  => 'color-picker',
					'value' => '#f5f5f5',
				),
				'active_background_color'  => array(
					'label' => __( 'Active Background Color', 'unyson' ),
					'type'  => 'color-picker',
					'value' => '#666666',
				),
				'transformation' => options_transformation(),
			),
			'style_2'  => array(
				'typography' => array(
					'label' => __( 'Typography', 'unyson' ),
					'type'  => 'typography',
					'value' => array(
						'size'   => 17,
						'family' => 'Verdana',
						'style'  => 'normal',
						'color'  => '#ffffff'
					),
				),
				'background_color' => array(
					'label' => __( 'Background Color', 'unyson' ),
					'type'  => 'rgba-color-picker',
					'value' => 'rgba(255, 255, 255, .0)',
				),
				'active_color'  => array(
					'label' => __( 'Active Color', 'unyson' ),
					'type'  => 'color-picker',
					'value' => '#333333',
				),
				'active_background_color'  => array(
					'label' => __( 'Active Background Color', 'unyson' ),
					'type'  => 'rgba-color-picker',
					'value' => 'rgba(102, 102, 102, .0)',
				),
				'hover_color'              => array(
					'label' => __( 'Hover Color', 'unyson' ),
					'type'  => 'color-picker',
					'value' => '#333333',
				),
				'hover_background_color'              => array(
					'label' => __( 'Hover Background Color', 'unyson' ),
					'type'  => 'rgba-color-picker',
					'value' => 'rgba(102, 102, 102, .0)',
				),
				'transformation' => options_transformation(),
			),
			'style_3'  => array(
				'typography' => array(
					'label' => __( 'Typography', 'unyson' ),
					'type'  => 'typography',
					'value' => array(
						'size'   => 17,
						'family' => 'Verdana',
						'style'  => 'normal',
						'color'  => '#ffffff'
					),
				),
				'hover_color'              => array(
					'label' => __( 'Hover Color', 'unyson' ),
					'type'  => 'color-picker',
					'value' => '#f5f5f5',
				),
				'hover_background_color'              => array(
					'label' => __( 'Hover Background Color', 'unyson' ),
					'type'  => 'color-picker',
					'value' => '#666666',
				),
				'active_color'  => array(
					'label' => __( 'Active Color', 'unyson' ),
					'type'  => 'color-picker',
					'value' => '#f5f5f5',
				),
				'active_background_color'  => array(
					'label' => __( 'Active Background Color', 'unyson' ),
					'type'  => 'color-picker',
					'value' => '#666666',
				),
				'background_color'  => array(
					'label' => __( 'Background Color', 'unyson' ),
					'type'  => 'color-picker',
					'value' => '#000000',
				),
				'transformation' => options_transformation(),
			),
			'style_4'  => array(
				'typography' => array(
					'label' => __( 'Typography', 'unyson' ),
					'type'  => 'typography',
					'value' => array(
						'size'   => 17,
						'family' => 'Verdana',
						'style'  => 'normal',
						'color'  => '#ffffff'
					),
				),
				'hover_color'              => array(
					'label' => __( 'Hover Color', 'unyson' ),
					'type'  => 'color-picker',
					'value' => '#f5f5f5',
				),
				'hover_background_color'              => array(
					'label' => __( 'Hover Background Color', 'unyson' ),
					'type'  => 'color-picker',
					'value' => '#666666',
				),
				'active_color'  => array(
					'label' => __( 'Active Color', 'unyson' ),
					'type'  => 'color-picker',
					'value' => '#f5f5f5',
				),
				'active_background_color'  => array(
					'label' => __( 'Active Background Color', 'unyson' ),
					'type'  => 'color-picker',
					'value' => '#666666',
				),
				'background_color'  => array(
					'label' => __( 'Background Color', 'unyson' ),
					'type'  => 'color-picker',
					'value' => '#000000',
				),
				'transformation' => options_transformation(),
			),
		),
		'show_borders' => false,
	),		
);
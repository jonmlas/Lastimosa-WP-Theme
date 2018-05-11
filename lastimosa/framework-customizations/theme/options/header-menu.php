<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
$uri = get_template_directory_uri();
/*$theme_colors = lastimosa_get_option('theme_colors');
fw_print($theme_colors);
$color['text-default'] = __( 'Default' , 'lastimosa');
foreach($theme_colors as $theme_color) {
  $color['text-'.sanitize_title_with_dashes($theme_color['text'])] = __( $theme_color['text'] , 'lastimosa');
}*/
if ( fw_ext('megamenu') ) {
	$megamenu 	= '';
	$megamenu2 	= '';
}else{
	$megamenu 	= __( '(Megamenu Disabled)', 'lastimosa' );
	$megamenu2 	= __( 'Activate Megamenu in the Unyson\'s Extension manager.', 'lastimosa' );
}

$options = array(
	'header_menu'  => array(
		'type'         => 'multi-picker',
		'label'        => false,
		'desc'         => false,
		'picker'       => array(
			'selected' => array(
				'label'   => __( 'Style', 'lastimosa' ),
				'type'    => 'select',
				'choices' => array(
					'style-1' => __( 'Default ', 'lastimosa' ).$megamenu,
					'style-2' => array(
						'text' => __( 'More styles to be added...', 'lastimosa' ),
						'attr' => array(
							'disabled'         => 'disabled',
						),
					),
				),
				'value' => 'style-1',
				'desc'    => __( 'Select menu style. ','lastimosa' ).$megamenu2,
			)
		),
		'choices'      => array(
			'style-1'  => array(
				'menu'  => array(
					'type' => 'multi',
					'label' => false,
					/*'attr' => array(
						'class' => '',
					),*/
					'inner-options' => array(
						'typography' => array(
							'label' => __( 'Menu Style', 'lastimosa' ),
							'desc'	=> __( 'Typography', 'lastimosa' ),
							'type'  => 'typography',
							'value' => array(
								'size'   => 16,
								'family' => 'Open Sans',
								'style'  => 'normal',
								'color'  => '#000000'
							),
						),
						'bg_color' => array(
							'label' => __( '', 'lastimosa' ),
							'desc'	=> __( 'Background Color', 'lastimosa' ),
							'type'  => 'rgba-color-picker',
							'value' => 'rgba(255, 255, 255, .0)',
							'palettes' => lastimosa_option_color_palette(),
						),
						'divider'    => array(
							'label'        => __( 'Divider', 'lastimosa' ),
							'type'         => 'switch',
							'right-choice' => array(
								'value' => true,
								'label' => __( 'Yes', 'lastimosa' )
							),
							'left-choice'  => array(
								'value' => false,
								'label' => __( 'No', 'lastimosa' )
							),
							'value'        => true,
							'desc'         => __( 'Enable divider between menu items?', 'lastimosa' ),
						),
						'active_color'  	=> lastimosa_option_color_picker('','#f5f5f5', 'Current Menu Text Color'),
						'active_bg_color'	=> lastimosa_option_color_picker('','#bdbdbd','Current Menu Background Color'),
						'hover_color' 		=> lastimosa_option_color_picker('','#f5f5f5','Hover Color'),
						'hover_bg_color' 	=> lastimosa_option_color_picker('','#bdbdbd','Hover Background Color'),
						'text_transform' 	=> lastimosa_option_text_transform('','Menu\'s text transformation'),
					),
				),
				'submenu'  => array(
					'type' => 'multi',
					'label' => false,
					'inner-options' => array(
						'typography' => array(
							'label' => __( 'Sub-menu Style', 'lastimosa' ),
							'desc'	=> __( 'Typography', 'lastimosa' ),
							'type'  => 'typography',
							'value' => array(
								'size'   => 14,
								'family' => 'Open Sans',
								'style'  => 'normal',
								'color'  => '#ffffff'
							),
						),
						'bg_color' => array(
							'label' => __( '', 'lastimosa' ),
							'desc'	=> __( 'Background Color', 'lastimosa' ),
							'type'  => 'rgba-color-picker',
							'value' => 'rgba(114, 119, 124, 1)',
							'palettes' => lastimosa_option_color_palette(),
						),
						'active_color'  	=> lastimosa_option_color_picker('','#f5f5f5', 'Current Menu Text Color'),
						'active_bg_color'	=> lastimosa_option_color_picker('','#bdbdbd','Current Menu Background Color'),
						'hover_color' 		=> lastimosa_option_color_picker('','#f5f5f5','Hover Color'),
						'hover_bg_color' 	=> lastimosa_option_color_picker('','#bdbdbd','Hover Background Color'),
						'text_transform' 	=> lastimosa_option_text_transform('','Menu\'s text transformation'),
					),
				),
				'megamenu'  => array(
					'type' => 'multi',
					'label' => false,
					/*'attr' => array(
						'class' => '',
					),*/
					'inner-options' => array(
						'heading_typography' => array(
							'label' => __( 'Mega-menu Style', 'lastimosa' ),
							'desc'	=> __( 'Column Heading Typography', 'lastimosa' ),
							'type'  => 'typography',
							'value' => array(
								'size'   => 19,
								'family' => 'Open Sans',
								'style'  => 'normal',
								'color'  => '#f5f5f5'
							),
						),
						'typography' => array(
							'label' => __( '', 'lastimosa' ),
							'desc'	=> __( 'Menu Typography', 'lastimosa' ),
							'type'  => 'typography',
							'value' => array(
								'size'   => 13,
								'family' => 'Open Sans',
								'style'  => 'normal',
								'color'  => '#f5f5f5'
							),
						),
						'bg_color' => array(
							'label' => __( '', 'lastimosa' ),
							'desc'	=> __( 'Background Color', 'lastimosa' ),
							'type'  => 'rgba-color-picker',
							'value' => 'rgba(1, 114, 156, 1)',
							'palettes' => lastimosa_option_color_palette(),
						),
						'active_color'  	=> lastimosa_option_color_picker( '', '#01729c', 'Current Menu Text Color' ),
						'active_bg_color'	=> lastimosa_option_color_picker( '', '#f8fdff', 'Current Menu Background Color' ),
						'hover_color' 		=> lastimosa_option_color_picker( '', '#01729c', 'Hover Color'),
						'hover_bg_color' 	=> lastimosa_option_color_picker( '', '#f8fdff', 'Hover Background Color' ),
						'text_transform' 	=> lastimosa_option_text_transform( '', 'Menu\'s text transformation' ),
						'col_divider_color' 	=> lastimosa_option_color_picker( '', '#0187b8', 'Column Divider Color' ),
					),
				),
			),
		),
		'show_borders' => false,
	),		
);


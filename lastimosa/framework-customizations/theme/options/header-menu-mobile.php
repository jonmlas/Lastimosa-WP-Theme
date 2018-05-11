<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'header_menu_mobile'  => array(
		'type'         => 'multi-picker',
		'label'        => false,
		'desc'         => false,
		'picker'       => array(
			'selected' => array(
				'label'   => __( 'Style', 'unyson' ),
				'type'    => 'select',
				'choices' => array(
					'style-1' => __( 'Default ', 'unyson' ),
					'style-2' => array(
						'text' => __( 'More styles to be added...', 'lastimosa' ),
						'attr' => array(
							'disabled'         => 'disabled',
						),
					),
				),
				'value' => 'style-1',
				'desc'    => __( 'Select menu style. ','unyson' ),
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
						'active_color'  	=> lastimosa_option_color_picker('','#f5f5f5', 'Current Menu Text Color'),
						'active_bg_color'	=> lastimosa_option_color_picker('','#bdbdbd','Current Menu Background Color'),
						'hover_color' 		=> lastimosa_option_color_picker('','#f5f5f5','Hover Color'),
						'hover_bg_color' 	=> lastimosa_option_color_picker('','#bdbdbd','Hover Background Color'),
					),
				),
			),
		),
		'show_borders' => false,
	),		
);


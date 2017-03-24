<?php if (!defined('FW')) die('Forbidden');

$options = array(
	'style' => array(
		'type'    	=> 'multi-picker',
		'label'     => false,
		'desc'      => false,
		'picker'    => array(
			'view' => array(
				'label'   => __('Style', 'unyson'),
				'type'    => 'select',
				'value'   => 'default',
				'choices' => array(
					'default'  => __( 'Horizontal Rule', 'unyson' ),
					'whitespace' => __( 'Whitespace', 'unyson' )
				),
			)
		),
		'choices' => array(
			'default'    => array(
				'width'  => array(
					'type'  => 'short-text',
					'label' => __( 'Width', 'unyson' ),
					'help'  => __('In pixels or in percentage. E.g.: \'80px\' or  \'25%\'', 'unyson'),
				),
				'color'              => array(
					'label' => __( 'Color', 'unyson' ),
					'type'  => 'color-picker',
					'value' => '#ccc',
				),
				'thickness'  => array(
					'type'  => 'short-text',
					'label' => __( 'Thickness', 'unyson' ),
					'help'  => __('In pixels or in percentage. E.g.: \'80px\' or  \'25%\'', 'unyson'),
				),
				'margin_top'  => array(
					'type'  => 'short-text',
					'label' => __( 'Top margin', 'unyson' ),
					'help'  => __('In pixels or in percentage. E.g.: \'80px\' or  \'25%\'', 'unyson'),
				),
				'margin_bottom'  => array(
					'type'  => 'short-text',
					'label' => __( 'Bottom margin', 'unyson' ),
					'help'  => __('In pixels or in percentage. E.g.: \'80px\' or  \'25%\'', 'unyson'),
				),
			),
			'whitespace'    => array(
				'height'  => array(
					'type'  => 'text',
					'label' => __( 'Height', 'unyson' ),
					'help'  => __('In pixels or in percentage. E.g.: \'80px\' or  \'25%\'', 'unyson'),
				),
			),
		),
		'show_borders' => false,
	),	
);

<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
$options = array(
	'theme_colors'  => array(
		'label'        => false,
		'type'         => 'addable-box',
		'value'        => lastimosa_option_color_palette_defaults(),
		//'box-controls' => array('custom' => '<small class="dashicons dashicons-smiley" title="Custom"></small>',),
		'box-options' => array(
			'name'   => array(
				'label' => __( 'Color', 'lastimosa' ),
				'type'  => 'text',
				'value' => '',
			),
			'color'  => array(
				'label' => __( '', 'lastimosa' ),
				'type'  => 'color-picker',
				'value' => '',
			),
		),
		'template' => '<span style="background-color:{{- color}}; width:50px; height:auto; display:inline-block"></span> {{- name }}',
		//'limit' => 3,
	),
);
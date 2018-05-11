<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'button_colors'               => array(
		'label'        => __( 'Color Palette', 'lastimosa'),
		'type'         => 'addable-box',
		'value'        => lastimosa_option_button_color_defaults(),
		//'box-controls' => array('custom' => '<small class="dashicons dashicons-smiley" title="Custom"></small>',),
		'sortable' => true,
		'add-button-text' => __('Add More Colors', 'lastimosa'),
		'box-options' => array(
			'id'    => array( 
				'type' => 'unique' 
			),
			'color_name'   => array(
				'label' => __( 'Button Name', 'lastimosa' ),
				'type'  => 'text',
				'value' => '',
			),
			'normal_text_color'  => array(
				'label' => __( 'Normal Text Color', 'lastimosa' ),
				'type'  => 'color-picker',
				'value' => '',
			),
			'normal_bg_color'  => array(
				'label' => __( 'Normal Background Color', 'lastimosa' ),
				'type'  => 'color-picker',
				'value' => '',
			),
			'hover_text_color'  => array(
				'label' => __( 'Hover Text Color', 'lastimosa' ),
				'type'  => 'color-picker',
				'value' => '',
			),
			'hover_bg_color'  => array(
				'label' => __( 'Hover Background Color', 'lastimosa' ),
				'type'  => 'color-picker',
				'value' => '',
			),
		),
		'template' => '<style>
										.btn-{{- id }} {
											color: {{- normal_text_color }};
											background: {{- normal_bg_color }};
											min-width: 160px;
										}
										.btn-{{- id }}:hover {
											color: {{- hover_text_color }};
											background-color: {{- hover_bg_color }};
										}
									</style>
									<span class="btn btn-{{- id }}">{{- color_name }}</span>',
		//'limit' => 3,
	),
	'button_sizes'               => array(
		'label'        => __( 'Sizes', 'lastimosa'),
		'type'         => 'addable-box',
		'value'        => lastimosa_option_button_size_defaults(),
		//'box-controls' => array('custom' => '<small class="dashicons dashicons-smiley" title="Custom"></small>',),
		'sortable' => true,
		'add-button-text' => __('Add More Sizes', 'lastimosa'),
		'box-options' => array(
			'id'    => array( 
				'type' => 'unique' 
			),
			'size_name'   => array(
				'label' => __( 'Size Name', 'lastimosa' ),
				'type'  => 'text',
				'value' => '',
			),
			'slug'   => array(
				'label' => __( 'Slug', 'lastimosa' ),
				'type'  => 'text',
				'value' => '',
			),
			'font_size'   => array(
				'label' => __( 'Font Size', 'lastimosa' ),
				'type'  => 'text',
				'value' => '',
			),
			'line_height'  => array(
				'label' => __( 'Line Height', 'lastimosa' ),
				'type'  => 'text',
				'value' => '',
			),
			'padding'  => lastimosa_option_box('Padding'),
			'border_width'  => array(
				'label' => __( 'Border Width', 'lastimosa' ),
				'type'  => 'text',
				'value' => '',
			),
			'border_radius'  => array(
				'label' => __( 'Border Radius', 'lastimosa' ),
				'type'  => 'text',
				'value' => '',
			),
		),
		'template' => '<style>
										.btn-{{- id }} {
											font-size: {{- font_size }};
											line-height: {{- line_height }};
											padding: {{- padding.top }} {{- padding.right }} {{- padding.bottom }} {{- padding.left }};
											border-width: {{- border_width }};
											border-radius: {{- border_radius }};
										}
									</style>
									<span class="btn btn-primary btn-outline btn-{{- id }}">{{- size_name }}</span>',
		//'limit' => 3,
	),
);
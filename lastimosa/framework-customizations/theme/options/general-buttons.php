<?php if ( ! defined( 'FW' ) ) { die( 'Forbidden' ); }

$uri = fw_get_template_customizations_directory_uri('/extensions/shortcodes/shortcodes/button/static');

/*// Displays the css
function admin_inline_js(){
	echo "<style>\n";
	$btn = lastimosa_get_option('predefined_buttons');
	for ($i = 0; $i < count($btn) ; $i++) {
		echo '.btn-8526f2ffc2ec06e83cd1d0a2d00489f7 {';
		echo 'color: '.lastimosa_options_get_color_picker($btn[$i]['text_color']).';';
		echo '}';
	}
	echo "\n</style>";
	}
add_action( 'admin_print_scripts', 'admin_inline_js' );

// Updates after clicking Save Changes button
add_action('fw_settings_options_update', '_theme_action_settings_options_update');
function _theme_action_settings_options_update($data) {
	remove_action('fw_settings_options_update', '_theme_action_settings_options_update');
   	add_action( 'admin_print_scripts', 'admin_inline_js' );
   	add_action('fw_settings_options_update', '_theme_action_settings_options_update');
}*/

/*
// Title Template examples
//
// Syntax:
// * {{- variable }} - Output with html escape
// * {{= variable }} - Output raw (without html escape)
// * {{ if (execute.any(javascript, code)) { console.log('Hi'); } }}
//
// Available variables:
// * title - shortcode title (from config)
// * o - an object with all shortcode options values
'title_template' => '{{- title }} Lorem {{- o.option_id }} ipsum {{= o["option-id"] }}',
'title_template' => '{{- title }}: {{- o.label }}{{ if (o.target == "_blank") { }} <span class="dashicons dashicons-external"></span>{{ } }}',
*/

$options = array(
'predefined_buttons'             => array(
		'label'         => false,
		'type'          => 'addable-popup',
		'template'      => '<style>
								.btn-{{- unique_id }} {
									color: {{- text_color.predefined }}{{- text_color.custom }};
									background: {{- bg_color.predefined }}{{- bg_color.custom }};
									font-size: {{- size.custom.font }};
									width: 100%;
									max-width: {{- size.custom.width }};
									height: {{- size.custom.height }};
									line-height: {{- size.custom.height }};
									padding: 0;
								}
								.btn-{{- unique_id }}:hover {
									color: {{- text_hover_color.predefined }}{{- text_hover_color.custom }};
									background-color: {{- bg_hover_color.predefined }}{{- bg_hover_color.custom }};
								}
							</style>
							<button class="btn btn-{{- unique_id }} {{- style }}">{{- name }}</button>',
		'popup-title' 	=> __( 'Styles', 'unyson' ),
		'add-button-text' => __('Add a button', 'lastimosa'),
		'popup-options' => array(
			'unique_id'    => array( 
				'type' => 'unique' 
			),
			'name' => array(
				'label' => __('Name', 'fw'),
				'value' => 'Button',
				'type'  => 'short-text',
			),
			'style'  => array(
				'label'   => __( 'Style', 'fw' ),
				'desc'    => __( 'Choose button style', 'fw' ),
				'type'  => 'image-picker',
				'value' => '',
				'choices' => array(
					'btn-default' => array(
						'small' => array(
							'height' => 67,
							'src' => $uri .'/img/image-picker/btn-default-sm.png'
						),
						'large' => array(
							'height' => 200,
							'src' => $uri .'/img/image-picker/btn-default.png'
						),
					),
					'btn-gradient' => array(
						'small' => array(
							'height' => 67,
							'src' => $uri .'/img/image-picker/btn-gradient-sm.png'
						),
						'large' => array(
							'height' => 200,
							'src' => $uri .'/img/image-picker/btn-gradient.png'
						),
					),
					'btn-raised' => array(
						'small' => array(
							'height' => 67,
							'src' => $uri .'/img/image-picker/btn-raised-sm.png'
						),
						'large' => array(
							'height' => 200,
							'src' => $uri .'/img/image-picker/btn-raised.png'
						),
					),
					'btn-outline' => array(
						'small' => array(
							'height' => 67,
							'src' => $uri .'/img/image-picker/btn-outline-sm.png'
						),
						'large' => array(
							'height' => 200,
							'src' => $uri .'/img/image-picker/btn-outline.png'
						),
					),
				),
			),
			'text_color' => lastimosa_options_color_picker('Text Color','#636c72'),
			'bg_color' => lastimosa_options_color_picker('Background Color'),
			'text_hover_color' => lastimosa_options_color_picker('Text Hover Color'),
			'bg_hover_color' => lastimosa_options_color_picker('Background Hover Color','#286090'),
			'size' => array(
				'type'    	=> 'multi-picker',
				'label'     => false,
				'desc'      => false,
				'picker'    => array(
					'selected' => array(
						'label'   => __('Size', 'unyson'),
						'type'    => 'select',
						'value'   => 'btn-md',
						'choices' => array(
							'btn-xs' => __( 'Extra Small', 'fw' ),
							'btn-sm' => __( 'Small', 'fw' ),
							'btn-md' => __( 'Normal', 'fw' ),
							'btn-lg' => __( 'Large', 'fw' ),
							'btn-xlg' => __( 'Extra Large', 'fw' ),
							'custom' 		=> __( 'custom', 'unyson' ),
						),
						'desc'    => __( 'Set the height for this section', 'unyson' ),
					)
				),
				'choices' => array(
					'custom'    => array(
						'font' => array(
							'label' => __('', 'fw'),
							'desc'  => __('Font Size. e.g.: 16px', 'fw'),
							'value' => '16px',
							'type'  => 'short-text',
						),
						'width' => array(
							'label' => __('', 'fw'),
							'desc'  => __('Button Width. e.g.: 200px', 'fw'),
							'value' => '200px',
							'type'  => 'short-text',
						),
						'height' => array(
							'label' => __('', 'fw'),
							'desc'  => __('Button Height. e.g.: 50px', 'fw'),
							'value' => '50px',
							'type'  => 'short-text',
						),
					),
				),
				'show_borders' => false,
			),
			'full_width' => array(
				'type'  => 'switch',
				'label' => __( '', 'fw' ),
				'desc'  => __( 'Make this button full width?', 'fw' ),
				'value' => '',
				'right-choice' => array(
					'value' => true,
					'label' => __('Yes', 'fw'),
				),
				'left-choice' => array(
					'value' => false,
					'label' => __('No', 'fw'),
				),
			),
			'edges' => array(
				'label'   => __( 'Edges Style', 'unyson' ),
				'type'    => 'select',
				'value'   => '',
				'choices' => array(
					''  	 => __( 'Default', 'unyson' ),
					'sharp'  => __( 'Sharp Corners Button', 'unyson' ),
					'round'  => __( 'Rounded Edges', 'unyson' ),
					'circle' => __( 'Circle Button', 'unyson' ),
				),
			),
		),
	),
);
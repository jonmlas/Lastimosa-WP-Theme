<?php if ( ! defined( 'FW' ) ) { die( 'Forbidden' ); }

if (!function_exists('_action_theme_shortcode_special_heading_enqueue_dynamic_css')):
/**
 * @internal
 * @param array $data
 */
function _action_theme_shortcode_special_heading_enqueue_dynamic_css($data) {
	$shortcode = 'special-heading';
	$atts = shortcode_parse_atts( $data['atts_string'] );
	$atts = fw_ext_shortcodes_decode_attr($atts, $shortcode, $data['post']->ID);
	$uri = fw_get_template_customizations_directory_uri('/extensions/shortcodes/shortcodes/special_heading');
	
	// Enqueue Animation Script
	// https://github.com/matthieua/WOW
	if( !is_admin() && !empty($atts['animate']['animation'])) {
		wp_enqueue_script(
			'wow',
			get_template_directory_uri() . '/js/wow.min.js',
			array(),
			'1.1.2',
			true
		);
		wp_add_inline_script( 'wow', '
			new WOW().init();
		');
	}
}

add_action(
	'fw_ext_shortcodes_enqueue_static:special_heading',
	'_action_theme_shortcode_special_heading_enqueue_dynamic_css'
);
endif;
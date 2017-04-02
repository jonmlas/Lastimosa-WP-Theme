<?php if ( ! defined( 'FW' ) ) { die( 'Forbidden' ); }


/* This resets the shortcode_contact_form_7_style_temp to null on page load*/
if (!function_exists('delete_shortcode_cf7_style_temp')):
	function delete_shortcode_cf7_style_temp() {
			delete_option( 'cf7_style_temp' );	
	}
	if( get_option( 'cf7_style_temp' ) ) {
		delete_shortcode_cf7_style_temp();
	}
endif;

if (!function_exists('_action_theme_shortcode_contact_form_7_enqueue_dynamic_css')):
/**
 * @internal
 * @param array $data
 */
function _action_theme_shortcode_contact_form_7_enqueue_dynamic_css($data) {
	$shortcode = 'cf7';
	$atts = shortcode_parse_atts( $data['atts_string'] );
	$atts = fw_ext_shortcodes_decode_attr($atts, $shortcode, $data['post']->ID);
	$uri = fw_get_template_customizations_directory_uri('/extensions/shortcodes/shortcodes/contact-form-7');
	
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
	
	$atts['shortcode'] 	= $shortcode;
	lastimosa_options_get_shortcode_css($atts);
}

add_action(
	'fw_ext_shortcodes_enqueue_static:contact_form_7',
	'_action_theme_shortcode_contact_form_7_enqueue_dynamic_css'
);
endif;
<?php if ( ! defined( 'FW' ) ) { die( 'Forbidden' ); }

if (!function_exists('delete_shortcode_cf7_style_temp')):
	/**
	 * Resets the cf7-style-temp to null on page load
	 * which means it will remove the css style of any deleted shortcode
	 */
	function delete_shortcode_cf7_style_temp() {
			delete_option( 'cf7-style-temp' );	
	}
	if( get_option( 'cf7-style-temp' ) ) {
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

		$atts['id'] = $shortcode . '-' . substr($atts['id'], 0, 10);
		$atts['shortcode'] 	= $shortcode;

		lastimosa_get_option_enqueue_wow( $atts );
		
		$css = array();
		$css = lastimosa_get_option_spacing_css( $atts );
		lastimosa_options_get_shortcode_css( $atts, $css );
		
	}

add_action(
	'fw_ext_shortcodes_enqueue_static:contact_form_7',
	'_action_theme_shortcode_contact_form_7_enqueue_dynamic_css'
);
endif;
<?php if ( ! defined( 'FW' ) ) { die( 'Forbidden' ); }

if ( ! function_exists( 'delete_shortcode_special_heading_style_temp' ) ) :
	/**
	 * Resets the special-heading-style-temp to null on page load
	 * which means it will remove the css style of any deleted shortcode
	 */
	function delete_shortcode_special_heading_style_temp() {
		delete_option( 'special-heading-style-temp' );	
	}
	if( get_option( 'special-heading-style-temp' ) ) {
		delete_shortcode_special_heading_style_temp();
	}
endif;

if (!function_exists('_action_theme_shortcode_special_heading_enqueue_dynamic_css')):
	/**
	 * @internal
	 * @param array $data
	 */
	function _action_theme_shortcode_special_heading_enqueue_dynamic_css($data) {
		$shortcode = 'special-heading';
		$atts = shortcode_parse_atts( $data['atts_string'] );
		$atts = fw_ext_shortcodes_decode_attr($atts, $shortcode, $data['post']->ID);
		$uri 	= fw_get_template_customizations_directory_uri('/extensions/shortcodes/shortcodes/special_heading');
		$atts['shortcode'] 	= $shortcode;
		$atts['id'] = substr($atts['id'], 0, 10);
		
		lastimosa_get_option_enqueue_wow( $atts );
		
		$css = array(); // Needed to be declared to avoid null error in lastimosa_options_get_shortcode_css
		$css = lastimosa_get_option_spacing_css( $atts );
		lastimosa_options_get_shortcode_css( $atts, $css );
	}

	add_action(
		'fw_ext_shortcodes_enqueue_static:special_heading',
		'_action_theme_shortcode_special_heading_enqueue_dynamic_css'
	);
endif;
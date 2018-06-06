<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

// This will erase the css after you remove the button
if (!function_exists('delete_shortcode_button_style_temp')):
	function delete_shortcode_button_style_temp() {
			delete_option( 'btn-style-temp' );	
	}
	if( get_option( 'btn-style-temp' ) ) {
		delete_shortcode_button_style_temp();
	}
endif;

if (!function_exists('_action_theme_shortcode_button_enqueue_dynamic_css')):

	/**
	 * @internal
	 * @param array $data
	 */
	function _action_theme_shortcode_button_enqueue_dynamic_css($data) {
		$shortcode = 'button';
		$atts = shortcode_parse_atts( $data['atts_string'] );
		$atts = fw_ext_shortcodes_decode_attr($atts, $shortcode, $data['post']->ID);
		$atts['shortcode'] 	= $shortcode;
		global $post;
		$atts['id'] = 'btn' . substr($atts['id'], 0, 10);
		$post_slug = $post->post_name;
		
		lastimosa_get_option_enqueue_wow( $atts );
		
		if( !is_admin() && ($atts['icon']['type'] == 'icon-font') && !empty($atts['icon']['pack-css-uri'])) {
			fw()->backend->option_type('icon-v2')->packs_loader->enqueue_frontend_css();
		}

		lastimosa_get_option_enqueue_wow( $atts );
		
		$css = array();
		$css = lastimosa_get_option_spacing_css( $atts );
		lastimosa_options_get_shortcode_css( $atts, $css );
	}

add_action(
	'fw_ext_shortcodes_enqueue_static:button',
	'_action_theme_shortcode_button_enqueue_dynamic_css'
);

endif;
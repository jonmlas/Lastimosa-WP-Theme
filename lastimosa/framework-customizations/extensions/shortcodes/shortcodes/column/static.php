<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

// Kept for future reference.  // We don't need this since we're going to attach it on our main style
/*wp_enqueue_style(
    'theme-shortcode-column',
    fw_ext('shortcodes')->locate_URI('/shortcodes/column/static/css/style.css')
);*/

if ( ! function_exists('delete_shortcode_column_style_temp') ) :
	/**
	 * Resets the column-style-temp to null on page load
	 * which means it will remove the css style of any deleted shortcode
	 */
	function delete_shortcode_column_style_temp() {
		delete_option( 'column-style-temp' );	
	}
	if( get_option( 'column-style-temp' ) ) {
		delete_shortcode_column_style_temp();
	}
endif;

if (!function_exists('_action_theme_shortcode_column_enqueue_dynamic_css')):
	/**
	 * @internal
	 * @param array $data
	 */
	function _action_theme_shortcode_column_enqueue_dynamic_css($data) {
		$shortcode = 'column';
		$atts = shortcode_parse_atts( $data['atts_string'] );
		$atts = fw_ext_shortcodes_decode_attr($atts, $shortcode, $data['post']->ID);
		$atts['shortcode'] 	= $shortcode;
		global $post;
		$css = array();
		$atts['id'] = substr( $shortcode, 0, 3 ) . '-' . substr($atts['id'], 0, 10);
		$post_slug = $post->post_name;
		
		lastimosa_get_option_enqueue_wow( $atts );

		$css[] = '.' . $post->post_type . '-' . $post->post_name.' .' . $atts['id'] . ' .col-wrap { ';
		$css = array_merge( $css, lastimosa_get_options_background_css($atts) );
		$css[] = '}';
		
		$css = array_merge( $css, lastimosa_get_option_spacing_css( $atts ) );

		if( ! empty( $css ) )		lastimosa_options_get_shortcode_css( $atts,$css );
	}

	add_action(
		'fw_ext_shortcodes_enqueue_static:column',
		'_action_theme_shortcode_column_enqueue_dynamic_css'
	);
endif;
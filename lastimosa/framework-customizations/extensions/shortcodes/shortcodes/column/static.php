<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

// Kept for future reference.  // We don't need this since we're going to attach it on our main style
/*wp_enqueue_style(
    'theme-shortcode-column',
    fw_ext('shortcodes')->locate_URI('/shortcodes/column/static/css/style.css')
);*/
/* This resets the shortcode_column_style_temp to null on page load*/

if (!function_exists('delete_shortcode_column_style_temp')):
	function delete_shortcode_column_style_temp() {
		delete_option( 'column_style_temp' );	
	}
	if( get_option( 'column_style_temp' ) ) {
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
		$shortcode_atts = array();
		$atts['id'] = substr($atts['id'], 0, 10);
		$post_slug = $post->post_name;
		
		lastimosa_get_option_enqueue_wow( $atts );

		$shortcode_atts[] = '.'.$post->post_type.'-'.$post->post_name.' .'.substr($atts['shortcode'], 0, 3).'-'.$atts['id'].' { ';
		if( null !== lastimosa_get_option_spacing_css( $atts, 'mall', 'margin' ) )		$shortcode_atts[]	= lastimosa_get_option_spacing_css( $atts, 'mall', 'margin' );
		if( null !== lastimosa_get_option_spacing_css( $atts, 'pall', 'padding' ) )		$shortcode_atts[]	= lastimosa_get_option_spacing_css( $atts, 'pall', 'padding' );
		$shortcode_atts = array_merge($shortcode_atts, lastimosa_get_options_background_css($atts));
		$shortcode_atts[] = '}';
		
		$shortcode_atts = array_merge($shortcode_atts, lastimosa_get_option_spacing_breakpoints_css( $atts ));

		lastimosa_options_get_shortcode_css($atts,$shortcode_atts);
	}

	add_action(
		'fw_ext_shortcodes_enqueue_static:column',
		'_action_theme_shortcode_column_enqueue_dynamic_css'
	);
endif;
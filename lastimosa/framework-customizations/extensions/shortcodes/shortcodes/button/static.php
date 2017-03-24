<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

if (!function_exists('_action_theme_shortcode_button_enqueue_dynamic_css')):

	/**
	 * @internal
	 * @param array $data
	 */
	function _action_theme_shortcode_button_enqueue_dynamic_css($data) {
		$shortcode = 'button';
		$atts = shortcode_parse_atts( $data['atts_string'] );
		$atts = fw_ext_shortcodes_decode_attr($atts, $shortcode, $data['post']->ID);

		//Let's get the ID first
		if (!empty($atts['custom_id'])) : 
			$button_id = $atts['custom_id'];
		else :
			$button_id = 'i'.$atts['id'];
		endif;
		
		// Lay out the styles		
		wp_add_inline_style(
			'style',
			'#'.$button_id.'.btn:hover { '. 
				'background:' . $atts['bg_hover_color'] . ';' .
				'color:' . $atts['text_hover_color'] . ';' .
			' } '
		);
		
		// Print out the style
		$css = $atts['css'];
		if (!empty($css)) {	
			wp_add_inline_style(
				'style', 
				$css
			);
		}

	}

add_action(
	'fw_ext_shortcodes_enqueue_static:button',
	'_action_theme_shortcode_button_enqueue_dynamic_css'
);

endif;
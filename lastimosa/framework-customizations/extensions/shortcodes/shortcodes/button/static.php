<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

// This will erase the css after you remove the button
if (!function_exists('delete_shortcode_button_style_temp')):
	function delete_shortcode_button_style_temp() {
			delete_option( 'btn_style_temp' );	
	}
	if( get_option( 'btn_style_temp' ) ) {
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

/*		//Let's get the ID first
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
		
		fw_print($atts);
		
		// Print out the style
		$css = $atts['css'];
		if (!empty($css)) {	
			wp_add_inline_style(
				'style', 
				$css
			);
		}*/
		
		if($atts['design']['selected'] == 'custom') {
			// We'll have to move the button's custom array for easy coding
			$atts['btn'] = $atts['design'][$atts['design']['selected']];
			unset($atts['design']);
		}
		
		$atts['shortcode'] 	= 'btn';
		global $post;
		$scss = array();
		$atts['id'] = substr($atts['id'], 0, 10);
		$post_slug = $post->post_name;
		
		$scss[] = '.'.$post->post_type.'-'.$post->post_name.' .'.substr($atts['shortcode'], 0, 3).'-'.$atts['id'].'{ ';
		$scss[] = 'margin:unquote("'.join( ' ', $atts['margin'] ).'");';
		$scss[] = 'padding:unquote("'.join( ' ', $atts['padding'] ).'");';	
		$scss[] = '}';

		$scss[] = '.'.$post->post_type.'-'.$post->post_name.' .'.substr($atts['shortcode'], 0, 3).'-'.$atts['id'].' a { ';
		$scss[] = 'color:'.lastimosa_options_get_color_picker($atts['btn']['text_color']).';';
		$scss[] = 'background-color:'.lastimosa_options_get_color_picker($atts['btn']['bg_color']).';';
		if($atts['btn']['size']['selected'] == 'custom'){	
			$scss[] = 'font-size: '.$atts['btn']['size']['custom']['font'].';';
			$scss[] = 'width: 100%;';
			$scss[] = 'max-width: '.$atts['btn']['size']['custom']['width'].';';
			$scss[] = 'height: '.$atts['btn']['size']['custom']['height'].';';
			$scss[] = 'line-height: '.$atts['btn']['size']['custom']['height'].' - 4px;';
		}
		$scss[] = 'padding: 0;';
		$scss[] = '}';
		
		$scss[] = '.'.$post->post_type.'-'.$post->post_name.' .'.substr($atts['shortcode'], 0, 3).'-'.$atts['id'].' a:hover { ';
		$scss[] = 'color:'.lastimosa_options_get_color_picker($atts['btn']['text_hover_color']).';';
		$scss[] = 'background-color:'.lastimosa_options_get_color_picker($atts['btn']['bg_hover_color']).';';	
		$scss[] = '}';
		
		lastimosa_options_add_scss($atts,$scss);		
	}

add_action(
	'fw_ext_shortcodes_enqueue_static:button',
	'_action_theme_shortcode_button_enqueue_dynamic_css'
);

endif;
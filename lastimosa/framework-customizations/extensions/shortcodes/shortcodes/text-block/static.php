<?php if ( ! defined( 'FW' ) ) { die( 'Forbidden' ); }

if ( ! function_exists( 'delete_shortcode_text_block_style_temp' ) ) :
	/**
	 * Resets the text-block-style-temp to null on page load
	 * which means it will remove the css style of any deleted shortcode
	 */
	function delete_shortcode_text_block_style_temp() {
		delete_option( 'text-block-style-temp' );	
	}
	if( get_option( 'text-block-style-temp' ) ) {
		delete_shortcode_text_block_style_temp();
	}
endif;

if ( ! function_exists('_action_theme_shortcode_text_block_enqueue_dynamic_css') ) :
	/**
	 * @internal
	 * @param array $data
	 */
	function _action_theme_shortcode_text_block_enqueue_dynamic_css($data) {
		$shortcode = 'text-block';
		$atts = shortcode_parse_atts( $data['atts_string'] );
		$atts = fw_ext_shortcodes_decode_attr($atts, $shortcode, $data['post']->ID);
		$uri = fw_get_template_customizations_directory_uri('/extensions/shortcodes/shortcodes/text-block');

		$atts['shortcode'] 	= $shortcode;
		$atts['id'] = $shortcode . '-' . substr($atts['id'], 0, 10);
		
		lastimosa_get_option_enqueue_wow( $atts );

		$css = array(); // Needed to be declared to avoid null error in lastimosa_options_get_shortcode_css
		if( $atts['show_more']['enable'] ) {
			if( ! empty( $atts['show_more']['show_button'] ) ) {
				$css[] = '.' . $atts['id'] . ' .read-more-state ~ .read-more-trigger:before { ';
				$css[] = 'content: \'' . $atts['show_more']['show_button'] . '\';';
				$css[] = '}';
			}
			if( ! empty( $atts['show_more']['hide_button'] ) ) {
				$css[] = '.' . $atts['id'] . ' .read-more-state:checked ~ .read-more-trigger:before { ';
				$css[] = 'content: \'' . $atts['show_more']['hide_button'] . '\';';
				$css[] = '}';
			}
			$fade_color = lastimosa_get_option_color_picker( $atts['show_more']['fade_color'] );
			if( ( ! empty( $fade_color ) ) && $fade_color != '#ffffff' && $atts['show_more']['fade'] ) {
				$css[] = '.' . $atts['id'] . ' .read-more-wrap:after { ';
				$css[] = 'background: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, .9) 50%, ' . $fade_color . ' 75%, ' . $fade_color . ' 100%);';
				$css[] = 'background: linear-gradient(to bottom, rgba(' . $fade_color . ', 0) 0%, rgba(' . $fade_color . ', .9) 50%, ' . $fade_color . ' 75%, ' . $fade_color . ' 100%);';
				$css[] = '}';
			}
			if( ! $atts['show_more']['fade'] ) {
				$css[] = '.' . $atts['id'] . ' .read-more-wrap:after { ';
				$css[] = 'background: none;';
				$css[] = '}';
			}
		}
		$css = array_merge( $css, lastimosa_get_option_spacing_css( $atts ) );
		lastimosa_options_get_shortcode_css( $atts, $css );
	}

	add_action(
		'fw_ext_shortcodes_enqueue_static:text_block',
		'_action_theme_shortcode_text_block_enqueue_dynamic_css'
	);
endif;
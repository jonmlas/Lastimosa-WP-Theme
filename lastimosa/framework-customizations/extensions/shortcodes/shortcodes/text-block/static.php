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

		global $post;
		$post_slug = $post->post_name;
		$atts['id'] = $shortcode . '-' . substr($atts['id'], 0, 10);
		$atts['shortcode'] 	= $shortcode;

		$css = array(); // needs to be defined to use array_merge if show_more is empty
		if( $atts['show_more']['enable'] ) {
			$css[] = '.show-more .show:target ~ .' . $atts['shortcode'] . '-' . $atts['id'] . '.panel { ';
			$css[] = 'max-height: rem(999999px);';
			$css[] = '}';
		}
		
		lastimosa_get_option_enqueue_wow( $atts );

		$css = array_merge( $css, lastimosa_get_option_spacing_css( $atts ) );
		
		if( ! empty( $css ) )	lastimosa_options_get_shortcode_css( $atts, $css );
	}

	add_action(
		'fw_ext_shortcodes_enqueue_static:text_block',
		'_action_theme_shortcode_text_block_enqueue_dynamic_css'
	);
endif;
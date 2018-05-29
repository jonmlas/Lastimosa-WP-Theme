<?php if (!defined('FW')) die('Forbidden');

if ( ! function_exists( 'delete_shortcode_portfolio_style_temp' ) ) :
	/**
	 * Resets the portfolio-style-temp to null on page load
	 * which means it will remove the css style of any deleted shortcode
	 */
	function delete_shortcode_portfolio_style_temp() {
		delete_option( 'portfolio-style-temp' );	
	}
	if( get_option( 'portfolio-style-temp' ) ) {
		delete_shortcode_portfolio_style_temp();
	}
endif;

if ( ! function_exists('_action_theme_shortcode_portfolio_enqueue_dynamic_css') ) :
	/**
	 * @internal
	 * @param array $data
	 */
	function _action_theme_shortcode_portfolio_enqueue_dynamic_css($data) {
		$shortcode = 'portfolio';
		$atts = shortcode_parse_atts( $data['atts_string'] );
		$atts = fw_ext_shortcodes_decode_attr($atts, $shortcode, $data['post']->ID);
		$uri = fw_get_template_customizations_directory_uri('/extensions/shortcodes/shortcodes/portfolio');
 
		global $post;
		$post_slug = $post->post_name;
		$atts['id'] = $shortcode . '-' . substr($atts['id'], 0, 10);
		$atts['shortcode'] 	= $shortcode;
		
		$uri = fw_get_template_customizations_directory_uri('/extensions/portfolio');

		if ( ! is_admin() ) {
			wp_enqueue_script(
				'fw-shortcode-jquery-mixitup',
				$uri . '/static/js/jquery.mixitup.min.js',
				array(),
				'6.0',
				true
			);
			
			wp_add_inline_script( 'fw-shortcode-jquery-mixitup', '
				var containerEl = document.querySelector(\'.' . $atts['id'] . '\');
				var mixer = mixitup(containerEl);
			');
		}

		$css = array(); // needs to be defined to use array_merge if show_more is empty
		
		lastimosa_get_option_enqueue_wow( $atts );

		$css = array_merge( $css, lastimosa_get_option_spacing_css( $atts ) );
		
		if( ! empty( $css ) )	lastimosa_options_get_shortcode_css( $atts, $css );
	}

	add_action(
		'fw_ext_shortcodes_enqueue_static:portfolio',
		'_action_theme_shortcode_portfolio_enqueue_dynamic_css'
	);
endif;
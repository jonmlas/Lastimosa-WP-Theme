<?php if ( ! defined( 'FW' ) ) { die( 'Forbidden' ); }

if ( ! function_exists( 'delete_shortcode_accordion_style_temp' ) ) :
	/**
	 * Resets the accordion-style-temp to null on page load
	 * which means it will remove the css style of any deleted shortcode
	 */
	function delete_shortcode_accordion_style_temp() {
		delete_option( 'accordion-style-temp' );	
	}
	if( get_option( 'accordion-style-temp' ) ) {
		delete_shortcode_accordion_style_temp();
	}
endif;

if (!function_exists('_action_theme_shortcode_accordion_enqueue_dynamic_css')):
	/**
	 * @internal
	 * @param array $data
	 */
	function _action_theme_shortcode_accordion_enqueue_dynamic_css($data) {
		$shortcode = 'accordion';
		$atts = shortcode_parse_atts( $data['atts_string'] );
		$atts = fw_ext_shortcodes_decode_attr($atts, $shortcode, $data['post']->ID);
		$uri = fw_get_template_customizations_directory_uri('/extensions/shortcodes/shortcodes/accordion');

		global $post;
		$post_slug = $post->post_name;
		$atts['id'] = $shortcode . '-' . substr($atts['id'], 0, 10);
		$atts['shortcode'] 	= $shortcode;

		if( $atts['style']['selected'] == 'style-1' ) {
			$shortcodes_extension = fw_ext('shortcodes');
			wp_enqueue_script(
				'fw-shortcode-accordion',
				$shortcodes_extension->get_declared_URI('/shortcodes/accordion/static/js/scripts.js'),
				array('jquery-ui-accordion'),
				false,
				true
			);
			wp_enqueue_style(
				'fw-shortcode-accordion',
				$shortcodes_extension->get_declared_URI('/shortcodes/accordion/static/css/styles.css')
			);
		}		
		
		lastimosa_get_option_enqueue_wow( $atts );
		$css = lastimosa_get_option_spacing_css( $atts );
		
		if( ! empty( $css ) )	lastimosa_options_get_shortcode_css( $atts, $css );
	}

	add_action(
		'fw_ext_shortcodes_enqueue_static:accordion',
		'_action_theme_shortcode_accordion_enqueue_dynamic_css'
	);
endif;
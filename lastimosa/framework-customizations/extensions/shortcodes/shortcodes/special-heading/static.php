<?php if ( ! defined( 'FW' ) ) { die( 'Forbidden' ); }

if (!function_exists('_action_theme_shortcode_special_heading_enqueue_dynamic_css')):
	/**
	 * @internal
	 * @param array $data
	 */
	function _action_theme_shortcode_special_heading_enqueue_dynamic_css($data) {
		$shortcode = 'special-heading';
		$atts = shortcode_parse_atts( $data['atts_string'] );
		$atts = fw_ext_shortcodes_decode_attr($atts, $shortcode, $data['post']->ID);
		$uri = fw_get_template_customizations_directory_uri('/extensions/shortcodes/shortcodes/special_heading');
		$atts['shortcode'] 	= $shortcode;
		global $post;
		$shortcode_atts = array();
		$atts['id'] = substr($atts['id'], 0, 10);
		$post_slug = $post->post_name;
		
		lastimosa_get_option_enqueue_wow( $atts );

		// Blank CSS selectors or classes are not compiled in SASS.
		//$shortcode_atts[] = '.'.$atts['shortcode'].'-'.$atts['id'].' { ';
		//$shortcode_atts[] = '}';

		lastimosa_options_get_shortcode_css( $atts, $shortcode_atts );
	}

	add_action(
		'fw_ext_shortcodes_enqueue_static:special_heading',
		'_action_theme_shortcode_special_heading_enqueue_dynamic_css'
	);
endif;
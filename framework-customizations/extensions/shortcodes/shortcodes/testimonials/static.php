<?php if (!defined('FW')) die('Forbidden');

// I've placed this as a function so that it will be run once.
if (!function_exists('delete_shortcode_testimonials_style_temp')):
	function delete_shortcode_testimonials_style_temp() {
			delete_option( 'testimonials_style_temp' );	
	}
	if( get_option( 'testimonials_style_temp' ) ) {
		delete_shortcode_testimonials_style_temp();
	}
endif;

if (!function_exists('_action_theme_shortcode_testimonials_enqueue_dynamic_css')):

	/**
	 * @internal
	 * @param array $data
	 */
	function _action_theme_shortcode_testimonials_enqueue_dynamic_css($data) {
		$shortcode = 'testimonials';
		$atts = shortcode_parse_atts( $data['atts_string'] );
		$atts = fw_ext_shortcodes_decode_attr($atts, $shortcode, $data['post']->ID);
		$uri = fw_get_template_customizations_directory_uri('/extensions/shortcodes/shortcodes/testimonials');
		
		// Enqueue Animation Script
		// https://github.com/matthieua/WOW
		if( !is_admin() && !empty($atts['animate']['animation'])) {
			wp_enqueue_script(
				'wow',
				get_template_directory_uri() . '/js/wow.min.js',
				array(),
				'1.1.2',
				true
			);
			wp_add_inline_script( 'wow', '
				new WOW().init();
			');
		}
		
		$shortcodes_extension = fw_ext('shortcodes');
		wp_enqueue_script(
			'fw-shortcode-testimonials-caroufredsel',
			$shortcodes_extension->get_declared_URI('/shortcodes/testimonials/static/js/jquery.carouFredSel-6.2.1-packed.js'),
			array('jquery'),
			false,
			true
		);
		
		$key = $atts['design']['layout']['selected'] . '-' . $atts['design']['style']['selected'];
		$value = $key;
		
		if( !get_option( $shortcode.'_style' ) ) {
			$shortcode_styles = array();
			$shortcode_styles[get_the_ID()][$key] = $value;
			add_option( $shortcode.'_style', $shortcode_styles, '', 'yes' );
			
		} else {
			$shortcode_styles = get_option( $shortcode.'_style' );		
			$shortcode_styles[get_the_ID()][$key] = $value;
			update_option( $shortcode.'_style', $shortcode_styles, 'yes' );					
		}	
		
		if( !get_option( $shortcode.'_style_temp' ) ) {
			$shortcode_styles_temp = array();
			$shortcode_styles_temp[$key] = $value;		
			add_option( $shortcode.'_style_temp', $shortcode_styles_temp, '', 'yes' );			
		} else {	
			$shortcode_styles_temp = get_option( $shortcode.'_style_temp');	
			$shortcode_styles_temp[$key] = $value;
			update_option( $shortcode.'_style_temp', $shortcode_styles_temp, 'yes' );
			
		}	
		//$difference = array_diff($shortcode_styles[get_the_ID()],$shortcode_styles_temp);
		$shortcode_styles[get_the_ID()] = array_intersect_key($shortcode_styles[get_the_ID()], $shortcode_styles_temp);
		update_option( $shortcode.'_style', $shortcode_styles, 'yes' );
		//delete_option($shortcode.'_style');
		//delete_option($shortcode.'_style_temp');
		
	}

add_action(
	'fw_ext_shortcodes_enqueue_static:testimonials',
	'_action_theme_shortcode_testimonials_enqueue_dynamic_css'
);

endif;
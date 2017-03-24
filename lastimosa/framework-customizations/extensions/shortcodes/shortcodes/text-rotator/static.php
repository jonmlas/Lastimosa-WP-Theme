<?php if (!defined('FW')) die('Forbidden');

if (!function_exists('_action_theme_shortcode_text_rotator_enqueue_dynamic_css')):

	/**
	 * @internal
	 * @param array $data
	 */
	function _action_theme_shortcode_text_rotator_enqueue_dynamic_css($data) {
		$shortcode = 'text-rotator';
		$atts = shortcode_parse_atts( $data['atts_string'] );
		$atts = fw_ext_shortcodes_decode_attr($atts, $shortcode, $data['post']->ID);
		$uri = fw_get_template_customizations_directory_uri('/extensions/shortcodes/shortcodes/text-rotator');
		
		// Start of original static.php code
		// Enqueues these scripts if there is a video background.
		wp_enqueue_style( 'fw-ext-builder-frontend-grid' );
		$shortcodes_extension = fw_ext( 'shortcodes' );
		
		if ( !is_admin() ) {
			wp_enqueue_script(
				'jquery-3.0.0',
				//'https://code.jquery.com/jquery-3.0.0.min.js',
				$uri . '/static/js/jquery-3.0.0.min.js',
				array(),
				'3.0',
				true
			);
			wp_enqueue_script(
				'typeit',
				//'https://cdn.jsdelivr.net/jquery.typeit/4.3.0/typeit.min.js',
				$uri . '/static/js/typeit.min.js',
				array(),
				'4.3',
				true
			);
			$rotating_text = "'" . implode ( "', '", $atts['heading']['rotating_text'] ) . "'";
			wp_add_inline_script( 'typeit', '
				$("#'.$atts["id"].'").typeIt({
					 strings: ['.$rotating_text.'],
					 speed: 50,
					 breakLines: false,
					 autoStart: true,
					 loop: true
				}); 
			');
		}
	}


add_action(
	'fw_ext_shortcodes_enqueue_static:text_rotator',
	'_action_theme_shortcode_text_rotator_enqueue_dynamic_css'
);

endif;
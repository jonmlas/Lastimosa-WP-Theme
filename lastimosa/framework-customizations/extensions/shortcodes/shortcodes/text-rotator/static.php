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
			/*wp_enqueue_script(
				'jquery-3.0.0',
				//'https://code.jquery.com/jquery-3.0.0.min.js',
				$uri . '/static/js/jquery-3.0.0.min.js',
				array(),
				'3.0',
				true
			);*/
			wp_enqueue_script(
				'typeit',
				//'https://cdn.jsdelivr.net/jquery.typeit/4.3.0/typeit.min.js',
				$uri . '/static/js/typeit.min.js',
				array(),
				'5.10.1',
				true
			);
			$atts['id'] = 'text-rotator-'.substr($atts['id'], 0, 10);
			$options = array();
			if( !empty( $atts['heading']['rotating_text'] ) ) {
				$rotating_text = '"' . implode ( '", "', $atts['heading']['rotating_text'] ) . '"';
				$options[] = 'strings: [' . $rotating_text . ']';
			}			
			if( !empty( $atts['options']['speed'] ) ) 				$options[] = 'speed: ' . $atts['options']['speed'];
			if( !empty( $atts['options']['deleteSpeed'] ) ) 	$options[] = 'deleteSpeed: ' . $atts['options']['deleteSpeed'];
			if( !empty( $atts['options']['lifeLike'] ) ) 			$options[] = 'lifeLike: ' . $atts['options']['lifeLike'];
			if( !empty( $atts['options']['cursor'] ) ) 				$options[] = 'cursor: ' . $atts['options']['cursor'];
			if( ( $atts['options']['cursor'] == 'true' ) && !empty( $atts['options']['cursorSpeed'] ) ) 	$options[] = 'cursorSpeed: ' . $atts['options']['cursorSpeed'];
			if( ( $atts['options']['cursor'] == 'true' ) && !empty( $atts['options']['cursorChar'] ) ) 		$options[] = 'cursorChar: "' . $atts['options']['cursorChar'] . '"';
			if( !empty( $atts['options']['breakLines'] ) ) 		$options[] = 'breakLines: ' . $atts['options']['breakLines'];
			if( !empty( $atts['options']['nextStringDelay'] ) ) 	$options[] = 'nextStringDelay: ' . $atts['options']['nextStringDelay'];
			if( !empty( $atts['options']['autoStart'] ) ) 		$options[] = 'autoStart: ' . $atts['options']['autoStart'];
			if( !empty( $atts['options']['startDelete'] ) ) 	$options[] = 'startDelete: ' . $atts['options']['startDelete'];
			if( !empty( $atts['options']['startDelay'] ) ) 		$options[] = 'startDelay: ' . $atts['options']['startDelay'];
			if( !empty( $atts['options']['loop'] ) ) 					$options[] = 'loop: ' . $atts['options']['loop'];
			if( ( $atts['options']['loop'] == 'true' ) && !empty( $atts['options']['loopDelay'] ) ) 		$options[] = 'loopDelay: ' . $atts['options']['loopDelay'];
			if( !empty( $atts['options']['html'] ) ) 					$options[] = 'html: ' . $atts['options']['html'];
			
			$options = join( ', ', $options );
			
			wp_add_inline_script( 'typeit', '
				new TypeIt(\'#' . $atts['id'] . '\', { ' .
					$options . '
				});
			');
		}
	}


add_action(
	'fw_ext_shortcodes_enqueue_static:text_rotator',
	'_action_theme_shortcode_text_rotator_enqueue_dynamic_css'
);

endif;
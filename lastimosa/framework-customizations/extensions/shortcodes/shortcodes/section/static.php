<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

// Kept for future reference.  // We don't need this since we're going to attach it on our main style
/*wp_enqueue_style(
    'theme-shortcode-section',
    fw_ext('shortcodes')->locate_URI('/shortcodes/section/static/css/style.css')
);*/

if (!function_exists('delete_shortcode_section_style_temp')):
	function delete_shortcode_section_style_temp() {
			delete_option( 'section_style_temp' );	
	}
	if( get_option( 'section_style_temp' ) ) {
		delete_shortcode_section_style_temp();
	}
endif;

if (!function_exists('_action_theme_shortcode_section_enqueue_dynamic_css')):

	/**
	 * @internal
	 * @param array $data
	 */
	function _action_theme_shortcode_section_enqueue_dynamic_css($data) {
		$shortcode = 'section';
		$atts = shortcode_parse_atts( $data['atts_string'] );
		$atts = fw_ext_shortcodes_decode_attr($atts, $shortcode, $data['post']->ID);
		$uri = fw_get_template_customizations_directory_uri('/extensions/shortcodes/shortcodes/section');
		
		if ( !is_admin() && $atts['style']['selected'] == 'video'  ) {
			// Start of original static.php code
			// Enqueues these scripts if there is a video background.
			wp_enqueue_style( 'fw-ext-builder-frontend-grid' );
	
			$shortcodes_extension = fw_ext( 'shortcodes' );
			
			if ( version_compare( $shortcodes_extension->manifest->get_version(), '1.3.9', '>=' ) ) {
				/**
				 * Updated to new version of formstone.js background
				 * which have new structure and new dependencies
				 * such as core.js , transition.js and background.js
				 * since v1.3.9
				 * jquery.fs.wallpaper.js, jquery.fs.wallpaper.min.js and scripts.js are @deprecated
				 * they remains for backward compatibility.
				 */
			
				// fixes https://github.com/ThemeFuse/Unyson/issues/1552
				{
					global $is_safari;
			
					if ($is_safari) {
						wp_enqueue_script('youtube-iframe-api', 'https://www.youtube.com/iframe_api');
					}
				}
			
				/* I've included this in the sass
				wp_enqueue_style(
					'fw-shortcode-section-background-video',
					$shortcodes_extension->get_uri( '/shortcodes/section/static/css/background.css' )
				);*/
			
				wp_enqueue_script(
					'fw-shortcode-section-formstone-core',
					$shortcodes_extension->get_uri( '/shortcodes/section/static/js/core.js' ),
					array( 'jquery' ),
					false,
					true
				);
				wp_enqueue_script(
					'fw-shortcode-section-formstone-transition',
					$shortcodes_extension->get_uri( '/shortcodes/section/static/js/transition.js' ),
					array( 'jquery' ),
					false,
					true
				);
				wp_enqueue_script(
					'fw-shortcode-section-formstone-background',
					$shortcodes_extension->get_uri( '/shortcodes/section/static/js/background.js' ),
					array( 'jquery' ),
					false,
					true
				);
				wp_enqueue_script(
					'fw-shortcode-section',
					$shortcodes_extension->get_uri( '/shortcodes/section/static/js/background.init.js' ),
					array(
						'fw-shortcode-section-formstone-core',
						'fw-shortcode-section-formstone-transition',
						'fw-shortcode-section-formstone-background'
					),
					false,
					true
				);
			} else {
				wp_enqueue_style(
					'fw-shortcode-section-background-video',
					$shortcodes_extension->get_uri( '/shortcodes/section/static/css/jquery.fs.wallpaper.css' )
				);
			
				wp_enqueue_script(
					'fw-shortcode-section-background-video',
					$shortcodes_extension->get_uri( '/shortcodes/section/static/js/jquery.fs.wallpaper.min.js' ),
					array( 'jquery' ),
					false,
					true
				);
				wp_enqueue_script(
					'fw-shortcode-section',
					$shortcodes_extension->get_uri( '/shortcodes/section/static/js/scripts.js' ),
					array( 'fw-shortcode-section-background-video' ),
					false,
					true
				);
			}
					
			/* I've included this in the sass 
			wp_enqueue_style(
				'fw-shortcode-section',
				$shortcodes_extension->get_uri( '/shortcodes/section/static/css/styles.css' )
			);*/
			// End of original static.php code
		}

		if ( !is_admin() && $atts['style']['selected'] == 'parallax'  ) {
			wp_enqueue_script(
				'stellar-jquery',
				$uri . '/static/js/jquery1.9.0.min.js',
				array(),
				'6.0',
				true
			);
			wp_enqueue_script(
				'stellar',
				$uri . '/static/js/stellar.js',
				array(),
				'6.0',
				true
			);
   			wp_add_inline_script( 'stellar', '
				$(function(){
					$.stellar({
						horizontalScrolling: false,
						verticalOffset: 40
					});
				});
			');
		}	

		$atts['shortcode'] 	= $shortcode;
		$atts['container-class'] = ( empty( $atts['width']['fluid']['content_width'] ) ) ? 'container' : 'container-fluid'; // Not sure if this is still used. Needs recheck
		lastimosa_options_get_shortcode_css($atts);
	}


add_action(
	'fw_ext_shortcodes_enqueue_static:section',
	'_action_theme_shortcode_section_enqueue_dynamic_css'
);

endif;
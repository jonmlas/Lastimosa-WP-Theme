<?php if (!defined('FW')) die('Forbidden');

if (!function_exists('_action_theme_shortcode_media_image_enqueue_dynamic_css')):

	/**
	 * @internal
	 * @param array $data
	 */
	function _action_theme_shortcode_media_image_enqueue_dynamic_css($data) {
		$shortcode = 'media-image';
		$atts = shortcode_parse_atts( $data['atts_string'] );
		$atts = fw_ext_shortcodes_decode_attr($atts, $shortcode, $data['post']->ID);
		$uri = fw_get_template_customizations_directory_uri('/extensions/shortcodes/shortcodes/media-image');
		
		// Start of original static.php code
		// Enqueues these scripts if there is a video background.
		wp_enqueue_style( 'fw-ext-builder-frontend-grid' );
		$shortcodes_extension = fw_ext( 'shortcodes' );
		
		$selected_link = $atts['image']['link']['selected'];
		$target = $atts['image']['link'][$selected_link]['target'];

		if ( !is_admin() && $target == 'lightbox' ) {
			wp_enqueue_style(
				'lightbox-1',
				get_template_directory_uri() . '/css/lightbox-1.css',
				array(),
				'1.0'
			);
			wp_enqueue_script(
				'lightbox-1',
				//'https://cdn.jsdelivr.net/jquery.typeit/4.3.0/typeit.min.js',
				get_template_directory_uri() . '/js/lightbox-1.js',
				array(),
				'2.9',
				true
			);	
		}
	}


add_action(
	'fw_ext_shortcodes_enqueue_static:media_image',
	'_action_theme_shortcode_media_image_enqueue_dynamic_css'
);

endif;
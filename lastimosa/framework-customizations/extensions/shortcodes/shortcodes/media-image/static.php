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
		

	}


add_action(
	'fw_ext_shortcodes_enqueue_static:media_image',
	'_action_theme_shortcode_media_image_enqueue_dynamic_css'
);

endif;
<?php if ( ! defined( 'FW' ) ) { die( 'Forbidden' ); }

if (!function_exists('_action_theme_shortcode_image_gallery_enqueue_dynamic_css')):
/**
 * @internal
 * @param array $data
 */
function _action_theme_shortcode_image_gallery_enqueue_dynamic_css($data) {
	$shortcode = 'image-gallery';
	$atts = shortcode_parse_atts( $data['atts_string'] );
	$atts = fw_ext_shortcodes_decode_attr($atts, $shortcode, $data['post']->ID);
	$uri = fw_get_template_customizations_directory_uri('/extensions/shortcodes/shortcodes/image-gallery');
	
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
	
	wp_enqueue_script(
		'jquery191',
		'//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js',
		array(),
		'1.0',
		true
	);
	wp_enqueue_script(
		'magnific-popup',
		$uri . '/static/js/jquery.magnific-popup.min.js',
		array(),
		'1.0',
		true
	);	
	wp_enqueue_script(
		'scripts',
		$uri . '/static/js/scripts.js',
		array(),
		'1.0',
		true
	);
	
	// Magnific Popup - http://dimsemenov.com/plugins/magnific-popup/
	if ($atts['image_gallery']['style'] == 'masonry'):
			wp_enqueue_script(
				'isotope',
				fw_ext('shortcodes')->locate_URI('/shortcodes/image-gallery/static/js/masonry.pkgd.min.js'),
				array(),
				'1.0',
				true
			);	
			wp_enqueue_script(
				'isotope-script',
				fw_ext('shortcodes')->locate_URI('/shortcodes/image-gallery/static/js/masonry.script.js'),
				array(),
				'1.0',
				true
			);
	endif;
}

add_action(
	'fw_ext_shortcodes_enqueue_static:image_gallery',
	'_action_theme_shortcode_image_gallery_enqueue_dynamic_css'
);
endif;
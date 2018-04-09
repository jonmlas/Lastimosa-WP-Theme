<?php if (!defined('FW')) die('Forbidden');



$uri = fw_get_template_customizations_directory_uri('/extensions/shortcodes/shortcodes/portfolio');

if ( ! is_admin() ) {
	wp_enqueue_script(
		'fw-shortcode-jquery-mixitup',
		$uri . '/static/js/jquery.mixitup.min.js',
		array(),
		'6.0',
		true
	);
	
	wp_enqueue_script(
		'fw-shortcode-portfolio-script',
		$uri . '/static/js/portfolio-script.js',
		array(),
		'1.0',
		true
	);	
}
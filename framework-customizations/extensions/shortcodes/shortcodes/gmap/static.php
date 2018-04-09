<?php if (!defined('FW')) die('Forbidden');

$uri = fw_get_template_customizations_directory_uri('/extensions/shortcodes/shortcodes/gmap');

wp_enqueue_style(
	'fw-shortcode-gmap',
	$uri . '/static/css/style.less'
);

wp_enqueue_script(
	'fw-shortcode-gmap',
	$uri . '/static/js/gmap3.min.js',
	array(),
	'6.0',
	true
);

wp_enqueue_script(
	'fw-shortcode-gmap-scripts',
	$uri . '/static/js/scripts.js',
	array(),
	'1.0',
	true
);
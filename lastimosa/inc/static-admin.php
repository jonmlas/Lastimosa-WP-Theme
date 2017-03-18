<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Direct access forbidden.' ); }
/**
 * Include static files: javascript and css for the admin
 */
if ( !is_admin() ) {
	return;
}

wp_enqueue_style(
	'bootstrap-grid',
	get_template_directory_uri() . '/css/bootstrap/css/bootstrap-grid.min.css',
	array(),
	'1.0'
);

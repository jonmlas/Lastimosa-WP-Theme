<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$ext_instance = fw()->extensions->get( 'portfolio' );

fw_include_file_isolated( $ext_instance->get_path( '/static.php' ) );

if ( ! is_admin() ) {

	$settings = $ext_instance->get_settings();

	if ( is_tax( $settings['taxonomy_name'] ) || is_post_type_archive( $settings['post_type'] ) ) {
		wp_enqueue_script(
			'fw-extension-' . $ext_instance->get_name() . '-mixitup',
			$ext_instance->locate_js_URI( 'jquery.mixitup.min' ),
			array( 'jquery' ),
			$ext_instance->manifest->get_version(),
			true
		);
		wp_enqueue_script(
			'fw-extension-' . $ext_instance->get_name() . '-script',
			$ext_instance->locate_js_URI( 'portfolio-script' ),
			array( 'fw-extension-' . $ext_instance->get_name() . '-mixitup' ),
			$ext_instance->manifest->get_version(),
			true
		);
	}
	if ( is_singular( 'fw-portfolio' ) ) {	
		//http://sachinchoolur.github.io/lightGallery/docs/
		wp_enqueue_style(
			'lightgallery',
			get_template_directory_uri() . '/css/lightgallery.min.css',
			array(),
			'1.0'
		);
		wp_enqueue_script(
			'jquery-1.11.2',
			'https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js',
			array(),
			'1.0'
		);
		wp_enqueue_script(
			'lightgallery',
			get_template_directory_uri() . '/js/lightgallery.min.js',
			array(),
			'1.0'
		);
		wp_add_inline_script( 'lightgallery', '
			$(document).ready(function() {
				$("#slider").lightGallery(); 
			});
		');
	}	
}
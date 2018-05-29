<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$ext_instance = fw()->extensions->get( 'portfolio' );

fw_include_file_isolated( $ext_instance->get_path( '/static.php' ) );

if ( ! is_admin() ) {

	$settings = $ext_instance->get_settings();
//fw_print($settings);
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
		/*wp_enqueue_style(
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
		wp_add_inline_script( 'lightbox-1', '
			lightbox.option({
			  "resizeDuration": 200,
			  "wrapAround": true,
			  "fitImagesInViewport": true,
			})
		');	*/
		
		//http://sachinchoolur.github.io/lightGallery/docs/
		wp_enqueue_style(
			'lightgallery',
			get_template_directory_uri() . '/css/lib/lightGallery/css/lightgallery.min.css',
			array(),
			'1.0'
		);
		wp_enqueue_script(
			'lightgallery',
			get_template_directory_uri() . '/js/lightgallery.js',
			array(),
			'2.9',
			true
		);
		wp_add_inline_script( 'lightgallery', '
			jQuery(document).ready(function () {
				jQuery(\'#portfolio-gallery\').lightGallery();
			});

		');
		wp_enqueue_script(
			'mousewheel',
			get_template_directory_uri() . '/js/jquery.mousewheel.min.js',
			array(),
			'2.9',
			true
		);
	}	
}
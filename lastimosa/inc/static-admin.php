<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Direct access forbidden.' ); }

if ( !is_admin() ) {
	return;
}

if(!function_exists('lastimosa_load_custom_wp_admin_style')) :
	/**
	 * Enqueue static files: javascript and css for the admin
	 */
	function lastimosa_load_custom_wp_admin_style($hook) { 
		//wp_die($hook);
		// Load only on ?page=mypluginname
		if($hook == 'post.php' || $hook == 'post-new.php') {
			wp_enqueue_style(
				'bootstrap-grid',
				get_template_directory_uri() . '/css/admin/bootstrap-grid.min.css',
				array(),
				'1.0'
			);
			wp_enqueue_style(
				'post-editor',
				get_template_directory_uri() . '/css/admin/post-editor.scss.php',
				array(),
				'1.0'
			);
		} 

		if($hook == 'appearance_page_fw-settings') {
			wp_enqueue_style( 
				'fw-settings', 
				get_template_directory_uri() . '/css/admin/fw-settings.scss.php' 
			);
		}
		
	}
	add_action( 'admin_enqueue_scripts', 'lastimosa_load_custom_wp_admin_style', 20);
endif; 
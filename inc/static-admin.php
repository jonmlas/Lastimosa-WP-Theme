<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Direct access forbidden.' ); }
/**
 * Include static files: javascript and css for the admin
 * Somehow, the $hook doesn't work if I enqueue the script in the class
 */
if ( !is_admin() ) {
	return;
}

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
        } 
		
        if($hook == 'appearance_page_fw-settings') {
            wp_enqueue_style( 
				'fw-settings', 
				get_template_directory_uri() . '/css/admin/fw-settings.scss.php' 
			);
        } 
}
add_action( 'admin_enqueue_scripts', 'lastimosa_load_custom_wp_admin_style', 20);
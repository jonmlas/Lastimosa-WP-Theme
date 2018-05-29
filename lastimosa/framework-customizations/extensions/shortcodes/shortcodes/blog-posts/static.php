<?php if (!defined('FW')) die('Forbidden');

if ( ! function_exists( 'delete_shortcode_blog_posts_style_temp' ) ) :
	/**
	 * Resets the blog-posts-style-temp to null on page load
	 * which means it will remove the css style of any deleted shortcode
	 */
	function delete_shortcode_blog_posts_style_temp() {
		delete_option( 'blog-posts-style-temp' );	
	}
	if( get_option( 'blog-posts-style-temp' ) ) {
		delete_shortcode_blog_posts_style_temp();
	}
endif;

if (!function_exists('_action_theme_shortcode_blog_posts_enqueue_dynamic_css')):

	/**
	 * @internal
	 * @param array $data
	 */
	function _action_theme_shortcode_blog_posts_enqueue_dynamic_css($data) {
		$shortcode = 'blog_posts';
		$atts = shortcode_parse_atts( $data['atts_string'] );
		$atts = fw_ext_shortcodes_decode_attr($atts, $shortcode, $data['post']->ID);
		$uri = fw_get_template_customizations_directory_uri('/extensions/shortcodes/shortcodes/blog-posts');
		
		// Start of original static.php code
		// Enqueues these scripts if there is a video background.
		wp_enqueue_style( 'fw-ext-builder-frontend-grid' );
		$shortcodes_extension = fw_ext( 'shortcodes' );

		if ( !is_admin() && $atts['page_navigation'] == 'infinite' ) {
			wp_enqueue_script(
				'pbd-alp-load-posts',
				$uri . '/static/js/load-posts.js',
				array('jquery'),
				'1.0',
				true
			);
		}
		
		lastimosa_get_option_enqueue_wow( $atts );
		$css = lastimosa_get_option_spacing_css( $atts );
		
		if( ! empty( $css ) )	lastimosa_options_get_shortcode_css( $atts, $css );
	}

add_action(
	'fw_ext_shortcodes_enqueue_static:blog_posts',
	'_action_theme_shortcode_blog_posts_enqueue_dynamic_css'
);

endif;
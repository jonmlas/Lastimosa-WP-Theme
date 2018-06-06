<?php if ( ! defined( 'FW' ) ) { die( 'Forbidden' ); }

if ( ! function_exists( 'delete_shortcode_progress_bar_style_temp' ) ) :
	/**
	 * Resets the progress-bar-style-temp to null on page load
	 * which means it will remove the css style of any deleted shortcode
	 */
	function delete_shortcode_progress_bar_style_temp() {
		delete_option( 'progress-bar-style-temp' );	
	}
	if( get_option( 'progress-bar-style-temp' ) ) {
		delete_shortcode_progress_bar_style_temp();
	}
endif;

if (!function_exists('_action_theme_shortcode_progress_bar_enqueue_dynamic_css')):
	/**
	 * @internal
	 * @param array $data
	 */
	function _action_theme_shortcode_progress_bar_enqueue_dynamic_css($data) {
		$shortcode = 'progress-bar';
		$atts = shortcode_parse_atts( $data['atts_string'] );
		$atts = fw_ext_shortcodes_decode_attr($atts, $shortcode, $data['post']->ID);
		$uri = fw_get_template_customizations_directory_uri('/extensions/shortcodes/shortcodes/progress-bar');

		global $post;
		$post_slug = $post->post_name;
		$atts['id'] = $shortcode . '-' . substr($atts['id'], 0, 10);
		$atts['shortcode'] 	= $shortcode;
		
		if( isset( $atts['style']['selected'] ) ) {
			wp_enqueue_style(
				$shortcode . '-' . $atts['style']['selected'],
				$uri . '/static/css/' . $atts['style']['selected'] . '.scss',
				array(),
				'1.0'
			);
		}
		
		if( ! function_exists( 'lastimosa_progress_bar_style_2' ) && ( $atts['style']['selected'] == 'style-2' )) :
			function lastimosa_progress_bar_style_2() {
				?>
				<script>
					jQuery(function ($) {
						$(document).ready(function(){
							$('.progress-value > span').each(function(){
									$(this).prop('Counter',0).animate({
											Counter: $(this).text()
									},{
											duration: 1500,
											easing: 'swing',
											step: function (now){
													$(this).text(Math.ceil(now));
											}
									});
							});
						});
					});
				</script>
				<?php
			}
			add_action( 'wp_footer', 'lastimosa_progress_bar_style_2', 30 );
		endif;
		
		if( ! wp_script_is( 'wow', 'enqueued' ) ) {
			wp_enqueue_script(
				'wow',
				get_template_directory_uri() . '/js/wow.min.js',
				array(),
				'1.1.3',
				true
			);
			wp_add_inline_script( 'wow', '
				new WOW().init();
			');
		}
		
		$css = array(); // Needed to be declared to avoid null error in lastimosa_options_get_shortcode_css
		$css = lastimosa_get_option_spacing_css( $atts );
		lastimosa_options_get_shortcode_css( $atts, $css );
	}

	add_action(
		'fw_ext_shortcodes_enqueue_static:progress_bar',
		'_action_theme_shortcode_progress_bar_enqueue_dynamic_css'
	);
endif;
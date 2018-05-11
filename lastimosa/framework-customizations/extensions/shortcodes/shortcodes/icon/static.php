<?php if ( ! defined( 'FW' ) ) { die( 'Forbidden' ); }

if (!function_exists('_action_theme_shortcode_icon_enqueue_dynamic_css')):
/**
 * @internal
 * @param array $data
 */
function _action_theme_shortcode_icon_enqueue_dynamic_css($data) {
	$shortcode = 'icon';
	$atts = shortcode_parse_atts( $data['atts_string'] );
	$atts = fw_ext_shortcodes_decode_attr($atts, $shortcode, $data['post']->ID);
	$atts['shortcode'] 	= $shortcode;
	global $post;
	$shortcode_atts = array();
	$atts['id'] = substr($atts['id'], 0, 10);
	$post_slug = $post->post_name;
	
	lastimosa_get_option_enqueue_wow( $atts );

	if( !is_admin() ) {
		fw()->backend->option_type('icon-v2')->packs_loader->enqueue_frontend_css();
	}

	/* if(! in_array( '', $atts['margin']) )	{
		foreach($atts['margin'] as $key => $value) {
			$atts['margin'][$key] = 'rem(' . $value . ')';
		}
		$shortcode_atts[] = '.' . $post->post_type . '-' . $post->post_name . ' .btn-' . $atts['id'] . ' { ';
		$shortcode_atts[] = 'margin:' . join( ' ', $atts['margin'] ) . '; ';
		$shortcode_atts[] = '}';
	} */

	lastimosa_options_get_shortcode_css($atts,$shortcode_atts);
	

}

add_action(
	'fw_ext_shortcodes_enqueue_static:icon',
	'_action_theme_shortcode_icon_enqueue_dynamic_css'
);
endif;
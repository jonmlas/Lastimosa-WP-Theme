<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Direct access forbidden.' ); }

//if(!function_exists('c_get_option')) :
/**
* Get options value
* if framework is missing , load defaults
* @return option value
*/
function c_get_option($id,$default = ''){
    if (function_exists('fw_get_db_settings_option')) {
        return fw_get_db_settings_option($id);
    }else if(!empty( $default )){
        return $default;
    }
}
//endif;


// I'll be removing the c_get_option function
if(!function_exists('lastimosa_get_option')) :
/**
* Get options value
* if framework is missing , load defaults
* @return option value
*/
function lastimosa_get_option($id,$default = ''){
    if (function_exists('fw_get_db_settings_option')) {
        return fw_get_db_settings_option($id);
    }else{
        return $default;
    }
}
endif;


if(!function_exists('lastimosa_attr_to_html')) :
/**
* Checks if Unyson framework is missing, load defaults
*/
function lastimosa_attr_to_html(array $attr,$default = ''){
    if (function_exists('fw_attr_to_html')) {
        return fw_attr_to_html($attr);
    }else{
        return $default;
    }
}
endif;


if(!function_exists('lastimosa_ext_page_builder_is_builder_post')) :
/**
* Checks if Unyson framework is missing, load defaults
*/
function lastimosa_ext_page_builder_is_builder_post($postid,$default = ''){
    if (function_exists('fw_ext_page_builder_is_builder_post')) {
        return fw_ext_page_builder_is_builder_post($postid);
    }else{
        return $default;
    }
}
endif;


// Start of Google Font embed
if(!function_exists('_action_theme_process_google_fonts')) :
/**
 * Queue Theme Options Font Family
 */
function _action_theme_process_google_fonts()
{
	$include_from_google = array();
	$google_fonts = fw_get_google_fonts();
	//$google_fonts = fw_get_google_fonts_v2();

	$main_menu = fw_get_db_settings_option('header_menu');
	$main_menu_typography = $main_menu[$main_menu['selected']]['typography'];
	$typography = fw_get_db_settings_option('typography');
	
	//$your_typography_option_2 = fw_get_db_settings_option('your_typography_option_2');
	
	// if is google font	
	if( isset($google_fonts[$main_menu_typography['family']]) ){
		$include_from_google[$main_menu_typography['family']] = $google_fonts[$main_menu_typography['family']];
	}
	
  	if( isset($google_fonts[$typography['body']['family']]) ){
		$include_from_google[$typography['body']['family']] = $google_fonts[$typography['body']['family']];
	}
	
	if( isset($google_fonts[$typography['h1']['family']]) ){
		$include_from_google[$typography['h1']['family']] = $google_fonts[$typography['h1']['family']];
	}
	
	if( isset($google_fonts[$typography['h2']['family']]) ){
		$include_from_google[$typography['h2']['family']] = $google_fonts[$typography['h2']['family']];
	}
	
	if( isset($google_fonts[$typography['h3']['family']]) ){
		$include_from_google[$typography['h3']['family']] = $google_fonts[$typography['h3']['family']];
	}
	
	if( isset($google_fonts[$typography['h4']['family']]) ){
		$include_from_google[$typography['h4']['family']] = $google_fonts[$typography['h4']['family']];
	}
	
	if( isset($google_fonts[$typography['h5']['family']]) ){
		$include_from_google[$typography['h5']['family']] = $google_fonts[$typography['h5']['family']];
	}
	
	if( isset($google_fonts[$typography['h6']['family']]) ){
		$include_from_google[$typography['h6']['family']] = $google_fonts[$typography['h6']['family']];
	}

	// set a option in db for save google fonts link
	update_option( 'fw_theme_google_fonts_link', $include_from_google );
}
add_action('fw_settings_form_saved', '_action_theme_process_google_fonts', 999, 2);
endif;

if (!function_exists('fw_theme_get_remote_fonts')) :
/**
 * Get remote fonts
 * @param array $include_from_google
 */
function fw_theme_get_remote_fonts($include_from_google) {
	if ( ! sizeof( $include_from_google ) ) {
		return '';
	}

	$html = "<link href='http://fonts.googleapis.com/css?family=";

	foreach ( $include_from_google as $font => $styles ) {
		$html .= str_replace( ' ', '+', $font ) . ':' . implode( ',', $styles['variants'] ) . '|';
	}

	$html = substr( $html, 0, - 1 );
	$html .= "' rel='stylesheet' type='text/css'>";

	return $html;
}
endif;

if (!function_exists('_action_theme_print_google_fonts_link')) :
/**
 * Print google fonts link
 */
function _action_theme_print_google_fonts_link() {
	
	$google_fonts_link = get_option('fw_theme_google_fonts_link', '');
	$google_fonts_link = fw_theme_get_remote_fonts($google_fonts_link);
	if($google_fonts_link != ''){
		echo $google_fonts_link;
	}
}
add_action('wp_head', '_action_theme_print_google_fonts_link');
endif;
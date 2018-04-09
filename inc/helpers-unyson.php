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
  /*
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
  /*
   * Checks the page if it's using Unyson page builder and adds class to body tag
   */
  function lastimosa_ext_page_builder_is_builder_post( $classes ) {
      global $post;
      if (function_exists('fw_ext_page_builder_is_builder_post') && fw_ext_page_builder_is_builder_post($post->ID)) {
          $classes[] = 'unyson page-builder';
      }
      return $classes;
  }
  add_filter( 'body_class', 'lastimosa_ext_page_builder_is_builder_post' );
endif;

if(!function_exists('lastimosa_theme_mods')) :
  /*
   * Theme mods
   */
  function lastimosa_theme_mods() {
    $theme_layout = lastimosa_get_option('theme_layout'); 
		if(!empty($theme_layout['site-layout']['layout'])){
			$box_class = esc_attr($theme_layout['site-layout']['layout']);
			$box_container_start = '<box '. lastimosa_attr_to_html( array('class' => $box_class) ) .'>';
      set_theme_mod( 'box_container_start', $box_container_start );
			set_theme_mod( 'box_container_end', '</box>' );
		}else{
	    set_theme_mod( 'box_container_start', '' );
			set_theme_mod( 'box_container_end', '' ); 
    }

    $header_class = array( 'site-header' );
    $header_class[] = get_post_meta( get_the_ID(), 'header-options', true ); 
    $header_layout = lastimosa_get_option('header_layout' ); 
    $header_class[] = $header_layout['selected'];
    $header_class = join(' ', $header_class );	
    set_theme_mod( 'header_class', $header_class );
    set_theme_mod( 'header_layout_selected', $header_layout['selected'] );
  }
  add_action( 'init', 'lastimosa_theme_mods' );
endif;
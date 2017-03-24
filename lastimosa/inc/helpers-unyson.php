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
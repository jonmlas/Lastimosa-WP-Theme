<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Direct access forbidden.' ); }

/**
 * Checks if Unyson plugin is installed
 */
if (defined('FW')):
    // the framework was already included in another place, so this version will be inactive/ignored
else:
    require dirname(__FILE__) .'/framework/bootstrap.php';
endif;

/**
 * Checks if Unyson plugin is installed and activated.
 */
if(!function_exists('unyson_check')) {
	function admin_notice_unyson_error() {
		$class = 'notice notice-error is-dismissible';
		$message = __( 'Lastimosa Theme is preinstalled with Unyson Framework. If you want to get the latest version of Unyson, please install and activate the plugin.', 'lastimosa' );
		printf( '<div class="%1$s"><p>%2$s</p></div>', $class, $message ); 
	}

	function unyson_check() {
		include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
		if ( !is_plugin_active( 'unyson/unyson.php' ) ) {
			if(is_admin()) {
				add_action( 'admin_notices', 'admin_notice_unyson_error' );
			}else{
				//die( '<h1 align="center"><br /><br />Unyson plugin must be installed and activated!</h1>' );
			}
		}
	}
	add_action( 'init', 'unyson_check' );
}

// Check for php version in order to run Lastimosa Theme properly
// Minimum required version.
define( 'THEME_REQUIRED_PHP_VERSION', '5.3' );

add_action( 'after_switch_theme', 'check_theme_setup' );
function check_theme_setup(){
	
	// Compare versions.
	if ( version_compare(phpversion(), THEME_REQUIRED_PHP_VERSION, '<') ) :
	
	// Theme not activated info message.
	add_action( 'admin_notices', 'my_admin_notice' );
	function my_admin_notice() {
		?>
		<div class="update-nag">
			<?php _e( 'You need to update your PHP version to run Lastimosa Theme.', 'text-domain' ); ?> <br />
			<?php _e( 'Actual version is:', 'text-domain' ) ?> <strong><?php echo phpversion(); ?></strong>, <?php _e( 'required is', 'text-domain' ) ?> <strong><?php echo THEME_REQUIRED_PHP_VERSION; ?></strong>
		</div>
		<?php
	}
	
	// Switch back to previous theme.
	switch_theme( $old_theme->stylesheet );
	return false;
	
	endif;
}
// Php version check end.


/**
 * Theme Includes
 */
require_once dirname( __FILE__ ) .'/inc/init.php';

if(! function_exists('lastimosa_action_theme_register_required_plugins')) :
/**
 * TGM Plugin Activation
 */

require_once dirname( __FILE__ ) . '/inc/TGM-Plugin-Activation/class-tgm-plugin-activation.php';

/** @internal */
function lastimosa_action_theme_register_required_plugins() {
	tgmpa( array(
		array(
			'name'      => 'Unyson',
			'slug'      => 'unyson',
			'required'  => false,
		),
		// LayerSlider config
		/*array(
			'name' => 'LayerSlider WP',
			'slug' => 'LayerSlider',
			'source' => get_template_directory_uri() . '/plugins/LayerSlider.zip',
			'required' => false,
			'version' => '5.6.2',
			'force_activation' => true,
			'force_deactivation' => true
		),*/
		array(
			'name'      => 'Duplicate Post',
			'slug'      => 'duplicate-post',
			'required'  => false,
		),
		array(
			'name'      => 'Black Studio TinyMCE Widget',
			'slug'      => 'black-studio-tinymce-widget',
			'required'  => false,
		),
	) );

}
add_action( 'tgmpa_register', 'lastimosa_action_theme_register_required_plugins' );
endif;

// Register your custom function to override some LayerSlider data
add_action('layerslider_ready', 'my_layerslider_overrides');
function my_layerslider_overrides() {
 
    // Disable auto-updates
    $GLOBALS['lsAutoUpdateBox'] = false;
}

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


// Start of Google Font embed
if(!function_exists('_action_theme_process_google_fonts')) {
    function _action_theme_process_google_fonts()
    {
        $include_from_google = array();
        $google_fonts = fw_get_google_fonts();
		//$google_fonts = fw_get_google_fonts_v2();

        $main_menu = fw_get_db_settings_option('header_menu');
		$main_menu_typography = $main_menu[$main_menu['selected']]['typography'];
		$typographys = fw_get_db_settings_option('typography');
		$body_typography = $typographys['body'];
		$h1_typography = $typographys['h1'];
		$h2_typography = $typographys['h2'];
		$h3_typography = $typographys['h3'];
		$h4_typography = $typographys['h4'];
		$h5_typography = $typographys['h5'];
		$h6_typography = $typographys['h6'];
		
        //$your_typography_option_2 = fw_get_db_settings_option('your_typography_option_2');
		
        // if is google font
		
		if( isset($google_fonts[$main_menu_typography['family']]) ){
            $include_from_google[$main_menu_typography['family']] = $google_fonts[$main_menu_typography['family']];
        }
		
      if( isset($google_fonts[$body_typography['family']]) ){
            $include_from_google[$body_typography['family']] = $google_fonts[$body_typography['family']];
        }
		
		if( isset($google_fonts[$h1_typography['family']]) ){
            $include_from_google[$h1_typography['family']] = $google_fonts[$h1_typography['family']];
        }
		
		if( isset($google_fonts[$h2_typography['family']]) ){
            $include_from_google[$h2_typography['family']] = $google_fonts[$h2_typography['family']];
        }
		
		if( isset($google_fonts[$h3_typography['family']]) ){
            $include_from_google[$h3_typography['family']] = $google_fonts[$h3_typography['family']];
        }
		
		if( isset($google_fonts[$h4_typography['family']]) ){
            $include_from_google[$h4_typography['family']] = $google_fonts[$h4_typography['family']];
        }
		
		if( isset($google_fonts[$h5_typography['family']]) ){
            $include_from_google[$h5_typography['family']] = $google_fonts[$h5_typography['family']];
        }
		
		if( isset($google_fonts[$h6_typography['family']]) ){
            $include_from_google[$h6_typography['family']] = $google_fonts[$h6_typography['family']];
        }

       /* if( isset($google_fonts[$your_typography_option_1['family']]) ){
            $include_from_google[$your_typography_option_2['family']] =   $google_fonts[$your_typography_option_2['family']];
        }*/

        $google_fonts_links = fw_theme_get_remote_fonts($include_from_google);
        // set a option in db for save google fonts link
        update_option( 'fw_theme_google_fonts_link', $google_fonts_links );
    }
    add_action('fw_settings_form_saved', '_action_theme_process_google_fonts', 999, 2);
}

if (!function_exists('fw_theme_get_remote_fonts')) :
    function fw_theme_get_remote_fonts($include_from_google) {
        /**
         * Get remote fonts
         * @param array $include_from_google
         */
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
    function _action_theme_print_google_fonts_link() {
        /**
         * Print google fonts link
         */
        $google_fonts_link = get_option('fw_theme_google_fonts_link', '');
        if($google_fonts_link != ''){
            echo $google_fonts_link;
        }
    }
    add_action('wp_head', '_action_theme_print_google_fonts_link');
endif;
<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Direct access forbidden.' ); }

if(!function_exists('lastimosa_check_theme_setup')) :
	/**
	 * Check for php version in order to run Lastimosa Theme properly
	 */
// Minimum required version.
define( 'THEME_REQUIRED_PHP_VERSION', '5.3' );

function lastimosa_check_theme_setup(){
	
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
add_action( 'after_switch_theme', 'lastimosa_check_theme_setup' );
endif;

if(!function_exists('lastimosa_starter_reminder')) :
	/**
	 * Add Welcome message to dashboard
	 */
	function lastimosa_starter_reminder(){
		$theme_page_url = 'http://theme.lastimosa.com.ph';
		if(!get_option( 'triggered_welcome')){
			$message = sprintf(__( 'Welcome to Lastimosa Theme! Before diving in to your new theme, please visit the <a style="color: #fff; font-weight: bold;" href="%1$s" target="_blank">theme\'s</a> page for access to dozens of tips and in-depth tutorials.', 'lastimosa' ),
			esc_url( $theme_page_url )
			);

			printf(
				'<div class="notice is-dismissible" style="background-color: #006799; color: #fff; border-left: none;">
					<p>%1$s</p>
				</div>',
				$message
			);
			add_option( 'triggered_welcome', '1', '', 'yes' );
		}
	}
	add_action( 'admin_notices', 'lastimosa_starter_reminder' );
endif;

if(!function_exists('lastimosa_unyson_check')) {
/**
 * Checks if Unyson plugin is installed and activated.
 */
	function admin_notice_unyson_error() {
		$class = 'notice notice-error is-dismissible';
		$message = __( 'Lastimosa Theme requires Unyson plugin to make it work properly. Install and activate it <a href="'.admin_url().'themes.php?page=tgmpa-install-plugins"/>here</a>.', 'lastimosa' );
		printf( '<div class="%1$s"><p>%2$s</p></div>', $class, $message ); 
	}

	function lastimosa_unyson_check() {
		if ( !is_plugin_active( 'unyson/unyson.php' ) ) {
			if(is_admin()) {
				add_action( 'admin_notices', 'admin_notice_unyson_error' );
			}else{
				//die( '<h1 align="center"><br /><br />Unyson plugin must be installed and activated!</h1>' );
			}
		}
	}
	add_action( 'init', 'lastimosa_unyson_check' );
}

if(! function_exists('lastimosa_action_theme_register_required_plugins')) :
	/**
	 * TGM Plugin Activation
	 */
	require_once dirname( __FILE__ ) . '/TGM-Plugin-Activation/class-tgm-plugin-activation.php';
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

if(!function_exists('_action_theme_process_google_fonts')) :
	function lastimosa_layerslider_overrides() {
	/**
	 * Register your custom function to override some LayerSlider data
	 */
			// Disable auto-updates
			$GLOBALS['lsAutoUpdateBox'] = false;
	}
	add_action('layerslider_ready', 'lastimosa_layerslider_overrides');
endif;


if(!function_exists('_action_theme_process_google_fonts')) {
	/**
	 * Embed Google Font 
	 */
    function _action_theme_process_google_fonts()
    {
			$include_from_google = array();
			$google_fonts = fw_get_google_fonts();
			//$google_fonts = fw_get_google_fonts_v2();

			$typographys = lastimosa_get_option('typography');
			$body = $typographys['body'];
			$h1 = $typographys['h1'];
			$h2 = $typographys['h2'];
			$h3 = $typographys['h3'];
			$h4 = $typographys['h4'];
			$h5 = $typographys['h5'];
			$h6 = $typographys['h6'];
			if( isset($google_fonts[$body['family']]) )		   	$include_from_google[$body['family']] = $google_fonts[$body['family']];
			if( isset($google_fonts[$h1['family']]) )		    	$include_from_google[$h1['family']] = $google_fonts[$h1['family']];
			if( isset($google_fonts[$h2['family']]) )		    	$include_from_google[$h2['family']] = $google_fonts[$h2['family']];
			if( isset($google_fonts[$h3['family']]) )		    	$include_from_google[$h3['family']] = $google_fonts[$h3['family']];		
			if( isset($google_fonts[$h4['family']]) )			   	$include_from_google[$h4['family']] = $google_fonts[$h4['family']];		
			if( isset($google_fonts[$h5['family']]) )		    	$include_from_google[$h5['family']] = $google_fonts[$h5['family']];	
			if( isset($google_fonts[$h6['family']]) )		    	$include_from_google[$h6['family']] = $google_fonts[$h6['family']];
			
			$header_menu = lastimosa_get_option('header_menu');
			$menu 		= $header_menu[$header_menu['selected']]['menu']['typography'];
			$submenu 	= $header_menu[$header_menu['selected']]['submenu']['typography'];
			$megamenu_header = $header_menu[$header_menu['selected']]['megamenu']['heading_typography'];
			$megamenu = $header_menu[$header_menu['selected']]['megamenu']['typography'];
			if( isset($google_fonts[$menu['family']]) )								$include_from_google[$menu['family']] = $google_fonts[$menu['family']];
			if( isset($google_fonts[$submenu['family']]) )						$include_from_google[$submenu['family']] = $google_fonts[$submenu['family']];
			if( isset($google_fonts[$megamenu_header['family']]) )		$include_from_google[$megamenu_header['family']] = $google_fonts[$megamenu_header['family']];
			if( isset($google_fonts[$megamenu['family']]) )						$include_from_google[$megamenu['family']] = $google_fonts[$megamenu['family']];
			
			$footer_widgets = lastimosa_get_option('footer_widgets');
			$footer_widgets_heading_typography = $footer_widgets['yes']['heading_typography'];
			$footer_widgets_typography = $footer_widgets['yes']['typography'];
			if( isset($google_fonts[$footer_widgets_heading_typography['family']]) )				$include_from_google[$footer_widgets_heading_typography['family']] = $google_fonts[$footer_widgets_heading_typography['family']];
			if( isset($google_fonts[$footer_widgets_typography['family']]) )								$include_from_google[$footer_widgets_typography['family']] = $google_fonts[$footer_widgets_typography['family']];
			
			$footer_menu = lastimosa_get_option('footer_menu');
			if( isset($google_fonts[$footer_menu['family']]) )															$include_from_google[$footer_menu['family']] = $google_fonts[$footer_menu['family']];
			
			$footer_copyright = lastimosa_get_option('footer_copyright');
			if( isset($google_fonts[$footer_copyright['family']]) )													$include_from_google[$footer_copyright['family']] = $google_fonts[$footer_copyright['family']];
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


/*!
 * WP Visual Editor Custom Formats
 */
function wpb_mce_buttons_2($buttons) {
    array_unshift($buttons, 'styleselect');
    return $buttons;
}
//add_filter('mce_buttons_2', 'wpb_mce_buttons_2');

/*
* Callback function to filter the MCE settings
*/
 
function my_mce_before_init_insert_formats( $init_array ) {  
 
// Define the style_formats array
 
    $style_formats = array(  
/*
* Each array child is a format with it's own settings
* Notice that each array has title, block, classes, and wrapper arguments
* Title is the label which will be visible in Formats menu
* Block defines whether it is a span, div, selector, or inline style
* Classes allows you to define CSS classes
* Wrapper whether or not to add a new block-level element around any selected elements
*/
        array(  
            'title' => 'Content Block',  
            'block' => 'span',  
            'classes' => 'content-block',
            'wrapper' => true,
             
        ),  
        array(  
            'title' => 'Blue Button',  
            'block' => 'span',  
            'classes' => 'blue-button',
            'wrapper' => true,
        ),
        array(  
            'title' => 'Red Button',  
            'block' => 'span',  
            'classes' => 'red-button',
            'wrapper' => true,
        ),
    );  
    // Insert the array, JSON ENCODED, into 'style_formats'
    $init_array['style_formats'] = json_encode( $style_formats );  
     
    return $init_array;  
   
} 
// Attach callback to 'tiny_mce_before_init' 
// add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' ); 

<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Direct access forbidden.' ); }

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
 * Checks if Unyson plugin is installed and activated.
 */
if(!function_exists('unyson_check')) {
	function admin_notice_unyson_error() {
		$class = 'notice notice-error is-dismissible';
		$message = __( 'Lastimosa Theme requires Unyson plugin to make it work properly. Install and activate it <a href="'.admin_url().'themes.php?page=tgmpa-install-plugins"/>here</a>.', 'lastimosa' );
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
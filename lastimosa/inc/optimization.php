<?php if ( ! defined( 'ABSPATH' ) ) die( 'Direct access forbidden.' );

/////////////////////////////////////////////////////////////////////////
// Speed Performance Improvements                                      //
/////////////////////////////////////////////////////////////////////////

# Remove WordPress' canonical links
remove_action('wp_head', 'rel_canonical');


if(! function_exists('lastimosa_at_remove_dup_canonical_link')) :
	/*
	 * Remove Canonical Link Added By Yoast WordPress SEO Plugin
	 */
	function lastimosa_at_remove_dup_canonical_link() {
		return false;
	}
	add_filter( 'wpseo_canonical', 'lastimosa_at_remove_dup_canonical_link' );
	endif;


	if(! function_exists('lastimosa_remove_script_version')) :
	/*
	 * Remove query strings from static resources
	 */
	function lastimosa_remove_script_version( $src ){
		$parts = explode( '?ver', $src );
		return $parts[0];
	}
	add_filter( 'script_loader_src', 'lastimosa_remove_script_version', 15, 1 );
	add_filter( 'style_loader_src', 'lastimosa_remove_script_version', 15, 1 );
endif;


if(! function_exists('lastimosa_theme_activate')) :
/*
 * Insert Scripts in .htaccess during theme activation
 */
function lastimosa_theme_activate($oldname, $oldtheme=false) {
	require_once(ABSPATH.'/wp-admin/includes/file.php');
	require_once(ABSPATH.'/wp-admin/includes/misc.php');
	$rules = array();
	$rules[] = '#Enable keep-alive';
	$rules[] = '<ifModule mod_headers.c>';
	$rules[] = 'Header set Connection keep-alive';
	$rules[] = '</ifModule>';
	$rules[] = '';
	$rules[] = '# Compress text, html, javascript, css, xml:';
	$rules[] = 'AddOutputFilterByType DEFLATE text/plain';
	$rules[] = 'AddOutputFilterByType DEFLATE text/html';
	$rules[] = 'AddOutputFilterByType DEFLATE text/xml';
	$rules[] = 'AddOutputFilterByType DEFLATE text/css';
	$rules[] = 'AddOutputFilterByType DEFLATE application/xml';
	$rules[] = 'AddOutputFilterByType DEFLATE application/xhtml+xml';
	$rules[] = 'AddOutputFilterByType DEFLATE application/rss+xml';
	$rules[] = 'AddOutputFilterByType DEFLATE application/javascript';
	$rules[] = 'AddOutputFilterByType DEFLATE application/x-javascript';
	$rules[] = 'AddType x-font/otf .otf';
	$rules[] = 'AddType x-font/ttf .ttf';
	$rules[] = 'AddType x-font/eot .eot';
	$rules[] = 'AddType x-font/woff .woff';
	$rules[] = 'AddType image/x-icon .ico';
	$rules[] = 'AddType image/png .png';
	$rules[] = '';
	$rules[] = '# Expires Header Caching #';
	$rules[] = '<IfModule mod_expires.c>';
	$rules[] = 'ExpiresActive on';
	$rules[] = 'ExpiresByType image/jpg "access 1 year"';
	$rules[] = 'ExpiresByType image/jpeg "access 1 year"';
	$rules[] = 'ExpiresByType image/gif "access 1 year"';
	$rules[] = 'ExpiresByType image/png "access 1 year"';
	$rules[] = 'ExpiresByType image/ico "access 1 year"';
	$rules[] = 'ExpiresByType text/css "access 1 month"';
	$rules[] = 'ExpiresByType application/pdf "access 1 month"';
	$rules[] = 'ExpiresByType application/javascript "access 1 month"';
	$rules[] = 'ExpiresByType application/x-javascript "access 1 month"';
	$rules[] = 'ExpiresByType application/x-shockwave-flash "access 1 month"';
	$rules[] = 'ExpiresByType image/x-icon "access 1 year"';
	$rules[] = 'ExpiresDefault "access 2 days"';
	$rules[] = '</IfModule>';
	$rules[] = '# Expires Header Caching #';

	$htaccess_file = ABSPATH.'.htaccess';
	insert_with_markers($htaccess_file, 'Custom Expires header', (array) $rules);
}

// Theme Deactivation
function lastimosa_theme_deactivate($newname, $newtheme) {
	require_once(ABSPATH.'/wp-admin/includes/misc.php');
	$htaccess_file = ABSPATH.'.htaccess';
	insert_with_markers($htaccess_file, 'Custom Expires header', '');
}

add_action('after_switch_theme', 'lastimosa_theme_activate', 10 ,  2);
add_action('switch_theme', 'lastimosa_theme_deactivate', 10 , 2);
endif;


/**
 * Minify HTML and Javascript
 */
//require_once dirname( __FILE__ ) .'/minify.php';
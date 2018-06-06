<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Direct access forbidden.' ); }
/**
 * Register menus
 */

$header_topbar = lastimosa_get_option('header_topbar');
if($header_topbar['yes']['topbar_left_menu']['display'] == 'yes') :
	register_nav_menus( array(
		'top-left'   => __( 'Top left menu', 'unyson' )
	) );
endif;

if($header_topbar['yes']['topbar_right_menu']['display'] == 'yes') :
	register_nav_menus( array(
		'top-right'   => __( 'Top right menu', 'unyson' )
	) );
endif;

/**
 * Register menus
 */
$header_layout  = lastimosa_get_option('header_layout');
$lastimosa_menu_locations = array(
	'primary'		=> __( 'Primary menu', 'unyson' ),
	'footer' 		=> __( 'Footer menu', 'unyson' ),
);
if($header_layout['style']['selected'] == 'style-3') {
	$lastimosa_menu_locations = array(
		'primary'		=> __( 'Primary menu', 'unyson' ),
		'secondary'	=> __( 'Secondary menu', 'unyson' ),
		'footer' 		=> __( 'Footer menu', 'unyson' ),
	);
}
register_nav_menus( $lastimosa_menu_locations );


global $lastimosa_menus;
$lastimosa_menus = array(
	'primary'   => array(
		'theme_location'  => 'primary',
		'depth'           => 4,
		'container'       => 'nav',
		'container_id'    => 'primary-navigation',
		'container_class' => 'site-navigation primary-navigation',
		'menu_class'      => 'nav-menu',
		'link_before'     => '<span>',
		'link_after'      => '</span>',
		'item_spacing'    => 'discard',
		'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
		'walker'          => new wp_bootstrap_navwalker()
	),
	'secondary' => array(
		'theme_location'  => 'secondary',
		'depth'           => 4,
		'container'       => 'nav',
		'container_id'    => 'secondary-navigation',
		'container_class' => 'site-navigation secondary-navigation',
		'menu_class'      => 'nav-menu',
		'link_before'     => '<span>',
		'link_after'      => '</span>',
		'item_spacing'    => 'discard',
		'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
		'walker'          => new wp_bootstrap_navwalker()
	),
	'footer'    => array(
		'theme_location'  => 'footer',
		'depth'           => 1,
		'container'       => 'nav',
		'container_id'    => 'footer-menu',
		'container_class' => 'footer-menu',
		'menu_class'      => '',
		'item_spacing'    => 'discard',
		'link_before'     => '<span>',
		'link_after'      => '</span>'
	)
);

if ( ! function_exists( 'lastimosa_nav_menu' ) ) :
	/**
	 * Displays the nav menu
	 */
	function lastimosa_nav_menu( $menu_type ) { 
		global $lastimosa_menus;
		if ( !isset( $lastimosa_menus[ $menu_type ] ) ) {
			return;
		}
    	wp_nav_menu( $lastimosa_menus[ $menu_type ] );  

	}
endif;
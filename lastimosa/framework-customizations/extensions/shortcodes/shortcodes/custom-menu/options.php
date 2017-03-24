<?php if (!defined('FW')) die('Forbidden');

// Get menus
$menus = wp_get_nav_menus();

if(!empty($menus)) {
	foreach ( $menus as $menu ) :
		$menu_list[$menu->slug] = $menu->name;
	endforeach;
}else{
	$menu_list[''] = __( 'No menus found. Please create a new menu.', 'unyson' );
}

$options = array(
	'title' => array(
		'label'   => __('Title', 'unyson'),
		'desc'    => __('', 'unyson'),
		'type'    => 'text',
	),
	'menu'        => array(
		'label'   => __( 'Select Menu', 'unyson' ),
		'type'    => 'select',
		'desc'    => __( '', 'unyson' ),
		'choices' => $menu_list,
	),
	'depth'                    => array(
		'label'   => __( 'Select Menu', 'unyson' ),
		'type'    => 'select',
		'desc'    => __( '', 'unyson' ),
		'choices' => array(
			0   => __( 'Unlimited', 'unyson' ),
			1   => __( 'Parents Only', 'unyson' ),
			2   => __( 'Until 1st Sub-menu Only', 'unyson' ),
			3   => __( 'Until 2nd Sub-menu Only', 'unyson' ),
			4   => __( 'Until 3rd Sub-menu Only', 'unyson' ),
		),
	),
);
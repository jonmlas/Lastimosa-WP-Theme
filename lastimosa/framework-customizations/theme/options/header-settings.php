<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'header_container' => array(
		'title'   => __( 'Header', 'lastimosa' ),
		'type'    => 'tab',
		'options' => array(
			'header' => array(
				'title'   => __( 'Header Settings', 'lastimosa' ),
				'type'    => 'box',
				'options' => array(
					'tab_topbar' => array(
						'title'   => __( 'Top Bar', 'lastimosa' ),
						'type'    => 'tab',
						'options' => array(
							'header_topbar_box' => array(
								'title'   => __( 'Top Bar Settings', 'lastimosa' ),
								'type'    => 'box',
								'options' => array(
									fw()->theme->get_options( 'header-topbar' ),
								),
							),
						),
					),
					'tab_layout' => array(
						'title'   => __( 'Layout', 'lastimosa' ),
						'type'    => 'tab',
						'options' => array(
							'header_layout_box' => array(
								'title'   => __( 'Layout Settings', 'lastimosa' ),
								'type'    => 'box',
								'options' => array(
									fw()->theme->get_options( 'header-layout' ),
								),
							),
						),
					),
					'tab_logo' => array(
						'title'   => __( 'Logo', 'lastimosa' ),
						'type'    => 'tab',
						'options' => array(
							'header_logo_box' => array(
								'title'   => __( 'Logo Settings', 'lastimosa' ),
								'type'    => 'box',
								'options' => array(
									fw()->theme->get_options( 'header-logo' ),
								),
							),
						),
					),
					'tab_menu' => array(
						'title'   => __( 'Menu (Desktop)', 'lastimosa' ),
						'type'    => 'tab',
						'options' => array(
							'header_logo_box' => array(
								'title'   => __( 'Menu Settings (Desktop)', 'lastimosa' ),
								'type'    => 'box',
								'options' => array(
									fw()->theme->get_options( 'header-menu' ),
								),
							),
						),
					),
					'tab_menu_mobile' => array(
						'title'   => __( 'Menu (Mobile)', 'lastimosa' ),
						'type'    => 'tab',
						'options' => array(
							'header_logo_box' => array(
								'title'   => __( 'Menu Settings (Mobile)', 'lastimosa' ),
								'type'    => 'box',
								'options' => array(
									fw()->theme->get_options( 'header-menu-mobile' ),
								),
							),
						),
					),
					'tab_info' => array(
						'title'   => __( 'Content', 'lastimosa' ),
						'type'    => 'tab',
						'options' => array(
							'header_logo_box' => array(
								'title'   => __( 'Header Information', 'lastimosa' ),
								'type'    => 'box',
								'options' => array(
									fw()->theme->get_options( 'header-info' ),
								),
							),
						),
					),
					'tab_button' => array(
						'title'   => __( 'CTA Button', 'lastimosa' ),
						'type'    => 'tab',
						'options' => array(
							'header_logo_box' => array(
								'title'   => __( 'Header CTA Settings', 'lastimosa' ),
								'type'    => 'box',
								'options' => array(
									fw()->theme->get_options( 'header-button' ),
								),
							),
						),
					),
				),
			),
		),
	),
);
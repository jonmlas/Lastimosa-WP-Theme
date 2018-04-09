<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'header_container' => array(
		'title'   => __( 'Header', 'unyson' ),
		'type'    => 'tab',
		'options' => array(
			'header' => array(
				'title'   => __( 'Header Settings', 'unyson' ),
				'type'    => 'box',
				'options' => array(
					'tab_topbar' => array(
						'title'   => __( 'Top Bar', 'unyson' ),
						'type'    => 'tab',
						'options' => array(
							'header_topbar_box' => array(
								'title'   => __( 'Top Bar Settings', 'unyson' ),
								'type'    => 'box',
								'options' => array(
									fw()->theme->get_options( 'header-topbar' ),
								),
							),
						),
					),
					'tab_layout' => array(
						'title'   => __( 'Layout', 'unyson' ),
						'type'    => 'tab',
						'options' => array(
							'header_layout_box' => array(
								'title'   => __( 'Layout Settings', 'unyson' ),
								'type'    => 'box',
								'options' => array(
									fw()->theme->get_options( 'header-layout' ),
								),
							),
						),
					),
					'tab_logo' => array(
						'title'   => __( 'Logo', 'unyson' ),
						'type'    => 'tab',
						'options' => array(
							'header_logo_box' => array(
								'title'   => __( 'Logo Settings', 'unyson' ),
								'type'    => 'box',
								'options' => array(
									fw()->theme->get_options( 'header-logo' ),
								),
							),
						),
					),
					'tab_menu' => array(
						'title'   => __( 'Menu', 'unyson' ),
						'type'    => 'tab',
						'options' => array(
							'header_logo_box' => array(
								'title'   => __( 'Main Menu Settings', 'unyson' ),
								'type'    => 'box',
								'options' => array(
									fw()->theme->get_options( 'header-menu' ),
								),
							),
						),
					),
					'tab_info' => array(
						'title'   => __( 'Content', 'unyson' ),
						'type'    => 'tab',
						'options' => array(
							'header_logo_box' => array(
								'title'   => __( 'Header Information', 'unyson' ),
								'type'    => 'box',
								'options' => array(
									fw()->theme->get_options( 'header-info' ),
								),
							),
						),
					),
					'tab_button' => array(
						'title'   => __( 'CTA Button', 'unyson' ),
						'type'    => 'tab',
						'options' => array(
							'header_logo_box' => array(
								'title'   => __( 'Header CTA Settings', 'unyson' ),
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
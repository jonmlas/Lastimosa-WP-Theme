<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'footer_container' => array(
		'title'   => __( 'Footer', 'unyson' ),
		'type'    => 'tab',
		'options' => array(
			'footer' => array(
				'title'   => __( 'Footer Settings', 'unyson' ),
				'type'    => 'box',
				'options' => array(
					'tab_widget' => array(
						'title'   => __( 'Footer Widget', 'unyson' ),
						'type'    => 'tab',
						'options' => array(
							'footer_widget_box' => array(
								'title'   => __( 'Footer Widget Settings', 'unyson' ),
								'type'    => 'box',
								'options' => array(
									fw()->theme->get_options( 'footer-widgets' ),
								),
							),
						),
					),
					'tab_menu' => array(
						'title'   => __( 'Footer Menu', 'unyson' ),
						'type'    => 'tab',
						'options' => array(
							'footer_menu_box' => array(
								'title'   => __( 'Menu', 'unyson' ),
								'type'    => 'box',
								'options' => array(
									fw()->theme->get_options( 'footer-menu' ),
								),
							),
						),
					),
					'tab_copyright' => array(
						'title'   => __( 'Footer Copyright', 'unyson' ),
						'type'    => 'tab',
						'options' => array(
							'footer_copyright_box' => array(
								'title'   => __( 'Footer Copyright Settings', 'unyson' ),
								'type'    => 'box',
								'options' => array(
									fw()->theme->get_options( 'footer-copyright' ),
								),
							),
						),
					),
					
				),
			),
		),
	),
);
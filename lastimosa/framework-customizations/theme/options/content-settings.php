<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'content_container' => array(
		'title'   => __( 'Content', 'unyson' ),
		'type'    => 'tab',
		'options' => array(
			'header' => array(
				'title'   => __( 'Content Settings', 'unyson' ),
				'type'    => 'box',
				'options' => array(
					'tab_typography' => array(
						'title'   => __( 'Typography', 'unyson' ),
						'type'    => 'tab',
						'options' => array(
							'typography_box' => array(
								'title'   => __( 'Typography Settings', 'unyson' ),
								'type'    => 'box',
								'options' => array(
									fw()->theme->get_options( 'content-typography' ),
								),
							),
						),
					),
					'tab_social' => array(
						'title'   => __( 'Social Profiles', 'unyson' ),
						'type'    => 'tab',
						'options' => array(
							'social_box' => array(
								'title'   => __( 'Social Profiles Settings', 'unyson' ),
								'type'    => 'box',
								'options' => array(
									fw()->theme->get_options( 'content-social' ),
								),
							),
						),
					),
					'tab_posts' => array(
						'title'   => __( 'Blog Posts', 'unyson' ),
						'type'    => 'tab',
						'options' => array(
							'social_box' => array(
								'title'   => __( 'Blog Posts Settings', 'unyson' ),
								'type'    => 'box',
								'options' => array(
									fw()->theme->get_options( 'content-posts' ),
								),
							),
						),
					),
				),
			),
		),
	),
);

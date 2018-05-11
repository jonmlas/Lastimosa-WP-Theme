<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'blog_container' => array(
		'title'   => __( 'Blog Posts', 'unyson' ),
		'type'    => 'tab',
		'options' => array(
			'header' => array(
				'title'   => __( 'Blog Settings', 'unyson' ),
				'type'    => 'box',
				'options' => array(
					'tab_posts' => array(
						'title'   => __( 'Blog Posts', 'unyson' ),
						'type'    => 'tab',
						'options' => array(
							'social_box' => array(
								'title'   => __( 'Blog Posts Settings', 'unyson' ),
								'type'    => 'box',
								'options' => array(
									fw()->theme->get_options( 'blog-posts' ),
								),
							),
						),
					),
				),
			),
		),
	),
);

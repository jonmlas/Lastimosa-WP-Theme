<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'blog_container' => array(
		'title'   => __( 'Blog Posts', 'lastimosa' ),
		'type'    => 'tab',
		'options' => array(
			'header' => array(
				'title'   => __( 'Blog Settings', 'lastimosa' ),
				'type'    => 'box',
				'options' => array(
					'tab_posts' => array(
						'title'   => __( 'Blog Posts', 'lastimosa' ),
						'type'    => 'tab',
						'options' => array(
							'social_box' => array(
								'title'   => __( 'Blog Posts Settings', 'lastimosa' ),
								'type'    => 'box',
								'options' => array(
									fw()->theme->get_options( 'blog-posts' ),
								),
							),
						),
					),
					'tab_posts_meta' => array(
						'title'   => __( 'Post Meta', 'lastimosa' ),
						'type'    => 'tab',
						'options' => array(
							'social_box' => array(
								'title'   => __( 'Blog Posts Meta', 'lastimosa' ),
								'type'    => 'box',
								'options' => array(
									fw()->theme->get_options( 'blog-posts-meta' ),
								),
							),
						),
					),
				),
			),
		),
	),
);

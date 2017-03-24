<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$uri = get_template_directory_uri();

$options = array(
	'content_posts' => array(
		'type' => 'multi',
		'label' => false,
		/*'attr' => array(
			'class' => '',
		),*/
		'inner-options' => array(
			'author-box' => array(
				'label' => __( 'Author Box', 'unyson' ),
				'type'  => 'checkbox',
				'value' => true,
				'text'  => __( 'Enable Author Box', 'unyson' ),
				'desc'  => __( 'Check to enable Author Box on Blog Posts','unyson' ),				
			),
			'tags' => array(
				'label' => __( 'Tags', 'unyson' ),
				'type'  => 'checkbox',
				'value' => true,
				'text'  => __( 'Enable Tags', 'unyson' ),
				'desc'  => __( 'Check to enable Tags on Blog Posts','unyson' ),				
			),
			'post-navigation' => array(
				'label' => __( 'Post Navigation', 'unyson' ),
				'type'  => 'checkbox',
				'value' => true,
				'text'  => __( 'Enable Post Navigation', 'unyson' ),
				'desc'  => __( 'Check to enable post Navigation on Blog Posts','unyson' ),
				
			),
			'comments'                  => array(
				'label' => __( 'Comments', 'unyson' ),
				'type'  => 'checkbox',
				'value' => true,
				'text'  => __( 'Enable Comments', 'unyson' ),
				'desc'  => __( 'Check to enable comments on Blog Posts','unyson' ),
			),
		),
	),
);
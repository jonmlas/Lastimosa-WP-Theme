<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$uri = get_template_directory_uri();

$options = array(
	'post' => array(
		'type' => 'multi',
		'label' => false,
		/*'attr' => array(
			'class' => '',
		),*/
		'inner-options' => array(
			'author_box' => array(
				'label' => __( 'Author Box', 'lastimosa' ),
				'type'  => 'checkbox',
				'value' => true,
				'text'  => __( 'Enable Author Box', 'lastimosa' ),
				'desc'  => __( 'Check to enable Author Box on Blog Posts','lastimosa' ),				
			),
			'tags' => array(
				'label' => __( 'Tags', 'lastimosa' ),
				'type'  => 'checkbox',
				'value' => true,
				'text'  => __( 'Enable Tags', 'lastimosa' ),
				'desc'  => __( 'Check to enable Tags on Blog Posts','lastimosa' ),				
			),
			'post_navigation' => array(
				'label' => __( 'Post Navigation', 'lastimosa' ),
				'type'  => 'checkbox',
				'value' => true,
				'text'  => __( 'Enable Post Navigation', 'lastimosa' ),
				'desc'  => __( 'Check to enable post Navigation on Blog Posts','lastimosa' ),
				
			),
			'comments'                  => array(
				'label' => __( 'Comments', 'lastimosa' ),
				'type'  => 'checkbox',
				'value' => true,
				'text'  => __( 'Enable Comments', 'lastimosa' ),
				'desc'  => __( 'Check to enable comments on Blog Posts','lastimosa' ),
			),
		),
	),
);
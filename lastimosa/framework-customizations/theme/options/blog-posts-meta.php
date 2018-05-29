<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$uri = get_template_directory_uri();

$options = array(
	'post_meta' => array(
		'type' => 'multi',
		'label' => false,
		/*'attr' => array(
			'class' => '',
		),*/
		'inner-options' => array(
			'post_date_meta' => array(
				'label' => __( 'Post Date', 'lastimosa' ),
				'type'  => 'checkbox',
				'value' => true,
				'text'  => __( 'Show post date', 'lastimosa' ),
				'desc'  => __( 'Check to enable post date on blog post meta','lastimosa' ),				
			),
			'author_meta' => array(
				'label' => __( 'Author', 'lastimosa' ),
				'type'  => 'checkbox',
				'value' => true,
				'text'  => __( 'Author', 'lastimosa' ),
				'desc'  => __( 'Check to enable author name on blog post meta','lastimosa' ),				
			),
			'comments_meta'                  => array(
				'label' => __( 'Comments', 'lastimosa' ),
				'type'  => 'checkbox',
				'value' => true,
				'text'  => __( 'Comments', 'lastimosa' ),
				'desc'  => __( 'Check to enable comments on blog post meta','lastimosa' ),
			),
		),
	),
);
<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$cfg = array();

$cfg['page_builder'] = array(
	'title'       => __( 'Text Block', 'lastimosa' ),
	'description' => __( 'Add a Text Block', 'lastimosa' ),
	'tab'         => __( 'Content Elements', 'lastimosa' ),
	'popup_size'    => 'medium', // can be large, medium or small
	'title_template' => '<div>{{= o.text }}</div>',
);


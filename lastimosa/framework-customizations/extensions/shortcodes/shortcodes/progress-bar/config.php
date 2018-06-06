<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$cfg = array();

$cfg['page_builder'] = array(
	'title'       => __( 'Progress Bar', 'lastimosa' ),
	'description' => __( 'Add a Progress Bar', 'lastimosa' ),
	'tab'         => __( 'Content Elements', 'lastimosa' ),
	'popup_size'    => 'medium', // can be large, medium or small
	'title_template' => 'Progress Bar: {{- o.text }}',
);
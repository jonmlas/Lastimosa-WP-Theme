<?php if ( ! defined( 'FW' ) ) { die( 'Forbidden' ); }

$cfg = array();

$cfg['page_builder'] = array(
	'title'       => __( 'Code Block', 'fw' ),
	'description' => __( 'Add a HTML/CSS/Javascript Block', 'fw' ),
	'tab'         => __( 'Content Elements', 'fw' ),
	'title_template' => '<div>{{- o.text.content }}</div>',
);
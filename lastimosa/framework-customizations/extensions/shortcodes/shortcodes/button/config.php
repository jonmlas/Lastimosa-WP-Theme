<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$cfg = array(
	'page_builder' => array(
		'title'       => __( 'Button', 'fw' ),
		'description' => __( 'Add a Button', 'fw' ),
		'tab'         => __( 'Content Elements', 'fw' ),
		'popup_size'  => 'medium',
		'title_template' => '<span class="button">{{- o.text }}</span>',
	)
);

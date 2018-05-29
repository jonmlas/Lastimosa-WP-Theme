<?php if (!defined('FW')) die('Forbidden');

$cfg = array(
	'page_builder' => array(
		'tab'         => __('Layout Elements', 'lastimosa'),
		'title'       => __('Section', 'lastimosa'),
		'description' => __('Add a Section', 'lastimosa'),
		'type'        => 'section', // WARNING: Do not edit this
		'popup_size'  => 'medium', // can be large, medium or small
		'title_template' => '{{ if (o.custom_id) { }} {{- o.custom_id}} {{ } else { }} Section {{ } }}',
	)
);
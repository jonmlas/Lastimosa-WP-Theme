<?php if (!defined('FW')) die('Forbidden');

$options = array(
	'taxonomy' => array(
		'label'   => __('Taxonomy', 'unyson'),
		'desc'    => __('Choose what taxonomy is to be displayed', 'unyson'),
		'type'    => 'select',
		'choices' => array(
			'categories'    => __('Categories', 'unyson'),
			'tags'    => __('Tags', 'unyson')
		)
	)
);
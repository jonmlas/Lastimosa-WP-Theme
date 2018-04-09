<?php if (!defined('FW')) die('Forbidden');

$cfg = array();

$cfg['page_builder'] = array(
	'title'         => __('Image', 'fw'),
	'description'   => __('Add an Image', 'fw'),
	'tab'           => __('Media Elements', 'fw'),
	'title_template' => '{{ if (o.image.src) { }} <img class="media-image {{-o.image.alignment }}" src="{{-o.image.src.url }}"/> {{ } }}',
);
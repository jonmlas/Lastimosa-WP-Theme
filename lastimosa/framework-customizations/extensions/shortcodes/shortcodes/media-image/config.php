<?php if (!defined('FW')) die('Forbidden');

$cfg = array();

$cfg['page_builder'] = array(
	'title'         => __('Image', 'fw'),
	'description'   => __('Add an Image', 'fw'),
	'tab'           => __('Media Elements', 'fw'),
	'title_template' => '{{ if (o.image) { }} <img class="media-image {{-o.float }}" src="{{-o.image.url }}"/> {{ } }}',
);
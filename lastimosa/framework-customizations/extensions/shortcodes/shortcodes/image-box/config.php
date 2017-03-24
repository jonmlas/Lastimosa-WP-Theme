<?php if (!defined('FW')) die('Forbidden');

$cfg = array(
	'page_builder' => array(
		'title'       => __( 'Image Box', 'unyson' ),
		'description' => __( 'Add an Image Box', 'unyson' ),
		'tab'         => __( 'Content Elements', 'fw' ),
		'title_template' => '{{ if (o.image.src) { }} <img class="media-image alignleft" src="{{-o.image.src.url }}"/> {{ } }}{{ if (o.heading.text) { }} <h3>{{-o.heading.text }}</h3> {{ } }}
						 {{ if (o.description.content) { }} <p>{{-o.description.content }}</p> {{ } }}',
	)
);

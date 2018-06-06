<?php if (!defined('FW')) die('Forbidden');

$cfg = array();

$cfg['page_builder'] = array(
	'title'         => __('Icon Box', 'lastimosa'),
	'description'   => __('Add an Icon Box', 'lastimosa'),
	'tab'           => __('Content Elements', 'lastimosa'),
	'popup_size'    => 'medium', // can be large, medium or small
	'title_template' => '{{ if ( o["icon"]["icon-class"] ) { }} <i class="aligncenter {{= o["icon"]["icon-class"]}}"></i> {{ } }}
						{{ if ( o["title"] ) { }} <h3 class="mb-0">{{= o["title"]}}</h3> {{ } }}
						{{ if ( o["content"] ) { }} <p>{{= o["content"]}}</p> {{ } }}',
	/*
	// Icon examples
	// Note: By default is loaded {your-shortcode}/static/img/page_builder.png
	'icon' => 'http://.../image-16x16.png', // background color should be #8c8c8c
	'icon' => 'dashicons dashicons-admin-site',
	'icon' => 'unycon unycon-crown',
	'icon' => 'fa fa-btc',
	*/

	/*
	// Title Template examples
	//
	// Syntax:
	// * {{- variable }} - Output with html escape
	// * {{= variable }} - Output raw (without html escape)
	// * {{ if (execute.any(javascript, code)) { console.log('Hi'); } }}
	//
	// Available variables:
	// * title - shortcode title (from config)
	// * o - an object with all shortcode options values
	'title_template' => '{{- title }} Lorem {{- o.option_id }} ipsum {{= o["option-id"] }}',
	'title_template' => '{{- title }}: {{- o.label }}{{ if (o.target == "_blank") { }} <span class="dashicons dashicons-external"></span>{{ 				} }}',
	*/
);
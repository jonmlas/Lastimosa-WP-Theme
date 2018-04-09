<?php if (!defined('FW')) die('Forbidden');
/* This shortcode is based on http://macarthur.me/typeit/ and http://morphext.fyianlai.com/
*/

$cfg = array();

$cfg['page_builder'] = array(
	'title'         => __('Text Rotator', 'fw'),
	'description'   => __('Add a Special Rotating Heading', 'fw'),
	'tab'           => __('Special Elements', 'fw'),
	'title_template' => '{{ if (o.heading.prepend_text || o.heading.append_text) { }} <h3>{{-o.heading.prepend_text }}{{-o.heading.append_text }}</h3> {{ } }}',
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


<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
$values = array(
	array(
		'text'  =>'Black',
		'color' =>'#000'),
	array(
		'text'  =>'White',
		'color' =>'#fff'),
	array(
		'text'  =>'Gray',
		'color' =>'#636c72'),
	array(
		'text'  =>'Red',
		'color' =>'#d9534f'),
	array(
		'text'  =>'Pink',
		'color' =>'#e91e63'),
	array(
		'text'  =>'Purple',
		'color' =>'#9c27b0'),
	array(
		'text'  =>'Deep Purple',
		'color' =>'#673ab7'),
	array(
		'text'  =>'Indigo',
		'color' =>'#3f51b5'),
	array(
		'text'  =>'Blue',
		'color' =>'#286090'),
	array(
		'text'  =>'Light Blue',
		'color' =>'#03a9f4'),
	array(
		'text'  =>'Cyan',
		'color' =>'#00bcd4'),
	array(
		'text'  =>'Teal',
		'color' =>'#009688'),
	array(
		'text'  =>'Green',
		'color' =>'#5cb85c'),
	array(
		'text'  =>'Light Green',
		'color' =>'#8bc34a'),
	array(
		'text'  =>'Lime',
		'color' =>'#cddc39'),
	array(
		'text'  =>'Yellow',
		'color' =>'#ffeb3b'),
	array(
		'text'  =>'Amber',
		'color' =>'#ffc107'),
	array(
		'text'  =>'Orange',
		'color' =>'#ff9800'),
	array(
		'text'  =>'Deep Orange',
		'color' =>'#ff5722'),
	array(
		'text'  =>'Brown',
		'color' =>'#795548'),
	array(
		'text'  =>'Glue Gray',
		'color' =>'#607d8b'),
);
$options = array(
	'theme_colors'               => array(
		'label'        => __( 'Colors', 'unyson' ),
		'type'         => 'addable-box',
		'value'        => $values,
		'box-controls' => array(//'custom' => '<small class="dashicons dashicons-smiley" title="Custom"></small>',
		),
		'box-options'  => array(
			'text'     => array(
				'label' => __( 'Color', 'unyson' ),
				'type'  => 'text',
				'value' => '',
			),
			'color'              => array(
				'label' => __( '', 'unyson' ),
				'type'  => 'color-picker',
				'value' => '',
			),
		),
		'template' => '<span style="background-color:{{- color}}; width:50px; height:auto; display:inline-block"></span> {{- text }}',
		//'limit' => 3,
	),
);
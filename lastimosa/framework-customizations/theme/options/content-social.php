<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
$values = array(
	array(
		'name'		=>'Facebook',
		'link' 		=>'#',
		'fa_code' 	=>'fa-facebook'),
	array(
		'name'		=>'Twitter',
		'link' 		=>'#',
		'fa_code' 	=>'fa-twitter'),
	array(
		'name'		=>'Google+',
		'link' 		=>'#',
		'fa_code' 	=>'fa-google-plus'),
	array(
		'name'		=>'Skype',
		'link' 		=>'#',
		'fa_code' 	=>'fa-skype'),
	array(
		'name'		=>'Youtube',
		'link' 		=>'',
		'fa_code' 	=>'fa-youtube'),
	array(
		'name'		=>'Vimeo',
		'link' 		=>'',
		'fa_code' 	=>'fa-vimeo'),
	array(
		'name'		=>'LinkedIn',
		'link' 		=>'',
		'fa_code' 	=>'fa-linkedin'),
	array(
		'name'		=>'Flickr',
		'link' 		=>'',
		'fa_code' 	=>'fa-flickr'),
	array(
		'name'		=>'Pinterest',
		'link' 		=>'',
		'fa_code' 	=>'fa-pinterest'),
	array(
		'name'		=>'Dribbble',
		'link' 		=>'',
		'fa_code' 	=>'fa-dribbble'),
	array(
		'name'		=>'Instagram',
		'link' 		=>'',
		'fa_code' 	=>'fa-instagram'),
	array(
		'name'		=>'Behance',
		'link' 		=>'',
		'fa_code' 	=>'fa-behance'),
	array(
		'name'		=>'Tumblr',
		'link' 		=>'',
		'fa_code' 	=>'fa-tumblr'),
	array(
		'name'		=>'Viadeo',
		'link' 		=>'',
		'fa_code' 	=>'fa-viadeo'),
	array(
		'name'		=>'Xing',
		'link' 		=>'',
		'fa_code' 	=>'fa-xing'),
	array(
		'name'		=>'RSS',
		'link' 		=>'#',
		'fa_code' 	=>'fa-rss'),
	array(
		'name'		=>'Email',
		'link' 		=>'#',
		'fa_code' 	=>'fa-envelope'),

);
$options = array(
	'social_profiles'  => array(
		'label'        => false,
		'type'         => 'addable-box',
		'value'        => $values,
		'box-controls' => array(//'custom' => '<small class="dashicons dashicons-smiley" title="Custom"></small>',
		),
		'box-options'  => array(
			'name'     => array(
				'label' => __( 'Name', 'unyson' ),
				'type'  => 'text',
				'value' => '',
			),
			'link'     => array(
				'label' => __( 'Link', 'unyson' ),
				'type'  => 'text',
				'value' => '',
			),
			'fa_code'     => array(
				'label' => __( 'FA Code', 'unyson' ),
				'type'  => 'text',
				'value' => '',
				'desc'  => __( 'Enter Font-Awesome Code', 'unyson' ),
			),
			
		),
		'template' => '<p><i class="fa {{- fa_code }}"></i> <strong>{{- name }}:<br /></strong> {{- link }}</p>',
		//'limit' => 3,
	),
);
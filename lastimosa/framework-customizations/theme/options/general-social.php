<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
$defaults = array(
	array(
		'name'		=> 'Facebook',
		'link' 		=> 'http://www.facebook.com',
		'icon' => array(
			'type' => 'icon-font',
			'icon-class' => 'fa fa-facebook-square',
			'icon-class-without-root' => 'fa-facebook-square',
			'pack-name' => 'font-awesome',
			'pack-css-uri' => 'http://theme.lastimosa.com.ph/wp-content/plugins/unyson/framework/static/libs/font-awesome/css/font-awesome.min.css'
		),
	),
	array(
		'name'		=> 'Twitter',
		'link' 		=> 'http://www.twitter.com',
		'icon' => array(
			'type' => 'icon-font',
			'icon-class' => 'fa fa-twitter-square',
			'icon-class-without-root' => 'fa-twitter-square',
			'pack-name' => 'font-awesome',
			'pack-css-uri' => 'http://theme.lastimosa.com.ph/wp-content/plugins/unyson/framework/static/libs/font-awesome/css/font-awesome.min.css'
		),
	),
	array(
		'name'		=> 'Instagram',
		'link' 		=> 'http://www.instagram.com',
		'icon' => array(
			'type' => 'icon-font',
			'icon-class' => 'entypo entypo-instagrem',
			'icon-class-without-root' => 'entypo-instagrem',
			'pack-name' => 'entypo',
			'pack-css-uri' => 'http://theme.lastimosa.com.ph/wp-content/plugins/unyson/framework/static/libs/font-awesome/css/font-awesome.min.css'
		),
	),
);

$options = array(
	'social_profiles'  => array(
		'label'        => false,
		'type'         => 'addable-box',
		'value'        => $defaults,
		'box-controls' => array(//'custom' => '<small class="dashicons dashicons-smiley" title="Custom"></small>',
		),
		'box-options'  => array(
			'name'     => array(
				'label' => __( 'Name', 'lastimosa' ),
				'type'  => 'text',
				'value' => '',
			),
			'link'     => array(
				'label' => __( 'Link', 'lastimosa' ),
				'type'  => 'text',
				'value' => '',
			),
			'icon'     => array(
				'type'  => 'icon-v2',
				'preview_size' => 'medium',
				'modal_size' => 'medium',
				'label' => __('Icon', 'lastimosa'),
				'desc'  => __('Select an Icon.', 'lastimosa'),
			),
		),
		'template' => '<p><strong>{{- name }}:<br /></strong> {{- link }}</p>',
		//'limit' => 3,
	),
);

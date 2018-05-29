<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$cfg = array();

$cfg['image_sizes'] = array(
	'featured-image' => array(
		'width'  => 440,
		'height' => 280,
		'crop'   => true
	),
	'gallery-image'  => array(
		'width'  => 300,
		'height' => 200,
		'crop'   => true
	)
);

$cfg['has-gallery'] = true;
<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$cfg = array();

$cfg['image_sizes'] = array(
	'featured-image' => array(
		'width'  => 440,
		'height' => 275,
		'crop'   => true
	),
	'gallery-image'  => array(
		'width'  => 1280,
		'height' => 600,
		'crop'   => true
	)
);

$cfg['has-gallery'] = true;
<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'featured'        => array(
		'label'       => __( 'Featured Image', 'unyson' ),
		'desc'        => __( 'Upload the image of the category.','unyson' ),
		'type'        => 'upload',
		'images_only' => false,
	),
);

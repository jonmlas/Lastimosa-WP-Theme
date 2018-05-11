<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * Framework options
 *
 * @var array $options Fill this array with options to generate framework settings form in backend
 */

$options = array(
	fw()->theme->get_options( 'general-settings' ),
	fw()->theme->get_options( 'header-settings' ),
	fw()->theme->get_options( 'blog-settings' ),
	fw()->theme->get_options( 'footer-settings' ),
	fw()->theme->get_options( 'demo-box' ),
);


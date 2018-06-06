<?php 
/* Lastimosa Shortcode Styles */
?>

@import "functions";

<?php
$shortcodes_parent_uri = fw_get_template_customizations_directory('/extensions/shortcodes/shortcodes/');
$shortcodes_child_uri = fw_get_stylesheet_customizations_directory('/extensions/shortcodes/shortcodes/');
$shortcodes_parent = array_diff(scandir( $shortcodes_parent_uri ), array('.', '..'));
$shortcodes_child = array_diff(scandir( $shortcodes_child_uri ), array('.', '..'));
$shortcodes = array_merge( $shortcodes_parent, $shortcodes_child );
foreach( $shortcodes as $shortcode ) {
	if ( file_exists( TEMPLATEPATH . '/framework-customizations/extensions/shortcodes/shortcodes/' . $shortcode . '/static/css/style.scss.php' ) ) {
		include( TEMPLATEPATH . '/framework-customizations/extensions/shortcodes/shortcodes/' . $shortcode . '/static/css/style.scss.php' );
	}
}
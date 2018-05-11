<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Lastimosa
 */

if ( ! is_active_sidebar( 'sidebar-right' ) ) {
	return;
}
?>

<aside id="sidebar" class="widget-area right col-md" role="complementary">
	<?php dynamic_sidebar( 'sidebar-right' ); ?>
</aside><!-- #secondary -->
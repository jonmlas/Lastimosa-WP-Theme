<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Lastimosa
 */

if ( is_active_sidebar( 'sidebar-left' ) ) : ?>
	<div id="sidebar" class="widget-area left col-md order-md-1">
		<?php dynamic_sidebar('sidebar-left'); ?>
	</div>
<?php endif; ?>
<?php if (!defined('FW')) die('Forbidden');

/**
 * @var $atts The shortcode attributes
 */

$text = $atts['text'];
$text_color = $atts['text_color'];
?>
<p style="color:<?php echo $text_color; ?>"><?php echo $text; ?></p>

<?php if(!empty($atts['title'])) {
	echo '<h3 class="title">'.$atts['title'].'</h3>';
}

wp_nav_menu( array(
	'menu'    			=> $atts['menu'],
	'menu_class'        => 'custom-menu',
	'depth'				=> $atts['depth'],
	'fallback_cb'		=> 'wp_page_menu',
	)
);
<?php if ( ! defined( 'FW' ) ) { die( 'Forbidden' ); }

if( $atts['icon']['type'] == 'none' ) return;

if( $atts['icon']['type'] == 'icon-font' ) {
	$icon_class[] = $atts['icon']['icon-class'];
	if( !empty($atts['icon_size'])) 											$icon_class[] = $atts['icon_size'];
	if( !empty($atts['icon_color'])) 											$icon_class[] = $atts['icon_color'];
	$icon_attr['class'] = join(' ', $icon_class);
	$icon = lastimosa_html_tag('i',$icon_attr);
}elseif( $atts['icon']['type'] == 'custom-upload' ) {
	//$icon_attr['src'] = $atts['icon']['url'];
	//$icon = lastimosa_html_tag('img',$icon_attr, false);
	$icon_class[] = 'img-responsive';
	$icon = wp_get_attachment_image($atts['icon']['attachment-id'], 'full', '', $icon_class );
}
if( !empty($atts['title']) ) {

	$title_class[] = 'title';
	if( !empty($atts['title_size'])) 											$title_class[] = $atts['title_size'];
	if( !empty($atts['title_color'])) 										$title_class[] = $atts['title_color'];
	$title_attr['class'] = join(' ', $title_class);
	if( $atts['icon_position'] ) {
		$atts['title'] = lastimosa_html_tag( 'span', $title_attr, $atts['title'] ) . ' ' . $icon;
	}else{
		$atts['title'] = $icon . ' ' . lastimosa_html_tag( 'span', $title_attr, $atts['title'] );
	}
}else{
	$atts['title'] = $icon;
}

$class[] = 'icon-list';
$class = array_merge( $class, lastimosa_get_option_advanced_class( $atts ) );
$attr = array();
if( !empty($class)) 											$attr['class'] = join(' ', $class);
$attr = array_merge( $attr, lastimosa_get_option_animate_attr( $atts ) );
echo lastimosa_html_tag( $atts['css_tag'], $attr, $atts['title']);
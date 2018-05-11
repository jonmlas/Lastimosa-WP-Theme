<?php if ( ! defined( 'FW' ) ) { die( 'Forbidden' ); } 

// Checks if it has user visibility defined.
if(lastimosa_options_get_user_visibility($atts)) return;

$class[] = 'btn';
$class[] 	= 'btn-'.substr($atts['id'], 0, 10);
//if(! in_array( '', $atts['margin']) )				$class[] = 'btn-'.substr($atts['id'], 0, 10);
if( !empty($atts['color']))									$class[] = $atts['color'];
if( !empty($atts['style']['selected']))			$class[] = $atts['style']['selected'];
if( !empty($atts['size']))									$class[] = $atts['size'];
if( !empty($atts['alignment']) ) {
			$class[] = $atts['alignment'];
			if( !empty($atts['alignment_responsive']['sm']) ) $class[] = $atts['alignment_responsive']['sm'];
			if( !empty($atts['alignment_responsive']['md']) ) $class[] = $atts['alignment_responsive']['md'];
			if( !empty($atts['alignment_responsive']['lg']) ) $class[] = $atts['alignment_responsive']['lg'];
			if( !empty($atts['alignment_responsive']['xl']) ) $class[] = $atts['alignment_responsive']['xl'];
		}
if(($atts['is_full_width']))								$class[] = 'btn-block';
if( !empty($atts['design']['selected']))		$class[] = $atts['design'][$atts['design']['selected']]['style'];
$class = array_merge( $class, lastimosa_get_option_advanced_class( $atts ) );
if( isset($class) ) 									$attr['class'] = join(' ', $class);

$attr['role']	=	'button';
$attr = array_merge( $attr, lastimosa_get_option_animate_attr( $atts ) );

if( $atts['icon']['type'] != 'none' ) {
	if( $atts['icon']['type'] == 'icon-font' ) {
		$icon_class[] = $atts['icon']['icon-class'];
		$icon_attr['class'] = join(' ', $icon_class);
		$icon = lastimosa_html_tag('i',$icon_attr);
	}elseif( $atts['icon']['type'] == 'custom-upload' ) {
		$icon_attr['src'] = $atts['icon']['url'];
		$icon = wp_get_attachment_image($atts['icon']['attachment-id'], 'full', '', array( "class" => "img-responsive" ) );
		//$icon = lastimosa_html_tag('img',$icon_attr, false);
	}
	if( $atts['icon_position'] ) {
		$atts['text'] = $atts['text'] . ' ' . $icon;
	}else{
		$atts['text'] = $icon . ' ' . $atts['text'];
	}
}

if(! empty($atts['link'][$atts['link']['selected']])) {
	$atts['link'][$atts['link']['selected']] = array_merge($atts['link'][$atts['link']['selected']], $attr);
	echo lastimosa_get_option_link( $atts['link'], $atts['text'] ); 
}
//fw_print($atts);
?>
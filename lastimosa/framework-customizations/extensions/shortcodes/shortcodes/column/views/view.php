<?php if (!defined('FW')) die('Forbidden');

// Column attr
$class = array();
// Link
if( !empty($atts['link'][$atts['link']['selected']]['href']) ) {
	if($atts['link']['selected'] == 'page' || $atts['link']['selected'] == 'post') {
		$link = get_permalink($atts['link'][$atts['link']['selected']]['href'][0]);
	}elseif($atts['link']['selected'] == 'media') {
		$link = $atts['link'][$atts['link']['selected']]['href']['url'];
	}else{
		$link = $atts['link'][$atts['link']['selected']]['href'];
	}
	$class[] = 'link';
	if( $atts['link'][$atts['link']['selected']]['target'] == '_self' ) {
		$attr['onclick'] = 'location.href=\'' . $link . '\';';
	}elseif( $atts['link'][$atts['link']['selected']]['target'] == '_blank' ){
		$attr['onclick'] = 'window.open( \'' . $link . '\' );';
	}
}
$class[] = fw_ext_builder_get_item_width('page-builder', $atts['width'] . '/frontend_class'); // The Front End class
$class[] = 'col-'.substr($atts['id'], 0, 10);
if(! empty($atts['alignment']))				$class[] =	$atts['alignment'];
if( !empty($class)) 						$attr['class'] = join( ' ', $class );
if($atts['custom_id']) 						$attr['id']	= sanitize_title_with_dashes($atts['custom_id']);

//Wrapper attr
$wrapper_class = array();
$wrapper_class[] = 'wrap';
if ( !empty($atts['height'])) 		$wrapper_class[] = $atts['height'];
$wrapper_class = array_merge( $wrapper_class, lastimosa_get_option_advanced_class( $atts ) );
$wrapper_class = join(' ', $wrapper_class);
$wrapper_attr = array('class' => $wrapper_class);
$wrapper_attr = array_merge( $wrapper_attr, lastimosa_get_option_animate_attr( $atts ) );
?>

<div <?php echo lastimosa_attr_to_html($attr) ?>>
	<div <?php echo lastimosa_attr_to_html($wrapper_attr) ?>>
		<?php echo do_shortcode($content); ?>
	</div>
</div>
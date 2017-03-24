<?php if (!defined('FW')) die('Forbidden');

// Column Classes
$class = array();
$class[] = fw_ext_builder_get_item_width('page-builder', $atts['width'] . '/frontend_class'); // The Front End class
if (!empty($atts['class'])) : 
	$class[] = $atts['class'];
endif;
$class = join(' ', $class);
	
if($atts['custom_id']) {
	$attr = array('id' => $atts['custom_id'],'class' => $class);
}else{
	$attr = array('class' => $class);
}

//Wrapper Classes
$wrapper_class = array();
$wrapper_class[] = 'col-wrap';
$wrapper_class[] = 'col-'.substr($atts['id'], 0, 10);
if (!empty($atts['border'])) :
	$wrapper_class[] =$atts['border'];
endif;
$wrapper_class = join(' ', $wrapper_class);
$wrapper_attr = array('class' => $wrapper_class);
?>

<div <?php echo fw_attr_to_html($attr) ?>>
	<div <?php echo fw_attr_to_html($wrapper_attr) ?>>
    	<div <?php echo fw_attr_to_html(array('class' => 'col-block')); ?>>
			<?php echo do_shortcode($content); ?>
        </div>
    </div>
</div>
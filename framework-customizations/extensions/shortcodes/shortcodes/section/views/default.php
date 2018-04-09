<?php if ( ! defined( 'FW' ) ) { die( 'Forbidden' ); }

$class = join(' ', $class);
if($atts['custom_id']) {
	$attr = array('id' => $atts['custom_id'],'class' => $class);
}else{
	$attr = array('class' => $class);
}
$wrapper_class = join(' ', $wrapper_class);
$wrapper_attr = array('class' => $wrapper_class);
?>

<section <?php echo fw_attr_to_html($attr) ?>>
	<div <?php echo fw_attr_to_html($wrapper_attr) ?>>
        <div <?php echo fw_attr_to_html(array('class' => $container_class)); ?>>
            <?php echo do_shortcode( $content ); ?>
        </div>
     </div>
</section>
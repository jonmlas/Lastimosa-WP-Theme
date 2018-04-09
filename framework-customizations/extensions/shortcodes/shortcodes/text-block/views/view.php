<?php if ( ! defined( 'FW' ) ) { die( 'Forbidden' ); }

if(!empty($atts['text']['color'])) {
	$atts['shortcode'] = 'text-block '.$atts['text']['color'];
}else{
	$atts['shortcode'] = 'text-block';
}

$attr = lastimosa_get_shortcode_attr($atts);
?>

<div <?php echo fw_attr_to_html($attr); ?>>
    <?php echo do_shortcode($atts['text']['content']); ?>
</div>

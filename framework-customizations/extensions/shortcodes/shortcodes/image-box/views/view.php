<?php if (!defined('FW')) die( 'Forbidden' ); 

$atts['shortcode'] = 'image-box media';
$attr = lastimosa_get_shortcode_attr($atts);
$atts['class'] = 'media-heading '.$atts['class']; // I want the class 'media-heading' to be displayed first
?>

<div <?php echo fw_attr_to_html($attr); ?>>
	<?php echo get_options_image($atts['image']); ?>
    <div class="media-body">
        <?php echo lastimosa_options_get_heading($atts,'heading'); ?>
        <?php if(!empty($atts['description']['content'])) {
			echo '<div '. fw_attr_to_html(array('class' => $atts['description']['color'])) .'>'.$atts['description']['content'].'</div>'; 
		} ?>
    </div>
</div>
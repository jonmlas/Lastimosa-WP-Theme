<?php if (!defined('FW')) die( 'Forbidden' ); 

if(!empty($atts['text']['color'])) {
	$atts['shortcode'] = 'special-heading '.$atts['text']['color'];
}else{
	$atts['shortcode'] = 'special-heading';
}
$attr = lastimosa_get_shortcode_attr($atts);
?>

<div <?php echo lastimosa_attr_to_html($attr); ?>>
	<?php echo lastimosa_options_get_heading($atts,'heading'); ?>
	<?php if(!empty($atts['description']['content'])) {
		echo '<div '. lastimosa_attr_to_html(array('class' => $atts['description']['color'])) .'>'.$atts['description']['content'].'</div>'; 
	} ?>
</div>
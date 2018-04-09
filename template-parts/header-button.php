<?php 

$atts = c_get_option('header_button');

//fw_print($atts);

if($atts['display'] == 'yes') :

/*if(isset($atts['yes']['alignment'])){
	$alignment = $atts['yes']['alignment'];
}*/

$primary_bg_color = $atts['yes']['background_color']['primary'];
$secondary_bg_color = $atts['yes']['background_color']['secondary'];
?>

<div id="header-button" class="pull-right<?php //echo $alignment; ?>"><a href="<?php echo esc_url($atts['yes']['link']); ?>" target="<?php echo esc_attr($atts['yes']['target']); ?>" class="btn btn-default <?php echo esc_attr($atts['yes']['full_width']); ?> <?php echo esc_attr($atts['yes']['size']); ?> <?php // esc_attr($atts['yes']['style']); ?>" style="
background-image: -ms-linear-gradient(top, <?php echo $primary_bg_color; ?> 0%, <?php echo $secondary_bg_color; ?> 100%);
background-image: -moz-linear-gradient(top, <?php echo $primary_bg_color; ?> 0%, <?php echo $secondary_bg_color; ?> 100%);
background-image: -o-linear-gradient(top, <?php echo $primary_bg_color; ?> 0%, <?php echo $secondary_bg_color; ?> 100%);
background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, <?php echo $primary_bg_color; ?>), color-stop(100, <?php echo $secondary_bg_color; ?>));
background-image: -webkit-linear-gradient(top, <?php echo $primary_bg_color; ?> 0%, <?php echo $secondary_bg_color; ?> 100%);
background-image: linear-gradient(to bottom, <?php echo $primary_bg_color; ?> 0%, <?php echo $secondary_bg_color; ?> 100%);
color:<?php echo esc_url($atts['yes']['font_color']); ?>;"><span><?php //echo $icon; ?> <?php echo $atts['yes']['label']; ?></span></a></div>

<?php endif; ?>
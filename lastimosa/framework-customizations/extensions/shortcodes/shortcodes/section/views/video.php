<?php if ( ! defined( 'FW' ) ) { die( 'Forbidden' ); } 

$class[]		= 'fw-main-row';

//Video atts
$filetype           = wp_check_filetype( $atts['style']['video']['url'] );
$filetypes          = array( 'mp4' => 'mp4', 'ogv' => 'ogg', 'webm' => 'webm', 'jpg' => 'poster' );
$filetype           = array_key_exists( (string) $filetype['ext'], $filetypes ) ? $filetypes[ $filetype['ext'] ] : 'video';
$data_name_attr	 		= version_compare( fw_ext('shortcodes')->manifest->get_version(), '1.3.9', '>=' ) ? 'data-background-options' : 'data-wallpaper-options';
$bg_video_data_attr =  json_encode( array( 'source' => array( $filetype => $atts['style']['video']['url'] )  ) ) ;
$class[] 		= 'background-video';

//Section Classes
if($atts['custom_id']) 			$attr['id'] 		= sanitize_title_with_dashes($atts['custom_id']);
if(!empty($class)) 	$attr['class'] 	= join(' ', $class);
$attr[$data_name_attr] 	= $bg_video_data_attr;
	
//Container Classes
$container_class = join(' ', $container_class);
$container_attr = array('class' => $container_class);
?>

<?php //fw_print($atts); ?>
<section <?php echo lastimosa_attr_to_html($attr) ?>>
	<div <?php echo lastimosa_attr_to_html($container_attr) ?>>
		<?php echo lastimosa_options_vertical_center_container($atts,'start'); ?>
		<?php echo do_shortcode( $content ); ?>
		<?php echo lastimosa_options_vertical_center_container($atts,'end'); ?>
	</div>
</section>
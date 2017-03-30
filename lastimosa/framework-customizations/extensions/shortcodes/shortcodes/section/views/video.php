<?php if ( ! defined( 'FW' ) ) { die( 'Forbidden' ); }

$filetype           = wp_check_filetype( $atts['style']['video']['url'] );
$filetypes          = array( 'mp4' => 'mp4', 'ogv' => 'ogg', 'webm' => 'webm', 'jpg' => 'poster' );
$filetype           = array_key_exists( (string) $filetype['ext'], $filetypes ) ? $filetypes[ $filetype['ext'] ] : 'video';
$data_name_attr = version_compare( fw_ext('shortcodes')->manifest->get_version(), '1.3.9', '>=' ) ? 'data-background-options' : 'data-wallpaper-options';
$bg_video_data_attr =  json_encode( array( 'source' => array( $filetype => $atts['style']['video']['url'] )  ) ) ;
$class[] 	= 'background-video';

$class = join(' ', $class);
	
if($atts['custom_id']) {
	$attr = array('id' => $atts['custom_id'],'class' => $class, $data_name_attr => $bg_video_data_attr);
}else{
	$attr = array('class' => $class, $data_name_attr => $bg_video_data_attr);
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
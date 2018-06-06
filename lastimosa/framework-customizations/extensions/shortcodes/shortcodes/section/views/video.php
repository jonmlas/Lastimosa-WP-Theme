<?php if ( ! defined( 'FW' ) ) { die( 'Forbidden' ); }

// Checks if it has user visibility defined.
if(lastimosa_options_get_user_visibility($atts)) return;

// Section Classes
$class 		= array();
$class[] 	= 'sec-' . substr($atts['id'], 0, 10);
$class[]		= 'fw-main-row';
$class[] 		= 'background-video';
if($atts['custom_id']) 			$attr['id'] 		= sanitize_title_with_dashes($atts['custom_id']);
if(!empty($class)) 	$attr['class'] 	= join(' ', $class);

//Video atts
$filetype           = wp_check_filetype( $atts['style']['video']['url'] );
$filetypes          = array( 'mp4' => 'mp4', 'ogv' => 'ogg', 'webm' => 'webm', 'jpg' => 'poster' );
$filetype           = array_key_exists( (string) $filetype['ext'], $filetypes ) ? $filetypes[ $filetype['ext'] ] : 'video';
$data_name_attr	 	= version_compare( fw_ext('shortcodes')->manifest->get_version(), '1.3.9', '>=' ) ? 'data-background-options' : 'data-wallpaper-options';
$bg_video_data_attr =  json_encode( array( 'source' => array( $filetype => $atts['style']['video']['url'] )  ) ) ;

// Wrapper
$wrap_class[]	= 'wrap';
$wrap_class 	= array_merge( $wrap_class, lastimosa_get_option_advanced_class( $atts ) );
$wrap_attr['class'] = join( ' ', $wrap_class );
$wrap_attr[$data_name_attr]	= $bg_video_data_attr;

//Container Classes
$container_class = array();
$container_class[] = $atts['width'];
if ( !empty($atts['height']) && !empty($atts['height']['select']) && $atts['height']['select'] != 'custom' ) 		$container_class[] = $atts['height']['select'];
if ( isset( $atts['is_vertical_center'] ) && $atts['is_vertical_center'] ) 	$container_class[] = 'vertical-center';
$container_class = join(' ', $container_class);
$container_attr = array('class' => $container_class);
	
echo '<section ' . lastimosa_attr_to_html($attr) . '>';
	echo '<div ' . lastimosa_attr_to_html($wrap_attr) . '>';
		echo '<div ' . lastimosa_attr_to_html($container_attr) . '>';
			echo lastimosa_options_vertical_center_container($atts,'start');
				echo do_shortcode( $content ); 
			echo lastimosa_options_vertical_center_container($atts,'end');
		echo '</div>';
	echo '</div>';
echo '</section>';
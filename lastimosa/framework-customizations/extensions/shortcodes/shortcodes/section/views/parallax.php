<?php if ( ! defined( 'FW' ) ) { die( 'Forbidden' ); } 
//Section Classes
if($atts['custom_id']) 			$attr['id'] 		= sanitize_title_with_dashes($atts['custom_id']);
if(!empty($class)) 	$attr['class'] 	= join(' ', $class);
$attr['data-stellar-background-ratio'] = '0.5';
//Container Classes
$container_class = join(' ', $container_class);
$container_attr['class'] = $container_class;

?>

<section <?php echo lastimosa_attr_to_html($attr) ?>>
	<div <?php echo lastimosa_attr_to_html($container_attr) ?>>
		<?php echo lastimosa_options_vertical_center_container($atts,'start'); ?>
		<?php echo do_shortcode( $content ); ?>
		<?php echo lastimosa_options_vertical_center_container($atts,'end'); ?>
	</div>
</section>
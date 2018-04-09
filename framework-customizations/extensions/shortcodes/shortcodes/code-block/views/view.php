<?php if ( ! defined( 'FW' ) ) { die( 'Forbidden' ); }

$atts['shortcode'] = 'code-block';
$attr = lastimosa_get_shortcode_attr($atts);
?>

<div <?php echo fw_attr_to_html($attr); ?>>
	<?php echo do_shortcode( $atts['text']['content'] ); ?>
</div>
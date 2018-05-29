<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
$atts['id'] = 'accordion-'.substr($atts['id'], 0, 10);

$class[] = 'fw-accordion';
$class = array_merge( $class, lastimosa_get_option_advanced_class( $atts ) );
if( isset($class) ) {
	array_unshift($class, $atts['id']);
} 
$attr['class'] = join(' ', $class);
$attr = array_merge( $attr, lastimosa_get_option_animate_attr( $atts ) );
?>

<div <?php echo lastimosa_attr_to_html($attr); ?>>
	<?php foreach ( fw_akg( 'tabs', $atts, array() ) as $tab ) : ?>
		<h3 class="fw-accordion-title"><?php echo $tab['tab_title']; ?></h3>
		<div class="fw-accordion-content">
			<?php echo do_shortcode( $tab['tab_content'] ); ?>
		</div>
	<?php endforeach; ?>
</div>
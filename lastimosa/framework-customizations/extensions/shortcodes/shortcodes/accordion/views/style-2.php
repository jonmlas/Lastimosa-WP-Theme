<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$atts['id'] = 'accordion-'.substr($atts['id'], 0, 10);
$attr['id'] = $atts['id'];
$class[] = 'fw-accordion';
$class = array_merge( $class, lastimosa_get_option_advanced_class( $atts ) );
if( isset($class) ) {
	array_unshift($class, $atts['id']);
} 
$attr['class'] = join(' ', $class);
$attr = array_merge( $attr, lastimosa_get_option_animate_attr( $atts ) );
?>

<div <?php echo lastimosa_attr_to_html($attr); ?>>
	<?php foreach ( $atts['tabs'] as $key => $tab ) : ?>
  <div class="card">
    <div class="card-header" id="heading<?php echo $key; ?>">
      <h5 class="mb-0">
        <a class="btn btn-link" data-toggle="collapse" data-target="#collapse<?php echo $key; ?>" aria-expanded="true" aria-controls="collapse<?php echo $key; ?>">
          <?php echo $tab['tab_title']; ?>
        </a>
      </h5>
    </div>
		<?php 
		if( $key == 0 ) {
			$show = ' show';
		}else{ 
			$show = ''; 
		} ?>
    <div id="collapse<?php echo $key; ?>" class="collapse<?php echo $show; ?>" aria-labelledby="heading<?php echo $key; ?>" data-parent="#<?php echo $atts['id']; ?>">
      <div class="card-body">
        <?php echo do_shortcode( $tab['tab_content'] ); ?>
      </div>
    </div>
  </div>
	<?php endforeach; ?>
</div>
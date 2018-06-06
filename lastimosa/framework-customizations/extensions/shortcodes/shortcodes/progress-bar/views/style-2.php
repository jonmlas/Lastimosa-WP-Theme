<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
$atts['id'] = 'progress-bar-'.substr($atts['id'], 0, 10);

// Progress
$class[] = 'progress-bar-style-2';
if( $atts['font_size'] )			$class[] = $atts['font_size'];
if( $atts['color'] )					$class[] = $atts['color'];
$class = array_merge( $class, lastimosa_get_option_advanced_class( $atts ) );
if( isset($class) ) {
	array_unshift($class, $atts['id']);
} 
$attr['class'] = join(' ', $class);
$attr = array_merge( $attr, lastimosa_get_option_animate_attr( $atts ) );

$progress_attr['class'] = 'progress';
if( $atts['height'] )			$progress_attr['style'] = 'height: ' . $atts['height'] . ';';

// Progress Bar
$progress_bar_class[] = 'progress-bar';
if( $atts['striped'] )							$progress_bar_class[] = 'progress-bar-striped';
if( $atts['animated_stripe'] )			$progress_bar_class[] = 'progress-bar-animate wow';
if( ! empty( $atts['bg_color'] ) )	$progress_bar_class[] = $atts['bg_color'];
$progress_bar_attr['class'] = join(' ', $progress_bar_class);
$progress_bar_attr['role'] = 'progressbar';
$progress_bar_attr['aria-valuenow'] = $atts['value'];
$progress_bar_attr['aria-valuemin'] = 0;
$progress_bar_attr['aria-valuemax'] = 100;
$progress_bar_attr['style'] = 'width: ' . $atts['value'] . '%;';

$progress_title_class[] = 'progress-title';
$progress_title_class[] = $atts['font_size'];
?>

<div <?php echo lastimosa_attr_to_html($attr); ?>>
	<?php if( ! empty( $atts['text'] ) ) 	echo lastimosa_html_tag('span', array('class' => join( ' ', $progress_title_class ) ), $atts['text']); ?>
	<div class="progress-outer">
			<div <?php echo lastimosa_attr_to_html($progress_attr); ?>>
					<div <?php echo lastimosa_attr_to_html($progress_bar_attr); ?>>
							<span class="sr-only"><?php echo $atts['value'] . '% Complete'; ?></span>
					</div>
					<?php if( ! empty( $atts['value'] ) ) echo lastimosa_html_tag('span', array('class' => 'progress-value'), $atts['value'] . '%'); ?>
			</div>
	</div>
</div>
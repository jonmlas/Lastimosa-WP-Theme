<?php if ( ! defined( 'FW' ) ) { die( 'Forbidden' ); }

$class = array();
$atts['id'] = 'text-block-'.substr($atts['id'], 0, 10);
if(! empty($atts['color']) )					$class[] = $atts['color'];
if( $atts['show_more']['enable'] ) {
	$class[] = 'panel';
	$btn[] = lastimosa_html_tag( 'a', array(
			'href' 	=> '#' . $atts['id'] . '-show',
			'class' => $atts['id'] . ' show btn btn-default btn-sm',
			'id'		=> $atts['id'] . '-show',
		), $atts['show_more']['show_button'] );
	$btn[] = lastimosa_html_tag( 'a', array(
			'href' 	=> '#' . $atts['id'] . '-hide',
			'class' => $atts['id'] . ' hide btn btn-default btn-sm',
			'id'		=> $atts['id'] . '-hide',
		), $atts['show_more']['hide_button'] );
}
$class = array_merge( $class, lastimosa_get_option_advanced_class( $atts ) );
if( isset($class) ) {
	array_unshift($class, $atts['id']);
} 
$attr['class'] = join(' ', $class);
$attr = array_merge( $attr, lastimosa_get_option_animate_attr( $atts ) );

if( !empty($class) ) { 
	if( $atts['show_more']['enable'] ) { ?>
		<div class="show-more">
			<?php echo join( ' ', $btn ); ?>
			<div <?php echo lastimosa_attr_to_html($attr); ?>>
				<?php echo do_shortcode($atts['text']); ?>
			</div>
		</div>
	<?php } else { ?>
		<div <?php echo lastimosa_attr_to_html($attr); ?>>
			<?php echo do_shortcode($atts['text']); ?>
		</div>
	<?php } ?>		

<?php } else { ?>
		<?php echo do_shortcode($atts['text']); ?>
<?php }
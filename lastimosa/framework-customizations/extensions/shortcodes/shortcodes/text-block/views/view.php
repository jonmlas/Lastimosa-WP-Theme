<?php if ( ! defined( 'FW' ) ) { die( 'Forbidden' ); }

$class = array();
$atts['id'] = 'text-block-'.substr($atts['id'], 0, 10);
if(! empty($atts['color']) )					$class[] = $atts['color'];
if( $atts['show_more']['enable'] ) {
	$input = lastimosa_html_tag( 'input', array(
			'type' 	=> 'checkbox',
			'class' => 'read-more-state',
			'id'	=> $atts['id'],
		), false );
	$label = lastimosa_html_tag( 'label', array(
			'class' => 'read-more-trigger',
			'for'	=> $atts['id'],
		), false );
}
$class = array_merge( $class, lastimosa_get_option_advanced_class( $atts ) );
if( isset($class) ) {
	array_unshift($class, $atts['id']);
} 
$attr['class'] = join(' ', $class);
$attr = array_merge( $attr, lastimosa_get_option_animate_attr( $atts ) );

if( !empty($class) ) {
	if( $atts['show_more']['enable'] ) { 
		//if( strpos( $atts['text'], '<!--more-->' ) ) {       // Testing if problems would occur.
		if( preg_match( '/<!--more(.*?)?-->/', $atts['text'] ) ) {
			$atts['text'] = str_replace( '<!--more--></p>', '</p><div class="read-more-target">', $atts['text']) . '</div>';
		} else {
			$array = explode('</p>', $atts['text'], 3); 
			$last = array_pop($array);
			$atts['text'] = implode('</p> ',$array) . ' ' . '<div class="read-more-target">' . ' ' . $last  . '</div>';
		} ?>
			
		<div <?php echo lastimosa_attr_to_html($attr); ?>>
			<?php echo $input; ?>
			<div class="read-more-wrap">
				<?php echo do_shortcode($atts['text']); ?>
			</div>
			<?php echo $label; ?>
		</div>
		
	<?php } else { ?>
		<div <?php echo lastimosa_attr_to_html($attr); ?>>
			<?php echo do_shortcode($atts['text']); ?>
		</div>
	<?php } ?>		

<?php } else { ?>
		<?php echo do_shortcode($atts['text']); ?>
<?php }
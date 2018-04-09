<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

if ( empty( $atts['image'] ) ) {
	return;
}

$class = array();
$class[] = 'image-block';
if(!empty($atts['animate']['animation'])) {
	$class[] = 'wow';
	if(!empty($atts['animate']['loop'])){
		$class[] = $atts['animate']['loop'];
	}
	$class[] = $atts['animate']['animation'];
}
if(!empty($atts['visibility']['responsive'])) {
	$class[] = $atts['visibility']['responsive'];
}
if(!empty($atts['visibility']['user'])) {
	if(( $atts['visibility']['user'] == 'logged-in') && !is_user_logged_in() ||
		($atts['visibility']['user'] == 'logged-out') && is_user_logged_in() ||
		($atts['visibility']['user'] == 'hidden')){
		$class[] = 'hidden';
	}
}
if(!empty($atts['class'])) {
	$class[] = $atts['class'];
}
$class = join( ' ', $class );

if(!empty($atts['custom_id'])):
	$attr = array(
		'id' => $atts['custom_id'],
		'class' => $class
	);
else:
	$attr = array(
		'class' => $class
	);
endif; ?>

<div <?php echo fw_attr_to_html($attr); ?>>
	<?php echo get_options_image($atts['image']); ?>
</div>

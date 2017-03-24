<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

if ( empty( $image ) ) {
	$image = fw_get_framework_directory_uri('/static/img/no-image.png');
} else {
	$image = $image['url'];
}
?>
<div class="team">
	<div class="team-image"><img src="<?php echo esc_attr($image); ?>" alt="<?php echo esc_attr($name); ?>" class="aligncenter <?php echo esc_attr($img_style); ?>"/></div>
	<div class="team-inner">
		<div class="team-name text-center">
			<h3 class="text-uppercase"><?php echo $name; ?></h3>
			<span><?php echo $job; ?></span>
		</div>
		<div class="team-text text-center">
			<p><?php echo $desc; ?></p>
		</div>
	</div>
</div>
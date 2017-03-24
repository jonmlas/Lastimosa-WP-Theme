<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

if ( empty( $image ) ) {
	$image = fw_get_framework_directory_uri('/static/img/no-image.png');
} else {
	$image = $image['url'];
}
?>
<div class="team style2">
	<div class="team-inner">
		<div class="team-name">
        	<div class="team-image"><img src="<?php echo esc_attr($image); ?>" alt="<?php echo esc_attr($name); ?>" class="alignleft <?php echo esc_attr($img_style); ?>"/></div>
			<h3><strong><?php echo $name; ?></strong></h3>
			<h5><strong><?php echo $job; ?></strong></h5>
		</div>
		<div class="team-text text-justify">
			<p><?php echo $desc; ?></p>
		</div>
	</div>
</div>
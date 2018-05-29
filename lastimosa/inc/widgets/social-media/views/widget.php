<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Direct access forbidden.' ); }

/**
 * @var $instance
 * @var $before_widget
 * @var $after_widget
 * @var $title
 */
?>
<?php echo $before_widget ?>
<div class="wrap-social">
	<?php echo $title; 
	$social = lastimosa_get_option('social_profiles'); 
	if( !empty( $social ) ) :	?>
	<ul class="social-icons icon-circle icon-zoom list-inline pl-0">
		<?php 
		if( !is_admin() ) {
			fw()->backend->option_type('icon-v2')->packs_loader->enqueue_frontend_css();
		}
		foreach( $social as $key => $value ) : ?>
			<li class="list-inline-item">
				<a href="<?php echo esc_attr( $value['link'] ); ?>" class="btn-share" target="_blank">
					<i class="<?php echo $value['icon']['icon-class']; ?> fa-2x"></i>
				</a>
			</li>
		<?php endforeach; ?>
	</ul>
	<?php endif; ?>
</div>
<?php echo $after_widget ?>
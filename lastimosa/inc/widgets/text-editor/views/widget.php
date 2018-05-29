<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Direct access forbidden.' ); }

/**
 * @var $instance
 * @var $before_widget
 * @var $after_widget
 * @var $title
 */
?>
<?php echo $before_widget ?>
<div class="wrap-text-editor">
	<?php echo $title; ?>
	<div class="content">
		<?php echo $instance['text']; ?>
	</div>
</div>
<?php echo $after_widget ?>
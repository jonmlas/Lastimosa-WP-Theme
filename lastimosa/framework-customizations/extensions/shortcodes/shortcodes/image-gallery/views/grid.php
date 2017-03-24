<?php if (!defined('FW')) die('Forbidden'); ?>
<?php // fw_print($images); ?>

<div class="row no-gutter image-gallery">  
<?php for($i=0; $i < count($images); $i++): 	?>
	<div class="col-md-3 magnificpopup-container">
		<a href="<?php echo $images[$i]['url']; ?>" title="<?php echo get_the_title($images[$i]['attachment_id']); ?>">
        	<div class="overlay hvr-fade"><h3><?php echo get_the_title($images[$i]['attachment_id']); ?></h3>
            <?php $attachment_meta = wp_prepare_attachment_for_js($images[$i]['attachment_id']); 
			//fw_print($attachment_meta);?>
            <p><?php echo $attachment_meta['caption']; ?></p>
            <img class="aligncenter" src="<?php echo get_template_directory_uri() . '/images/image-gallery-btn.png';?>"/></div>
        	<img src="<?php echo $images[$i]['url']; ?>">
        </a>
    </div>
<?php endfor; ?>
</div>
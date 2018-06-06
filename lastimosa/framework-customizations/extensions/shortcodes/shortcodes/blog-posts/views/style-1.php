<?php if (!defined('FW')) die('Forbidden'); ?>
<?php
$col_class = 'col-md';
if( $atts['columns'] == 1 ) { 
	$col_class = 'col-12';
}elseif( $atts['columns'] == 6 ) {
	$col_class = 'col-md-6 col-lg-4 col-xl-2';
}
$col_class .= ' hvr-grow';
?>
	<article id="post-<?php the_ID(); ?>" <?php post_class( $col_class ); ?>>
		<?php
		if( !empty($atts['image']) ) :
			$image_position = 'align' . $atts['image_position'];
			$image_float = $atts['image_position'];
			$image_margin = '';
			if($atts['image_position'] == 'alternate-left') {
				if ($wp_query->current_post % 2 == 0) {
					$image_position = 'alignleft';	
					$image_float = 'left';
				}else{
					$image_position = 'alignright';  
					$image_float = 'right';
				}
			};
			if($atts['image_position'] == 'alternate-right') {
				if ($wp_query->current_post % 2 == 0) {
					$image_position = 'alignright'; 
					$image_float = 'right';
				}else{
					$image_position = 'alignleft'; 
					$image_float = 'left';
				}
			};
	
			if($image_position == 'alignleft' ) 	$image_margin = 'mr-xl-3';
			if($image_position == 'alignright' ) 	$image_margin = 'ml-xl-3';
		
			if( $atts['columns'] > 1 && $atts['image_position'] != 'center' ) $image_position = 'float-none float-xl-' . $image_float . ' ' . $image_margin;
			
			$thumbnail_class = array();
			$thumbnail_class[] = 'thumbnail';
			$thumbnail_class[] = $image_position;
			$thumbnail_class = join( ' ', $thumbnail_class );
			
			if( $atts['columns'] > 3 ) 	$thumbnail_class .= ' clearfix';
			?>

			<div <?php echo lastimosa_attr_to_html( array('class' => $thumbnail_class) ); ?>>
				<a href="<?php the_permalink() ?>">
				<?php
				if ( has_post_thumbnail() ) {
					the_post_thumbnail( $atts['image'] );
				} else {
					if( $atts['image_placeholder'] ) {
						$image_sizes = lastimosa_get_image_sizes();
						if (array_key_exists( $atts['image'], $image_sizes )) {
							$the_post_thumbnail_attr['src'] = $uri . '/static/img/image-placeholder.png';
							$the_post_thumbnail_attr['class'] = 'wp-post-image ' . $image_position;
							$the_post_thumbnail_attr['width'] = $image_sizes[$atts['image']]['width'];
							$the_post_thumbnail_attr['height'] = $image_sizes[$atts['image']]['height'];
							echo lastimosa_html_tag( 'img', $the_post_thumbnail_attr, false );
						}
					}
				}
				?>
				</a>
			</div>
		<?php endif; // end of image ?>
		
		<div class="content">
			<h4 class="entry-title mb-1"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
			<?php echo lastimosa_entry_meta( $atts ); 
			if( $atts['show_excerpt'] ) {
				if ( ( has_excerpt() || empty($atts['excerpt_length']) ) ) {
					echo '<p>' . the_excerpt() . '</p>';
				}elseif($atts['excerpt_length'] < 0) {
					the_content();
				}else{
					echo '<p>' .  lastimosa_excerpt($atts['excerpt_length']) . '</p>';
				}
			}
			if( $atts['show_read_more_text'] ) { ?>
				<p class="read-more"><a href="<?php the_permalink() ?>"> <?php echo $atts['read_more_text']; ?></a></p>
			<?php } ?>
		</div>
	</article>

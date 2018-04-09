<?php if (!defined('FW')) die('Forbidden'); ?>
<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>
    	<?php
			if(!empty($atts['image'])) {
			$image_position = $atts['image_position'];
			if($image_position == 'alternate'):
				if ($wp_query->current_post % 2 == 0): 
					$image_position = 'alignright'; 
				else: 
					$image_position = 'alignleft';  
				endif;
			endif;
		?>
        <div class="thumbnail <?php echo $image_position ?>">
        	<a href="<?php the_permalink() ?>">
				<?php
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail($atts['image'], array( /*'class' => 'some-class'*/ ));
                } else {
                	echo '<img src="' . $uri . '/static/img/image-placeholder.png" class="'.$image_position.'" />';
                }
                ?>
             </a>
        </div>
        <?php } ?>
        <div class="content">
			<?php //echo entry_meta(); ?>
            <h3 class="entry-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
            <?php 
			if ( has_excerpt() ):
			 	the_excerpt();
            elseif(empty($atts['excerpt_length'])):
                the_excerpt();
			elseif($atts['excerpt_length'] < 0):
				the_content();
            else:
                echo lastimosa_excerpt($atts['excerpt_length']);
            endif; ?>
            <p class="text-left"><a class="btn btn-default" href="<?php the_permalink() ?>"> <?php echo $atts['read_more_text']; ?></a></p>
        </div>
    </article>
<?php endwhile; ?>
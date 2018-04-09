<?php if ( ! defined( 'ABSPATH' ) ) die( 'Direct access forbidden.' );
/**
 * The template used for displaying page content
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		if (has_post_thumbnail()):
			$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );	
			$attr = array(
				'class' => 'entry-header',
				'style' => 'background-image: url("'.esc_url( $thumbnail[0] ).'"); height:'.$thumbnail[2].'px;'
			);
		else:
			$attr = array(
				'class' => 'entry-header',
			);
		endif;
	?>
    <header <?php echo fw_attr_to_html($attr); ?>>
        <div class="container">
        	<?php do_action( 'lastimosa_entry_header' ); ?>
        </div>
    </header><!-- .panel-image -->
    
	<div class="entry-content">
    	<?php do_action( 'lastimosa_before_content' ); ?>
		<?php
		the_content();
		wp_link_pages( array(
			'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'unyson' ) . '</span>',
			'after'       => '</div>',
			'link_before' => '<span>',
			'link_after'  => '</span>',
		) );
		edit_post_link( __( 'Edit', 'unyson' ), '<span class="edit-link">', '</span>' );
		?>
        <?php do_action( 'lastimosa_after_content' ); ?>
	</div><!-- .entry-content -->
    
    <footer class="entry-footer">
    <?php do_action( 'lastimosa_entry_footer' ); ?>
    </footer>
    
</article><!-- #post-## -->






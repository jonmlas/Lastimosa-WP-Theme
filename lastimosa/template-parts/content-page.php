<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		if (has_post_thumbnail()):
			$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );	
			$page_header_attr = array(
				'class' => 'entry-header container',
				'style' => 'background-image: url("'.esc_url( $thumbnail[0] ).'"); height:'.$thumbnail[2].'px;'
			);
		else:
			$page_header_attr = array(
				'class' => 'entry-header container',
			);
		endif;
	?>
	<header <?php echo lastimosa_attr_to_html($page_header_attr); ?>>
			<?php do_action( 'lastimosa_entry_header' ); ?>
	</header><!-- .panel-image -->

	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'lastimosa' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer container">
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'lastimosa' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-## -->

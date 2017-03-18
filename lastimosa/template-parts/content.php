<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 */
?>

<?php if (is_single()) : ?>
<article id="post-<?php the_ID(); ?>" <?php post_class('row'); ?>>
	<header class="entry-header">
		<?php //if ( in_array( 'category', get_object_taxonomies( get_post_type() ) ) && fw_theme_categorized_blog() ) : ?>
<!--		<div class="entry-meta">
			<span class="cat-links"><?php echo get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'unyson' ) ); ?></span>
		</div>-->
		<?php
			//endif;

			the_title( '<h1 class="entry-title">', '</h1>' );
		?>
		<?php
		if( function_exists('fw_ext_breadcrumbs') && is_single() ) {
			fw_ext_breadcrumbs();
		}
		?>

		<div class="entry-meta">
			<?php
				if ( 'post' == get_post_type() )
					fw_theme_posted_on();

				if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) :
			?>
			<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'unyson' ), __( '1 Comment', 'unyson' ), __( '% Comments', 'unyson' ) ); ?> &nbsp;</span>
			<?php
				endif;

				edit_post_link( __( ' Edit', 'unyson' ), '<span class="edit-link">', '</span>' );
			?>
			<?php
				if( function_exists('fw_ext_feedback') ) {
					fw_ext_feedback();
				}
			?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<?php if ( is_search() ) : ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
		<?php
			the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'unyson' ) );
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'unyson' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php endif; ?>
   
<?php else: ?><!-- if it's index.php -->
    
    <?php the_post_thumbnail( 'full' ); ?>

	<header class="entry-header">
		<?php if ( in_array( 'category', get_object_taxonomies( get_post_type() ) ) && fw_theme_categorized_blog() ) : ?>
		<div class="entry-meta">
			<span class="cat-links"><?php echo get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'unyson' ) ); ?></span>
		</div>
		<?php
			endif;

			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		?>
		<?php
		if( function_exists('fw_ext_breadcrumbs') && is_single() ) {
			fw_ext_breadcrumbs();
		}
		?>

		<div class="entry-meta">
			<?php
				if ( 'post' == get_post_type() )
					fw_theme_posted_on();

				if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) :
			?>
			<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'unyson' ), __( '1 Comment', 'unyson' ), __( '% Comments', 'unyson' ) ); ?></span>
			<?php
				endif;

				edit_post_link( __( 'Edit', 'unyson' ), '<span class="edit-link">', '</span>' );
			?>
			<?php
				if( function_exists('fw_ext_feedback') ) {
					fw_ext_feedback();
				}
			?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->
    
  	<?php if(has_action( 'lastimosa_entry_header' )): ?>
    <!--<header>-->
    	<?php //do_action( 'lastimosa_entry_header' ); ?>
	<!--</header>-->
	<?php endif; ?>

	<?php if ( is_search() ) : ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
		<?php
			the_excerpt();
			//echo '<p><a class="moretag btn btn-lg" href="'. get_permalink($post->ID) . '"> Read More</a></p>';
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'unyson' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php endif; ?>
    
<?php endif; ?> 
  
	<?php if(has_action( 'lastimosa_entry_footer' )): ?>
    <footer>
    	<?php do_action( 'lastimosa_entry_footer' ); ?>
	</footer>
	<?php endif; ?>
    



</article><!-- #post-## -->
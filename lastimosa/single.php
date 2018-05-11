<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Lastimosa
 */

get_header(); ?>
<div class="container">
	<div class="row">
		<main id="main" class="site-main content-area col-md" role="main">
		<?php
			$review = fw_get_db_post_option();
			fw_print($review);
		while ( have_posts() ) : the_post();

			do_action( 'lastimosa_before_entry' ); 

			get_template_part( 'template-parts/content', get_post_format() );

			do_action( 'lastimosa_after_entry' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
		</main><!-- #main -->
		<?php get_sidebar(); ?>
	</div>
</div>
<?php	get_footer();

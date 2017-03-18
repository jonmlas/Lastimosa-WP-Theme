<?php
/**
 * The Template for displaying all single posts
 */

get_header(); ?>
<div class="post heading">
    <h2 class="special-heading text-white text-uppercase text-center"><strong>
    <?php $categories = get_the_category();
    if ( ! empty( $categories ) ) {
        echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
    } ?>
    </strong></h2>    
</div>

<div id="primary" class="<?php echo page_builder_container(); ?>">
    <div id="content" class="site-content col-md-8" role="main">
        <?php
            // Start the Loop.
            while ( have_posts() ) : the_post(); ?>
				<?php 
				
				do_action( 'lastimosa_before_entry' ); 
				
                /*
                 * Include the post format-specific template for the content. If you want to
                 * use this in a child theme, then include a file called called content-___.php
                 * (where ___ is the post format) and that will be used instead.
                 */
                get_template_part( 'template-parts/content', get_post_format() );
                
                do_action( 'lastimosa_after_entry' );
				
                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) {
                    comments_template();
                } ?>
            <?php endwhile;
        ?>
    </div><!-- #content -->
    <div class="sidebar right col-md-4">   
        <?php
        //get_sidebar( 'content' );
        //get_sidebar();
        dynamic_sidebar('sidebar-right');
        ?>
    </div>
</div><!-- #primary --> 
<?php
get_footer();
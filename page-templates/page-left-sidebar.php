<?php
/**
	Template Name:  Left Sidebar + Content
*/
get_header(); ?>

<?php
	// Page thumbnail and title.
	//fw_theme_post_thumbnail(); 
	if($page_options['hide_title'] != true):
		$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
		echo '<header class="entry-header"  style="background-image: url(' . $thumb['0'] . ')">';
		$page_options = fw_get_db_post_option(get_the_ID(), 'page_options');
		echo '';
		the_title( '<h1 class="entry-title text-center">', '</h1>' );
		if( !is_front_page() && function_exists('fw_ext_breadcrumbs') && is_page() ) {
			fw_ext_breadcrumbs();
		}
		echo '</header><!-- .entry-header -->';
	endif;
?>

<div class="container">
    <div class="row">
        <div id="left-sidebar" class="sidebar col-md-4">
            <?php
                dynamic_sidebar( 'sidebar-left' );
            ?>
        </div>
        
        <div id="main-content" class="main-content col-md-8">
    
        <?php
            if ( is_front_page() && fw_theme_has_featured_posts() ) {
                // Include the featured content template.
                get_template_part( 'featured-content' );
            }
        ?>
            <div id="primary" class="content-area">
                <div id="content" class="site-content" role="main">
        
                    <?php
                        // Start the Loop.
                        while ( have_posts() ) : the_post();
        
                            // Include the page content template.
                            get_template_part( 'template-parts/content', 'page' );
                            
                            // Checks if blog-post shortcode is used. 
                            if(!function_exists('blog_post_check')):
                                function blog_post_check() {
                                    return 'no';
                                }
                            endif;
        
                            // If comments are open or we have at least one comment, load up the comment template.
                            if ( (comments_open() || get_comments_number()) && (blog_post_check() == 'no') ) {
                                comments_template();
                            }
                        endwhile;
                    ?>
        
                </div><!-- #content -->
            </div><!-- #primary -->
            <?php //get_sidebar( 'content' ); ?>
        </div><!-- #main-content -->
    </div>
</div>
<?php
get_footer();
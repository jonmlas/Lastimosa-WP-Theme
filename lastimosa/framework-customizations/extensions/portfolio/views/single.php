<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 */

$fw_ext_projects_gallery_image = fw()->extensions->get( 'portfolio' )->get_config( 'image_sizes' );
$fw_ext_projects_gallery_image = $fw_ext_projects_gallery_image['gallery-image'];

get_header(); ?>
<main id="main" class="site-main container" role="main">
	<div class="row">
		<div class="content-area col-md" role="main">

			<?php
			if ( is_front_page() && fw_theme_has_featured_posts() ) {
				// Include the featured content template.
				get_template_part( 'featured-content' );
			}
			
					// Start the Loop.
					while ( have_posts() ) : the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

							<header class="entry-header">
								<?php the_title( '<h1 class="entry-title">', '</h1>' ); 
								
								if( function_exists('fw_ext_breadcrumbs') ) {
									fw_ext_breadcrumbs();
								}

								if( function_exists('fw_ext_feedback') ) {
									fw_ext_feedback();
								}
								?>
							</header>
							<!-- .entry-header -->

							<div class="entry-content">
								<?php
								$thumbnails = fw_ext_portfolio_get_gallery_images();
								$captions = array();
								if ( ! empty( $thumbnails ) ) :
									?>
								<section class="lightgallery mb-3">
									<div id="portfolio-gallery" class="row">
										<?php foreach ( $thumbnails as $thumbnail ) :
											$attachment = get_post( $thumbnail['attachment_id'] ); //fw_print($attachment);
											$captions[ $thumbnail['attachment_id'] ] = $attachment->post_title;
											$image = fw_resize( $thumbnail['attachment_id'], $fw_ext_projects_gallery_image['width'], $fw_ext_projects_gallery_image['height'], $fw_ext_projects_gallery_image['crop'] );
											$image_attr['class'] = 'col-6 col-md-4 mb-3';
											$image_attr['data-src'] = $attachment->guid;
											if( !empty( $attachment->post_title ) )		$image_attr['data-sub-html'] = '<h4>' . $attachment->post_title . '</h4>';
											if( !empty( $attachment->post_content ) )	$image_attr['data-sub-html'] .= '<hp>' . $attachment->post_content . '</p>';
											?>
											<div <?php echo lastimosa_attr_to_html( $image_attr ); ?>>
												<a href="">
													<img src="<?php echo $image ?>"
															class="img-fluid hvr-grow-shadow border"
															alt="<?php echo $attachment->post_title ?>"
															title="<?php echo $attachment->post_title; ?>"
															width="<?php echo $fw_ext_projects_gallery_image['width'] ?>"
															height="<?php echo $fw_ext_projects_gallery_image['height'] ?>"
														/>
												</a>
											</div>
										<?php endforeach ?>
									</div>
								</section>
								<?php endif ?>
								<section>
									<div class="entry-content">
										<?php
										the_content();
										// If comments are open or we have at least one comment, load up the comment template.
										if ( comments_open() || get_comments_number() ) {
											comments_template();
										}
										?>
									</div>
								</section>
								<!-- .entry-content -->
							</div>
							<!-- .entry-content -->
						</article><!-- #post-## -->

					<?php endwhile; ?>
		</div><!-- #main -->
		<?php get_sidebar(); ?>
	</div>
</main>
<?php	get_footer();
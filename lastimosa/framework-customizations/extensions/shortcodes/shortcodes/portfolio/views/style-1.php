<?php if (!defined('FW')) die('Forbidden'); ?>

<?php

$class = array();
$class = array_merge( $class, lastimosa_get_option_advanced_class( $atts ) );
$atts['id'] = 'portfolio-'.substr($atts['id'], 0, 10);
if( isset($class) ) {
	array_unshift( $class, $atts['id'] );
}
$attr['class'] = join( ' ', $class );
$attr = array_merge( $attr, lastimosa_get_option_animate_attr( $atts ) );

global $wp_query;
$ext_portfolio_instance = fw()->extensions->get( 'portfolio' );
$ext_portfolio_settings = $ext_portfolio_instance->get_settings();

$taxonomy        = $ext_portfolio_settings['taxonomy_name'];
$term            = get_term_by( 'slug', get_query_var( 'term' ), $taxonomy );
$term_id         = ( ! empty( $term->term_id ) ) ? $term->term_id : 0;
$categories 		 = get_terms( $taxonomy);

$loop_data       = array(
	'settings'        => $ext_portfolio_instance->get_settings(),
	'image_sizes'     => $ext_portfolio_instance->get_image_sizes(),
);
set_query_var( 'fw_portfolio_loop_data', $loop_data );

$args = array(
    'posts_per_page' => -1,
    'post_type' => $loop_data['settings']['post_type'],
);
$query = new WP_Query( $args ); ?>

<div <?php echo lastimosa_attr_to_html($attr); ?>>
	
	<?php if ( ! empty( $categories ) && ( $atts['filter'] == 'yes') ) : ?>
	<div class="wrapp-categories-portfolio">
		<ul id="categories-portfolio" class="portfolio-categories">
			<li class="filter categories-item" data-filter=".category_all">
				<a href='#'><?php _e( 'All', 'unyson' ); ?></a></li>
			<?php foreach ( $categories as $category ) : ?>
				<span class="separator">/</span>
				<li class="filter categories-item" data-filter=".category_<?php echo $category->term_id ?>">
					<a href='#'><?php echo $category->name; ?></a>
				</li>
			<?php endforeach; ?>
		</ul>
	</div>
	<?php endif; ?>
	
	<div class="entry-content">
	
	<?php if ( $query->have_posts() ) : ?>
		<ul class="portfolio-list row">
			<?php
			while ( $query->have_posts() ) : $query->the_post();
				$loop_data = get_query_var( 'fw_portfolio_loop_data' );
				$thumbnails_params = $loop_data['image_sizes']['featured-image'];
			?>
			<li class="mix category_all <?php fw_theme_portfolio_post_taxonomies(get_the_ID()); ?> portfolio-item col-12 col-md-4">
				<div class="portfolio-img imghvr-<?php echo $atts['hover_effect'] ?>">
					<?php
					$thumbnail_id = get_post_thumbnail_id();
					if( !empty( $thumbnail_id ) ) {
							$thumbnail    = get_post( $thumbnail_id );
							$image        = fw_resize( $thumbnail->ID, $atts['width'], $atts['height'], $atts['crop'] );
							$thumbnail_title = $thumbnail->post_title;
					} else {
							$image = fw()->extensions->get('portfolio')->locate_URI('/static/img/no-photo.jpg');
							$thumbnail_title = $image;
					}
					?>
					<img src="<?php echo $image ?>" alt="<?php echo $thumbnail_title ?>"
							 width="<?php echo $thumbnails_params['width'] ?>" height="<?php echo $thumbnails_params['height'] ?>"/>
					<figcaption class="title-item">
						<h4>
							<?php the_title(); ?>
						</h4>
					</figcaption>
				<a href="<?php the_permalink() ?>"></a>
				</div>
			</li><?php
			endwhile;
			?>
		</ul>
	</div>
	<div class="clearfix d-block w-100"></div>
</div>

<?php else : ?>

    <?php get_template_part( 'content', 'none' ); ?>

<?php endif; 

unset( $ext_portfolio_instance );
unset( $ext_portfolio_settings );
set_query_var( 'fw_portfolio_loop_data', '' );
?>
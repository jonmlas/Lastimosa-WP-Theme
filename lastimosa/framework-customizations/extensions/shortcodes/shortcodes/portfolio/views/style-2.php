<?php if (!defined('FW')) die('Forbidden'); ?>

<?php 
global $wp_query;
$ext_portfolio_instance = fw()->extensions->get( 'portfolio' );
$ext_portfolio_settings = $ext_portfolio_instance->get_settings();

$taxonomy        = $ext_portfolio_settings['taxonomy_name'];
$term            = get_term_by( 'slug', get_query_var( 'term' ), $taxonomy );
$term_id         = ( ! empty( $term->term_id ) ) ? $term->term_id : 0;
$categories      = fw_ext_portfolio_get_listing_categories( $term_id );

$loop_data       = array(
	'settings'        => $ext_portfolio_instance->get_settings(),
	'image_sizes'     => $ext_portfolio_instance->get_image_sizes(),
);
set_query_var( 'fw_portfolio_loop_data', $loop_data );

$args = array(
    'posts_per_page' => -1,
    'post_type' => $loop_data['settings']['post_type'],
);

$query = new WP_Query( $args );

?>
<?php if ( $query->have_posts() ) : ?>
    <ul id="portfolio-list" class="portfolio-list">
        <?php
        while ( $query->have_posts() ) : $query->the_post();
            $loop_data = get_query_var( 'fw_portfolio_loop_data' );

$thumbnails_params = $loop_data['image_sizes']['featured-image'];
?>
        <li class="mix category_all <?php echo ( ! empty( $loop_data['listing_classes'][ get_the_ID() ] ) ) ? $loop_data['listing_classes'][ get_the_ID() ] : ''; ?> portfolio-item">
            <div class="portfolio-img">
                <a href="<?php the_permalink() ?>">
                    <?php
                    $thumbnail_id = get_post_thumbnail_id();
                    if( !empty( $thumbnail_id ) ) {
                        $thumbnail    = get_post( $thumbnail_id );
                        $image        = fw_resize( $thumbnail->ID, $thumbnails_params['width'], $thumbnails_params['height'], $thumbnails_params['crop'] );
                        $thumbnail_title = $thumbnail->post_title;
                    } else {
                        $image = fw()->extensions->get('portfolio')->locate_URI('/static/img/no-photo.jpg');
                        $thumbnail_title = $image;
                    }
                    ?>
                    <img src="<?php echo $image ?>" alt="<?php echo $thumbnail_title ?>"
                         width="<?php echo $thumbnails_params['width'] ?>" height="<?php echo $thumbnails_params['height'] ?>"/>
                </a>
                <h4 class="title-item"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
        
            </div>
        </li><?php
        endwhile;
        ?>
    </ul>
<?php else : ?>
    <?php get_template_part( 'content', 'none' ); ?>
<?php endif; ?>
<div class="clear"></div>
<?php if (!defined('FW')) die('Forbidden'); ?>
<div class="row">
<?php 
$ctr = 0;
while ( $wp_query->have_posts() ) : $wp_query->the_post();
switch ($atts['style']['grid']['columns']) {
case 'col-md-4':
	$row_insert = 3;
	break;
case 'col-md-3':
	$row_insert = 4;
	break;
default:
	$row_insert = 2;
} 
if($ctr == $row_insert):
	echo '</div>';
	echo '<div class="row">';
	$ctr = 0;
endif;
$ctr++;
?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(array($atts['style']['grid']['columns'])); ?>>
        <?php
        if ( has_post_thumbnail() ) {
            the_post_thumbnail($atts['image'], array( 'class' => $atts['image_position'],'img-responsive' ));
        } else {
        echo '<img src="' . $uri . '/static/img/image-placeholder.png" class="'.$atts['image_position'].' img-responsive" />';
        }
        ?>
        <?php //echo entry_meta(); ?>
        <?php the_title( '<h3 class="entry-title text-left text-sky-blue">', '</h3>' ); ?>
        <?php echo lastimosa_excerpt($atts['excerpt_length']); ?>
        <p class="text-left"><a class="btn btn-default text-white bg-lime-green round btn-lg" href="<?php the_permalink() ?>"> <?php echo $atts['read_more_text']; ?></a></p>
    </article>

<?php endwhile; ?>
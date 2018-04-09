<?php if (!defined('FW')) die('Forbidden'); ?>

<?php 
global $wp_query;
global $post;
$uri = fw_get_template_customizations_directory_uri('/extensions/shortcodes/shortcodes/events'); 

//$fw_ext_projects_gallery_image = fw()->extensions->get( 'events' )->get_config( 'image_sizes' );
//$fw_ext_projects_gallery_image = $fw_ext_projects_gallery_image['gallery-image']; 
$ext_events_instance = fw()->extensions->get( 'events' ); ?>

<div class="events" id="Container">
    <ul id="events-list" class="events-list">
        <?php
		$args = array( 
			'post_type' => 'fw-event', 
			//'post_type' => $loop_data['settings']['post_type'],
			'posts_per_page' => -1,
			'order' => 'ASC',
			'post_status' => 'publish');
		$query = new WP_Query( $args );
		?>
		<?php if ( $query->have_posts() ) :
        while ( $query->have_posts() ) : $query->the_post();
		?>
		<li class="events-item row">
        
			<?php $options = fw_get_db_post_option(get_the_ID(), fw()->extensions->get( 'events' )->get_event_option_id());
				//fw_print($options['event_location']); ?>
			
			<?php for($i=0; $i < count($options['event_children']); $i++): 	?>
				<?php $date_from = $options['event_children'][$i]['event_date_range']['from']; ?>
				<?php $date_to = $options['event_children'][$i]['event_date_range']['to']; ?>
				<div class="box pull-left">
					<span></span>
					<h2><?php echo $month = date("d",strtotime($date_from)); ?></h2>
					<h3><?php echo $month = date("F",strtotime($date_from)); ?></h3>
				</div>
                
                <div class="pull-left">
					<a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
                    <h4 class="title-item"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
                    <p class="date-time"><img src="<?php echo $uri; ?>/static/img/event-icon-date-time.png"> <?php echo $event_date = date("F j, Y / g:i a",strtotime($date_from)) . ' - ' . date("g:i a",strtotime($date_to)); ?></p>
                    <p class="location"><img src="<?php echo $uri; ?>/static/img/event-icon-location.png"> <?php echo $options['event_location']['location']; ?></p>
                    <p><a class="btn btn-default" href="<?php the_permalink() ?>">View Event</a></p>
				</div>
			<?php endfor; ?>
			
		</li><?php
        endwhile;
        ?>
    </ul>
</div>
		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; 
?>
<div class="clear"></div>

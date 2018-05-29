<?php if (!defined('FW')) die('Forbidden'); 
$uri = fw_get_template_customizations_directory_uri('/extensions/shortcodes/shortcodes/blog-posts');

if( is_front_page() ) {
	include dirname( __FILE__ ) .'/front-page-' . $atts['style']['view'].'.php';
	return;
}
$i = 0;
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
  'posts_per_page' => $atts['posts_per_page'],
	'paged' => $paged,
);
if( !empty( $atts['category'] ) )		$args['cat'] = $atts['category'];

$wp_query = new WP_Query( $args );

if ( !is_admin() && $atts['page_navigation'] == 'infinite' ) {	
	// What page are we on? And what is the pages limit?
	$max = $wp_query->max_num_pages;
	 
	// Add some parameters for the JS.
	wp_localize_script(
		'pbd-alp-load-posts',
		'pbd_alp',
		array(
			'startPage' => $paged,
			'maxPages' 	=> $max,
			'nextLink' 	=> next_posts($max, false)
		)
	);
}
?>
<div id="blog-content" class="blog-list">
	<?php 
	if ( $wp_query->have_posts() ) :
		echo '<div class="row">';	
		while ( $wp_query->have_posts() ) : $wp_query->the_post();
			$i++;
			include dirname( __FILE__ ) . '/' . $atts['style']['view'] . '.php';
			if( $i == $atts['columns'] && $atts['columns'] != 1 && (($wp_query->current_post +1) != ($wp_query->post_count)) ) {
				echo '<div class="w-100"></div>';
				$i = 0;
			}
			if(($wp_query->current_post +1) == ($wp_query->post_count) && ($wp_query->post_count % $atts['columns'] != 0)) {
				$offset = (12 / $atts['columns']) * ($atts['columns'] - $i);
				//for( $i = 0; $i < $offset_count; $i++) {
					echo '<div class="offset-md-' . sanitize_title_with_dashes($offset) . '"></div>';
				//}
			}
		endwhile;
		echo '</div>';
	
		// Previous/next page navigation.
		if( !empty($atts['page_navigation']) && $atts['page_navigation'] == 'default' ) : ?>
			<div id="nav-below" class="navigation">
				<?php 
				next_posts_link( '<div class="alignleft"><i class="fa fa-angle-double-left"></i> Older Posts</div>', $wp_query->max_num_pages ); 
				previous_posts_link('<div class="alignright">Newer Posts <i class="fa fa-angle-double-right"></i></div>') ; 
				?>
			</div>
		<?php 
		endif;
	
		if( !empty($atts['page_navigation']) &&  $atts['page_navigation'] == 'numeric' ) : ?>
			<div class="numeric-pagination" aria-label="page navigation">
				<?php 
				echo paginate_links( array(
						'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
						'total'        => $wp_query->max_num_pages,
						'current'      => max( 1, get_query_var( 'paged' ) ),
						'format'       => '?paged=%#%',
						'show_all'     => false,
						'type'         => 'plain',
						'end_size'     => 2,
						'mid_size'     => 1,
						'prev_next'    => true,
						'prev_text' => __('&laquo;'),
						'next_text' => __('&raquo;'),
						'add_args'     => false,
						'add_fragment' => '',
				) );
				?>
			</div>
		<?php endif;
	
	else : 
	
		get_template_part( 'content', 'none' );
	
	endif; ?>	
	
	<?php wp_reset_query(); // reset the wp_query ?>
</div>
<?php if (!defined('FW')) die('Forbidden'); ?>
<?php 

// The Query
global $wp_query;

$big = 999999999; // This needs to be an unlikely integer
$paged = ( get_query_var('page') ) ? get_query_var('page') : 1;
$i = 0;

query_posts(
	array_merge(
		array(
			'posts_per_page' => $atts['posts_per_page'],
			'paged' => $paged,
		),
		$wp_query->query	
	)
);

if( !empty( $atts['category'] ) ) {
	query_posts(
		array_merge(
			array(
				'cat' => $atts['category'],
			),
			$wp_query->query	
		)
	);
}

// For more options and info view the docs for paginate_links()
// http://codex.wordpress.org/Function_Reference/paginate_links
$default_paginate_links = paginate_links( array(
		'base' => str_replace( $big, '%#%', get_pagenum_link($big) ),
		'current' => max( 1, $paged ),
		'total' => $wp_query->max_num_pages,
		'mid_size' => 5,
		'prev_next' => True,
		'prev_text' => sprintf( '%1$s <i class="fa fa-angle-double-right"></i>', __( 'Newer Posts', 'lastimosa' ) ),
		'next_text' => sprintf( '<i class="fa fa-angle-double-left"></i> %1$s', __( 'Older Posts', 'lastimosa' ) ),
		'type' => 'plain'
) );

$numeric_paginate_links = paginate_links( array(
		'base' => str_replace( $big, '%#%', get_pagenum_link($big) ),
		'current' => max( 1, $paged ),
		'total' => $wp_query->max_num_pages,
		'mid_size' => 5,
		'prev_next' => True,
		'prev_text'    => sprintf( '<i class="fa fa-angle-double-left"></i> %1$s', __( '', 'lastimosa' ) ),
		'next_text'    => sprintf( '%1$s <i class="fa fa-angle-double-right"></i>', __( '', 'lastimosa' ) ),
		'type' => 'list'
) );

?>
<div id="blog-content" class="blog-list">
	<?php
	// The Loop
	if ( have_posts() ) :
		echo '<div class="row">';	
		while ( have_posts() ) : the_post();
			$i++;
			include dirname( __FILE__ ) .'/'.$atts['style']['selected'].'.php';
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
	
		if ( $atts['page_navigation'] == 'default' ) {
			echo '<nav class="pagination" aria-label="page navigation">';
			echo $default_paginate_links;
			echo '</nav><!--// end .pagination -->';
		}elseif ( $atts['page_navigation'] == 'numeric' ) {
			echo '<nav class="numeric-pagination" aria-label="page navigation">';
			echo $numeric_paginate_links;
			echo '</nav><!--// end .pagination -->';
		}elseif ( !is_admin() && $atts['page_navigation'] == 'infinite' ) {	
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
	
	endif;

	wp_reset_query(); // reset the wp_query  ?>
</div>

	







<?php if (!defined('FW')) die('Forbidden'); 
$uri = fw_get_template_customizations_directory_uri('/extensions/shortcodes/shortcodes/blog-posts');
//fw_print($atts['posts_per_page']);
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
    'posts_per_page' => $atts['posts_per_page'],
	'cat' => $atts['category'],
	'paged' => $paged,
);
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
			'maxPages' => $max,
			'nextLink' => next_posts($max, false)
		)
	);
}
?>
<div id="blog-content" class="blog-list">
<?php if ( $wp_query->have_posts() ) : ?>
	<?php
    include dirname( __FILE__ ) .'/'.$atts['style']['view'].'.php';
	// Previous/next page navigation.
	if(!empty($atts['page_navigation'])): ?>
        <div id="nav-below" class="navigation">
        	<?php 
			next_posts_link( '<div class="alignleft">« Older Entries</div>', $wp_query->max_num_pages ); 
			previous_posts_link('<div class="alignright">Newer Entries »</div>') ; ?>
        </div>
	<?php endif;
    ?>
<?php else : ?>
    <?php get_template_part( 'content', 'none' ); ?>
<?php endif; ?>
<?php wp_reset_query(); // reset the wp_query ?>
</div>
<?php if (!defined('FW')) die('Forbidden'); ?>

<?php 
//fw_print($exclusions);
$args = array(
  'orderby' => 'name',
  'order' => 'ASC',
  'hide_empty'               => 1,    
  'exclude'                  =>array(1,10) // desire id
  );
$categories = get_categories($args);
//fw_print($categories);
foreach($categories as $category) { 
	$image = fw_get_db_term_option($category->term_id, $category->taxonomy, 'featured');
	echo '<div class="category-item">';
	echo '<h3><a href="' . esc_url( get_category_link( $category->term_id ) ) . '">' . $category->name . '</a></h3>';
	if(!empty($image['url'])):
		echo '<img src="' . $image['url'] . '"/>';
	endif;
	echo '<h4>Post Count: ' . $category->count . '</h4>';
	echo '<p>' . $category->description . '</p>';
	echo '</div>';
} 



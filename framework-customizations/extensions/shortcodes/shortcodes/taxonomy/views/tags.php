<?php if (!defined('FW')) die('Forbidden'); ?>
<?php 
global $post;
echo get_the_term_list( $post->ID, 'tag', '<ul class="taxonomy boxed"><li>', '</li><li>', '</li></ul>' ); ?>
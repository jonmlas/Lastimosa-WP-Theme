<?php if ( ! defined( 'ABSPATH' ) ) die( 'Direct access forbidden.' );

/**
 * Social Profiles
 */
if(! function_exists('lastimosa_social_profiles')){
	function lastimosa_social_profiles() { ?>
		<?php if(empty($menu_atts['social_profiles'])): ?>
		<ul class="social-profiles nav navbar-nav navbar-right">
		<?php
			$social_profiles = c_get_option('social_profiles');
			for($i=0; $i < count($social_profiles); $i++): 
				if(!empty($social_profiles[$i]['link'])):
					echo '<li><a href="'. $social_profiles[$i]['link'].'" target="_blank"><i class="fa '. $social_profiles[$i]['fa_code'].'" aria-hidden="true"></i>
		</a></li>';
				endif;
			endfor; 
		?>
		</ul>
		<?php endif; 
	}
	//add_action('lastimosa_navbar_right','lastimosa_social_profiles');
}


/**
 * Add More Menu Items
 */
/*add_filter( 'wp_nav_menu_items', 'your_custom_menu_item', 10, 2 );
function your_custom_menu_item ( $items, $args ) {
    if ($args->theme_location == 'main') {
        $items .= '
              <li class="pull-right"><a href="./">Default <span class="sr-only">(current)</span></a></li>
              <li class="pull-right"><a href="../navbar-static-top/">Static top</a></li>
              <li class="pull-right"><a href="../navbar-fixed-top/">Fixed top</a></li>
            ';
    }
    return $items;
}*/

if(! function_exists('lastimosa_header_info')){
	function lastimosa_header_info() { ?>
    	<?php $header_info = c_get_option('header_info'); 
		if ($header_info['content']):?>
		<div class="float-lg-right"><?php 
			echo $header_info['content']; ?>
		</div><?php 
	endif;
	}
}

if(! function_exists('lastimosa_inline_info')) :
/**
 * Main Menu
 */
function lastimosa_inline_info() {
	$header_menu 	= lastimosa_get_option('header_menu');
	if($header_menu['inline_info']['selected'] == 'text') {
		$inline_info_class = array();
		$inline_info_class[] = 'info pull-right';
		$inline_info_class[] = $header_menu['inline_info']['text']['color'];
		echo '<div '. fw_attr_to_html(array('class' => join( ' ', $inline_info_class ))) .'>'.$header_menu['inline_info']['text']['content'].'</div>';
	}
}
//add_action('lastimosa_menu','lastimosa_inline_info');
endif;

if(! function_exists('lastimosa_entry_title') ) :
/**
 * Featured Image
 */
function lastimosa_entry_title() {
	$hide_page_title = get_post_meta(get_the_ID(), 'hide-page-title', true);
	if(empty($hide_page_title)):
		the_title( '<h1 class="entry-title">', '</h1><!-- .entry-header -->' );
	endif; 
}
add_action('lastimosa_entry_header','lastimosa_entry_title');
endif;

if(! function_exists('lastimosa_breadcrumbs') ) :
/**
 * Breadcrumbs
 */
function lastimosa_breadcrumbs() {
	if( !is_front_page() && function_exists('fw_ext_breadcrumbs') && is_page() ) {
		fw_ext_breadcrumbs();
	}
}
add_action('lastimosa_entry_header','lastimosa_breadcrumbs');
endif;


if (! function_exists('lastimosa_post_thumbnail') ) :
/**
 * Display an optional post thumbnail. NOT USED... To be deleted soon
 */
function lastimosa_post_thumbnail() {
	if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
		return;
	}

	if ( is_singular() ) :
	?>

	<div class="post-thumbnail">
		<?php the_post_thumbnail(); ?>
	</div><!-- .post-thumbnail -->

	<?php else : ?>

	<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true">
		<?php
			the_post_thumbnail( 'post-thumbnail', array( 'alt' => get_the_title() ) );
		?>
	</a>

	<?php endif; // End is_singular()
}
endif;


if(!function_exists('lastimosa_theme_mods')) :
  /*
   * Theme mods
   */
  function lastimosa_theme_mods() {
    $theme_layout = lastimosa_get_option('theme_layout'); 
		if( isset($theme_layout['layout']['selected']) && ($theme_layout['layout']['selected'] == 'container')){
			$box_class = esc_attr($theme_layout['layout']['selected']);
			$box_container_start = '<box '. lastimosa_attr_to_html( array('class' => $box_class) ) .'>';
      set_theme_mod( 'box_container_start', $box_container_start );
			set_theme_mod( 'box_container_end', '</box>' );
		}else{
	    set_theme_mod( 'box_container_start', '' );
			set_theme_mod( 'box_container_end', '' ); 
    }
    $header_class = array( 'site-header', 'mb-4' );
    $header_class[] = get_post_meta( get_the_ID(), 'header-options', true ); 
    $header_layout = lastimosa_get_option( 'header_layout', array( 'style' => array( 'selected' => 'style-1' )) );
		if(!empty($header_layout['style']))	{
			$header_class[] = $header_layout['style']['selected'];
			$header_class = join(' ', $header_class );	
			set_theme_mod( 'header_class', $header_class );
			set_theme_mod( 'header_layout_selected', $header_layout['style']['selected'] );
		}
  }
  add_action( 'init', 'lastimosa_theme_mods' );
endif;
<?php if ( ! defined( 'ABSPATH' ) ) die( 'Direct access forbidden.' );

/**
 * The Logo
 */
if(! function_exists('lastimosa_logo')){
	function lastimosa_logo() {
		$logo_class		= array();
		$logo_class[] 	= 'navbar-header pull-left';
		$logo_class 	= join( ' ', $logo_class );
		?>		
		<div <?php echo lastimosa_attr_to_html(array('class' => $logo_class)) ?>>
        	<?php $header_logo = c_get_option('header_logo'); ?>

            	<?php if ( is_front_page() || is_home() ) : ?>
                	<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                	<?php if( empty( $header_logo['image'] ) ) : ?>
                    	<?php bloginfo( 'name' ); ?>
                    <?php else : ?>
                    	<?php $attachment_meta = wp_prepare_attachment_for_js($header_logo['image']['attachment_id']); ?>
                        <img src="<?php echo $header_logo['image']['url']; ?>" alt="<?php echo $header_logo['name']; ?>" class="site-logo" width="<?php echo $attachment_meta['width']; ?>" height="<?php echo $attachment_meta['height']; ?>"/>
                    <?php endif; ?>
                    </a></h1>
                    
                <?php else : ?>
                	<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                	<?php if( empty( $header_logo['image'] ) ) : ?>
                    	<?php bloginfo( 'name' ); ?>
                    <?php else : ?>
                    	<?php $attachment_meta = wp_prepare_attachment_for_js($header_logo['image']['attachment_id']); ?>
                        <img src="<?php echo $header_logo['image']['url']; ?>" alt="<?php echo $header_logo['name']; ?>" class="site-logo" width="<?php echo $attachment_meta['width']; ?>" height="<?php echo $attachment_meta['height']; ?>"/>
                    <?php endif; ?> 
                    </a></p>
                    
                <?php endif; ?>
                
                <?php $description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $description; ?></p><?php
				endif; ?>
		</div> <?php
	}
	add_action('lastimosa_header_logo','lastimosa_logo');
}


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

/**
 * Mobile Menu Button
 */
if(! function_exists('lastimosa_menu_button')){
	function lastimosa_menu_button() { 
		$header_menu 	= lastimosa_get_option('header_menu'); 
		if ( fw_ext('megamenu')  && ($header_menu['selected'] == 'style_2') ) { ?>
        	<button class="menu-toggle pull-right"><?php _e( 'Primary Menu', 'unyson' ); ?></button>
        <?php }else{ ?>
					<!-- Brand and toggle get grouped for better mobile display -->
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
        <?php }
	}
	add_action('lastimosa_menu_button','lastimosa_menu_button');
}


if(! function_exists('lastimosa_inline_info')) :
/**
 * Main Menu
 */
function lastimosa_inline_info() {
	$header_menu 	= c_get_option('header_menu');
	if($header_menu['inline_info']['selected'] == 'text') {
		$inline_info_class = array();
		$inline_info_class[] = 'info pull-right';
		$inline_info_class[] = $header_menu['inline_info']['text']['color'];
		echo '<div '. fw_attr_to_html(array('class' => join( ' ', $inline_info_class ))) .'>'.$header_menu['inline_info']['text']['content'].'</div>';
	}
}
//add_action('lastimosa_menu','lastimosa_inline_info');
endif;


/**
 * Main Menu
 */
if(! function_exists('lastimosa_main_menu')){
	function lastimosa_main_menu() {
		$header_layout 	= lastimosa_get_option('header_layout');
		$header_menu 	= lastimosa_get_option('header_menu');
		$menu_class		= array();
		$menu_class[] 	= 'nav navbar-nav';
		$menu_class[] 	= ($header_menu['selected'] == 'style_1') ? '' : str_replace('_', '-', $header_menu['selected']);
		$menu_class[] 	= ($header_layout['selected'] == 'layout-1') ? 'navbar-right' : '';
		$menu_class[] 	= $header_menu[$header_menu['selected']]['transformation'];
		?>		
        <?php
		if ( fw_ext('megamenu')  && ($header_menu['selected'] == 'style_2') ) { ?>
			<?php wp_nav_menu( array(
				'menu'              => 'main',
				'theme_location'    => 'main',
				'menu_class'        => 'navbar-nav mr-auto',
				)
			); ?>			
		<?php
		}else{
		// Megamenu will override any walker so we need to remove its filter
		remove_filter('wp_nav_menu_args', '_filter_fw_ext_mega_menu_wp_nav_menu_args');
		wp_nav_menu( array(
			'theme_location'    => 'main',
			'container'         => 'div',
			'container_class'   => 'collapse navbar-collapse',
			'container_id'      => 'bs-example-navbar-collapse-1',
			'menu_class'        => 'nav navbar-nav',
			'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
			'walker'            => new WP_Bootstrap_Navwalker()
		) );
		}
		
		
	}
	add_action('lastimosa_menu','lastimosa_main_menu');
}


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
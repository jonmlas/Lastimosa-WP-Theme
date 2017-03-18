<?php
/**
 * Lastimosa theme header
 *
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php
	$theme_options = lastimosa_get_option('theme_options');
	if( !empty( $theme_options['favicon']['url'] ) ) :
	?>
	<link rel="icon" type="image/png" href="<?php echo $theme_options['favicon']['url']; ?>">
	<?php endif ?>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<?php
if(fw_ext_page_builder_is_builder_post($post->ID)): 
// Add specific Body CSS class by filter.
	add_filter( 'body_class', function( $classes ) {
    return array_merge( $classes, array( 'unyson page-builder' ) );
} );
endif; ?>
<body <?php body_class(); ?>>
<?php $theme_layout = lastimosa_get_option('theme_layout'); ?>
<div id="page" class="hfeed <?php echo $theme_layout['site-layout']['layout']; ?>">
	
    <?php do_action( 'lastimosa_before_header' ); ?>
    
	<?php 	$header_class = array();
			$header_class[] = 'site-header';
			$header_class[] = get_post_meta(get_the_ID(), 'header-options', true); 
			
			$header_layout = lastimosa_get_option('header_layout'); 
			$header_class[] = $header_layout['selected'];
			$header_class = join( ' ', $header_class );	
	?>
	<header id="masthead" class="<?php echo $header_class; ?>" role="banner">
		<?php get_template_part( 'template-parts/header', 'topbar' ); ?>
		<?php get_template_part( 'template-parts/header', $header_layout['selected'] ); ?>

		<!--<div id="search-container" class="search-box-wrapper hide">
			<div class="search-box">
				<?php // get_search_form(); ?>
			</div>
		</div>-->
	</header><!-- #masthead -->
    
	<?php do_action( 'lastimosa_after_header' ); ?>
    <?php //fw_print(lastimosa_get_option('header_layout')); fw_print(lastimosa_get_option('header_menu')); ?>
	<div id="main" class="site-main">
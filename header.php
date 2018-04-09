<?php
/**
 * Lastimosa theme header
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
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php
		$theme_options = lastimosa_get_option('theme_options');
		if( !empty( $theme_options['favicon']['url'] ) ) : ?>
			<link rel="icon" type="image/png" href="<?php echo $theme_options['favicon']['url']; ?>">
	<?php endif ?> 
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
	<?php echo get_theme_mod( 'box_container_start' ); ?>

	<?php do_action( 'lastimosa_before_header' ); ?>

	<header id="masthead" class="<?php echo get_theme_mod( 'header_class' ); ?>" role="banner">
		<?php get_template_part( 'template-parts/header', 'topbar' );  ?>
		<?php get_template_part( 'template-parts/header', get_theme_mod('header_layout_selected') ); ?>

		<!--<div id="search-container" class="search-box-wrapper hide">
			<div class="search-box">
				<?php // get_search_form(); ?>
			</div>
		</div>-->
	</header><!-- #masthead -->

	<?php do_action( 'lastimosa_after_header' ); ?>
		
	<main role="main">
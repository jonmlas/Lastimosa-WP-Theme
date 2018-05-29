<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Direct access forbidden.' ); }
/**
 * Include static files: javascript and css
 */
if ( is_admin() ) {
	return;
}

/* To be removed. Bootstrap will be added directly in the SASS compiler. 
$bootstrap_url = lastimosa_cdn_fallback('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css',get_template_directory_uri().'/css/bootstrap/css/bootstrap.css');
$bootstrap_js_url = lastimosa_cdn_fallback('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js',get_template_directory_uri().'/css/bootstrap/js/bootstrap.min.js');

wp_enqueue_style(
	'bootstrap',
	$bootstrap_url,
	array(),
	'1.0'
);
wp_enqueue_script(
	'bootstrap',
	$bootstrap_js_url,
	array( 'jquery' ),
	'1.0',
	true
); 
*/

/*
wp_enqueue_script(
	'bootstrap_popper',
	'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js',
	array( 'jquery' ),
	'1.0',
	true
); */

if ( ! defined( 'FW' ) ) {
	wp_enqueue_style(
		'bootstrap',
		'https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css',
		array(),
		'4.1.0'
	);
}


wp_enqueue_script(
	'bootstrap',
	'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js',
	array( 'jquery' ),
	'1.0',
	true
); 


/**
 * Mobile Menu
 */
$header_menu_mobile = lastimosa_get_option( 'header_menu_mobile' );
$header_layout 			= lastimosa_get_option( 'header_layout' );
if( isset($header_menu_mobile) && ($header_menu_mobile['selected'] == 'style-1') ) {
	wp_enqueue_script(
		'meanmenu',
		get_template_directory_uri() . '/js/jquery.meanmenu.min.js',
		array( 'jquery' ),
		'2.0.7',
		true
	);
	
	wp_add_inline_script( 'meanmenu', '
		jQuery(document).ready(function () {
			jQuery(".primary-navigation").meanmenu( {
				meanScreenWidth: "768",
			});
		});
	');
}


// Add Genericons font, used in the main stylesheet.
wp_enqueue_style(
	'genericons',
	get_template_directory_uri() . '/css/genericons/genericons.css',
	array(),
	'1.0'
);

// Load our main stylesheet.
wp_enqueue_style(
	'lastimosa-theme-style',
	get_stylesheet_uri(),
	array( 'genericons' ),
	'1.0'
);


if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	wp_enqueue_script( 'comment-reply' );
}


if ( is_singular() && wp_attachment_is_image() ) {
	wp_enqueue_script(
		'lastimosa-theme-keyboard-image-navigation',
		get_template_directory_uri() . '/js/keyboard-image-navigation.js',
		array( 'jquery' ),
		'1.0'
	);
}

if ( is_active_sidebar( 'sidebar-1' ) ) {
	wp_enqueue_script( 'jquery-masonry' );
}

if ( is_front_page() && 'slider' == get_theme_mod( 'featured_content_layout' ) ) {
	wp_enqueue_script(
		'lastimosa-theme-slider',
		get_template_directory_uri() . '/js/slider.js',
		array( 'jquery' ),
		'1.0',
		true
	);
	wp_localize_script( 'lastimosa-theme-slider', 'featuredSliderDefaults', array(
		'prevText' => __( 'Previous', 'unyson' ),
		'nextText' => __( 'Next', 'unyson' )
	) );
}

wp_enqueue_script(
	'jquery-ui-tabs',
	get_template_directory_uri() . '/js/jquery-ui-1.10.4.custom.js',
	array( 'jquery' ),
	'1.0',
	true
);

wp_enqueue_script(
	'lastimosa-theme-script',
	get_template_directory_uri() . '/js/functions.js',
	array( 'jquery' ),
	'1.0',
	true
);

// Font Awesome stylesheet
wp_enqueue_style(
	'font-awesome',
	get_template_directory_uri() . '/css/font-awesome/css/font-awesome.min.css',
	array(),
	'1.0'
);

wp_enqueue_script(
	'jquery-custom-input',
	get_template_directory_uri() . '/js/jquery.customInput.js',
	array( 'jquery' ),
	'1.0',
	true
);

// Selectize
wp_enqueue_style(
	'selectize-css',
	get_template_directory_uri() . '/css/selectize.css',
	array(),
	'1.0'
);
wp_enqueue_script(
	'selectize-js',
	get_template_directory_uri() . '/js/selectize.js',
	array( 'jquery' ),
	'1.0',
	true
);


// SASS CSS
wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.scss.php', 100 );


if ( ! function_exists( 'lastimosa_sticky_header' ) ) :
	/**
	 * Stick Header
	 */
	function lastimosa_sticky_header() {
		?>
		<script>
			jQuery(function ($) {
				$(document).ready(function(){
					$(window).scroll(function(){
						var winTop = $(window).scrollTop();
						if(winTop >= 30){
							$("body").addClass("sticky-header");
							//$(".site-logo").css({'maxHeight': 30 + 'px'});
						}else{
							$("body").removeClass("sticky-header");
							//$(".site-logo").css({'maxHeight': 'none' });
						}
					});

					$(".navToggle").click (function(){
						$(this).toggleClass("open");
						$("nav").toggleClass("open");
					});
				});
			});
		</script>
		<?php
	}
	add_action( 'wp_footer', 'lastimosa_sticky_header', 30 );
endif;

// Smooth Scroll
if (! function_exists('print_smooth_scroll')) :
	function print_smooth_scroll() {
		?>
		<script>
		jQuery(function ($) {
			$(function() {
				$('a[href*=#]:not([href=#])').click(function() {
				if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

					var target = $(this.hash);
					target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
					if (target.length) {
					$('html,body').animate({
						scrollTop: target.offset().top - 100
					}, 1000);
					return false;
					}
				}
				});
			});
		});
		</script>
		<?php
	}
	//add_action( 'wp_footer', 'print_smooth_scroll', 30 );
endif;
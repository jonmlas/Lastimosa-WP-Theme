<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Direct access forbidden.' ); }
/**
 * Include static files: javascript and css
 */
if ( is_admin() ) {
	return;
}

/**
 * Load Bootstrap CDN with local fallback
 */
$get_the_url = 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css';
$cdnIsUp = get_transient( 'cnd_is_up' );
if ( $cdnIsUp ) {
    $bootstrap_url = $get_the_url;
	$bootstrap_js_url = 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js';
} else {
    $cdn_response = wp_remote_get( $get_the_url );
    if( is_wp_error( $cdn_response ) || wp_remote_retrieve_response_code($cdn_response) != '200' ) {
        $bootstrap_url = get_template_directory_uri() . '/css/bootstrap/css/bootstrap.css';
		$bootstrap_js_url = get_template_directory_uri() . '/css/bootstrap/js/bootstrap.min.js';
    }
    else {
        $cdnIsUp = set_transient( 'cnd_is_up', true, MINUTE_IN_SECONDS * 20 );
        $bootstrap_url = $get_the_url;
		$bootstrap_js_url = 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js';
    }
}

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


/**
 * Enqueue scripts and styles for the front end.
 */
// Add Lato font, used in the main stylesheet.
wp_enqueue_style(
	'fw-theme-lato',
	fw_theme_font_url(),
	array(),
	'1.0'
);

// Add Genericons font, used in the main stylesheet.
wp_enqueue_style(
	'genericons',
	get_template_directory_uri() . '/css/genericons/genericons.css',
	array(),
	'1.0'
);

// Load our main stylesheet.
wp_enqueue_style(
	'fw-theme-style',
	get_stylesheet_uri(),
	array( 'genericons' ),
	'1.0'
);

// Load the Internet Explorer specific stylesheet.
wp_enqueue_style(
	'fw-theme-ie',
	get_template_directory_uri() . '/css/ie.css',
	array( 'fw-theme-style', 'genericons' ),
	'1.0'
);

wp_style_add_data( 'fw-theme-ie', 'conditional', 'lt IE 9' );

if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	wp_enqueue_script( 'comment-reply' );
}

if ( is_singular() && wp_attachment_is_image() ) {
	wp_enqueue_script(
		'fw-theme-keyboard-image-navigation',
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
		'fw-theme-slider',
		get_template_directory_uri() . '/js/slider.js',
		array( 'jquery' ),
		'1.0',
		true
	);
	wp_localize_script( 'fw-theme-slider', 'featuredSliderDefaults', array(
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
	'fw-theme-script',
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



// Smooth Scroll
if (! function_exists('print_smooth_scroll')) :
	function print_smooth_scroll() {
		?>
		<script>
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
		</script>
		<?php
	}
	add_action( 'wp_footer', 'print_smooth_scroll', 30 );
endif;
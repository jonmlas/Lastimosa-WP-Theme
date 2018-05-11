<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Direct access forbidden.' ); }
/**
 * Filters and Actions
 */

if ( ! function_exists( '_action_theme_setup' ) ) : /**
 * Theme setup.
 *
 * Set up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support post thumbnails.
 * @internal
 */ {
	function _action_theme_setup() {

		/*
		 * Make Theme available for translation.
		 */
		load_theme_textdomain( 'lastimosa', get_template_directory() . '/languages' );

		// Add RSS feed links to <head> for posts and comments.
		add_theme_support( 'automatic-feed-links' );
		
		// Enable support for Post Thumbnails, and declare two sizes.
		add_theme_support( 'post-thumbnails' );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption'
		) );

		/*
		 * Enable support for Post Formats.
		 * See http://codex.wordpress.org/Post_Formats
		 */
		add_theme_support( 'post-formats', array(
			'aside',
			'image',
			'video',
			'audio',
			'quote',
			'link',
			'gallery',
		) );

		// Add support for featured content.
		add_theme_support( 'featured-content', array(
			'featured_content_filter' => 'fw_theme_get_featured_posts',
			'max_posts'               => 6,
		) );

		// This theme uses its own gallery styles.
		add_filter( 'use_default_gallery_style', '__return_false' );
	}
}
endif;
add_action( 'init', '_action_theme_setup' );


if( ! function_exists('lastimosa_move_jquery_scripts') ) :
	/**
	 * Move jQuery to the footer. 
	 */
	function lastimosa_move_jquery_scripts() {
			wp_scripts()->add_data( 'jquery', 'group', 1 );
			wp_scripts()->add_data( 'jquery-core', 'group', 1 );
			wp_scripts()->add_data( 'jquery-migrate', 'group', 1 );
	}
	add_action( 'wp_enqueue_scripts', 'lastimosa_move_jquery_scripts' );
endif;


/**
 * Extend the default WordPress post classes.
 *
 * Adds a post class to denote:
 * Non-password protected page with a post thumbnail.
 *
 * @param array $classes A list of existing post class values.
 *
 * @return array The filtered post class list.
 * @internal
 */
function _filter_theme_post_classes( $classes ) {
	if ( ! post_password_required() && ! is_attachment() && has_post_thumbnail() ) {
		$classes[] = 'has-post-thumbnail';
	}

	return $classes;
}

add_filter( 'post_class', '_filter_theme_post_classes' );

/**
 * Create a nicely formatted and more specific title element text for output
 * in head of document, based on current view.
 *
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 *
 * @return string The filtered title.
 * @internal
 */
function _filter_theme_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() ) {
		return $title;
	}

	// Add the site name.
	$title .= get_bloginfo( 'name', 'display' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title = "$title $sep $site_description";
	}

	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 ) {
		$title = "$title $sep " . sprintf( __( 'Page %s', 'unyson' ), max( $paged, $page ) );
	}

	return $title;
}

add_filter( 'wp_title', '_filter_theme_wp_title', 10, 2 );


/**
 * Flush out the transients used in fw_theme_categorized_blog.
 * @internal
 */
function _action_theme_category_transient_flusher() {
	// Like, beat it. Dig?
	delete_transient( 'fw_theme_category_count' );
}

add_action( 'edit_category', '_action_theme_category_transient_flusher' );
add_action( 'save_post', '_action_theme_category_transient_flusher' );


if ( ! function_exists( 'lastimosa_theme_widgets_init' ) ) :
	/**
	 * Register widget areas
	 * @internal
	 */
	function lastimosa_theme_widgets_init() {
		$beforeWidget = '<aside id="%1$s" class="widget %2$s pb-3 pb-md-0">';
		$afterWidget  = '</aside>';
		$beforeTitle  = '<h2 class="widget-title"><span>';
		$afterTitle   = '</span></h2>';
		register_sidebar(array('name' => __( 'Right Sidebar Area', 'lastimosa' ), 'id' => 'sidebar-right', 'description' => '', 'before_widget' => $beforeWidget, 'after_widget'  => $afterWidget, 'before_title'  => $beforeTitle, 'after_title'   => $afterTitle, ) );
		register_sidebar(array('name' => __( 'Left Sidebar Area', 'lastimosa' ), 'id' => 'sidebar-left', 'description' => '', 'before_widget' => $beforeWidget, 'after_widget'  => $afterWidget, 'before_title'  => $beforeTitle, 'after_title'   => $afterTitle, ) );
		register_sidebar(array('name' => __('Footer Column 1','lastimosa'), 'id' => 'footer-1', 'before_widget' => $beforeWidget, 'after_widget' => $afterWidget, 'before_title' => $beforeTitle, 'after_title' => $afterTitle, 'description' => ''));
		register_sidebar(array('name' => __('Footer Column 2','lastimosa'), 'id' => 'footer-2', 'before_widget' => $beforeWidget, 'after_widget' => $afterWidget, 'before_title' => $beforeTitle, 'after_title' => $afterTitle, 'description' => ''));
		register_sidebar(array('name' => __('Footer Column 3','lastimosa'), 'id' => 'footer-3', 'before_widget' => $beforeWidget, 'after_widget' => $afterWidget, 'before_title' => $beforeTitle, 'after_title' => $afterTitle, 'description' => ''));
		register_sidebar(array('name' => __('Footer Column 4','lastimosa'), 'id' => 'footer-4', 'before_widget' => $beforeWidget, 'after_widget' => $afterWidget, 'before_title' => $beforeTitle, 'after_title' => $afterTitle, 'description' => ''));
		$footer_widgets = lastimosa_get_option('footer_widgets');
		if($footer_widgets['enabled'] == 'yes') : 
		$footer_widgets = $footer_widgets['yes'];
			if(isset($footer_widgets['style']['selected'])){
				$column_count = $footer_widgets['style']['selected'];
			}
			if($column_count == 'col-md-15'):
				register_sidebar(array('name' => __('Footer Column 5','lastimosa'), 'id' => 'footer-5', 'before_widget' => $beforeWidget, 'after_widget' => $afterWidget, 'before_title' => $beforeTitle, 'after_title' => $afterTitle, 'description' => ''));
			endif;
		endif;
	}
	add_action( 'widgets_init', 'lastimosa_theme_widgets_init' );
endif;


if ( defined( 'FW' ) ):
	/**
	 * Display current submitted FW_Form errors
	 * @return array
	 */
	if ( ! function_exists( '_action_theme_display_form_errors' ) ):
		function _action_theme_display_form_errors() {
			$form = FW_Form::get_submitted();

			if ( ! $form || $form->is_valid() ) {
				return;
			}

			wp_enqueue_script(
				'fw-theme-show-form-errors',
				get_template_directory_uri() . '/js/form-errors.js',
				array( 'jquery' ),
				'1.0',
				true
			);

			wp_localize_script( 'fw-theme-show-form-errors', '_localized_form_errors', array(
				'errors'  => $form->get_errors(),
				'form_id' => $form->get_id()
			) );
		}
	endif;
	add_action('wp_enqueue_scripts', '_action_theme_display_form_errors');
endif;

// header codes TBA
/*function header_codes(){ ?>
<meta name="p:domain_verify" content="11a9f282e758efc09c7ce6c1d7a550d7"/>
<?php
}
add_action('wp_head', 'header_codes');*/

/* Loads up custom css in the admin page */
if(is_admin() && ( ! function_exists('add_custom_editor_styles'))){
	function add_custom_editor_styles() {
	  echo '<style>
				.builder-root-items img.media-image.alignleft {
					float: left;
					margin-right: 10px;
					margin-top: 5px;
				}
				.builder-root-items img.fw-ext-builder-icon {
					display:none;
				}
				.builder-root-items img.media-image {
					width:auto;
					max-width:100%;
					height:auto;
					margin:0 auto;
					display:block;
				}
				.builder-root-items #fw-backend-option-fw-edit-options-modal-title,
				.builder-root-items #fw-backend-option-fw-edit-options-modal-subtitle {
					border-bottom: medium none;
					padding-bottom: 0;
				}
				.fw-backend-option-design-default > .fw-backend-option-input.width-type-fixed > .fw-inner, .fw-backend-option-design-customizer > .fw-backend-option-input.width-type-fixed > .fw-inner, .fw-backend-option-design-taxonomy > td > .fw-backend-option-input.width-type-fixed > .fw-inner, .fw-backend-option-fixed-width {
					max-width:430px;
				}
				.fw-backend-option-design-default > .fw-backend-option-input.width-type-fixed.fw-backend-option-input-type-wp-editor > .fw-inner {
					max-width: 100%;
				}
			} 
		  </style>';
	}
	add_action( 'admin_head', 'add_custom_editor_styles' );
}

/* Add Google Fonts */
/*function _filter_theme_add_roboto_google_font($fonts) {
    $fonts['Roboto']  = array(
        'family'    => 'Roboto',
        'variants'  => array(
            100, 300, 400, 500, 700
        ),
    );
    //ksort($fonts);
    return $fonts;
}
add_filter('fw_google_fonts', '_filter_theme_add_roboto_google_font');*/


if( !function_exists('lastimosa_excerpt') ) :
	/**
	 * Page Slug Body Class
	 */
	function lastimosa_add_slug_body_class( $classes ) {
		global $post;
		if ( isset( $post ) ) {
			$classes[] = $post->post_type.'-'.$post->post_name;
			}
		return $classes;
	}
	add_filter( 'body_class', 'lastimosa_add_slug_body_class' );
endif;

if( !function_exists('lastimosa_excerpt') ) :
	function lastimosa_excerpt($limit) {
		$limit++;
		$excerpt = preg_replace('|<img (.+?)>|i', '', get_the_excerpt());
		$excerpt = preg_replace('|<div id="attachment_(.+?)" class="wp-caption(.+?)<\/div>|i', '', $excerpt);
		$excerpt = explode(' ', $excerpt, $limit);
		if (count($excerpt)>=$limit) {
		array_pop($excerpt);
		$excerpt = implode(" ",$excerpt).'...';
		} else {
		$excerpt = implode(" ",$excerpt);
		}	
		$excerpt = preg_replace('`[[^]]*]`','',$excerpt);
		return $excerpt;
	}
endif;


/**
 * Replaces the default excerpt editor with TinyMCE.
 */
add_action( 'add_meta_boxes', array ( 'T5_Richtext_Excerpt', 'switch_boxes' ) );
class T5_Richtext_Excerpt
{
    /**
     * Replaces the meta boxes.
     *
     * @return void
     */
    public static function switch_boxes()
    {
        if ( ! post_type_supports( $GLOBALS['post']->post_type, 'excerpt' ) )
        {
            return;
        }

        remove_meta_box(
            'postexcerpt' // ID
        ,   ''            // Screen, empty to support all post types
        ,   'normal'      // Context
        );

        add_meta_box(
            'postexcerpt2'     // Reusing just 'postexcerpt' doesn't work.
        ,   __( 'Excerpt' )    // Title
        ,   array ( __CLASS__, 'show' ) // Display function
        ,   null              // Screen, we use all screens with meta boxes.
        ,   'normal'          // Context
        ,   'core'            // Priority
        );
    }

    /**
     * Output for the meta box.
     *
     * @param  object $post
     * @return void
     */
    public static function show( $post )
    {
    ?>
        <label class="screen-reader-text" for="excerpt"><?php
        _e( 'Excerpt' )
        ?></label>
        <?php
        // We use the default name, 'excerpt', so we don’t have to care about
        // saving, other filters etc.
        wp_editor(
            self::unescape( $post->post_excerpt ),
            'excerpt',
            array (
            'textarea_rows' => 15
        ,   'media_buttons' => FALSE
        ,   'teeny'         => TRUE
        ,   'tinymce'       => TRUE
            )
        );
    }

    /**
     * The excerpt is escaped usually. This breaks the HTML editor.
     *
     * @param  string $str
     * @return string
     */
    public static function unescape( $str )
    {
        return str_replace(
            array ( '&lt;', '&gt;', '&quot;', '&amp;', '&nbsp;', '&amp;nbsp;' )
        ,   array ( '<',    '>',    '"',      '&',     ' ', ' ' )
        ,   $str
        );
    }
}


if ( !function_exists('lastimosa_print_smooth_scroll') ) :
	/**
	 * Smooth Scroll
	 */
	function lastimosa_print_smooth_scroll() {
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
	add_action( 'wp_footer', 'lastimosa_print_smooth_scroll', 30 );
endif;


if (! function_exists('lastimosa_include_custom_option_types')) :
	/** @internal */
	function lastimosa_include_custom_option_types() {
		require_once dirname(__FILE__) . '/includes/option-types/fw-multi-inline/class-fw-option-type-fw-multi-inline.php';
		require_once dirname(__FILE__) . '/includes/option-types/predefined-colors/class-fw-option-type-predefined-colors.php';
		require_once dirname(__FILE__) . '/includes/option-types/predefined-colors-color-picker/class-fw-option-type-predefined-colors-color-picker.php';
	}
add_action('fw_option_types_init', 'lastimosa_include_custom_option_types');
endif;


if ( is_plugin_active( 'unyson/unyson.php' ) ) :
	// This will force deactivate Styling extension because I don't need it.
	add_action('admin_footer', '_action_theme_disable_fw_styling');
	function _action_theme_disable_fw_styling() {
			if (fw()->extensions->manager->can_activate() && fw_ext('styling')) {
					fw()->extensions->manager->deactivate_extensions(array('styling' => array()));
			}
	}
	// And this will hide the Styling extension activator in the Unyson dashboard
	if (defined('FW')):
			/** @internal */
			function _action_hide_extensions_from_the_list() {
					//global $current_screen; fw_print($current_screen); // debug

					if (fw_current_screen_match(array('only' => array('id' => 'toplevel_page_fw-extensions')))) {
							echo '<style type="text/css"> #fw-ext-styling { display: none; } </style>';
					}
			}
			add_action('admin_print_scripts', '_action_hide_extensions_from_the_list');
	endif;
endif;
<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Direct access forbidden.' ); }
/**
 * Helper functions and classes with static methods for usage in theme
 */

if(! function_exists('lastimosa_logo')) :
	/**
	 * The Logo
	 */
	function lastimosa_logo() {	 		
		$header_logo = lastimosa_get_option('header_logo');
		if( !isset($header_logo) ) return;
		if( !empty($header_logo['image']) ) {
			$header_logo['width'] = preg_replace('/[^0-9]/', '', $header_logo['width']);
			if( !empty($header_logo['width']) ) {
				$img_attr['src'] 		= fw_resize( $header_logo['image']['url'], $header_logo['width'], 0, false );
				$img_attr['width'] 	= $header_logo['width'];
				$img_attr['height'] = 'auto';
			}else{
				$img_attr['src'] 		= $header_logo['image']['url'];
				$meta = wp_prepare_attachment_for_js($header_logo['image']['attachment_id']);
				$img_attr['width'] 	= $meta['width'];  
				$img_attr['height'] = $meta['height'];
			}
			$img_attr['alt']			= $header_logo['name'];
			$img_attr['class'] 		= 'site-logo img-fluid';
			
			$logo = lastimosa_html_tag( 'img', $img_attr );
		}else{
			$logo = $header_logo['name'];
		}
		if ( is_front_page() || is_home() ) {
			$tag = 'h1';
		}else{
			$tag = 'p';
		}
		echo lastimosa_html_tag( $tag, array( 'class' => 'site-title'),  
														lastimosa_html_tag( 'a', array( 'href' => esc_url( home_url( '/' ) ), 'rel' => 'home' ), $logo)
													 );

		$description = get_bloginfo( 'description', 'display' );
		if ( $description || is_customize_preview() ) {
			$description_class[] = 'site-description';
			if( !empty($header_logo['tagline'])) $description_class[] = $header_logo['tagline'];
			echo lastimosa_html_tag( 'p', array( 'class' => join(' ', $description_class )), $description );
		}
	}
endif;


/**
 * Getter function for Featured Content Plugin.
 *
 * @return array An array of WP_Post objects.
 */
function fw_theme_get_featured_posts() {
	/**
	 * @param array|bool $posts Array of featured posts, otherwise false.
	 */
	return apply_filters( 'fw_theme_get_featured_posts', array() );
}


/**
 * Custom template tags
 */
 
if ( ! function_exists( 'lastimosa_paging_nav' ) ) : 
/**
 * Display navigation to next/previous set of posts when applicable.
 */ 
	function lastimosa_paging_nav( $wp_query = null ) {

		if ( ! $wp_query ) {
			$wp_query = $GLOBALS['wp_query'];
		}

		$big = 999999999; // This needs to be an unlikely integer
		if( is_home() ) {
			$paged = ( get_query_var('page') ) ? get_query_var('page') : 1;
		}else{
			$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
		}
		// Don't print empty markup if there's only one page.

		if ( $wp_query->max_num_pages < 2 ) {
			return;
		}

		$paged        = get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1;
		$pagenum_link = html_entity_decode( get_pagenum_link() );
		$query_args   = array();
		$url_parts    = explode( '?', $pagenum_link );

		if ( isset( $url_parts[1] ) ) {
			wp_parse_str( $url_parts[1], $query_args );
		}

		$pagenum_link = remove_query_arg( array_keys( $query_args ), $pagenum_link );
		$pagenum_link = trailingslashit( $pagenum_link ) . '%_%';

		$format = $GLOBALS['wp_rewrite']->using_index_permalinks() && ! strpos( $pagenum_link,
			'index.php' ) ? 'index.php/' : '';
		$format .= $GLOBALS['wp_rewrite']->using_permalinks() ? user_trailingslashit( 'page/%#%',
			'paged' ) : '?paged=%#%';

		// Set up paginated links.
		$links = paginate_links( array(
			'base' => str_replace( $big, '%#%', get_pagenum_link($big) ),
			'format'    => $format,
			'total'     => $wp_query->max_num_pages,
			'current'   => $paged,
			'mid_size' => 5,
			'prev_next' => True,
			'add_args'  => array_map( 'urlencode', $query_args ),
			'prev_text'    => sprintf( '<i class="fa fa-angle-double-left"></i> %1$s', __( '', 'lastimosa' ) ),
			'next_text'    => sprintf( '%1$s <i class="fa fa-angle-double-right"></i>', __( '', 'lastimosa' ) ),
		) );
		
		$numeric_paginate_links = paginate_links( array(
				'base' => str_replace( $big, '%#%', get_pagenum_link($big) ),
				'current' => max( 1, $paged ),
				'total' => $wp_query->max_num_pages,
				'mid_size' => 5,
				'prev_next' => True,
				'prev_text'    => sprintf( '<i class="fa fa-angle-double-left"></i> %1$s', __( '', 'lastimosa' ) ),
				'next_text'    => sprintf( '%1$s <i class="fa fa-angle-double-right"></i>', __( '', 'lastimosa' ) ),
				'type' => 'list'
		) );

		if ( $links ) :

			?>
			<nav class="navigation paging-navigation" role="navigation">
				<h4 class="screen-reader-text"><?php _e( 'Posts navigation', 'lastimosa' ); ?></h4>

				<div class="pagination loop-pagination">
					<?php echo $links; ?>
				</div>
				<!-- .pagination -->
			</nav><!-- .navigation -->
		<?php
		endif;
	}
endif;


if ( ! function_exists( 'lastimosa_post_nav' ) ) : /**
 * Display navigation to next/previous post when applicable.
 */ {
	function lastimosa_post_nav() {
		if ( is_page() ) {
			return;
		}
		
		// Don't print empty markup if there's nowhere to navigate.
		$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '',
			true );
		$next     = get_adjacent_post( false, '', false );

		if ( ! $next && ! $previous ) {
			return;
		}

		?>
		<nav class="navigation post-navigation" role="navigation">
			<?php 
			$postType = get_queried_object();
			$obj = get_post_type_object( $postType->post_type );
			$post_type = $obj->labels->singular_name;
			if( $postType->post_type == 'post' ) $post_type .= ' Post';
			?>
			
			<h3 class="screen-reader-text"><?php _e( $post_type . ' navigation', 'lastimosa' ); ?></h3>

			<div class="nav-links row mb-4">
				<?php
				if ( is_attachment() ) :
					previous_post_link( '%link',
						__( '<span class="meta-nav">Published In</span>%title', 'lastimosa' ) );
				else :
					if(get_previous_post()) {
						previous_post_link( '<div class="meta-nav col-md-6">%link</div>', __( '<h5 class="previous">Previous ' . $post_type . '</h5><h4>%title</h4>', 'lastimosa' ) );
						next_post_link( '<div class="meta-nav text-md-right col-md-6">%link</div>', __( '<h5 class="next">Next ' . $post_type . '</h5><h4>%title</h4>', 'lastimosa' ) );
					}else{
						echo '<div class="meta-nav col-md-6"></div>';
						next_post_link( '<div class="meta-nav text-md-right col-md-6">%link</div>', __( '<h5 class="next">Next ' . $post_type . '</h5><h4>%title</h4>', 'lastimosa' ) );
					}
				endif;
				?>
			</div>
			<!-- .nav-links -->
		</nav><!-- .navigation -->
	<?php
	}
}
endif;
add_action( 'lastimosa_after_entry', 'lastimosa_post_nav' );


if ( ! function_exists( 'lastimosa_tags_list' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function lastimosa_tags_list() {
	
		/* translators: used between list items, there is a space after the comma */
		$separate_meta = __( ', ', 'lastimosa' );
	
		// Get Tags for posts.
		$tags_list = get_the_tag_list( '', $separate_meta );
	
		if ( $tags_list ) {
			echo '<div class="tags-links"><span class="screen-reader-text">' . __( 'Tags: ', 'lastimosa' ) . '</span>' . $tags_list . '</div>';
		}
	}
	add_action('lastimosa_entry_footer','lastimosa_tags_list');
endif;


if ( !function_exists('lastimosa_cdn_fallback') ):
/**
 *  Load CDN with local fallback
 */
function lastimosa_cdn_fallback($cdn_url,$local_url) {
	$cdnIsUp = get_transient( 'cnd_is_up' );
	if ( $cdnIsUp ) {
		return $cdn_url;
	} else {
		$cdn_response = wp_remote_get( $cdn_url );
		if( is_wp_error( $cdn_response ) || wp_remote_retrieve_response_code($cdn_response) != '200' ) {
			return $local_url;
		}
		else {
			$cdnIsUp = set_transient( 'cnd_is_up', true, MINUTE_IN_SECONDS * 20 );
			return $cdn_url;
		}
	}
}
endif;


if ( !function_exists('lastimosa_author_info_box') ):
/**
 *  Add Author Info Box 
 */
function lastimosa_author_info_box() {
	$content_posts = lastimosa_get_option('content_posts');
	if(!$content_posts['author-box']) {
		return;
	}
	global $post;
	
	// Detect if it is a single post with a post author
	if ( is_single() && isset( $post->post_author ) ) {
		
	// Get author's display name 
	$display_name = get_the_author_meta( 'display_name', $post->post_author );
	
	// If display name is not available then use nickname as display name
	if ( empty( $display_name ) )
	$display_name = get_the_author_meta( 'nickname', $post->post_author );
	
	// Get author's biographical information or description
	$user_description = get_the_author_meta( 'user_description', $post->post_author );
	
	// Get author's website URL 
	$user_website = get_the_author_meta('url', $post->post_author);
	
	// Get link to the author archive page
	$user_posts = get_author_posts_url( get_the_author_meta( 'ID' , $post->post_author));
	$avatar_args = array(
	   'class' => 'alignleft'
	 );
	$author_details .= get_avatar( get_the_author_meta('user_email') , 90, null, null, $avatar_args);
	 
	if ( ! empty( $display_name ) )
	
	$author_details .= '<h3 class="author-name">About ' . $display_name . '</h3>';
	
	if ( ! empty( $user_description ) )
	// Author avatar and bio
	
	$author_details .= '<p class="author_details">' . nl2br( $user_description ). '</p>';
	
	$author_details .= '<p class="author_links"><a href="'. $user_posts .'">View all posts by ' . $display_name . '</a>';  
	
	// Check if author has a website in their profile
	if ( ! empty( $user_website ) ) {
	
	// Display author website link
	$author_details .= ' | <a href="' . $user_website .'" target="_blank" rel="nofollow">Website</a></p>';
	
	} else { 
	// if there is no author website then just close the paragraph
	$author_details .= '</p>';
	}
	
	// Pass all this info to post content  
	echo '<div class="author-bio" >' . $author_details . '</div>';
	}
}

// Add our function to the post content filter 
add_action( 'lastimosa_entry_footer', 'lastimosa_author_info_box' );

// Allow HTML in author bio section 
remove_filter('pre_user_description', 'wp_filter_kses');
endif;


if ( ! function_exists( 'fw_theme_posted_on' ) ) : /**
 * Print HTML with meta information for the current post-date/time and author.
 */ {
	function fw_theme_posted_on() {
		if ( is_sticky() && is_home() && ! is_paged() ) {
			echo '<span class="featured-post">' . __( 'Sticky', 'lastimosa' ) . '</span>';
		}

		// Set up and print post meta information.
		printf( '<span class="entry-date"><a href="%1$s" rel="bookmark"><time class="entry-date" datetime="%2$s">%3$s</time></a></span> <span class="byline"><span class="author vcard"><a class="url fn n" href="%4$s" rel="author">%5$s</a></span></span>',
			esc_url( get_permalink() ),
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() ),
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
			get_the_author()
		);
	}
}
endif;

/**
 * Find out if blog has more than one category.
 *
 * @return boolean true if blog has more than 1 category
 */
function fw_theme_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'fw_theme_category_count' ) ) ) {
		// Create an array of all the categories that are attached to posts
		$all_the_cool_cats = get_categories( array(
			'hide_empty' => 1,
		) );

		// Count the number of categories that are attached to the posts
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'fw_theme_category_count', $all_the_cool_cats );
	}

	if ( 1 !== (int) $all_the_cool_cats ) {
		// This blog has more than 1 category so fw_theme_categorized_blog should return true
		return true;
	} else {
		// This blog has only 1 category so fw_theme_categorized_blog should return false
		return false;
	}
}

/**
 * Display an optional post thumbnail.
 *
 * Wraps the post thumbnail in an anchor element on index
 * views, or a div element when on single views.
 */
function fw_theme_post_thumbnail() {
	if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
		return;
	}

	$current_position = false;
	if (function_exists('fw_ext_sidebars_get_current_position')) {
		$current_position = fw_ext_sidebars_get_current_position();
	}



	if ( is_singular() ) :
		?>

		<div class="post-thumbnail">
			<?php
			if ( ( in_array( $current_position,
					array( 'full', 'left' ) ) || is_page_template( 'page-templates/full-width.php' )
				|| empty($current_position)
			)
			) {
				the_post_thumbnail( 'fw-theme-full-width' );
			} else {
				the_post_thumbnail();
			}
			?>
		</div>

	<?php else : ?>

		<a class="post-thumbnail" href="<?php the_permalink(); ?>">
			<?php
			if ( ( in_array( $current_position,
					array( 'full', 'left' ) ) || is_page_template( 'page-templates/full-width.php' ) )
					|| empty($current_position)
			) {
				the_post_thumbnail( 'fw-theme-full-width' );
			} else {
				the_post_thumbnail();
			}
			?>
		</a>

	<?php endif; // End is_singular()
}


if ( ! function_exists( 'lastimosa_get_image_sizes' ) ) :
function  lastimosa_get_image_sizes() {
	/**
	* Get size information for all currently-registered image sizes.
	* https://codex.wordpress.org/Function_Reference/get_intermediate_image_sizes
	* @global $_wp_additional_image_sizes
	* @uses   get_intermediate_image_sizes()
	* @return array $sizes Data for all currently-registered image sizes.
	*/
	global $_wp_additional_image_sizes;

	$sizes = array();

	foreach ( get_intermediate_image_sizes() as $_size ) {
		if ( in_array( $_size, array('thumbnail', 'medium', 'medium_large', 'large') ) ) {
			$sizes[ $_size ]['width']  = get_option( "{$_size}_size_w" );
			$sizes[ $_size ]['height'] = get_option( "{$_size}_size_h" );
			$sizes[ $_size ]['crop']   = (bool) get_option( "{$_size}_crop" );
		} elseif ( isset( $_wp_additional_image_sizes[ $_size ] ) ) {
			$sizes[ $_size ] = array(
				'width'  => $_wp_additional_image_sizes[ $_size ]['width'],
				'height' => $_wp_additional_image_sizes[ $_size ]['height'],
				'crop'   => $_wp_additional_image_sizes[ $_size ]['crop'],
			);
		}
	}
	return $sizes;
}
endif;


if ( ! function_exists( 'lastimosa_get_image_size' ) ) :
	/**
	 * Get size information for a specific image size.
	 *
	 * @uses    lastimosa_get_image_sizes()
	 * @param  string $size The image size for which to retrieve data.
	 * @return bool|array $size Size data about an image size or false if the size doesn't exist.
	 */
	function lastimosa_get_image_size( $size ) {
		$sizes =  lastimosa_get_image_sizes();
		if ( isset( $sizes[$size] ) ) {
			if( $sizes[ $size ]['height'] == 0 ) 	$sizes[ $size ]['height'] = 'Auto';
			return $sizes[$size]['width'] . 'x' . $sizes[ $size ]['height'];
		}
		return false;
	}
endif;


if ( ! function_exists( 'lastimosa_get_image_width' ) ) :
	/**
	 * Get the width of a specific image size.
	 *
	 * @uses   lastimosa_get_image_size()
	 * @param  string $size The image size for which to retrieve data.
	 * @return bool|string $size Width of an image size or false if the size doesn't exist.
	 */
	function lastimosa_get_image_width( $size ) {
		if ( ! $size = lastimosa_get_image_size( $size ) ) {
			return false;
		}

		if ( isset( $size['width'] ) ) {
			return $size['width'];
		}

		return false;
	}
endif;


if ( ! function_exists( 'lastimosa_get_image_height' ) ) :
	/**
	 * Get the height of a specific image size.
	 *
	 * @uses   lastimosa_get_image_size()
	 * @param  string $size The image size for which to retrieve data.
	 * @return bool|string $size Height of an image size or false if the size doesn't exist.
	 */
	function lastimosa_get_image_height( $size ) {
		if ( ! $size = lastimosa_get_image_size( $size ) ) {
			return false;
		}

		if ( isset( $size['height'] ) ) {
			return $size['height'];
		}

		return false;
	}
endif;


if( ! function_exists('lastimosa_excerpt') ) :
	function lastimosa_excerpt($limit) {
		$limit++;
		$excerpt = preg_replace('|<img (.+?)>|i', '', get_the_excerpt());
		$excerpt = preg_replace('|<div id="attachment_(.+?)" class="wp-caption(.+?)<\/div>|i', '', $excerpt);
		$excerpt = explode(' ', $excerpt, $limit);
		if ( count($excerpt) >= $limit ) {
		array_pop($excerpt);
		$excerpt = implode(" ", $excerpt).'...';
		} else {
		$excerpt = implode(" ", $excerpt);
		}	
		$excerpt = preg_replace('`[[^]]*]`','',$excerpt);
		return $excerpt;
	}
endif;


if( ! function_exists('lastimosa_array_keys_exist') ) :
	/**
	 * Checks if multiple keys exist in an array
	 *
	 * @param array $array
	 * @param array|string $keys
	 *
	 * @return bool
	 */
	function lastimosa_array_keys_exist( array $array, $keys ) {
		$count = 0;
		if ( ! is_array( $keys ) ) {
			$keys = func_get_args();
			array_shift( $keys );
		}
		foreach ( $keys as $key ) {
			if ( isset( $array[$key] ) || array_key_exists( $key, $array ) ) {
					$count ++;
			}
		}
		return count( $keys ) === $count;
	}
endif;
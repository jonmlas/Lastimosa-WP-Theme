<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Direct access forbidden.' ); }

if ( ! function_exists( 'entry_meta' ) ) :
/**
 * Prints HTML with meta information for the categories, tags.
 */
function entry_meta() {
	if ( 'post' === get_post_type() ) {
		$author_avatar_size = apply_filters( 'author_avatar_size', 49 );
		printf( '<span class="byline"><span class="author vcard">%1$s<span class="screen-reader-text">%2$s </span> <a class="url fn n" href="%3$s">%4$s</a></span></span>',
			get_avatar( get_the_author_meta( 'user_email' ), $author_avatar_size ),
			_x( 'Author', 'Used before post author name.', 'lastimosa' ),
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
			get_the_author()
		);
	}

	if ( in_array( get_post_type(), array( 'post', 'attachment' ) ) ) {
		entry_date();
	}

	$format = get_post_format();
	if ( current_theme_supports( 'post-formats', $format ) ) {
		printf( '<span class="entry-format">%1$s<a href="%2$s">%3$s</a></span>',
			sprintf( '<span class="screen-reader-text">%s </span>', _x( 'Format', 'Used before post format.', 'lastimosa' ) ),
			esc_url( get_post_format_link( $format ) ),
			get_post_format_string( $format )
		);
	}

/*	if ( 'post' === get_post_type() ) {
		entry_taxonomies();
	}*/

	if ( ! is_singular() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="comments-link">';
		comments_popup_link( sprintf( __( 'Leave a comment<span class="screen-reader-text"> on %s</span>', 'lastimosa' ), get_the_title() ) );
		echo '</span>';
	}
}
endif;

if ( ! function_exists( 'entry_date' ) ) :
/**
 * Prints HTML with date information for current post.
 */
function entry_date() {
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';

	/*if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
	}*/

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		get_the_date(),
		esc_attr( get_the_modified_date( 'c' ) ),
		get_the_modified_date()
	);

	printf( '<span class="posted-on"><span class="screen-reader-text">%1$s </span><a href="%2$s" rel="bookmark">%3$s</a></span>',
		_x( 'Posted on', 'Used before publish date.', 'lastimosa' ),
		esc_url( get_permalink() ),
		$time_string
	);
}
endif;


// Enable Formatting of the Excerpt
function custom_wp_trim_excerpt($text) {
$raw_excerpt = $text;
if ( '' == $text ) {
    //Retrieve the post content. 
    $text = get_the_content('');
 	$text = strip_shortcodes( $text );
    $text = apply_filters('the_content', $text);
    $text = str_replace(']]&gt;', ']]&gt;', $text);

    // the code below sets the excerpt length to 55 words. You can adjust this number for your own blog.
    $excerpt_length = apply_filters('excerpt_length', 55);

    // the code below sets what appears at the end of the excerpt, in this case ...
    $excerpt_more = apply_filters('excerpt_more', ' ' . '...');

    $words = preg_split("/[\n\r\t ]+/", $text, $excerpt_length + 1, PREG_SPLIT_NO_EMPTY);
    if ( count($words) & $excerpt_length ) {
        array_pop($words);
        $text = implode(' ', $words);
        $text = force_balance_tags( $text );
        $text = $text . $excerpt_more;
    } else {
        $text = implode(' ', $words);
    }

}
return apply_filters('wp_trim_excerpt', $text, $raw_excerpt);
}
remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'custom_wp_trim_excerpt');

// Removes the read more link in the excerpt.
if(!function_exists('custom_excerpt_more')) {
	function custom_excerpt_more($more) {
		return '';
	}
	add_filter('excerpt_more', 'custom_excerpt_more');
}
<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Direct access forbidden.' ); }
/**
 * Define custom posts and taxonomies
 */

/**
 * Register a book post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */

/*$labels = array(
	'name'               => __( 'Books', 'lastimosa' ),
	'singular_name'      => __( 'Book', 'lastimosa' ),
	'menu_name'          => __( 'Books', 'lastimosa' ),
	'name_admin_bar'     => __( 'Book', 'lastimosa' ),
	'add_new'            => __( 'Add New', 'lastimosa' ),
	'add_new_item'       => __( 'Add New Book', 'lastimosa' ),
	'new_item'           => __( 'New Book', 'lastimosa' ),
	'edit_item'          => __( 'Edit Book', 'lastimosa' ),
	'view_item'          => __( 'View Book', 'lastimosa' ),
	'all_items'          => __( 'All Books', 'lastimosa' ),
	'search_items'       => __( 'Search Books', 'lastimosa' ),
	'parent_item_colon'  => __( 'Parent Books:', 'lastimosa' ),
	'not_found'          => __( 'No books found.', 'lastimosa' ),
	'not_found_in_trash' => __( 'No books found in Trash.', 'lastimosa' )
);

$args = array(
	'labels'             => $labels,
	'public'             => true,
	'publicly_queryable' => true,
	'show_ui'            => true,
	'show_in_menu'       => true,
	'query_var'          => true,
	'rewrite'            => array( 'slug' => 'book' ),
	'capability_type'    => 'post',
	'has_archive'        => true,
	'hierarchical'       => false,
	'menu_position'      => null,
	//'menu_icon'					 => 'dashicons-tablet';
	'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
);

register_post_type( 'book', $args );*/

/**
 * Register a genre taxonomy.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

/*$labels = array(
	'name'              => __( 'Genres', 'lastimosa' ),
	'singular_name'     => __( 'Genre', 'lastimosa' ),
	'search_items'      => __( 'Search Genres', 'lastimosa' ),
	'all_items'         => __( 'All Genres', 'lastimosa' ),
	'parent_item'       => __( 'Parent Genre', 'lastimosa' ),
	'parent_item_colon' => __( 'Parent Genre', 'lastimosa' ) . ':',
	'edit_item'         => __( 'Edit Genre', 'lastimosa' ),
	'update_item'       => __( 'Update Genre', 'lastimosa' ),
	'add_new_item'      => __( 'Add New Genre', 'lastimosa' ),
	'new_item_name'     => __( 'New Genre Name', 'lastimosa' ),
	'menu_name'         => __( 'Genre', 'lastimosa' ),
);

$args = array(
	'hierarchical'      => true,
	'labels'            => $labels,
	'show_ui'           => true,
	'show_admin_column' => true,
	'query_var'         => true,
	'rewrite'           => array( 'slug' => 'genre' ),
);

register_taxonomy( 'genre', array( 'book' ), $args );*/
<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

function _action_add_portfolio_tags() {
    $labels = array(
        'name'              => __( 'Tags', 'lastimosa' ),
        'singular_name'     => __( 'Tag', 'lastimosa' ),
        'search_items'      => __( 'Search Tag', 'lastimosa' ),
        'all_items'         => __( 'All Tags', 'lastimosa' ),
        'parent_item'       => __( 'Parent Tag', 'lastimosa' ),
        'parent_item_colon' => __( 'Parent Tag', 'lastimosa' ) . ':',
        'edit_item'         => __( 'Edit Tag', 'lastimosa' ),
        'update_item'       => __( 'Update Tag', 'lastimosa' ),
        'add_new_item'      => __( 'Add New Tag', 'lastimosa' ),
        'new_item_name'     => __( 'New Tag Name', 'lastimosa' ),
        'menu_name'         => __( 'Tag', 'lastimosa' ),
    );

    $args = array(
        'hierarchical'      => false,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => false,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'tag' ),
    );

    register_taxonomy( 'tag', array( 'fw-portfolio' ), $args );
}

add_action( 'init', '_action_add_portfolio_tags' );


/**
 * Dequeue Portfolio Nivo Styles
 */
function lastimosa_dequeue_styles() {
	$portfolio = fw()->extensions->get( 'portfolio' );
  wp_dequeue_script( 'fw-extension-' . $portfolio->get_name() . '-nivo-default' );
		wp_deregister_style( 'fw-extension-' . $portfolio->get_name() . '-nivo-default' );
	wp_dequeue_script( 'fw-extension-' . $portfolio->get_name() . '-nivo-dark' );
		wp_deregister_style( 'fw-extension-' . $portfolio->get_name() . '-nivo-dark' );
	wp_dequeue_script( 'fw-extension-' . $portfolio->get_name() . '-nivo-slider' );
		wp_deregister_style( 'fw-extension-' . $portfolio->get_name() . '-nivo-slider' );
}
add_action( 'wp_print_styles', 'lastimosa_dequeue_styles', 100 );

/**
 * Dequeue Portfolio Scripts
 */
function lastimosa_dequeue_scripts() {
	$portfolio = fw()->extensions->get( 'portfolio' );
  wp_dequeue_script( 'fw-extension-' . $portfolio->get_name() . '-nivoslider' );
		wp_deregister_script( 'fw-extension-' . $portfolio->get_name() . '-nivoslider' );
	//wp_dequeue_script( 'fw-extension-' . $portfolio->get_name() . '-script' );
		//wp_deregister_script( 'fw-extension-' . $portfolio->get_name() . '-script' );
}
add_action( 'wp_print_scripts', 'lastimosa_dequeue_scripts', 100 );
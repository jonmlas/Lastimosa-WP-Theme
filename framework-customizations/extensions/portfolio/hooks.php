<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

function _action_add_portfolio_tags() {
    $labels = array(
        'name'              => __( 'Tags', 'fw' ),
        'singular_name'     => __( 'Tag', 'fw' ),
        'search_items'      => __( 'Search Tag', 'fw' ),
        'all_items'         => __( 'All Tags', 'fw' ),
        'parent_item'       => __( 'Parent Tag', 'fw' ),
        'parent_item_colon' => __( 'Parent Tag', 'fw' ) . ':',
        'edit_item'         => __( 'Edit Tag', 'fw' ),
        'update_item'       => __( 'Update Tag', 'fw' ),
        'add_new_item'      => __( 'Add New Tag', 'fw' ),
        'new_item_name'     => __( 'New Tag Name', 'fw' ),
        'menu_name'         => __( 'Tag', 'fw' ),
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
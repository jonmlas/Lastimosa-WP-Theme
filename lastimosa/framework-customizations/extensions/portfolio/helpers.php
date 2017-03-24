<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

if ( ! function_exists( 'fw_theme_portfolio_post_taxonomies' ) ) :
	function fw_theme_portfolio_post_taxonomies( $post_id, $return = false ) {
        /**
         * Return portfolio post taxonomies
         * @param integer $post_id
         * @param boolean $return
         */
		$taxonomy = 'fw-portfolio-category';
		$terms    = wp_get_post_terms( $post_id, $taxonomy );
		$list     = '';
		$checked  = false;
		foreach ( $terms as $term ) {
			if ( $term->parent == 0 ) {
				// if is checked parent category
				$list .= 'category_' . $term->term_id . ' ';
				$checked = true;
			} else {
				$list .= 'category_' . $term->term_id . ', ';
				$parent_id = $term->parent;
			}
		}

		if ( ! $checked ) {
			// if is not checked parent category extract this parent
			if(isset($parent_id)){
				$term = get_term_by( 'id', $parent_id, $taxonomy );
				$list .= 'category_' . $term->term_id . ' ';
			}
		}

		if ( $return ) {
			return $list;
		} else {
			echo $list;
		}
	}
endif;
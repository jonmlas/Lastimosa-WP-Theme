<?php if (!defined('FW')) die('Forbidden');
$options = array(
	'layout' => array(
		'title'   => __( 'Layout', 'unyson' ),
		'type'    => 'tab',
		'options' => array(
			'style' => array(
				'type'    	=> 'multi-picker',
				'label'     => false,
				'desc'      => false,
				'picker'    => array(
					'view' => array(
						'label'   => __('Layout Style', 'unyson'),
						'type'    => 'select',
						'value'   => 'default',
						'choices' => array(
							'feed'  	=> __( 'Feed (Default)', 'unyson' ),
							'grid' 		=> __( 'Grid', 'unyson' ),
							'gallery' 	=> __( 'Gallery', 'unyson' )
						),
					)
				),
				'choices' => array(
					/*'feed'    => array(
						'height'  => array(
							'type'  => 'text',
							'label' => __( 'Height', 'unyson' ),
							'help'  => __('In pixels or in percentage. E.g.: \'80px\' or  \'25%\'', 'unyson'),
						),
					),*/
					'grid'    => array(
						'columns'                    => array(
							'label'   => __( 'Columns', 'unyson' ),
							'type'    => 'select',
							'value'   => 'col-md-6',
							'choices' => array(
								'col-md-6' 		=> __( '2 Columns', 'unyson' ),
								'col-md-4' 		=> __( '3 Columns', 'unyson' ),
								'col-md-3' 		=> __( '4 Columns', 'unyson' ),
							),
						),
					),
				),
				'show_borders' => false,
			),
			'category' => array(
				'type'       => 'multi-select',
				'label'      => __( 'Category', 'unyson' ),
				'population' => 'taxonomy',
				'source'     => 'category',
				'help'       => __( 'Display posts that have this category', 'unyson' ),
			),
			'posts_per_page'   => array(
				'label' => __( 'Post Per Page', 'unyson' ),
				'type'  => 'short-text',
				'value' => 10,
				'help'       => __( 'Number of post to show per page. Enter -1 to show all posts.', 'unyson' ),
			),
			'excerpt_length'	=> array(
				'label' => __( 'Excerpt Length', 'unyson' ),
				'type'  => 'short-text',
				'value' => '50',
				'desc'  => __( 'The number of words in the excerpt.', 'unyson' ),
				'help'  => __( 'Enter a negative value(e.g. -1) for full content. Leave blank to use the custom excerpt.', 'unyson' ),
			),
			'read_more_text' 	=> array(
				'label' => __( 'Read More Text', 'unyson' ),
				'type'  => 'text',
				'value' => 'Read More',
			),
			'image'				=> array(
				'label'   => __( 'Image', 'unyson' ),
				'type'    => 'select',
				'value'   => 'thumbnail',
				'choices' => array(
					'' 	 		=> __( 'None', 'unyson' ),
					'thumbnail' => __( 'Thumbnail ('.get_image_size('thumbnail').')', 'unyson' ),
					'medium' 	=> __( 'Medium ('.get_image_size('medium').')', 'unyson' ),
					'medium_large' => __( 'Medium Large ('.get_image_size('medium_large').')', 'unyson' ),
					'large'		=> __( 'Large ('.get_image_size('large').')', 'unyson' ),
					'full' 		=> __( 'Full', 'unyson' ),
				),
			),
			'image_position'                    => array(
				'label'   => __( 'Image Position', 'unyson' ),
				'type'    => 'select',
				'value'   => 'alignleft',
				'choices' => array(
					'aligncenter' 	=> __( 'Top of Content', 'unyson' ),
					'alignleft' 	=> __( 'Left of Content', 'unyson' ),
					'alignright' 	=> __( 'Right of Content', 'unyson' ),
					'alternate' 	=> __( 'Alternate Left / Right of Content', 'unyson' ),
				),
			),
			'page_navigation' => array(
				'label'   => __( 'Page Navigation', 'unyson' ),
				'type'    => 'select',
				'value'   => 'default',
				'choices' => array(
					'' 	=> __( 'None', 'unyson' ),
					'default' 	=> __( 'Previous / Next', 'unyson' ),
					'numeric' 	=> __( 'Numeric (TBA)', 'unyson' ),
					'infinite' 	=> __( 'Inifinite Scroll', 'unyson' ),
				),
			),
		),
	),/* end of Layout tab */	
);

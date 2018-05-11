<?php if (!defined('FW')) die('Forbidden');

$uri = fw_get_template_customizations_directory_uri('/extensions/shortcodes/shortcodes/blog-posts');
$image_sizes[''] = __( 'None', 'lastimosa' );
foreach(get_intermediate_image_sizes() as $key => $value)
{
	$image_sizes[$value] = __( ucwords(implode(' ', preg_split('/[-_ ]+/', $value))) . ' (' . lastimosa_get_image_size($value) . ')', 'lastimosa' );
}
$image_sizes['full'] = __( 'Full', 'lastimosa' );

$options = array(
	'layout' => array(
		'title'   => __( 'Layout', 'lastimosa' ),
		'type'    => 'tab',
		'options' => array(
			'blog_group'        => array(
				'type'    => 'group',
				'options' => array(
					'style' => array(
						'type'    	=> 'multi-picker',
						'label'     => false,
						'desc'      => false,
						'picker'    => array(
							'view' => array(
								'label'   => __('Layout Style', 'lastimosa'),
								'type'    => 'select',
								'value'   => 'default',
								'choices' => array(
									'style-1'  	=> __( 'Style 1', 'lastimosa' ),
									'style-2' 	=> array(
										'text' => __( 'Style 2 (Soon)', 'lastimosa' ),
										'attr' => array(
											'disabled'         => 'disabled',
										),
									),
									'style-3' 	=> array(
										'text' => __( 'Style 3 (Soon)', 'lastimosa' ),
										'attr' => array(
											'disabled'         => 'disabled',
										),
									),
								),
							)
						),
						'choices' => array(
							'style-1'    => array(
								'thumbnail'                      => array(
									'label' => __( '', 'lastimosa' ),
									'type'  => 'html',						
									'html'  => '<img src="'.$uri.'/static/img/image-picker/style-1.png">',
								),
								/*'height'  => array(
									'type'  => 'text',
									'label' => __( 'Height', 'lastimosa' ),
									'help'  => __('In pixels or in percentage. E.g.: \'80px\' or  \'25%\'', 'lastimosa'),
								),*/
							),
						),
						'show_borders' => false,
					),
					'category' => array(
						'type'       => 'multi-select',
						'label'      => __( 'Category', 'lastimosa' ),
						'population' => 'taxonomy',
						'source'     => 'category',
						'help'       => __( 'Display posts that have this category', 'lastimosa' ),
					),
					'posts_per_page'   => array(
						'label' => __( 'Post Per Page', 'lastimosa' ),
						'type'  => 'short-text',
						'value' => 10,
						'help'       => __( 'Number of post to show per page. Enter -1 to show all posts.', 'lastimosa' ),
					),
					'excerpt_length'	=> array(
						'label' => __( 'Excerpt Length', 'lastimosa' ),
						'type'  => 'short-text',
						'value' => '50',
						'desc'  => __( 'The number of words in the excerpt.', 'lastimosa' ),
						'help'  => __( 'Enter a negative value(e.g. -1) for full content. Leave blank to use the custom excerpt.', 'lastimosa' ),
					),
					'read_more_text' 	=> array(
						'label' => __( 'Read More Text', 'lastimosa' ),
						'type'  => 'text',
						'value' => 'Read More',
					),
					'image'				=> array(
						'label'   => __( 'Image', 'lastimosa' ),
						'type'    => 'select',
						'value'   => 'thumbnail',
						'choices' => $image_sizes,
					),
					'image_position'                    => array(
						'label'   => __( 'Image Position', 'lastimosa' ),
						'type'    => 'select',
						'value'   => 'alignleft',
						'choices' => array(
							'aligncenter' 	=> __( 'Top of Content', 'lastimosa' ),
							'alignleft' 	=> __( 'Left of Content', 'lastimosa' ),
							'alignright' 	=> __( 'Right of Content', 'lastimosa' ),
							'alternate' 	=> __( 'Alternate Left / Right of Content', 'lastimosa' ),
						),
					),
					'page_navigation' => array(
						'label'   => __( 'Page Navigation', 'lastimosa' ),
						'type'    => 'select',
						'value'   => 'default',
						'choices' => array(
							'' 	=> __( 'None', 'lastimosa' ),
							'default' 	=> __( 'Previous / Next', 'lastimosa' ),
							'numeric' 	=> __( 'Numeric (TBA)', 'lastimosa' ),
							'infinite' 	=> __( 'Inifinite Scroll', 'lastimosa' ),
						),
					),
				),
			),
		),
	),/* end of Layout tab */	
);

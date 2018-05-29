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
					'columns'			=> array(
						'type'  => 'slider',
						'value' => 1,
						'properties' => array(
							'min' => 1,
							'max' => 6,
							'step' => 1, // Set slider step. Always > 0. Could be fractional.
						),
						'label' => __('Columns', 'lastimosa'),
						'desc'  => __('Number of columns per row.', 'lastimosa'),
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
					'show_excerpt' => array(
						'type'  => 'checkboxes',
						'value' => array(
								'choice' => true,
						),
						'label' => __('', 'lastimosa'),
						'help' => __('Check to show the post excerpt.', 'lastimosa'),
						'choices' => array( // Note: Avoid bool or int keys http://bit.ly/1cQgVzk
								'choice' => __('Show post excerpt?', 'lastimosa'),
						),
						// Display choices inline instead of list
						'inline' => false,
					),
					'read_more_text' 	=> array(
						'label' => __( 'Read More Text', 'lastimosa' ),
						'type'  => 'text',
						'value' => 'Read More',
					),
					'show_read_more_text' => array(
						'type'  => 'checkboxes',
						'value' => array(
								'choice' => true,
						),
						'label' => __('', 'lastimosa'),
						'help' => __('Check to show the read more.', 'lastimosa'),
						'choices' => array( // Note: Avoid bool or int keys http://bit.ly/1cQgVzk
								'choice' => __('Show read more link?', 'lastimosa'),
						),
						// Display choices inline instead of list
						'inline' => false,
					),
					'image'				=> array(
						'label'   => __( 'Image', 'lastimosa' ),
						'type'    => 'select',
						'value'   => 'thumbnail',
						'choices' => $image_sizes,
						'help'		=> sprintf( __( 'Add or modify the image sizes by clicking <a href="%s" target="_blank">here</a>.', 'lastimosa' ), admin_url( 'themes.php?page=fw-settings#fw-options-tab-tab_image')
						),
					),
					'image_placeholder' => array(
						'type'  => 'checkboxes',
						'value' => array(
								'choice' => true,
						),
						'label' => __('', 'lastimosa'),
						'help' => __('Show the image placeholder if the post thumbnail is unavailable.', 'lastimosa'),
						'choices' => array( // Note: Avoid bool or int keys http://bit.ly/1cQgVzk
								'choice' => __('Show image placeholder?', 'lastimosa'),
						),
						// Display choices inline instead of list
						'inline' => false,
					),
					'image_position'                    => array(
						'label'   => __( 'Image Position', 'lastimosa' ),
						'type'    => 'select',
						'value'   => 'alignleft',
						'choices' => array(
							'center' 	=> __( 'Top of Content', 'lastimosa' ),
							'left' 	=> __( 'Left of Content', 'lastimosa' ),
							'right' 	=> __( 'Right of Content', 'lastimosa' ),
							'alternate-left' 	=> __( 'Alternate Left / Right of Content', 'lastimosa' ),
							'alternate-right' 	=> __( 'Alternate Right / Left of Content', 'lastimosa' ),
						),
					),
					'page_navigation' => array(
						'label'   => __( 'Page Navigation', 'lastimosa' ),
						'type'    => 'select',
						'value'   => 'default',
						'choices' => array(
							'' 	=> __( 'None', 'lastimosa' ),
							'default' 	=> __( 'Previous / Next', 'lastimosa' ),
							'numeric' 	=> __( 'Numeric', 'lastimosa' ),
							'infinite' 	=> __( 'Inifinite Scroll', 'lastimosa' ),
						),
					),
				),
			),
		),
	),/* end of Layout tab */	
	'tab_post_meta' => array(
		'title'   => __( 'Post Meta', 'lastimosa' ),
		'type'    => 'tab',
		'options' => array(
			'post_date_meta' => array(
				'label' => __( 'Post Date', 'lastimosa' ),
				'type'  => 'checkbox',
				'value' => true,
				'text'  => __( 'Show post date', 'lastimosa' ),
				'desc'  => __( 'Check to enable post date on blog post meta','lastimosa' ),				
			),
			'author_meta' => array(
				'label' => __( 'Author', 'lastimosa' ),
				'type'  => 'checkbox',
				'value' => true,
				'text'  => __( 'Author', 'lastimosa' ),
				'desc'  => __( 'Check to enable author name on blog post meta','lastimosa' ),				
			),
			'comments_meta'                  => array(
				'label' => __( 'Comments', 'lastimosa' ),
				'type'  => 'checkbox',
				'value' => true,
				'text'  => __( 'Comments', 'lastimosa' ),
				'desc'  => __( 'Check to enable comments on blog post meta','lastimosa' ),
			),
		),
	),
	'tab_animate' => array(
		'title'   => __( 'Animation', 'lastimosa' ),
		'type'    => 'tab',
		'options' => array(
			'animate'  => array(
				'label'         => false,
				'type'          => 'multi',
				'value'         => array(),
				'desc'          => false,
				'inner-options' => lastimosa_option_animate(),
			),
		),
	),
		'tab_advanced' => array(
		'title'   => __( 'Advanced', 'lastimosa' ),
		'type'    => 'tab',
		'options' => array(
			'spacing'   => lastimosa_option_spacing(),
			'visibility'=> lastimosa_option_visibility(),
			'class' 		=> lastimosa_option_class(),
		),
	),
);

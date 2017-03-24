<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'tab_design' => array(
		'title'   => __( 'Settings', 'unyson' ),
		'type'    => 'tab',
		'options' => array(
			'design'  => array(
				'label'         => false,
				'type'          => 'multi',
				'value'         => array(),
				'desc'          => false,
				'inner-options' => array(
					'title'         => array(
						'label' => __( 'Title', 'fw' ),
						'desc'  => __( 'Option Testimonials Title', 'fw' ),
						'type'  => 'text',
					),
					'layout'       => array(
						'type'         => 'multi-picker',
						'label'        => false,
						'desc'         => false,
						'picker'       => array(
							'selected' => array(
								'label'   => __( 'Layout', 'unyson' ),
								'type'    => 'select',
								'choices' => array(
									'feed' => __( 'Feed', 'unyson' ),
									'grid' 	=> __( 'Grid (TBA)', 'unyson' ),
									'carousel' 	=> __( 'Carousel (TBA)', 'unyson' ),
								),
							)
						),
						'choices'      => array(
							'feed'  => array(
/*								'test'   => array(
									'label' => __( 'URL', 'unyson' ),
									'type'  => 'text',
									'value' => '',
									'desc'  => __( 'Enter the link. Leave Manual Link empty to disable.', 'unyson' )
								),*/
								/*'demo_html_2'                      => array(
									'label' => __( 'HTML', 'unyson' ),
									'type'  => 'html',
									'value' => '{some: "json"}',
									'desc'  => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
										'unyson' ),
									'html'  => '<em>Lorem</em> <b>ipsum</b> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAANbY1E9YMgAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAADWSURBVDjLlZNNCsIwEEZzKW/jyoVbD+Aip/AGgmvRldCKNxDBv4LSfSG7kBZix37BQGiapA48ZpjMvIZAGRExwDmnESw7MMvsHnMFTdOQUsqjrmtXsggKEEVReCDseZc/HbOgoCxLDytwUEFBVVUe/fjNDguEEFGSAiml4Xq+DdZJAV78sM1oOpnT/fI0oEYPZ0lBtjuaBWSttcHtRQWvx9sMrlcb7+HQwxlmojfI9ycziGyj34sK3AV8zd7KFSYFCCwO1aMFsQgK8DO1bRsFM0HBP9i9L2ONMKHNZV7xAAAAAElFTkSuQmCC">',
									'help'  => sprintf( "%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
										__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
											'unyson' ),
										__( 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium',
											'unyson' )
									),
								),*/
							),
						),
					),								
					'style'       => array(
						'type'         => 'multi-picker',
						'label'        => false,
						'desc'         => false,
						'picker'       => array(
							'selected' => array(
								'label'   => __( 'Style', 'unyson' ),
								'type'    => 'select',
								'choices' => array(
									'style-1' => __( 'Style 1', 'unyson' ),
									'style-2' => __( 'Style 2', 'unyson' ),
									'style-3' => __( 'Style 3', 'unyson' ),
									'style-4' => __( 'Style 4', 'unyson' ),
									'style-5' => __( 'Style 5', 'unyson' ),
								),
								'value'   => 'style-1',
							)
						),
						'choices'      => array(
							'feed'  => array(
/*								'test'   => array(
									'label' => __( 'URL', 'unyson' ),
									'type'  => 'text',
									'value' => '',
									'desc'  => __( 'Enter the link. Leave Manual Link empty to disable.', 'unyson' )
								),*/
								/*'demo_html_2'                      => array(
									'label' => __( 'HTML', 'unyson' ),
									'type'  => 'html',
									'value' => '{some: "json"}',
									'desc'  => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
										'unyson' ),
									'html'  => '<em>Lorem</em> <b>ipsum</b> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAANbY1E9YMgAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAADWSURBVDjLlZNNCsIwEEZzKW/jyoVbD+Aip/AGgmvRldCKNxDBv4LSfSG7kBZix37BQGiapA48ZpjMvIZAGRExwDmnESw7MMvsHnMFTdOQUsqjrmtXsggKEEVReCDseZc/HbOgoCxLDytwUEFBVVUe/fjNDguEEFGSAiml4Xq+DdZJAV78sM1oOpnT/fI0oEYPZ0lBtjuaBWSttcHtRQWvx9sMrlcb7+HQwxlmojfI9ycziGyj34sK3AV8zd7KFSYFCCwO1aMFsQgK8DO1bRsFM0HBP9i9L2ONMKHNZV7xAAAAAElFTkSuQmCC">',
									'help'  => sprintf( "%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
										__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
											'unyson' ),
										__( 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium',
											'unyson' )
									),
								),*/
							),
						),
					),	
				),
			),
		),
	),
	'tab_testimonials' => array(
		'title'   => __( 'Testimonials', 'unyson' ),
		'type'    => 'tab',
		'options' => array(
			'testimonials' => array(
				'label'         => __( 'Testimonials', 'fw' ),
				'popup-title'   => __( 'Add/Edit Testimonial', 'fw' ),
				'desc'          => __( 'Here you can add, remove and edit your Testimonials.', 'fw' ),
				'type'          => 'addable-popup',
				'template'      => '{{=author_name}}',
				'popup-options' => array(
					'content'       => array(
						'label' => __( 'Quote', 'fw' ),
						'desc'  => __( 'Enter the testimonial here', 'fw' ),
						'type'  => 'textarea',
					),
					'author_avatar' => array(
						'label' => __( 'Image', 'fw' ),
						'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' ),
						'type'  => 'upload',
					),
					'author_avatar_placeholder' => array(
						'label'        => __( 'Hide Image Placeholder', 'unyson' ),
						'type'         => 'switch',
						'right-choice' => array(
							'value' => true,
							'label' => __( 'Yes', 'unyson' )
						),
						'left-choice'  => array(
							'value' => false,
							'label' => __( 'No', 'unyson' )
						),
						'value'        => false,
						'desc'         => __( 'If no image is set above, a placeholder will be used. Select Yes to hide the placeholder.',	'unyson' ),
						'help'         => sprintf( "%s",
							__( 'If an image has been set above, it will be displayed regardless of the choice.','unyson' )
						),
					),
					'author_name'   => array(
						'label' => __( 'Name', 'fw' ),
						'desc'  => __( 'Enter the Name of the Person to quote', 'fw' ),
						'type'  => 'text'
					),
					'author_job'    => array(
						'label' => __( 'Position', 'fw' ),
						'desc'  => __( 'Can be used for a job description', 'fw' ),
						'type'  => 'text'
					),
					'site_name'     => array(
						'label' => __( 'Website Name', 'fw' ),
						'desc'  => __( 'Linktext for the above Link', 'fw' ),
						'type'  => 'text'
					),
					'site_url'      => array(
						'label' => __( 'Website Link', 'fw' ),
						'desc'  => __( 'Link to the Persons website', 'fw' ),
						'type'  => 'text'
					)
				)
			)
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
				'inner-options' => lastimosa_options_animate(),
			),
		),
	),
	'tab_visibility' => array(
		'title'   => __( 'Visibility', 'lastimosa' ),
		'type'    => 'tab',
		'options' => array(
			'visibility'  => array(
				'label'         => false,
				'type'          => 'multi',
				'value'         => array(),
				'desc'          => false,
				'inner-options' => lastimosa_options_visibility(),
			),
		),
	),
	'tab_advanced' => array(
		'title'   => __( 'Advanced', 'lastimosa' ),
		'type'    => 'tab',
		'options' => array(
			//'margin' 	=> lastimosa_options_box('Margin'),
			//'padding' 	=> lastimosa_options_box('Padding'),
			'custom_id' => lastimosa_options_custom_id(),
			'class' 	=> lastimosa_options_class(),
		),
	),
);
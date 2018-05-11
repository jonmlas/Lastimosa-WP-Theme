<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
$options = array(
	'typography' => array(
		'type'    => 'multi',
		'label' => false,
		/*'attr' => array(
			'class' => '',
		),*/
		'inner-options' => array(
			'preview'                => array(
				'label' => __( 'Font Preview', 'lastimosa' ),
				'type'  => 'typography',
				'value' => array(
					'family' => 'Open Sans',
				),
				'components' => array(
					'family' => true,
					'size'   => false,
					'style'  => false,
					'color'  => false
				),
				'desc'  => __( 'Checkout the font styles. For preview purposes only.', 'lastimosa' ),
			),
			'h1' => array(
				'label' => __( 'H1 Heading', 'lastimosa' ),
				'type'  => 'typography-v2',
				'value'      => array(
					'family'    => 'Raleway',
		//			For standard fonts, instead of subset and variation you should set 'style' and 'weight'.
		//			'style' => 'italic',
		//			'weight' => 700,
					'subset'    => 'latin-ext',
					'variation' => 'regular',
					'size'      => 40,
					'line-height' => 1.2,
					'letter-spacing' => 0,
					'color'     => '#000000'
				),
				'components' => array(
					'family'         => true,
					//'style', 'weight', 'subset', 'variation' will appear and disappear along with 'family'
					'size'           => true,
					'line-height'    => true,
					'letter-spacing' => true,
					'color'          => true
				),
			),
			'h1_link'              => array(
				'label' => __( '', 'lastimosa' ),
				'desc'  => __( 'H1 Heading Link Color', 'lastimosa' ),
				'type'  => 'color-picker',
				'value' => '#000000',
			),
			'h1_link_hover'              => array(
				'label' => __( '', 'lastimosa' ),
				'desc'  => __( 'H1 Heading Link Hover Color', 'lastimosa' ),
				'type'  => 'color-picker',
				'value' => '#333333',
			),
			'h2' => array(
				'label' => __( 'H2 Heading', 'lastimosa' ),
				'type'  => 'typography-v2',
				'value'      => array(
					'family'    => 'Raleway',
		//			For standard fonts, instead of subset and variation you should set 'style' and 'weight'.
		//			'style' => 'italic',
		//			'weight' => 700,
					'subset'    => 'latin-ext',
					'variation' => 'regular',
					'size'      => 32,
					'line-height' => 1.2,
					'letter-spacing' => 0,
					'color'     => '#000000'
				),
				'components' => array(
					'family'         => true,
					//'style', 'weight', 'subset', 'variation' will appear and disappear along with 'family'
					'size'           => true,
					'line-height'    => true,
					'letter-spacing' => true,
					'color'          => true
				),
			),
			'h2_link'              => array(
				'label' => __( '', 'lastimosa' ),
				'desc'  => __( 'H2 Heading Link Color', 'lastimosa' ),
				'type'  => 'color-picker',
				'value' => '#000000',
			),
			'h2_link_hover'              => array(
				'label' => __( '', 'lastimosa' ),
				'desc'  => __( 'H2 Heading Link Hover Color', 'lastimosa' ),
				'type'  => 'color-picker',
				'value' => '#333333',
			),
			'h3' => array(
				'label' => __( 'H3 Heading', 'lastimosa' ),
				'type'  => 'typography-v2',
				'value'      => array(
					'family'    => 'Raleway',
		//			For standard fonts, instead of subset and variation you should set 'style' and 'weight'.
		//			'style' => 'italic',
		//			'weight' => 700,
					'subset'    => 'latin-ext',
					'variation' => 'regular',
					'size'      => 28,
					'line-height' => 1.2,
					'letter-spacing' => 0,
					'color'     => '#000000'
				),
				'components' => array(
					'family'         => true,
					//'style', 'weight', 'subset', 'variation' will appear and disappear along with 'family'
					'size'           => true,
					'line-height'    => true,
					'letter-spacing' => true,
					'color'          => true
				),
			),
			'h3_link'              => array(
				'label' => __( '', 'lastimosa' ),
				'desc'  => __( 'H3 Heading Link Color', 'lastimosa' ),
				'type'  => 'color-picker',
				'value' => '#000000',
			),
			'h3_link_hover'              => array(
				'label' => __( '', 'lastimosa' ),
				'desc'  => __( 'H3 Heading Link Hover Color', 'lastimosa' ),
				'type'  => 'color-picker',
				'value' => '#333333',
			),
			'h4' => array(
				'label' => __( 'H4 Heading', 'lastimosa' ),
				'type'  => 'typography-v2',
				'value'      => array(
					'family'    => 'Raleway',
		//			For standard fonts, instead of subset and variation you should set 'style' and 'weight'.
		//			'style' => 'italic',
		//			'weight' => 700,
					'subset'    => 'latin-ext',
					'variation' => 'regular',
					'size'      => 24,
					'line-height' => 1.2,
					'letter-spacing' => 0,
					'color'     => '#000000'
				),
				'components' => array(
					'family'         => true,
					//'style', 'weight', 'subset', 'variation' will appear and disappear along with 'family'
					'size'           => true,
					'line-height'    => true,
					'letter-spacing' => true,
					'color'          => true
				),
			),
			'h4_link'              => array(
				'label' => __( '', 'lastimosa' ),
				'desc'  => __( 'H4 Heading Link Color', 'lastimosa' ),
				'type'  => 'color-picker',
				'value' => '#000000',
			),
			'h4_link_hover'              => array(
				'label' => __( '', 'lastimosa' ),
				'desc'  => __( 'H4 Heading Link Hover Color', 'lastimosa' ),
				'type'  => 'color-picker',
				'value' => '#333333',
			),
			'h5' => array(
				'label' => __( 'H5 Heading', 'lastimosa' ),
				'type'  => 'typography-v2',
				'value'      => array(
					'family'    => 'Raleway',
		//			For standard fonts, instead of subset and variation you should set 'style' and 'weight'.
		//			'style' => 'italic',
		//			'weight' => 700,
					'subset'    => 'latin-ext',
					'variation' => 'regular',
					'size'      => 20,
					'line-height' => 1.2,
					'letter-spacing' => 0,
					'color'     => '#000000'
				),
				'components' => array(
					'family'         => true,
					//'style', 'weight', 'subset', 'variation' will appear and disappear along with 'family'
					'size'           => true,
					'line-height'    => true,
					'letter-spacing' => true,
					'color'          => true
				),
			),
			'h5_link'              => array(
				'label' => __( '', 'lastimosa' ),
				'desc'  => __( 'H5 Heading Link Color', 'lastimosa' ),
				'type'  => 'color-picker',
				'value' => '#000000',
			),
			'h5_link_hover'              => array(
				'label' => __( '', 'lastimosa' ),
				'desc'  => __( 'H5 Heading Link Hover Color', 'lastimosa' ),
				'type'  => 'color-picker',
				'value' => '#333333',
			),
			'h6' => array(
				'label' => __( 'H6 Heading', 'lastimosa' ),
				'type'  => 'typography-v2',
				'value'      => array(
					'family'    => 'Raleway',
		//			For standard fonts, instead of subset and variation you should set 'style' and 'weight'.
		//			'style' => 'italic',
		//			'weight' => 700,
					'subset'    => 'latin-ext',
					'variation' => 'regular',
					'size'      => 18,
					'line-height' => 1.2,
					'letter-spacing' => 0,
					'color'     => '#000000'
				),
				'components' => array(
					'family'         => true,
					//'style', 'weight', 'subset', 'variation' will appear and disappear along with 'family'
					'size'           => true,
					'line-height'    => true,
					'letter-spacing' => true,
					'color'          => true
				),
			),
			'h6_link'              => array(
				'label' => __( '', 'lastimosa' ),
				'desc'  => __( 'H6 Heading Link Color', 'lastimosa' ),
				'type'  => 'color-picker',
				'value' => '#000000',
			),
			'h6_link_hover'              => array(
				'label' => __( '', 'lastimosa' ),
				'desc'  => __( 'H6 Heading Link Hover Color', 'lastimosa' ),
				'type'  => 'color-picker',
				'value' => '#333333',
			),
			'body' => array(
				'label' => __( 'Body Text', 'lastimosa' ),
				'type'  => 'typography-v2',
				'value'      => array(
					'family'    => 'Open Sans',
		//			For standard fonts, instead of subset and variation you should set 'style' and 'weight'.
		//			'style' => 'italic',
		//			'weight' => 700,
					'subset'    => 'cyrillic',
					'variation' => 'regular',
					'size'      => 16,
					'line-height' => 1.5,
					'letter-spacing' => 0,
					'color'     => '#000000'
				),
				'components' => array(
					'family'         => true,
					//'style', 'weight', 'subset', 'variation' will appear and disappear along with 'family'
					'size'           => true,
					'line-height'    => true,
					'letter-spacing' => true,
					'color'          => true
				),
				'desc' => __( 'The main typography of the site\'s content.', 'lastimosa' ),
				'help'  => 	__( 'This includes the paragraphs and lists.',	'lastimosa' ),
			),
			'body_link'              => array(
				'label' => __( '', 'lastimosa' ),
				'desc'  => __( 'Body Link Color', 'lastimosa' ),
				'type'  => 'color-picker',
				'value' => '#000000',
			),
			'body_link_hover'              => array(
				'label' => __( '', 'lastimosa' ),
				'desc'  => __( 'Body Link Hover Color', 'lastimosa' ),
				'type'  => 'color-picker',
				'value' => '#333333',
			),
			'font_sizes'               => array(
				'label' => __( 'Font Sizes', 'lastimosa' ),
				'type'  => 'addable-box',
				'value' => array( 
										array(
											'name' => 'Display 1',
											'size' => '96'
										),
										array(
											'name' => 'Display 2',
											'size' => '88'
										),
										array(
											'name' => 'Display 3',
											'size' => '72'
										),
										array(
											'name' => 'Display 4',
											'size' => '56'
										),
										array(
											'name' => 'Display 5',
											'size' => '48'
										),
										array(
											'name' => 'Lead',
											'size' => '22'
										),
									),
				//'desc'         => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'lastimosa' ),
				//'box-controls' => array(//'custom' => '<small class="dashicons dashicons-smiley" title="Custom"></small>',	),
				'sortable' => true,
				'size'		=> 'medium',
				'attr'  => array( 'class' => 'site-typography' ),
				'add-button-text' => __('Add more font sizes', 'lastimosa'),
				'box-options'  => array(
					'name'                      => array(
						'label' => __( 'Name', 'lastimosa' ),
						'type'  => 'text',
						'value' => '',
						//'desc'  => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','lastimosa' ),
					),
					'size'    => array(
						'label' => __( 'Size', 'lastimosa' ),
						'type'  => 'text',
						'value' => '',
						'desc'  => __( 'Enter value in pixels. Don\'t include the \'px\' unit. ','lastimosa' ),
					),
					
				),
				'template'     => '<strong>{{- size }}px</strong> - {{- name }} ',
			),
		),
	),
);
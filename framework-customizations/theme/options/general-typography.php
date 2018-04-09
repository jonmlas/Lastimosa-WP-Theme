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
				'label' => __( 'Font Preview', 'unyson' ),
				'type'  => 'typography',
				'value' => array(
					'family' => 'Verdana',
				),
				'components' => array(
					'family' => true,
					'size'   => false,
					'style'  => false,
					'color'  => false
				),
				'desc'  => __( 'Checkout the font styles. For preview purposes only.', 'unyson' ),
			),
			'body' => array(
				'label' => __( 'Body Text', 'unyson' ),
				'type'  => 'typography-v2',
				'value'      => array(
					'family'    => 'Open Sans',
		//			For standard fonts, instead of subset and variation you should set 'style' and 'weight'.
		//			'style' => 'italic',
		//			'weight' => 700,
					'subset'    => 'cyrillic',
					'variation' => 'regular',
					'size'      => 14,
					'line-height' => 18,
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
				'desc' => __( 'The main typography of the site\'s content.', 'unyson' ),
				'help'  => 	__( 'This includes the paragraphs and lists.',	'unyson' ),
			),
			'body_link'              => array(
				'label' => __( '', 'unyson' ),
				'desc'  => __( 'Body Link Color', 'unyson' ),
				'type'  => 'color-picker',
				'value' => '#000000',
			),
			'body_link_hover'              => array(
				'label' => __( '', 'unyson' ),
				'desc'  => __( 'Body Link Hover Color', 'unyson' ),
				'type'  => 'color-picker',
				'value' => '#333333',
			),
			'h1' => array(
				'label' => __( 'H1 Heading', 'unyson' ),
				'type'  => 'typography-v2',
				'value'      => array(
					'family'    => 'Raleway',
		//			For standard fonts, instead of subset and variation you should set 'style' and 'weight'.
		//			'style' => 'italic',
		//			'weight' => 700,
					'subset'    => 'latin-ext',
					'variation' => 'regular',
					'size'      => 36,
					'line-height' => 40,
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
				'label' => __( '', 'unyson' ),
				'desc'  => __( 'H1 Heading Link Color', 'unyson' ),
				'type'  => 'color-picker',
				'value' => '#000000',
			),
			'h1_link_hover'              => array(
				'label' => __( '', 'unyson' ),
				'desc'  => __( 'H1 Heading Link Hover Color', 'unyson' ),
				'type'  => 'color-picker',
				'value' => '#333333',
			),
			'h2' => array(
				'label' => __( 'H2 Heading', 'unyson' ),
				'type'  => 'typography-v2',
				'value'      => array(
					'family'    => 'Raleway',
		//			For standard fonts, instead of subset and variation you should set 'style' and 'weight'.
		//			'style' => 'italic',
		//			'weight' => 700,
					'subset'    => 'latin-ext',
					'variation' => 'regular',
					'size'      => 30,
					'line-height' => 34,
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
				'label' => __( '', 'unyson' ),
				'desc'  => __( 'H2 Heading Link Color', 'unyson' ),
				'type'  => 'color-picker',
				'value' => '#000000',
			),
			'h2_link_hover'              => array(
				'label' => __( '', 'unyson' ),
				'desc'  => __( 'H2 Heading Link Hover Color', 'unyson' ),
				'type'  => 'color-picker',
				'value' => '#333333',
			),
			'h3' => array(
				'label' => __( 'H3 Heading', 'unyson' ),
				'type'  => 'typography-v2',
				'value'      => array(
					'family'    => 'Raleway',
		//			For standard fonts, instead of subset and variation you should set 'style' and 'weight'.
		//			'style' => 'italic',
		//			'weight' => 700,
					'subset'    => 'latin-ext',
					'variation' => 'regular',
					'size'      => 24,
					'line-height' => 28,
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
				'label' => __( '', 'unyson' ),
				'desc'  => __( 'H3 Heading Link Color', 'unyson' ),
				'type'  => 'color-picker',
				'value' => '#000000',
			),
			'h3_link_hover'              => array(
				'label' => __( '', 'unyson' ),
				'desc'  => __( 'H3 Heading Link Hover Color', 'unyson' ),
				'type'  => 'color-picker',
				'value' => '#333333',
			),
			'h4' => array(
				'label' => __( 'H4 Heading', 'unyson' ),
				'type'  => 'typography-v2',
				'value'      => array(
					'family'    => 'Raleway',
		//			For standard fonts, instead of subset and variation you should set 'style' and 'weight'.
		//			'style' => 'italic',
		//			'weight' => 700,
					'subset'    => 'latin-ext',
					'variation' => 'regular',
					'size'      => 18,
					'line-height' => 22,
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
				'label' => __( '', 'unyson' ),
				'desc'  => __( 'H4 Heading Link Color', 'unyson' ),
				'type'  => 'color-picker',
				'value' => '#000000',
			),
			'h4_link_hover'              => array(
				'label' => __( '', 'unyson' ),
				'desc'  => __( 'H4 Heading Link Hover Color', 'unyson' ),
				'type'  => 'color-picker',
				'value' => '#333333',
			),
			'h5' => array(
				'label' => __( 'H5 Heading', 'unyson' ),
				'type'  => 'typography-v2',
				'value'      => array(
					'family'    => 'Raleway',
		//			For standard fonts, instead of subset and variation you should set 'style' and 'weight'.
		//			'style' => 'italic',
		//			'weight' => 700,
					'subset'    => 'latin-ext',
					'variation' => 'regular',
					'size'      => 14,
					'line-height' => 18,
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
				'label' => __( '', 'unyson' ),
				'desc'  => __( 'H5 Heading Link Color', 'unyson' ),
				'type'  => 'color-picker',
				'value' => '#000000',
			),
			'h5_link_hover'              => array(
				'label' => __( '', 'unyson' ),
				'desc'  => __( 'H5 Heading Link Hover Color', 'unyson' ),
				'type'  => 'color-picker',
				'value' => '#333333',
			),
			'h6' => array(
				'label' => __( 'H6 Heading', 'unyson' ),
				'type'  => 'typography-v2',
				'value'      => array(
					'family'    => 'Raleway',
		//			For standard fonts, instead of subset and variation you should set 'style' and 'weight'.
		//			'style' => 'italic',
		//			'weight' => 700,
					'subset'    => 'latin-ext',
					'variation' => 'regular',
					'size'      => 12,
					'line-height' => 16,
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
				'label' => __( '', 'unyson' ),
				'desc'  => __( 'H6 Heading Link Color', 'unyson' ),
				'type'  => 'color-picker',
				'value' => '#000000',
			),
			'h6_link_hover'              => array(
				'label' => __( '', 'unyson' ),
				'desc'  => __( 'H6 Heading Link Hover Color', 'unyson' ),
				'type'  => 'color-picker',
				'value' => '#333333',
			),
		),
	),
);
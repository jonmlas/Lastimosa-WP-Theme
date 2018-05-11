<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'general_settings_container' => array(
		'title'   => __( 'General', 'lastimosa' ),
		'type'    => 'tab',
		'options' => array(
			'general' => array(
				'title'   => __( 'General Settings', 'lastimosa' ),
				'type'    => 'box',
				'options' => array(
					'tab_options' => array(
						'title'   => __( 'Theme Options', 'lastimosa' ),
						'type'    => 'tab',
						'options' => array(
							'tab_options_box' => array(
								'title'   => __( 'Lastimosa Theme Options', 'lastimosa' ),
								'type'    => 'box',
								'options' => array(
									fw()->theme->get_options( 'general-options' ),
								),
							),
						),
					),
					'tab_layout' => array(
						'title'   => __( 'Layout', 'lastimosa' ),
						'type'    => 'tab',
						'options' => array(
							'tab_options_box' => array(
								'title'   => __( 'Theme Layout', 'lastimosa' ),
								'type'    => 'box',
								'options' => array(
									fw()->theme->get_options( 'general-layout' ),
								),
							),
						),
					),
					'tab_typography' => array(
						'title'   => __( 'Typography', 'lastimosa' ),
						'type'    => 'tab',
						'options' => array(
							'typography_box' => array(
								'title'   => __( 'Typography Settings', 'lastimosa' ),
								'type'    => 'box',
								'options' => array(
									fw()->theme->get_options( 'general-typography' ),
								),
							),
						),
					),
					'tab_colors' => array(
						'title'   => __( 'Color Palettes', 'lastimosa' ),
						'type'    => 'tab',
						'options' => array(
							'tab_options_box' => array(
								'title'   => __( 'Color Palettes', 'lastimosa' ),
								'type'    => 'box',
								'options' => array(
									fw()->theme->get_options( 'general-colors' ),
								),
							),
						),
					),
					'tab_button' => array(
						'title'   => __( 'Buttons', 'lastimosa' ),
						'type'    => 'tab',
						'options' => array(
							'social_box' => array(
								'title'   => __( 'Predefined Buttons', 'lastimosa' ),
								'type'    => 'box',
								'options' => array(
									fw()->theme->get_options( 'general-buttons' ),
								),
							),
						),
					),
					'tab_image' => array(
						'title'   => __( 'Image', 'lastimosa' ),
						'type'    => 'tab',
						'options' => array(
							'social_box' => array(
								'title'   => __( 'Image Sizes', 'lastimosa' ),
								'type'    => 'box',
								'options' => array(
									fw()->theme->get_options( 'general-image-sizes' ),
								),
							),
						),
					),
					'tab_social' => array(
						'title'   => __( 'Social Profiles', 'lastimosa' ),
						'type'    => 'tab',
						'options' => array(
							'social_box' => array(
								'title'   => __( 'Social Profiles Settings', 'lastimosa' ),
								'type'    => 'box',
								'options' => array(
									fw()->theme->get_options( 'general-social' ),
								),
							),
						),
					),
				)
			),
		)
	)
);

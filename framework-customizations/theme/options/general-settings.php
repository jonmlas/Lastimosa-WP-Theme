<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'general_settings_container' => array(
		'title'   => __( 'General', 'unyson' ),
		'type'    => 'tab',
		'options' => array(
			'general' => array(
				'title'   => __( 'General Settings', 'unyson' ),
				'type'    => 'box',
				'options' => array(
					'tab_options' => array(
						'title'   => __( 'Theme Options', 'unyson' ),
						'type'    => 'tab',
						'options' => array(
							'tab_options_box' => array(
								'title'   => __( 'Lastimosa Theme Options', 'unyson' ),
								'type'    => 'box',
								'options' => array(
									fw()->theme->get_options( 'general-options' ),
								),
							),
						),
					),
					'tab_layout' => array(
						'title'   => __( 'Layout', 'unyson' ),
						'type'    => 'tab',
						'options' => array(
							'tab_options_box' => array(
								'title'   => __( 'Theme Layout', 'unyson' ),
								'type'    => 'box',
								'options' => array(
									fw()->theme->get_options( 'general-layout' ),
								),
							),
						),
					),
					'tab_typography' => array(
						'title'   => __( 'Typography', 'unyson' ),
						'type'    => 'tab',
						'options' => array(
							'typography_box' => array(
								'title'   => __( 'Typography Settings', 'unyson' ),
								'type'    => 'box',
								'options' => array(
									fw()->theme->get_options( 'general-typography' ),
								),
							),
						),
					),
					'tab_colors' => array(
						'title'   => __( 'Color Swatches', 'unyson' ),
						'type'    => 'tab',
						'options' => array(
							'tab_options_box' => array(
								'title'   => __( 'Color Swatches', 'unyson' ),
								'type'    => 'box',
								'options' => array(
									fw()->theme->get_options( 'general-colors' ),
								),
							),
						),
					),
					'tab_social' => array(
						'title'   => __( 'Social Profiles', 'unyson' ),
						'type'    => 'tab',
						'options' => array(
							'social_box' => array(
								'title'   => __( 'Social Profiles Settings', 'unyson' ),
								'type'    => 'box',
								'options' => array(
									fw()->theme->get_options( 'general-social' ),
								),
							),
						),
					),
					'tab_button' => array(
						'title'   => __( 'Buttons', 'unyson' ),
						'type'    => 'tab',
						'options' => array(
							'social_box' => array(
								'title'   => __( 'Predefined Buttons', 'unyson' ),
								'type'    => 'box',
								'options' => array(
									fw()->theme->get_options( 'general-buttons' ),
								),
							),
						),
					),
				)
			),
		)
	)
);

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
					'tab_colors' => array(
						'title'   => __( 'Color', 'unyson' ),
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
					
				)
			),
		)
	)
);
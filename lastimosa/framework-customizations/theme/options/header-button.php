<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
$uri = fw_locate_theme_path_uri('');
$options = array(
	'header_button'       => array(
		'type'         => 'multi-picker',
		'label'        => false,
		'desc'         => false,
		'picker'       => array(
			'display' => array(
				'label'        => __( 'Display CTA Button', 'unyson' ),
				'type'         => 'switch',
				'right-choice' => array(
					'value' => 'yes',
					'label' => __( 'Yes', 'unyson' )
				),
				'left-choice'  => array(
					'value' => 'no',
					'label' => __( 'No', 'unyson' )
				),
				'value'        => 'no',
				'desc'         => __( 'This will display a Call To Action (CTA) button in the header', 'unyson' ),
			)
		),
		'choices'      => array(
			'yes'  => array(
				'style_group' => array(
					'type' => 'group',
					'options' => array(
						'background_color'   => array(
							'label' => __( 'Background Color', 'unyson' ),
							'type'  => 'gradient',
							'value' => array(
								'primary'   => '#ffffff',
								'secondary' => '#ffffff'
							),
						),
						'font_color'              => array(
							'label' => __( 'Text Color', 'unyson' ),
							'type'  => 'color-picker',
							'value' => '',
						),
					)
				),
				'label'  => array(
					'label' => __( 'Label', 'fw' ),
					'desc'  => __( 'This is the text that appears on your button', 'fw' ),
					'type'  => 'text',
					'value' => 'Submit'
				),
				'link_group' => array(
					'type' => 'group',
					'options' => array(
						'link'   => array(
							'label' => __( 'Link', 'fw' ),
							'desc'  => __( 'Where should your button link to?', 'fw' ),
							'type'  => 'text',
							'value' => '#'
						),
						'target' => array(
							'type'  => 'switch',
							'label' => __( '', 'fw' ),
							'desc'  => __( 'Open link in new window?', 'fw' ),
							'value' => '_self',
							'right-choice' => array(
								'value' => '_blank',
								'label' => __('Yes', 'fw'),
							),
							'left-choice' => array(
								'value' => '_self',
								'label' => __('No', 'fw'),
							),
						),
					)
				),
				'size_group' => array(
					'type' => 'group',
					'options' => array(
						'size'  => array(
							'label' => __( 'Size', 'fw' ),
							'desc'  => __( 'Choose button size', 'fw' ),
							'attr'  => array( 'class' => 'fw-checkbox-float-left' ),
							'type'  => 'radio',
							'value' => 'btn-md',
							'choices' => array(
								'btn-xs' => __( 'Extra Small', 'fw' ),
								'btn-sm' => __( 'Small', 'fw' ),
								'btn-md' => __( 'Normal', 'fw' ),
								'btn-lg' => __( 'Large', 'fw' ),
							)
						),
						'full_width' => array(
							'type'  => 'switch',
							'label' => __( '', 'fw' ),
							'desc'  => __( 'Make this button full width?', 'fw' ),
							'value' => '',
							'right-choice' => array(
								'value' => 'btn-block',
								'label' => __('Yes', 'fw'),
							),
							'left-choice' => array(
								'value' => '',
								'label' => __('No', 'fw'),
							),
						),
					)
				),
			),
		),
		'show_borders' => false,
	),				
);
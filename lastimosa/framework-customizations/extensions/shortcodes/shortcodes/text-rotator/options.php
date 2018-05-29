<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(
	'id'    => array( 
		'type' => 'unique' 
	),
	'tab_heading' => array(
		'title'   => __( 'Heading', 'lastimosa' ),
		'type'    => 'tab',
		'options' => array(
			'heading'  => array(
				'label'         => false,
				'type'          => 'multi',
				'value'         => array(),
				'desc'          => false,
				'inner-options' => array(
					'prepend_text'    => array(
						'type'  => 'text',
						'label' => __( 'Prepended static text', 'lastimosa' ),
						'desc'   => __( 'The text that is added in the beginning of the sentence.', 'lastimosa' ),
						// 'attr'  => array('class' => 'no-bottom-border'), // not working... tba
					),
					'rotating_text'            => array(
						'label'  => __( 'Rotating texts', 'lastimosa' ),
						'type'   => 'addable-option',
						'option' => array(
							'type' => 'text',
						),
						'value'  => array( 'cool', 'great', 'smart' ),
						'desc'   => __( 'Add, Remove and Edit the rotating text', 'lastimosa' ),
					),
					'append_text'    => array(
						'type'  => 'text',
						'label' => __( 'Appended static text', 'fw' ),
						'desc'   => __( 'The text that is added in the end of the sentence.', 'lastimosa' ),
						// 'attr'  => array('class' => 'no-bottom-border'), // not working... tba
					),
					'css_tag' => lastimosa_option_css_tag( '', 'CSS Tag' ),
					'color'		=> lastimosa_option_color_select( 'Heading' ),
					'formatting' => array(
						'label'   => __( '', 'lastimosa' ),
						'type'    => 'checkboxes',
						'value'   => array(
							'bold' => false,
							'italic' => false,
						),
						'choices' => array(
							'bold' => __( 'Bold', 'lastimosa' ),
							'italic' => __( 'Italic', 'lastimosa' ),
						),
						'inline' => true,
					),
					'link' => lastimosa_option_link(),
					'text-alignment' => lastimosa_option_text_alignment(),
					'text-transform' => lastimosa_option_text_transform('Text transform.',''),					 
				),
			),
		),
	),
	'tab_typeit' => array(
		'title'   => __( 'TypeIt Settings', 'lastimosa' ),
		'type'    => 'tab',
		'options' => array(
			'options'  => array(
				'label'         => false,
				'type'          => 'multi',
				'value'         => array(),
				'desc'          => false,
				'inner-options' => array(
					'speed'    => array(
						'type'  => 'text',
						'label' => __( 'speed', 'lastimosa' ),
						'desc'  => __( 'The typing speed. (number in millseconds)', 'lastimosa' ),
						'value'	=> '100',
					),
					'deleteSpeed'    => array(
						'type'  => 'text',
						'label' => __( 'deleteSpeed', 'lastimosa' ),
						'desc'  => __( 'The deletion speed. If left blank, will be 1/3 of the type speed. (number in millseconds)', 'lastimosa' ),
						'value'	=> '',
					),
					'lifeLike'    => array(
						'type'  => 'switch',
						'label' => __( 'lifeLike', 'lastimosa' ),
						'desc'  => __( 'Will make the typing pace irregular, as if a real person is doing it.', 'lastimosa' ),
						'right-choice' => array(
							'value' => 'true',
							'label' => __( 'Yes', 'lastimosa' )
						),
						'left-choice'  => array(
							'value' => 'false',
							'label' => __( 'No', 'lastimosa' )
						),
						'value'        => 'true',
					),
					'cursor'    => array(
						'type'  => 'switch',
						'label' => __( 'cursor', 'lastimosa' ),
						'desc'  => __( 'Show a blinking cursor at the end of the string(s).', 'lastimosa' ),
						'right-choice' => array(
							'value' => 'true',
							'label' => __( 'Yes', 'lastimosa' )
						),
						'left-choice'  => array(
							'value' => 'false',
							'label' => __( 'No', 'lastimosa' )
						),
						'value'        => 'true',
					),
					'cursorSpeed'    => array(
						'type'  => 'text',
						'label' => __( 'cursorSpeed', 'lastimosa' ),
						'desc'  => __( 'The blinking speed of the cursor. (number in millseconds)', 'lastimosa' ),
						'value'	=> '1000',
					),
					'cursorChar'    => array(
						'type'  => 'text',
						'label' => __( 'cursorChar', 'lastimosa' ),
						'desc'  => __( 'The character used for the cursor. HTML works too!', 'lastimosa' ),
						'value'	=> '',
					),
					'breakLines'    => array(
						'type'  => 'switch',
						'label' => __( 'breakLines', 'lastimosa' ),
						'desc'  => __( 'Choose whether you want multiple strings to be printed on top of each other (breakLines: true), or if you want each string to be deleted and replaced by the next one (breakLines: false).', 'lastimosa' ),
						'right-choice' => array(
							'value' => 'true',
							'label' => __( 'Yes', 'lastimosa' )
						),
						'left-choice'  => array(
							'value' => 'false',
							'label' => __( 'No', 'lastimosa' )
						),
						'value'        => 'false',
					),
					'nextStringDelay'    => array(
						'type'  => 'text',
						'label' => __( 'nextStringDelay', 'lastimosa' ),
						'desc'  => __( 'The amount of time (milliseconds) between typing strings when multiple are defined. (number in millseconds)', 'lastimosa' ),
						'help'  => __( 'You may either pass a number in milliseconds, or an array of values. The first value will be used as the delay before a new string starts, and the second value will be used as the delay after a string has just ended. For example, passing [1000, 2000] will tell TypeIt to pause 1000ms before typing a new string, and wait 2000ms after a string has just completed. This would be equivalent to instance.type(\'String 1\').pause(2000).delete().pause(1000).type(\'String 2\'). If a number is passed, that value will be halved.', 'lastimosa' ),
						'value'	=> '750',
					),
					'autoStart'    => array(
						'type'  => 'switch',
						'label' => __( 'autoStart', 'lastimosa' ),
						'desc'  => __( 'Determines if the instance will typing automatically on page load, or only when the target element becomes visible in the viewport.', 'lastimosa' ),
						'help'	=> __( 'If you don\'t want instances far down on the page to begin until they\'re visible, set this option to false.', 'lastimosa' ),
						'right-choice' => array(
							'value' => 'true',
							'label' => __( 'Yes', 'lastimosa' )
						),
						'left-choice'  => array(
							'value' => 'false',
							'label' => __( 'No', 'lastimosa' )
						),
						'value'        => 'true',
					),
					'startDelete'    => array(
						'type'  => 'switch',
						'label' => __( 'startDelete', 'lastimosa' ),
						'desc'  => __( 'Whether to begin instance by deleting strings inside element, and then typing what strings are defined via JSON or companion functions.', 'lastimosa' ),
						'right-choice' => array(
							'value' => 'true',
							'label' => __( 'Yes', 'lastimosa' )
						),
						'left-choice'  => array(
							'value' => 'false',
							'label' => __( 'No', 'lastimosa' )
						),
						'value'        => 'true',
					),
					'startDelay'    => array(
						'type'  => 'text',
						'label' => __( 'startDelay', 'lastimosa' ),
						'desc'  => __( 'The amount of time before the plugin begins typing after initalizing. (number in millseconds)', 'lastimosa' ),
						'value'	=> '250',
					),
					'loop'    => array(
						'type'  => 'switch',
						'label' => __( 'loop', 'lastimosa' ),
						'desc'  => __( 'Have your string or strings continuously loop after completing.', 'lastimosa' ),
						'right-choice' => array(
							'value' => 'true',
							'label' => __( 'Yes', 'lastimosa' )
						),
						'left-choice'  => array(
							'value' => 'false',
							'label' => __( 'No', 'lastimosa' )
						),
						'value'        => 'yes',
					),
					'loopDelay'    => array(
						'type'  => 'text',
						'label' => __( 'loopDelay', 'lastimosa' ),
						'desc'  => __( 'The amount of time between looping over a string or set of strings again. (number in millseconds)', 'lastimosa' ),
						'help'  => __( 'This option behaves identically to nextStringDelay. If an array is passed, the first value will be the time before typing begins again (after the set of strings has been deleted), and the second value will be the time immediately after the set of strings has finished typing, before they\'re deleted to restart. If left undefined, the nextStringDelay option will be used.', 'lastimosa' ),
						'value'	=> '',
					),
					'html'    => array(
						'type'  => 'switch',
						'label' => __( 'html', 'lastimosa' ),
						'desc'  => __( 'Handle strings as HTML, which will process tags and HTML entities. If \'false,\' strings will be typed literally.', 'lastimosa' ),
						'right-choice' => array(
							'value' => 'true',
							'label' => __( 'Yes', 'lastimosa' )
						),
						'left-choice'  => array(
							'value' => 'false',
							'label' => __( 'No', 'lastimosa' )
						),
						'value'        => 'true',
					),
				),
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
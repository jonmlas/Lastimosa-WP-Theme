<?php if ( ! defined( 'FW' ) ) die( 'Forbidden' );

// Checks if it has user visibility defined.
if(lastimosa_options_get_user_visibility($atts)) return;
if($atts['margin'] != lastimosa_options_box_defaults() || $atts['padding'] != lastimosa_options_box_defaults())
$atts['shortcode'] = 'cf7-'.substr($atts['id'], 0, 10);;

$attr = lastimosa_get_shortcode_attr($atts);

// CF7 Classes
/*if (!empty($atts['visibility']['responsive'])) $class = array(join(' ', $atts['visibility']['responsive']));
if (!empty($atts['class'])) $class[] = $atts['class'];
$class = join(' ', $class);*/


/*if(!empty($atts['custom_id'])) $attr['html_id'] = $atts['custom_id'];
if(!empty($class)) $attr['html_class'] = $class;*/

if(!empty($attr)) echo '<div '.lastimosa_attr_to_html($attr).'>';
if (!empty($atts['contact_form'])):
	echo do_shortcode('[contact-form-7 id="'.$atts['contact_form'].'"]'); 
else :
	_e('Please select a form in the shortcode option.','lastimosa'); 
endif;
if(!empty($attr)) echo '</div>';

?>
<?php if ( ! defined( 'FW' ) ) die( 'Forbidden' );

// Checks if it has user visibility defined.
if(lastimosa_options_get_user_visibility($atts)) return;

$atts['shortcode'] = 'cf7-'.substr($atts['id'], 0, 10);;

$attr = lastimosa_get_shortcode_attr($atts);

if(!empty($attr)) echo '<div '.lastimosa_attr_to_html($attr).'>';
if (!empty($atts['contact_form'])):
	echo do_shortcode('[contact-form-7 id="'.$atts['contact_form'].'"]'); 
else :
	_e('Please select a form in the shortcode option.','lastimosa'); 
endif;
if(!empty($attr)) echo '</div>';

?>
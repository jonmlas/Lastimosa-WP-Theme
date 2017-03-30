<?php if ( ! defined( 'FW' ) ) { die( 'Forbidden' ); } 

// Checks if it has user visibility defined.
if(lastimosa_options_get_user_visibility($atts)) return;

include dirname( __FILE__ ) .'/'.$atts['design']['selected'].'.php'; ?>


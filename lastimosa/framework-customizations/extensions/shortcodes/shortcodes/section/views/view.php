<?php if (!defined('FW')) die('Forbidden');

//fw_print($atts); 
// Checks if it has user visibility defined.
if(lastimosa_options_get_user_visibility($atts)) return;

//Container Class
$container_class = ( empty( $atts['width']['fluid']['content_width'] ) ) ? 'container' : 'container-fluid';

// Section Classes
$class = array();
$class[] = 'main-row';
$class[] = (empty($atts['width']['select'])) ? 'container' : '';
if (!empty($atts['border'])) $class[] =$atts['border'];
if (!empty($atts['visibility']['responsive'])) $class[] = join(' ', $atts['visibility']['responsive']);
if (!empty($atts['class'])) $class[] = $atts['class'];

//Wrapper Classes
$wrapper_class = array();
$wrapper_class[] = 'content-wrap';
$wrapper_class[] = 'sec-'.substr($atts['id'], 0, 10);
if(!empty($atts['row_eq_height']) ) {
	$wrapper_class[] = 'row-eq-height';
}
if ( !empty($atts['height']) && $atts['height']['select'] != 'custom' ) {
	$wrapper_class[] = ' '.$atts['height']['select'];
}
$wrapper_class[] = ( isset( $atts['is_vertical_center'] ) && $atts['is_vertical_center'] ) ? 'vertical-center ' : '';
if (!empty( $atts['border'] ) ) {
	$wrapper_class[] = $atts['border'];
}

?>

<?php include dirname( __FILE__ ) .'/'.$atts['style']['selected'].'.php';
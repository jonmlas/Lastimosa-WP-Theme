<?php if ( ! defined( 'FW' ) ) { die( 'Forbidden' ); } 

$atts['shortcode'] = array('btn-'.substr($atts['id'], 0, 10));

if(!empty($atts['alignment'])) {
	$atts['shortcode'][] = $atts['alignment'];
}
$atts['shortcode'] = join( ' ', $atts['shortcode']);

$attr = lastimosa_get_shortcode_attr($atts);

// We don't want a button with no link
if(empty($atts['link'][$atts['link']['selected']]['link'])) {
	$atts['link'][$atts['link']['selected']]['link'] = '#';
}
$link = get_options_link($atts,NULL);
$btn_attr['href'] = $link['url'];
$btn_attr['class'] ='btn';

if($atts['link'][$atts['link']['selected']]['target'] == 'modal') {
	$btn_attr['data-toggle'] = 'modal';
	$btn_attr['data-target'] = '#btnModal-'.substr($atts['id'], 0, 10);
}else{
	$btn_attr['target'] = $atts['link'][$atts['link']['selected']]['target'];
}

if (isset($atts['design']['custom']['icon']) && $atts['design']['custom']['icon_position'] == 'left') { 
	$atts['text'] = '<i class="'.esc_attr($atts['design']['custom']['icon']).'"></i> '.$atts['text'];
}elseif (isset($atts['design']['custom']['icon']) && $atts['design']['custom']['icon_position'] == 'right') { 
	$atts['text'] = $atts['text'].' <i class="'.esc_attr($atts['design']['custom']['icon']).'"></i>';
}

//$predefined_btns = lastimosa_get_option('predefined_buttons');
		//fw_print($atts);
?>

<div <?php echo lastimosa_attr_to_html($attr); ?>>
<?php if(!empty($atts['text'])) {
	echo '<a '.lastimosa_attr_to_html($btn_attr).'>'.$atts['text'].'</a>'; 
} ?>
</div>

<?php if($atts['link'][$atts['link']['selected']]['target'] = 'modal') : ?>
<!-- Modal -->
<div class="modal fade" id="btnModal-<?php echo substr($atts['id'], 0, 10); ?>" tabindex="-1" role="dialog" aria-labelledby="buttonModal" aria-hidden="true">
    <div class="vertical-alignment-helper">
        <div class="modal-dialog modal-lg vertical-align-center">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>        			</button>
                </div>
                <div class="modal-body"><div class="cs-loader">
                  <div class="cs-loader-inner">
                    <label>	●</label>
                    <label>	●</label>
                    <label>	●</label>
                    <label>	●</label>
                    <label>	●</label>
                    <label>	●</label>
                  </div>
				 </div></div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );

	/**
	 * @var array $atts
	 */
} ?>
<?php
//fw_print($atts['target']);

$link_select = $atts['link_select'];
$link_selected = $link_select['select'];
if($link_selected == 'manual'):
	$link = $link_select[$link_selected]['link'];
else:
	$link = get_permalink($link_select[$link_selected]['link']['0']);
endif;

if( $atts['target'] == 'modal'):
	$target = 'data-toggle=modal data-target=#buttonModal'.$atts['id'];
else:
	$target = 'target='.$atts['target'];
endif;

// Get the ID
if (!empty($atts['custom_id'])) : 
	$button_id = 'id="'.$atts['custom_id'].'"';
else :
	$button_id = 'id="i'.$atts['id'].'"';
endif;

?>
<?php $color_class = !empty($atts['color']) ? "fw-btn-{$atts['color']}" : ''; ?>

<div class="button<?php if(!empty($atts['alignment'])){	echo ' '.$atts['alignment']; } ?>">
	<a href="<?php echo esc_url($link); ?>" <?php echo $button_id; ?> <?php echo esc_attr($target); ?> class="btn <?php echo esc_attr($atts['style']); ?> <?php echo esc_attr($atts['text_color']); ?> <?php echo esc_attr($atts['bg_color']); ?> <?php echo esc_attr($atts['edges']); ?>  <?php echo esc_attr($btn_style); ?> <?php echo esc_attr($atts['full_width']); ?> <?php echo esc_attr($atts['size']); ?> <?php echo esc_attr($atts['class']); ?>">
    <?php if (isset($atts['icon']) && $atts['icon_position'] == 'left')	: ?>
    	<i class="<?php echo esc_attr($atts['icon']); ?>"></i>
    <?php endif; ?>
    <span><?php //echo $icon; ?> <?php echo $atts['text']; ?> 
 	<?php if (isset($atts['icon']) && $atts['icon_position'] == 'right')	: ?>
    	<i class="<?php echo esc_attr($atts['icon']); ?>"></i>
    <?php endif; ?>
    </span></a>
</div>

<!-- Modal -->
<div class="modal fade" id="buttonModal<?php echo $atts['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="buttonModal" aria-hidden="true">
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

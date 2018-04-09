<?php if ( ! defined( 'FW' ) ) { die( 'Forbidden' ); }
 
$atts['shortcode'] = 'list';
$attr = lastimosa_get_shortcode_attr($atts);

if(empty($attr['data-wow-delay'])) {
	$list_delay[0] = 0;
}else{
	$list_delay[0] = $attr['data-wow-delay'];
}
?>

<ul class="icon-list">
    <?php for($i=0; $i < count($atts['icon_list']); $i++): 	?>
    	
        <?php 
		$list_delay[$i] = preg_replace("/[^0-9]/","", $list_delay[$i]); 
		if($i == 0) {
			$list_delay[$i] = $list_delay[$i] + .15; 
		}else{
			$list_delay[$i] = $list_delay[$i - 1] + .15; 
		}
		if(!empty($atts['animate']['animation'])) {
			$attr['data-wow-delay'] = $list_delay[$i] . 's';
		}
		?>
        
        <li <?php echo fw_attr_to_html($attr); ?>>
        
        	<?php if($atts['icon_list'][$i]['select']['type'] == 'font_type') : ?>
            	<i class="<?php echo esc_attr($atts['icon_list'][$i]['select']['font_type']['font']); ?>"></i>
            <?php else: ?>
            	<img src="<?php echo $atts['icon_list'][$i]['select']['image_type']['image']['url']; ?>" title="<?php echo $atts['icon_list'][$i]['title'] ?>" alt="<?php echo $atts['icon_list'][$i]['title'] ?>" class="alignleft" />
            <?php endif; ?>
            
            <?php if (!empty($atts['icon_list'][$i]['title'])): ?>
                <span class="list-title"><?php echo $atts['icon_list'][$i]['title']; ?></span>
            <?php endif; ?>
            
        </li>
    <?php endfor; ?>
</ul>
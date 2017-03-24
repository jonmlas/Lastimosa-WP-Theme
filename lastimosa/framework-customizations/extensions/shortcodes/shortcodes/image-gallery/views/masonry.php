<?php if (!defined('FW')) die('Forbidden'); ?>
<?php //http://masonry.desandro.com/
//fw_print($atts);
 //fw_print($atts['images']); ?>
<?php 
$size = array(
	0 => '',
	1 => '',
	2 => 'grid-item--height2',
	3 => '',
	4 => 'grid-item--width2',
	5 => '',
);

$column = array(
	0 => 'col-md-3',
	1 => 'col-md-3',
	2 => 'col-md-3',
	3 => 'col-md-3',
	4 => 'col-md-6',
	5 => 'col-md-3',
);
	
$dimensions = array(
	'width' => array(
		0 => '300',
		1 => '300',
		2 => '300',
		3 => '300',
		4 => '600',
		5 => '300',
	),
	'height' => array(
		0 => '230',
		1 => '230',
		2 => '460',
		3 => '230',
		4 => '230',
		5 => '230',
	)
);		
	
?>

<div class="masonry">
    <div class="grid magnificpopup-container row">
    <div class="grid-sizer"></div>
    <?php for($i=0; $i < count($atts['images']); $i++): 	?>
        <div class="grid-item <?php echo $column[$i]; ?> <?php echo $size[$i]; ?>">
            <a href="<?php echo $atts['images'][$i]['url']; ?>" title="<?php echo get_the_title($atts['images'][$i]['attachment_id']); ?>">
                <img src="<?php echo fw_resize($atts['images'][$i]['url'], $dimensions['width'][$i], $dimensions['height'][$i], true); ?>"
                 alt="<?php echo get_the_title($atts['images'][$i]['attachment_id']); ?>"
                 width="<?php echo esc_attr($dimensions['width'][$i]); ?>"
                 height="<?php echo $dimensions['height'][$i]; ?>"/>
            </a>
        </div>
    <?php endfor; ?>
    
    </div>
</div>
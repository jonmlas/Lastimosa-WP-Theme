<?php if (!defined('FW')) die( 'Forbidden' );
/**
 * @var $atts
 */
// fw_print($atts['heading']); 
?>

<?php
// Get URL 

$heading_url = lastimosa_get_link($atts['heading']);

// Heading Color
if($atts['heading']['color'] == 'text-default'): 
	$atts['heading']['color'] = ''; 
endif; 
    
// Bold Font Weight
if(!empty($atts['heading']['formatting']['bold'])): 
	$heading_bold_start = '<strong>'; 
	$heading_bold_end = '</strong>';
else:
	$heading_bold_start = ''; 
	$heading_bold_end = '';
endif; 

// Italic Font
if(!empty($atts['heading']['formatting']['italic'])): 
	$heading_italic_start = '<em>'; 
	$heading_italic_end = '</em>';
else:
	$heading_italic_start = ''; 
	$heading_italic_end = '';
endif;

?>

<div class="heading<?php echo !empty($atts['class']) ? ' '.$atts['class'] : ''; ?>">
	<?php if (!empty($atts['heading']['prepend_text']) || !empty($atts['heading']['append_text'])): ?>
		<?php $heading = "<{$atts['heading']['size']} class='special-heading {$atts['heading']['color']} {$atts['heading']['transformation']} {$atts['heading']['alignment']}'>{$heading_url['link_start']}{$heading_bold_start}{$heading_italic_start}{$atts['heading']['prepend_text']}<span id='{$atts['id']}'></span>{$atts['heading']['append_text']}{$heading_italic_end}{$heading_bold_end}{$heading_url['link_end']}</{$atts['heading']['size']}>"; ?>
        <?php echo $heading; ?>       
    <?php endif; ?>
</div>
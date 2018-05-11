<?php if (!defined('FW')) die( 'Forbidden' ); 

// Special Heading Class
$class[] = 'special-heading';
if( !empty($atts['heading']['color']) )						$class[] = $atts['heading']['color'];
$class = array_merge( $class, lastimosa_get_option_advanced_class( $atts ) );
if( isset($class) ) 															$attr['class'] = join(' ', $class);
$attr = array_merge( $attr, lastimosa_get_option_animate_attr( $atts ) );

// Heading Class
$heading_attr = array();
if( !empty($atts['heading']['text-alignment']) )	$heading_class[] = $atts['heading']['text-alignment'];
if( !empty($atts['heading']['text-transform']) )	$heading_class[] = $atts['heading']['text-transform'];
if( isset($heading_class) ) 											$heading_attr['class'] = join(' ', $heading_class);

// Subheading Class
if( !empty($atts['subheading']['color']) )				$subheading_class[] = $atts['subheading']['color'];
if( isset($subheading_class) ) 										$subheading_attr['class'] = join(' ', $subheading_class);

$bold 	= ( isset( $atts['heading']['formatting']['bold']) )   ? 'strong' : '';
$italic = ( isset( $atts['heading']['formatting']['italic']) ) ? 'i' 			: '';
?>

<div <?php echo lastimosa_attr_to_html($attr); ?>>
	<?php echo lastimosa_html_tag( $atts['heading']['css_tag'], $heading_attr, // tag
		lastimosa_get_option_link( $atts['heading']['link'], 		// link
			lastimosa_html_tag( $bold, array(),										// bold
				lastimosa_html_tag( $italic, array(),								// italic
					$atts['heading']['text']
				)
			)
		) 
	);?>
	<?php if( isset($subheading_class) ) { ?>
	<div <?php echo lastimosa_attr_to_html($text_block_attr); ?>>
		<?php echo do_shortcode( $atts['subheading']['content'] ); ?>
		</div>
	<?php } else { ?>
			<?php echo do_shortcode( $atts['subheading']['content'] ); ?>
	<?php } ?>
</div>
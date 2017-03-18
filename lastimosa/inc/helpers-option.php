<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * Custom ID
 */
if(! function_exists('options_custom_id')){
	function options_custom_id() {
		$option = array(
			'label'   => __('CSS ID', 'unyson'),
			'desc'    => false,
			'type'    => 'text'
		);
		return $option; 
	}
}

/**
 * Get the ID
 */
if(! function_exists('lastimosa_options_get_id')){
	function lastimosa_options_get_id($shortcode,$id,$custom_id) {
		if (!empty($custom_id)) : 
			return $custom_id;
		else :
			return substr($shortcode, 0, 3).'-'.substr($id, 0, 10);
		endif;
	}
}

/**
 * Text Transformation
 */
if(! function_exists('options_transformation')){
	function options_transformation() {
		$option = array(
			'type'    => 'select',
			'label'   => __('Text Transformation', 'fw'),
			'value'   => '',
			'choices' => array(
				''  => 'none',
				'text-lowercase' => 'lowercased text',
				'text-uppercase' => 'UPPERCASED TEXT',
				'text-capitalize' => 'Capitalized Text',
			)
		);
		return $option; 
	}
}

/**
 * Option attributes for background
 */
if(! function_exists('options_bg_atts')){
	function options_bg_atts($name) {
		$uri = get_template_directory_uri();
		$options = array(
			'label'         => false,
			'type'          => 'multi',
			'value'         => array(),
			'desc'          => false,
			'inner-options' => array(
				'image'    => array(
					'label'   => __( $name.' Background', 'unyson' ),
					'type'    => 'background-image',
					'value'   => 'none',
					'choices' => array(
						'none' => array(
							'icon' => $uri . '/images/patterns/no_pattern.jpg',
							'css'  => array(
								'background-image' => 'none',
							)
						),
						'bg-1' => array(
							'icon' => $uri . '/images/patterns/diagonal_bottom_to_top_pattern_preview.jpg',
							'css'  => array(
								'background-image'  => 'url("' . $uri . '/images/patterns/diagonal_bottom_to_top_pattern.png' . '")',
							)
						),
						'bg-2' => array(
							'icon' => $uri . '/images/patterns/diagonal_top_to_bottom_pattern_preview.jpg',
							'css'  => array(
								'background-image'  => 'url("' . $uri . '/images/patterns/diagonal_top_to_bottom_pattern.png' . '")',
							)
						),
						'bg-3' => array(
							'icon' => $uri . '/images/patterns/dots_pattern_preview.jpg',
							'css'  => array(
								'background-image'  => 'url("' . $uri . '/images/patterns/dots_pattern.png' . '")',
							)
						),
						'bg-4' => array(
							'icon' => $uri . '/images/patterns/romb_pattern_preview.jpg',
							'css'  => array(
								'background-image'  => 'url("' . $uri . '/images/patterns/romb_pattern.png' . '")',
							)
						),
						'bg-5' => array(
							'icon' => $uri . '/images/patterns/square_pattern_preview.jpg',
							'css'  => array(
								'background-image'  => 'url("' . $uri . '/images/patterns/square_pattern.png' . '")',
							)
						),
						'bg-6' => array(
							'icon' => $uri . '/images/patterns/noise_pattern_preview.jpg',
							'css'  => array(
								'background-image'  => 'url("' . $uri . '/images/patterns/noise_pattern.png' . '")',
							)
						),
						'bg-7' => array(
							'icon' => $uri . '/images/patterns/vertical_lines_pattern_preview.jpg',
							'css'  => array(
								'background-image'  => 'url("' . $uri . '/images/patterns/vertical_lines_pattern.png' . '")',
							)
						),
						'bg-8' => array(
							'icon' => $uri . '/images/patterns/waves_pattern_preview.jpg',
							'css'  => array(
								'background-image'  => 'url("' . $uri . '/images/patterns/waves_pattern.png' . '")',
							)
						),
					),
				),
				'color'              => array(
					'label' => __( '', 'unyson' ),
					'desc' => __( 'background color', 'unyson' ),
					'type'  => 'color-picker',
					'value' => '',
				),
				'position' => array(
					'label' => __( '', 'unyson' ),
					'desc'  => __( 'image position', 'unyson' ),
					'type'  => 'select',
					'value' => 'top center',
					'choices' => array(
						'top left' => __( 'Top Left', 'unyson' ),
						'top center' => __( 'Top Center', 'unyson' ),
						'top right' => __( 'Top Right', 'unyson' ),
						'center left' => __( 'Center Left', 'unyson' ),
						'center center' => __( 'Center Center', 'unyson' ),
						'center right' => __( 'Center Right', 'unyson' ),
						'bottom left' => __( 'Bottom Left', 'unyson' ),
						'bottom center' => __( 'Bottom Center', 'unyson' ),
						'bottom right' => __( 'Bottom Right', 'unyson' ),
					)
				),
				'repeat' => array(
					'label' => __( '', 'unyson' ),
					'desc'  => __( 'image repeat', 'unyson' ),
					'type'  => 'select',
					/*'attr'  => array( 'class' => '' ),*/
					'value' => 'repeat',
					'choices' => array(
						'no-repeat' => __( 'Display Once (No-Repeat)', 'unyson' ),
						'repeat' => __( 'Full Tile (Repeat XY Axis)', 'unyson' ),
						'repeat-x' => __( 'Horizontal Tile (Repeat X Axis)', 'unyson' ),
						'repeat-y' => __( 'Vertical Tile (Repeat Y Axis)', 'unyson' ),
					)
				),
				'attachment' => array(
					'label' => __( '', 'unyson' ),
					'desc'  => __( 'image attachment', 'unyson' ),
					'type'  => 'select',
					'value' => 'scroll',
					'choices' => array(
						'scroll' => __( 'Scroll', 'unyson' ),
						'fixed' => __( 'Fixed', 'unyson' ),
					),
					'help'	=> __( '<p><strong>scroll</strong> - The background scrolls along with the page. This is default</p>
									<p><strong>fixed</strong> - The background is fixed with regard to the viewport.</p>
									', 'unyson'),
				),
				'size' => array(
					'label' => __( '', 'unyson' ),
					'desc'  => __( 'image size', 'unyson' ),
					'help'  => __( '<strong>auto</strong> -	Default value. The background-image contains its width and height.<br><br>
						<strong>cover</strong> - Scale the background image to be as large as possible so that the background area is completely covered by the background image. Some parts of the background image may not be in view within the background positioning area.<br><br>
						<strong>contain</strong> - Scale the image to the largest size such that both its width and its height can fit inside the content area', 'unyson' ),
					'type'  => 'select',
					'value' => 'auto',
					'choices' => array(
						'auto' => __( 'Auto', 'unyson' ),
						'cover' => __( 'Cover', 'unyson' ),
						'contain' => __( 'Contain', 'unyson' ),
					)
				),
			),	
		);
		
		return $options; 
	}
}

/**
 * Link Options
 */
if(! function_exists('options_link')){
	function options_link() {
		return array(
			'link'       => array(
				'type'         => 'multi-picker',
				'label'        => false,
				'desc'         => false,
				'picker'       => array(
					'selected' => array(
						'label'   => __( 'Link', 'unyson' ),
						'type'    => 'select',
						'choices' => array(
							'manual' => __( 'Manual', 'unyson' ),
							'page' 	=> __( 'Page', 'unyson' ),
							'post' 	=> __( 'Blog Post', 'unyson' ),
							'media' => __( 'Media', 'unyson' ),
						),
					)
				),
				'choices'      => array(
					'manual'  => array(
						'link'   => array(
							'label' => __( 'URL', 'unyson' ),
							'type'  => 'text',
							'value' => '',
							'desc'  => __( 'Enter the link. Leave Manual Link empty to disable.', 'unyson' )
						),
						'target'      => array(
							'label'   => __( 'Target', 'unyson' ),
							'type'    => 'select',
							'value'   => '_self',
							'desc'    => __( 'How the link will be opened.','unyson' ),
							'choices' => array(
								'_self'  	=> __( 'Open link in same window', 'unyson' ),
								'_blank'  	=> __( 'Open link in new window', 'unyson' ),
								'lightbox' 	=> __( 'Open link inside a lightbox', 'unyson' ),
								'modal' 	=> __( 'Open link inside bootstrap modal', 'unyson' ),
							),
						),
					),
					'page' => array(
						'link'      => array(
							'type'  => 'multi-select',
							'label' => __( 'Page', 'unyson' ),
							'desc'  => __( 'Type the title of the page to search', 'unyson' ),
							'population' => 'posts',
							'source'=> 'page',
							'limit' => 1,
						),
						'target'      => array(
							'label'   => __( 'Target', 'unyson' ),
							'type'    => 'select',
							'value'   => '_self',
							'desc'    => __( 'How the link will be opened.','unyson' ),
							'choices' => array(
								'_self'  	=> __( 'Open link in same window', 'unyson' ),
								'_blank'  	=> __( 'Open link in new window', 'unyson' ),
								'lightbox' 	=> __( 'Open link inside a lightbox', 'unyson' ),
								'modal' 	=> __( 'Open link inside bootstrap modal', 'unyson' ),
							),
						),
					),
					'post' => array(
						'link'      => array(
							'type'       => 'multi-select',
							'label'      => __( 'Post', 'unyson' ),
							'desc'  => __( 'Type the title of the post to search', 'unyson' ),
							'population' => 'posts',
							'source'     => 'post',
							'limit' => 1,
						),
						'target'      => array(
							'label'   => __( 'Target', 'unyson' ),
							'type'    => 'select',
							'value'   => '_self',
							'desc'    => __( 'How the link will be opened.','unyson' ),
							'choices' => array(
								'_self'  	=> __( 'Open link in same window', 'unyson' ),
								'_blank'  	=> __( 'Open link in new window', 'unyson' ),
								'lightbox' 	=> __( 'Open link inside a lightbox', 'unyson' ),
								'modal' 	=> __( 'Open link inside bootstrap modal', 'unyson' ),
							),
						),
					),
					'media' => array(
						'link'                    => array(
							'label'       => __( '', 'unyson' ),
							'desc'        => __( 'Upload your media file or select from Media Library.', 'unyson' ),
							'type'        => 'upload',
							'images_only' => false,
						),
						'target'      => array(
							'label'   => __( 'Target', 'unyson' ),
							'type'    => 'select',
							'value'   => '_self',
							'desc'    => __( 'How the link will be opened.','unyson' ),
							'choices' => array(
								'_self'  	=> __( 'Open link in same window', 'unyson' ),
								'_blank'  	=> __( 'Open link in new window', 'unyson' ),
								'lightbox' 	=> __( 'Open link inside a lightbox', 'unyson' ),
								'modal' 	=> __( 'Open link inside bootstrap modal', 'unyson' ),
							),
						),
					),
				),
				'show_borders' => false,
			),
		); 
	}
}

/**
 * Link Options Attributes
 */
if(! function_exists('options_link_atts')){
	function options_link_atts() {
		$options = array(
			'type'         => 'multi-picker',
			'label'        => false,
			'desc'         => false,
			'picker'       => array(
				'selected' => array(
					'label'   => __( 'Link', 'unyson' ),
					'type'    => 'select',
					'choices' => array(
						'manual' => __( 'Manual', 'unyson' ),
						'page' 	=> __( 'Page', 'unyson' ),
						'post' 	=> __( 'Blog Post', 'unyson' ),
						'media' => __( 'Media', 'unyson' ),
					),
				)
			),
			'choices'      => array(
				'manual'  => array(
					'link'   => array(
						'label' => __( 'URL', 'unyson' ),
						'type'  => 'text',
						'value' => '',
						'desc'  => __( 'Enter the link. Leave Manual Link empty to disable.', 'unyson' )
					),
					'target'      => array(
						'label'   => __( 'Target', 'unyson' ),
						'type'    => 'select',
						'value'   => '_self',
						'desc'    => __( 'How the link will be opened.','unyson' ),
						'choices' => array(
							'_self'  	=> __( 'Open link in same window', 'unyson' ),
							'_blank'  	=> __( 'Open link in new window', 'unyson' ),
							'lightbox' 	=> __( 'Open link inside a lightbox', 'unyson' ),
							'modal' 	=> __( 'Open link inside bootstrap modal', 'unyson' ),
						),
					),
				),
				'page' => array(
					'link'      => array(
						'type'  => 'multi-select',
						'label' => __( 'Page', 'unyson' ),
						'desc'  => __( 'Type the title of the page to search', 'unyson' ),
						'population' => 'posts',
						'source'=> 'page',
						'limit' => 1,
					),
					'target'      => array(
						'label'   => __( 'Target', 'unyson' ),
						'type'    => 'select',
						'value'   => '_self',
						'desc'    => __( 'How the link will be opened.','unyson' ),
						'choices' => array(
							'_self'  	=> __( 'Open link in same window', 'unyson' ),
							'_blank'  	=> __( 'Open link in new window', 'unyson' ),
							'lightbox' 	=> __( 'Open link inside a lightbox', 'unyson' ),
							'modal' 	=> __( 'Open link inside bootstrap modal', 'unyson' ),
						),
					),
				),
				'post' => array(
					'link'      => array(
						'type'       => 'multi-select',
						'label'      => __( 'Post', 'unyson' ),
						'desc'  => __( 'Type the title of the post to search', 'unyson' ),
						'population' => 'posts',
						'source'     => 'post',
						'limit' => 1,
					),
					'target'      => array(
						'label'   => __( 'Target', 'unyson' ),
						'type'    => 'select',
						'value'   => '_self',
						'desc'    => __( 'How the link will be opened.','unyson' ),
						'choices' => array(
							'_self'  	=> __( 'Open link in same window', 'unyson' ),
							'_blank'  	=> __( 'Open link in new window', 'unyson' ),
							'lightbox' 	=> __( 'Open link inside a lightbox', 'unyson' ),
							'modal' 	=> __( 'Open link inside bootstrap modal', 'unyson' ),
						),
					),
				),
				'media' => array(
					'link'                    => array(
						'label'       => __( '', 'unyson' ),
						'desc'        => __( 'Upload your media file or select from Media Library.', 'unyson' ),
						'type'        => 'upload',
						'images_only' => false,
					),
					'target'      => array(
						'label'   => __( 'Target', 'unyson' ),
						'type'    => 'select',
						'value'   => '_self',
						'desc'    => __( 'How the link will be opened.','unyson' ),
						'choices' => array(
							'_self'  	=> __( 'Open link in same window', 'unyson' ),
							'_blank'  	=> __( 'Open link in new window', 'unyson' ),
							'lightbox' 	=> __( 'Open link inside a lightbox', 'unyson' ),
							'modal' 	=> __( 'Open link inside bootstrap modal', 'unyson' ),
						),
					),
				),
			),
			'show_borders' => false,
		); 
		return $options;
	}
}

// Get the link
if(! function_exists('get_options_link')){
	function get_options_link($option,$class) {
		$link = array();
		$link_selected = $option['link']['selected'];
		if($link_selected == 'manual'):
			$link['url'] = $option['link'][$link_selected]['link'];
		elseif($link_selected == 'media'):
			$link['url'] = $option['link'][$link_selected]['link']['url'];
		else:
			$link['url'] = get_permalink($option['link'][$link_selected]['link']['0']);
		endif;
		
		if(!empty($class)) {
			$link['atts'] = array(
				'href' => $link['url'],
				'target' => $option['link'][$link_selected]['target'],
				'class' => $class,
			);
		}else{
			$link['atts'] = array(
				'href' => $link['url'],
				'target' => $option['link'][$link_selected]['target'],
			);
		}
		
		return $link;
	}
}

/**
 * Margin Options
 */
if(!function_exists('options_box_property')) {
	function options_box_property($name,$option,$value) {
		if($option == 'Top'){
			$label = $name;
		}else{
			$label = '';
		}		
		$option = array(
			'type'         => 'multi-picker',
			'label'        => false,
			'desc'         => false,
			'picker'       => array(
				'select' => array(
					'label'   => __( $label, 'unyson' ),
					'type'    => 'select',
					'value'   => $value,
					'choices' => array(
						'0'  	=> __( '(0px) none', 'unyson' ),
						'15px' 	=> __( '(15px) extra small', 'unyson' ),
						'30px'	=> __( '(30px) small', 'unyson' ),
						'45px' 	=> __( '(45px) small-medium ', 'unyson' ),
						'60px' 	=> __( '(60px) medium ', 'unyson' ),
						'75px' 	=> __( '(75px) medium-large', 'unyson' ),
						'90px' 	=> __( '(90px) large', 'unyson' ),
						'105px' => __( '(105px) extra large ', 'unyson' ),
						'120px' => __( '(120px) jumbo ', 'unyson' ),
						'custom'=> __( 'custom', 'unyson' )
					),
					'desc'    => __( $option.' '.$name,'unyson' ),
				)
			),
			'choices'      => array(
				'custom'  => array(
					'size'  => array(
						'type'  => 'text',
						'label' => __( '', 'unyson' ),
						'value'   => '60px',
						'desc'  => __( 'Custom '.$option.' '.$name,'unyson' )
					),
				),
				
			),
			'show_borders' => false,
		);
		return $option;
	}
}

if(! function_exists('options_box_properties')){
	function options_box_properties($name,$top='0',$bottom='0',$left='0',$right='0') {
		$options = array(
			'label'         => false,
			'type'          => 'multi',
			'value'         => array(),
			'desc'          => false,
			'inner-options' => array(
				'top'       => options_box_property($name,'Top',$top),
				'bottom'    => options_box_property($name,'Bottom',$top),
				'left'      => options_box_property($name,'Left',$left),
				'right'     => options_box_property($name,'Right',$right),
			),
		);
		return $options; 
	}
}


/**
 * Class
 */
if(! function_exists('options_class')){
	function options_class() {
		$option = array(
			'label'   => __('CSS Class', 'unyson'),
			'desc'    => false,
			'type'    => 'text'
		);
		return $option; 
	}
}

if(! function_exists('get_css_box_measurements')){
	function get_css_box_measurements($side_size) {
		if($side_size['select'] == 'custom'):
			return 'unquote("'.$side_size['custom']['size'].'")';
		else:
			return $side_size['select'];
		endif;
	}
}

if(! function_exists('font_style')){
	function font_style($style) {
		if(!empty($style['google_font'])) {
			$font_style  = preg_replace('/\d+/u', '', $style['variation']);
		}elseif(!isset($style['google_font'])){
			$font_style  = preg_replace('/\d+/u', '', $style['style']);
		}else{
			$font_style  = $style['style'];
		}	
		if($font_style == 'regular' || $font_style == 'normal') {
			$font_style = NULL;
		}
		if(!empty($font_style)) {
			return 'font-style:'.$font_style.';'; 
		}else{
			return;
		}
	}
}

if(! function_exists('font_weight')){
	function font_weight($weight) {
		if(!empty($weight['google_font'])) {
			$font_weight = preg_replace('/[^0-9]/', '', $weight['variation']);
		}elseif(!isset($weight['google_font'])){
			$font_weight = preg_replace('/[^0-9]/', '', $weight['style']);
		}else{
			$font_weight = $weight['weight'];
		}	
		if(!empty($font_weight)) {
			return 'font-weight:'.$font_weight.';'; 
		}else{
			return;
		}
	}
}

if(! function_exists('letter_spacing')){
	function letter_spacing($value) {
		if(!empty($value['letter-spacing'])){
			return 'letter-spacing:'.$value['letter-spacing'].'px;';
		}
	}
}

// Add the element's URL
if ( ! function_exists( 'lastimosa_get_link' ) ) { 
	function lastimosa_get_link($element) {
		$link_select = $element['link_select'];
		$link_selected = $link_select['select'];
		if($link_selected == 'manual'):
			$link = $link_select[$link_selected]['link'];
		elseif(isset($link_select[$link_selected]['link']['0'])):
			$link = get_permalink($link_select[$link_selected]['link']['0']);
		endif;
		if(!empty($link)):
			$link_start = '<a href="' . $link . '" />';
			$link_end 	= '</a>';
		else:
			$link_start = '';
			$link_end 	= '';
		endif;
		
		$url['link_start'] 	= $link_start;
		$url['link_end'] 	= $link_end;
		return $url;
	}
}

if(! function_exists('shortcode_css')) {
	function shortcode_css($atts) {
		global $post;
		$shortcode_atts = array();
		$atts['id'] = substr($atts['id'], 0, 10);
		$post_slug = $post->post_name;

		$shortcode_atts[] = '.'.$post->post_type.'-'.$post->post_name.' .'.substr($atts['shortcode'], 0, 3).'-'.$atts['id'].' { ';
		
		$margin_top 	= ' '.get_css_box_measurements($atts['margin']['top']);
		$margin_bottom 	= ' '.get_css_box_measurements($atts['margin']['bottom']);
		$margin_left 	= ' '.get_css_box_measurements($atts['margin']['left']);
		$margin_right 	= ' '.get_css_box_measurements($atts['margin']['right']);
		$margin 		= 'margin:'.$margin_top.$margin_right.$margin_bottom.$margin_left.'; ';
		$shortcode_atts[] = $margin;
		
		$padding_top 	= ' '.get_css_box_measurements($atts['padding']['top']);
		$padding_bottom = ' '.get_css_box_measurements($atts['padding']['bottom']);
		$padding_left 	= ' '.get_css_box_measurements($atts['padding']['left']);
		$padding_right 	= ' '.get_css_box_measurements($atts['padding']['right']);
		$padding 		= 'padding:'.$padding_top.$padding_right.$padding_bottom.$padding_left.'; ';
		$shortcode_atts[] = $padding;		
		
		// Check if there is a custom background.
		if (is_array($atts['background']['image'])) { // Check if a custom background has been set
			$bg_image 		= $atts['background']['image']['data']['css']['background-image'];
			$bg_color		= $atts['background']['color'];
			
			if ( ($bg_image != 'none') || (!empty($bg_color)) ) {
				$bg_position 	= $atts['background']['position'].' ';
				$bg_repeat		= $atts['background']['repeat'];
				if($bg_image == 'none' && !empty($bg_color)) {
					$background 	= 'background:' . $bg_color . ';';	
				}elseif($bg_image != 'none' && empty($bg_color)) {
					$background 	= 'background:' . $bg_image . ' ' . $bg_position . $bg_repeat .';';	
				}else{
					$background 	= 'background:' . $bg_image . ' ' . $bg_color . ' ' .  $bg_position . $bg_repeat .';';
				}
				if ( ($bg_image != 'none') && $atts['background']['size'] != 'auto' ) {
					$bg_size 		= 'background-size:' . $atts['background']['size'] . ';';
				}else{
					$bg_size 		= '';
				}
			}else{
				$background 	= '';
				$bg_size 		= '';
			}
		}else{
			$background 	= '';
			$bg_size 		= '';
		}
		$shortcode_atts[] = $background;
		$shortcode_atts[] = $bg_size;
		
		if($atts['shortcode'] == 'section' && $atts['height']['select'] == 'custom') {
			$min_height		= 'min-height:'.$atts['height']['custom']['height'] . ';';
			$shortcode_atts[] = $min_height;
		}
		
		$shortcode_atts[] = '}';

		// Get the Grid Gutter Width
		if($atts['shortcode'] == 'section' && $atts['grid_gutter_width'] != '30px') {
			$gutter = ((preg_replace("/[^0-9]/","", $atts['grid_gutter_width'])) / 2).'px';
			$shortcode_atts[] = '
									.'.$post->post_type.'-'.$post->post_name.' .'.substr($atts['shortcode'], 0, 3).'-'.$atts['id'].' .fw-row { 
										margin-right:-'.$gutter.';
										margin-left:-'.$gutter.';
									}
				
			
				
								 	.'.$post->post_type.'-'.$post->post_name.' .'.substr($atts['shortcode'], 0, 3).'-'.$atts['id'].' .'.$atts['container-class'].',
								 	.'.$post->post_type.'-'.$post->post_name.' .'.substr($atts['shortcode'], 0, 3).'-'.$atts['id'].' .fw-row > [class*=\'col-\']{ 
										padding-right:'.$gutter.';
    							 		padding-left:'.$gutter.';
									}
								 ';
		}
		
		/*if($atts['shortcode'] == 'section' && $atts['height']['select'] == 'custom') {
			$shortcode_atts[] = '.'.$post->post_type.'-'.$post->post_name.' .'.substr($atts['shortcode'], 0, 3).'-'.$atts['id'].' .content-wrap { ';
			$min_height		= 'min-height:'.$atts['height']['custom']['height'] . ';';
			$shortcode_atts[] = $min_height;
			$shortcode_atts[] = '}';
		}*/
		
		$shortcode_style = '';
		foreach ($shortcode_atts as $key => $value){
			$shortcode_style .= $value;
		}
				
		if( !get_option( $atts['shortcode'].'_style' ) ) {
			$shortcode_styles = array();
			$shortcode_styles[get_the_ID()][$atts['id']] = $shortcode_style;		
			add_option( $atts['shortcode'].'_style', $shortcode_styles, '', 'yes' );
		} else {
			$shortcode_styles = get_option( $atts['shortcode'].'_style' );		
			$shortcode_styles[get_the_ID()][$atts['id']] = $shortcode_style;
			update_option( $atts['shortcode'].'_style', $shortcode_styles, 'yes' );
		}	
		
		if( !get_option( $atts['shortcode'].'_style_temp' ) ) {
			$shortcode_styles_temp = array();
			$shortcode_styles_temp[$atts['id']] = $shortcode_style;		
			add_option( $atts['shortcode'].'_style_temp', $shortcode_styles_temp, '', 'yes' );
		} else {	
			$shortcode_styles_temp = get_option( $atts['shortcode'].'_style_temp');	
			$shortcode_styles_temp[$atts['id']] = $shortcode_style;
			update_option( $atts['shortcode'].'_style_temp', $shortcode_styles_temp, 'yes' );
		}	
		//$difference = array_diff($shortcode_styles[get_the_ID()],$shortcode_styles_temp);	
		$shortcode_styles[get_the_ID()] = array_intersect_key($shortcode_styles[get_the_ID()], $shortcode_styles_temp);
		update_option( $atts['shortcode'].'_style', $shortcode_styles, 'yes' );
		//delete_option($atts['shortcode'].'_style_temp');
	}
}

if(! function_exists('options_image')) {
	function options_image() {
		return array(
			'src'     => array(
				'type'  => 'upload',
				'label' => __( 'Choose Image', 'unyson' ),
				'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'unyson' )
			),
			'width'  => array(
				'type'  => 'text',
				'label' => __( 'Width', 'unyson' ),
				'desc'  => __( 'Set image width in pixels. E.g.: 100', 'unyson' ),
				'value' => ''
			),
			'height' => array(
				'type'  => 'text',
				'label' => __( 'Height', 'unyson' ),
				'desc'  => __( 'Set image height in pixels. E.g.: 50', 'unyson' ),
				'value' => ''
			),
			'alignment'   => array(
				'label'   => __( 'Alignment', 'unyson' ),
				'type'    => 'select',
				'value'   => 'alignleft',
				'choices' => array(
					'' => __( 'No Alignment' ),
					'alignleft' => __( 'Left Align' ),
					'aligncenter' => __( 'Center Align' ),
					'alignright' => __( 'Right Align' ),
				),
			),
			'style'       => array(
				'type'         => 'multi-picker',
				'label'        => false,
				'desc'         => false,
				'picker'       => array(
					'image_style' => array(
						'label'   => __( 'Image Style', 'unyson' ),
						'type'    => 'select',
						'choices' => array(
							''  => __( 'No Styling', 'unyson' ),
							'border' => __( 'Border', 'unyson' ),
							'round' => __( 'Rounded Corners', 'unyson' ),
							'circle' => __( 'Circle (must have equal width & height)', 'unyson' ),
							'round-border' => __( 'Rounded Corners + Border', 'unyson' ),
							'circle-border' => __( 'Circle + Border', 'unyson' ),
						),
						'value'	 => '',
						'desc'    => __( 'Choose a style', 'unyson' ),
					)
				),
				'choices'      => array(
					/*'border'  => array(
						'price'  => array(
							'type'  => 'text',
							'label' => __( 'Price', 'unyson' ),
						),
						'memory' => array(
							'type'    => 'select',
							'label'   => __( 'Memory', 'unyson' ),
							'choices' => array(
								'16' => __( '16Gb', 'unyson' ),
								'32' => __( '32Gb', 'unyson' ),
								'64' => __( '64Gb', 'unyson' ),
							)
						)
					),*/
				),
				'show_borders' => false,
			),
			'link' => options_link_atts(),
		);		
	}
}

/**
 *  Get the image from options
 */
if(! function_exists('get_options_image')) {
	function get_options_image($image,$id=NULL) {	
		if(!empty($image['src'])):			
			$width  = ( is_numeric( $image['width'] ) && ( $image['width'] > 0 ) ) ? $image['width'] : '';
			$height = ( is_numeric( $image['height'] ) && ( $image['height'] > 0 ) ) ? $image['height'] : '';
			
			if ( ! empty( $width ) && ! empty( $height ) ) {
				$image_src = fw_resize( $image['src']['attachment_id'], $width, $height, true );
			} else {
				$image_src = $image['src']['url'];
			}
			
			$alt = get_post_meta($image['src']['attachment_id'], '_wp_attachment_image_alt', true);
			
			$attachment_meta = wp_prepare_attachment_for_js($image['src']['attachment_id']); 
			
			$img_atts = array(
				'src' => $image_src,
				'alt' => $alt ? $alt : $attachment_meta['title'],
				'class' => 'media-object img-responsive '.$image['alignment'],
			);
			
			if(!empty($width)){
				$img_atts['width'] = $width;
			}else{
				$img_atts['width'] = $attachment_meta['width'];
			}
			
			if(!empty($height)){
				$img_atts['height'] = $height;
			}else{
				$img_atts['height'] = $attachment_meta['height'];
			}
		
			$link = get_options_link($image,NULL);
			if ( empty( $link['url'] ) ) {
				return fw_html_tag('img', $img_atts);
			} else {
				if( $link['atts']['target'] == 'lightbox'):
					$attachment = wp_prepare_attachment_for_js($image['src']['attachment_id']);
					$link['atts']['data-lightbox'] = $attachment['type'].'-'.$attachment['id'];
					$link['atts']['data-title'] = $attachment['caption'];
					
					
				elseif( $link['atts']['target'] == 'modal'):
					$link['atts']['data-toggle'] = 'modal';
					$link['atts']['data-target'] = '#mod-'.$image['id'];
					?>
					<!-- Modal -->
					<div class="modal fade" id="mod-<?php echo $image['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="buttonModal" aria-hidden="true">
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
					<?php
				endif;
				return fw_html_tag('a', $link['atts'], fw_html_tag('img',$img_atts));
			}
        endif; 
	}
}

if(! function_exists('options_heading')) :
/**
 *  Header Option Attributes
 */
function options_heading($text = 'Heading') {
	$theme_colors = c_get_option('theme_colors');
	$color['text-default'] = __( 'Default' , 'unyson');
	foreach($theme_colors as $theme_color) {
		$color['text-'.sanitize_title_with_dashes($theme_color['text'])] = __( $theme_color['text'] , 'unyson');
	}
	return array(
		'text'    => array(
			'type'  => 'text',
			'label' => __( $text, 'fw' ),
			// 'attr'  => array('class' => 'no-bottom-border'), // not working... tba
		),
		'tag' => array(
			'type'    => 'select',
			'label'   => __('Tag', 'fw'),
			'value'   => 'h2',
			'choices' => array(
				'h1' => 'H1',
				'h2' => 'H2',
				'h3' => 'H3',
				'h4' => 'H4',
				'h5' => 'H5',
				'h6' => 'H6',
				'p' => 'p',
			)
		),
		'color'                    => array(
			'label'   => __( 'Color', 'unyson' ),
			'type'    => 'select',
			'value'   => '',
			'choices' => $color,
		),
		'formatting'                => array(
			'label'   => __( 'Formatting', 'unyson' ),
			'type'    => 'checkboxes',
			'value'   => array(
				'bold' => false,
				'italic' => false,
			),
			'choices' => array(
				'bold' => __( 'Bold', 'unyson' ),
				'italic' => __( 'Italic', 'unyson' ),
			),
		),
		'alignment' => array(
			'type'    => 'select',
			'label'   => __('Text Alignment', 'fw'),
			'choices' => array(
				'text-left' => 'Left aligned text',
				'text-center' => 'Center aligned text',
				'text-right' => 'Right aligned text',
				'text-justify' => 'Justified text',
				'text-nowrap' => 'No wrap text',
			)
		),
		'transformation' => options_transformation(),
		'link'       => options_link_atts(),
	);
}
endif;

/**
 *  Get header from option
 */
if(! function_exists('options_get_heading')) {
	function options_get_heading($atts,$class) {
		$atts_class = array();
		$atts_class[] = $class;
		if($atts['color'] != 'text-default') {
			$atts_class[] = $atts['color'];
		}
		$atts_class[] = $atts['alignment'];
		$atts_class[] = $atts['transformation'];	
		
		$link = get_options_link($atts,NULL);
		
		if(!empty($atts['text'])): 
			if ( empty( $link['url'] ) ) {
				if(!empty($atts['formatting'])) {
					if($atts['formatting']['bold'] && $atts['formatting']['italic']) { 			// If bold and italics are both enabled
						return fw_html_tag($atts['tag'], array( 'class' => join( ' ', $atts_class )), 
								fw_html_tag('strong',array(),
									fw_html_tag('em',array(), $atts['text'])));
					}elseif($atts['formatting']['bold']) {													// If only bold is enabled.
						return fw_html_tag($atts['tag'], array( 'class' => join( ' ', $atts_class )), 
								fw_html_tag('strong',array(), $atts['text']));
					}elseif($atts['formatting']['italic']) {													// If only italic is enabled.
						return fw_html_tag($atts['tag'], array( 'class' => join( ' ', $atts_class )), 
								fw_html_tag('em',array(), $atts['text']));
					}
				}else{
					return fw_html_tag($atts['tag'], 
						array( 'class' => join( ' ', $atts_class )), 
						$atts['text']);
				}
			} else {
				if(!empty($atts['formatting'])) {
					if($atts['formatting']['bold'] && $atts['formatting']['italic']) { 			// If bold and italics are both enabled
						return fw_html_tag($atts['tag'], array( 'class' => join( ' ', $atts_class )), 
								fw_html_tag('strong',array(),
									fw_html_tag('em',array(), $atts['text'])));
					}elseif($atts['formatting']['bold']) {													// If only bold is enabled.
						return fw_html_tag($atts['tag'], array( 'class' => join( ' ', $atts_class )), 
								fw_html_tag('strong',array(), $atts['text']));
					}elseif($atts['formatting']['italic']) {													// If only italic is enabled.
						return fw_html_tag($atts['tag'], array( 'class' => join( ' ', $atts_class )), 
								fw_html_tag('em',array(), $atts['text']));
					}
				}else{
					return fw_html_tag($atts['tag'], array( 'class' => join( ' ', $atts_class )), 
						fw_html_tag('a', $link['atts'],
							$atts['text']));
				}
			}
        endif; 
	}
}

/**
 *  Text option attributes
 */
if(! function_exists('options_text')) {
	function options_text() {
		$theme_colors = c_get_option('theme_colors');
		$color[''] = __( 'Default' , 'unyson');
		foreach($theme_colors as $theme_color) {
			$color['text-'.sanitize_title_with_dashes($theme_color['text'])] = __( $theme_color['text'] , 'unyson');
		}
		return array(
			'content' => array(
				'type'   => 'wp-editor',
				//'teeny'  => false, //Whether to output the minimal editor configuration used in PressThis
				'reinit' => true,
				'label'  => __( 'Content', 'fw' ),
				'desc'   => __( 'Enter content for this texblock', 'fw' ),
				'tinymce' => true, //Load TinyMCE, can be used to pass settings directly to TinyMCE using an array. Default: true
				'size' => 'large',
				'editor_height' => 425, //The height to set the editor in pixels. If set, will be used instead of textarea_rows. 
				//'editor_type' => 'tinymce',
				'wpautop' => true, //Whether to use wpautop for adding in paragraphs. Note that the paragraphs are added automatically when wpautop is false.
				'value' => ''
			),
			'color'	=> array(
				'label'   => __( 'Color', 'unyson' ),
				'type'    => 'select',
				'value'   => '',
				'choices' => $color,
			),
		);
	}
}


if(! function_exists('lastimosa_options_animate')) :
/**
 *  Animate Options
 */
function lastimosa_options_animate() {
	return array(
		'animation'   => array(
			'label'   => __( 'Animation', 'lastimosa' ),
			'type'    => 'select',
			'value'   => '',
			'desc'    => __( 'Select animation.','lastimosa' ),
			'choices' => array(
				'' => __( 'None', 'lastimosa' ),				
				array(
					'attr'    => array(
						'label'         => __( 'Attention Seekers', 'lastimosa' ),
					),
					'choices' => array(
						'bounce' => __( 'bounce', 'lastimosa' ),
						'flash' => __( 'flash', 'lastimosa' ),
						'pulse' => __( 'pulse', 'lastimosa' ),
						'rubberBand' => __( 'rubberBand', 'lastimosa' ),
						'shake' => __( 'shake', 'lastimosa' ),
						'swing' => __( 'swing', 'lastimosa' ),
						'tada' => __( 'tada', 'lastimosa' ),
						'wobble' => __( 'wobble', 'lastimosa' ),
						'jello' => __( 'jello', 'lastimosa' ),
					),
				),	
				array(
					'attr'    => array(
						'label'         => __( 'Bouncing Entrances', 'lastimosa' ),
					),
					'choices' => array(
						'bounceIn' => __( 'bounceIn', 'lastimosa' ),
						'bounceInDown' => __( 'bounceInDown', 'lastimosa' ),
						'bounceInLeft' => __( 'bounceInLeft', 'lastimosa' ),
						'bounceInRight' => __( 'bounceInRight', 'lastimosa' ),
						'bounceInUp' => __( 'bounceInUp', 'lastimosa' ),
					),
				),	
				array(
					'attr'    => array(
						'label'         => __( 'Bouncing Exits', 'lastimosa' ),
					),
					'choices' => array(
						'bounceOut' => __( 'bounceOut', 'lastimosa' ),
						'bounceOutDown' => __( 'bounceOutDown', 'lastimosa' ),
						'bounceOutLeft' => __( 'bounceOutLeft', 'lastimosa' ),
						'bounceOutRight' => __( 'bounceOutRight', 'lastimosa' ),
						'bounceOutUp' => __( 'bounceOutUp', 'lastimosa' ),
					),
				),	
				array(
					'attr'    => array(
						'label'         => __( 'Fading Entrances', 'lastimosa' ),
					),
					'choices' => array(
						'fadeIn' => __( 'fadeIn', 'lastimosa' ),
						'fadeInDown' => __( 'fadeInDown', 'lastimosa' ),
						'fadeInDownBig' => __( 'fadeInDownBig', 'lastimosa' ),
						'fadeInLeft' => __( 'fadeInLeft', 'lastimosa' ),
						'fadeInLeftBig' => __( 'fadeInLeftBig', 'lastimosa' ),
						'fadeInRight' => __( 'fadeInRight', 'lastimosa' ),
						'fadeInRightBig' => __( 'fadeInRightBig', 'lastimosa' ),
						'fadeInUp' => __( 'fadeInUp', 'lastimosa' ),
						'fadeInUpBig' => __( 'fadeInUpBig', 'lastimosa' ),
					),
				),	
				array(
					'attr'    => array(
						'label'         => __( 'Fading Exits', 'lastimosa' ),
					),
					'choices' => array(
						'fadeOut' => __( 'fadeOut', 'lastimosa' ),
						'fadeOutDown' => __( 'fadeOutDown', 'lastimosa' ),
						'fadeOutDownBig' => __( 'fadeOutDownBig', 'lastimosa' ),
						'fadeOutLeft' => __( 'fadeOutLeft', 'lastimosa' ),
						'fadeOutLeftBig' => __( 'fadeOutLeftBig', 'lastimosa' ),
						'fadeOutRight' => __( 'fadeOutRight', 'lastimosa' ),
						'fadeOutRightBig' => __( 'fadeOutRightBig', 'lastimosa' ),
						'fadeOutUp' => __( 'fadeOutUp', 'lastimosa' ),
						'fadeOutUpBig' => __( 'fadeOutUpBig', 'lastimosa' ),
					),
				),	
				array(
					'attr'    => array(
						'label'         => __( 'Flippers', 'lastimosa' ),
					),
					'choices' => array(
						'flip' => __( 'flip', 'lastimosa' ),
						'flipInX' => __( 'flipInX', 'lastimosa' ),
						'flipInY' => __( 'flipInY', 'lastimosa' ),
						'flipOutX' => __( 'flipOutX', 'lastimosa' ),
						'flipOutY' => __( 'flipOutY', 'lastimosa' ),
					),
				),	
				array(
					'attr'    => array(
						'label'         => __( 'Lightspeed', 'lastimosa' ),
					),
					'choices' => array(
						'lightSpeedIn' => __( 'lightSpeedIn', 'lastimosa' ),
						'lightSpeedOut' => __( 'lightSpeedOut', 'lastimosa' ),
					),
				),	
				array(
					'attr'    => array(
						'label'         => __( 'Rotating Entrances', 'lastimosa' ),
					),
					'choices' => array(
						'rotateIn' => __( 'rotateIn', 'lastimosa' ),
						'rotateInDownLeft' => __( 'rotateInDownLeft', 'lastimosa' ),
						'rotateInDownRight' => __( 'rotateInDownRight', 'lastimosa' ),
						'rotateInUpLeft' => __( 'rotateInUpLeft', 'lastimosa' ),
						'rotateInUpRight' => __( 'rotateInUpRight', 'lastimosa' ),
					),
				),	
				array(
					'attr'    => array(
						'label'         => __( 'Rotating Exits', 'lastimosa' ),
					),
					'choices' => array(
						'rotateOut' => __( 'rotateOut', 'lastimosa' ),
						'rotateOutDownLeft' => __( 'rotateOutDownLeft', 'lastimosa' ),
						'rotateOutDownRight' => __( 'rotateOutDownRight', 'lastimosa' ),
						'rotateOutUpLeft' => __( 'rotateOutUpLeft', 'lastimosa' ),
						'rotateOutUpRight' => __( 'rotateOutUpRight', 'lastimosa' ),
					),
				),	
				array(
					'attr'    => array(
						'label'         => __( 'Sliding Entrances', 'lastimosa' ),
					),
					'choices' => array(
						'slideInUp' => __( 'slideInUp', 'lastimosa' ),
						'slideInDown' => __( 'slideInDown', 'lastimosa' ),
						'slideInLeft' => __( 'slideInLeft', 'lastimosa' ),
						'slideInRight' => __( 'slideInRight', 'lastimosa' ),
					),
				),	
				array(
					'attr'    => array(
						'label'         => __( 'Sliding Exits', 'lastimosa' ),
					),
					'choices' => array(
						'slideOutUp' => __( 'slideOutUp', 'lastimosa' ),
						'slideOutDown' => __( 'slideOutDown', 'lastimosa' ),
						'slideOutLeft' => __( 'slideOutLeft', 'lastimosa' ),
						'slideOutRight' => __( 'slideOutRight', 'lastimosa' ),
					),
				),	
				array(
					'attr'    => array(
						'label'         => __( 'Zoom Entrances', 'lastimosa' ),
					),
					'choices' => array(
						'zoomIn' => __( 'zoomIn', 'lastimosa' ),
						'zoomInDown' => __( 'zoomInDown', 'lastimosa' ),
						'zoomInLeft' => __( 'zoomInLeft', 'lastimosa' ),
						'zoomInRight' => __( 'zoomInRight', 'lastimosa' ),
						'zoomInUp' => __( 'zoomInUp', 'lastimosa' ),
					),
				),	
				array(
					'attr'    => array(
						'label'         => __( 'Zoom Exits', 'lastimosa' ),
					),
					'choices' => array(
						'zoomOut' => __( 'zoomOut', 'lastimosa' ),
						'zoomOutDown' => __( 'zoomOutDown', 'lastimosa' ),
						'zoomOutLeft' => __( 'zoomOutLeft', 'lastimosa' ),
						'zoomOutRight' => __( 'zoomOutRight', 'lastimosa' ),
						'zoomOutUp' => __( 'zoomOutUp', 'lastimosa' ),
					),
				),	
				array(
					'attr'    => array(
						'label'         => __( 'Specials', 'lastimosa' ),
					),
					'choices' => array(
						'hinge' => __( 'hinge', 'lastimosa' ),
						'rollIn' => __( 'rollIn', 'lastimosa' ),
						'rollOut' => __( 'rollOut', 'lastimosa' ),
					),
				),						
			),
		),
		'duration'                => array(
			'label' => __( 'Duration', 'unyson' ),
			'type'  => 'short-text',
			'value' => '',
			'desc'  => __( 'Change the animation duration. ',	'unyson' ),
			'help'  => sprintf( "%s<br />%s",
				__( 'E.g.: <b>2s</b> for 2 seconds.', 'unyson' ),
				__( 'Leave blank to disable.', 'unyson' )
			),
		),
		'delay'                => array(
			'label' => __( 'Delay', 'unyson' ),
			'type'  => 'short-text',
			'value' => '',
			'desc'  => __( 'The delay before the animation starts. ',	'unyson' ),
			'help'  => sprintf( "%s<br />%s",
				__( 'E.g.: <b>5s</b> for 5 seconds.', 'unyson' ),
				__( 'Leave blank to disable.', 'unyson' )
			),
		),
		'offset'                => array(
			'label' => __( 'Offset', 'unyson' ),
			'type'  => 'short-text',
			'value' => '',
			'desc'  => __( 'The distance to start the animation (related to the browser bottom).',	'unyson' ),
			'help'  => sprintf( "%s<br />%s",
				__( 'E.g.: <b>10</b> for 10px.', 'unyson' ),
				__( 'Leave blank to disable.', 'unyson' )
			),
		),
		'iteration' => array(
			'label' => __( 'Iteration', 'unyson' ),
			'type'  => 'short-text',
			'value' => '',
			'desc'  => __( 'Number of times the animation is repeated.','unyson' ),
			'help'  => sprintf( "%s<br />%s<br />%s",
				__( 'E.g.: <b>10</b> for 10 times.', 'unyson' ),
				__( 'Type <b>infinite</b> for infinite loop.', 'unyson' ),
				__( 'Leave blank to disable.', 'unyson' )
			),
		),
	);
}
endif;

if(! function_exists('lastimosa_options_visibility')) :
/**
 *  Visibility Options
 */
function lastimosa_options_visibility() {
	return array(
		'responsive' => array(
			'label'   => __( 'Responsive', 'lastimosa' ),
			'type'    => 'select',
			'value'   => '',
			'desc'    => __( '','unyson' ),
			'choices' => array(
				'' => __( 'Always Shown', 'lastimosa' ),
				'visible-xs-block' => __( 'Visible on Extra small devices. Phones (<768px)', 'lastimosa' ),
				'visible-sm-block' => __( 'Visible on Small devices. Tablets (≥768px)', 'lastimosa' ),
				'visible-md-block' => __( 'Visible on Medium devices. Desktops (≥992px)', 'lastimosa' ),
				'visible-lg-block' => __( 'Visible on Large devices. Desktops (≥1200px)', 'lastimosa' ),
				'hidden-xs' => __( 'Hidden on Extra small devices. Phones (<768px)', 'lastimosa' ),
				'hidden-sm' => __( 'Hidden on Small devices. Tablets (≥768px)', 'lastimosa' ),
				'hidden-md' => __( 'Hidden on Medium devices. Desktops (≥992px)', 'lastimosa' ),
				'hidden-lg' => __( 'Hidden on Large devices. Desktops (≥1200px)', 'lastimosa' ),
			),
		),
		'user' => array(
			'label'   => __( 'User', 'lastimosa' ),
			'type'    => 'select',
			'value'   => '',
			'desc'    => __( '','unyson' ),
			'choices' => array(
				'' => __( 'Always Shown', 'lastimosa' ),
				'logged-in' => __( 'Visible only for logged in user', 'lastimosa' ),
				'logged-out' => __( 'Visible only for logged out user', 'lastimosa' ),
				'hidden' => __( 'Hidden', 'lastimosa' ),
			),
		),
	);
}
endif;


if(! function_exists('lastimosa_get_shortcode_attr')) :
/**
 *  Get Shortcode Attributes
 */
function lastimosa_get_shortcode_attr($atts) {
	//The classes for the block
	$class = array();
	$class[] = $atts['shortcode'];
	if(!empty($atts['animate']['animation'])) {
		$class[] = 'wow';
		$class[] = $atts['animate']['animation'];
	}
	if(!empty($atts['visibility']['responsive'])) {
		$class[] = $atts['visibility']['responsive'];
	}
	if(!empty($atts['visibility']['user'])) {
		if(( $atts['visibility']['user'] == 'logged-in') && !is_user_logged_in() ||
			($atts['visibility']['user'] == 'logged-out') && is_user_logged_in() ||
			($atts['visibility']['user'] == 'hidden')){
			$class[] = 'hidden';
		}
	}
	if(!empty($atts['class'])) {
		$class[] = $atts['class'];
	}
	$class = join( ' ', $class );
	
	//The attributes for the block
	$attr['class'] = $class;
	if(!empty($atts['custom_id'])){
		$attr['id'] = $atts['custom_id'];
	}
	if(!empty($atts['animate']['duration'])){
		$attr['data-wow-duration'] = $atts['animate']['duration'];
	}
	if(!empty($atts['animate']['delay'])){
		$attr['data-wow-delay'] = $atts['animate']['delay'];
	}
	if(!empty($atts['animate']['offset'])){
		$attr['data-wow-offset'] = $atts['animate']['offset'];
	}
	if(!empty($atts['animate']['iteration'])){
		$attr['data-wow-iteration'] = $atts['animate']['iteration'];
	}
	return $attr;
}
endif;
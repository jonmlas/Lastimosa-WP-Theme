<?php if ( ! defined( 'ABSPATH' ) ) die( 'Direct access forbidden.' );

/**
 * Color Picker
 */
if(! function_exists('lastimosa_options_color_picker')):
	function lastimosa_options_color_picker($label = NULL, $default = '#fff', $picker = NULL) {
		$theme_colors = lastimosa_get_option('theme_colors');
		$predefined_colors = array();
		foreach($theme_colors as $theme_color) {
		  $predefined_colors[$theme_color['text']] = $theme_color['color'];
		}
		if($picker == 'rgba') {
			$picker = 'rgba-color-picker';
		}else{
			$picker = 'color-picker';
		}
		$option = array(
			'type' => 'predefined-colors-color-picker',
			'label' => __($label, 'lastimosa'),
			'value' => array(
				'predefined' => $default, // you can set default value
				'custom' => '' // or default value for picker
			),
			'colors' => array(
				'predefined' => array(
					'type' =>'predefined',
					'choices' => $predefined_colors,
				),
				'custom' => array(
					'type' =>'custom',
					'picker' => $picker, // color-picker|rgba-color-picker
				),
			),
			'help'  => __('Set your predefined color swatches in <a href="'.admin_url().'themes.php?page=fw-settings#fw-options-tab-tab_colors" target="_blank">here</a>', 'lastimosa')
		);
		return $option; 
	}
endif;


/**
 * Get Color Picker
 */
if(! function_exists('lastimosa_options_get_color_picker')):
	function lastimosa_options_get_color_picker($atts) {
		if(!empty($atts['predefined'])) {
			return $atts['predefined'];
		}else{
			return $atts['custom'];
		}
	}
endif;	


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
					'label'   => __( $name.' Background', 'lastimosa' ),
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
					'label' => __( '', 'lastimosa' ),
					'desc' => __( 'background color', 'lastimosa' ),
					'type'  => 'color-picker',
					'value' => '',
				),
				'position' => array(
					'label' => __( '', 'lastimosa' ),
					'desc'  => __( 'image position', 'lastimosa' ),
					'type'  => 'select',
					'value' => 'top center',
					'choices' => array(
						'top left' => __( 'Top Left', 'lastimosa' ),
						'top center' => __( 'Top Center', 'lastimosa' ),
						'top right' => __( 'Top Right', 'lastimosa' ),
						'center left' => __( 'Center Left', 'lastimosa' ),
						'center center' => __( 'Center Center', 'lastimosa' ),
						'center right' => __( 'Center Right', 'lastimosa' ),
						'bottom left' => __( 'Bottom Left', 'lastimosa' ),
						'bottom center' => __( 'Bottom Center', 'lastimosa' ),
						'bottom right' => __( 'Bottom Right', 'lastimosa' ),
					)
				),
				'repeat' => array(
					'label' => __( '', 'lastimosa' ),
					'desc'  => __( 'image repeat', 'lastimosa' ),
					'type'  => 'select',
					/*'attr'  => array( 'class' => '' ),*/
					'value' => 'repeat',
					'choices' => array(
						'no-repeat' => __( 'Display Once (No-Repeat)', 'lastimosa' ),
						'repeat' => __( 'Full Tile (Repeat XY Axis)', 'lastimosa' ),
						'repeat-x' => __( 'Horizontal Tile (Repeat X Axis)', 'lastimosa' ),
						'repeat-y' => __( 'Vertical Tile (Repeat Y Axis)', 'lastimosa' ),
					)
				),
				'attachment' => array(
					'label' => __( '', 'lastimosa' ),
					'desc'  => __( 'image attachment', 'lastimosa' ),
					'type'  => 'select',
					'value' => 'scroll',
					'choices' => array(
						'scroll' => __( 'Scroll', 'lastimosa' ),
						'fixed' => __( 'Fixed', 'lastimosa' ),
					),
					'help'	=> __( '<p><strong>scroll</strong> - The background scrolls along with the page. This is default</p>
									<p><strong>fixed</strong> - The background is fixed with regard to the viewport.</p>
									', 'lastimosa'),
				),
				'size' => array(
					'label' => __( '', 'lastimosa' ),
					'desc'  => __( 'image size', 'lastimosa' ),
					'help'  => __( '<strong>auto</strong> -	Default value. The background-image contains its width and height.<br><br>
						<strong>cover</strong> - Scale the background image to be as large as possible so that the background area is completely covered by the background image. Some parts of the background image may not be in view within the background positioning area.<br><br>
						<strong>contain</strong> - Scale the image to the largest size such that both its width and its height can fit inside the content area', 'lastimosa' ),
					'type'  => 'select',
					'value' => 'auto',
					'choices' => array(
						'auto' => __( 'Auto', 'lastimosa' ),
						'cover' => __( 'Cover', 'lastimosa' ),
						'contain' => __( 'Contain', 'lastimosa' ),
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
						'label'   => __( 'Link', 'lastimosa' ),
						'type'    => 'select',
						'choices' => array(
							'manual' => __( 'Manual', 'lastimosa' ),
							'page' 	=> __( 'Page', 'lastimosa' ),
							'post' 	=> __( 'Blog Post', 'lastimosa' ),
							'media' => __( 'Media', 'lastimosa' ),
						),
					)
				),
				'choices'      => array(
					'manual'  => array(
						'link'   => array(
							'label' => __( 'URL', 'lastimosa' ),
							'type'  => 'text',
							'value' => '',
							'desc'  => __( 'Enter the link. Leave Manual Link empty to disable.', 'lastimosa' )
						),
						'target'      => array(
							'label'   => __( 'Target', 'lastimosa' ),
							'type'    => 'select',
							'value'   => '_self',
							'desc'    => __( 'How the link will be opened.','lastimosa' ),
							'choices' => array(
								'_self'  	=> __( 'Open link in same window', 'lastimosa' ),
								'_blank'  	=> __( 'Open link in new window', 'lastimosa' ),
								'lightbox' 	=> __( 'Open link inside a lightbox', 'lastimosa' ),
								'modal' 	=> __( 'Open link inside bootstrap modal', 'lastimosa' ),
							),
						),
					),
					'page' => array(
						'link'      => array(
							'type'  => 'multi-select',
							'label' => __( 'Page', 'lastimosa' ),
							'desc'  => __( 'Type the title of the page to search', 'lastimosa' ),
							'population' => 'posts',
							'source'=> 'page',
							'limit' => 1,
						),
						'target'      => array(
							'label'   => __( 'Target', 'lastimosa' ),
							'type'    => 'select',
							'value'   => '_self',
							'desc'    => __( 'How the link will be opened.','lastimosa' ),
							'choices' => array(
								'_self'  	=> __( 'Open link in same window', 'lastimosa' ),
								'_blank'  	=> __( 'Open link in new window', 'lastimosa' ),
								'lightbox' 	=> __( 'Open link inside a lightbox', 'lastimosa' ),
								'modal' 	=> __( 'Open link inside bootstrap modal', 'lastimosa' ),
							),
						),
					),
					'post' => array(
						'link'      => array(
							'type'       => 'multi-select',
							'label'      => __( 'Post', 'lastimosa' ),
							'desc'  => __( 'Type the title of the post to search', 'lastimosa' ),
							'population' => 'posts',
							'source'     => 'post',
							'limit' => 1,
						),
						'target'      => array(
							'label'   => __( 'Target', 'lastimosa' ),
							'type'    => 'select',
							'value'   => '_self',
							'desc'    => __( 'How the link will be opened.','lastimosa' ),
							'choices' => array(
								'_self'  	=> __( 'Open link in same window', 'lastimosa' ),
								'_blank'  	=> __( 'Open link in new window', 'lastimosa' ),
								'lightbox' 	=> __( 'Open link inside a lightbox', 'lastimosa' ),
								'modal' 	=> __( 'Open link inside bootstrap modal', 'lastimosa' ),
							),
						),
					),
					'media' => array(
						'link'                    => array(
							'label'       => __( '', 'lastimosa' ),
							'desc'        => __( 'Upload your media file or select from Media Library.', 'lastimosa' ),
							'type'        => 'upload',
							'images_only' => false,
						),
						'target'      => array(
							'label'   => __( 'Target', 'lastimosa' ),
							'type'    => 'select',
							'value'   => '_self',
							'desc'    => __( 'How the link will be opened.','lastimosa' ),
							'choices' => array(
								'_self'  	=> __( 'Open link in same window', 'lastimosa' ),
								'_blank'  	=> __( 'Open link in new window', 'lastimosa' ),
								'lightbox' 	=> __( 'Open link inside a lightbox', 'lastimosa' ),
								'modal' 	=> __( 'Open link inside bootstrap modal', 'lastimosa' ),
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
					'label'   => __( 'Link', 'lastimosa' ),
					'type'    => 'select',
					'choices' => array(
						'manual' => __( 'Manual', 'lastimosa' ),
						'page' 	=> __( 'Page', 'lastimosa' ),
						'post' 	=> __( 'Blog Post', 'lastimosa' ),
						'media' => __( 'Media', 'lastimosa' ),
					),
				)
			),
			'choices'      => array(
				'manual'  => array(
					'link'   => array(
						'label' => __( 'URL', 'lastimosa' ),
						'type'  => 'text',
						'value' => '',
						'desc'  => __( 'Enter the link. Leave Manual Link empty to disable.', 'lastimosa' )
					),
					'target'      => array(
						'label'   => __( 'Target', 'lastimosa' ),
						'type'    => 'select',
						'value'   => '_self',
						'desc'    => __( 'How the link will be opened.','lastimosa' ),
						'choices' => array(
							'_self'  	=> __( 'Open link in same window', 'lastimosa' ),
							'_blank'  	=> __( 'Open link in new window', 'lastimosa' ),
							'lightbox' 	=> __( 'Open link inside a lightbox', 'lastimosa' ),
							'modal' 	=> __( 'Open link inside bootstrap modal', 'lastimosa' ),
						),
					),
				),
				'page' => array(
					'link'      => array(
						'type'  => 'multi-select',
						'label' => __( 'Page', 'lastimosa' ),
						'desc'  => __( 'Type the title of the page to search', 'lastimosa' ),
						'population' => 'posts',
						'source'=> 'page',
						'limit' => 1,
					),
					'target'      => array(
						'label'   => __( 'Target', 'lastimosa' ),
						'type'    => 'select',
						'value'   => '_self',
						'desc'    => __( 'How the link will be opened.','lastimosa' ),
						'choices' => array(
							'_self'  	=> __( 'Open link in same window', 'lastimosa' ),
							'_blank'  	=> __( 'Open link in new window', 'lastimosa' ),
							'lightbox' 	=> __( 'Open link inside a lightbox', 'lastimosa' ),
							'modal' 	=> __( 'Open link inside bootstrap modal', 'lastimosa' ),
						),
					),
				),
				'post' => array(
					'link'      => array(
						'type'       => 'multi-select',
						'label'      => __( 'Post', 'lastimosa' ),
						'desc'  => __( 'Type the title of the post to search', 'lastimosa' ),
						'population' => 'posts',
						'source'     => 'post',
						'limit' => 1,
					),
					'target'      => array(
						'label'   => __( 'Target', 'lastimosa' ),
						'type'    => 'select',
						'value'   => '_self',
						'desc'    => __( 'How the link will be opened.','lastimosa' ),
						'choices' => array(
							'_self'  	=> __( 'Open link in same window', 'lastimosa' ),
							'_blank'  	=> __( 'Open link in new window', 'lastimosa' ),
							'lightbox' 	=> __( 'Open link inside a lightbox', 'lastimosa' ),
							'modal' 	=> __( 'Open link inside bootstrap modal', 'lastimosa' ),
						),
					),
				),
				'media' => array(
					'link'                    => array(
						'label'       => __( '', 'lastimosa' ),
						'desc'        => __( 'Upload your media file or select from Media Library.', 'lastimosa' ),
						'type'        => 'upload',
						'images_only' => false,
					),
					'target'      => array(
						'label'   => __( 'Target', 'lastimosa' ),
						'type'    => 'select',
						'value'   => '_self',
						'desc'    => __( 'How the link will be opened.','lastimosa' ),
						'choices' => array(
							'_self'  	=> __( 'Open link in same window', 'lastimosa' ),
							'_blank'  	=> __( 'Open link in new window', 'lastimosa' ),
							'lightbox' 	=> __( 'Open link inside a lightbox', 'lastimosa' ),
							'modal' 	=> __( 'Open link inside bootstrap modal', 'lastimosa' ),
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

if(! function_exists('lastimosa_options_get_shortcode_css')) {
	function lastimosa_options_get_shortcode_css($atts) {
		global $post;
		$shortcode_atts = array();
		$atts['id'] = substr($atts['id'], 0, 10);
		$post_slug = $post->post_name;

		$shortcode_atts[] = '.'.$post->post_type.'-'.$post->post_name.' .'.substr($atts['shortcode'], 0, 3).'-'.$atts['id'].' { ';
		if($atts['margin'] != lastimosa_options_box_defaults())
		$shortcode_atts[] = 'margin:unquote("'.join( ' ', $atts['margin'] ).'"); ';
		if($atts['padding'] != lastimosa_options_box_defaults())
		$shortcode_atts[] = 'padding:unquote("'.join( ' ', $atts['padding'] ).'"); ';	
		
		if($atts['shortcode'] == 'section') {
			if(in_array($atts['style']['selected'], array('default','parallax'))) {
				// We'll have to move the section's background array.
				$atts['background'] = $atts['style'][$atts['style']['selected']]['background'];
				unset($atts['style']);
			}
		}
		if(isset($atts['background'])) {
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
		}
		
		if($atts['shortcode'] == 'section' && $atts['height']['select'] == 'custom') {
			$min_height		= 'min-height:'.$atts['height']['custom']['height'] . ';';
			$shortcode_atts[] = $min_height;
		}
		
		$shortcode_atts[] = '}';

		// Get the Grid Gutter Width
		if($atts['shortcode'] == 'section' && $atts['grid_gutter_width'] != '30px') {
			$gutter = (str_replace('px','', $atts['grid_gutter_width']) / 2).'px';
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
				'label' => __( 'Choose Image', 'lastimosa' ),
				'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'lastimosa' )
			),
			'width'  => array(
				'type'  => 'text',
				'label' => __( 'Width', 'lastimosa' ),
				'desc'  => __( 'Set image width in pixels. E.g.: 100', 'lastimosa' ),
				'value' => ''
			),
			'height' => array(
				'type'  => 'text',
				'label' => __( 'Height', 'lastimosa' ),
				'desc'  => __( 'Set image height in pixels. E.g.: 50', 'lastimosa' ),
				'value' => ''
			),
			'alignment'   => array(
				'label'   => __( 'Alignment', 'lastimosa' ),
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
						'label'   => __( 'Image Style', 'lastimosa' ),
						'type'    => 'select',
						'choices' => array(
							''  => __( 'No Styling', 'lastimosa' ),
							'border' => __( 'Border', 'lastimosa' ),
							'round' => __( 'Rounded Corners', 'lastimosa' ),
							'circle' => __( 'Circle (must have equal width & height)', 'lastimosa' ),
							'round-border' => __( 'Rounded Corners + Border', 'lastimosa' ),
							'circle-border' => __( 'Circle + Border', 'lastimosa' ),
						),
						'value'	 => '',
						'desc'    => __( 'Choose a style', 'lastimosa' ),
					)
				),
				'choices'      => array(
					/*'border'  => array(
						'price'  => array(
							'type'  => 'text',
							'label' => __( 'Price', 'lastimosa' ),
						),
						'memory' => array(
							'type'    => 'select',
							'label'   => __( 'Memory', 'lastimosa' ),
							'choices' => array(
								'16' => __( '16Gb', 'lastimosa' ),
								'32' => __( '32Gb', 'lastimosa' ),
								'64' => __( '64Gb', 'lastimosa' ),
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
	$color['text-default'] = __( 'Default' , 'lastimosa');
	foreach($theme_colors as $theme_color) {
		$color['text-'.sanitize_title_with_dashes($theme_color['text'])] = __( $theme_color['text'] , 'lastimosa');
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
			'label'   => __( 'Color', 'lastimosa' ),
			'type'    => 'select',
			'value'   => '',
			'choices' => $color,
		),
		'formatting'                => array(
			'label'   => __( 'Formatting', 'lastimosa' ),
			'type'    => 'checkboxes',
			'value'   => array(
				'bold' => false,
				'italic' => false,
			),
			'choices' => array(
				'bold' => __( 'Bold', 'lastimosa' ),
				'italic' => __( 'Italic', 'lastimosa' ),
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


if(! function_exists('lastimosa_options_get_heading')) :
/**
*  Get header from option
*/
function lastimosa_options_get_heading($atts,$handle) {
	$atts_class = array();
	$atts_class[] = $handle;
	if($atts[$handle]['color'] != 'text-default') {
		$atts_class[] = $atts[$handle]['color'];
	}
	$atts_class[] = $atts[$handle]['alignment'];
	if(!empty($atts[$handle]['transformation'])) {
		$atts_class[] = $atts[$handle]['transformation'];	
	}
	$link = get_options_link($atts[$handle],NULL);
	
	if(!empty($atts[$handle]['text'])): 
		if ( empty( $link['url'] ) ) {
			if(!empty($atts[$handle]['formatting'])) {
				if(isset($atts[$handle]['formatting']['bold']) && isset($atts[$handle]['formatting']['italic'])) { 			// If bold and italics are both enabled
					return fw_html_tag($atts[$handle]['tag'], array( 'class' => join( ' ', $atts_class )), 
							fw_html_tag('strong',array(),
								fw_html_tag('em',array(), $atts[$handle]['text'])));
				}elseif($atts[$handle]['formatting']['bold']) {													// If only bold is enabled.
					return fw_html_tag($atts[$handle]['tag'], array( 'class' => join( ' ', $atts_class )), 
							fw_html_tag('strong',array(), $atts[$handle]['text']));
				}elseif($atts[$handle]['formatting']['italic']) {													// If only italic is enabled.
					return fw_html_tag($atts[$handle]['tag'], array( 'class' => join( ' ', $atts_class )), 
							fw_html_tag('em',array(), $atts[$handle]['text']));
				}
			}else{
				return fw_html_tag($atts[$handle]['tag'], 
					array( 'class' => join( ' ', $atts_class )), 
					$atts[$handle]['text']);
			}
		} else {
			if(!empty($atts[$handle]['formatting'])) {
				if(isset($atts[$handle]['formatting']['bold']) && isset($atts[$handle]['formatting']['italic'])) { 		// If bold and italics are both enabled
					return fw_html_tag($atts[$handle]['tag'], array( 'class' => join( ' ', $atts_class )), 
							fw_html_tag('strong',array(),
								fw_html_tag('em',array(), $atts[$handle]['text'])));
				}elseif($atts[$handle]['formatting']['bold']) {													// If only bold is enabled.
					return fw_html_tag($atts[$handle]['tag'], array( 'class' => join( ' ', $atts_class )), 
							fw_html_tag('strong',array(), $atts[$handle]['text']));
				}elseif($atts[$handle]['formatting']['italic']) {													// If only italic is enabled.
					return fw_html_tag($atts[$handle]['tag'], array( 'class' => join( ' ', $atts_class )), 
							fw_html_tag('em',array(), $atts[$handle]['text']));
				}
			}else{
				return fw_html_tag($atts[$handle]['tag'], array( 'class' => join( ' ', $atts_class )), 
					fw_html_tag('a', $link[$handle]['atts'],
						$atts[$handle]['text']));
			}
		}
	endif; 
}
endif;


/**
 *  Text option attributes
 */
if(! function_exists('options_text')) {
	function options_text() {
		$theme_colors = c_get_option('theme_colors');
		$color[''] = __( 'Default' , 'lastimosa');
		foreach($theme_colors as $theme_color) {
			$color['text-'.sanitize_title_with_dashes($theme_color['text'])] = __( $theme_color['text'] , 'lastimosa');
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
				'label'   => __( 'Color', 'lastimosa' ),
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
			'label' => __( 'Duration', 'lastimosa' ),
			'type'  => 'short-text',
			'value' => '',
			'desc'  => __( 'Change the animation duration. ',	'lastimosa' ),
			'help'  => sprintf( "%s<br />%s",
				__( 'E.g.: <b>2s</b> for 2 seconds.', 'lastimosa' ),
				__( 'Leave blank to disable.', 'lastimosa' )
			),
		),
		'delay'                => array(
			'label' => __( 'Delay', 'lastimosa' ),
			'type'  => 'short-text',
			'value' => '',
			'desc'  => __( 'The delay before the animation starts. ',	'lastimosa' ),
			'help'  => sprintf( "%s<br />%s",
				__( 'E.g.: <b>5s</b> for 5 seconds.', 'lastimosa' ),
				__( 'Leave blank to disable.', 'lastimosa' )
			),
		),
		'offset'                => array(
			'label' => __( 'Offset', 'lastimosa' ),
			'type'  => 'short-text',
			'value' => '',
			'desc'  => __( 'The distance to start the animation (related to the browser bottom).',	'lastimosa' ),
			'help'  => sprintf( "%s<br />%s",
				__( 'E.g.: <b>10</b> for 10px.', 'lastimosa' ),
				__( 'Leave blank to disable.', 'lastimosa' )
			),
		),
		'iteration' => array(
			'label' => __( 'Iteration', 'lastimosa' ),
			'type'  => 'short-text',
			'value' => '',
			'desc'  => __( 'Number of times the animation is repeated.','lastimosa' ),
			'help'  => sprintf( "%s<br />%s<br />%s",
				__( 'E.g.: <b>10</b> for 10 times.', 'lastimosa' ),
				__( 'Type <b>infinite</b> for infinite loop.', 'lastimosa' ),
				__( 'Leave blank to disable.', 'lastimosa' )
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
	
$user_choices = array(
	'' => __( 'Visible for all', 'lastimosa' ),
	'logged-in' => __( 'Visible for Logged in user', 'lastimosa' ),
	'logged-out' => __( 'Visible for Logged out user', 'lastimosa' ),
);
	 
$wp_roles = wp_roles();
$roles = $wp_roles->get_names();
foreach($roles as $key => $role) {
	$user_choices['visible-'.$key] = __( 'Visible for '.$role.' user', 'lastimosa' );
}
$user_choices['hidden'] = __( 'Hidden', 'lastimosa' );
	
	return array(
		'responsive' => array(
			'label'   => __( 'Visibility', 'lastimosa' ),
			'type'    => 'select-multiple',
			'value'   => '',
			'desc'    => __( 'Device\'s Responsiveness Visibility.','lastimosa' ),
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
			'help' 	=> sprintf( "%s",
				__( 'Ctrl + Click to select multiple choices.','lastimosa' )
			),
		),
		'user' => array(
			'label'   => __( '', 'lastimosa' ),
			'type'    => 'select-multiple',
			'value'   => '',
			'desc'    => __( 'User Visibility','lastimosa' ),
			'choices' => $user_choices,
			'help' 	=> sprintf( "%s",
				__( 'Ctrl + Click to select multiple choices.','lastimosa' )
			),
		),
	);
}
endif;


if(! function_exists('lastimosa_options_get_user_visibility')) :
/**
 *  Get Visibility Options
 */
function lastimosa_options_get_user_visibility($atts) {
	
	if(!empty($atts['visibility']['user'])) {
		if(!empty($atts['visibility']['user'][0])) {

			$wp_roles = wp_roles();
			$roles = $wp_roles->get_names();
			$current_user_roles = wp_get_current_user()->roles;
			if(
				( in_array( 'logged-in', $atts['visibility']['user']) && is_user_logged_in() ) || 
				( in_array( 'logged-out', $atts['visibility']['user']) && !is_user_logged_in() ) ||
				( in_array( 'hidden', $atts['visibility']['user']) && !is_user_logged_in() )
			){
			}else{
				if(!empty($current_user_roles)) {
					foreach($roles as $key => $role) {
						foreach($current_user_roles as $current_user_role) {
							$check = 'visible-'.$current_user_role;
							if(!in_array( $check, $atts['visibility']['user'])) {
								$set_visible = true;
							}
						}
					}
					if(isset($set_visible)) return true;
				}else{
					return true;
				}
				
				
			}
		}		
	}
}
endif;


if(! function_exists('lastimosa_get_shortcode_attr')) :
/**
 *  Get Shortcode Attributes
 */
function lastimosa_get_shortcode_attr($atts) {
	//The classes for the block
	$class = array();
	if(!empty($atts['shortcode'])) $class[] = $atts['shortcode'];
	if(!empty($atts['animate']['animation'])) {
		$class[] = 'wow';
		$class[] = $atts['animate']['animation'];
	}
	if(!empty($atts['visibility']['responsive'])) {
		$class[] = $atts['visibility']['responsive'];
	}
/*	to be deleted
	if(!empty($atts['visibility']['user'])) {
		if(( $atts['visibility']['user'] == 'logged-in') && !is_user_logged_in() ||
			($atts['visibility']['user'] == 'logged-out') && is_user_logged_in() ||
			($atts['visibility']['user'] == 'hidden')){
			$class[] = 'hidden';
		}
	}*/
	if(!empty($atts['class'])) {
		$class[] = $atts['class'];
	}
	$class = join( ' ', $class );
	
	//The attributes for the block
	if(!empty($class)) $attr['class'] = $class;
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
	if(!empty($attr)) {
		return $attr;
	}else{ 
		return;
	}
}
endif;

function lastimosa_options_box_defaults(){
	return array('top' => '0', 'right' => '0', 'bottom' => '0', 'left' => '0');
}

if(!function_exists('lastimosa_options_box')) :
/**
 * Margin, Padding & Border Options
 */
function lastimosa_options_box($label,$top='0',$right='0',$bottom='0',$left='0') {
	return array(
		'type' => 'fw-multi-inline',
		'label' => __($label, 'lastimosa'),
		//'desc' => __('', 'lastimosa'),
		'value' => array(
			'top' 	=>$top,
			'right' =>$right,
			'bottom' =>$bottom,
			'left' 	=>$left,	
		),
		'fw_multi_options' => array(
			'top' => array(
				'type' =>'short-text',
				'title' => __('Top', 'lastimosa'),
			),
			'right' => array(
				'type' =>'short-text',
				'title' => __('Right', 'lastimosa'),
			),
			'bottom' => array(
				'type' =>'short-text',
				'title' => __('Bottom', 'lastimosa'),
			),
			'left' => array(
				'type' =>'short-text',
				'title' => __('Left', 'lastimosa'),
			),
		)
	);
}
endif; 


// This function is deprecated
if(! function_exists('get_css_box_measurements')){
	function get_css_box_measurements($side_size) {
		if($side_size['select'] == 'custom'):
			return 'unquote("'.$side_size['custom']['size'].'")';
		else:
			return $side_size['select'];
		endif;
	}
}


if(! function_exists('lastimosa_options_custom_id')) :
/**
 * Custom ID
 */
function lastimosa_options_custom_id() {
	return array(
		'label'   => __('CSS ID', 'lastimosa'),
		'desc'    => false,
		'type'    => 'text'
	);
}
endif;


if(! function_exists('lastimosa_options_class')) :
/**
* Class
*/
function lastimosa_options_class() {
	return array(
		'label'   => __('CSS Class', 'lastimosa'),
		'desc'    => false,
		'type'    => 'text'
	);
}
endif;

if(! function_exists('lastimosa_options_get_id')) :
/**
 * Get the ID
 */
function lastimosa_options_get_id($shortcode,$id,$custom_id) {
	if (!empty($custom_id)) : 
		return $custom_id;
	else :
		return substr($shortcode, 0, 3).'-'.substr($id, 0, 10);
	endif;
}
endif;


if(! function_exists('lastimosa_options_add_scss')) :
/**
 * Get the ID
 */
function lastimosa_options_add_scss($atts,$scss) {
	$shortcode_style = '';
	foreach ($scss as $key => $value){
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
	$shortcode_styles[get_the_ID()] = array_intersect_key($shortcode_styles[get_the_ID()], $shortcode_styles_temp);
	update_option( $atts['shortcode'].'_style', $shortcode_styles, 'yes' );
}
endif;


// TO BE ADDED
if(!function_exists('lastimosa_find_layersliders'))
{
	function lastimosa_find_layersliders($names_only = false)
	{
		// Get WPDB Object
	    global $wpdb;

	    // Table name
	    $table_name = $wpdb->prefix . "layerslider";
	 
	    // Get sliders
	    $sliders = $wpdb->get_results( "SELECT * FROM $table_name WHERE flag_hidden = '0' AND flag_deleted = '0' ORDER BY date_c ASC LIMIT 300" );
	 	fw_print($sliders);
	 	if(empty($sliders)) return;
	 	
	 	if($names_only)
	 	{
	 		$new = array();
	 		foreach($sliders as $key => $item) 
		    {
		    	if(empty($item->name)) $item->name = __("(Unnamed Slider)","avia_framework");
		       $new[$item->name] = $item->id;
		    }
		    
		    return $new;
	 	}
	 	
	 	return $sliders;
	}
}
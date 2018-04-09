/*
 * Footer
 * -----------------------------------------------------------------------------
 */

<?php // Footer Widgets 
$footer_widgets = lastimosa_get_option('footer_widgets');
$footer_widgets = $footer_widgets['yes']; ?>;
	$footer_widgets_heading_typography_size: 	<?php echo $footer_widgets['heading_typography']['size']; ?>;
	$footer_widgets_heading_typography_family: 	<?php echo $footer_widgets['heading_typography']['family']; ?>;
	$footer_widgets_heading_typography_style:	<?php echo $footer_widgets['heading_typography']['style']; ?>;
	$footer_widgets_heading_typography_color: 	<?php echo $footer_widgets['heading_typography']['color']; ?>;

	$footer_widgets_typography_size: 			<?php echo $footer_widgets['typography']['size']; ?>;
	$footer_widgets_typography_family: 			<?php echo $footer_widgets['typography']['family']; ?>;
	$footer_widgets_typography_style: 			<?php echo $footer_widgets['typography']['style']; ?>;
	$footer_widgets_typography_color: 			<?php echo $footer_widgets['typography']['color']; ?>;
    
    $footer_widgets_text_link_color: 			<?php echo $footer_widgets['text_link_color']; ?>;
    $footer_widgets_text_link_hover_color: 		<?php echo $footer_widgets['text_link_hover_color']; ?>;
<?php if ($footer_widgets['background']['image'] != 'none') { ?>
	$footer_widgets_bg_image:  					<?php echo $footer_widgets['background']['image']['data']['css']['background-image']; ?>;
<?php } ?>
<?php if (!empty($footer_widgets['background']['color'])) { ?>
	$footer_widgets_bg_color: 					<?php echo $footer_widgets['background']['color']; ?>;
<?php } ?>	
	$footer_widgets_bg_repeat: 					<?php echo $footer_widgets['background']['repeat']; ?>;
	$footer_widgets_bg_position: 				<?php echo $footer_widgets['background']['position']; ?>;
	$footer_widgets_bg_size:  					<?php echo $footer_widgets['background']['size']; ?>;
	$footer_widgets_overlay_color:  			<?php echo $footer_widgets['overlay_options']['yes']['overlay_color']; ?>;
	$footer_widgets_overlay_color_opacity: 		<?php echo $footer_widgets['overlay_options']['yes']['overlay_color_opacity']; ?>;
	
<?php // Footer Menu
$footer_menu = lastimosa_get_option('footer_menu'); ?>;
	$footer_menu_typography_size: 				<?php echo $footer_menu['typography']['size']; ?>;
	$footer_menu_typography_family: 			<?php echo $footer_menu['typography']['family']; ?>;
	$footer_menu_typography_style: 				<?php echo $footer_menu['typography']['style']; ?>;
	$footer_menu_typography_color: 				<?php echo $footer_menu['typography']['color']; ?>;
	
	$footer_menu_active_color: 					<?php echo $footer_menu['active_color']; ?>;
	$footer_menu_hover_color: 					<?php echo $footer_menu['hover_color']; ?>;

<?php // Footer Copyright
$footer_copyright = c_get_option('footer_copyright');	?>
	$footer_copyright_size: 					<?php echo $footer_copyright['typography']['size']; ?>;
	$footer_copyright_family: 					<?php echo $footer_copyright['typography']['family']; ?>;
	$footer_copyright_color: 					<?php echo $footer_copyright['typography']['color']; ?>;
	$footer_copyright_link_color: 				<?php echo $footer_copyright['link_color']; ?>;
	$footer_copyright_bg_color: 				<?php echo $footer_copyright['bg_color']; ?>;

footer#colophon {
	
    /* sticky footer code */
/*    position: absolute;
    right: 0;
    bottom: 0;
    left: 0;*/

	.widgets {
		background:<?php if ($footer_widgets['background']['image'] != 'none') { ?>$footer_widgets_bg_image<?php } ?> <?php if (!empty($footer_widgets['background']['color'])) { ?>$footer_widgets_bg_color<?php } ?> $footer_widgets_bg_position $footer_widgets_bg_repeat;
		background-size:$footer_widgets_bg_size;
        font-size:$footer_widgets_typography_size + 0px;
		color:$footer_widgets_typography_color;
		font-weight:$footer_widgets_typography_style;
		font-family:$footer_widgets_typography_family;
            
		h2.widget-title {
			font-size:$footer_widgets_heading_typography_size + 0px;
			color:$footer_widgets_heading_typography_color;
			font-weight:$footer_widgets_heading_typography_style;
			font-family:$footer_widgets_heading_typography_family;
		}
        
        a {
			color:$footer_widgets_text_link_color;
		}
        
        a:hover {
			color:$footer_widgets_text_link_hover_color;
		}
        
		ul {
			padding-left:20px;
		}
	}
	
	.site-info {
		background:$footer_copyright_bg_color;
		padding:20px 0 15px;
        
		p, a {
			color:$footer_copyright_color;
			text-align:$footer_copyright_alignment;
			font-family:$footer_copyright_family;
			font-size:$footer_copyright_size + 0px;
			<?php echo font_style($footer_copyright['typography']); ?>
            <?php echo font_weight($footer_copyright['typography']); ?>
		}
        
		.nav {
			> li > a {
				padding:0;
			}
		}
	}

	.nav {
		text-align: center;
        ul {
        	padding:0;
        }
		> li {
			display:inline-block;
			width:auto;
            
			a {
				font-size:$footer_menu_typography_size + 0px;
				color:$footer_menu_typography_color;
				font-weight:$footer_menu_typography_style;
				font-family:$footer_menu_typography_family;
				text-transform:capitalize;
				padding:0 10px;
				border-right:1px solid $footer_menu_typography_color;
			}
            
			a:hover {
				color:$footer_menu_active_color;
				background:none;
			}
            
			a:active {
				color:$footer_menu_active_color;
			}
		}
        
		li:last-child {
			a {
				border-right:none;
			}
		}
	}
    
	.social-profiles > li {
		display: inline-block;
		margin: 0 10px;
	}
}
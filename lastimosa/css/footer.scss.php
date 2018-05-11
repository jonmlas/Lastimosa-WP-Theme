/*
 * Footer
 * -----------------------------------------------------------------------------
 */

<?php // Footer Widgets 
$footer_widgets = lastimosa_get_option('footer_widgets');
$footer_widgets = $footer_widgets['yes']; ?>
$footer_widgets_text_link_color: 		<?php echo lastimosa_get_option_color_picker($footer_widgets['link_color']); ?>;
$footer_widgets_text_link_hover_color:<?php echo lastimosa_get_option_color_picker($footer_widgets['link_hover_color']); ?>;
	
<?php // Footer Menu
$footer_menu = lastimosa_get_option('footer_menu'); ?>
	$footer_menu_typography_color: 				<?php echo $footer_menu['typography']['color']; ?>;
	$footer_menu_active_color: 						<?php echo $footer_menu['active_color']; ?>;
	$footer_menu_hover_color: 						<?php echo $footer_menu['hover_color']; ?>;

<?php // Footer Copyright
$footer_copyright = lastimosa_get_option('footer_copyright');	?>
	$footer_copyright_link_color: 				<?php echo $footer_copyright['link_color']; ?>;
	$footer_copyright_bg_color: 					<?php echo $footer_copyright['bg_color']; ?>;

footer#colophon {
	
/* sticky footer code */
/*    position: absolute;
    right: 0;
    bottom: 0;
    left: 0;*/

	.widgets {
		<?php 
		echo lastimosa_get_option_typography_css($footer_widgets['typography']); 
		echo join( ' ', lastimosa_get_options_background_css( $footer_widgets ) ); ?>
            
		h2.widget-title {
			<?php echo lastimosa_get_option_typography_css($footer_widgets['heading_typography']); ?>  
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
			<?php echo lastimosa_get_option_typography_css($footer_copyright['typography']); ?>
			text-align:$footer_copyright_alignment;
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
				<?php echo lastimosa_get_option_typography_css($footer_menu['typography']); ?> 
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
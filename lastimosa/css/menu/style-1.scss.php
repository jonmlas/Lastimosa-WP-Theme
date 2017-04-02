<?php 
/**
 * Navigation
 * -----------------------------------------------------------------------------
 */
$header_menu 	= lastimosa_get_option('header_menu');

?>
$header_menu_font_size: 	<?php echo $header_menu['style_1']['typography']['size']; ?>;
$header_menu_font_family: 	<?php echo $header_menu['style_1']['typography']['family']; ?>;
$header_menu_font_style: 	<?php echo $header_menu['style_1']['typography']['style']; ?>;
$header_menu_color: 		<?php echo lastimosa_options_get_color_picker($header_menu['style_1']['color']); ?>;

$header_menu_background_color: <?php echo lastimosa_options_get_color_picker($header_menu['style_1']['background_color']); ?>;

$header_menu_active_color:	<?php echo lastimosa_options_get_color_picker($header_menu['style_1']['active_color']); ?>;
$header_menu_active_background_color: <?php echo lastimosa_options_get_color_picker($header_menu['style_1']['active_background_color']); ?>;

$header_menu_hover_color: 	<?php echo lastimosa_options_get_color_picker($header_menu['style_1']['hover_color']); ?>;
$header_menu_hover_background_color: <?php echo lastimosa_options_get_color_picker($header_menu['style_1']['hover_background_color']); ?>;

.navbar {
    margin-bottom: 0;
    .navbar-nav > li > a {
        color: $header_menu_color;
        font-family: $header_menu_font_family;
        font-size: $header_menu_font_size + px;
        font-weight: $header_menu_font_style;
        &:focus, &:hover {
            color: $header_menu_hover_color;
            background-color: $header_menu_hover_background_color;
        }
    }
    .navbar-nav > .active > a, .navbar-nav > .active > a:focus, .navbar-nav > .active > a:hover {
        color: $header_menu_active_color;
        background-color: $header_menu_active_background_color;
    }

}



/* Bootstrap Navigation Submenu Hover */
@media (min-width: 768px) {
  ul.nav li:hover > ul.dropdown-menu {
    display: block;
  }
}
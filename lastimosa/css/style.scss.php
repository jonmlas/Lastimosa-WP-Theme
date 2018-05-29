<?php 
/* Lastimosa Styles */
?>

$base-font-size: 16px;
@function rem($value, $context: $base-font-size) {
	@if type-of($value) == string {
		@return auto;
	} @else if unitless($value) {
		@return ((1px * $value) / $context) * 1rem;
	} @else if unit($value) == 'px' {
  	@return ($value / $context) * 1rem;
	} @else {
		@return $value;
	}
}

@import "bootstrap";
@import "social-icons";

<?php
include 'wp.scss.php';
include 'typography.scss.php';
//include 'header.scss.php'; 

$header_layout 	= lastimosa_get_option('header_layout');
include 'header/header-'.$header_layout['style']['selected'].'.scss.php';

//include 'menu.scss.php';
$header_menu 	= lastimosa_get_option('header_menu');
include 'menu/menu-'.$header_menu['selected'].'.scss.php';

include 'forms/forms-style-1.scss.php';
include 'footer.scss.php'; ?>
@import "lib/hover.scss";
@import "lib/imagehover.min.scss";
@import "lib/animate.scss";
<?php include 'comments/comments-style-1.scss.php';

include( TEMPLATEPATH . '/framework-customizations/extensions/shortcodes/shortcodes/section/static/css/style.scss.php');
include( TEMPLATEPATH . '/framework-customizations/extensions/shortcodes/shortcodes/column/static/css/style.scss.php');
include( TEMPLATEPATH . '/framework-customizations/extensions/shortcodes/shortcodes/accordion/static/css/style.scss.php');
include( TEMPLATEPATH . '/framework-customizations/extensions/shortcodes/shortcodes/text-block/static/css/style.scss.php');
include( TEMPLATEPATH . '/framework-customizations/extensions/shortcodes/shortcodes/button/static/css/style.scss.php');
include( TEMPLATEPATH . '/framework-customizations/extensions/shortcodes/shortcodes/icon/static/css/style.scss.php');
//include( TEMPLATEPATH . '/framework-customizations/extensions/shortcodes/shortcodes/testimonials/static/css/style.scss.php'); ?>
@import "../framework-customizations/extensions/portfolio/static/css/style.scss";

@import "../framework-customizations/extensions/shortcodes/shortcodes/special-heading/static/css/style.scss";

@import "../framework-customizations/extensions/shortcodes/shortcodes/special-heading/static/css/style.scss";
@import "../framework-customizations/extensions/shortcodes/shortcodes/team-member-custom/static/css/style.scss";
@import "../framework-customizations/extensions/shortcodes/shortcodes/portfolio/static/css/style.scss";
@import "../framework-customizations/extensions/shortcodes/shortcodes/image-box/static/css/style.scss";
@import "../framework-customizations/extensions/shortcodes/shortcodes/media-image/static/css/style.scss";
@import "../framework-customizations/extensions/shortcodes/shortcodes/taxonomy/static/css/style.scss";
@import "../framework-customizations/extensions/shortcodes/shortcodes/image-gallery/static/css/masonry.scss";
@import "../framework-customizations/extensions/shortcodes/shortcodes/image-gallery/static/css/magnific-popup.scss";
@import "../framework-customizations/extensions/shortcodes/shortcodes/image-gallery/static/css/style.scss";
@import "../framework-customizations/extensions/shortcodes/shortcodes/events/static/css/style.scss";
@import "../framework-customizations/extensions/shortcodes/shortcodes/tabs/static/css/style.scss";

<?php include 'responsive.scss.php'; ?>
<?php 
/* Lastimosa Styles */

include 'typography.scss.php';
include 'wp.scss.php';
//include 'header.scss.php'; 

$header_layout 	= c_get_option('header_layout');
include 'header/'.$header_layout['selected'].'.scss.php';

//include 'menu.scss.php';
$header_menu 	= c_get_option('header_menu');
include 'menu/'.str_replace('_', '-', $header_menu['selected']).'.scss.php';

include 'forms/forms-style-1.scss.php';
include 'footer.scss.php'; ?>
@import "bootstrap-customs.scss";
@import "hover.scss";
@import "effects/imagehover.min.scss";
@import "effects/animate.scss";
<?php include 'comments/comments-style-1.scss.php';

include( TEMPLATEPATH . '/framework-customizations/extensions/shortcodes/shortcodes/section/static/css/style.scss.php');
include( TEMPLATEPATH . '/framework-customizations/extensions/shortcodes/shortcodes/column/static/css/style.scss.php');
include( TEMPLATEPATH . '/framework-customizations/extensions/shortcodes/shortcodes/button/static/css/style.scss.php');
include( TEMPLATEPATH . '/framework-customizations/extensions/shortcodes/shortcodes/testimonials/static/css/style.scss.php'); ?>

@import "../framework-customizations/extensions/shortcodes/shortcodes/special-heading/static/css/style.scss";
@import "../framework-customizations/extensions/shortcodes/shortcodes/team-member-custom/static/css/style.scss";
@import "../framework-customizations/extensions/shortcodes/shortcodes/portfolio/static/css/style.scss";
@import "../framework-customizations/extensions/shortcodes/shortcodes/icon/static/css/style.scss";
@import "../framework-customizations/extensions/shortcodes/shortcodes/image-box/static/css/style.scss";
@import "../framework-customizations/extensions/shortcodes/shortcodes/media-image/static/css/style.scss";
@import "../framework-customizations/extensions/shortcodes/shortcodes/taxonomy/static/css/style.scss";
@import "../framework-customizations/extensions/shortcodes/shortcodes/image-gallery/static/css/masonry.scss";
@import "../framework-customizations/extensions/shortcodes/shortcodes/image-gallery/static/css/magnific-popup.scss";
@import "../framework-customizations/extensions/shortcodes/shortcodes/image-gallery/static/css/style.scss";
@import "../framework-customizations/extensions/shortcodes/shortcodes/events/static/css/style.scss";
@import "../framework-customizations/extensions/shortcodes/shortcodes/blog-posts/static/css/style.scss";
@import "../framework-customizations/extensions/shortcodes/shortcodes/tabs/static/css/style.scss";

<?php include 'responsive.scss.php'; ?>
<?php 
/* Lastimosa Styles */
?>

@import "functions";

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
<?php include 'comments/comments-style-1.scss.php'; ?>

<?php include 'responsive.scss.php'; ?>
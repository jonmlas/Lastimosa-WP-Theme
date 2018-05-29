<?php 
/**
 * Navigation
 * -----------------------------------------------------------------------------
 */
$header_menu 	= lastimosa_get_option('header_menu'); 
$menu 		= $header_menu[$header_menu['selected']]['menu'];
$submenu 	= $header_menu[$header_menu['selected']]['submenu'];
$megamenu = $header_menu[$header_menu['selected']]['megamenu']; 
?>

$menu_bg_color: 		<?php if(!empty($menu['bg_color'])) echo $menu['bg_color']; ?>;
$menu_divider: <?php if(!empty($menu['bg_color'])) echo 'lighten(' . $menu['bg_color'] . ', 5%' ?> );
$menu_active_color:	<?php echo lastimosa_get_option_color_picker($menu['active_color']); ?>;
$menu_active_bg_color: <?php echo lastimosa_get_option_color_picker($menu['active_bg_color']); ?>;
$menu_hover_color: 	<?php echo lastimosa_get_option_color_picker($menu['hover_color']); ?>;
$menu_hover_bg_color: <?php echo lastimosa_get_option_color_picker($menu['hover_bg_color']); ?>;
$menu_text_transform: <?php echo str_replace('text-','',$menu['text_transform']); ?>;

$submenu_bg_color: 		<?php echo $submenu['bg_color']; ?>;
$submenu_active_color:	<?php echo lastimosa_get_option_color_picker($submenu['active_color']); ?>;
$submenu_active_bg_color: <?php echo lastimosa_get_option_color_picker($submenu['active_bg_color']); ?>;
$submenu_hover_color: 	<?php echo lastimosa_get_option_color_picker($submenu['hover_color']); ?>;
$submenu_hover_bg_color: <?php echo lastimosa_get_option_color_picker($submenu['hover_bg_color']); ?>;
$submenu_text_transform: <?php echo str_replace('text-','',$submenu['text_transform']); ?>;

$megamenu_bg_color: 		<?php echo $megamenu['bg_color']; ?>;
$megamenu_active_color:	<?php echo lastimosa_get_option_color_picker($megamenu['active_color']); ?>;
$megamenu_active_bg_color: <?php echo lastimosa_get_option_color_picker($megamenu['active_bg_color']); ?>;
$megamenu_hover_color: 	<?php echo lastimosa_get_option_color_picker($megamenu['hover_color']); ?>;
$megamenu_hover_bg_color: <?php echo lastimosa_get_option_color_picker($megamenu['hover_bg_color']); ?>;
$megamenu_text_transform: <?php echo str_replace('text-','',$megamenu['text_transform']); ?>;
$megamenu_col_divider_color: <?php echo lastimosa_get_option_color_picker($megamenu['col_divider_color']); ?>;


/*! #######################################################################

	MeanMenu 2.0.7
	--------

	To be used with jquery.meanmenu.js by Chris Wharton (http://www.meanthemes.com/plugins/meanmenu/)

####################################################################### */

/* hide the link until viewport size is reached */
a.meanmenu-reveal {
	display: none;
}

/* when under viewport size, .mean-container is added to body */

.mean-container .mean-bar::before {
    content: 'MENU';
    color: #fff;
    position: absolute;
    left: 10px;
    top: 12px;
    font-weight: bold;
}

.mean-container .mean-bar {
	float: left;
	width: 100%;
	position: relative;
	background: #0c1923;
	padding: 4px 0 0;
	min-height: 42px;
	z-index: 9;
	margin-bottom: rem(16px);
}

.mean-container a.meanmenu-reveal {
	width: 22px;
	height: 22px;
	padding: 13px 13px 11px 13px;
	position: absolute;
	top: 0;
	right: 0;
	cursor: pointer;
	color: #fff;
	text-decoration: none;
	font-size: 16px;
	text-indent: -9999em;
	line-height: 22px;
	font-size: 1px;
	display: block;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: 700;
}

.mean-container a.meanmenu-reveal span {
	display: block;
	background: #fff;
	height: 3px;
	margin-top: 3px;
}

.mean-container .mean-nav {
	float: left;
	width: 100%;
	background: #0c1923;
	margin-top: 44px;
}

.mean-container .mean-nav ul {
	padding: 0;
	margin: 0;
	width: 100%;
	list-style-type: none;
}

.mean-container .mean-nav ul li {
	position: relative;
	float: left;
	width: 100%;
}

.mean-container .mean-nav ul li a {
	display: block;
	float: left;
	width: 90%;
	padding: 1em 5%;
	margin: 0;
	text-align: left;
	color: #fff;
	border-top: 1px solid #383838;
	border-top: 1px solid rgba(255,255,255,0.5);
	text-decoration: none;
	text-transform: uppercase;
}

.mean-container .mean-nav ul li li a {
	width: 80%;
	padding: 1em 10%;
	border-top: 1px solid #f1f1f1;
	border-top: 1px solid rgba(255,255,255,0.25);
	opacity: 0.75;
	filter: alpha(opacity=75);
	text-shadow: none !important;
	visibility: visible;
}

.mean-container .mean-nav ul li.mean-last a {
	border-bottom: none;
	margin-bottom: 0;
}

.mean-container .mean-nav ul li li li a {
	width: 70%;
	padding: 1em 15%;
}

.mean-container .mean-nav ul li li li li a {
	width: 60%;
	padding: 1em 20%;
}

.mean-container .mean-nav ul li li li li li a {
	width: 50%;
	padding: 1em 25%;
}

.mean-container .mean-nav ul li a:hover {
	background: #252525;
	background: rgba(255,255,255,0.1);
}

.mean-container .mean-nav ul li a.mean-expand {
	margin-top: 1px;
	width: 26px;
	height: 32px;
	padding: 12px !important;
	text-align: center;
	position: absolute;
	right: 0;
	top: 0;
	z-index: 2;
	font-weight: 700;
	background: rgba(255,255,255,0.1);
	border: none !important;
	border-left: 1px solid rgba(255,255,255,0.4) !important;
	border-bottom: 1px solid rgba(255,255,255,0.2) !important;
}

.mean-container .mean-nav ul li a.mean-expand:hover {
	background: rgba(0,0,0,0.9);
}

.mean-container .mean-push {
	float: left;
	width: 100%;
	padding: 0;
	margin: 0;
	clear: both;
}

.mean-nav .wrapper {
	width: 100%;
	padding: 0;
	margin: 0;
}

/* Fix for box sizing on Foundation Framework etc. */
.mean-container .mean-bar, .mean-container .mean-bar * {
	-webkit-box-sizing: content-box;
	-moz-box-sizing: content-box;
	box-sizing: content-box;
}

.mean-remove {
	display: none !important;
}


/*! #######################################################################

	Site Navigation

####################################################################### */

.site-navigation {
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	font-size: 14px;
	background: $menu_bg_color;
	width: 100%;
}

.site-navigation ul {
	list-style: none;
	margin: 0;
  padding-left:0;
}

.site-navigation li {
	border-top: 1px solid rgba(255, 255, 255, 0.2);
}

.site-navigation ul ul {
	margin-left: 20px;
	background: $submenu_bg_color;
}

.site-navigation a {
	<?php echo lastimosa_get_option_typography_css($menu['typography']); ?>
	display: block;
	<?php if(!empty(lastimosa_get_option_color_picker($menu['text_transform']))) { ?>
	text-transform: $menu_text_transform;
	<?php } ?>
}

.site-navigation ul ul a {
	<?php echo lastimosa_get_option_typography_css($submenu['typography']); ?>
	padding: rem(18px) rem(10px) rem(18px) rem(17px);
	white-space: normal;
	width: 100%;
	<?php if(!empty(lastimosa_get_option_color_picker($submenu['text_transform']))) { ?>
	text-transform: $submenu_text_transform;
	<?php }else{ ?>
	text-transform: none;
	<?php } ?>
}

.site-navigation .current_page_item > a,
.site-navigation .current_page_ancestor > a,
.site-navigation .current-menu-item > a,
.site-navigation .current-menu-parent > a,
.site-navigation .current-menu-ancestor > a {
	color: $menu_active_color;
  background-color:  <?php echo lastimosa_get_option_color_picker($menu['active_bg_color']); ?>;
}

.site-navigation a:hover {
	color: $menu_hover_color;
	background: header_menu_hover_bg_color;
}

.site-navigation .nav-menu {
	border-bottom: 1px solid rgba(255, 255, 255, 0.2);
	display: none;
}

.menu-item.menu-item-has-children .sub-menu {
	display: none;
}

.menu-item.menu-item-has-children:hover .sub-menu {
	display: block;
}

.site-navigation.toggled-on .nav-menu {
	display: block;
}

.site-navigation a {
	padding: 7px 0;
	line-height: inherit;
	display: block;
}

.site-navigation a:before {
	font-family: 'FontAwesome';
	font-style: normal;
	position: relative;
	font-size: 16px;
	line-height: 0;
	margin-right: 5px;
	top: 1px;
	font-weight: 100;
	display: inline-block;
	width: 1em;
	text-align: center;
}

.menu-toggle {
	display: block;
	margin: 0 auto;
}

/* Mega Menu */

@media screen and (min-width: 768px) {

	.site-navigation {
		font-size: 75%;
		/* margin: 0 1px 0 -12px; */
		padding: 0;
	}

	.toggled-on {
		border-bottom: 0;
		margin: 0;
		padding: 0;
	}

	.menu-toggle {
		display: none;
		padding: 0;
	}

	.site-navigation .nav-menu {
		border-bottom: 0;
		display: block;
	}

	.site-navigation a {
		padding: 10px 12px;
		white-space: nowrap;
	}

	.site-navigation a:before {
		position: relative;
		font-size: 16px;
		line-height: 0;
		margin-right: 9px;
		top: 2px;
		font-weight: 100;
	}

	.site-navigation ul ul a:hover,
	.site-navigation ul ul li.focus > a {
		color: $submenu_hover_color;
		background-color: $submenu_hover_bg_color;
	}

	.site-navigation .menu-item-has-children > a,
	.site-navigation .page_item_has_children > a {
		padding-right: 26px;
	}

	.site-navigation .menu-item-has-children > a:after,
	.site-navigation .page_item_has_children > a:after {
		-webkit-font-smoothing: antialiased;
		content: "\f502";
		display: inline-block;
		font: normal 8px/1 Genericons;
		position: absolute;
		right: 12px;
		top: 20px;
		vertical-align: text-bottom;
	}

	.site-navigation .menu-item-has-children li.menu-item-has-children > a:after,
	.site-navigation .menu-item-has-children li.page_item_has_children > a:after,
	.site-navigation .page_item_has_children li.menu-item-has-children > a:after,
	.site-navigation .page_item_has_children li.page_item_has_children > a:after {
		content: "\f501";
		right: 8px;
		top: 20px;
	}

	.site-navigation li .menu-item-has-children > a,
	.site-navigation li .page_item_has_children > a {
		padding-right: 20px;
		width: 168px;
	}

	.site-navigation li:hover > a,
	.site-navigation li.focus > a {
		background-color: $menu_hover_bg_color;
		color: $menu_hover_color;
	}

	.site-navigation li {
		border: 0;
		display: inline-block;
		position: relative;
		<?php if( $menu['divider'] ) { ?>
		border-right: rem(1px) solid $menu_divider;
		<?php } ?>
	}

	.site-navigation li:last-child {
		border-right: none;
	}

	.site-navigation li li {
		border: 0;
		display: block;
		height: auto;
		line-height: 1.0909090909;
		text-align:left;
	}

	.site-navigation ul li:hover > ul,
	.site-navigation ul li.focus > ul {
		left: auto;
	}

	.site-navigation ul ul li:hover > ul,
	.site-navigation ul ul li.focus > ul {
		left: 100%;
	}

	.site-navigation ul ul {
		float: left;
		margin: 0;
		position: absolute;
		top: 42px;
		left: -999em;
		z-index: 99999;
	}

	.site-navigation ul ul ul {
		left: -999em;
		top: 0;
	}

	.site-navigation ul ul a {
		width: rem(176px);
	}

	.site-navigation .mega-menu .menu-item {
		float: none;
	}

	.site-navigation ul .mega-menu ul {
		position: static;
		float: none;
	}

	.site-navigation .menu-item-has-mega-menu {
		position: relative;
	}

	<?php $theme_layout = lastimosa_get_option('theme_layout');	?>
	$content-width: <?php echo $theme_layout['content-width']; ?>;

	.site-navigation .mega-menu {
		display: none;
		position: absolute;
		left: -500px;
		top: 100%;
		background: $megamenu_bg_color; /* overrides from settings / styling / mega-menu */
		border-top: 2px solid #55d737;
		z-index: 10;
		max-width:$content-width;
	}

	.site-navigation .mega-menu ul {
		background: none;
	}

	.site-navigation .mega-menu a {
		padding: 0;
		display: inline;
		position: relative;
		line-height: 22px;
		text-transform: none;
	}

	#masthead .site-navigation .mega-menu .current-menu-item a {
		font-weight: normal;
		color: #3de132;
	}

	.site-navigation .mega-menu a:hover,
	.site-navigation .mega-menu a:focus {
		text-decoration: underline;
	}

	.site-navigation .mega-menu p {
		margin: 0 0 1em 0;
	}

	.site-navigation .mega-menu a:before {
		top: -2px;
		line-height: 22px;
		text-decoration: none;
	}

	.site-navigation .mega-menu a:after {
		display: none !important;
	}

	.site-navigation .mega-menu li,
	.site-navigation .mega-menu li:hover {
		background: none;
	}

	.site-navigation .menu-item-has-mega-menu:hover .mega-menu {
		display: block;
	}

	.site-navigation .mega-menu .menu-item .sub-menu a {
		<?php echo lastimosa_get_option_typography_css($megamenu['typography']); ?>
		<?php if(!empty(lastimosa_get_option_color_picker($megamenu['text_transform']))) { ?>
		text-transform: $megamenu_text_transform;
		<?php }else{ ?>
		text-transform: none;
		<?php } ?>
	}
	.site-navigation .mega-menu .menu-item div {
		font-size: 12px;
		color: #ccc;
	}

	/* row */
	.site-navigation .mega-menu-row {
		width: 100%;
		display: table;
		table-layout: fixed;
		padding: 20px 0;
	}

	.site-navigation .mega-menu-row {
		border-top: 1px solid #484848; /* overrides from settings / styling / mega-menu */
	}

	.site-navigation .mega-menu-row:first-child {
		border-top: none;
	}

	/* column */
	.site-navigation .mega-menu-col {
		display: table-cell;
		width: 1px;
		padding: 0 30px;
		border-left: 1px solid $megamenu_col_divider_color; /* overrides from settings / styling / mega-menu */
	}

	.site-navigation .mega-menu-col:first-child {
		border-left: none;
	}

	.site-navigation .mega-menu-col > a {
		<?php echo lastimosa_get_option_typography_css($megamenu['heading_typography']); ?>
		display: inline-block;
		width: auto !important;
		padding: 0 !important;
		margin-top: 5px;
		margin-bottom: 14px;
		text-transform: none;
	}

	.site-navigation .mega-menu-col > a:before {
		top: 2px;
	}

	/* column sub-menus */
	.site-navigation .mega-menu-col .sub-menu .sub-menu {
		padding-left: 27px;
	}

	.site-navigation .mega-menu-row .sub-menu-has-icons {
		padding-left: 27px;
	}

	.site-navigation .mega-menu-row .menu-item-has-icon > p {
		margin-left: -27px;
	}

	.site-navigation .mega-menu-row .sub-menu-has-icons a:before,
	.site-navigation .mega-menu-row > .menu-item-has-icon > a:before {
		position: absolute;
		left: -27px;
		width: 18px;
		text-align: center;
		margin: 0;
	}

	.site-navigation .mega-menu-row > .menu-item-has-icon > a {
		left: 27px;
	}

	.site-navigation .mega-menu li:hover a {
		background: none;
	}

	.site-navigation .mega-menu-col p + .sub-menu {
		margin-top: 12px;
	}

}

@media (min-width: 768px) {
	.site-header.style-1 .site-navigation {
		float: right;
	}
	.site-header.style-3 .site-navigation {
		text-align:center;
	}
	.site-navigation {
		position: relative;
	}
}

@media screen and (min-width: 992px) {
	.site-navigation {
		font-size: 100%;
	}
}
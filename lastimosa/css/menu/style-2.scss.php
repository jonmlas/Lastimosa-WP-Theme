<?php 
/**
 * Navigation
 * -----------------------------------------------------------------------------
 */
$header_menu 	= lastimosa_get_option('header_menu');

?>
$header_menu_font_size: 	<?php echo $header_menu[$header_menu['selected']]['typography']['size']; ?>;
$header_menu_font_family: 	<?php echo $header_menu[$header_menu['selected']]['typography']['family']; ?>;
$header_menu_font_style: 	<?php echo $header_menu[$header_menu['selected']]['typography']['style']; ?>;
$header_menu_color: 		<?php echo $header_menu[$header_menu['selected']]['typography']['color']; ?>;

$header_menu_background_color: <?php echo $header_menu[$header_menu['selected']]['background_color']; ?>;

$header_menu_active_color:	<?php echo $header_menu[$header_menu['selected']]['active_color']; ?>;
$header_menu_active_background_color: <?php echo $header_menu[$header_menu['selected']]['active_background_color']; ?>;

$header_menu_hover_color: 	<?php echo $header_menu[$header_menu['selected']]['hover_color']; ?>;
$header_menu_hover_background_color: <?php echo $header_menu[$header_menu['selected']]['hover_background_color']; ?>;

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
}

.site-navigation a {
	color: $header_menu_color;
    font-family: $header_menu_font_family;
    font-size: $header_menu_font_size + px;
    font-style: $header_menu_font_style;
	display: block;
}

.site-navigation a:hover {
	color: #41a62a;
}

.site-navigation .current_page_item > a,
.site-navigation .current_page_ancestor > a,
.site-navigation .current-menu-item > a,
.site-navigation .current-menu-parent > a,
.site-navigation .current-menu-ancestor > a {
	color: $header_menu_active_color;
    background-color: $header_menu_active_background_color;
}


/* Primary Navigation */

.primary-navigation {
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	font-size: 14px;
}

.primary-navigation.toggled-on {
	padding: 72px 0 36px;
}

.primary-navigation .nav-menu {
	border-bottom: 1px solid rgba(255, 255, 255, 0.2);
	display: none;
}

.primary-navigation.toggled-on .nav-menu {
	display: block;
}

.primary-navigation a {
	padding: 7px 0;
	line-height: inherit;
	display: block;
}

.primary-navigation a:before {
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

/* Mega Menu */

@media screen and (max-width: 400px) {

	.primary-navigation .mega-nav {
		display: none;
	}

}

@media screen and (min-width: 401px) {

	.primary-navigation .mega-nav {
		display: none;
	}

}

@media screen and (min-width: 673px) {

	.primary-navigation .mega-nav li {
		border-top: none;
		border-bottom: none;
	}

	.primary-navigation .mega-nav {
		padding: 10px;
	}

	.primary-navigation .mega-nav > li {
		padding: 8px 21px;
	}

	.primary-navigation .mega-nav {
		display: block;
	}

}

@media screen and (max-width: 782px) {
	.primary-navigation p {
		color: #fff;
		margin: 7px 0;
	}

	.primary-navigation a {
		padding: 0;
		margin: 7px 0;
	}

	.primary-navigation a:before {
		display: inline-block;
		width: 1em;
		text-align: center;
	}
}

@media screen and (min-width: 783px) {

	.primary-navigation {
		float: right;
		font-size: 16px;
		margin: 0 1px 0 -12px;
		padding: 0;
	}

	.primary-navigation.toggled-on {
		border-bottom: 0;
		margin: 0;
		padding: 0;
	}

	.primary-navigation .menu-toggle {
		display: none;
		padding: 0;
	}

	.primary-navigation .nav-menu {
		border-bottom: 0;
		display: block;
	}

	.primary-navigation a {
		padding: 10px 12px;
		white-space: nowrap;
	}

	.primary-navigation a:before {
		position: relative;
		font-size: 16px;
		line-height: 0;
		margin-right: 9px;
		top: 2px;
		font-weight: 100;
	}

	.primary-navigation ul ul a {
		padding: 18px 10px 18px 17px;
		white-space: normal;
		width: 176px;
	}

	.primary-navigation ul ul a:hover,
	.primary-navigation ul ul li.focus > a {
		background-color: #41a62a;
	}

	.primary-navigation ul ul a:hover,
	.primary-navigation ul ul li.focus > a {
		background-color: #41a62a;
	}

	.primary-navigation .menu-item-has-children > a,
	.primary-navigation .page_item_has_children > a {
		padding-right: 26px;
	}

	.primary-navigation .menu-item-has-children > a:after,
	.primary-navigation .page_item_has_children > a:after {
		-webkit-font-smoothing: antialiased;
		content: "\f502";
		display: inline-block;
		font: normal 8px/1 Genericons;
		position: absolute;
		right: 12px;
		top: 16px;
		vertical-align: text-bottom;
	}

	.primary-navigation .menu-item-has-children li.menu-item-has-children > a:after,
	.primary-navigation .menu-item-has-children li.page_item_has_children > a:after,
	.primary-navigation .page_item_has_children li.menu-item-has-children > a:after,
	.primary-navigation .page_item_has_children li.page_item_has_children > a:after {
		content: "\f501";
		right: 8px;
		top: 20px;
	}

	.primary-navigation li .menu-item-has-children > a,
	.primary-navigation li .page_item_has_children > a {
		padding-right: 20px;
		width: 168px;
	}

	.primary-navigation li:hover > a,
	.primary-navigation li.focus > a {
		background-color: $header_menu_hover_background_color;
		color: $header_menu_hover_color;
	}

	.primary-navigation li {
		border: 0;
		display: inline-block;
		position: relative;
	}

	.primary-navigation li li {
		border: 0;
		display: block;
		height: auto;
		line-height: 1.0909090909;
	}

	.primary-navigation ul li:hover > ul,
	.primary-navigation ul li.focus > ul {
		left: auto;
	}

	.primary-navigation ul ul li:hover > ul,
	.primary-navigation ul ul li.focus > ul {
		left: 100%;
	}

	.primary-navigation ul ul {
		background-color: #24890d;
		float: left;
		margin: 0;
		position: absolute;
		top: 48px;
		left: -999em;
		z-index: 99999;
	}

	.primary-navigation ul ul ul {
		left: -999em;
		top: 0;
	}

	.primary-navigation .mega-menu .menu-item {
		float: none;
	}

	.primary-navigation ul .mega-menu ul {
		position: static;
		float: none;
	}

	.primary-navigation .menu-item-has-mega-menu {
		position: relative;
	}

	.primary-navigation .mega-menu {
		display: none;
		position: absolute;
		left: -500px;
		top: 100%;
		background: #000; /* overrides from settings / styling / mega-menu */
		border-top: 2px solid #55d737;
		z-index: 10;
	}

	.primary-navigation .mega-menu ul {
		background: none;
	}

	.primary-navigation .mega-menu a {
		padding: 0;
		display: inline;
		position: relative;
		line-height: 22px;
		text-transform: none;
	}

	#masthead .primary-navigation .mega-menu .current-menu-item a {
		font-weight: normal;
		color: #3de132;
	}

	.primary-navigation .mega-menu a:hover,
	.primary-navigation .mega-menu a:focus {
		text-decoration: underline;
	}

	.primary-navigation .mega-menu p {
		margin: 0 0 1em 0;
	}

	.primary-navigation .mega-menu a:before {
		top: -2px;
		line-height: 22px;
		text-decoration: none;
	}

	.primary-navigation .mega-menu a:after {
		display: none !important;
	}

	.primary-navigation .mega-menu li,
	.primary-navigation .mega-menu li:hover {
		background: none;
	}

	.primary-navigation .menu-item-has-mega-menu:hover .mega-menu {
		display: block;
	}

	.primary-navigation .mega-menu .menu-item a {
		color: white;
		text-transform: none;
		font-size: 13px;
		line-height: 20px;
	}

	/* row */
	.primary-navigation .mega-menu-row {
		width: 100%;
		display: table;
		table-layout: fixed;
		padding: 20px 0;
	}

	.primary-navigation .mega-menu-row {
		border-top: 1px solid #484848; /* overrides from settings / styling / mega-menu */
	}

	.primary-navigation .mega-menu-row:first-child {
		border-top: none;
	}

	/* column */
	.primary-navigation .mega-menu-col {
		display: table-cell;
		width: 1px;
		padding: 0 30px;
		border-left: 1px solid #484848; /* overrides from settings / styling / mega-menu */
	}

	.primary-navigation .mega-menu-col:first-child {
		border-left: none;
	}

	.primary-navigation .mega-menu-col > a {
		display: inline-block;
		width: auto !important;
		padding: 0 !important;
		font-size: 19px;
		margin-top: 5px;
		margin-bottom: 14px;
		text-transform: none;
	}

	.primary-navigation .mega-menu-col > a:before {
		top: 2px;
	}

	/* column sub-menus */
	.primary-navigation .mega-menu-col .sub-menu .sub-menu {
		padding-left: 27px;
	}

	.primary-navigation .mega-menu-row .sub-menu-has-icons {
		padding-left: 27px;
	}

	.primary-navigation .mega-menu-row .menu-item-has-icon > p {
		margin-left: -27px;
	}

	.primary-navigation .mega-menu-row .sub-menu-has-icons a:before,
	.primary-navigation .mega-menu-row > .menu-item-has-icon > a:before {
		position: absolute;
		left: -27px;
		width: 18px;
		text-align: center;
		margin: 0;
	}

	.primary-navigation .mega-menu-row > .menu-item-has-icon > a {
		left: 27px;
	}

	.primary-navigation .mega-menu li:hover a {
		background: none;
	}

	.primary-navigation .mega-menu-col p + .sub-menu {
		margin-top: 12px;
	}

}
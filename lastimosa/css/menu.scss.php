<?php if ( ! defined( 'ABSPATH' ) ) die( 'Direct access forbidden.' );

// Main Menu
$header_menu = c_get_option('header_menu'); ?>
<?php if(!empty($header_menu['background_color'])) { ?>    
$header_menu_background_color: <?php echo $header_menu['background_color']; ?>;
<?php } ?>
$header_menu_typography_size: 	<?php echo $header_menu['typography']['size']; ?>;
$header_menu_typography_family: <?php echo $header_menu['typography']['family']; ?>;
$header_menu_typography_style: 	<?php echo $header_menu['typography']['style']; ?>;
$header_menu_typography_color: 	<?php echo $header_menu['typography']['color']; ?>;

<?php
$selected_style = $header_menu['style']['selected'];
?>
$header_menu_hover_color: <?php echo $header_menu['style'][$selected_style]['hover_color']; ?>;
<?php if(isset($header_menu['style'][$selected_style]['hover_background_color']) && !empty($header_menu['style'][$selected_style]['hover_background_color'])) { ?> 
	$header_menu_hover_background_color: <?php echo $header_menu['style'][$selected_style]['hover_background_color']; ?>;
<?php }else{ ?>
	$header_menu_hover_background_color:transparent;
<?php } ?>

$header_menu_active_color: <?php echo $header_menu['style'][$selected_style]['active_color']; ?>;
<?php if(isset($header_menu['style'][$selected_style]['active_background_color']) && !empty($header_menu['style'][$selected_style]['active_background_color'])) { ?> 
	$header_menu_active_background_color: <?php echo $header_menu['style'][$selected_style]['active_background_color']; ?>;
<?php }else{ ?>
	$header_menu_active_background_color:transparent;
<?php } ?>

#primary-navigation {
	<?php if(!empty($header_menu['background_color'])) { ?> 
	background:$header_menu_background_color;
    <?php } ?>
    margin-bottom:0;
    #navbar {
    	border-radius:0;
        border:none;
        margin-bottom:0;
        .navbar-nav {
            margin:0;
        }
    	li {
        	<?php if ($selected_style == 'style_2' || $selected_style == 'style_3') { ?>
			padding-left:15px;
            padding-right:15px;
            <?php } ?>
        	a {
                font-size:$header_menu_typography_size + 0px;
                color:$header_menu_typography_color;
                font-weight:$header_menu_typography_style;
                font-family:$header_menu_typography_family;
                <?php if ($selected_style == 'style_2' || $selected_style == 'style_3') { ?>
                padding-left:0;
                padding-right:0;
                <?php } ?>
            
                /* Menu Item Hover */
                &:hover {
                    color:$header_menu_hover_color;
                   	background-color:$header_menu_hover_background_color;
                    <?php if ($selected_style == 'style_2') { ?>
                    border-bottom: 2px solid $header_menu_hover_color;
                    padding: 15px 0 8px;
                    margin-bottom: 8px;
					<?php } ?>
                    <?php if ($selected_style == 'style_3') { ?>
                    border-top: 2px solid $header_menu_hover_color;
                    padding: 5px 0 15px;
					margin-top: 8px;
					<?php } ?>
     
                }
            }
            
            /* Current Menu Item */
            &.current-menu-item a {
                color:$header_menu_active_color;
                background-color:$header_menu_active_background_color;
                <?php if ($selected_style == 'style_2') { ?>
                border-bottom: 2px solid $header_menu_hover_color;
               	padding: 15px 0 8px;
                margin-bottom: 8px;
                <?php } ?>
                <?php if ($selected_style == 'style_3') { ?>
                border-top: 2px solid $header_menu_hover_color;
                padding: 5px 0 15px;
				margin-top: 8px;
                <?php } ?>
            }
            
            /* Sub-menu */
            .sub-menu {
                display:none;
                position:absolute;
                z-index:999;
                <?php if(!empty($header_menu['background_color'])) { ?> 
                background:$header_menu_background_color;
                <?php } ?>
                padding: 0;
                min-width: 250px;
                li {
                    list-style: none;
                    a {
                        padding: 10px 20px;
                        display: block;
                        <?php if(!empty($header_menu['background_color'])) { ?> 
                        &:hover {
                            background:darken($header_menu_background_color,5%);
                        }
                        <?php } ?>
                    }
                }
            }
            /* Sub-menu */
           .dropdown-menu {
                <?php if(!empty($header_menu['background_color'])) { ?> 
                background:$header_menu_background_color;
                <?php } ?>
                li {
                    a {
                        <?php if(!empty($header_menu['background_color'])) { ?> 
                        &:hover {
                            background:darken($header_menu_background_color,5%);
                        }
                        <?php } ?>
                    }
                }
            }
            &:hover .sub-menu {
                display:block;
            }
        }
    }
}

@media only screen and (max-width : 768px) {
    #primary-navigation #navbar {
        clear: both;
    }
}

<?php if(!empty($header_menu['background_color'])) { ?> 
.navbar .navbar-nav .open .dropdown-menu > .active > a, .navbar .navbar-nav .open .dropdown-menu > .active > a:focus, .navbar .navbar-nav .open .dropdown-menu > .active > a:hover, .dropdown-menu > .active > a, .dropdown-menu > .active > a:focus, .dropdown-menu > .active > a:hover {
	 background:darken($header_menu_background_color,5%);
}
<?php } ?>

/* Menu Button */
.navbar-header.alignleft {
    margin-top: 0;
}
.alignleft .navbar-toggle {
    margin-left: 15px;
}
.navbar-toggle {
    background: #1bb1e7;
}
.navbar-toggle .icon-bar {
    background: #fff;
}
.navbar-right .dropdown-menu {
    right: auto;
    left: 0;
}

/* Bootstrap Navigation Submenu Hover */
@media (min-width: 768px) {
  ul.nav li:hover > ul.dropdown-menu {
    display: block;
  }
}
@media only screen and (max-width : 1200px) and (min-width : 768px) {
    #menu-main-menu.navbar-right {
        float: none !important;
        clear: both;
        text-align: center;
    }
    #menu-main-menu.navbar-nav > li {
        float: none;
        display: inline-block;
    }
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
		font-size: 11px;
		margin: 15px 1px 0 -12px;
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
		padding: 0 12px;
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
		top: 22px;
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
		background-color: #24890d;
		color: #fff;
	}

	.primary-navigation li:hover > a,
	.primary-navigation li.focus > a {
		background-color: #24890d;
		color: #fff;
	}

	.primary-navigation li {
		border: 0;
		display: inline-block;
		height: 48px;
		line-height: 48px;
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

	.primary-navigation .mega-menu .menu-item {
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
		padding: 30px 0;
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

/* Secondary Navigation */

.secondary-navigation {
	border-bottom: 1px solid rgba(255, 255, 255, 0.2);
	font-size: 12px;
	margin: 48px 0;
}

.secondary-navigation a {
	padding: 9px 0;
}

.secondary-navigation a.fa:before {
	margin-right: 10px;
}

.menu-toggle {
	background-color: #000;
	border-radius: 0;
	cursor: pointer;
	font-size: 0;
	height: 48px;
	margin: 0;
	overflow: hidden;
	padding: 0;
	position: absolute;
	top: 0;
	right: 0;
	text-align: center;
	width: 48px;
}

.menu-toggle:before {
	color: #fff;
	content: "\f419";
	display: inline;
	margin-top: 16px;
}

.menu-toggle:active,
.menu-toggle:focus,
.menu-toggle:hover {
	background-color: #444;
}

.menu-toggle:focus {
	outline: 1px dotted;
}
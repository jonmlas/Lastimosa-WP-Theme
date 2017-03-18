<?php $header_layout = c_get_option('header_layout');?>
$header_layout_bg_color: <?php echo $header_layout['bg_color']; ?>;
$header_layout_min_height: <?php echo $header_layout['min_height']; ?>;

.affix {
      top: 0;
      width: 100%;
}

.admin-bar .affix {
	top:32px;
}

.affix + .container-fluid {
  padding-top: 120px;
}

header#masthead {
	min-height:$header_layout_min_height;
	&.transparent {
        position: absolute;
        width: 100%;
	}
}

/* Header Layout 2 */
.site-header.layout-2 {
	.header-main {
    	.container {
    		padding-top: 25px;
            padding-bottom: 25px;
        }
    }
	nav {
    	border-radius: 0;
        .navbar-collapse {
        	padding:0;
        }
    }
}


.header-main.affix-top {
	padding:10px 0;
} 
 
.header-main.affix {
	background:$header_layout_bg_color;
}

.header-main.transparent {
    left: 0;
    margin: 0 auto;
    position: absolute;
    right: 0;
}

.site-title {
	margin: 0;
}
.site-title a, .site-description {
    color: #fff;
}
.site-title .navbar-brand{
    font-size: 32px;
    font-size: 2rem;
    line-height: 1.25;
}

<?php $header_logo = c_get_option('header_logo'); ?>
<?php if( !empty( $header_logo['image'] ) ) : ?>
.navbar-brand {
	width: 100%;
    max-width: unquote("<?php echo $header_logo['width']; ?>");
    height: auto;
    padding: 0;
}
<?php endif; ?>

@media only screen and (max-width : 1200px) and (min-width : 768px) {
    
    .navbar-header {
        float: none;
        text-align: center;
    }
    .navbar > .container .navbar-brand {
        margin: 0 auto;
        float: none;
    }
	.navbar-brand > img {
        float: none;
        margin: 0 auto;
    }
}

/* Search in the header */

.search-toggle {
	background-color: #00baff;
	cursor: pointer;
	float: right;
	height: 48px;
	margin-right: 38px;
	text-align: center;
	width: 48px;
}

.search-toggle:hover,
.search-toggle.active {
	background-color: #0099cc;
}

.search-toggle:before {
	color: #fff;
	content: "\f400";
	font-size: 20px;
	margin-top: 14px;
}

.search-toggle .screen-reader-text {
	left: 5px; /* Avoid a horizontal scrollbar when the site has a long menu */
}

.search-box-wrapper {
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	position: absolute;
	top: 48px;
	right: 0;
	width: 100%;
	z-index: 2;
}

.search-box {
	background-color: #0099cc;
	padding: 12px;
}

.search-box .search-field {
	background-color: #fff;
	border: 0;
	float: right;
	font-size: 16px;
	padding: 2px 2px 3px 6px;
	width: 100%;
}
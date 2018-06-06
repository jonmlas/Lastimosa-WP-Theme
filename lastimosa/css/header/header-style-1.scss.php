/* Start of Header 1 CSS */
<?php 
$header_layout  = lastimosa_get_option('header_layout');
$header_logo		= lastimosa_get_option('header_logo');
?>
$header_layout_bg_color: <?php echo $header_layout['background_color']; ?>;
$header_logo_color: <?php echo !empty($header_logo['color']) ? $header_logo['color'] : ''; ?>;
.site-header {
	background: $header_layout_bg_color;
	transition: all 0.5s ease;
}
.header-main {
  padding-top: rem(8px);
	padding-bottom: rem(8px);
}
header.transparent {
	margin-top: rem(60px);
	position: absolute;
	width: 100%;
}
.site-header .row {
    display: block;
}
.site-title {
  margin: 0;
	text-align:center;
  font-size: rem(28px);
  line-height:1;
  <?php echo !empty($header_logo['color']) ? '
	a {
  	color:$header_logo_color;
  }' : ''; ?>
}
.site-header img.site-logo {
	transition: all 0.5s ease;
}
.site-description {
	margin:0;
    <?php echo !empty($header_logo['color']) ? '
    color:$header_logo_color;' : ''; ?>
	text-align: center;
}

/* Header 1 Responsiveness */
@media (min-width: 768px) {
	header.transparent {
		margin-top: 0;
	}
	.site-title, .site-description {
		text-align:left;
	}
	.site-header .row {
    display: flex;
	}

	/* Sticky Header 1 */
	.sticky-header .site-header {
			height: 3.5rem;
			background-color: rgba(255, 255, 255, 0.3);
			position: fixed;
			width: 100%;
			z-index: 9999;
	}
	.sticky-header .header-main.container .row > div .site-title, .sticky-header .header-main.container .row > div {
			max-height: 3.5rem;
	}
	.sticky-header .site-header .header-main {
		padding-top: 0;
		padding-bottom: 0;
	}
	.sticky-header .site-header img.site-logo {
		transform: translateY(-20px) scale(.6);
	}
}
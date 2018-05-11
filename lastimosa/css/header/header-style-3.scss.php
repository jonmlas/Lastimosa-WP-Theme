<?php 
$header_layout  = lastimosa_get_option('header_layout');
$header_logo		= lastimosa_get_option('header_logo');
?>
$header_layout_bg_color: <?php echo $header_layout['background_color']; ?>;
$header_logo_color: <?php echo !empty($header_logo['color']) ? $header_logo['color'] : ''; ?>;
.site-header {
	background: $header_layout_bg_color;
}
.header-main {
  padding-top: rem(15px);
	padding-bottom: rem(15px);
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

.site-description {
	margin:0;
    <?php echo !empty($header_logo['color']) ? '
    color:$header_logo_color;' : ''; ?>
	text-align: center;
}

.site-header.style-3 .col {
    width: 100%;
    flex: auto;
}

@media (min-width: 768px) {
	.site-header.style-3 .col {
			width: auto;
			flex: auto;
	}
	.site-header .row {
    display: flex;
	}
}
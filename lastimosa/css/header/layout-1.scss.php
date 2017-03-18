<?php 

$header_layout  = lastimosa_get_option('header_layout');
?>
$header_layout_bg_color: <?php echo $header_layout[$header_layout['selected']]['background_color']; ?>;

header {
	background:$header_layout_bg_color;
}
.header-main {
    padding: 15px 0;
}

.site-title {
    margin: 0 0 0 15px;
    font-size: 28px;
    line-height:1;
}

.site-description {
	margin:0 0 0 18px
}
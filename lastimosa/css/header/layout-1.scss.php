<?php 

$header_layout  = lastimosa_get_option('header_layout');
$header_logo	= lastimosa_get_option('header_logo');
?>
$header_layout_bg_color: <?php echo $header_layout[$header_layout['selected']]['background_color']; ?>;
$header_logo_color: <?php echo !empty($header_logo['color']) ? $header_logo['color'] : ''; ?>;
header {
	background:$header_layout_bg_color;
}
.header-main {
    padding: 15px 0;
}

.site-title {
    margin: 0;
    font-size: 28px;
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
}

@media only screen and (max-width : 768px) {
    .site-title {
        margin: 0 0 0 15px;   
    }
    
    .site-description {
        margin:0 0 0 18px;
    }
}
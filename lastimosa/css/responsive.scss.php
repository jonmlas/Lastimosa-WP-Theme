<?php $theme_layout = lastimosa_get_option( 'theme_layout' ); 
if( isset($theme_layout['content_width']) ) {
	$main_content_area_max_width = $theme_layout['content_width'] . '%';
	$sidebar_max_width = (100 - $theme_layout['content_width']) . '%';
}else{
	$main_content_area_max_width = '70%';
	$sidebar_max_width = '30%';
}	?>
$main_content_area_max_width: <?php echo $main_content_area_max_width; ?>;
$sidebar_max_width: <?php echo $sidebar_max_width; ?>;


// Small devices (landscape phones, 576px and up)
@media (min-width: 576px) {

}

// Medium devices (tablets, 768px and up)
@media (min-width: 768px) {
	#main.content-area {
			max-width: $main_content_area_max_width;
	}
	#sidebar {
			max-width: $sidebar_max_width;
	}
	.post.hentry {
		margin-bottom: 4rem;
	}
}

// Large devices (desktops, 992px and up)
@media (min-width: 992px) {

}

// Extra large devices (large desktops, 1200px and up)
@media (min-width: 1200px) {

}

<?php
/**
	Template Name: White Page (Content Only)

*/
?>
<html>
<head>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<title><?php wp_title( '|', true, 'right' ); bloginfo('name'); ?></title>
<?php wp_head(); ?>
</head>

<body>
<?php while (have_posts()) : the_post(); ?>
<div id="page-content">
	<?php the_content(); endwhile; ?>
</div>
</body>
</html>
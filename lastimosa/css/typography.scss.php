<?php // Typography
$typography = lastimosa_get_option('typography');
if( empty($typography)) return; ?> 
	
<?php // Body Text ?>
body {
	<?php echo lastimosa_get_option_typography_css($typography['body']); ?>  
}

<?php if( !empty($typography['body']['size']) ) { ?>
.p {
	font-size: rem(<?php echo $typography['body']['size'] . 'px'; ?>);
}
<?php } ?>

$body_link_color: 	<?php echo $typography['body_link']; ?>;
$body_link_hover_color:<?php echo $typography['body_link_hover']; ?>;

p:last-child {
	margin-bottom: 0;
}

/*
 * Links
 * -----------------------------------------------------------------------------
 */

a {
	-webkit-transition: color .1s ease-in, background .1s ease-in;
	-moz-transition: color .1s ease-in, background .1s ease-in;
	-ms-transition: color .1s ease-in, background .1s ease-in;
	-o-transition: color .1s ease-in, background .1s ease-in;
	transition: color .1s ease-in, background .1s ease-in;
	color:$body_link_color;
}

a:hover,
a:focus {
	color:$body_link_hover_color;
	text-decoration: none;
	outline: 0;
}
a:before,
a:after,
a:hover i:before,
a:focus i:before {
	-webkit-transition: color .1s ease-in, background .1s ease-in;
	-moz-transition: color .1s ease-in, background .1s ease-in;
	-ms-transition: color .1s ease-in, background .1s ease-in;
	-o-transition: color .1s ease-in, background .1s ease-in;
	transition: color .1s ease-in, background .1s ease-in;
}

/*
 * Headings
 * -----------------------------------------------------------------------------
 */
<?php // H1 Heading ?>

h1 {
	<?php echo lastimosa_get_option_typography_css($typography['h1']); ?>
}

<?php if( !empty($typography['h1']['size']) ) { ?>
.h1 {
	font-size: rem(<?php echo $typography['h1']['size'] . 'px'; ?>);
}
<?php } ?>

$h1_link_color: 	<?php echo $typography['h1_link']; ?>;
$h1_link_hover_color:<?php echo $typography['h1_link_hover']; ?>;

h1 a {
	color:$h1_link_color;
}

h1 a:hover {
	color:$h1_link_hover_color;
}

<?php // H2 Heading ?>
h2 {
	<?php echo lastimosa_get_option_typography_css($typography['h2']); ?>  
}

<?php if( !empty($typography['h2']['size']) ) { ?>
.h2 {
	font-size: rem(<?php echo $typography['h2']['size'] . 'px'; ?>);
}
<?php } ?>

$h2_link_color: 	<?php echo $typography['h2_link']; ?>;
$h2_link_hover_color:<?php echo $typography['h2_link_hover']; ?>;

h2 a {
	color:$h2_link_color;
}

h2 a:hover {
	color:$h2_link_hover_color;
}

<?php // H3 Heading ?>

h3 {
	<?php echo lastimosa_get_option_typography_css($typography['h3']); ?>  
}

<?php if( !empty($typography['h3']['size']) ) { ?>
.h3 {
	font-size: rem(<?php echo $typography['h3']['size'] . 'px'; ?>);
}
<?php } ?>

$h3_link_color: 	<?php echo $typography['h3_link']; ?>;
$h3_link_hover_color:<?php echo $typography['h3_link_hover']; ?>;

h3 a {
	color:$h3_link_color;
}

h3 a:hover {
	color:$h3_link_hover_color;
}

<?php // H4 Heading ?>

h4 {
	<?php echo lastimosa_get_option_typography_css($typography['h4']); ?>  
}

<?php if( !empty($typography['h4']['size']) ) { ?>
.h4 {
	font-size: rem(<?php echo $typography['h4']['size'] . 'px'; ?>);
}
<?php } ?>

$h4_link_color: 	<?php echo $typography['h4_link']; ?>;
$h4_link_hover_color:<?php echo $typography['h4_link_hover']; ?>;

h4 a {
	color:$h4_link_color;
}

h4 a:hover {
	color:$h4_link_hover_color;
}

<?php // H5 Heading ?>

h5 {
	<?php echo lastimosa_get_option_typography_css($typography['h5']); ?>    
}

<?php if( !empty($typography['h5']['size']) ) { ?>
.h5 {
	font-size: rem(<?php echo $typography['h5']['size'] . 'px'; ?>);
}
<?php } ?>

$h5_link_color: 	<?php echo $typography['h5_link']; ?>;
$h5_link_hover_color:<?php echo $typography['h5_link_hover']; ?>;

h5 a {
	color:$h5_link_color;
}

h5 a:hover {
	color:$h5_link_hover_color;
}

<?php // H6 Heading ?>

h6 {
	<?php echo lastimosa_get_option_typography_css($typography['h6']); ?>  
}

<?php if( !empty($typography['h6']['size']) ) { ?>
.h6 {
	font-size: rem(<?php echo $typography['h6']['size'] . 'px'; ?>);
}
<?php } ?>

$h6_link_color: 	<?php echo $typography['h6_link']; ?>;
$h6_link_hover_color:<?php echo $typography['h6_link_hover']; ?>;

h6 a {
	color:$h6_link_color;
}

h6 a:hover {
	color:$h6_link_hover_color;
}

/*
 * Font Sizes
 * -----------------------------------------------------------------------------
 */
<?php 
if( !empty($typography['font_sizes']) ) {
	$font_size = $typography['font_sizes'];
	for ($i = 0; $i < count($font_size); $i++) {
		echo '.'.sanitize_title_with_dashes($font_size[$i]['name']) . ' {' .
						'font-size: rem('.$font_size[$i]['size'].'px);'.
					'}';
	}
}
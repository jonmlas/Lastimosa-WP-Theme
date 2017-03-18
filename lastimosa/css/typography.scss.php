<?php // Typography
$typography = c_get_option('typography'); ?> 
	
<?php // Body Text ?>
$body_typography_size: 	<?php echo $typography['body']['size']; ?>;
$body_typography_family:<?php echo $typography['body']['family']; ?>;
$body_typography_weight:<?php echo $typography['body']['weight']; ?>;
$body_typography_color: <?php echo $typography['body']['color']; ?>;
$body_typography_line_height: <?php echo $typography['body']['line-height']; ?>;

body {
	font-family:$body_typography_family;
    font-size:$body_typography_size + 0px;
    line-height:$body_typography_line_height + 0px;
    color:$body_typography_color;
	<?php echo font_style($typography['body']); ?>
    <?php echo font_weight($typography['body']); ?>
    <?php echo letter_spacing($typography['body']); ?>    
}

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



<?php // H1 Heading ?>
$h1_typography_size: 	<?php echo $typography['h1']['size']; ?>;
$h1_typography_family:	<?php echo $typography['h1']['family']; ?>;
$h1_typography_weight:	<?php echo $typography['h1']['weight']; ?>;
$h1_typography_color: 	<?php echo $typography['h1']['color']; ?>;
$h1_typography_line_height: <?php echo $typography['h1']['line-height']; ?>;

h1 {
	font-family:$h1_typography_family;
    font-size:$h1_typography_size + 0px;
    line-height:$h1_typography_line_height + 0px;
    color:$h1_typography_color;
	<?php echo font_style($typography['h1']); ?>
    <?php echo font_weight($typography['h1']); ?>
    <?php echo letter_spacing($typography['h1']); ?>   
}

$h1_link_color: 	<?php echo $typography['h1_link']; ?>;
$h1_link_hover_color:<?php echo $typography['h1_link_hover']; ?>;

h1 a {
	color:$h1_link_color;
}

h1 a:hover {
	color:$h1_link_hover_color;
}

<?php // H2 Heading ?>
$h2_typography_size: 	<?php echo $typography['h2']['size']; ?>;
$h2_typography_family:	<?php echo $typography['h2']['family']; ?>;
$h2_typography_weight:	<?php echo $typography['h2']['weight']; ?>;
$h2_typography_color: 	<?php echo $typography['h2']['color']; ?>;
$h2_typography_line_height: <?php echo $typography['h2']['line-height']; ?>;

h2 {
	font-family:$h2_typography_family;
    font-size:$h2_typography_size + 0px;
    line-height:$h2_typography_line_height + 0px;
    color:$h2_typography_color;
	<?php echo font_style($typography['h2']); ?>
    <?php echo font_weight($typography['h2']); ?>
    <?php echo letter_spacing($typography['h2']); ?>    
}

$h2_link_color: 	<?php echo $typography['h2_link']; ?>;
$h2_link_hover_color:<?php echo $typography['h2_link_hover']; ?>;

h2 a {
	color:$h2_link_color;
}

h2 a:hover {
	color:$h2_link_hover_color;
}

<?php // H3 Heading ?>
$h3_typography_size: 	<?php echo $typography['h3']['size']; ?>;
$h3_typography_family:	<?php echo $typography['h3']['family']; ?>;
$h3_typography_weight:	<?php echo $typography['h3']['weight']; ?>;
$h3_typography_color: 	<?php echo $typography['h3']['color']; ?>;
$h3_typography_line_height: <?php echo $typography['h3']['line-height']; ?>;

h3 {
	font-family:$h3_typography_family;
    font-size:$h3_typography_size + 0px;
    line-height:$h3_typography_line_height + 0px;
    color:$h3_typography_color;
	<?php echo font_style($typography['h3']); ?>
    <?php echo font_weight($typography['h3']); ?>
    <?php echo letter_spacing($typography['h3']); ?>    
}

$h3_link_color: 	<?php echo $typography['h3_link']; ?>;
$h3_link_hover_color:<?php echo $typography['h3_link_hover']; ?>;

h3 a {
	color:$h3_link_color;
}

h3 a:hover {
	color:$h3_link_hover_color;
}

<?php // H4 Heading ?>
$h4_typography_size: 	<?php echo $typography['h4']['size']; ?>;
$h4_typography_family:	<?php echo $typography['h4']['family']; ?>;
$h4_typography_weight:	<?php echo $typography['h4']['weight']; ?>;
$h4_typography_color: 	<?php echo $typography['h4']['color']; ?>;
$h4_typography_line_height: <?php echo $typography['h4']['line-height']; ?>;

h4 {
	font-family:$h4_typography_family;
    font-size:$h4_typography_size + 0px;
    line-height:$h4_typography_line_height + 0px;
    color:$h4_typography_color;
	<?php echo font_style($typography['h4']); ?>
    <?php echo font_weight($typography['h4']); ?>
    <?php echo letter_spacing($typography['h4']); ?>    
}

$h4_link_color: 	<?php echo $typography['h4_link']; ?>;
$h4_link_hover_color:<?php echo $typography['h4_link_hover']; ?>;

h4 a {
	color:$h4_link_color;
}

h4 a:hover {
	color:$h4_link_hover_color;
}

<?php // H5 Heading ?>
$h5_typography_size: 	<?php echo $typography['h5']['size']; ?>;
$h5_typography_family:	<?php echo $typography['h5']['family']; ?>;
$h5_typography_weight:	<?php echo $typography['h5']['weight']; ?>;
$h5_typography_color: 	<?php echo $typography['h5']['color']; ?>;
$h5_typography_line_height: <?php echo $typography['h5']['line-height']; ?>;

h5 {
	font-family:$h5_typography_family;
    font-size:$h5_typography_size + 0px;
    line-height:$h5_typography_line_height + 0px;
    color:$h5_typography_color;
	<?php echo font_style($typography['h5']); ?>
    <?php echo font_weight($typography['h5']); ?>
    <?php echo letter_spacing($typography['h5']); ?>     
}

$h5_link_color: 	<?php echo $typography['h5_link']; ?>;
$h5_link_hover_color:<?php echo $typography['h5_link_hover']; ?>;

h5 a {
	color:$h5_link_color;
}

h5 a:hover {
	color:$h5_link_hover_color;
}

<?php // H6 Heading ?>
$h6_typography_size: 	<?php echo $typography['h6']['size']; ?>;
$h6_typography_family:	<?php echo $typography['h6']['family']; ?>;
$h6_typography_weight:	<?php echo $typography['h6']['weight']; ?>;
$h6_typography_color: 	<?php echo $typography['h6']['color']; ?>;
$h6_typography_line_height: <?php echo $typography['h6']['line-height']; ?>;

h6 {
	font-family:$h6_typography_family;
    font-size:$h6_typography_size + 0px;
    line-height:$h6_typography_line_height + 0px;
    color:$h6_typography_color;
	<?php echo font_style($typography['h6']); ?>
    <?php echo font_weight($typography['h6']); ?>
    <?php echo letter_spacing($typography['h6']); ?>   
}

$h6_link_color: 	<?php echo $typography['h6_link']; ?>;
$h6_link_hover_color:<?php echo $typography['h6_link_hover']; ?>;

h6 a {
	color:$h6_link_color;
}

h6 a:hover {
	color:$h6_link_hover_color;
}
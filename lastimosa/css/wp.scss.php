/* start of enable sticky footer code */
/*html {
  height: 100%;
  box-sizing: border-box;
}

body {
  position: relative;
  margin: 0;
  padding-bottom: 6rem;
  min-height: 100%;
}*/
/* End of enable sticky footer code */

<?php 
	$theme_layout = c_get_option('theme_layout');		
	$body_bg_atts = $theme_layout['body'];
?>

$content-width: <?php echo $theme_layout['content-width']; ?>;
.container,
#main .fw-container,
article.post-password-required {
	width:100%;
    max-width:$content-width;
}

article.post-password-required {
	margin:0 auto;
}

<?php if (!empty($body_bg_atts['background']['image']['data']['css']['background-image'])) { ?>
	$body_bg_image: <?php echo $body_bg_atts['background']['image']['data']['css']['background-image']; ?>;
<?php } ?>
<?php if (!empty($body_bg_atts['background']['color'])) { ?>
	$body_bg_color: <?php echo $body_bg_atts['background']['color']; ?>;
<?php } ?>
$body_bg_position: <?php echo $body_bg_atts['background']['position']; ?>;
$body_bg_repeat: <?php echo $body_bg_atts['background']['repeat']; ?>;
$body_bg_size: <?php echo $body_bg_atts['background']['size']; ?>;
body {
	background:$body_bg_image <?php if (!empty($body_bg_atts['background']['color'])) { ?>$body_bg_color <?php } ?>$body_bg_position $body_bg_repeat;
	background-size:$body_bg_size;
}

<?php if($theme_layout['site-layout']['layout'] == 'container') { ?>
<?php $boxed_bg_atts = $theme_layout['site-layout']['boxed']; ?>
<?php if (!empty($boxed_bg_atts['background']['image']['data']['css']['background-image'])) { ?>
	$boxed_bg_image: <?php echo $boxed_bg_atts['background']['image']['data']['css']['background-image']; ?>;
<?php } ?>
<?php if (!empty($boxed_bg_atts['background']['color'])) { ?>
	$boxed_bg_color: <?php echo $boxed_bg_atts['background']['color']; ?>;
<?php } ?>
$boxed_bg_position: <?php echo $boxed_bg_atts['background']['position']; ?>;
$boxed_bg_repeat: <?php echo $boxed_bg_atts['background']['repeat']; ?>;
$boxed_bg_size: <?php echo $boxed_bg_atts['background']['size']; ?>;
#page.boxed.site {
	background:$boxed_bg_image <?php if (!empty($boxed_bg_atts['background']['color'])) { ?>$boxed_bg_color <?php } ?>$boxed_bg_position $boxed_bg_repeat;
	background-size:$boxed_bg_size;
	margin:0 auto;
}
<?php } ?>

.post-edit-link {
    position: absolute;
}

<?php 
// Display the color set
$theme_colors = c_get_option('theme_colors');

for ($i = 0; $i < count($theme_colors); $i++) {
    echo '.text-' . sanitize_title_with_dashes($theme_colors[$i]['text']).', 
		  .text-' . sanitize_title_with_dashes($theme_colors[$i]['text']).' p,
		  .text-' . sanitize_title_with_dashes($theme_colors[$i]['text']).' a, 
		  .text-' . sanitize_title_with_dashes($theme_colors[$i]['text']).' h1, 
		  .text-' . sanitize_title_with_dashes($theme_colors[$i]['text']).' h2, 
		  .text-' . sanitize_title_with_dashes($theme_colors[$i]['text']).' h3, 
		  .text-' . sanitize_title_with_dashes($theme_colors[$i]['text']).' h4, 
		  .text-' . sanitize_title_with_dashes($theme_colors[$i]['text']).' h5, 
		  .text-' . sanitize_title_with_dashes($theme_colors[$i]['text']).' h6 {' . 
		'color:' . $theme_colors[$i]['color'] .
	'}';
	echo '.bg-' . sanitize_title_with_dashes($theme_colors[$i]['text']).' {' . 
		'background-color:' . $theme_colors[$i]['color'] .
	'}';
} ?>

.unyson.page-builder article {
    padding-bottom: 0;
}

.author-bio:after {
    content: "";
    clear: both;
    display: block;
    margin-bottom: 10px;
}

.post-navigation:after {
    content: "";
    display: block;
    clear: both;
    margin-bottom: 30px;
}

.container article {
    padding-right: 50px;
}

article header.entry-header {
    width: 100%;
    background-size: cover;
    position: relative;
    background-position: center;
}
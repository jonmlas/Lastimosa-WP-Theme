/*
 * Start of wp.scss.php
 */

<?php 
	$theme_layout = lastimosa_get_option('theme_layout');		
	$body_bg_atts = $theme_layout['body'];
?>

body {
	<?php echo join( ' ', lastimosa_get_options_background_css( $body_bg_atts ) ); ?>
	overflow-x: hidden;
}

<?php if($theme_layout['layout']['selected'] == 'container') { ?>
<?php $boxed_bg_atts = $theme_layout['layout']['container']; ?>
box.container {
	<?php echo join( ' ', lastimosa_get_options_background_css( $boxed_bg_atts ) ); ?>
	margin:0 auto;
	display:block;
	padding: 0;
}
<?php } ?>

$container_width: <?php echo $theme_layout['container-width']; ?>;
.container,
main .fw-container,
article.post-password-required {
	width:100%;
	max-width: rem($container_width);
}

.site-main.container {
	min-height: 50vh;
}
section, .wrap, .wrap > * {
	position: relative;
}
article.post-password-required {
	margin:0 auto;
}

.link {
	cursor: pointer;
}

/* Anchor link margin top fix */
:target:before {
content: "";
display: block;
height: rem(100px); /* fixed header height*/
margin: rem(-100px) 0 0; /* negative fixed header height */
}

<?php 
// Print the color set
$theme_colors = lastimosa_get_option('theme_colors');
if(!empty($theme_colors)) {
	for ($i = 0; $i < count($theme_colors); $i++) {
			echo '.text-' . sanitize_title_with_dashes($theme_colors[$i]['name']).', 
						.text-' . sanitize_title_with_dashes($theme_colors[$i]['name']).' p,
						.text-' . sanitize_title_with_dashes($theme_colors[$i]['name']).' a, 
						.text-' . sanitize_title_with_dashes($theme_colors[$i]['name']).' h1, 
						.text-' . sanitize_title_with_dashes($theme_colors[$i]['name']).' h2, 
						.text-' . sanitize_title_with_dashes($theme_colors[$i]['name']).' h3, 
						.text-' . sanitize_title_with_dashes($theme_colors[$i]['name']).' h4, 
						.text-' . sanitize_title_with_dashes($theme_colors[$i]['name']).' h5, 
						.text-' . sanitize_title_with_dashes($theme_colors[$i]['name']).' h6 {' . 
					'color:' . $theme_colors[$i]['color'] .
				'}';
		echo '.bg-' . sanitize_title_with_dashes($theme_colors[$i]['name']).' {' . 
			'background-color:' . $theme_colors[$i]['color'] .
		'}';
		echo '.border-' . sanitize_title_with_dashes($theme_colors[$i]['name']).' {' . 
			'border-color:' . $theme_colors[$i]['color'] . '!important' .
		'}';
	} 
} ?>

.btn-rounded {
    border-radius: rem(1000px);
}

.btn-squared {
    border-radius: 0;
}

<?php // Print button color set
$button_colors = lastimosa_get_option( 'button_colors');
if(!empty($button_colors)) {
	for ($i = 0; $i < count($button_colors); $i++) {
		echo '.btn-'.sanitize_title_with_dashes($button_colors[$i]['color_name']) . ' {' .
						'color:'.$button_colors[$i]['normal_text_color'].';'.
						'background-color:'.$button_colors[$i]['normal_bg_color'].';'.
					'}'.
					'.btn-'.sanitize_title_with_dashes($button_colors[$i]['color_name']) . ':hover {' .
						'color:'.$button_colors[$i]['hover_text_color'].';'.
						'background-color:'.$button_colors[$i]['hover_bg_color'].';'.
					'}'.
					'.btn.btn-outline.btn-'.sanitize_title_with_dashes($button_colors[$i]['color_name']) . ' {
							background-color: transparent;
							border-color: '.$button_colors[$i]['normal_bg_color'].';
							color: '.$button_colors[$i]['normal_bg_color'].';
					}'.
					'.btn.btn-outline.btn-'.sanitize_title_with_dashes($button_colors[$i]['color_name']) . ':hover {
							background-color: '.$button_colors[$i]['hover_bg_color'].';
							border-color: '.$button_colors[$i]['hover_bg_color'].';
							color: '.$button_colors[$i]['hover_text_color'].';
					}';
	}
}

// Print button sizes
$button_sizes = lastimosa_get_option( 'button_sizes');
if(!empty($button_sizes)) {
	for ($i = 0; $i < count($button_sizes); $i++) {
		foreach($button_sizes[$i]['padding'] as $key => $value) {
			$button_sizes[$i]['padding'][$key] = 'rem(' . $value . ')';
		}
		echo '.btn-'.sanitize_title_with_dashes($button_sizes[$i]['slug']) . ' {' .
						'font-size: rem('.$button_sizes[$i]['font_size'].');'.
						'line-height: rem('.$button_sizes[$i]['line_height'].');'.
						'padding: '.join( ' ', $button_sizes[$i]['padding'] ).'; '.
						'border-width: rem('.$button_sizes[$i]['border_width'].');'.
						'border-radius: rem('.$button_sizes[$i]['border_radius'].');'.
					'}';
	}
}
?>


/*--------------------------------------------------------------
## Widgets
--------------------------------------------------------------*/
#sidebar .widget {
    margin-bottom: 2rem;
}

/* Social Media */
.social-media ul li {
    list-style: none;
    display: inline-block;
}
.social-media ul {
    padding-left: 0 !important;
}

/* Entypo fix */
ul.social-media li [class^="entypo-"], ul.social-media li [class*=" entypo-"] {
    width: auto;
    margin-right: 0;
}

/* Search */
.search-form {
	position: relative;
}
.search-form .search-submit {
	padding: 0.15em .7em;
	position: absolute;
	right: 0;
	font-size: 20px;
	margin: 3px;
}


/*--------------------------------------------------------------
# Accessibility
--------------------------------------------------------------*/
/* Text meant only for screen readers. */
.screen-reader-text {
  clip: rect(1px, 1px, 1px, 1px);
  position: absolute !important;
  height: 1px;
  width: 1px;
  overflow: hidden;
  word-wrap: normal !important;
  /* Many screen reader and browser combinations announce broken words as they would appear visually. */
}
.screen-reader-text:focus {
  background-color: #f1f1f1;
  border-radius: rem(3px);
  box-shadow: 0 0 2px 2px rgba(0, 0, 0, 0.6);
  clip: auto !important;
  color: #21759b;
  display: block;
  font-size: 14px;
  font-size: 0.875rem;
  font-weight: bold;
  height: auto;
  left: 0.313rem;
  line-height: normal;
  padding: 0.938rem 1.438rem 0.875rem;
  text-decoration: none;
  top: 0.313rem;
  width: auto;
  z-index: 100000;
  /* Above WP toolbar. */
}

/* Do not show the outline on the skip link target. */
#content[tabindex="-1"]:focus {
  outline: 0;
}


/*--------------------------------------------------------------
# Alignments
--------------------------------------------------------------*/

.aligncenter {
  clear: both;
  display: block;
  margin-left: auto;
  margin-right: auto;
}

a img.alignnone {
  margin: 0.313rem 1.25rem 1.25rem 0;
}

a img.aligncenter {
  display: block;
  margin-left: auto;
  margin-right: auto;
}

.wp-caption.alignnone {
  margin: 0.313rem 1.25rem 1.25rem 0;
}

.wp-caption.alignleft {
  margin: 0.313rem 1.25rem 1.25rem 0;
}

.wp-caption.alignright {
  margin: 0.313rem 0 1.25rem 1.25rem;
}

@media (min-width: 768px) {
	.alignleft {
		display: inline;
		float: left;
		margin-right: 1.5em;
	}

	.alignright {
		display: inline;
		float: right;
		margin-left: 1.5em;
	}
	a img.alignright {
		float: right;
		margin: 0.313rem 0 1.25rem 1.25rem;
	}
	a img.alignleft {
		float: left;
		margin: 0.313rem 1.25rem 1.25rem 0;
	}

}


/*--------------------------------------------------------------
# Clearings
--------------------------------------------------------------*/
.clear:before,
.clear:after,
.entry-content:before,
.entry-content:after,
.comment-content:before,
.comment-content:after,
.site-header:before,
.site-header:after,
.site-content:before,
.site-content:after,
.site-footer:before,
.site-footer:after {
  content: "";
  display: table;
  table-layout: fixed;
}

.clear:after,
.entry-content:after,
.comment-content:after,
.site-header:after,
.site-content:after,
.site-footer:after {
  clear: both;
}


/*--------------------------------------------------------------
# Offsets for 5 columns
--------------------------------------------------------------*/
.offset-md-2-4 {
	margin-left: 20%;
}

.offset-md-4-8 {
	margin-left: 40%;
}

.offset-md-7-2 {
	margin-left: 60%;
}

.offset-md-9-6 {
	margin-left: 80%;
}


/*--------------------------------------------------------------
# Content
--------------------------------------------------------------*/
/*--------------------------------------------------------------
## Posts and pages
--------------------------------------------------------------*/

main article > .entry-content {
    margin-left: 15px;
    margin-right: 15px;
}
.unyson.page-builder main article > .entry-content {
    margin-left: 0;
    margin-right: 0;
}
.site-main > article {
    padding-top: 2rem;
    padding-bottom: 2rem;
}
#content.site-content {
	padding-bottom: 3.75rem;
	padding-top: 4.125rem;
}
.sticky-header main.site-main {
    padding-top: 80px;
}
.sticky .entry-title::before {
	content: '\f08d';
	font-family: fontawesome;
	font-size: 1.563rem;
	left: -2.5rem;
	position: absolute;
	top: 0.375rem;
}

.sticky .entry-title {
  position: relative;
}

.single .byline,
.group-blog .byline {
  display: inline;
}

.page-links {
  clear: both;
  margin: 0 0 1.5em;
}

.page-template-blank-page .entry-content,
.blank-page-with-container .entry-content {
  margin-top: 0;
}

.post.hentry {
  margin-bottom: 2rem;
}

.posted-on, .byline, .comments-link {
  color: #9a9a9a;
}

.entry-title > a {
  color: inherit;
}

/* Post Meta */
.post-meta > span {
	padding: 0 5px;
	border-right: 1px solid;
}
.post-meta > span:first-child {
  padding-left: 0;
}
.post-meta > span:last-child {
  padding-right: 0;
	border-right: none;
}


/*--------------------------------------------------------------
## Pagination
--------------------------------------------------------------*/
.paging-navigation {
	display: block;
	padding-left: 0;
	list-style: none;
	border-radius: .25rem;
	margin-bottom: 3rem;
	.page-numbers {
		position: relative;
		padding: .5rem .75rem;
		display: inline-block;
		margin: -3px;
		line-height: 1.25;
		color: #007bff;
		background-color: #fff;
		border: 1px solid #dee2e6;
			border-top-color: rgb(222, 226, 230);
			border-right-color: rgb(222, 226, 230);
			border-bottom-color: rgb(222, 226, 230);
			border-left-color: rgb(222, 226, 230);

		&:hover, &.current {
			color: #0056b3;
			text-decoration: none;
			background-color: #e9ecef;
			border-color: #dee2e6;
		}

		&:focus {
			z-index: 2;
			outline: 0;
			box-shadow: 0 0 0 .2rem rgba(0,123,255,.25);
		}

		// Opinionated: add "hand" cursor to non-disabled .page-link elements
		&:not(:disabled):not(.disabled) {
			cursor: pointer;
		}
	}
}


/*--------------------------------------------------------------
## Font Icons Overrides
--------------------------------------------------------------*/
.dashicons, .dashicons-before::before {
    width: auto;
    height: auto;
}


/*--------------------------------------------------------------
## Comments
--------------------------------------------------------------*/
.comment-content a {
  word-wrap: break-word;
}

.bypostauthor {
  display: block;
}

.comment-body .pull-left {
  padding-right: 0.625rem;
}

.comment-list .comment {
  display: block;
}

.comment-list {
  padding-left: 0;
}

.comments-title {
  font-size: 1.125rem;
}

.comment-list .pingback {
  border-top: 1px solid rgba(0, 0, 0, 0.125);
  padding: 0.563rem 0;
}

.comment-list .pingback:first-child {
  border: medium none;
}


/*--------------------------------------------------------------
# Infinite scroll
--------------------------------------------------------------*/
/* Globally hidden elements when Infinite Scroll is supported and in use. */
.infinite-scroll .posts-navigation,
.infinite-scroll.neverending .site-footer {
  /* Theme Footer (when set to scrolling) */
  display: none;
}

/* When Infinite Scroll has reached its end we need to re-display elements that were hidden (via .neverending) before. */
.infinity-end.neverending .site-footer {
  display: block;
}


/*--------------------------------------------------------------
# Media
--------------------------------------------------------------*/
.page-content .wp-smiley,
.entry-content .wp-smiley,
.comment-content .wp-smiley {
  border: none;
  margin-bottom: 0;
  margin-top: 0;
  padding: 0;
}

/* Make sure embeds and iframes fit their containers. */
embed,
iframe,
object {
  max-width: 100%;
}


/*--------------------------------------------------------------
## Captions
--------------------------------------------------------------*/
.wp-caption {
  background: #f1f1f1 none repeat scroll 0 0;
  border: 1px solid #f0f0f0;
  max-width: 96%;
  padding: 0.313rem 0.313rem 0;
  text-align: center;
}
.wp-caption img[class*="wp-image-"] {
  border: 0 none;
  height: auto;
  margin: 0;
  max-width: 100%;
  padding: 0;
  width: auto;
}
.wp-caption .wp-caption-text {
  font-size: 0.688rem;
  line-height: 1.063rem;
  margin: 0;
  padding: 0.625rem;
}

.wp-caption-text {
  text-align: center;
}


/*--------------------------------------------------------------
## Galleries
--------------------------------------------------------------*/
.gallery {
  margin-bottom: 1.5em;
}

.gallery-item {
  display: inline-block;
  text-align: center;
  vertical-align: top;
  width: 100%;
}
.gallery-item .gallery-columns-2 {
  max-width: 50%;
}
.gallery-item .gallery-columns-3 {
  max-width: 33.33333%;
}
.gallery-item .gallery-columns-4 {
  max-width: 25%;
}
.gallery-item .gallery-columns-5 {
  max-width: 20%;
}
.gallery-item .gallery-columns-6 {
  max-width: 16.66667%;
}
.gallery-item .gallery-columns-7 {
  max-width: 14.28571%;
}
.gallery-item .gallery-columns-8 {
  max-width: 12.5%;
}
.gallery-item .gallery-columns-9 {
  max-width: 11.11111%;
}

.gallery-caption {
  display: block;
}

/*--------------------------------------------------------------
## LightGallery
--------------------------------------------------------------*/
.admin-bar .lg-outer {
	top: 2.875rem;
	height: unquote( "calc( 100% - 2.875rem )" );
}
.lg-sub-html h4, .lg-sub-html p {
	color: #EEE;
}

$lightgallery_gutter: 8px;
.lightgallery .row { 
	margin-right: rem( -$lightgallery_gutter );
	margin-left: rem( -$lightgallery_gutter );
}

.lightgallery .row > [class*='col-'] { 
	padding-right: rem( $lightgallery_gutter );
	padding-left: rem( $lightgallery_gutter );
}

@media (min-width: 768px) {
	.admin-bar .lg-outer {
		top: 2rem;
		height: unquote( "calc( 100% - 2rem )" );
	}
}


/*--------------------------------------------------------------
## 5 Star Rating
--------------------------------------------------------------*/
.rating {
	position: relative;
}
.fa.fa-star {
	color: #bdc3c7;
}
.fa.fa-star.checked {
	color: #e67e22;
}
.fa.fa-star.half {
	position:absolute;
	color: #e67e22;
	z-index: 9;
	bottom: 0.14em;
	margin-left: -0.92em;
}
.fa.fa-star.half:before {
  position: relative;
  width: 50%;
  display: block;
  overflow: hidden;
}


/*--------------------------------------------------------------
# Plugin Compatibility
--------------------------------------------------------------*/
/*--------------------------------------------------------------
## Woocommerce
--------------------------------------------------------------*/
.woocommerce-cart-form .shop_table .coupon .input-text {
  width: 8.313rem !important;
}

.variations_form .variations .value > select {
  margin-bottom: 0.625rem;
}

.woocommerce-MyAccount-content .col-1,
.woocommerce-MyAccount-content .col-2 {
  max-width: 100%;
}


/*--------------------------------------------------------------
# Footer
--------------------------------------------------------------*/
footer#colophon {
  font-size: 85%;
}
body:not(.theme-preset-active) footer#colophon {
  color: #99979c;
  background-color: #f7f7f7;
}
.navbar-dark .site-info {
  color: #fff;
}
.copyright {
  font-size: 0.875rem;
  margin-bottom: 0;
  text-align: center;
}

.copyright a, footer#colophon a {
  color: inherit;
}


/*--------------------------------------------------------------
# Back to top button 
--------------------------------------------------------------*/
#scroll-top {
	position: fixed;
	right: 10px;
	bottom: 10px;
	margin: 0;
	text-decoration: none;
	z-index: 999;
}
#scroll-top button {
	width: 50px;
	height: 50px;
	padding: 0;
	outline: none;
	cursor: pointer;
	border-radius: 100%;
	border: solid 5px #FFEBEE;
	background-color: #F44336;
	color: #fff;
	box-shadow: 0 0 1px #333;
	display: block;
	font-family: tahoma;
	font-size: 11px;
	-webkit-transition: 1s;
	-moz-transition: 1s;
	transition: 1s;
}
#scroll-top button:hover {
	background-color: #B71C1C;
	border-color: #F44336;
}
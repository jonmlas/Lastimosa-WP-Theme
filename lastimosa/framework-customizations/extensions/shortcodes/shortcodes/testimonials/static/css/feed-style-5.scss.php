<?php if (!defined('FW')) die('Forbidden');

$uri = fw_get_template_customizations_directory_uri('/extensions/shortcodes/shortcodes/testimonials'); ?>

.testimonials-item:before {
	content: '';
    display:block;
    background: url('<?php echo $uri; ?>/static/img/quote-1.png');
    width:44px;
    height:39px;
    margin:0 auto;
}

.feed-style-5 {
	text-align: center;
	padding: 20px 0;
}
.feed-style-5 .testimonials-title {
	font-family: 'Open Sans', sans-serif;
}
.feed-style-5 .testimonials-title:after {
	content: "";
	clear: both;
	display: block;
	margin: 10px auto;
	width: 56px;
	height: 2px;
	border-top: 2px solid #000000;
}
.feed-style-5 .testimonials-item {
	text-align: center;
}
.feed-style-5 .testimonials-avatar img {
	margin: 0 auto;
	display: inline-block;
	width: 80px;
	height: 80px;
	border-radius: 50%;
	border: 4px solid #fff;
	box-shadow: 0 0 2px 0 rgba(0, 0, 0, 0.4);
}
.feed-style-5 .testimonials-text {
	text-align: center;
	padding: 10px 10%;
}
.feed-style-5 .testimonials-author {
	padding: 10px 0;
}
.feed-style-5 .testimonials-author .author-name {
	font-weight: bold;
}
.feed-style-5 .testimonials-author em:before {
	content: ", ";
	margin-left: -3px;
}
.feed-style-5 .testimonials-author .testimonials-url:before {
	content: ", ";
	margin-left: -3px;
}
.feed-style-5 .prev,
.feed-style-5 .next {
	position: absolute;
	z-index: 2;
	top: 42%;
	font-size: 30px;
	border: 1px solid transparent;
	border-radius: 50%;
}
.feed-style-5 .prev i,
.feed-style-5 .next i {
	position: relative;
	top: -1px;
}
.feed-style-5 .prev:active,
.feed-style-5 .next:active {
	margin-top: 1px;
}
.feed-style-5 .prev:hover,
.feed-style-5 .next:hover {
	color: #000000;
	border-color: #000000;
}
.feed-style-5 .prev {
	left: 1px;
}
.feed-style-5 .prev i {
	left: -2px;
}
.feed-style-5 .prev i:before {
	content: "\f104";
}
.feed-style-5 .next {
	right: 1px;
}
.feed-style-5 .next i {
	right: -2px;
}
.feed-style-5 .next i:before {
	content: "\f105";
}
.feed-style-5 .testimonials-pagination {
	text-align: center;
	margin-top: 10px;
}
.feed-style-5 .testimonials-meta {
	display: table;
	margin: 0 auto;
}
.feed-style-5 .testimonials-meta > div {
	display: table-cell;
	vertical-align: middle;
}
.feed-style-5 .testimonials-avatar {
	display: inline-block;
}
.feed-style-5 .testimonials-author {
	display: inline-block;
	text-align: left;
	padding-left: 10px;
}
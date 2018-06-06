.read-more-wrap {
	position:relative;
}
.read-more-state {
	display: none;
}

.read-more-target {
	opacity: 0;
	max-height: 0;
	font-size: 0;
	transition: .25s ease;
}

.read-more-wrap:after {
	display: block;
	content: '';
	position: absolute;
	left: 0;
	right: 0;
	bottom: 0;
	height: 6rem;
	background: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, .9) 50%, #fff 75%, #fff 100%);
	background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, .9) 50%, #fff 75%, #fff 100%);
	z-index: 1;
}

.read-more-state:checked ~ .read-more-wrap .read-more-target {
	opacity: 1;
	font-size: inherit;
	max-height: 999em;
}

.read-more-state:checked ~ .read-more-wrap:after {
	height: 0;
}

.read-more-state ~ .read-more-trigger:before {
	content: 'Show More';
}

.read-more-state:checked ~ .read-more-trigger:before {
	content: 'Show Less';
}

.read-more-trigger {
	cursor: pointer;
	display: inline-block;
	padding: 0 .5em;
	font-size: .9em;
	line-height: 2;
	border: 1px solid #ddd;
	border-radius: .25em;
	margin: 0 auto;
	display: table;
	background: #fff;
}

<?php 
$css_styles = get_option( 'text-block-style');
if( !empty($css_styles) ) :
	foreach($css_styles as $id_key => $id_value)
	{
		foreach($id_value as $key => $value)
		{
			echo $value;
		}
	}
endif;
?>
<?php 
$css_styles = get_option( 'text-block-style');
foreach($css_styles as $id_key => $id_value)
{
  foreach($id_value as $key => $value)
	{
	  echo $value;
	}
}
?>

$bg-color: #fff;

.show-more {
	position: relative;
	clear: both;

	.btn {
		border-radius: 1.5em;
		padding: .3rem 1.5rem;
		text-decoration: none;
		left: 50%;
		-webkit-transform: translateX(-50%);
		transform: translateX(-50%)
	}
	.show, .hide {
		position: absolute;
		bottom: 1rem;
		z-index: 100;
		text-align: center;
	}

	.hide {
			display: none;
			bottom: rem(20px);
	}
	.show:target {display: none;}
	.show:target ~ .hide {display: table;}
	.show:target ~ .panel {
		padding-bottom: rem(50px);
	}
	.show:target ~ .fade {
		margin-top: 0;
	}

	.panel {
		position: relative;
		max-height: 300px;
		overflow: hidden;
		transition: max-height .5s ease;
	}
	.panel:after {
		display: block;
		content: '';
		position: absolute;
		left: 0;
		right: 0;
		bottom: 0;
		height: 6rem;
		background: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, .9) 50%, $bg-color 75%, $bg-color 100%);
		background: linear-gradient(to bottom, rgba($bg-color, 0) 0%, rgba($bg-color, .9) 50%, $bg-color 75%, $bg-color 100%);
		z-index: 1;
	}

	.show:target ~ .panel:after {
		 height:0;
	}
}

@media (min-width: 768px) {
	.show-more .panel {
 		max-height: 200px;
	}
}
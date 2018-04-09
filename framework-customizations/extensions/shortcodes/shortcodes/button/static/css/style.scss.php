.btn-default {
	background-image:none;
    border:none;
}

.btn {
	white-space:normal;
	&.btn-outline {
		background: none;
		padding: 12px 50px;
	}
	
	&.btn-outline.btn-lg {
		border: 5px solid;
	}

	
	&.btn-gradient {
		background: -moz-linear-gradient(top,  #33a6cc 50%, #0099cc 50%); /* FF3.6+ */
		background: -webkit-gradient(linear, left top, left bottom, color-stop(50%,#33a6cc), color-stop(50%,#0099cc)); /* Chrome,Safari4+ */
		background: -webkit-linear-gradient(top,  #33a6cc 50%,#0099cc 50%); /* Chrome10+,Safari5.1+ */
		background: -o-linear-gradient(top,  #33a6cc 50%,#0099cc 50%); /* Opera 11.10+ */
		background: -ms-linear-gradient(top,  #33a6cc 50%,#0099cc 50%); /* IE10+ */
		background: linear-gradient(to bottom,  #33a6cc 50%,#0099cc 50%); /* W3C */
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#33a6cc', endColorstr='#0099cc',GradientType=0 ); /* IE6-9 */
	}
	
	&.btn-gradient:hover, &.btn-gradient:focus, &.btn-gradient:active {
		background: -moz-linear-gradient(top,  #66b2cc 50%, #33a6cc 50%); /* FF3.6+ */
		background: -webkit-gradient(linear, left top, left bottom, color-stop(50%,#66b2cc), color-stop(50%,#33a6cc)); /* Chrome,Safari4+ */
		background: -webkit-linear-gradient(top,  #66b2cc 50%,#33a6cc 50%); /* Chrome10+,Safari5.1+ */
		background: -o-linear-gradient(top,  #66b2cc 50%,#33a6cc 50%); /* Opera 11.10+ */
		background: -ms-linear-gradient(top,  #66b2cc 50%,#33a6cc 50%); /* IE10+ */
		background: linear-gradient(to bottom,  #66b2cc 50%,#33a6cc 50%); /* W3C */
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#66b2cc', endColorstr='#33a6cc',GradientType=0 ); /* IE6-9 */
	}
	
	&.btn-raised {
		box-shadow: 0 3px 0 0 #007299;
	}
		
	&.sharp {
	  border-radius:0;
	}
	
	&.round {
		border-radius: 24px;
	}
	&.round.btn-lg {
		border-radius: 50px;
	}

}

<?php 
$btn_styles = get_option( 'btn_style');
foreach($btn_styles as $id_key => $id_value)
{
  foreach($id_value as $key => $value)
	{
	  echo $value;
	}
}
?>
button {
  overflow: visible;
}
button,
select {
  text-transform: none;
}
button,
html input[type="button"],
input[type="reset"],
input[type="submit"] {
  -webkit-appearance: button;
  cursor: pointer;
}
button[disabled],
html input[disabled] {
  cursor: default;
}
button::-moz-focus-inner,
input::-moz-focus-inner {
  border: 0;
  padding: 0;
}

[role="button"] {
  cursor: pointer;
}
.btn {
  display: inline-block;
  margin-bottom: 0;
  font-weight: normal;
  text-align: center;
  vertical-align: middle;
  -ms-touch-action: manipulation;
      touch-action: manipulation;
  cursor: pointer;
  background-image: none;
  border: 1px solid transparent;
  white-space: nowrap;
  padding: 6px 12px;
  font-size: 14px;
  line-height: 1.42857143;
  border-radius: 4px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
.btn:focus,
.btn:active:focus,
.btn.active:focus,
.btn.focus,
.btn:active.focus,
.btn.active.focus {
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
.btn:hover,
.btn:focus,
.btn.focus {
  color: #333333;
  text-decoration: none;
}
.btn:active,
.btn.active {
  outline: 0;
  background-image: none;
  -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
}
.btn.disabled,
.btn[disabled],
fieldset[disabled] .btn {
  cursor: not-allowed;
  opacity: 0.65;
  filter: alpha(opacity=65);
  -webkit-box-shadow: none;
  box-shadow: none;
}

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

.btn-8526f2ffc2ec06e83cd1d0a2d00489f7 {
    color: #636c72;
    background-color: white;
    font-size: 16px;
    width: 100%;
    max-width: 160px;
    height: 56px;
    line-height: 52px;
    padding: 0;
}

.btn-8526f2ffc2ec06e83cd1d0a2d00489f7:hover {
    color: white;
    background-color: #286090;
}

<?php 



/*$btn_styles = get_option( 'btn_style');
foreach($btn_styles as $id_key => $id_value)
{
  foreach($id_value as $key => $value)
	{
	  echo $value;
	}
}*/
?>
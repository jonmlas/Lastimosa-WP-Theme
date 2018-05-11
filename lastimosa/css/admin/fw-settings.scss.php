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
		background:transparent;
		border-color:#3e8ef7;
		color:#3e8ef7;
	}

}

.option-google-font .fw-option-typography-option-style,
.option-google-font div[data-value="Arial"]{
    display: none !important;
}

.fw-backend-option-type-fw-multi-inline .fw-multi-inline-holder:last-child {
    margin-right: 0;
}

.fw-option-width-short {
    width: 91.5px !important;
}

.fw-backend-option-input-type-predefined-colors-color-picker .fw-backend-option-descriptor {
    display: inline-block;
}

/*!
 * Hides the delete icon on the Typography addable popup
 */
.site-typography .fw-backend-options-virtual-context.item:nth-child(-n+4) .dashicons.fw-x.delete-item {
    visibility: hidden;
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
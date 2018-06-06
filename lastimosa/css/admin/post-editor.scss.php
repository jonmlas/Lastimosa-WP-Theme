.mb-0 {
	margin-bottom: 0;
}
.builder-item .pb-item img.media-image {
    background: #f0f0f0;
}
.builder-items .fw-row {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
}

/*!
 * Border options width adjustment
 */
.border-options label {
    width: 100px !important;
    display: block;
    font-weight: bold;
}

.btn {
    display: inline-block;
    font-weight: 300;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: 1px solid transparent;
        border-top-color: transparent;
        border-right-color: transparent;
        border-bottom-color: transparent;
        border-left-color: transparent;
    padding: .429rem 1rem;
    font-size: 1rem;
    line-height: 1.571429;
    border-radius: .215rem;
    -webkit-transition: unquote("background-color .15s ease-in-out,border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out");
    -o-transition: unquote("background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out");
    transition: unquote("background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out");
}

.btn {
    cursor: pointer;
    -webkit-transition: border .2s linear,color .2s linear,width .2s linear,background-color .2s linear;
    -o-transition: border .2s linear,color .2s linear,width .2s linear,background-color .2s linear;
    transition: border .2s linear,color .2s linear,width .2s linear,background-color .2s linear;
    -webkit-font-smoothing: subpixel-antialiased;
}

.btn-block {
    display: block;
    width: 100%;
}

.btn-primary {
    color: #fff;
    background-color: #007bff;
    border-color: #007bff;
    -webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,.15),0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 0 rgba(255,255,255,.15),0 1px 1px rgba(0,0,0,.075);
}

.btn-primary.focus, .btn-primary.hover, .btn-primary:focus, .btn-primary:hover {
    color: #fff;
    background-color: #589ffc;
    border-color: #589ffc;
    -webkit-box-shadow: none;
    box-shadow: none;
}

.btn-primary:hover {
    color: #fff;
    background-color: #0069d9;
    border-color: #0062cc;
}

.btn-outline-primary, .btn-outline.btn-primary {
    color: #3e8ef7;
    background-color: transparent;
    border-color: #3e8ef7;
}

.btn-outline-primary.focus, .btn-outline-primary.hover, .btn-outline-primary:focus, .btn-outline-primary:hover, .btn-outline-primary:not([disabled]):not(.disabled).active, .btn-outline-primary:not([disabled]):not(.disabled):active, .btn-outline.btn-primary.focus, .btn-outline.btn-primary.hover, .btn-outline.btn-primary:focus, .btn-outline.btn-primary:hover, .btn-outline.btn-primary:not([disabled]):not(.disabled).active, .btn-outline.btn-primary:not([disabled]):not(.disabled):active, .open > .btn-outline-primary.dropdown-toggle, .open > .btn-outline.btn-primary.dropdown-toggle, .show > .btn-outline-primary.dropdown-toggle, .show > .btn-outline.btn-primary.dropdown-toggle {
    color: #fff;
    background-color: #3e8ef7;
    border-color: #3e8ef7;
}

.btn-round {
    border-radius: 1000px;
}

.btn-squared {
    border-radius: 0;
}

<?php // Print color set
$theme_colors = lastimosa_get_option( 'theme_colors');
if(!empty($theme_colors)) {
	for ($i = 0; $i < count($theme_colors); $i++) {
		echo 'option[value="text-'.sanitize_title_with_dashes($theme_colors[$i]['name']) . '"] {' .
						'color:'.$theme_colors[$i]['color'].';'.
					'}';
		echo 'option[value="bg-'.sanitize_title_with_dashes($theme_colors[$i]['name']) . '"] {' .
						'color: invert('.$theme_colors[$i]['color'].');'.
						'background-color: '.$theme_colors[$i]['color'].';'.
					'}';
	}
} ?>

<?php // Print button color set
$button_colors = lastimosa_get_option( 'button_colors');
if(!empty($button_colors)) {
	for ($i = 0; $i < count($button_colors); $i++) {
		echo 'option[value="btn-'.sanitize_title_with_dashes($button_colors[$i]['color_name']) . '"] {' .
						'background:'.$button_colors[$i]['normal_bg_color'].';'.
					'}';
	}
} ?>

.fw-backend-option-input-type-predefined-colors-color-picker .fw-backend-option-descriptor {
    display: inline-block;
}

/*!
 * WP Visual Editor Custom Styles

.content-block { 
    border:1px solid #eee; 
    padding:3px;
    background:#ccc;
    max-width:250px;
    float:right; 
    text-align:center;
}
.content-block:after { 
    clear:both;
} 
.blue-button { 
    background-color:#33bdef;
    -moz-border-radius:6px;
    -webkit-border-radius:6px;
    border-radius:6px;
    border:1px solid #057fd0;
    display:inline-block;
    cursor:pointer;
    color:#ffffff;
    padding:6px 24px;
    text-decoration:none;
}
 
.red-button {
    background-color:#bc3315;
    -moz-border-radius:6px;
    -webkit-border-radius:6px;
    border-radius:6px;
    border:1px solid #942911;
    display:inline-block;
    cursor:pointer;
    color:#ffffff;
    padding:6px 24px;
    text-decoration:none;
} */
<?php 
$css_styles = get_option( 'button-style' );
if( isset($css_styles) ) :
	foreach($css_styles as $id_key => $id_value)
	{
		foreach($id_value as $key => $value)
		{
			echo $value;
		}
	}
endif;
?>
.btn.mx-auto.d-block {
    display: table !important;
}
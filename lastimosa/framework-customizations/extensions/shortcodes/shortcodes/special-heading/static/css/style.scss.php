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
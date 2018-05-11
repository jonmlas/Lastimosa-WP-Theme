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
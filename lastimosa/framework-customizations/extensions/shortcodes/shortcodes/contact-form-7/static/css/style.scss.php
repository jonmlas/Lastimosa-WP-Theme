<?php 
$cf7_styles = get_option( 'cf7_style');
foreach($cf7_styles as $id_key => $id_value)
{
  foreach($id_value as $key => $value)
	{
	  echo $value;
	}
}
?>
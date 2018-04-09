.col-wrap {
    height: 100%;
}

<?php 
$column_styles = get_option( 'column_style');
foreach($column_styles as $id_key => $id_value)
{
  foreach($id_value as $key => $value)
	{
	  echo $value;
	}
}
?>
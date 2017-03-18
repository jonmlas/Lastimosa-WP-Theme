<?php $footer_widgets = c_get_option('footer_widgets'); ?>
<?php //fw_print($footer_widgets); ?>
<?php if($footer_widgets['selected_value'] == 'yes') : 
$footer_widgets = $footer_widgets['yes'];

if(isset($footer_widgets['columns-picker']['columns'])){
	$column_count = $footer_widgets['columns-picker']['columns'];
}

if ( ! empty( $footer_widgets['padding_top']['select'] ) &&  $footer_widgets['padding_top'] != 'custom' ) :
	$padding_top = ' vo-top-' . $footer_widgets['padding_top']['select'];
else :
	$padding_top = '';
endif;

if ( ! empty( $footer_widgets['padding_bottom']['select'] ) &&  $footer_widgets['padding_bottom']['select'] != 'custom' ) :
	$padding_bottom = ' vo-bottom-' . $footer_widgets['padding_bottom']['select'];
else :
	$padding_bottom = '';
endif;

?>
<div class="widgets<?php echo $padding_top.$padding_bottom; ?>">
    <div class="inner">
        <div class="container">
            <div class="row">
                <?php
                switch ($column_count) {
                    case 'col-md-6':
                        $column_stack = array_fill(1, 2, 'col-md-6');
                        $col_number = 2;
                        break;
                    case 'col-md-6-a':
                        $column_stack[1] = 'col-md-8';
                        $column_stack[2] = 'col-md-4';
                        $col_number = 2;
                        break;
                    case 'col-md-6-b':
                        $column_stack[1] = 'col-md-4';
                        $column_stack[2] = 'col-md-8';
                        $col_number = 2;
                        break;
                    case 'col-md-4':
                        $column_stack = array_fill(1, 3, 'col-md-4');
                        $col_number = 3;
                        break;
					case 'col-md-4-a':
                        $column_stack[1] = 'col-md-3';
                        $column_stack[2] = 'col-md-6';
						$column_stack[3] = 'col-md-3';
                        $col_number = 3;
                        break;
					case 'col-md-4-b':
                        $column_stack[1] = 'col-md-3';
                        $column_stack[2] = 'col-md-3';
						$column_stack[3] = 'col-md-6';
                        $col_number = 3;
                        break;
					case 'col-md-4-c':
                        $column_stack[1] = 'col-md-4';
                        $column_stack[2] = 'col-md-2';
						$column_stack[3] = 'col-md-6';
                        $col_number = 3;
                        break;
					case 'col-md-15':
                        $column_stack = array_fill(1, 5, 'col-md-15');
                        $col_number = 5;
                        break;
                    default:
                        $column_stack = array_fill(1, 4, 'col-md-3');
                        $col_number = 4;
                        break;
                }  
                
                for($i=1; $i<=$col_number; $i++): $footer_sidebar = 'footer-'.$i; ?>
                    <div class="<?php echo $column_stack[$i]; ?>">
                        <?php dynamic_sidebar($footer_sidebar); ?>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

<?php // fw_print($footer_widgets);  ?>
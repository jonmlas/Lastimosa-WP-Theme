<?php if ( ! defined( 'ABSPATH' ) ) die( 'Direct access forbidden.' ); 

$header_menu 	= lastimosa_get_option('header_menu');
do_action( 'lastimosa_header_top' ); ?>

<?php
if ( fw_ext('megamenu')  && ($header_menu['selected'] == 'style_2') ) { ?>
<div class="header-main">
	<div class="container">
		<?php do_action('lastimosa_header_logo'); ?>
        <nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
            <?php do_action('lastimosa_menu_button'); ?>
            <?php do_action('lastimosa_menu'); ?>
        </nav>
    </div>
</div>
<?php }else{ ?>

<nav class="navbar navbar-default">
<div class="header-main">
    <div class="container">
        <div class="navbar-header">
            <?php do_action('lastimosa_menu_button'); ?>
            <?php do_action('lastimosa_header_logo'); ?>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <?php do_action('lastimosa_menu'); ?>
        </div><!--/.nav-collapse -->
    </div><!--/.container-fluid --></div>
</nav>
<?php } ?>

<?php do_action( 'lastimosa_header_bottom' ); ?>
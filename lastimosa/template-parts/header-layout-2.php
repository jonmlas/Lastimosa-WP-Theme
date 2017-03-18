<?php if ( ! defined( 'ABSPATH' ) ) die( 'Direct access forbidden.' ); ?>

<?php do_action( 'lastimosa_header_top' ); ?>

<div class="header-main">
	
    <div class="container">
		<?php do_action('lastimosa_header_logo'); ?>
        <?php lastimosa_header_info(); ?>
    </div>
</div> 

<?php
if ( has_nav_menu( 'main' ) ) { ?>
   <nav id="primary-navigation" class="navbar" role="navigation">
	<div class="container">
		  <?php do_action('lastimosa_menu'); ?>	
	</div>
</nav>  
<?php } ?>        

<?php do_action( 'lastimosa_header_bottom' ); ?>
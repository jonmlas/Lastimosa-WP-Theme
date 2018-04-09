<?php 





$atts = c_get_option('header_topbar');





//fw_print($atts);





if($atts['display'] == 'yes') : ?>


       


    <div id="topbar" class="container-fluid" data-spy="affix" data-offset-top="30">


        <div class="header-main container">


          <div class="pull-left">


            <?php


                if($atts['yes']['topbar_left_menu']['display'] == 'yes' || !empty($atts['yes']['topbar_left_content'])) :


                    wp_nav_menu( array( 'theme_location' => 'top-left', 'container' => '', 'menu_class' => 'nav navbar-nav') ); 


                endif;


				if(isset($atts['yes']['topbar_left_content'])):


                    echo '<span class="pull-left">' . $atts['yes']['topbar_left_content'] . '</span>';


                endif;


            ?>


          </div>


          <div class="pull-right">


            <?php


                if($atts['yes']['topbar_right_menu']['display'] == 'yes' || empty($atts['yes']['topbar_right_content'])) :


                    wp_nav_menu( array( 'theme_location' => 'top-right', 'container' => '', 'menu_class' => 'nav navbar-nav') ); 


                endif;


				if(isset($atts['yes']['topbar_left_content'])):


					echo '<span class="pull-right">' . $atts['yes']['topbar_right_content'] . '</span>';


				endif;


            ?>


          </div>


        </div>


    </div>


        


<?php endif; ?>
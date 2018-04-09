<?php $atts = c_get_option('footer_copyright');
//fw_print($atts); 
	  $menu_atts = c_get_option('footer_menu');
 // fw_print($menu_atts); 
?>
<div class="site-info">
	<div class="container">
        <div>
		<?php if ( has_nav_menu( 'footer' ) ) : ?>
            <?php wp_nav_menu( array( 
				'menu'              => 'footer',
				'theme_location' => 'footer', 
				'menu_class' => 'nav '. $menu_atts['yes']['alignment'] ) ); ?>
        <?php endif; ?>
        
        <?php if(!empty($menu_atts['social_profiles'])): ?>
        <ul class="social-profiles">
        <?php
			$social_profiles = c_get_option('social_profiles');
			for($i=0; $i < count($social_profiles); $i++): 
				if(!empty($social_profiles[$i]['link'])):
					echo '<li><a href="'. $social_profiles[$i]['link'].'" target="_blank"><i class="fa '. $social_profiles[$i]['fa_code'].'" aria-hidden="true"></i>
</a></li>';
				endif;
			endfor; 
		?>
        </ul><br>
		<?php endif; ?>
        </div>
        <p class="<?php echo $atts['alignment']; ?>"><?php echo $atts['copyright']; ?></p>
    </div>
</div><!-- .site-info -->

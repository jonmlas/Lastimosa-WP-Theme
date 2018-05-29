<?php $footer_copyright = lastimosa_get_option('footer_copyright');
	  $menu_atts = lastimosa_get_option('footer_menu');
?>
<?php if( empty($footer_copyright['text']) && !has_nav_menu( 'footer' ) ) return; ?>
<div class="site-info">
	<div class="container">
		<div>
			<?php if ( has_nav_menu( 'footer' ) ) : ?>
				<?php wp_nav_menu( array( 
				'menu'           => 'footer',
				'theme_location' => 'footer',
				'item_spacing'   => 'discard',
				'menu_class'		 => 'nav '. $menu_atts['yes']['alignment'] ) ); ?>
			<?php endif; ?>

			<?php if(!empty($menu_atts['social_profiles'])): ?>
				<ul class="social-profiles">
				<?php
				$social_profiles = lastimosa_get_option('social_profiles');
				for($i=0; $i < count($social_profiles); $i++): 
					if(!empty($social_profiles[$i]['link'])):
						echo '<li><a href="'. $social_profiles[$i]['link'].'" target="_blank"><i class="fa '. $social_profiles[$i]['fa_code'].'" aria-hidden="true"></i></a></li>';
					endif;
				endfor; 
				?>
				</ul><br>
			<?php endif; ?>
		</div>
		<p class="<?php echo $footer_copyright['alignment']; ?>"><?php echo $footer_copyright['text']; ?></p>
	</div>
</div><!-- .site-info -->

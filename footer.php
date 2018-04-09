<?php
/**
 * The template for displaying the footer
 */
?>
	</main>
	<footer id="colophon" class="footer" role="contentinfo">
				<?php
							$hide_footer_widgets = get_post_meta(get_the_ID(), 'hide-footer-widgets', true);

							if(empty($hide_footer_widgets))
							{
									get_template_part( 'template-parts/footer', 'widgets' ); 
							}
					?>
		<?php get_template_part( 'template-parts/footer', 'copyright' ); ?>
	</footer><!-- #colophon -->
	
	<?php echo get_theme_mod( 'box_container_end' ); ?>

  <?php 
	global $wp_query;
    $page_id = $wp_query->post->ID;
	$page_options = fw_get_db_post_option($page_id, 'page_options');
	if(!empty($page_options['footer_scripts'])):
		echo $page_options['footer_scripts'];
	endif;
	?>
	<?php wp_footer(); ?>
</body>
</html>
<?php 
//fw_print(fw_get_template_customizations_directory_uri('/extensions/shortcodes/shortcodes/testimonials/static/img/quote-1.png'));
//fw_print($atts['testimonials']);

$id = uniqid( 'testimonials-' );?>

<div <?php echo fw_attr_to_html($attr); ?>>
	<?php if (!empty($atts['design']['title'])): ?>
		<?php echo fw_html_tag('h3', array('class' => 'testimonials-title'), $atts['design']['title']); ?>
	<?php endif; ?>

	<div class="testimonials-list" id="<?php echo esc_attr($id); ?>">
		<?php foreach ($atts['testimonials'] as $testimonial): ?>
			<div class="testimonials-item clearfix">
				<div class="testimonials-text">
					<p><?php echo $testimonial['content']; ?></p>
				</div>
				<div class="testimonials-meta">
                
                	<?php if(empty($testimonial['author_avatar_placeholder']) || !empty($testimonial['author_avatar']['url'])): ?>
					<div class="testimonials-avatar">
						<?php
						$author_image_url = !empty($testimonial['author_avatar']['url'])
											? $testimonial['author_avatar']['url']
											: fw_get_framework_directory_uri('/static/img/no-image.png');
						?>
						<img src="<?php echo esc_attr($author_image_url); ?>" alt="<?php echo esc_attr($testimonial['author_name']); ?>"/>
					</div>
                    <?php endif; ?>
					<div class="testimonials-author">
						<span class="author-name"><?php echo $testimonial['author_name']; ?></span>
						<?php if($testimonial['author_job']): ?>
                        	<em><?php echo $testimonial['author_job']; ?></em>
                        <?php endif; ?>
                        <?php if($testimonial['site_url']): ?>
						<span class="testimonials-url">
							<a href="<?php echo esc_attr($testimonial['site_url']); ?>"><?php echo $testimonial['site_name']; ?></a>
						</span>
                        <?php endif; ?>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>
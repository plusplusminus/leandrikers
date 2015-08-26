<?php global $post; ?>

<section class="section_about">
	<div class="container">
		<div class="about_profile">
			<?php $image_id = get_post_meta($post->ID,'_ppm_about_image_id',true); ?>
			<?php if ($image_id) : ?>
				<?php $image = wp_get_attachment_image_src( $image_id, 'thumbnail'); ?>
				<div class="profile_image">
					<img class="profile_image--img" src="<?php echo $image[0];?>" />
				</div>
			<?php endif; ?>
			<div class="profile_description">
				<?php $description = get_post_meta($post->ID,'_ppm_about_excerpt',true); ?>
				<?php $link = get_post_meta($post->ID,'_ppm_about_link',true); ?>

				<?php echo wpautop($description); ?>
				
				<a href="<?php echo esc_url($link); ?>" class="profile_description--btn">More About Me</a>
			</div>
		</div>
	</div>
</section>
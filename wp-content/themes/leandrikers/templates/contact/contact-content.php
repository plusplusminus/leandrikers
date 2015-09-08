<?php global $post; ?>

<section class="section_contact">
	<div class="container">
		
		<div class="contact_row">
			<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); ?>
			<div class="contact_image js-height" style="background-image:url('<?php echo $image[0]; ?>');min-height:550px;">
				<?php the_post_thumbnail('full',array('class'=>'contact_image--img hide')); ?>
			</div>
			<div class="contact_form js-height">
				<?php gravity_form(1, false, false, false, '', true, 12); ?>
			</div>
			<div class="clearfix"></div>
			
		</div>

	</div>

	<div class="container">
		<?php get_template_part('templates/features/features','features'); ?>
	</div>
</section>
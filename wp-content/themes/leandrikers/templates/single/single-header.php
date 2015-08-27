<section class="section_feature">



	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); ?>
  	<div class="feature_article" style="background-image:url('<?php echo $image[0]; ?>');min-height:550px;">
    	<?php get_template_part('templates/single/header','content'); ?>
	</div>


</section>
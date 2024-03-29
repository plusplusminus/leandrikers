<?php 

$attached = get_post_meta( get_the_ID(), 'attached_cmb2_attached_posts', true );

$query_args = array(
	'post_type' => 'post',
	'post__in' => $attached,
	'orderby' => 'post__in'
);

$slider = new WP_Query($query_args);

?>

<section class="section_slider owl-theme">

	<?php if ( $slider->have_posts() ) : $count = 0; ?>
		<div class="slider_carousel owl-carousel">
			<?php while ( $slider->have_posts() ) : $slider->the_post(); $count++;?>
				<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); ?>
			  	<div class="carousel_slide" style="background-image:url('<?php echo $image[0]; ?>');min-height:550px;">
			    	<?php get_template_part('templates/home/slider/slide','content'); ?>
				</div>
			<?php endwhile; ?>
		</div>
	<?php endif; ?>
	<?php wp_reset_query(); ?>

</section>
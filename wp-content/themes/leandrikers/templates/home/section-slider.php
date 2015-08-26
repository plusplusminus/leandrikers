<?php 

$query_args = array(
	'post_type' => 'post',
	'paged' => $paged,
	'tag' => 'home-featured'
);

$slider = new WP_Query($query_args);

?>

<section class="section_slider">

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
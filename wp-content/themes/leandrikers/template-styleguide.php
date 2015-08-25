<?php 

/* Template Name: Styleguide */

?>

<?php get_header(); ?>

<section class="">
	<div class="container">
		<div class="row">
		
			<h1 class="page-header">Style Guide</h1>
			<p class="lead">Description</p>
			
			<hr>

			<h2 class="page-header">Fonts</h2>
				<p>Description</p>
				<?php get_template_part('styleguide/section','fonts'); ?>
			
			<hr>

			<h2>Buttons &amp; Links</h2>
			<p>Description</p>
			<hr>

			<h2>Slider</h2>
				<p>Description</p>
				{% include "carousel" %}

			<hr>

			<h2>Image Navigation</h2>
				<p>Description</p>
				<div class="row">
					<div class="col-md-offset-1 col-md-10">
						<?php get_template_part('styleguide/section','nav_blocks'); ?>
					</div>
				</div>
			
			<hr>

			<h2>Image Feed</h2>
				<p>Description</p>
				<div class="section_instagram">
					<div class="col-md-offset-1 col-md-10">
						<?php get_template_part('styleguide/section','image_feed'); ?>
					</div>
				</div>

			
			<hr>

			<h2>Profile</h2>
				<p>Description</p>
				<div class="section_profile">
					<?php get_template_part('styleguide/section','profile'); ?>
				</div>
			
			<hr>

			<h2>Article Blocks</h2>
			<p>Description</p>
				<?php get_template_part('styleguide/section','article_block'); ?>
			<hr>

			<h2>Forms</h2>
			<p>Description</p>
			<hr>

		</div>
	</div>
</section>

<?php get_footer(); ?>
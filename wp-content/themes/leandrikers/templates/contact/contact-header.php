<section class="contact_page">
	<header class="page_head">
		<h1 class="page_header--title"><?php the_title(); ?></h1>
	</header>
	<div class="page_content">
		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

					<div class="page_entry clearfix">
						<?php the_content(); ?>
					</div>

			<?php endwhile; ?>
		<?php endif; ?>
		<?php wp_reset_query(); ?>
	</div>
</section>
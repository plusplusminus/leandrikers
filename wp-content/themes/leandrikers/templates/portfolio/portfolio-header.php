<section class="page_portfolio">
	<header class="portfolio_header">
		<h1><?php the_title(); ?></h1>
	</header>
	<div class="portfolio_content">
		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

					<div class="content_entry clearfix">
						<?php the_content(); ?>
					</div>

			<?php endwhile; ?>
		<?php endif; ?>
		<?php wp_reset_query(); ?>
	</div>
</section>
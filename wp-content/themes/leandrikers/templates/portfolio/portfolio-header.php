<section class="portfolio_page">
	<div class="row">
		<div class="col-xs-12 col-md-8 col-md-offset-2">
			<header class="page_header">
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
		</div>
	</div>
</section>
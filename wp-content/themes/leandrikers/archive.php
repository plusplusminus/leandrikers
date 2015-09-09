<?php get_header(); ?>

<?php global $post; ?>

<section class="portfolio_page">
	<div class="row">
		<div class="col-xs-12 col-md-8 col-md-offset-2">
			<header class="page_head">
				<?php if (is_category()) { ?>
					<h1 class="page_header--title">
						<?php single_cat_title(); ?>
					</h1>

				<?php } elseif (is_tag()) { ?>
					<h1 class="page_header--title">
						<?php single_tag_title(); ?>
					</h1>

				<?php } elseif (is_author()) {
					global $post;
					$author_id = $post->post_author;
				?>
					<h1 class="page_header--title">

						<span><?php _e( 'Posts By:', 'bonestheme' ); ?></span> <?php the_author_meta('display_name', $author_id); ?>

					</h1>
				<?php } elseif (is_day()) { ?>
					<h1 class="page_header--title">
						<span><?php _e( 'Daily Archives:', 'bonestheme' ); ?></span> <?php the_time('l, F j, Y'); ?>
					</h1>

				<?php } elseif (is_month()) { ?>
						<h1 class="page_header--title">
							<span><?php _e( 'Monthly Archives:', 'bonestheme' ); ?></span> <?php the_time('F Y'); ?>
						</h1>

				<?php } elseif (is_year()) { ?>
						<h1 class="page_header--title">
							<span><?php _e( 'Yearly Archives:', 'bonestheme' ); ?></span> <?php the_time('Y'); ?>
						</h1>
				<?php } ?>
			</header>
			
		</div>
	</div>
</section>

<section class="portfolio_stories">
	<div class="container">
		

		<?php if ( have_posts() ) : $count = 0; ?>
			<div class="stories_articles js-infinite-cont">
				<?php while ( have_posts() ) : the_post(); $count++;?>
				  	<article id="post-<?php the_ID(); ?>" <?php post_class('articles_article js-infinite'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
				    	<?php get_template_part('/templates/content','article'); ?>
					</article>
				<?php endwhile; ?>
				<nav class="wp-prev-next hide">
					<ul class="clearfix">
						<li class="prev-link"><?php next_posts_link( __( '&laquo; Older Entries', 'bonestheme' )) ?></li>
						<li class="next-link"><?php previous_posts_link( __( '&laquo; New Entries', 'bonestheme' )) ?></li>
					</ul>
				</nav>
			</div>
		<?php endif; ?>
		<?php wp_reset_query(); ?>
			

	</div>
</section>


<?php get_footer(); ?>
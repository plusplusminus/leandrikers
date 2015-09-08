<?php get_header(); ?>

<?php global $post; ?>

<section class="portfolio_page">
	<div class="row">
		<div class="col-xs-12 col-md-8 col-md-offset-2">
			<header class="page_header">
				<h1 class="page_header--title">
					<?php _e("Search Results for","bonestheme"); ?>:</span> <?php echo esc_attr(get_search_query()); ?>
				</h1>
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
<?php 

/* Template Name: Portfolio */

?>

<?php get_header(); ?>

	<?php get_template_part('templates/portfolio/portfolio','header'); ?>

	<?php global $post; ?>

	<?php

		$paged = 1;
		if ( get_query_var( 'paged' ) ) { $paged = get_query_var( 'paged' ); }
		if ( get_query_var( 'page' ) ) { $paged = get_query_var( 'page' ); }
		$paged = intval( $paged );

		$category = get_post_meta($post->ID,'_ppm_category_select',true);

		$query_args = array(
			'post_type' => 'post',
			'paged' => $paged,
			'cat' => $category[0],
			'posts_per_page'=>2
		);

		query_posts($query_args);

	?>

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
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
		'cat'=> $category[0]
	);

	$query =  new WP_Query($query_args);

?>

<section class="about_stories">
	<div class="container">
		

		<?php if ( $query->have_posts() ) : $count = 0; ?>
			<div class="stories_articles js-infinite-cont">
				<?php while ( $query->have_posts() ) : $query->the_post(); $count++;?>
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
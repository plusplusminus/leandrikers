<div class="slide_article">
	<div class="article_content">
		<h3 class="article_content--title"><a href="<?php the_permalink();?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
		<div class="article_content--excerpt">
			<?php the_excerpt(); ?>
		</div>
		<a href="<?php the_permalink(); ?>" class="article_content--btn" title="<?php the_title(); ?>">View More <span class="icon icon-arrow"></span></a> 
	</div>
</div>
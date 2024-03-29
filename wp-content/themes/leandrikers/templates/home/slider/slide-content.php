<div class="slide_article">
	<div class="article_content">
		<h3 class="article_content--title"><a href="<?php the_permalink();?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
		<?php $quote = get_post_meta($post->ID,'_ppm_quote_text',true); ?>
		<?php $cite = get_post_meta($post->ID,'_ppm_quote_cite',true); ?>
		<?php if ($quote) : ?>

			<blockquote class="article_content--quote">
				<?php echo esc_html($quote); ?>
				<?php if ($cite) : ?>
					<cite class="article_quote--cite">
						<?php echo esc_html($cite); ?>
					</cite>
				<?php endif; ?>
			</blockquote>

		<?php endif; ?>
		<a href="<?php the_permalink(); ?>" class="article_content--btn" title="<?php the_title(); ?>">View More <svg class="icon-arrow"><use xlink:href="<?php echo get_stylesheet_directory_uri();?>/library/images/icons.svg#icon-arrow"></use></svg></a> 
	</div>
</div>
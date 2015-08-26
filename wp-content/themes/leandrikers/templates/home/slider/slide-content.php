<div class="slide_article">
	<div class="article_content">
		<h3 class="article_content--title"><a href="<?php the_permalink();?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
		<?php $quote = get_post_meta($post->ID,'_ppm_quote_text',true); ?>
		<?php $cite = get_post_meta($post->ID,'_ppm_quote_cite',true); ?>
		<?php if ($quote) : ?>

			<blockquote class="article_content--quote">
				<?php echo esc_html($quote); ?>
			</blockquote>
			<?php if ($cite) : ?>
				<cite class="article_quote--cite">
					- <?php echo esc_html($cite); ?>
				</cite>
			<?php endif; ?>

		<?php endif; ?>
		<a href="<?php the_permalink(); ?>" class="article_content--btn" title="<?php the_title(); ?>">View More <span class="icon icon-arrow"></span></a> 
	</div>
</div>
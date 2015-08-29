<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); ?>
<div class="article_image js-height">
	<?php the_post_thumbnail('full',array('class'=>'article_image--img')); ?>
	<a href="<?php the_permalink(); ?>" title="<?php the_title();?>"></a>
</div>
<div class="article_content js-height">
	<div class="article_content--inner">
		<?php $quote = get_post_meta($post->ID,'_ppm_quote_text',true); ?>
		<?php if ($quote) : ?>
			<blockquote class="article_content--quote">
				<?php echo esc_html($quote); ?>
			</blockquote>
			<hr>
		<?php endif; ?>
		<h3 class="article_content--title"><a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><?php the_title(); ?></a></h3>

		<span class="article_content--meta"><?php the_time( get_option( 'date_format' ) ); ?> </span>

		<div class="article_content--more">
			<a href="<?php the_permalink(); ?>" class="article_content--btn">Read More</a>
		</div>
	</div>
</div>

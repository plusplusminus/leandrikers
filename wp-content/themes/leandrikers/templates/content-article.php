<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); ?>
<?php $cite = get_post_meta($post->ID,'_ppm_quote_cite',true); ?>

<div class="article_image js-height" style="background-image:url('<?php echo $image[0]; ?>');min-height:550px;">
	<a href="<?php the_permalink(); ?>" title="<?php the_title();?>">
		<?php the_post_thumbnail('full',array('class'=>'contact_image--img hide')); ?>
	</a>
</div>
<div class="article_content js-height">
	<div class="article_content--inner">
		<?php $quote = get_post_meta($post->ID,'_ppm_quote_text',true); ?>
		<?php if ($quote) : ?>
			<blockquote class="article_content--quote">
				<?php echo esc_html($quote); ?>
				<?php if ($cite) : ?>
					<cite class="article_quote--cite">
						<?php echo esc_html($cite); ?>
					</cite>
				<?php endif; ?>
			</blockquote>
			<hr>
		<?php endif; ?>
		<h3 class="article_content--title"><a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><?php the_title(); ?></a></h3>

		<span class="article_content--meta"><?php the_time( get_option( 'date_format' ) ); ?> </span>

		<div class="article_content--more">
			<a href="<?php the_permalink(); ?>" class="article_content--btn">Read More <svg class="icon-arrow"><use xlink:href="<?php echo get_stylesheet_directory_uri();?>/library/images/icons.svg#icon-arrow"></use></svg></a>
		</div>
	</div>
</div>

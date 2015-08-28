<?php global $post; ?>

<section class="page_about">
	<div class="container">
		<div class="about_profile">

			<div class="profile_image">
				<?php the_post_thumbnail('large',array('class'=>'profile_image--img')); ?>
			</div>

			<div class="profile_content">

				<main class="content_page">
					<div class="row">
						<div class="col-xs-12 col-md-8 col-md-offset-2">
							<header class="page_header">
								<h1 class="page_header--title"><?php the_title(); ?>
							</header>
							<article id="post-<?php the_ID(); ?>" <?php post_class('article_post clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting"> 
							
								<?php if ( have_posts() ) : ?>

									<?php while ( have_posts() ) : the_post(); ?>
										<div class="page_content">
											<div class="page_entry clearfix">
												<?php the_content(); ?>
											</div>
										</div>
									<?php endwhile; ?>
								<?php endif; ?>
								<?php wp_reset_query(); ?>
							
							</article><?php // end #wrapper ?>
						</div>
					</div>
				</main>
	            
			</div>
		</div>
	</div>
</section>
<?php get_header(); ?>

<div class="front-page-wrapper">
		<div class="row">
			<div class="archive-top-ads">
			<?php if ( is_active_sidebar( 'archive_top_ads' ) ) : ?>
				
				<?php dynamic_sidebar( 'archive_top_ads' ); ?>
				<?php endif; ?>
		</div>
			<?php get_template_part('page-details');?>
			
			<div class="col-80">
					<div class="page-cm post-page">
							<?php while ( have_posts() ): the_post(); ?>
							<?php the_content(); ?>
							<?php endwhile; ?>
					</div>
					<div class="ad-below-comment">
			<?php if ( is_active_sidebar( 'ad-below-comment' ) ) : ?>
				
				<?php dynamic_sidebar( 'ad-below-comment' ); ?>
				<?php endif; ?>
		</div>
					<div class="related-col">
						<h3><i class="fa fa-hand-o-right" aria-hidden="true"></i> YOU MAY ALSO LIKE</h3></br>
						<?php get_template_part('related-posts-single');?>
					</div>
					<?php get_sidebar(2); ?>
			</div>
			
			
		</div>
</div>

<?php get_footer(); ?>
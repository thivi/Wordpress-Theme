<?php get_header(); ?>
	
	<div class="front-page-wrapper">
		<div class="archive-top-ads">
			<?php if ( is_active_sidebar( 'archive_top_ads' ) ) : ?>
				
				<?php dynamic_sidebar( 'archive_top_ads' ); ?>
				<?php endif; ?>
		</div>
		<div class="page-top">
			<?php get_template_part('page-details');?>
		</div>
		
		<?php get_template_part('inc/recent-text-cat');?>
		<div class="row">
			<div class="archive-below-recent-ads">
				<?php if ( is_active_sidebar( 'archive-below-recent-ads' ) ) : ?>
				
				<?php dynamic_sidebar( 'archive-below-recent-ads' ); ?>
				<?php endif; ?>
				</div>
			<?php get_template_part('inc/recent-archive');?>
			<?php get_template_part('inc/trend-archive');?>
			<?php get_template_part('inc/popular-archive');?>
			
		</div>
	</div>
	
<?php get_footer(); ?>

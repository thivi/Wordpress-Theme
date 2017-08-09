<?php get_header(); ?>
	
	<?php get_template_part('inc/latest-series')?>
	<div class="front-page-wrapper">
		<?php get_template_part('inc/recent-text');?>
		<div class="first-row">
			<?php get_template_part('inc/front-above-scroll'); ?>	
			<?php get_template_part('inc/buzzing'); ?>
		</div>
			
			<div class="row">
				<div class="front-below-buz-ads">
					<?php if ( is_active_sidebar( 'index_below_buz_ads' ) ) : ?>
					
					<?php dynamic_sidebar( 'index_below_buz_ads' ); ?>
					
					<?php endif; ?>
				
				</div>
				<?php get_template_part('inc/categories'); ?>
				<?php get_template_part('inc/popular');?>
				
				<?php get_sidebar()?>
			</div>
	</div>
	
<?php get_footer(); ?>

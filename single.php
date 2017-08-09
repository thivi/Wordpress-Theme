<?php get_header(); ?>

<div class="front-page-wrapper">
		<div class="row">
			<div class="archive-top-ads">
			<?php if ( is_active_sidebar( 'archive_top_ads' ) ) : ?>
				
				<?php dynamic_sidebar( 'archive_top_ads' ); ?>
				<?php endif; ?>
		</div>
			<?php get_template_part('page-details');?>
			
			<div class="post-page col-80">
				<?php while ( have_posts() ): the_post(); ?>
				
				<div class="<?php post_class(); ?>">
					<div class="post-head">
						<div class="date-post">
							<div class="post-date"><?php the_time(get_option('date_format')); ?></div>
							<div class="post-modify">Last Updated: <?php the_modified_time('F j, Y'); ?></div>
						</div>
						<div class="clear-all"></div>
					
						<div class="player-box terms-box">
							<?php the_terms( $post->ID,'player','Players: ' );?>
						</div>
						<div class="series-box terms-box">
							<?php the_terms( $post->ID,'series' );?>
						</div>
						<div class="clear-all"></div>
						<h1><?php the_title(); ?></h1>
					
						<span class="post-avatar"><?php echo get_avatar(get_the_author_meta('user_email'),'128'); ?></span><span class="author-name"><?php the_author_posts_link(); ?></span><span class="author-tweet"><?php 
								$twitter=get_the_author_meta('twitter');
								if ($twitter=="") {echo "";}
								else{
									echo '<a href="';
									echo 'http://twitter.com/'; 
									echo the_author_meta('twitter'); 
									echo '"';
									echo 'target=';
									echo "_blank";
									echo '>';
									echo '<i class="fa fa-twitter"></i>';
									echo '@';
									echo the_author_meta('twitter'); 
									echo '</a>';
									
									}
							?> 
						</span>
						<div class="short-desc"><?php the_field('short_description'); ?></div>
						<?php get_template_part('inc/sharrre');?>
					</div>
					
					<?php the_content(); ?>	
				<div class="post-navigation">
						<?php 
						
								$defaults = array(
								'before'           => '<p class="article-pagination">',
								'after'            => '</p>',
								'link_before'      => '<div class="post-page-link">',
								'link_after'       => '</div>',
								'next_or_number'   => 'next',
								'separator'        => '',
								'nextpagelink'     => __( '<span class="post-navi"><div class="page-next">Next</div><i class="fa fa-arrow-circle-right fa-2x" aria-hidden="true"></i></span>' ),
								'previouspagelink' => __( '<span class="post-navi"><i class="fa fa-arrow-circle-left fa-2x" aria-hidden="true"></i><div class="page-prev">Previous</div></span>' ),
								'pagelink'         => '%',
								'echo'             => 1
								);
								wp_link_pages( $defaults ); ?>					
						<?php endwhile; ?>
				</div>
			
						<div class="bing-ads">
			<?php if ( is_active_sidebar( 'bing-ads' ) ) : ?>
				
				<?php dynamic_sidebar( 'bing-ads' ); ?>
				<?php endif; ?>
		</div>
					<div class="post-bottom">
						<?php the_tags('<p class="post-tags"><span>'.__('Tags:','hueman').'</span> ','','</p>'); ?>
						<a href=# name="comments"></a>
						<?php get_template_part('comments'); ?>
					</div>
				</div>	
					
			</div>
		
				

			<?php get_sidebar(2); ?>
			<div class="ad-below-comment col-80">
			<?php if ( is_active_sidebar( 'ad-below-comment' ) ) : ?>
				
				<?php dynamic_sidebar( 'ad-below-comment' ); ?>
				<?php endif; ?>
		</div>
			<div class="related-col col-80">
				<h3><i class="fa fa-hand-o-right" aria-hidden="true"></i> YOU MAY ALSO LIKE</h3></br>
				<?php get_template_part('related-posts-single');?>
			</div>
			
			
			
		</div>
		
		
	</div>



<?php get_footer(); ?>
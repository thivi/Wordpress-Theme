<div class="row">
		<?php
			$newsname='news';
			$news=array(
				'category_name'=>$newsname,
				'posts_per_page'=>6
				
				
				);
			
			$querynews= new WP_Query($news);?>
			<?php $count=1;?>
			<?php while ( $querynews->have_posts() ): $querynews->the_post(); ?>
				<?php if($count==1):?>
					<div class="col-40">
						<h3 class="top-h topic-head"><i class="fa fa-newspaper-o"></i>&nbspLatest News</h3>
						<?php get_template_part('content-six'); ?>
					</div>
					<div class="col-40">
					<h3 class="top-h topic-head">&nbsp</h3>
				<?php else:?>
						
							<?php get_template_part('content-two-small'); ?>
						
					
				<?php endif?>
				<?php $count++;?>
			<?php endwhile; ?>
			<?php if ($querynews->have_posts()){?>
				<h4 class="more-news"><a href="<?php echo get_category_link( get_cat_ID( 'news' ) );?>">MORE NEWS</a></h4>
					</div>
			<?php }?>
		<?php
			$featured='machans-picks';
			$mp=array(
				'category_name'=>$featured,
				'posts_per_page'=>1
				
				
				);
			
			$querymp= new WP_Query($mp);?>
		
		<div class="col-100-right col-20">
			<h3 class="top-h topic-head"><i class="fa fa-certificate"></i>&nbspFeatured</h3>
			<?php
				while($querymp->have_posts()):$querymp->the_post();
					get_template_part('content-four');
				endwhile;
			?>
		</div>
</div>
		
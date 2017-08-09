<div class="col-r-l col-left col-40 col-40-big">
	<?php
	$analysis='analysis';
	$opinions='opinions';
	$slideshows='slideshows';
	$stories='cricstories';
	$stats='stats';
	$misc='humour,papare-army-rants,trivias,memes-of-the-match,tweets-of-the-match,videos';
			
			$mp=array(
				'category_name'=>$opinions,
				'posts_per_page'=>4
				
				
				);
			
			$querymp= new WP_Query($mp);?>
			<a href="<?php echo get_category_link( get_cat_ID( $opinions ) ); ?>"><h3 class="cat-opinion cat-head-cat cat-head topic-head"><i class="fa fa-microphone"></i>&nbspOpinions</h3></a>
			<?php $count=1;?>
			<?php while ( $querymp->have_posts() ): $querymp->the_post(); ?>
				<?php if($count==1):?>
					<?php get_template_part('content-six'); ?>
				<?php else:?>
					<?php get_template_part('content-two-small'); ?>					
				<?php endif?>
				<?php $count++;?>
			<?php endwhile; ?>
			<a class="more more-o" href="<?php echo get_category_link( get_cat_ID( $opinions ) ); ?>">MORE</a>
<!--------------------------------------------------------------->

<?php
			
			$mp=array(
				'category_name'=>$analysis,
				'posts_per_page'=>4
				
				
				);
			
			$querymp= new WP_Query($mp);?>
			<a href="<?php echo get_category_link( get_cat_ID( $analysis ) ); ?>"><h3 class="cat-analysis cat-head-cat cat-head topic-head"><i class="fa fa-binoculars"></i>&nbspAnalysis</h3></a>
			<?php $count=1;?>
			<?php while ( $querymp->have_posts() ): $querymp->the_post(); ?>
				<?php if($count==1):?>
					<?php get_template_part('content-six'); ?>
				<?php else:?>
					<?php get_template_part('content-two-small'); ?>					
				<?php endif?>
				<?php $count++;?>
			<?php endwhile; ?>
			<a class="more more-a" href="<?php echo get_category_link( get_cat_ID( $analysis ) ); ?>">MORE</a>
<!------------------------------------------------------------------->
<?php
			
			$mp=array(
				'category_name'=>$slideshows,
				'posts_per_page'=>4
				
				
				);
			
			$querymp= new WP_Query($mp);?>
			<a href="<?php echo get_category_link( get_cat_ID( $slideshows ) ); ?>"><h3 class="cat-slideshows cat-head-cat cat-head topic-head"><i class="fa fa-th"></i>&nbspSlideshows</h3></a>
			<?php $count=1;?>
			<?php while ( $querymp->have_posts() ): $querymp->the_post(); ?>
				<?php if($count==1):?>
					<?php get_template_part('content-six'); ?>
				<?php else:?>
					<?php get_template_part('content-two-small'); ?>					
				<?php endif?>
				<?php $count++;?>
			<?php endwhile; ?>
			<a class="more more-s" href="<?php echo get_category_link( get_cat_ID( $slideshows ) ); ?>">MORE</a>
<!--------------------------------------------------------------------->
<?php
			$mp=array(
				'category_name'=>$stats,
				'posts_per_page'=>4
				
				
				);
			
			$querymp= new WP_Query($mp);?>
			<a href="<?php echo get_category_link( get_cat_ID( $stats ) ); ?>"><h3 class="cat-stats cat-head-cat cat-head topic-head"><i class="fa fa-bar-chart"></i>&nbspStatistics</h3></a>
			<?php $count=1;?>
			<?php while ( $querymp->have_posts() ): $querymp->the_post(); ?>
				<?php if($count==1):?>
					<?php get_template_part('content-six'); ?>
				<?php else:?>
					<?php get_template_part('content-two-small'); ?>					
				<?php endif?>
				<?php $count++;?>
			<?php endwhile; ?>
			<a class="more more-st" href="<?php echo get_category_link( get_cat_ID( $stats ) ); ?>">MORE</a>
<!--------------------------------------------------------------------->
<?php
			$mp=array(
				'category_name'=>$stories,
				'posts_per_page'=>4
				
				
				);
			
			$querymp= new WP_Query($mp);?>
			<?php if($querymp->have_posts()):?>
			<a href="<?php echo get_category_link( get_cat_ID( $stories ) ); ?>"><h3 class="cat-stories cat-head-cat cat-head topic-head"><i class="fa fa-university" aria-hidden="true"></i>&nbspCricstories</h3></a>
			<?php endif?>
			<?php $count=1;?>
			<?php while ( $querymp->have_posts() ): $querymp->the_post(); ?>
				<?php if($count==1):?>
					<?php get_template_part('content-six'); ?>
				<?php else:?>
					<?php get_template_part('content-two-small'); ?>					
				<?php endif?>
				<?php $count++;?>
			<?php endwhile; ?>
			<?php if($querymp->have_posts()):?>
			<a class="more more-sto" href="<?php echo get_category_link( get_cat_ID( $stories ) ); ?>">MORE</a>
			<?php endif?>
			
<!--------------------------------------------------------------------->
<?php
			$mp=array(
				'category_name'=>$misc,
				'posts_per_page'=>4
				
				
				);
			
			$querymp= new WP_Query($mp);?>
			<h3 class="cat-misc cat-head-cat cat-head topic-head"><i class="fa fa-hashtag"></i>&nbspJustForFun</h3>
			<?php $count=1;?>
			<?php while ( $querymp->have_posts() ): $querymp->the_post(); ?>
				<?php if($count==1):?>
					<?php get_template_part('content-six'); ?>
				<?php else:?>
					<?php get_template_part('content-two-small'); ?>					
				<?php endif?>
				<?php $count++;?>
			<?php endwhile; ?>
			<a class="more more-m" href="<?php echo get_category_link( get_cat_ID( 'videos' ) ); ?>">MORE VIDEOS</a>
			<a class="more more-m" href="<?php echo get_category_link( get_cat_ID( 'humour' ) ); ?>"> MORE HUMOUR</a>
			<a class="more more-m" href="<?php echo get_category_link( get_cat_ID( 'trivias' ) ); ?>"> MORE TRIVIAS</a>
</div>
	
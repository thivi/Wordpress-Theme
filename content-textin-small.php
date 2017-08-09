
	
		<a class="block-text"href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>">
		<div class="thumb-text">
		<?php if ( has_post_thumbnail() ): ?>
			<?php the_post_thumbnail('full'); ?>
		<?php else:?>
			<img src="<?php echo get_template_directory_uri (); echo "/img/placeholder.png"; ?>">
		<?php endif ?>
			
		<div class="content-text-text">
			
			<h3 class="six-con"><?php the_title(); ?></h3>
			
		</div>
		
		
		</div>
		</a>
	
	








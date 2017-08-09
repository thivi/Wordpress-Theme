
	
		<a class="block-text"href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>">
		<div class="thumb-text">
		<?php if ( has_post_thumbnail() ): ?>
			<?php the_post_thumbnail('full'); ?>
		<?php else:?>
			<img src="<?php echo get_template_directory_uri (); echo "/img/placeholder.png"; ?>">
		<?php endif ?>
			
		<div class="content-text-text">
			<div><p class="six-date date"><?php the_time('j M, Y'); ?></p><p class="six-author author">By&nbsp<?php the_author(); ?> </p></div>
			<h2 class="six-con"><?php the_title(); ?></h2>
			<p class="excerpt"><?php the_field('short_description'); ?></p>
		</div>
		
		
		</div>
		</a>
	
	








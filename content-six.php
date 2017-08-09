<div class="content-six">
	
	<div class="thumb">
	<?php if ( has_post_thumbnail() ): ?>
		<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_post_thumbnail('full'); ?></a>
	<?php else:?>
		<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><img src="<?php echo get_template_directory_uri (); echo "/img/placeholder.png"; ?>"></a>
	<?php endif ?>
		<div class="reads"><i class="fa fa-eye" aria-hidden="true"></i>&nbsp&nbsp<?php echo pvc_get_post_views( $post->ID )?></div>
		<div class="cat-box"><?php the_category(' / '); ?></div>
	</div>
	
	<div class="content-six-text">
		<div><p class="six-date date"><?php the_time('j M, Y'); ?></p><p class="six-author author">By&nbsp<?php the_author(); ?> </p></div>
		<h2 class="six-con"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
		<p class="excerpt"><?php the_field('short_description'); ?></p>
	</div>
</div>







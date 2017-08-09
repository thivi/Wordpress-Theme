
<table class="hori-con content-six">
<tr>
	<td class="content-six-text">
		<p class="date"><?php the_time('j M, Y'); ?></p>
		<h3 class="hori-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
		<p class="author">By&nbsp<?php the_author(); ?> </p>
		<div class="excerpt"><?php echo excerpt(30); ?></div>
	</td>
	<td class="thumb-hori">
		<?php if ( has_post_thumbnail() ): ?>
		<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_post_thumbnail('full'); ?></a>
		<?php else:?>
		<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><img src="<?php echo get_template_directory_uri (); echo "/img/placeholder.png"; ?>"></a>
		<?php endif ?>
		<div class="reads"><i class="fa fa-eye" aria-hidden="true"></i>&nbsp&nbsp<?php echo pvc_get_post_views( $post->ID )?></div>
		<div class="cat-box"><?php the_category(' / '); ?></div>

	</td>
</tr>
</table>






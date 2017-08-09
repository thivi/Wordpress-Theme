<table class="small-hori content-six">
<tr>
	<td class="thumb-small">
		<?php if ( has_post_thumbnail() ): ?>
		<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_post_thumbnail('full'); ?></a>
	<?php else:?>
		<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><img src="<?php echo get_template_directory_uri (); echo "/img/placeholder.png"; ?>"></a>
	<?php endif ?>
	</td>
	<td class="content-six-text content-small-text">
		<p class="date"><?php the_time('j M, Y'); ?></p>
		<p class="small-h"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></p>
	</td>
</tr>
</table>







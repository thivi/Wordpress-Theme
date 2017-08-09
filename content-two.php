<div class="hori-con content-six">
	<div class="content-six-text">
		<p class="date"><?php the_time('j M, Y'); ?></p><p><i class="fa fa-eye" aria-hidden="true"></i>&nbsp&nbsp<?php echo pvc_get_post_views( $post->ID )?></p>
		<h3><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
		<p class="author">By&nbsp<?php the_author(); ?> </p>
		<div class="excerpt"><?php echo excerpt(30); ?></div>
	</div>
</div>







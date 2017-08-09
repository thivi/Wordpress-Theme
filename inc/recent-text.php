<div class="row">
	<div class="col-rt col-50-top col-50">
	<?php $recent=array(
	'posts_per_page'=>1);
	
	$query=new WP_Query($recent);
	while ($query->have_posts()):$query->the_post();
	get_template_part('content-textin');
	endwhile;
	?>
	</div>
	<div class="col-25">
	<?php $recent=array(
	'posts_per_page'=>2,
	'offset'=>1);
	
	$query=new WP_Query($recent);
	while ($query->have_posts()):$query->the_post();
	get_template_part('content-textin-small');
	endwhile;
	?>
	</div>
	<div class="col-25 col-right-last">
	<?php $recent=array(
	'posts_per_page'=>2,
	'offset'=>3);
	
	$query=new WP_Query($recent);
	while ($query->have_posts()):$query->the_post();
	get_template_part('content-textin-small');
	endwhile;
	?>
	</div>
</div>
<?php 
				$catid=get_query_var('cat')?get_query_var('cat'):-1;
				$tagid=get_query_var('tag_id')?get_query_var('tag_id'):-1;
				$playerid=get_query_var('player')?get_query_var('player'):-1;
				$seriesid=get_query_var('series')?get_query_var('series'):-1;
				
?>
<div class="row">
	<div class="col-50-top col-rt col-50">
	<?php 
	if($catid!=-1){
		$recent=array(
		'posts_per_page'=>1,
		'cat'=>$catid,
		);
		
		$query=new WP_Query($recent);
		while ($query->have_posts()):$query->the_post();
		get_template_part('content-textin');
		endwhile;
	}
	if($tagid!=-1){
		$recent=array(
		'posts_per_page'=>1,
		'tag_id'=>$tagid,
		);
		
		$query=new WP_Query($recent);
		while ($query->have_posts()):$query->the_post();
		get_template_part('content-textin');
		endwhile;
	}
	if($playerid!=-1){
		$recent=array(
		'posts_per_page'=>1,
		'player'=>$playerid
		);
		
		$query=new WP_Query($recent);
		while ($query->have_posts()):$query->the_post();
		get_template_part('content-textin');
		endwhile;
	}
	if($seriesid!=-1){
		$recent=array(
		'posts_per_page'=>1,
		'series'=>$seriesid
		);
		
		$query=new WP_Query($recent);
		while ($query->have_posts()):$query->the_post();
		get_template_part('content-textin');
		endwhile;
	}
	?>
	</div>
	<div class="col-25">
	<?php 
	if($catid!=-1){
		$recent=array(
		'posts_per_page'=>2,
		'cat'=>$catid,
		'offset'=>1);
		
		$query=new WP_Query($recent);
		while ($query->have_posts()):$query->the_post();
		get_template_part('content-textin-small');
		endwhile;
	}
	if($tagid!=-1){
		$recent=array(
		'posts_per_page'=>2,
		'tag_id'=>$tagid,
		'offset'=>1);
		
		$query=new WP_Query($recent);
		while ($query->have_posts()):$query->the_post();
		get_template_part('content-textin-small');
		endwhile;
	}
	if($playerid!=-1){
		$recent=array(
		'posts_per_page'=>2,
		'player'=>$playerid,
		'offset'=>1
		);
		
		$query=new WP_Query($recent);
		while ($query->have_posts()):$query->the_post();
		get_template_part('content-textin-small');
		endwhile;
	}
	if($seriesid!=-1){
		$recent=array(
		'posts_per_page'=>2,
		'series'=>$seriesid,
		'offset'=>1
		);
		
		$query=new WP_Query($recent);
		while ($query->have_posts()):$query->the_post();
		get_template_part('content-textin-small');
		endwhile;
	}
	?>
	</div>
	<div class="col-25 col-right-last">
	<?php 
	if($catid!=-1){
		$recent=array(
		'posts_per_page'=>2,
		'cat'=>$catid,
		'offset'=>3);
		
		$query=new WP_Query($recent);
		while ($query->have_posts()):$query->the_post();
		get_template_part('content-textin-small');
		endwhile;
	}
	if($tagid!=-1){
		$recent=array(
		'posts_per_page'=>2,
		'tag_id'=>$tagid,
		'offset'=>3);
		
		$query=new WP_Query($recent);
		while ($query->have_posts()):$query->the_post();
		get_template_part('content-textin-small');
		endwhile;
	}
	if($playerid!=-1){
		$recent=array(
		'posts_per_page'=>2,
		'player'=>$playerid,
		'offset'=>3
		);
		
		$query=new WP_Query($recent);
		while ($query->have_posts()):$query->the_post();
		get_template_part('content-textin-small');
		endwhile;
	}
	if($seriesid!=-1){
		$recent=array(
		'posts_per_page'=>2,
		'series'=>$seriesid,
		'offset'=>3
		);
		
		$query=new WP_Query($recent);
		while ($query->have_posts()):$query->the_post();
		get_template_part('content-textin-small');
		endwhile;
	}
	?>
	</div>
</div>
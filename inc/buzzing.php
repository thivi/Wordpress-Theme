
<div class="row">
<hr>
<h3 class="topic-head" ><i class="fa fa-bolt"></i>&nbspBuzzing</h3>
<?php
	$arg=array(
		'posts_per_page'=>-1,
		'orderby'=>'post_views'
	);
	$querybuz=new WP_Query($arg);
	
	if ($querybuz->found_posts>5)
	{
		$day=1; 
		do{
		$buzz=array(
		'date_query'=>array(array('after'=>date('d-m-Y', strtotime("-".$day."week")))),
		'orderby'=>'post_views',
		'posts_per_page'=>5
		
		);
		$querybuz=new WP_Query($buzz);
		$day++;
		}while($querybuz->post_count<5);
	}
	
	?>
	
	<?php
				while($querybuz->have_posts()):$querybuz->the_post();
					echo '<div class="col-20">';
					get_template_part('content-buz');
					echo '</div>';
				endwhile;
			?>


</div>
<hr>
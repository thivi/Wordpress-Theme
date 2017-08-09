<div class="col-r-l col-right-resp col-40 col-40-big">
	<h3 class="cat-pop cat-head-cat cat-head topic-head"><i class="fa fa-line-chart"></i>&nbspPopular</h3>
	<?php
	$args=array(
		'posts_per_page'=>-1,
		'orderby'=>'posts_views'
	);
	$querybuz=new WP_Query($args);
	if ($querybuz->found_posts>14){
		$no;
		$args=array('post_type'=>'post', 'posts_per_page'=>14);
		$check=new WP_Query($args);
		if($check->post_count==14){
						$no=14;
					}
					else{
						$no=$check->post_count;
						
					}
		$days=30; 
		
		do{
		$buzz=array(
		'date_query'=>array(array('after'=>date('d-m-Y', strtotime("-".$days."day")))),
		'orderby'=>'post_views',
		'posts_per_page'=>$no
		
		);
		$querybuz=new WP_Query($buzz);
		$days=$days+1;
		}while($querybuz->post_count<$no);
	}
	?>
	<?php
	
				while($querybuz->have_posts()):$querybuz->the_post();
					
					get_template_part('content-hori');
					
				endwhile;
	?>
</div>
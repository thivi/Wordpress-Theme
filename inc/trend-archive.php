<div class="col-r-l col-right-resp col-40 col-40-big">
			<?php	
				echo '<h3 class="cat-trend cat-head-cat cat-head top-h topic-head" ><i class="fa fa-bolt"></i>&nbspBuzzing</h3>';
				$catid=get_query_var('cat')?get_query_var('cat'):-1;
				$tagid=get_query_var('tag_id')?get_query_var('tag_id'):-1;
				$playerid=get_query_var('player')?get_query_var('player'):-1;
				$seriesid=get_query_var('series')?get_query_var('series'):-1;
						
				
				$no;
				if ($catid!=-1){
					
					$noposts= get_term($catid)->count;
					if($noposts>=11){
						$no=11;
					}
					else
						$no=$noposts;
					$days=7; 
					do{
					$buzz=array(
					
					'date_query'=>array(array('after'=>date('d-m-Y', strtotime("-".$days."day")))),
					'orderby'=>'post_views',
					'posts_per_page'=>$no,
					'cat'=>$catid
					
					);
					
					$query=new WP_Query($buzz);
					$days=$days+7;
					}while($query->post_count<$no);
				
				}
				
				if ($tagid!=-1){
					$noposts= get_term($tagid)->count;
					if($noposts>=11){
						$no=11;
					}
					else
						$no=$noposts;
					$days=7; 
					do{
					$buzz=array(
						
					'date_query'=>array(array('after'=>date('d-m-Y', strtotime("-".$days."day")))),
					'orderby'=>'post_views',
					'posts_per_page'=>$no,
					'tag_id'=>$tagid
					
					);
					
					$query=new WP_Query($buzz);
					$days=$days+7;
					}while($query->post_count<$no);
				}
				if ($playerid!=-1){
					$noposts= get_term_by('slug',$playerid,'player')->count;
					if($noposts>=11){
						$no=11;
					}
					else
						$no=$noposts;
					$days=7; 
					do{
					$buzz=array(
						
					'date_query'=>array(array('after'=>date('d-m-Y', strtotime("-".$days."day")))),
					'orderby'=>'post_views',
					'posts_per_page'=>$no,
					'player'=>$playerid
					
					);
					
					$query=new WP_Query($buzz);
					$days=$days+7;
					}while($query->post_count<$no);
				}
				if ($seriesid!=-1){
					$noposts= get_term_by('slug',$seriesid,'series')->count;
					
					if($noposts>=11){
						$no=11;
					}
					else
						$no=$noposts;
					$days=7; 
					do{
					$buzz=array(
						
					'date_query'=>array(array('after'=>date('d-m-Y', strtotime("-".$days."day")))),
					'orderby'=>'post_views',
					'posts_per_page'=>$no,
					'series'=>$seriesid
					
					);
					
					$query=new WP_Query($buzz);
					$days=$days+7;
					}while($query->post_count<$no);
				}
				?>
			
			<?php while ( $query->have_posts() ): $query->the_post(); ?>
						<?php get_template_part('content-six-a'); ?>
			<?php endwhile; ?>
		</div>
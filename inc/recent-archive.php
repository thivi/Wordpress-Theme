<div class="col-r-l col-40-big col-left col-40">
	<?php	
				echo '<h3 class="cat-recent top-h cat-head-cat cat-head topic-head"><i class="fa fa-clock-o"></i>&nbspRecent</h3>';
				$catid=get_query_var('cat')?get_query_var('cat'):-1;
				$tagid=get_query_var('tag_id')?get_query_var('tag_id'):-1;
				$playerid=get_query_var('player')?get_query_var('player'):-1;
				$seriesid=get_query_var('series')?get_query_var('series'):-1;

			

				
				if($catid!=-1){
					$args=array(
					'nopaging'=>true,
					'posts_per_page' => 2,
					'cat'=>$catid,
					'paged'=>1,
					);
					$ids=array();			
					$q=new WP_Query($args);
					while ($q->have_posts()){
						$q->the_post();
						$ids[]=get_the_ID();
					}
					$pids=array($ids[0],$ids[1],$ids[2],$ids[3],$ids[4]);
					
					$buzz=array(
					'posts_per_page' => 13,
					'post__not_in'=>$pids,
					'cat'=>$catid,
					"paged"=>(get_query_var('paged') ) ? get_query_var('paged') : 1
					);
					$query=new WP_Query($buzz);
				}
				
				if($tagid!=-1){
					$args=array(
					'nopaging'=>true,
					'posts_per_page' => 2,
					'tag_id'=>$tagid,
					'paged'=>1,
					);
					$ids=array();			
					$q=new WP_Query($args);
					while ($q->have_posts()){
						$q->the_post();
						$ids[]=get_the_ID();
					}
					$pids=array($ids[0],$ids[1],$ids[2],$ids[3],$ids[4]);

					$buzz=array(
					'posts_per_page'=>13,
					
					'post__not_in'=>$pids,
					'tag_id'=>$tagid,
					"paged"=>(get_query_var('paged') ) ? get_query_var('paged') : 1
					);
					$query=new WP_Query($buzz);
				}
				if($playerid!=-1){
					$args=array(
					'nopaging'=>true,
					'posts_per_page' => 2,
					'player'=>$playerid,
					'paged'=>1,
					);
					$ids=array();			
					$q=new WP_Query($args);
					while ($q->have_posts()){
						$q->the_post();
						$ids[]=get_the_ID();
					}
					$pids=array($ids[0],$ids[1],$ids[2],$ids[3],$ids[4]);

					$buzz=array(
					'posts_per_page'=>13,
					
					'post__not_in'=>$pids,
					'player'=>$playerid,
					"paged"=>(get_query_var('paged') ) ? get_query_var('paged') : 1
					);
					$query=new WP_Query($buzz);
				}
				if($seriesid!=-1){
					$args=array(
					'nopaging'=>true,
					'posts_per_page' => 2,
					'series'=>$seriesid,
					'paged'=>1,
					);
					$ids=array();			
					$q=new WP_Query($args);
					while ($q->have_posts()){
						$q->the_post();
						$ids[]=get_the_ID();
					}
					$pids=array($ids[0],$ids[1],$ids[2],$ids[3],$ids[4]);

					$buzz=array(
					'posts_per_page'=>13,
					
					'post__not_in'=>$pids,
					'series'=>$seriesid,
					"paged"=>(get_query_var('paged') ) ? get_query_var('paged') : 1
					);
					$query=new WP_Query($buzz);
				}
				
	?>
			<?php while ( $query->have_posts() ): $query->the_post(); ?>
						<?php get_template_part('content-hori'); ?>
			<?php endwhile; ?>
			<?php  $args=array(
				'total'=>$query->max_num_pages,
				'current'=>(get_query_var('paged') ) ? get_query_var('paged') : 1,
				'type'=>'list',
				'next_text'=>'<i class="fa fa-arrow-right" aria-hidden="true"></i>',
				'prev_text'=>'<i class="fa fa-arrow-left" aria-hidden="true"></i>'
			);
			echo paginate_links( $args ); ?>
</div>
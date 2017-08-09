<div class="col-100-right col-20-big col-right col-20">
			<?php	
				$catid=get_query_var('cat')?get_query_var('cat'):-1;
				$tagid=get_query_var('tag_id')?get_query_var('tag_id'):-1;
				$playerid=get_query_var('player')?get_query_var('player'):-1;
				$seriesid=get_query_var('series')?get_query_var('series'):-1;
				$catname=get_cat_name($catid);
				
				
				if ($catid!=-1){
					if($catid!=97){
					$catmach="'".$catname."+".'machans-picks'."'";
					$feat=array(
					
					'category_name'=>$catmach,
					'posts_per_page'=>3
					);
					$q=new WP_Query($feat);
					$d=2;
					
					if ($q->have_posts()):
						echo '<h3 class="cat-popa cat-head-cat cat-head top-h topic-head"><i class="fa fa-certificate"></i>&nbspFeatured</h3>';
					endif;
					
					while ($q->have_posts()):$q->the_post();
						if($d%2==0):
							get_template_part('content-four'); 
						else:
							get_template_part('content-four-blue'); 
						endif;
						$d++;
					endwhile; 
					}
					if ($catid!=97){
						if ($q->have_posts()):
							echo '<h3 class="cat-head-cat cat-head topic-head"><i class="fa fa-line-chart"></i>&nbspPopular</h3>';
						else:
							echo '<h3 class="cat-popa top-h cat-head-cat cat-head topic-head"><i class="fa fa-line-chart"></i>&nbspPopular</h3>';
						endif;
					}
					else{
						echo '<h3 class="cat-popa top-h cat-head-cat cat-head topic-head"><i class="fa fa-line-chart"></i>&nbspPopular</h3>';
					}
					$no;
					$noposts= get_term($catid)->count;
					
				
					if($noposts>=14){
						$no=14;
					}
					else
						$no=$noposts;

					
					$days=30; 
					do{
					$buzz=array(
					
					'date_query'=>array(array('after'=>date('d-m-Y', strtotime("-".$days."day")))),
					'orderby'=>'post_views',
					'posts_per_page'=>$no,
					'cat'=>$catid
					
					);
					$query=new WP_Query($buzz);
					$days=$days+30;
					}while($query->post_count<$no);
				}
				
				if($tagid!=-1){
					if($catid!=97){
					
					$feat=array(
					
					'cat'=>97,
					'tag_id'=>$tagid,
					'posts_per_page'=>3
					);
					$q=new WP_Query($feat);
					$d=2;
					
					if ($q->have_posts()):
						echo '<h3 class="cat-popa cat-head-cat cat-head top-h topic-head"><i class="fa fa-certificate"></i>&nbspFeatured</h3>';
					endif;
					
					while ($q->have_posts()):$q->the_post();
						if($d%2==0):
							get_template_part('content-four'); 
						else:
							get_template_part('content-four-blue'); 
						endif;
						$d++;
					endwhile; 
					}
					
					if ($q->have_posts()):
						echo '<h3 class="cat-head-cat cat-head topic-head"><i class="fa fa-line-chart"></i>&nbspPopular</h3>';
					else:
						echo '<h3 class="cat-popa top-h cat-head-cat cat-head topic-head"><i class="fa fa-line-chart"></i>&nbspPopular</h3>';
					endif;
					
					$no;
					$noposts= get_term($tagid)->count;
					
				
					if($noposts>=14){
						$no=14;
					}
					else
						$no=$noposts;

					$days=30; 
					do{
					$buzz=array(
					
					'date_query'=>array(array('after'=>date('d-m-Y', strtotime("-".$days."day")))),
					'orderby'=>'post_views',
					'posts_per_page'=>$no,
					'tag_id'=>$tagid
					
					);
					$query=new WP_Query($buzz);
					$days=$days+30;
					}while($query->post_count<$no);
				}
				if($playerid!=-1){
					if($catid!=97){
					
					$feat=array(
					
					'cat'=>97,
					'player'=>$playerid,
					'posts_per_page'=>3
					);
					$q=new WP_Query($feat);
					$d=2;
					
					if ($q->have_posts()):
						echo '<h3 class="cat-popa cat-head-cat cat-head top-h topic-head"><i class="fa fa-certificate"></i>&nbspFeatured</h3>';
					endif;
					
					while ($q->have_posts()):$q->the_post();
						if($d%2==0):
							get_template_part('content-four'); 
						else:
							get_template_part('content-four-blue'); 
						endif;
						$d++;
					endwhile; 
					}
					
					if ($q->have_posts()):
						echo '<h3 class="cat-head cat-head-cat topic-head"><i class="fa fa-line-chart"></i>&nbspPopular</h3>';
					else:
						echo '<h3 class="cat-popa top-h cat-head-cat cat-head topic-head"><i class="fa fa-line-chart"></i>&nbspPopular</h3>';
					endif;
					
					$no;
					
					$noposts= get_term_by('slug',$playerid,'player')->count;
					
				
					if($noposts>=14){
						$no=14;
					}
					else
						$no=$noposts;
					
					$days=30; 
					do{
					$buzz=array(
					
					'date_query'=>array(array('after'=>date('d-m-Y', strtotime("-".$days."day")))),
					'orderby'=>'post_views',
					'posts_per_page'=>$no,
					'player'=>$playerid
					
					);
					$query=new WP_Query($buzz);
					$days=$days+30;
					}while($query->post_count<$no);
				}
				if($seriesid!=-1){
					if($catid!=97){
					
					$feat=array(
					
					'cat'=>97,
					'series'=>$seriesid,
					'posts_per_page'=>3
					);
					$q=new WP_Query($feat);
					$d=2;
					
					if ($q->have_posts()):
						echo '<h3 class="cat-popa cat-head-cat cat-head top-h topic-head"><i class="fa fa-certificate"></i>&nbspFeatured</h3>';
					endif;
					
					while ($q->have_posts()):$q->the_post();
						if($d%2==0):
							get_template_part('content-four'); 
						else:
							get_template_part('content-four-blue'); 
						endif;
						$d++;
					endwhile; 
					}
					
					if ($q->have_posts()):
						echo '<h3 class="cat-head-cat cat-head topic-head"><i class="fa fa-line-chart"></i>&nbspPopular</h3>';
					else:
						echo '<h3 class="cat-popa top-h cat-head-cat cat-head topic-head"><i class="fa fa-line-chart"></i>&nbspPopular</h3>';
					endif;
					
					$no;
					$noposts= get_term_by('slug',$seriesid,'series')->count;
					
				
					if($noposts>=14){
						$no=14;
					}
					else
						$no=$noposts;

					$days=30; 
					do{
					$buzz=array(
					
					'date_query'=>array(array('after'=>date('d-m-Y', strtotime("-".$days."day")))),
					'orderby'=>'post_views',
					'posts_per_page'=>$no,
					'series'=>$seriesid
					
					);
					$query=new WP_Query($buzz);
					$days=$days+30;
					}while($query->post_count<$no);
				}
				?>
			<?php $c=2;?>
			<?php while ( $query->have_posts() ): $query->the_post(); ?>
					<?php if($c%2==0):?>
						<?php get_template_part('content-four'); ?>
					<?php else:?>
						<?php get_template_part('content-four-blue'); ?>
					<?php endif?>
					<?php $c++;?>
			<?php endwhile; ?>
		</div>
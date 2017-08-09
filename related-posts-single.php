<?php
    $c=0;
	$no;
	$args=array('post_type'=>'post');
	$check=new WP_Query($args);
	if($check->post_count>=9){
					$no=9;
				}
				else
					$no=$check->post_count;
	$days=30; 
	do{
	$buzz=array(
	'date_query'=>array(array('after'=>date('d-m-Y', strtotime("-".$days."day")))),
	'orderby'=>'post_views',
	'posts_per_page'=>9
	
	);
	$querybuz=new WP_Query($buzz);
	$days=$days+30;
	}while($querybuz->post_count<$no);
	?>
	<?php
	
				while($querybuz->have_posts()):$querybuz->the_post();
				if ($c%3==0){
                    echo '<div class="row">';
                }
                    echo '<div class="rel-posts col-30">';
                                get_template_part('content-single');
                    echo '</div>';
                
				$c++;
                if ($c%3==0){
                     echo '</div>';
                }
				endwhile;
                echo '</div>';
	?>
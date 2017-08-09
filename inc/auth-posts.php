<?php
 if(isset($_GET['author_name'])) :
 $curauth = get_userdatabylogin($author_name);
 else :
 $curauth = get_userdata(intval($author));
 endif;
 $args=array("author"=> $curauth->id,"posts_per_page"=>20,"paged"=>(get_query_var('paged') ) ? get_query_var('paged') : 1);
 $query=new WP_Query($args);
 $aligncount=$query->found_posts;
 $count=1;
 while ($query->have_posts()):$query->the_post();
 if ($count%2!=0){
      echo '<div class="row mp-row">';
 }
 echo '<div class="mp-col col-50">';
 get_template_part('content-six'); 
 echo '</div>';
 if ($count%2==0 ){
     echo '</div>';
 }
 $count++;
 endwhile;
 $noofpages=(int)($aligncount/20);
 if ($aligncount%20!=0){
     $noofpages+=1;
 }
if ($count<20 && $count%2==0){
    echo '</div>';
}
 $pageno=get_query_var('paged');
 if ($pageno==$noofpages && $aligncount%2!=0){
     echo '</div>';
 }
 $args=array(
     'total'=>$query->max_num_pages,
     'current'=>(get_query_var('paged') ) ? get_query_var('paged') : 1,
     'type'=>'list',
     'next_text'=>'<i class="fa fa-arrow-right" aria-hidden="true"></i>',
     'prev_text'=>'<i class="fa fa-arrow-left" aria-hidden="true"></i>'
 );?>
<div class="pagination-num"><?php echo paginate_links( $args ); 
 ?></div>
<?php
 if(isset($_GET['author_name'])) :
 $curauth = get_userdatabylogin($author_name);
 else :
 $curauth = get_userdata(intval($author));
 endif;
 $args=array("author"=> $curauth->id, "category_name"=>'machans-picks',"posts_per_page"=>10,"paged"=>(get_query_var('pagem') ) ? get_query_var('pagem') : 1);
 $query=new WP_Query($args);
 $count=1;
 while ($query->have_posts()&&$count<6):$query->the_post();
 get_template_part('content-hori'); $count++;
 endwhile;
 $myurl=esc_url($_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
  $args=array(
     'total'=>$query->max_num_pages,
     'current'=>(get_query_var('pagem') ) ? get_query_var('pagem') : 1,
     'type'=>'list',
     'next_text'=>'<i class="fa fa-arrow-right" aria-hidden="true"></i>',
     'prev_text'=>'<i class="fa fa-arrow-left" aria-hidden="true"></i>',
     'base' => preg_replace('#pagem/[1-9]+/#','',$myurl).'%_%',
     'format'=>'pagem/%#%/'
 );
echo paginate_links( $args );

 ?>
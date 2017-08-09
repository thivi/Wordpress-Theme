<?php
 if(isset($_GET['author_name'])) :
 $curauth = get_userdatabylogin($author_name);
 else :
 $curauth = get_userdata(intval($author));
 $user_post_count = count_user_posts( $curauth->ID , post ); 
 endif;
 ?>
	
                <div class="auth-box">
                   <div class="top-yellow"></div>
                   <div class="auth-pro-pic">
                       <?php echo get_avatar($curauth->user_email, '150', $avatar); ?>
                   </div>
                   <div class="auth-text-box">
                        <div class="auth-name">
                          <?php echo $curauth->first_name." ".$curauth->last_name; ?>
                        </div>
                        <div class="auth-soc-links">
                            <?php 
						$twitter=$curauth->facebook;
						if ($twitter=="") {echo "";}
						else{
							echo '<a href='; 
							echo '"';
							echo $curauth->facebook; 
							echo '"';
							echo 'target=';
							echo "_blank";
							echo '>';
							echo '<i style="color:#3b5998;" class="fa fa-facebook-square fa-2x"></i>';
							echo '</a>';
							}
					?>

<?php 
						$twitter=$curauth->twitter;
						if ($twitter=="") {echo "";}
						else{
							echo '<a href='; 
							echo '"';
							echo 'http://twitter.com/'; 
							echo $curauth->twitter; 
							echo '"';
							echo 'target=';
							echo "_blank";
							echo '>';
							echo '<i style="color:#4099FF" class="fa fa-twitter-square fa-2x"></i>';
						echo '</a>'; }?>
						<?php 
						$twitter=$curauth->googleplus;
						if ($twitter=="") {echo "";}
						else{
							echo '<a href='; 
							echo '"';
							echo $curauth->googleplus; 
							echo '"';
							echo 'target=';
							echo "_blank";
							echo '>';
							echo '<i style="color:#d34836"class="fa fa-google-plus-square fa-2x"></i>';
							echo '</a>';
							}
					?>
                        </div> 
                        <div class="auth-desc">
                            <?php echo $curauth->user_description; ?>
                        </div>           
                        
                    </div> 
                    <?php if($curauth->user_url!=null){?>
                    <div class="auth-web">
                            <i class="fa fa-globe" style="margin-right:10px;"></i>
                            <a href="<?php echo $curauth->user_url; ?>"><?php echo $curauth->user_url; ?></a>             
                     </div> <?php }?>
                    <div class="auth-stats">
                        <div class="posts-published">
                            <?php echo $user_post_count; ?>
                        </div>
                        <div class="machans-picks">
                                                        <?php 
                                    
                                    if(isset($_GET['author_name'])) :
                            $curauth = get_userdatabylogin($author_name);
                            else :
                            $curauth = get_userdata(intval($author));
                            endif;
                                    $authid=$curauth->ID; 
                            $args = array(
                            'post_type' => array('post'), 
                            'category__in' => array('97'), 
                            'author' => $authid, 
                            'post_status' => 'publish', 
                            'order' => 'DESC', 
                            'orderby' => 'date'                  
                            );

                            // WP_Query
                            $eq_query = new WP_Query( $args );
                            $mp=$eq_query->found_posts;
                            echo $mp;
                            ?>
                        </div>
                        <div class="reads-received">
                               <?php
                                            $total=0;
                                            
                            $curauth=get_query_var('author_name');
                            
                            
                            
                                    $param = array(
                                    
                                    'author_name' => $curauth, 
                                'post_status' => 'publish',
                                'posts_per_page'=>-1
                                );

                                $post_query = new WP_Query($param);
                                
                             
                            if($post_query->have_posts() ) {
                            while($post_query->have_posts() )
                                            
                            {

                                    $post_query->the_post(); 

                                    
                                   $views=pvc_get_post_views( $post_query->ID );	
                                
                                    if (substr($views, -1)=="K"){
                                        $views=str_replace("K","",$views);
                                        $views=$views*1000; }
                                    else if (substr($views, -1)=="M"){
                                        $views=str_replace("M","",$views);
                                        $views=$views*1000000; }
                                    else if (substr($views, -1)=="B"){
                                        $views=str_replace("B","",$views);
                                        $views=$views*1000000000; }

                                    
                                    
                                          
                                        $total=$total+$views;
                            } echo roundoff($total); 
                           
                            } 
                           else echo '0';
                            ?>                         
                        </div>
                    </div>
                </div>  
                

                            
     
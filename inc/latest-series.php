<?php

        if (get_option('enable_latest_series')==true){
?>
        <div class="row lat-wrapper">
            <div class="series-det">
                <?php if (get_option('tournament_bilateral')=='bilateral'){
                    echo '<img class="flag" src="'.flag_finder('sri_lanka').'"><span class="vs"> vs. </span>';
                    echo '<img class="flag" src="'.flag_finder(get_option('opponent')).'">';
                }
                if (get_option('tournament_bilateral')=='tournament'){
                   echo '<img class="logo-f flag" src="'.get_option('tournament').'">';
                }?>
                
            </div>
            <span class="more-ser"><a href="<?php echo get_term_link(get_term_by('slug',get_option('select_the_series'),'series'))?>">MORE...<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></span>
            <div class="clear-all"></div>
            <div class="col-40 lat-big">
                <?php 
                    $series=get_option('select_the_series');
                    $args=array(
                        'series'=>$series,
                        'posts_per_page'=>1,
                        'orderby'=>'date'
                    );
                    $wquery=new WP_Query($args);
                    while ($wquery->have_posts()):$wquery->the_post();
                        get_template_part('lat-big-content');
                    endwhile;
                    ?>                    
            </div>
            <div class="lat-small col-30">
                <?php 
                    $series=get_option('select_the_series');
                    $count=0;
                    
                    $args=array(
                        'series'=>$series,
                        'posts_per_page'=>3,
                        'offset'=>1,
                        'orderby'=>'date'
                    );
                    $wquery=new WP_Query($args);
                    
                    while ($wquery->have_posts()):$wquery->the_post();
                        
                        
                         if($count%2==0) { 
                            get_template_part('lat-small-content');
                         }
                        
                        if($count%2!=0){
                            
                            get_template_part('lat-small-content-left');
                        }   
                        $count++;
                        
                    endwhile;
                       
                    ?>  
            </div>
            <div class="lat-small col-30">
                <?php 
                    $series=get_option('select_the_series');
                    $count=0;
                    
                    $args=array(
                        'series'=>$series,
                        'posts_per_page'=>3,
                        'offset'=>4,
                        'orderby'=>'date'
                    );
                    $wquery=new WP_Query($args);
                    
                    while ($wquery->have_posts()):$wquery->the_post();
                        
                        
                         if($count%2==0) { 
                            get_template_part('lat-small-content');
                         }
                        
                        if($count%2!=0){
                            
                            get_template_part('lat-small-content-left');
                        }   
                        $count++;
                        
                    endwhile;
                       
                    ?>  
            </div>
            
            

        </div>
<?php
        }
?>

<style type="text/css">
    .lat-wrapper{
        background-color:<?php echo get_option('content_bg_color');?>;
    }
    .lat-big-bg-overlay, .lat-big-cat{
        background-color:<?php echo get_option('content_text_box_color');?>;
    }
    .lat-text{
        color:<?php echo get_option('content_text_color')?>;
    }
    .lat-big-title{
        text-shadow: 0 1px 1px <?php echo get_option('content_text_box_color')?>;
    }
    .lat-big-title a:hover{
        color:<?php echo get_option('content_text_color')?>;

    }
    .lat-big-cat:hover{
        background-color:<?php echo get_option('content_text_color')?>;
        color:<?php echo get_option('content_text_box_color')?>;
    }
    .lat-big-cat a:hover{
        color:<?php echo get_option('content_link_color')?>;
    }
    .vs{
        color:<?php echo get_option('content_text_color')?>;
    }
    .more-ser a:hover{
        color:<?php echo get_option('content_link_color')?>;
    }
    .more-ser{
        color:<?php echo get_option('content_text_color')?>;
 
    }
    
</style>
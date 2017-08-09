  <div class="lat-big-bg">
        <div class="lat-big-bg-overlay"></div>
        <div class="lat-big-o-i">
            <?php if ( has_post_thumbnail() ): ?>
                <?php the_post_thumbnail('full'); ?>
            <?php else:?>
                <img src="<?php echo get_template_directory_uri (); echo "/img/placeholder.png"; ?>">
            <?php endif ?>
        </div>
        <div class="lat-big-o-c">
            <div class="lat-text lat-big-title">
                 <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
            </div>
            
            <div class="lat-big-thumb">
                <?php if ( has_post_thumbnail() ): ?>
                <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_post_thumbnail('full'); ?></a>
                <?php else:?>
                <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><img src="<?php echo get_template_directory_uri (); echo "/img/placeholder.png"; ?>"></a>
                <?php endif ?>
            </div>
            
            <div class="lat-text lat-big-cat">
                <?php the_category(' / '); ?>
            </div>
            
            <div class="lat-text lat-big-date">
                <?php the_time('j M, Y'); ?>
            </div>
            <div class="clear-all"></div>
            <div class="lat-text lat-big-desc">
                <?php the_field('short_description'); ?>
            </div>
            
        </div>
        
  </div>
  
  
		
	
	
	
    
	

<div class="lat-small-cont-pad">
<table class="lat-small-wrap">
    
    <td class="lat-small-title">
            <div class="lat-big-bg-overlay"></div>
            <div class="lat-small-bg">
                <?php if ( has_post_thumbnail() ): ?>
                <?php the_post_thumbnail('full'); ?>
                <?php else:?>
                <img src="<?php echo get_template_directory_uri (); echo "/img/placeholder.png"; ?>">
                <?php endif ?>
            </div>
            <div class="lat-text lat-big-title lat-small-title-wrap">
                <h3>  <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
            </div>
    </td>
    <td class="lat-small-img">
            <?php if ( has_post_thumbnail() ): ?>
                <?php the_post_thumbnail('full'); ?>
            <?php else:?>
                <img src="<?php echo get_template_directory_uri (); echo "/img/placeholder.png"; ?>">
            <?php endif ?>
    </td>
    
</table>
</div>

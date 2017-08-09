<?php get_header(); ?>

	<div class="front-page-wrapper">
	
		<div class="row">
			<div class="col-r-l col-40-big col-left col-40">
                <?php get_template_part('inc/authbox');?>
                <div class="divider"><i class="fa fa-certificate"></i>&nbspMachan's Picks</div>
                <?php get_template_part('inc/machans-picks-auth');?>
            </div>
            <div class="col-60">
                <?php get_template_part('inc/auth-posts');?>
            </div>
        </div>
     </div>
<?php get_footer(); ?>

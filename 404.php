<?php get_header(); ?>

<div class="front-page-wrapper">
		<div class="row">
			<?php get_template_part('page-details');?>
			<div class="col-80">
					<div class="page-cm post-page">
                            <center><h1>404</h1></center>
                            <center><h2>Sorry Machan! URL NOT FOUND!</h2></center>
							<img class="img-404" src="<?php echo get_template_directory_uri (). '/img/murali.jpg'?>">
					</div>
				
					<div class="related-col">
						<h3><i class="fa fa-hand-o-right" aria-hidden="true"></i> YOU MAY ALSO LIKE</h3></br>
						<?php get_template_part('related-posts-single');?>
					</div>
					<?php get_sidebar(2); ?>
			</div>
			
			
		</div>
</div>

<?php get_footer(); ?>
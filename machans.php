<?php /*
Template Name: Meet Our Machans
*/ ?>

<?php get_header(); ?>

<div class="front-page-wrapper">
		<div class="row">
			<?php get_template_part('page-details');?>
			<div class="col-80">
					<div class="page-cm post-page">
							<h3> ADMINISTRATORS </h3>	
		<?php 
	echo '<div class="cm-p">'; ?>
		<?php

// Get the authors from the database ordered by user nicename
	$admin = get_users( 'blog_id=1&orderby=nicename&role=administrator' );


// Loop through each author
	$count=0;
	foreach($admin as $author) :
	
	// Get user data
		$curauth = get_userdata($author->ID);

	// If user level is above 0 or login name is "admin", display profile
		

		// Get link to author page
			$user_link = get_author_posts_url($curauth->ID);

		// Set default avatar (values = default, wavatar, identicon, monsterid)
			//$avatar = 'wavatar';
?>


	
	
	<div id="authbox" style="display:block">
	<div class="machan-tab"><div class="machan-avatar">
	<div id="avatarg" ><?php echo get_avatar($curauth->user_email, '96', $avatar); ?>
	</div></div><div class="machan-details">
	<div id="details">
	<a href="<?php echo $user_link; ?>" title="<?php echo $curauth->display_name; ?>">
		<?php 
	echo '<h3>'.$curauth->first_name.'&nbsp';
	echo $curauth->last_name.'</h3>'; ?>
	</a>
	<?php echo $curauth->description;?> </br>
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
							echo '<i style="color:#3b5998;" class="fa fa-facebook-square fa-lg"></i>';
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
							echo '<i style="margin-left:10px;color:#4099FF" class="fa fa-twitter-square fa-lg"></i>';
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
							echo '<i style="margin-left:10px;color:#d34836"class="fa fa-google-plus-square fa-lg"></i>';
							echo '</a>';
							}
					?>
	</div>
	</div></div></div><div class="clear-machan"></div>
	
	


	<?php endforeach; ?><?php echo '</div>';?>
	<?php $editors = get_users( 'blog_id=1&orderby=nicename&role=editor' );
	if (get_users( 'blog_id=1&orderby=nicename&role=editor' )):?>
	<h3> EDITORS </h3><?php 
	echo '<div class="cm-p">'; ?>
	<?php

// Get the authors from the database ordered by user nicename
	


// Loop through each author
	$count=0;
	foreach($editors as $editor) :
	
	// Get user data
		$curauthe = get_userdata($editor->ID);

	// If user level is above 0 or login name is "admin", display profile
		

		// Get link to author page
			$user_linke = get_author_posts_url($curauthe->ID);

		// Set default avatar (values = default, wavatar, identicon, monsterid)
			//$avatar = 'wavatar';
?>


	
	
	<div id="authbox" style="display:block">
	<div class="machan-tab"><div class="machan-avatar">
	<div id="avatarg" ><?php echo get_avatar($curauthe->user_email, '96', $avatar); ?>
	</div></div><div class="machan-details">
	<div id="details">
	<a href="<?php echo $user_linke; ?>" title="<?php echo $curauthe->display_name; ?>">
		<?php 
	echo '<h3>'.$curauthe->first_name.'&nbsp';
	echo $curauthe->last_name.'</h3>'; ?>
	</a>
	<?php echo $curauthe->description;?> </br>
	<?php 
						$twitter=$curauthe->facebook;;
						if ($twitter=="") {echo "";}
						else{
							echo '<a href='; 
							echo '"';
							echo $curauth->facebook; 
							echo '"';
							echo 'target=';
							echo "_blank";
							echo '>';
							echo '<i style="margin-right:10px; color:#3b5998;" class="fa fa-facebook-square fa-lg"></i>';
							echo '</a>';
							}
					?>

<?php 
						$twitter=$curauthe->twitter;
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
							echo '<i style="margin-right:10px; color:#4099FF" class="fa fa-twitter-square fa-lg"></i>';
						echo '</a>'; }?>
						<?php 
						$twitter=$curauthe->googleplus;
						if ($twitter=="") {echo "";}
						else{
							echo '<a href='; 
							echo '"';
							echo $curauth->googleplus;
							echo '"';
							echo 'target=';
							echo "_blank";
							echo '>';
							echo '<i style="margin-right:10px;color:#d34836"class="fa fa-google-plus-square fa-lg"></i>';
							echo '</a>';
							}
					?>
	</div>
	</div></div></div><div class="clear-machan"></div>
	
	


	<?php endforeach; ?><?php echo '</div>';?>
	<?php endif;?>
	<h3> WRITERS </h3>
	<?php 
	echo '<div class="cm-p">'; ?>
	<?php

// Get the authors from the database ordered by user nicename
	$editors = get_users( 'blog_id=1&orderby=nicename&role=author' );


// Loop through each author
	$count=0;
	foreach($editors as $editor) :
	
	$post_count = count_user_posts( $editor->ID);
	if ( ! $post_count ) {
            continue;
        }
	
	// Get user data
		$curauthe = get_userdata($editor->ID);

	// If user level is above 0 or login name is "admin", display profile
		

		// Get link to author page
			$user_linke = get_author_posts_url($curauthe->ID);

		// Set default avatar (values = default, wavatar, identicon, monsterid)
			//$avatar = 'wavatar';
?>


	
	
	<div id="authbox" style="display:block">
	<div class="machan-tab"><div class="machan-avatar">
	<div id="avatarg"><?php echo get_avatar($curauthe->user_email, '96', $avatar); ?>
	</div></div><div class="machan-details">
	<div id="details">
	<a href="<?php echo $user_linke; ?>" title="<?php echo $curauthe->display_name; ?>">
		<?php 
	echo '<h3>'.$curauthe->first_name.'&nbsp';
	echo $curauthe->last_name.'</h3>'; ?>
	</a>
	<?php echo $curauthe->description;?> </br>
	<?php 
						$twitter=$curauthe->facebook;;
						if ($twitter=="") {echo "";}
						else{
							echo '<a href='; 
							echo '"';
							echo $curauth->facebook; 
							echo '"';
							echo 'target=';
							echo "_blank";
							echo '>';
							echo '<i style="margin-right:10px; color:#3b5998;" class="fa fa-facebook-square fa-lg"></i>';
							echo '</a>';
							}
					?>

<?php 
						$twitter=$curauthe->twitter;
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
							echo '<i style="margin-right:10px;color:#4099FF" class="fa fa-twitter-square fa-lg"></i>';
						echo '</a>'; }?>
						<?php 
						$twitter=$curauthe->googleplus;
						if ($twitter=="") {echo "";}
						else{
							echo '<a href='; 
							echo '"';
							echo $curauth->googleplus;
							echo '"';
							echo 'target=';
							echo "_blank";
							echo '>';
							echo '<i style="margin-right:10px; color:#d34836"class="fa fa-google-plus-square fa-lg"></i>';
							echo '</a>';
							}
					?>
	</div>
	</div></div></div><div class="clear-machan"></div>
	
	


	<?php endforeach; ?><?php echo '</div>';?>
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
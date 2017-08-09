<div class="page-details">
<?php
	if (is_category()):
		
		$cat=single_cat_title("", false);
		
		$cats=get_term_by('name',$cat,'category','object','raw');
		$catslug=$cats->slug;
		if ($catslug=="opinions"):
			echo '<i class="fa fa-microphone"></i>&nbsp';
			echo $cat;
		elseif ($catslug=="news"):
			echo '<i class="fa fa-newspaper-o"></i>&nbsp';
			echo $cat;
		elseif ($catslug=="analysis"):
			echo '<i class="fa fa-binoculars"></i>&nbsp';
			echo $cat;
		elseif ($catslug=="stats"):
			echo '<i class="fa fa-bar-chart"></i>&nbsp';
			echo $cat;
		elseif ($catslug=="papare-armys-rants"):
			echo '<i class="fa fa-commenting"></i>&nbsp';
			echo $cat;
		elseif ($catslug=="humour"):
			echo '<i class="fa fa-smile-o"></i>&nbsp';
			echo $cat;
		elseif ($catslug=="cricstories"):
			echo '<i class="fa fa-book"></i>&nbsp';
			echo $cat;
		elseif ($catslug=="slideshows"):
			echo '<i class="fa fa-th"></i>&nbsp';
			echo $cat;
		elseif ($catslug=="videos"):
			echo '<i class="fa fa-play-circle"></i>&nbsp';
			echo $cat;
		elseif ($catslug=="memes-of-the-match"):
			echo '<i class="fa fa-facebook-square"></i>&nbsp';
			echo $cat;
		elseif ($catslug=="tweets-of-the-match"):
			echo '<i class="fa fa-twitter"></i>&nbsp';
			echo $cat;
		elseif ($catslug=="machans-picks"):
			echo '<i class="fa fa-certificate"></i>&nbsp';
			echo $cat;
		elseif ($catslug=="trivias"):
			echo '<i class="fa fa-shopping-basket"></i>&nbsp';
			echo $cat;
		endif;
	elseif(is_tag()):
		$tag=single_tag_title("", false);
		echo '<i class="fa fa-tags"></i>&nbsp'.$tag;
	elseif(is_single()):
		the_category(' <span>/</span> ');
	elseif(is_page()):
		echo '<span style="color:#E8E9E3"><i class="fa fa-file"></i>&nbsp&nbsp';the_title(); echo "</span>";
	elseif(is_tax('player')):
		echo '<span style="color:#E8E9E3"><i class="fa fa-user" aria-hidden="true"></i>&nbsp&nbsp';echo get_term_by('slug',get_query_var('player'),'player')->name; echo "</span>";
	elseif(is_tax('series')):
		echo '<span style="color:#E8E9E3"><i class="fa fa-trophy" aria-hidden="true"></i>&nbsp&nbsp';echo get_term_by('slug',get_query_var('series'),'series')->name; echo "</span>";
	endif;
	
?>
<div class="soc-bar">
	<div class="fb-like" data-href="https://www.facebook.com/cricketmachanofficial/" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
	<a class="twitter-follow-button " data-show-screen-name="false" 
	  href="https://twitter.com/cricketmachan" >
	Follow @TwitterDev</a>
	<div class="g-follow" data-annotation="bubble" data-height="20" data-href="//plus.google.com/u/0/114061981231439776045" data-rel="publisher"></div>
</div>
</div>
<!DOCTYPE html> 
<html <?php language_attributes(); ?>>

<head>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-8731000251200728",
    enable_page_level_ads: true
  });
</script>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<meta property="fb:app_id" content="1604272106516828" />
	
	<?php wp_head(); ?>
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-P45NRZ4');</script>
<!-- End Google Tag Manager -->
</head>
<body class="body-cm">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P45NRZ4"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="header colormain paddingfull">
	<div class="header-container">
		<div class="logo">
			<?php echo '<a href="'; echo get_site_url(); echo '">';?>
			<?php echo '<img src="'.get_template_directory_uri (). '/img/logo.png"></a>'?>
			
		</div>
		<div class="header-ads-wrapper">
			<div class="header-ads">
				<?php if ( is_active_sidebar( 'header_ads' ) ) : ?>
				<div>
				<?php dynamic_sidebar( 'header_ads' ); ?>
				</div><!-- #primary-sidebar -->
				<?php endif; ?>
			</div>
		</div>
		<div class="search-social">
			<div class="social-icons">
				<ul class="soc-icon-list">
					<a href="http://facebook.com/cricketmachanofficial" target="_blank"><li class="fa-icon"><i class="fa fa-facebook fa-lg"></i></li></a>
					<a href="http://twitter.com/cricketmachan" target="_blank"><li class="tw-icon"><i class="fa fa-twitter fa-lg"></i></li></a>
					<a href="http://plus.google.com/+cricketmachang" target="_blank"><li class="gp-icon"><i class="fa fa-google-plus fa-lg"></i></li></a>
					<a href="http://cricketmachan.com/rss-feeds"target="_blank"><li class="rs-icon"><i class="fa fa-feed fa-lg"></i></li></a>
				</ul>
			</div>
			<div class="search-bar">
				<?php get_search_form(); ?>
			</div>
		</div>
	</div>
</div>

<div id="mobi-menu" class="navigationbar colormain paddingfull">
	<?php if(has_nav_menu('header-menu')):?>
						<div id="navtb" class="nav-togglebutton"><i class="fa fa-bars" aria-hidden="true"></i></div>
						<div class="mobile-header"><?php echo '<a href="'; echo get_site_url(); echo '">';echo '<img src="'.get_template_directory_uri (). '/img/logo.png"></a>'?></div>
						<div class="mobile-search"><i class="fa fa-search"></i></div>
						<div class="nav-bar"><div class="nav-wrap" id="nav-wrap"><div class="chev-left" id="left-ar"><i class="fa fa-chevron-left" aria-hidden="true"></i></div><div id="nav-menu" class="nav-menu"><?php wp_nav_menu(array('theme_location'=>'header-menu','menu_class'=>'nav-wrap','container'=>'','menu_id' => '','fallback_cb'=> false)); ?></div><div class="chev-right" id="right-ar"><i class="fa fa-chevron-right" aria-hidden="true"></i></div></div></div>
						
			</nav><!--/#nav-header-->
						
	<?php endif; ?>
</div>
<div class="mobile-head-menu"><?php wp_nav_menu(array('theme_location'=>'header-menu','menu_class'=>'mobile-head-menu','container'=>'','menu_id' => 'mobile-menucm','fallback_cb'=> false,'after'=>'<i class="fa fa-chevron-down"></i>')); ?></div>
<div class="search-bar-toggle"><?php get_template_part('searchfrom1'); ?></div>
<div class="quick-link"><span class="rocket-icon"><i class="fa fa-tags fa-lg"></i></span><span class="quick-head">QUICK LINKS | </span><?php wp_nav_menu(array('theme_location'=>'quick-link','menu-class'=>'quick-link','fallback_cb'=>false))?></div>
<div id="scrolltotop" class="scrolltotop"><i class="fa fa-chevron-circle-up fa-4x" aria-hidden="true"></i></div>






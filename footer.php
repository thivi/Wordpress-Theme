<div class="footer-ads">
<?php if ( is_active_sidebar( 'footer_ads' ) ) : ?>
				
				<?php dynamic_sidebar( 'footer_ads' ); ?>
				<?php endif; ?>
</div>
<?php wp_nav_menu(array('theme_location'=>'footer-menu','menu_class'=>'foot-nav-wrap','container'=>'','menu_id' => 'foot-menu','fallback_cb'=> false)); ?>

<div class="footer">
    <div class="foot-logo">
                <?php echo '<a href="'; echo get_site_url(); echo '">';?>
                <?php echo '<img src="'.get_template_directory_uri (). '/img/logo.png"></a>'?>
                
    </div>
    <div class="license">
        <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-nd/4.0/88x31.png" /></a>
    </div>
    <div class="social-foot">
        <ul>
            <li><a href="http://www.facebook.com/cricketmachanofficial"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a></li>
            <li><a href="http://www.twitter.com/cricketmachan"><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></a></li>
            <li><a href="http://plus.google.com/+cricketmachang"><i class="fa fa-google-plus-square fa-2x" aria-hidden="true"></i></a></li>
        </ul>
    </div>
</div>

<?php wp_footer(); ?>
</body>
</html>
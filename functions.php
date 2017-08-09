<?php

function cm_enqueue_script(){
	wp_enqueue_style('bootstrapcm',"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css",array(),'1.0.0','all');
	wp_enqueue_style('stylecm',get_template_directory_uri ()."/style.css",array(),'1.0.0','all');
	wp_enqueue_script('jqcm',"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js",array(),'1.0.0',true);
	wp_enqueue_script('custjs',get_template_directory_uri ()."/js/cm.js",array(),'1.0.0',true);
	//wp_enqueue_script('jqcmm',"https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.js",array(),'1.0.0',true);
	wp_enqueue_script('custs',get_template_directory_uri ()."/js/ts.js",array(),'1.0.0',true);
	wp_enqueue_style('stylefa',"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css",array(),'1.0.0','all');
	wp_enqueue_style('open',"https://fonts.googleapis.com/css?family=Open+Sans:400,700,800",array(),'1.0.0','all');
	wp_enqueue_style('pop',"https://fonts.googleapis.com/css?family=Poppins",array(),'1.0.0','all');
	wp_enqueue_style('rob',"https://fonts.googleapis.com/css?family=Roboto+Condensed",array(),'1.0.0','all');
}

add_action('wp_enqueue_scripts','cm_enqueue_script');

function cm_register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'Footer Menu' ),
	  'quick-link' => __('Quick Links')
    )
  );
}
add_action( 'init', 'cm_register_my_menus' );


function cm_widgets_init() {

	register_sidebar( array(
		'name'          => 'Header Ads',
		'id'            => 'header_ads',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'cm_widgets_init' );
function cms_widgets_init() {

	register_sidebar( array(
		'name'          => 'sidebar',
		'id'            => 'sidebar',
		'before_widget' => '<div class="sidebarcm">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );

}
add_action( 'widgets_init', 'cms_widgets_init' );


function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }	
  $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
  return $excerpt;
}

function roundoff($num){

	if ($num>=1000000000){
			$disp=round(($num/1000000000),2).'B';
	}
	else if ($num>=1000000){
			$disp=round(($num/1000000),2).'M';
	}
	else if ($num>=1000){
			$disp=round(($num/1000),2).'K';
	}
	else {
		$disp=$num; }
		
		
	return $disp;


}

function custom_pvc_get_post_views($post_views) {
	if ($post_views==0){
		$post_views=10;
	}
	$post_views = roundoff($post_views);
	return $post_views;
}
add_filter('pvc_get_post_views', 'custom_pvc_get_post_views');

function slideshows(){
	if( have_rows('slideshow') ){
		 
			$count=0;
			// loop through the rows of data
			while ( have_rows('slideshow') ) : the_row();
				
				// display a sub field value
				$sliders[$count]=
				'<h1>'.
				get_sub_field('slide_number').
				get_sub_field('slide_title').
				'</h1>'.
				get_sub_field('slide_content');
				$count ++;
			endwhile;


			

			$num_of_slide= count ($sliders);
			
			
			
			global $wp_query;
				if (isset($wp_query->query_vars['slide']))
				{
					$page= $wp_query->query_vars['slide'];
				}
				
			else{
			$page=1;
			}
			
			if ($page>$num_of_slide || $page<1)
			{
				$page=1;
			}
		 
			
			$slideshow='<a name="sliders" id="sliders" data-ajax="false" rel="external"></a>'; 
			$slideshow.= '<hr>';	
			$next=$page+1;
			$previous=$page-1;
			
			$slideshow.= '<div class="slideshow-post"><div class="slide-navi">';

			if ($page!=1){

			$slideshow.= "<a  href=".get_permalink()."slide/".$previous."#sliders> <div class='arrow-box'><i class='fa fa-chevron-left' aria-hidden='true'></i></div></a>";
			
			}

			$slideshow.= '<div class="slidepage"><div class="pageslide">'.$page.'</div><div class="dividerslide"></div><div class="noofslide">'.($num_of_slide).'</div></div>';
			
			if ($num_of_slide!=$page){

			$slideshow.= "<a  href=".get_permalink()."slide/".$next."#sliders><div class='arrow-box'><i class='fa fa-chevron-right' aria-hidden='true'></i></div> </a>"; 

			}

			$slideshow.= '</div>';
			$arrayno=($page-1);
			$slideshow.= $sliders[$arrayno];
			$slideshow.= '<div class="slide-navi rightslide">';
			if ($page!=1){
			$slideshow.= "<a  href=".get_permalink()."slide/".$previous."#sliders><div class='arrow-box'><i class='fa fa-chevron-left' aria-hidden='true'></i></div></a>";}
			$slideshow.= '<div class="slidepage"><div class="pageslide">'.$page.'</div><div class="dividerslide"></div><div class="noofslide">'.($num_of_slide).'</div></div>';
			if ($num_of_slide!=$page){
			$slideshow.= "<a  href=".get_permalink()."slide/".$next."#sliders><div class='arrow-box'><i class='fa fa-chevron-right' aria-hidden='true'></i></div> </a>"; 
			 }$slideshow.= '</div></div>';
			return $slideshow;
		}
		else {
			//
		}
}

function cm_post_views_comments($content){
	
	return $content.slideshows();
}
add_filter( 'the_content', 'cm_post_views_comments',20 );

	

function my_acf_format_value( $value, $post_id, $field ) {
	
	// run do_shortcode on all textarea values
	$value = '#'.$value.'&nbsp&nbsp';
	
	
	// return
	return $value;
}

add_filter('acf/format_value/type=number', 'my_acf_format_value', 10, 3);
/*
function parameter_queryvars( $qvars )
{
$qvars[] = 'slide';
return $qvars;
}

add_filter('query_vars', 'parameter_queryvars' );
*/
function quotes($atts,$content=NULL){
	$output='<div class="quotes"><p>'.$content.'</div>';
	return $output;
}
add_shortcode('quotes', 'quotes');
add_theme_support( 'title-tag' );

function highlight($atts,$content=NULL){
	$output='<p class="highlight">'.$content.'</p>';
	return $output;
}
add_shortcode('highlight', 'highlight');
add_theme_support( 'title-tag' );

function alx_pullquote_right_shortcode($atts,$content=NULL) {
		$output = '<span class="pullquote-right">'.strip_tags($content).'</span>';
		return $output;
	}
add_shortcode('pullquote-right','alx_pullquote_right_shortcode');
add_theme_support( 'title-tag' );

function snippet($atts,$content=NULL) {
		$output = '<div class="pullquote-right">'.$content.'</div>';
		return $output;
	}
add_shortcode('snippet','snippet');
add_theme_support( 'title-tag' );

function cm_post_pagination($args){
	global $page, $numpages;
	
	
	
		if($page==$numpages){
			$args['link_after']= "</a> Page  ".$page." of ".$numpages." ".$args['link_after'];
		}
		elseif ($page==1){
			$args['link_before']=$args['link_before']."</a> Page ".$page." of ".$numpages." <a href='".get_the_permalink().($page+1)."'>";
		}
	
	
		$args['separator']= "Page  ".$page." of ".$numpages." ";
	
	
	
	return $args;
}
add_filter('wp_link_pages_args', 'cm_post_pagination');

function get_post_id_from_slug($slug){
	$args=array(
		'name'=>$slug
	);
	$q=new WP_Query($args);
	while ($q->have_posts()){
		$q->the_post();
		echo $q->post->ID;
	}
		
}
function change_author(){
	global $wp_rewrite;
	$wp_rewrite->author_base='machan';
	$wp_rewrite->author_structure='/'.$wp_rewrite->author_base.'/%author%';
}
add_action('init', 'change_author');
function custom_rewrite_tag() {
  add_rewrite_tag('%pagem%', '([1-9]+)');
  add_rewrite_tag('%slide%','(\d+)');
  add_rewrite_tag('%machan%', '(\d+)');
}
add_action('init', 'custom_rewrite_tag', 10, 0);

function custom_rewrite_basic() {
  add_rewrite_rule('^machan/([^/]+)/page/([1-9]+)$', 'index.php?author_name=$matches[1]&paged=$matches[2]', 'top');
  add_rewrite_rule('^machan/([^/]+)/pagem/([1-9]+)$', 'index.php?author_name=$matches[1]&pagem=$matches[2]', 'top');
  add_rewrite_rule('^machan/([^/]+)/pagem/([1-9]+)/page/([1-9]+)', 'index.php?author_name=$matches[1]&pagem=$matches[2]&paged=$matches[3]', 'top');
  add_rewrite_rule('^machan/([^/]+)/page/([1-9]+)/pagem/([1-9]+)', 'index.php?author_name=$matches[1]&pagem=$matches[3]&paged=$matches[2]', 'top');
  add_rewrite_rule('^slideshows/([^/]+)/slide/(\d+)$', 'index.php?category_name=slideshows&name=$matches[1]&slide=$matches[2]', 'top');
  add_rewrite_rule('^machan/([^/]+)', 'index.php?author_name=$matches[1]','top');
}
add_action('init', 'custom_rewrite_basic', 10, 0);


function player_tax(){
	register_taxonomy(
		'player',
		'post',
		array(
			'labels'=>array(
				'name'=>_x( 'Players', 'taxonomy general name' ),
				'singular_name'=>_x( 'Player', 'taxonomy singular name' ),
				'search_items'      => __( 'Search Players' ),
				'all_items'         => __( 'All Players' ),
				'parent_item'       => __( 'Parent Player' ),
				'parent_item_colon' => __( 'Parent Player:' ),
				'edit_item'         => __( 'Edit Player' ),
				'update_item'       => __( 'Update Player' ),
				'add_new_item'      => __( 'Add New Player' ),
				'new_item_name'     => __( 'New Player Name' ),
				'menu_name'         => __( 'Players' ),
			),
			'rewrite'=>array('slug'=>'players'),
			'capabilities' => array(
				'manage_terms' - 'manage_categories',
				'edit_terms' - 'manage_categories',
				'delete_terms' - 'manage_categories',
				'assign_terms' - 'edit_posts'
			),
			'hierarchical'      => false,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
		)
	);
	register_taxonomy(
		'series',
		'post',
		array(
			'labels'=>array(
				'name'=>_x( 'Series', 'taxonomy general name' ),
				'singular_name'=>_x( 'Series', 'taxonomy singular name' ),
				'search_items'      => __( 'Search Series' ),
				'all_items'         => __( 'All Series' ),
				'parent_item'       => __( 'Parent Series' ),
				'parent_item_colon' => __( 'Parent Series:' ),
				'edit_item'         => __( 'Edit Series' ),
				'update_item'       => __( 'Update Series' ),
				'add_new_item'      => __( 'Add New Series' ),
				'new_item_name'     => __( 'New Series Name' ),
				'menu_name'         => __( 'Series' ),
			),
			'rewrite'=>array('slug'=>'series'),
			'capabilities' => array(
				'manage_terms' - 'manage_categories',
				'edit_terms' - 'manage_categories',
				'delete_terms' - 'manage_categories',
				'assign_terms' - 'edit_posts'
			),
			'hierarchical'      => false,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
		)
	);
}
add_action('init',player_tax);

function mytheme_customize_register( $wp_customize ) {
	$colors = array();
	$colors[] = array(
	'slug'=>'content_bg_color', 
	'default' => '#333',
	'label' => __('Content Background Color', 'Ari')
	);
	$colors[] = array(
	'slug'=>'content_text_color', 
	'default' => '#88C34B',
	'label' => __('Content Text Color', 'Ari')
	);
	$colors[] = array(
	'slug'=>'content_link_color', 
	'default' => '#88C34B',
	'label' => __('Content Link Color', 'Ari')
	);
	$colors[] = array(
	'slug'=>'content_text_box_color', 
	'default' => '#88C34B',
	'label' => __('Content Text Box Color', 'Ari')
	);
	
	$wp_customize->add_section(
		'latest_series',
		array(
			'title'=>__('Latest Series','mytheme'),
			'priority'=>30,
			
		)
	);
	$wp_customize->add_setting('enable_latest_series', array(
		'deafult'=> true,
		'type'=> 'option'
	));
	$wp_customize->add_setting('select_the_series', array(
		'deafult'=> 'enter the series slug',
		'type'=> 'option'
	));
	$wp_customize->add_setting('tournament_bilateral', array(
		'deafult'=>'bilateral;' ,
		'type'=> 'option'
	));
	
	$wp_customize->add_setting('opponent', array(
		'deafult'=> '',
		'type'=> 'option'
	));
	$wp_customize->add_setting('tournament', array(
		'deafult'=> '',
		'type'=> 'option'
	));
	$wp_customize->add_control(
		'enable_latest_series',
		array(
			'settings'=>'enable_latest_series',
			'label'=>__('Enable Latest Series?'),
			'section'=>'latest_series',
			'type'=>'checkbox'
		)
	);
	$wp_customize->add_control(
		'select_the_series',
		array(
			'settings'=>'select_the_series',
			'label'=>__('Select the Series'),
			'section'=>'latest_series',
			'type'=>'textbox'
		)
	);
		$wp_customize->add_control(
		'select_the_series_type',
		array(
			'settings'=>'tournament_bilateral',
			'label'=>__('Bilateral or Tournament?'),
			'section'=>'latest_series',
			'type'=>'radio',
			'choices'=>array(
				'bilateral'=>__('Bilateral'),
				'tournament'=>__('Tournament')
			)
		)
		
	);
	if (get_option('tournament_bilateral')=='bilateral'){
		$wp_customize->add_control(
		'select_the_opposition',
		array(
			'settings'=>'opponent',
			'label'=>__('Select the Opponent'),
			'section'=>'latest_series',
			'type'=>'select',
			'choices'=>array(
				'australia'=>__('Australia'),
				'bangladesh'=>__('Bangladesh'),
				'england'=>__('England'),
				'india'=>__('India'),
				'pakistan'=>__('Pakistan'),
				'south_africa'=>__('South Africa'),
				'new_zealand'=>__('New Zealand'),
				'zimbabwe'=>__('Zimbabawe'),
				'west_indies'=>__('West Indies')
				)
			)
		);	
	}
	if (get_option('tournament_bilateral')=='tournament'){
		$wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           't_logo',
           array(
               'label'      => __( 'Upload a logo', 'cricketmachan' ),
               'section'    => 'latest_series',
               'settings'   => 'tournament',
               'context'    => 'your_setting_context' 
           )
       )
   );
	}
	foreach( $colors as $color ) {
	// SETTINGS
	$wp_customize->add_setting(
		$color['slug'], array(
		'default' => $color['default'],
		'type' => 'option', 
		'capability' => 
		'edit_theme_options'
		)
	);
	// CONTROLS
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
		$wp_customize,
		$color['slug'], 
		array('label' => $color['label'], 
		'section' => 'latest_series',
		'settings' => $color['slug'])
		)
	);
	
	}
}
add_action( 'customize_register', 'mytheme_customize_register' );

function flag_finder($country){
	if ($country=='australia'){
		$url=get_template_directory_uri()."/img/australia.png";
	}
	elseif ($country=='bangladesh'){
		$url=get_template_directory_uri()."/img/bangladesh.png";
	}
	elseif ($country=='england'){
		$url=get_template_directory_uri()."/img/england.png";
	}
	elseif ($country=='india'){
		$url=get_template_directory_uri()."/img/india.png";
	}
	elseif ($country=='new_zealand'){
		$url=get_template_directory_uri()."/img/newzealand.png";
	}
	elseif ($country=='pakistan'){
		$url=get_template_directory_uri()."/img/pakistan.png";
	}
	elseif ($country=='south_africa'){
		$url=get_template_directory_uri()."/img/southafrica.png";
	}
	elseif ($country=='sri_lanka'){
		$url=get_template_directory_uri()."/img/srilanka.png";
	}
	elseif ($country=='west_indies'){
		$url=get_template_directory_uri()."/img/westindies.png";
	}
	elseif ($country=='zimbabwe'){
		$url=get_template_directory_uri()."/img/zimbabwe.png";
	}
	else{
		$url="ERROR";
	}
	return $url;
}
function filter_ptags_on_images($content){
   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

add_filter('the_content', 'filter_ptags_on_images');

function filter_p_youtube($content){
	return preg_replace('/(<p>)(<span class="embed-youtube".*)(<\/p>)/','\2',$content);
}
add_filter('the_content','filter_p_youtube' );

function add_quote($content){
	return preg_replace('/(<blockquote>)+/', '$0<i class="fa fa-quote-left fa-3x bquote" aria-hidden="true"></i>', $content);
}
add_filter('the_content', 'add_quote');

function filter_add_div_table_b($content){
	return str_replace('<table','<div class="cm-p"><table',$content);
}
add_filter('the_content','filter_add_div_table_b');

function filter_add_div_table_e($content){
	return str_replace('</table>','</table></div>',$content);
}
add_filter('the_content','filter_add_div_table_e');
add_theme_support( 'post-thumbnails');

function xml_sitemap() {
  $postsForSitemap = get_posts(array(
    'numberposts' => -1,
    'orderby' => 'modified',
    'post_type'  => array('post'),
	'category' => 98,
    'order'    => 'DESC'
  ));
 
  $sitemap = '<?xml version="1.0" encoding="UTF-8"?>';
  $sitemap .= '<?xml-stylesheet type="text/xsl" href="'.get_template_directory_uri().'/xml-sitemap.xsl"?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

  foreach($postsForSitemap as $post) {
    setup_postdata($post);

    $postdate = explode(" ", $post->post_modified);
$count=0;	
	if( have_rows('slideshow',$post->ID) ){
     while ( have_rows('slideshow',$post->ID) ) : the_row();
		$count ++;
    endwhile;
}
    if ($count!=0){
	$num=1;
	while($num<=$count){
	$sitemap .= '<url>'.
      '<loc>'.get_permalink($post->ID) .'slide/'.$num.'</loc>'.
      '<lastmod>'. $postdate[0] .'</lastmod>'.
      '<changefreq>monthly</changefreq>'.
    '</url>';
	$num++;
  }}
	else {
		$sitemap .= '<url>'.
      '<loc>'. get_permalink($post->ID) .'</loc>'.
      '<lastmod>'. $postdate[0] .'</lastmod>'.
      '<changefreq>monthly</changefreq>'.
    '</url>';
	}
  
  
  }

  $sitemap .= '</urlset>';
if ( get_current_blog_id()==1){
  $fp = fopen(ABSPATH . "slideshows-sitemap.xml", 'w');
}
else if ( get_current_blog_id()==10){
  $fp = fopen(ABSPATH . "si-slideshows-sitemap.xml", 'w');
}
else if ( get_current_blog_id()==9){
  $fp = fopen(ABSPATH . "ta-slideshows-sitemap.xml", 'w');
}
  fwrite($fp, $sitemap);
  fclose($fp);
}

add_action("publish_post", "xml_sitemap");

function add_smp_to_yoast(){
	if ( get_current_blog_id()==1){
  		$sitemap='<sitemap><loc>'.get_bloginfo('url').'/slideshows-sitemap.xml</loc><lastmod>'.date('Y-m-d H:i:s').'</lastmod></sitemap>';
	}
	elseif ( get_current_blog_id()==10){
  		$sitemap='<sitemap><loc>'.get_bloginfo('url').'/si-slideshows-sitemap.xml</loc><lastmod>'.date('Y-m-d H:i:s').'</lastmod></sitemap>';
	}
	elseif ( get_current_blog_id()==9){
  		$sitemap='<sitemap><loc>'.get_bloginfo('url').'/ta-slideshows-sitemap.xml</loc><lastmod>'.date('Y-m-d H:i:s').'</lastmod></sitemap>';
	}
	
	return $sitemap;
}
 add_filter( 'wpseo_sitemap_index', 'add_smp_to_yoast' );

 function yoast_cf_scan($content, $post){
	 $field=get_field('short_description');
	 while ( have_rows('slideshow') ) : the_row();
				
				// display a sub field value
				
				$field.=get_sub_field('slide_number').' ';
				$field.=get_sub_field('slide_title').' ';
				$field.=get_sub_field('slide_content').' ';
				
	endwhile;
	return $content . $field;
 }
 add_filter( 'wpseo_pre_analysis_post_content', 'yoast_cf_scan', 10, 2 );

function cm_widgets_init1() {

	register_sidebar( array(
		'name'          => 'Index Below Buzz Ads',
		'id'            => 'index_below_buz_ads',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'cm_widgets_init1' );

function cm_widgets_init2() {

	register_sidebar( array(
		'name'          => 'Footer Ads',
		'id'            => 'footer_ads',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'cm_widgets_init2' );

function cm_widgets_init3() {

	register_sidebar( array(
		'name'          => 'Archive Top Ads',
		'id'            => 'archive_top_ads',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'cm_widgets_init3' );

function cm_widgets_init4() {

	register_sidebar( array(
		'name'          => 'Archive Below Recent Ads',
		'id'            => 'archive-below-recent-ads',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'cm_widgets_init4' );
function cm_widgets_init5() {

	register_sidebar( array(
		'name'          => 'Ad below comment',
		'id'            => 'ad-below-comment',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'cm_widgets_init5' );

function cm_widgets_init6() {

	register_sidebar( array(
		'name'          => 'Bing Ads',
		'id'            => 'bing-ads',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'cm_widgets_init6' );



add_action('wp_head','link_prev');

function link_prev() {

	if (get_query_var('category_name')=='slideshows'){

		
		if (have_rows('slideshow')){
		$count=array();
			while (have_rows('slideshow')){
				the_row();
				$count[]=get_sub_field('slide_number');
			}
		$noslides=count($count);
		$slide=get_query_var('slide')?get_query_var('slide'):1;

		
		$next=$slide+1;
		$prev=$slide-1;

		if ($slide!=1){

			

					$output='<link href="'.get_permalink()."slide/".$prev.'" rel="prev"/>';

					echo $output;

				}
		}
	}
}

add_action('wp_head','link_next');

function link_next() {
	if (get_query_var('category_name')=='slideshows'){

		
		if (have_rows('slideshow')){
		$count=array();
			while (have_rows('slideshow')){
				the_row();
				$count[]=get_sub_field('slide_number');
			}
		$noslides=count($count);
		$slide=get_query_var('slide')?get_query_var('slide'):1;
		
		$next=$slide+1;
		$prev=$slide-1;

		if ($noslides!=$slide){
			

					$output='<link href="'.get_permalink()."slide/".$next.'" rel="next"/>';

					echo $output;

				}
		}
	}
}


	
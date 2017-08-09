<script language="javascript" type="text/javascript">
<!--
function popitup(url) {
	newwindow=window.open(url,'name','height=500,width=700');
	if (window.focus) {newwindow.focus()}
	return false;
}

// -->
</script>
<?php
$url=get_the_permalink();

$gapi='gapi';
$data=array('longUrl'=>$url);
$jsondata=json_encode($data);

$curlObj=curl_init();
curl_setopt($curlObj, CURLOPT_URL, 'https://www.googleapis.com/urlshortener/v1/url?fields=id&key='.$gapi);
curl_setopt($curlObj, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curlObj, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($curlObj, CURLOPT_HEADER, 0);
curl_setopt($curlObj, CURLOPT_HTTPHEADER, array('Content-type:application/json'));
curl_setopt($curlObj, CURLOPT_POST, 1);
curl_setopt($curlObj, CURLOPT_POSTFIELDS, $jsondata);

$response = curl_exec($curlObj);

// Change the response json string to object
$jsong = json_decode($response);

curl_close($curlObj);

$url=$jsong->id;

$gurl="https://graph.facebook.com/?id=".get_the_permalink();



$curl=curl_init();
curl_setopt($curl,CURLOPT_URL, $gurl);
curl_setopt($curl, CURLOPT_HEADER, 0);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
$resp=curl_exec($curl);
curl_close($curl);
$json=json_decode($resp,true);
//var_dump($resp);
$fbshares=$json['share']['share_count']?:0;

$totshares=$fbshares;


if ($totshares>=1000000){
  $fs=round($totshares/1000000,1)."M";
}
else if ($totshares>=1000){
  $fs=round($totshares/1000,1)."K";
}
else{
  $fs=$totshares;
}




$comments=$json['share']['comment_count']?:0;

?>

<div class="share-bar-cm">

    <div class="share-i">
          <a href="http://www.facebook.com/sharer.php?u=<?php echo $url?>" onclick="return popitup('http://www.facebook.com/sharer.php?u=<?php echo $url?>')">
                <div  id="fb-box">
                      <i class="fa fa-facebook-official fa-lg" aria-hidden="true"></i>

                </div>
          </a>

          <a href="https://twitter.com/intent/tweet?url=<?php echo $url?>&text=<?php the_title();?>&via=cricketmachan" >
                <div id="tw-box">
                      <i class=" fa fa-twitter fa-lg" aria-hidden="true"></i>

                </div>
          </a>
          <a href="https://www.linkedin.com/shareArticle<?php echo '?url='.$url.'&mini=true'.'&title=';the_title();echo '&summary=';the_field('short_description');echo '&source=Cricket Machan';?>"  onclick="return popitup('https://www.linkedin.com/shareArticle<?php echo '?url='.$url.'&mini=true'.'&title=';the_title();echo '&summary=';the_field('short_description');echo '&source=Cricket Machan';?>')">
                <div id="in-box">
                    <i class="fa fa-linkedin fa-lg" aria-hidden="true"></i>
                </div>
        </a>
    </div>

    <div class="share-box-com-r">

            <div class="post-info-b">
                <div class="post-info-i">
                    <i class="fa fa-share-alt" aria-hidden="true"></i>
                </div>
                <div class="post-info-s">
                    <?php echo $fs ;?>
                </div>
            </div>

            <div class="post-info-b">
                <div class="post-info-i">
                    <i class="fa fa-eye" aria-hidden="true"></i>
                </div>
                <div class="post-info-s">
                    <?php echo pvc_get_post_views( $post->ID );?>
                </div>
            </div>

            <div class="post-info-b">

                <div class="post-info-i">
                    <a class="com-count" href="#comments" name="comicon">
                    <i class="fa fa-comments" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="post-info-s">
                    <a class="com-count" href="#comments" name="comicon">
                    <?php echo $comments;?>
                    </a>
                </div>

            <div>


    </div>
</div>
</div>
</div>

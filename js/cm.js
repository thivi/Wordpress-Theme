$(document).ready(function () {


  //***********************************************
  $(".mobile-search").click(function () {
    $(".search-bar-toggle").toggle("fast", "swing");
  });

  //***********************************************
  $(".mobile-head-menu li").click(function () {
    $(this).find(".sub-menu").slideToggle("fast");


  });
  //***********************************************	
  $(".nav-togglebutton").click(function () {

    $('body').animate({ scrollTop: 0 });

    if ($(".mobile-head-menu").css("display") == "none" || $(".mobile-head-menu").css("width") == "0px") {
      $(".mobile-head-menu").css("display", "flex");
      $(".mobile-head-menu").animate({
        width: '100%'
      }, 'fast');
      document.getElementById("navtb").innerHTML='<i class="fa fa-times" aria-hidden="true"></i>';
    }
    else if ($(".mobile-head-menu").css("display") == "flex" || $(".mobile-head-menu").css("width") == "100%") {

      $(".mobile-head-menu").animate({
        width: '0%'
      }, 'fast');
      document.getElementById("navtb").innerHTML='<i class="fa fa-bars" aria-hidden="true"></i>';



    }
  });

  $(window).resize(function () {

    if ($(window).width() > 1375) {

      $('.mobile-head-menu').hide();

    }

  });
  //***********************************************	
  $(window).resize(function () {
     $(".navigationbar").css("position","static");
      $(".search-bar-toggle").css("position","absolute");
    $(".mobile-head-menu").hide();
    $(".nav-menu").css('margin-left', '0');
    if ($(window).width() > 540) {

      $('.search-bar-toggle').hide();

    }

    if (document.getElementById("nav-menu").offsetWidth == document.getElementById("nav-menu").scrollWidth) {
      $(".chev-right").css('display', 'none');
      $(".chev-left").css('display', 'none');
      $(".nav-menu").css('margin-right', '0');
    }
    else {
      $(".chev-right").css('display', 'block');
      $(".chev-left").css('display', 'block');
      $(".nav-menu").css('margin-right', '-30px');

    }
    if ($(window).height()>500 && $(window).height()<540 ){
  $(".search-bar-toggle").css("top",($(".header").height()+$(".navigationbar").height()));
}
  });
  //***********************************************
  if (document.getElementById("nav-menu").offsetWidth == document.getElementById("nav-menu").scrollWidth) {
    $(".chev-right").css('display', 'none');
    $(".chev-left").css('display', 'none');
    $(".nav-menu").css('margin-right', '0');
  }
  else {
    $(".chev-right").css('display', 'block');
    $(".chev-left").css('display', 'block');
    $(".nav-menu").css('margin-right', '-30px');
  }
  //***********************************************
  $(".chev-right").click(function () {
    var scroll = document.getElementById("nav-menu").scrollWidth;
    var offset = document.getElementById("nav-menu").offsetWidth;
    var m = parseInt($(".nav-menu").css('margin-left'));

    if ((scroll - offset) > 0) {
    if ((offset + 100) <= scroll) {
            var nm = m - (100);
          }
          else {
            var nm = m - (scroll - offset);
          }

          $(".nav-menu").css('margin-left', nm);

        

    }
    var scroll = document.getElementById("nav-menu").scrollWidth;
    var offset = document.getElementById("nav-menu").offsetWidth;
    var m = parseInt($(".nav-menu").css('margin-left'));

    if ((scroll - offset) > 0) {
      $(".chev-right i").css('opacity', '0.8');
    }
    else {
      $(".chev-right i").css('opacity', '0.6');

    }

    if (m < 0) {

      $(".chev-left i").css('opacity', '0.8');
    }
  });
  //***********************************************
  $(".chev-left").click(function () {
    var scroll = document.getElementById("nav-menu").scrollWidth;
    var offset = document.getElementById("nav-menu").offsetWidth;
    var m = parseInt($(".nav-menu").css('margin-left'));

    if (m < 0) {
          if ((m + 100) <= 0) {
            var nm = m + 100;
          }
          else {
            var nm = 0;
          }


          $(".nav-menu").css('margin-left', nm);

        }
    var scrolll = document.getElementById("nav-menu").scrollWidth;
    var offsetl = document.getElementById("nav-menu").offsetWidth;
    var ml = parseInt($(".nav-menu").css('margin-left'));

    if (ml < 0) {
      $(".chev-left i").css('opacity', '0.8');
    }
    else {
      $(".chev-left i").css('opacity', '0.6');

    }
    if ((scrolll - offsetl) >= 0) {
      $(".chev-right i").css('opacity', '0.8');
    }

  });
  //***********************************************
  $(".nav-menu").swipe({
    swipeStatus: function (event, phase, direction, distance, duration, fingerCount, fingerData) {
      if (phase=="move"){
      if (direction == 'left') {
        var scroll = document.getElementById("nav-menu").scrollWidth;
        var offset = document.getElementById("nav-menu").offsetWidth;
        var m = parseInt($(".nav-menu").css('margin-left'));

        if ((scroll - offset) > 0) {
          if ((offset + distance) <= scroll) {
            var nm = m - (distance);
          }
          else {
            var nm = m - (scroll - offset);
          }

          $(".nav-menu").css('margin-left', nm);

        }
        var scroll = document.getElementById("nav-menu").scrollWidth;
        var offset = document.getElementById("nav-menu").offsetWidth;
        var m = parseInt($(".nav-menu").css('margin-left'));

        if ((scroll - offset) > 0) {
          $(".chev-right i").css('opacity', '0.8');
        }
        else {
          $(".chev-right i").css('opacity', '0.6');

        }

        if (m < 0) {

          $(".chev-left i").css('opacity', '0.8');
        }
      }

      if (direction == 'right') {
        var scroll = document.getElementById("nav-menu").scrollWidth;
        var offset = document.getElementById("nav-menu").offsetWidth;
        var m = parseInt($(".nav-menu").css('margin-left'));

        if (m < 0) {
          if ((m + distance) <= 0) {
            var nm = m + distance;
          }
          else {
            var nm = 0;
          }


          $(".nav-menu").css('margin-left', nm);

        }
        var scrolll = document.getElementById("nav-menu").scrollWidth;
        var offsetl = document.getElementById("nav-menu").offsetWidth;
        var ml = parseInt($(".nav-menu").css('margin-left'));

        if (ml < 0) {
          $(".chev-left i").css('opacity', '0.8');
        }
        else {
          $(".chev-left i").css('opacity', '0.6');

        }
        if ((scrolll - offsetl) >= 0) {
          $(".chev-right i").css('opacity', '0.8');
        }
      }
      
    }
    }, allowPageScroll: "Vertical", threshold:10000, triggerOnTouchEnd:false, maxTimeThreshold:5000,
  });
  //************************************************
if ($(window).width() <= 540) {
  $(document).swipe({
    swipe: function (event, direction, distance, duration, fingerCount, fingerData) {
      if ($(window).width() <= 540) {
        if (direction == 'right') {
          $(".mobile-head-menu").css("display", "flex");
          $(".mobile-head-menu").animate({
            width: '100%'
          }, 'fast');
          document.getElementById("navtb").innerHTML = '<i class="fa fa-times" aria-hidden="true"></i>';
          $('body').animate({ scrollTop: 0 });
        }
        else if (direction == 'left') {
          if ($(".mobile-head-menu").css("display") == "flex" || $(".mobile-head-menu").css("width") == "100%") {

            $(".mobile-head-menu").animate({
              width: '0%'
            }, 'fast');

            document.getElementById("navtb").innerHTML = '<i class="fa fa-bars" aria-hidden="true"></i>';


          }
        }
      }

    }, allowPageScroll: "auto", threshold: 200, maxTimeThreshold:500
  });
}
//************************************************
var fsp=0;
$(window).scroll(function(){
if ($(window).width()<=500) {
  var lsp=$(this).scrollTop();
    if(lsp==0){
      $(".navigationbar").hide('fast','swing');
      $(".navigationbar").css("position","static");
      $(".search-bar-toggle").css("position","absolute");
      
      $(".navigationbar").show('fast','swing');
      $(".search-bar-toggle").hide('fast','linear');
      fsp=0;
    }
    if (lsp>50){
    if (lsp<fsp){
      if($(".navigationbar").css("position")=="static"){
      $(".navigationbar").hide();
      $(".search-bar-toggle").hide();}
      $(".navigationbar").css("position","fixed");
      $(".navigationbar").show('fast','linear');
       $(".search-bar-toggle").css("position","fixed");
       
    }
    else{
      if($(".navigationbar").css("position")=="fixed"){
      $(".navigationbar").hide('fast','linear');
      $(".search-bar-toggle").hide('fast','linear');
      
      }
    
    }
    fsp=lsp;
  }
}});
//************************************************
$(window).scroll(function () {

  if ($(window).scrollTop() > 600) {
    $('.scrolltotop').fadeIn("slow", "swing");

  }
  else {

    $('.scrolltotop').fadeOut("slow", "linear");
  }
});

//***********************************************
$(".scrolltotop").click(function () {
  $('body').animate({ scrollTop: 0 });
});

//***********************************************
var h = $(window).height();
$('.body-cm').css('height', h);




//***********************************************	
if ($(window).height()>500 && $(window).height()<540 ){
  $(".search-bar-toggle").css("top",($(".header").height()+$(".navigationbar").height()));
}

//**********************************************

});


//JS-Social Media share buttons
(function (d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=1604272106516828";
  fjs.parentNode.insertBefore(js, fjs);
} (document, 'script', 'facebook-jssdk'));

window.twttr = (function (d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);

  t._e = [];
  t.ready = function (f) {
    t._e.push(f);
  };

  return t;
} (document, "script", "twitter-wjs"));






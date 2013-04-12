$(function() {
  //Makes nav text scale to proper widths
  $('.navbar .nav > li > a').fitText();
  $(".navbar .nav > li.nav-nous > a").fitText(0.64);
  $(".navbar .nav > li.nav-services > a").fitText(0.48);
  $(".navbar .nav > li.nav-projects > a").fitText(0.51);
  $(".navbar .nav > li.nav-contact > a").fitText(0.58);

  //Removes IOS address bar if it can and there isn't a URL hash
  if($('#mobile-check').css('display') == "block"){
    if(!window.location.hash) {
      setTimeout(function () {   window.scrollTo(0, 1); }, 100);
    }
  }



  //Home page carousel
  var win_width = $(window).width();   // returns width of browser viewport
  var win_height = $(window).height();   // returns height of browser viewport
  var homeCarouselWidth = 0;
  $('.home-carousel ul li img').each(function(){
    // $(this).css({
    //   'height': (win_height-300)+"px"
    // });
    // $('.home-carousel-text').css({
    //   'height': (win_height-300)+"px"
    // });
  
    $(this).load(function () {
      homeCarouselWidth += $(this).width()+20;
    
      $('.home-carousel ul').css('width', (homeCarouselWidth*2)+"px");
    });
  });

  var carousel_pause = false;
  $('.home-carousel ul').clone().appendTo('.home-carousel');
  $('.page-template-page-projects-php .home-carousel').clone().appendTo('.home-container').addClass('click_carousel');
  $('.home-carousel-text ul').each(function(){
    $(this).clone().appendTo($(this).closest('.home-carousel-text'));
    $(this).clone().appendTo($(this).closest('.home-carousel-text'));
    $(this).clone().appendTo($(this).closest('.home-carousel-text'));
  });

  $('.click_carousel ul li').hover(function(){
    carousel_pause = true;
  }, function(){
    carousel_pause = false;
  });

  setInterval(everyframe, 20);
  var carousel_x = 0;
  var click_carousel_x = 0;
  var text_carousel_x = 0;
  function everyframe(){
    if(carousel_pause == false){
      carousel_x += 1;
      if(carousel_x > homeCarouselWidth){
        carousel_x = 0;
      }
      click_carousel_x += 2;
      if(click_carousel_x > homeCarouselWidth){
        click_carousel_x = 0;
      }
      text_carousel_x += 1;
      if(text_carousel_x > $('.home-carousel-text ul').width()){
        text_carousel_x = 0;
      }
      $('.home-carousel ul').css('left', (carousel_x*-1)+"px");
      $('.page-template-page-projects-php .home-carousel ul').css('left', (click_carousel_x*-1)+"px");
      $('.home-carousel-text-right').css('right', (text_carousel_x*-2)+"px");
      $('.home-carousel-text-left').css('left', (text_carousel_x*-2)+"px");
    }
  }

  //Projects page carousel
  $('.project-carousel').jcarousel({
    'wrap': 'circular',
    'animation': {
      'duration': 300,
      'easing':   'linear'
    }
  });
  $('[data-jcarousel-control]').each(function() {
      var el = $(this);
      el.jcarouselControl(el.data());
  });

  //scales carousel
  $('.project-carousel ul li .project-image-container').width($('.page-projects').width());
  window.onresize = function(event) {
    $('.project-carousel ul li .project-image-container').width($('.page-projects').width());
  }


  //allows swiping for carousel controlling
  if($('#ios-check').css('display') == "block"){
    $('.project-carousel').hammer().on("swipeleft", function(event) {
      $(this).jcarousel('scroll', '+=1');
    }).on("swiperight", function(event) {
      $(this).jcarousel('scroll', '-=1');
    });
  };
});
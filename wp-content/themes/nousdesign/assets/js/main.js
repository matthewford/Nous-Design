$(function() {
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

  $('.home-carousel ul').clone().appendTo('.home-carousel');
  $('.home-carousel-text ul').each(function(){
    $(this).clone().appendTo($(this).closest('.home-carousel-text'));
    $(this).clone().appendTo($(this).closest('.home-carousel-text'));
    $(this).clone().appendTo($(this).closest('.home-carousel-text'));
  });

  setInterval(everyframe, 20);
  var carousel_x = 0;
  var text_carousel_x = 0;
  function everyframe(){
    carousel_x += 1;
    if(carousel_x > homeCarouselWidth){
      carousel_x = 0;
    }
    text_carousel_x += 1;
    if(text_carousel_x > $('.home-carousel-text ul').width()){
      text_carousel_x = 0;
    }
    $('.home-carousel ul').css('left', (carousel_x*-1)+"px");
    $('.home-carousel-text-right').css('right', (text_carousel_x*-2)+"px");
    $('.home-carousel-text-left').css('left', (text_carousel_x*-2)+"px");
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

  //Makes nav text scale to proper widths
  $('.navbar .nav > li > a').fitText();
  $(".navbar .nav > li.nav-nous > a").fitText(0.64);
  $(".navbar .nav > li.nav-services > a").fitText(0.48);
  $(".navbar .nav > li.nav-projects > a").fitText(0.50);
  $(".navbar .nav > li.nav-contact > a").fitText(0.53);
});
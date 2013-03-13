$(function() {
  //carousel
  var win_width = $(window).width();   // returns width of browser viewport
  var win_height = $(window).height();   // returns height of browser viewport
  var homeCarouselWidth = 0;
  $('.home-carousel ul li img').each(function(){
    $(this).css({
      'height': (win_height-300)+"px"
    });
    $('.home-carousel-text').css({
      'height': (win_height-300)+"px"
    });
  
    $(this).load(function () {
      homeCarouselWidth += $(this).width()+20;
    
      $('.home-carousel ul').css('width', (homeCarouselWidth*2)+"px");
    });
  });

  $('.home-carousel ul li').clone().appendTo('.home-carousel ul');
  $('.home-carousel-text ul li.nousdesign_1.second').css('margin-left', ((win_width-400)*-1)+'px');
  $('.home-carousel-text ul li.nousdesign_4.second').css('margin-left', ((win_width-1000)*-1)+'px');
  $('.home-carousel-text ul li.nousdesign_2.second').css('margin-left', ((win_width+1000))+'px');
  $('.home-carousel-text ul li.nousdesign_3.second').css('margin-left', ((win_width))+'px');

  setInterval(everyframe, 1);
  var carousel_x = 0;
  var text_carousel_x = 0;
  function everyframe(){
    carousel_x += 1;
    if(carousel_x > homeCarouselWidth){
      carousel_x = 0;
    }
    text_carousel_x += 1;
    if(text_carousel_x > win_width/2){
      text_carousel_x = 0;
    }
    $('.home-carousel ul').css('left', (carousel_x*-1)+"px");
    $('.home-carousel-text .nousdesign_1, .home-carousel-text .nousdesign_4').css('left', (text_carousel_x*2)+"px");
    $('.home-carousel-text .nousdesign_2, .home-carousel-text .nousdesign_3').css('left', (text_carousel_x*-2)+"px");
  }
});
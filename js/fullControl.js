$(function(){
  var $window = $(window);
  var $main = $('.main');
  var windowHeight = 0;
  var scrollHeight = 0;
  var scrollIndex = 0;
  var scrollFinsh = 5;

  $window.on('load resize', function(){
    $('body').height(windowHeight = $(this).height());
    $main.children('.view').each(function(){
      if($(this).hasClass('active')){
        scrollHeight = ($(this).index()) * windowHeight;
        return false;
      }
    });
    $main.scrollTop(scrollHeight);
  });

  $window.on('keyup', function(e){
    if(!$main.is(':animated')){
      if(e.keyCode == 83){ //press S
        console.log("press S");
        $main.children('.view').each(function(){
          if($(this).hasClass('active') && $(this).next('.view').length!=0){
            $(this).removeClass('active');
            $(this).next('.view').addClass('active');
            scrollHeight = ($(this).next('.view').index()) * windowHeight;
            return false;
          }
        });
      }
      else if(e.keyCode == 87){ //press W
        console.log("press W");
        $main.children('.view').each(function(){
          if($(this).hasClass('active') && $(this).prev('.view').length!=0){
            $(this).removeClass('active');
            $(this).prev('.view').addClass('active');
            scrollHeight = ($(this).prev('.view').index()) * windowHeight;
            return false;
          }
        });
      }
      $main.animate({scrollTop: scrollHeight}, 'slow');
    }
  });
  $window.on('DOMMouseScroll mousewheel', function(e){
    //$main.is(':animated');
    if(!$main.is(':animated')){
      if(e.originalEvent.detail > 0 || e.originalEvent.wheelDelta < 0) { //alternative options for wheelData: wheelDeltaX & wheelDeltaY
        //scroll down
        $main.children('.view').each(function(){
          if($(this).hasClass('active') && $(this).next('.view').length!=0){
            $(this).removeClass('active');
            $(this).next('.view').addClass('active');
            scrollHeight = ($(this).next('.view').index()) * windowHeight;
            return false;
          }
        });
      } else {
        //scroll up
        $main.children('.view').each(function(){
          if($(this).hasClass('active') && $(this).prev('.view').length!=0){
            $(this).removeClass('active');
            $(this).prev('.view').addClass('active');
            scrollHeight = ($(this).prev('.view').index()) * windowHeight;
            return false;
          }
        });
      }
      //prevent page fom scrolling
      $main.animate({scrollTop: scrollHeight}, 'slow');
    }
    return false;
  });
})

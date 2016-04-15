$(function() {
  var $window = $(window);
  //URL function
  $.UrlParam = function(name) {
      //宣告正規表達式
      var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
      /*
       * window.location.search 獲取URL ?之後的參數(包含問號)
       * substr(1) 獲取第一個字以後的字串(就是去除掉?號)
       * match(reg) 用正規表達式檢查是否符合要查詢的參數
       */
      var r = window.location.search.substr(1).match(reg);
      //如果取出的參數存在則取出參數的值否則回穿null
      if (r != null) return unescape(r[2]);
      return null;
    }
    /*load*/

  var url = window.location.protocol + '//' + window.location.hostname + window.location.pathname;

  function switchPage(i) {
    function ajaxUnbild() {
      $window.unbind('scroll');

      /*insert up effect*/
      $window.on('scroll resize', check_if_in_view);
      /*show scroll up*/
      $window.on('scroll', function() {
        var scrollTop = $(this).scrollTop();
        /*scroll top*/
        if (scrollTop >= 200) {
          $('.scrollup').fadeIn().css("display", "flex");;
        } else {
          $('.scrollup').fadeOut();
        }
        var window_bottom_position = ($(this).scrollTop() + $(this).height());
      });
    }
    switch (i) {
      case '1':
        $('.content').fadeOut(500, function() {
          $(this).load('layout/home.html', function() {
            ajaxUnbild();
            if ($window.width() < '768') {
              $('.surface img').attr('src', 'images/surface_backup.png');
              $('.blurry').attr('src', 'images/surface_backup_blurry.png');
            }

            /*home*/
            $window.bind('scroll', function() {
              var scrollTop = $(this).scrollTop();
              /*home image blurry*/
              var $blurry = $('.blurry');
              var imageBottom = ($blurry.outerHeight() + $blurry.offset().top);
              var blurryPosition = scrollTop / (imageBottom / 3 * 2);
              $blurry.css('opacity', (blurryPosition <= 1) ? blurryPosition : 1);
            });
            $(this).fadeIn(500, function() {
              /*這邊寫換頁動畫*/
              $('.blurryInMain').addClass('In');


            });
          });
        });

        break;
      case '2':
        $('.content').fadeOut(500, function() {
          $(this).load('layout/aspect.html', function() {
            ajaxUnbild();
            /*aspect*/

            $(this).fadeIn(500, function() {
              /*這邊寫換頁動畫*/
            });
          });
        });
        break;
      case '3':
        $('.content').fadeOut(500, function() {
          $(this).load('layout/anonymous.html', function() {
            ajaxUnbild();
            /*aspect*/

            $(this).fadeIn(500, function() {
              /*這邊寫換頁動畫*/
            });
          });
        });
        break;
      case '4':
        $('.content').fadeOut(500, function() {
          $(this).load('layout/instruction.html', function() {
            ajaxUnbild();
            /*我不知道這個要擺哪邊得斯*/
            $('.active-slide').hide().fadeIn(500);
            $('.arrow-next').bind('click', function() {
              var $currentSlide = $('.active-slide');
              var nextSlide = $currentSlide.next('.slide');
              var $currentDot = $('.active-dot');
              var nextDot = $currentDot.next('.dot');

              if (nextSlide.length != 0) {
                $currentSlide.fadeOut(500, function() {
                  nextSlide.fadeIn(500).addClass('active-slide');
                }).removeClass('active-slide');
                $currentDot.removeClass('active-dot');
                nextDot.addClass('active-dot');
              }
            });
            $('.arrow-prev').bind('click', function() {
              var $currentSlide = $('.active-slide');
              var prevSlide = $currentSlide.prev('.slide');
              var $currentDot = $('.active-dot');
              var prevDot = $currentDot.prev('.dot');

              if (prevSlide.length != 0) {
                $currentSlide.fadeOut(500, function() {
                  prevSlide.fadeIn(500).addClass('active-slide');
                }).removeClass('active-slide');
                $currentDot.removeClass('active-dot');
                prevDot.addClass('active-dot');
              }

            });
            $(this).fadeIn(500, function() {
              /*這邊寫換頁動畫*/

            });
          });
        });
        break;
      case '5':
        $('.content').fadeOut(500, function() {
          $(this).load('layout/aspect.html', function() {
            ajaxUnbild();
            /*aspect*/

            $(this).fadeIn(500, function() {
              /*這邊寫換頁動畫*/
              $window.scroll();
            });
          });
        });
        break;
      case '6':
        $('.content').fadeOut(500, function() {
          $(this).load('layout/aboutus.html', function() {
            ajaxUnbild();
            /*aspect*/

            $(this).fadeIn(500, function() {
              /*這邊寫換頁動畫*/
            });
          });
        });
        break;
    }
    $('.menu ul li, .mobile-menu ul li').removeClass('active');
    $('.menu ul li:nth-child(' + i + '), .mobile-menu ul li:nth-child(' + i + ')').addClass('active');
    index = $.UrlParam('index');
  };
  /*switch page*/
  var index = $.UrlParam('index');
  if (!!index) {
    switchPage(index);
  } else {
    switchPage('1');
  }

  /*header*/
  var clickFunction = function() {
    var obj = {
      Page: 'index',
      Url: 'index.html?index=' + ($(this).index() + 1)
    };
    history.pushState(obj, obj.Page, obj.Url);
    var index = $.UrlParam('index');
    switchPage(index);
    $('.veil').click();
  };
  $('.menu ul li, .mobile-menu ul li').on('click', clickFunction);

  $('.mobile-menu-button').on('click', function() {

    if(!$(this).hasClass('active')){
      $('.mobile-menu').animate({
        left: '50%'
      }, 'slow');
      $('body').css('overflowY', 'hidden');
      $('.veil').fadeIn('slow');
      $(this).addClass('active');
    }
    else{
      $('.veil').click();
    }
  });
  $('.veil').on('click', function() {
    $('.mobile-menu').animate({
      left: '100%'
    }, 'slow');
    $('body').css('overflowY', 'auto');
    $('.veil').fadeOut('slow');
    $('.mobile-menu-button').removeClass('active');
  });
  $('.scrollup').on('click', function() {
    $('html, body').animate({
      scrollTop: 0
    }, 'slow');
  });




  /*insert up*/
  function check_if_in_view() {
    var window_height = $window.height();
    var window_top_position = $window.scrollTop();
    var window_bottom_position = (window_top_position + window_height);
    var $animation_elements = $('.insertup, .insertleft, .insertright');
    $.each($animation_elements, function() {
      var $element = $(this);
      var element_height = $element.outerHeight();
      var element_top_position = $element.offset().top;
      var element_bottom_position = (element_top_position + element_height);

      //check to see if this current container is within viewport
      if ((element_top_position <= window_bottom_position)) {
        $element.addClass('insert');
      } else {
        $element.removeClass('insert');
      }
    });
  };

});

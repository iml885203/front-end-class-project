$(function() {
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
      var fadein = function(){
        if($(window).width() < '768'){
          $('.surface img').attr('src','images/surface_backup.png');
          $('.blurry').attr('src','images/surface_backup_blurry.png');
        }
        $(this).fadeIn(500,function(){
          /*這邊寫換頁動畫*/
          var oao = $('.oao');
          oao.animate({fontSize : '3em'}, 1000);
          oao.animate({fontSize : '1em'}, 1000);
        });
      };
        switch (i) {
            case '1':
                $('.content').fadeOut(500,function(){
                  $(this).load('layout/home.html',fadein);
                });
                break;
            case '5':
                $('.content').fadeOut(500,function(){
                  $(this).load('layout/aspect.html',fadein);
                });
                break;
            case '6':
                $('.content').fadeOut(500,function(){
                  $(this).load('layout/aboutus.html',fadein);
                });
                break;
        }
        $('.menu ul li, .mobile-menu ul li').removeClass('active');
        $('.menu ul li:nth-child(' + i + '), .mobile-menu ul li:nth-child(' + i + ')').addClass('active');
    };
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

    $('.mobile-menu-button').on('click', function(){
      $('body').animate({right: '200px'}, 'slow');
      $('.veil').fadeIn('slow');
    });
    $('.veil').on('click', function(){
      $('body').animate({right: '0px'}, 'slow');
      $('.veil').fadeOut('slow');
    });
    $('.scrollup').on('click', function(){
      $('html, body').animate({scrollTop: 0}, 'slow');
    });

    /*home*/
    $(window).on('scroll', function() {
      var scrollTop = $(this).scrollTop();
      /*image blurry*/
      $('.blurry').css('opacity', scrollTop/200);
      /*scroll top*/
      if(scrollTop >= 200){
        $('.scrollup').fadeIn().css("display","flex");;
      }
      else{
        $('.scrollup').fadeOut();
      }
      var window_bottom_position = ($(this).scrollTop() + $(this).height());

    });

    /*animation-element*/

    var $window = $(window);

    function check_if_in_view() {
      var window_height = $window.height();
      var window_top_position = $window.scrollTop();
      var window_bottom_position = (window_top_position + window_height);
      var $animation_elements = $('.insertup');
      $.each($animation_elements, function() {
        var $element = $(this);
        var element_height = $element.outerHeight();
        var element_top_position = $element.offset().top;
        var element_bottom_position = (element_top_position + element_height);

        //check to see if this current container is within viewport
        if ((element_bottom_position >= window_top_position) &&
          (element_top_position <= window_bottom_position)) {
          $element.addClass('insert');
        } else {
          $element.removeClass('insert');
        }
      });
    }

    $window.on('scroll resize', check_if_in_view);

});

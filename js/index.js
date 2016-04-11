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
        switch (i) {
            case '1':
                $('.content').load('layout/home.html');
                break;
            case '5':
                $('.content').load('layout/aspect.html');
                break;
            case '6':
                $('.content').load('layout/aboutus.html');
                break;
        }
        $('.menu ul li').removeClass('active');
        $('.menu ul li:nth-child(' + i + ')').addClass('active');
    };
    var index = $.UrlParam('index');
    if (!!index) {
        switchPage(index);
    } else {
        $('.content').load('layout/home.html');
        $('.menu ul li:nth-child(1)').addClass('active');
    }

    /*header*/
    $('.menu ul li').on('click', function() {
        // $('.menu ul li').removeClass('active');
        // $(this).addClass('active');
        //window.location.replace(url + '?index=' + ($(this).index()+1));
        var obj = {
            Page: 'index',
            Url: 'index.html?index=' + ($(this).index() + 1)
        };
        history.pushState(obj, obj.Page, obj.Url);
        var index = $.UrlParam('index');
        switchPage(index);
    });


});

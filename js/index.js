$(function(){
  /*load*/
  $('.content').load('layout/home.html');

  /*header*/
  $('.menu ul li').on('click', function(){
    $('.menu ul li').removeClass('active');
    $(this).addClass('active');
  });
  $('.menu ul li:nth-child(1)').on('click', function(){
    $('.content').load('layout/home.html');
  });
  $('.menu ul li:nth-child(5)').on('click', function(){
    $('.content').load('layout/aboutus.html');
  });
});

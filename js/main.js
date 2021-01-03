// ======================TOP 至頂==========================
$(window).scroll(function () {
 if ($(this).scrollTop() > 200) {
  $('.go-top').addClass('active');
 } else {
  $('.go-top').removeClass('active');
 }
});


$(function () {
 // 幫 a.abgne_gotoheader 加上 click 事件
 $('.go-top').click(function () {
  // 讓捲軸用動畫的方式移動到 0 的位置
  // 感謝網友 sam 修正 Opera 問題
  var $body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');
  $body.animate({
   scrollTop: 0
  }, 1000);

  return false;

 });

});
$(function () {
 

 $('.menu-btn').click(function () {
  if (!$(this).hasClass('active')) {
   $(this).addClass('active');
   $('.menu-box').addClass('active');
  } else {
   $(this).removeClass('active');
   $('.menu-box').removeClass('active');
  }
 });

 $('.down-btn').click(function () {

  if (!$(this).hasClass('active')) {
   $(this).addClass('active');
   $(this).siblings('.down-menu').addClass('active');
   $(this).parent('li').addClass('active');
   $(this).parent('li').siblings('li').removeClass('active');
   $(this).parent().siblings().find('.down-menu').removeClass('active');
   $(this).parent().siblings().find('.down-btn').removeClass('active');
  } else {
   $(this).removeClass('active');
   $(this).siblings('.down-menu').removeClass('active');
   $(this).parent('li').removeClass('active');
  }
 });

 $('.ans-btn').click(function () {

  if (!$(this).hasClass('active')) {
   $(this).addClass('active');
   $(this).siblings('.ans-list').find('.ans').addClass('active');
   $(this).siblings('.ans-ps').addClass('active');
   
  } else {
   $(this).removeClass('active');
   $(this).siblings('.ans-list').find('.ans').removeClass('active');
   $(this).siblings('.ans-ps').removeClass('active');
  }
 });


 // $('#ans-btn').click(function () {

 //  if (!$(this).hasClass('active')) {
 //   $(this).addClass('active');
 //   $('#ans-box').addClass('active');
 //   $('#back').addClass('active');
 //  } else {
 //   $(this).removeClass('active');
 //   $('#ans-box').removeClass('active');
 //   $('#back').removeClass('active');
 //  }
 // });

});

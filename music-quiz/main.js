$(function () {

 $('#ans-btn').click(function () {

  if (!$(this).hasClass('active')) {
   $(this).addClass('active');
   $('#ans-box').addClass('active');
   $('#back').addClass('active');
  } else {
   $(this).removeClass('active');
   $('#ans-box').removeClass('active');
   $('#back').removeClass('active');
  }
 });

});
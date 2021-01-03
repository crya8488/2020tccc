<!doctype html>
<html lang="zh-Hant-TW">

<head>
 <title>2020中部漫聯同樂會~二次元機智問答aka文字題~ </title>
 <meta property="og:title" content="2020中部漫聯同樂會~二次元機智問答aka文字題~ "/> 
	<?php include("includes/g-meta.php") ?>

	<!--[if lt IE 9]>
<script>
    alert("建議使用IE10以上版本");
</script>
<![endif]-->
<script>
// 題組切換
  $(function(){
   var _showTab = 0;
   $('.quiz-wrap').each(function(){
    var $tab = $(this);
    var $defaultLi = $('ul.btn-list li', $tab).eq(_showTab).addClass('active');
    $($defaultLi.find('a').attr('href')).siblings().hide();
    $('ul.btn-list li', $tab).click(function() {
     var $this = $(this),
      _clickTab = $this.find('a').attr('href');
     $this.addClass('active').siblings('.active').removeClass('active');
     $(_clickTab).stop(false, true).fadeIn(0.5).addClass('active').siblings().removeClass('active').hide();
     return false;
    }).find('a').focus(function(){
     this.blur();
    });
   });



   $('.all-ans-btn').click(function () {

   if (!$(this).hasClass('active')) {
    $(this).addClass('active');
    $('.quiz-wrap').find('.ans-btn').addClass('active');
    $('.quiz-wrap').find('.ans').addClass('active');
    $('.quiz-wrap').find('.ans-ps').addClass('active');
    
   } else {
    $(this).removeClass('active');
    $('.quiz-wrap').find('.ans-btn').removeClass('active');
    $('.quiz-wrap').find('.ans').removeClass('active');
    $('.quiz-wrap').find('.ans-ps').removeClass('active');
   }
  });

});


</script>

</head>

<body>	
 <?php include("includes/g-header.php") ?> 
 <div class="g-wrapper animate-quiz">
  <h1>
   2020中部漫聯同樂會<br>
   ~二次元機智問答aka文字題~  
  </h1>
  <!-- <p>我們的題庫都在這裡了！自己玩吧！</p> -->

  
  <div class="all-ans-btn">
   <img src="img/see.png" alt="">
   <p>看所有答案</p>
   <p>隱藏所有答案</p>
  </div>
  


  <div class="quiz-wrap">
  

  <ul class="btn-list">
   <li class="active"><a href="#tab1">全題庫</a></li>
   <li><a href="#tab2">帷辰題組</a></li>
   <li><a href="#tab3">哭啊題組</a></li>
   <li><a href="#tab4">黎曄題組</a></li>
  </ul>

  

  <div class="quiz-ans-box">
   <div id="tab1">
    <ul class="quiz-list">
     <?php include("includes/quiz1.php") ?> 
     <?php include("includes/quiz2.php") ?> 
     <?php include("includes/quiz3.php") ?> 
    </ul>
   </div>

   <div id="tab2">
    <ul class="quiz-list" >
     <?php include("includes/quiz1.php") ?>
    </ul>
   </div>

   <div id="tab3">
    <ul class="quiz-list">
     <?php include("includes/quiz2.php") ?> 
    </ul>
   </div>

   <div id="tab4">
    <ul class="quiz-list">
     <?php include("includes/quiz3.php") ?> 
    </ul>
   </div>
  </div>

  </div>
 </div>
 <?php include("includes/g-footer.php") ?> 
</body>
</html>
<!doctype html>
<html lang="zh-Hant-TW">

<head>
<title>2020中部漫聯同樂會</title>
<meta property="og:title" content="2020中部漫聯同樂會~劇情結局大公開~"/> 
	<?php include("includes/g-meta.php") ?>

 <link rel="stylesheet" href="../css/owl.carousel.min.css">
 <link rel="stylesheet" href="../css/owl.theme.default.min.css">
 <script src="js/owl.carousel.js"></script>
 <script src="js/owl.carousel.min.js"></script>

	<!--[if lt IE 9]>
<script>
    alert("建議使用IE10以上版本");
</script>
<![endif]-->
<script>
     

  $(function(){

   // 題組切換
   var _showTab = 0;
   $('.ending-wrap').each(function(){
    var $tab = $(this);
    var $defaultLi = $('ul.btn-list li', $tab).eq(_showTab).addClass('active');
    $($defaultLi.find('a').attr('href')).siblings().addClass('hide');
    $('ul.btn-list li', $tab).click(function() {
     var $this = $(this),
      _clickTab = $this.find('a').attr('href');
     $this.addClass('active').siblings('.active').removeClass('active');
     $(_clickTab).stop(false, true).removeClass('hide').siblings().addClass('hide');
     return false;
    }).find('a').focus(function(){
     this.blur();
    });
   });

   //純文字
   $('.text-btn').click(function(){
        if (!$(this).hasClass('active')) {
           $(this).addClass('active');
           $(this).next('.text-box').addClass('active');
          } else {
           $(this).removeClass('active');
           $(this).next('.text-box').removeClass('active');
          }
       });

   

});

$(function(){

   //圖片輪播
   $('.pic-box').owlCarousel({
         items:1,
         nav:$('.pic-box').children().length>1,
         navText:'',
         dots:$('.pic-box').children().length>1,
         autoplay:false,
         loop: false,
         center: true,
         margin:10,
         smartSpeed:1000,
         responsive:{
          0:{
           nav:false           
          },
          769:{
           nav:$('.pic-box').children().length>1,
          }

         }
     });
});

</script>

<style>
.pic-box .owl-nav[class*=owl-] .owl-prev {
	background-image: url(img/arrow-left.svg);
  background-position:left;
  background-size: contain;
	height: 50px;
	width: 30px;
	opacity: 1;
	left: -30px;
	top: 50%;
	transform: translateY(-50%);
}
.pic-box .owl-nav[class*=owl-] .owl-prev:hover{
	background-image: url(img/arrow-left.svg);
	background-position:left;
	opacity: 0.8; 
}
.pic-box .owl-nav[class*=owl-] .owl-next {
	background-image: url(img/arrow-right.svg);
  background-position:right;
  background-size: contain;
	height: 50px;
	width: 30px;
	opacity: 1;
	border-radius: 0;
	right: -30px;
	top: 50%;
	transform: translateY(-50%);
}
.pic-box .owl-nav[class*=owl-] .owl-next:hover{
	background-position:right;
	background-image: url(img/arrow-right.svg);
	opacity: 0.8;
}
.pic-box .owl-stage-outer{
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(100,100,100,0.2)
}
</style> 

</head>

<body>	
 <?php include("includes/g-header.php") ?> 
 <div class="g-wrapper animate-quiz">
  <h1>
   2020中部漫聯同樂會<br>
   ~劇情結局大公開~
  </h1>


  <div class="ending-wrap">
  
  

  <ul class="btn-list">
   <li><a href="#tab1">三結局總覽</a></li>
   <li><a href="#tab2">怪盜20子勝利結局</a></li>
   <li><a href="#tab3">偵探20君勝利結局</a></li>
   <li><a href="#tab4">警察啾啾勝利結局</a></li>
  </ul>

  <div class="content">
  <div id="tab1" class="tab-box">
    <span id="ending1"></span>
    <?php include("includes/ending1.php") ?> 
    <br>
    <br>
    <span id="ending2"></span>
    <?php include("includes/ending2.php") ?> 
    <br>
    <br>
    <span id="ending3"></span>
    <?php include("includes/ending3.php") ?> 
   </div>
   <div id="tab2" class="tab-box">
   <?php include("includes/ending1.php") ?> 
   </div>

   <div id="tab3" class="tab-box">
   <?php include("includes/ending2.php") ?> 
   </div>

   <div id="tab4" class="tab-box">
   <?php include("includes/ending3.php") ?> 
   </div>

   
  </div>

  </div>
 </div>
 <?php include("includes/g-footer.php") ?> 
</body>
</html>
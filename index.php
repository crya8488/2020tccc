<!doctype html>
<html lang="zh-Hant-TW">

<head>
	<?php include("includes/g-meta.php") ?>
 <link rel="stylesheet" href="../css/owl.carousel.min.css">
 <link rel="stylesheet" href="../css/owl.theme.default.min.css">
 <script src="js/owl.carousel.js"></script>
 <script src="js/owl.carousel.min.js"></script>
 <script>
     
     $(function(){  
      //大圖輪播
         $('.banner-wrap').owlCarousel({
             items:1,
             nav:$('.banner-wrap').children().length>1,
             navText:'',
             dots:$('.banner-wrap').children().length>1,
             autoplay:true,
             loop: $('.banner-wrap').children().length>1,
             center:true,
             margin:0,
             smartSpeed:1000
         });

         $('.draw-list').owlCarousel({
             items:4,
             nav:$('.draw-list').children().length>5,
             navText:'',
             dots:$('.draw-list').children().length>1,
             autoplay:true,
             loop: $('.draw-list').children().length>1,
             center:true,
             margin:10,
             smartSpeed:1000,
             autoWidth:true,
             responsive:{
              0:{
               items:2
              },
              601:{
               items:3
              },
              1025:{
               items:4
              }
             }
         });




         //前言


          $('.intro-box li .btn').click(function(){

             $(this).next().addClass('active');
             $('body').addClass('pop');

          });

          $('.intro-box .intro').click(function(){
             $(this).parent().siblings('.popup-wrap').addClass('active');
             $('body').addClass('pop');
          });


          $('.pop-bg').click(function(){
           $(this).parent('.popup-wrap').removeClass('active');
           $('body').removeClass('pop');
          });

          $('.close-btn').click(function(){
           $(this).parents('.popup-wrap').removeClass('active');
           $('body').removeClass('pop');
          });


          //信封

         $('.letter-btn').click(function(){
          if (!$(this).hasClass('active')) {
             $(this).addClass('active');
             $('.story').addClass('active');
             $('.letter-box').addClass('active');
             $('.envelope').addClass('active');
            } else {
             $(this).removeClass('active');
             $('.story').removeClass('active');
             $('.letter-box').removeClass('active');
             $('.envelope').removeClass('active');
            }
         });

      });


        
  </script>  

	<!--[if lt IE 9]>
<script>
    alert("建議使用IE10以上版本");
</script>
<![endif]-->

</head>

<body>	
 <?php include("includes/g-header.php") ?> 

 

	<div class="g-wrapper index-wrap">
  <h1>
   2020中部漫聯同樂會
  </h1>
  <div class="link-box">
  <a href="#"></a>
  </div>

  <div class="idx-banner">
   <ul class="banner-wrap">
    <li>
      <img src="img/banner1.jpg" alt="" class="pc">
      <img src="img/banner-m1.jpg" alt="" class="m">
      <a href="music-quiz/">現在就玩 ➜</a>
      </li>
      <li>
      <img src="img/banner2.jpg" alt="" class="pc">
      <img src="img/banner-m2.jpg" alt="" class="m">
      <a href="animate-quiz.php">馬上挑戰 ➜</a>
     </li>
     <li>
     <img src="img/banner3.jpg" alt="" class="pc">
     <img src="img/banner-m3.jpg" alt="" class="m">
     <a href="ending.php">來看結局 ➜</a>
     </li>
   </ul>
  </div>

  <div class="idx-intro">

   <!-- <p>起源自某位親愛的友人婚宴上動漫曲歌單的活動</p>
   <h5>── 2020中部漫聯同樂會 ──</h5>
   <p>在多方努力，以及被選召的孩子們踴躍參與之下<br>
    成功地於2月29日這一天落幕<br>
    讓我們來回顧一下發生了什麼有趣的事吧！
   </p> -->
   <p>
    一場昔日舊友的下午茶敘，<br>
    一封意想不到的犯罪預告！<br>
    真相的彼岸存在著什麼呢？<br>
    「對決！偵探20君與怪盜20子~早春的漫畫研究社事件~」<br>
    於2020年2月29日華麗開演！<br>
    <br>
    在多方努力及被選召的孩子們踴躍參與之下<br>
    活動成功落幕了！讚讚讚！<br>
    讓我們來回顧一下吧！
   </p>
  </div>

  



 
 
  

  <div class="story-wrap" style="background-image:url(img/bg2.jpg);">

  <div class="story">
    <div class="story-box">
     <div class="text-pc">
      <h3>對決！偵探20君與怪盜20子<br>～早春的漫畫研究社事件～</h3>
      <br>
      <p>
       中女漫研20屆的兩大看板人物20君和20子<br>
       邀請過去的漫聯小夥伴舉辦歡樂的茶會<br>
       沒想到在茶會的前夕，20君收到了<b>謎之預告信...</b><br>
      </p>
     </div>
     <div class="text-m">

      <h3>對決！<br>偵探20君與怪盜20子<span><br>～早春的漫畫研究社事件～</span></h3>
      <br>
      <p>
       中女漫研20屆的兩大看板人物<br>
       20君和20子<br>
       邀請過去的漫聯小夥伴<br>
       舉辦歡樂的茶會<br>
       沒想到在茶會的前夕<br>
       20君收到了<b>謎之預告信...</b><br>
      </p>
     </div>
    

     

    <div class="letter-box">
     <img src="img/letter.jpg" alt="">
     <h4><b>神秘怪盜將在茶會上現身！</b></h4><br>
     <p>如果被怪盜偷走最重要的東西<br>
     就要請20子吃一個月的咖哩！<br>
     <p>等等！犯人的真面目已經非常清楚了吧！<br>
     <br></p>
     <h5>20子、20君，和啾啾們<br>
     各懷心思的三方人馬<br>
     將以角色扮演的方式一決勝負！！！</h5>
    </div>
    </div>

    <div class="envelope">
     <img src="img/envelope.png" alt="">
     <img src="img/envelope-open.png" alt="">
     <a class="letter-btn btn-big"><span>開啟</span><span>收起</span>信封</a>
    </div>

    

    
     
    
  </div>

  </div>
  

<!-- 陣營介紹 -->
 <div class="team-box">
  <h3>本次活動參加者分為三大陣營！</h3>
  <p>簽到時以抽籤方式決定所屬陣營<br>
  每一陣營會拿到屬於他們的故事前言...</p>

  <br>

  <ul class="intro-box demo-gallery">
   <li>
     <h4>怪盜20子陣營</h4>
      <div class="pic">
     <img src="img/team3.jpg" alt="" class="main">
     <img src="img/intro3.jpg" alt="" class="intro">
     </div>
     <a href="#tab3" class="btn">閱讀前言<img src="img/icon-zoomin.svg" alt=""></a>    
     <?php include('includes/intro3.php')?>
   </li>
   <li>
     <h4>偵探20君陣營</h4>
      <div class="pic">
     <img src="img/team1.jpg" alt="" class="main">
     <img src="img/intro1.jpg" alt="" class="intro">
     </div>
     <a href="#tab2" class="btn">閱讀前言<img src="img/icon-zoomin.svg" alt=""></a>
     <?php include('includes/intro1.php')?>
   </li>
   <li>
     <h4>警察啾啾陣營</h4>
     <div class="pic">
      <img src="img/team2.jpg" alt="" class="main">
      <img src="img/intro2.jpg" alt="" class="intro">
     </div>
     <a href="#tab1" class="btn">閱讀前言<img src="img/icon-zoomin.svg" alt=""></a>
     <?php include('includes/intro2.php')?>

   </li>
   
  </ul>

  

  </div>



  <!-- 音樂題 -->
  <div class="idx-music">
  
   <h3>♫ 漫聯活動定番：音樂題 ♪</h3>

   <h5><br>最想重溫的高中社團活動NO.1！<br>線上題庫大公開！</h5>
   <a href="music-quiz/" class="btn-big">馬上來玩音樂題 ♫</a>

  </div>

  
 <!-- 遊戲 -->
  <div class="game">
   <img src="img/map.jpg" alt="" class="map-pic">

   <div class="btn-box">
    <div class="title">
    <h5>重點遊戲環節！</h5>
     <h3>～陣營對決：寶物爭奪保衛戰～</h3>
    </div>
    
    <a href="game.php#tab1" class="btn">規則說明<img src="img/arrow-right.svg" alt=""></a>
    <a href="game.php#tab2" class="btn">遊戲地圖<img src="img/arrow-right.svg" alt=""></a>
    <a href="game.php#tab3" class="btn">技能卡<img src="img/arrow-right.svg" alt=""></a>
    <a href="game.php#tab4" class="btn">挑戰！<img src="img/arrow-right.svg" alt=""></a>
    <a href="animate-quiz.php" class="btn-big">文字題題庫 ✎</a>
   </div>

 </div>


 <div class="idx-end">
  <h3>劇情結局公開</h3>
  <h5>
   久等了！三陣營結局終於公開！
  </h5>
  <br>
  <ul>
  <li>
    <a href="ending.php#ending1"><img src="img/team3-2.jpg" alt="">
     <h5>怪盜20子陣營<br>勝利結局 ➜</h5>
    </a>
   </li>
   <li>
    <a href="ending.php#ending2"><img src="img/team1-2.jpg" alt="">
     <h5>怪盜20君陣營<br>勝利結局 ➜</h5>
    </a>
   </li>
   <li>
    <a href="ending.php#ending3"><img src="img/team2-2.jpg" alt="">
     <h5>警察啾啾陣營<br>勝利結局 ➜</h5>
    </a>
   </li>
   
  </ul>
  <a href="ending.php" class="btn-big">所有結局 ➜</a>
 </div>


 




 

 <!-- <a href="ending.php" class="btn">劇情結局公開</a> -->







<div class="idx-music feedback" style="">
  
   <h3>回饋單</h3>

   <br>

   <p>非常感謝各位在2020/2/29這天<br>
   參與這場我們一時興起舉辦的活動<br>
   這次玩得還開心嗎？有什麼對於活動的建議嗎？<br>
   幫我們寫個回饋單吧！</p>
   <!-- <a href="https://forms.gle/nkFvczSRJoWKXuXZA" target="_blank" class="btn-big">填寫回饋單 ✍</a> -->
   <a href="feedback.php" class="btn-big">填寫回饋單 ✍</a>


  </div>

<div class="idx-draw">
 <h5>活動花絮</h5>
  <h3>～靈魂繪手&寫手之章～</h3>
  <p></p><br>
  <ul class="draw-list">
   
   <!-- <li><img src="img/draw/a01.jpg" alt=""></li> -->
   <li><img src="img/draw/small/a02.jpg" alt=""></li>
   <li><img src="img/draw/small/a03.jpg" alt=""></li>
   <li><img src="img/draw/small/a04.jpg" alt=""></li>
   <li><img src="img/draw/small/a05.jpg" alt=""></li>
   <li><img src="img/draw/small/a06.jpg" alt=""></li>
   <li><img src="img/draw/small/a07.jpg" alt=""></li>
   <li><img src="img/draw/small/a08.jpg" alt=""></li>
   <li><img src="img/draw/small/a09.jpg" alt=""></li>
   <li><img src="img/draw/small/a10.jpg" alt=""></li>
   <li><img src="img/draw/small/p01.jpg" alt=""></li>
   <li><img src="img/draw/small/p02.jpg" alt=""></li>
   <li><img src="img/draw/small/p03.jpg" alt=""></li>
   <li><img src="img/draw/small/p04.jpg" alt=""></li>
   <li><img src="img/draw/small/p05.jpg" alt=""></li>
   <li><img src="img/draw/small/stickers.jpg" alt=""></li>
  </ul>

 <a href="draw.php" class="btn-big">作品欣賞 ➜</a>
  
 </div>
<div class="thanks">
 <h3>特別感謝</h3>
 <br>
 <ul>
  <li><img src="img/cover1.jpg" alt=""><h5>封面插畫繪製：<a href="https://www.plurk.com/abab40116" target="_blank">阿清（清凜雲蔚）</a></h5></li>
  <li><img src="img/cover2.jpg" alt=""><h5>封面插畫繪製：<a href="https://www.plurk.com/linda916" target="_blank">6+0（加零）</a></h5></li>
  <li><img src="img/cover3.jpg" alt=""><h5>活動攝影協力：<a href="https://www.plurk.com/Chaos_Fantasy" target="_blank">洛牙學姐</a></h5></li>
 </ul>
</div>
<div class="talking">
 <h3>主辦想說</h3>
 <ul>
  <li>
   <img src="img/talking/main1.jpg" alt="" class="photo">
   <div class="text">
    <h4>哭啊</h4>
   
    <p>擔任本次的設計、網站製作<br>
    好像有不知不覺將小曄腦洞具現化的能力<br>
    太令人震驚惹</p>
    <a href="https://www.plurk.com/p/npq8kc" target="_blank">總之先感謝！</a><br>
    <a href="https://www.plurk.com/p/npsdsr" target="_blank">籌備過程記錄感想噗</a>
   </div>
  </li>
  <li>
   <img src="img/talking/main2.jpg" alt="" class="photo">
   <div class="text">
    <h4>黎曄</h4>
    <p>擔當本次的腦洞、帥氣主持人<br>
    好像睡著又好像醒著突然就生出一堆文案<br>
    意識到似乎有第二人格的存在</p>
    <a href="https://www.plurk.com/p/nptei7" target="_blank">229漫聯聚活動後雜記</a><br>
    <a href="https://www.plurk.com/p/npqktb" target="_blank">漫研活動精彩瞬間<img src="img/talking/p2-1.jpg" alt=""></a>
   </div>
   
  </li>
  <li>
   <img src="img/talking/main3.jpg" alt="" class="photo">
   <div class="text">
    <h4>帷辰</h4>
    <p>擔當本次的總務、總之做了很多事<br>
    看著小曄的腦洞與哭啊的無意識具現化<br>
    這裡是誰？我是哪裡？</p>
    <a href="https://www.plurk.com/p/npqeio" target="_blank">不知道要說什麼，但我很開心</a><br>
    <a href="https://www.plurk.com/p/npu14r" target="_blank">還在回血中，邊吃消夜邊慢慢說一下結束了兩天的2020中部漫聯老人同樂會</a>
   </div>
  </li>
  
 </ul>
</div>

 

 

  
		
	</div>	
 <?php include("includes/g-footer.php") ?>




</body>

</html>

<!doctype html>
<html lang="zh-Hant-TW">

<head>
<title>2020中部漫聯同樂會~寶物爭奪保衛戰~</title>
<meta property="og:title" content="2020中部漫聯同樂會~寶物爭奪保衛戰~"/> 
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
         autoHeight:true,
         responsive:{
          0:{
           nav: false
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
 <div class="g-wrapper game-page">
  <h1>
   2020中部漫聯同樂會<br>
   ~寶物爭奪保衛戰~
  </h1>


  <div class="ending-wrap">
  
  

  <ul class="btn-list">
   <!-- <li class="active"><a href="#tab1">全題庫</a></li> -->
   <li><a href="#tab1">遊戲規則說明</a></li>
   <li><a href="#tab2">遊戲地圖</a></li>
   <li><a href="#tab3">技能卡</a></li>
   <li><a href="#tab4">挑戰內容</a></li>
  </ul>



  <div class="content">
   <div id="tab1" class="tab-box">
     <h3>遊戲規則說明</h3>
     <p>※如看不到請重新整理網頁</p>
     <div class="pic-box">
      <img src="img/rule/p01.jpg" alt="">
      <img src="img/rule/p02.jpg" alt="">
      <img src="img/rule/p03.jpg" alt="">
      <img src="img/rule/p04.jpg" alt="">
      <img src="img/rule/p05.jpg" alt="">
      <img src="img/rule/p06.jpg" alt="">
      <img src="img/rule/p07.jpg" alt="">
      <img src="img/rule/p08.jpg" alt="">
      <img src="img/rule/p09.jpg" alt="">
      <img src="img/rule/p10.jpg" alt="">
      <img src="img/rule/p11.jpg" alt="">
      <img src="img/rule/p12.jpg" alt="">
     </div>


     <div class="text-btn">純文字規則<img src="img/arrow-down.svg" alt=""></div>
     <div class="text-box">
     <h5>【遊戲規則】</h5>
     <h6>
      對決！偵探20君與怪盜20子～早春的漫畫研究社事件～＜寶物爭奪保衛戰篇＞</h6>
      <br>

      <h6>1. 陣營的分配：</h6>
      <p>在入場的報到處隨機抽取陣營，依照座位劃分陣營，每個座位上將放置一封信函，玩家會在信函中獲得所需的情報。</p>
      <br>
      <br>

      <h6>2. 遊戲要素：</h6>
      <p>● 本遊戲有【陣營血量】與【寶藏地圖】兩大要素。<br>
     ● <b>【陣營血量】：</b>每個陣營皆有基礎血量6000點。<br>
      ⚔️遊戲進行過程中可能遭受敵方陣營的攻擊損血，基礎血量歸零時該陣營出局。<br>
      ● <b>【寶藏地圖】：</b>寶藏地圖上有數格可移動的格子，在格子的終點即為本次遊戲的目標【寶藏】，最先抵達終點的陣營獲得勝利，並可以觸發勝利陣營專屬的活動故事結局（當然會有獎品）。<br>
      （提示：技能卡中包含可以加速前進或是讓敵人後退的效果卡，可能成為決勝關鍵，請善加利用。）</p>
      <br>
      <br>

      <h6>3. 如何獲得行動權？</h6>
      <p>以二次元機智問答決定行動權。<br>
      主持人將公布數題文字題題目，每題有三個選項，皆為單選題，各陣營可以搶答，搶答回答正確者可以行動一次。</p>
      <br>
      <br>

     <h6> 4. 行動方式</h6>
     <p>搶答答對後，陣營可以選擇兩種行動方式。<br>
      一：在寶藏地圖上前進一格<br>
      二：抽取技能卡<br>
      當選擇前進時，陣營可以選擇是否對主持人發起挑戰，若挑戰成功，根據陣營特性可獲得額外獎勵。挑戰的內容由抽籤決定。</p>
      <br>


      
      <p><b>挑戰成功之獎勵加成</b><br>

      <b>【怪盜（20子的陣營）】</b><br>
      前進一格時，可以選擇挑戰主持人。抽籤完成任務，可以前進兩格。<br>
      <br>

      <b>【偵探（20君的陣營）】</b><br>
      前進一格時，可以選擇挑戰主持人。抽籤完成任務，可指定攻擊一個陣營，生命值-1000點。<br>
      <br>
      <b>【警探（啾啾的陣營）】</b><br>
      前進一格時，可以選擇挑戰主持人。抽籤完成任務，其他兩陣營後退一格。</p>

      <p>※　當手上擁有技能卡時，大聲呼喊技能咒語後，可以發動技能卡效果，每次獲得行動權的回合只能發動一次，卡片使用後由主持人收回。</p>
      <br>
      <br>

      <h6>5. 勝利條件</h6>
      <p>首先抵達寶藏地圖終點者，或是在其他陣營抵達前終點前消滅所有的敵方陣營者獲得勝利。<br>
      若遊戲時間結束時尚未能分出勝負，依答對題數計算，答對題數最多者獲勝。<br>
      （也就是說，即使血量歸零提前出局，也可以藉由不斷搶答使另外兩方無法行動而分不出勝負，最後進入計算答對題數的機制取勝。）<br>
      主持人有權評估遊戲進程調整遊戲規則，並對技能效果和最終勝負做出判定。</p>

     </div>
   </div>



   <div id="tab2" class="tab-box">
    <h3>遊戲地圖</h3>
    <!-- <br> -->
    <!-- <img src="img/map.jpg" alt=""> -->
    
     
     <div class="pic-box-noowl">
      <img src="img/map.jpg" alt="">
      <p>
            <br>
            不知道大家看到這張地圖，是不是青春回憶都浮現在腦海了ㄋ<br>
            TCS從我們當時的TCS2，如今的2020年已經要辦TCS10<br>
            所謂青春小鳥一去不復返，指的就是這樣吧？？？<br>
            （PS: 圖紙背景是咖哩飯～）
            </p>
     </div> 
     <!-- <div class="text-btn">註<img src="img/arrow-down.svg" alt=""></div>
     <div class="text-box">
         <p>
            哭啊：<br>
            不知道大家看到這張地圖，是不是青春回憶都浮現在腦海了ㄋ<br>
            TCS從我們當時的TCS2，如今的2020年已經要辦TCS10<br>
            所謂青春小鳥一去不復返，指的就是這樣吧？？？<br>
            <br>

            （PS: 圖紙背景是咖哩飯～）
            </p>
     </div> -->
   </div>


   <div id="tab3" class="tab-box">
    <h3>技能卡</h3>
    <p>由於圖片有版權問題，因此這邊以文字展示~</p>
    <ul class="pic-box skill-box">
        <li><h3>「替身術！」</h3><h5>得到迴避一次攻擊的效果<br>（抵擋攻擊後失效）</h5></li>
        <li><h3>「我要成為海賊王」</h3><h5>再前進一格。</h5></li>
        <li><h3>「請君勿死」</h3><h5>己身生命值在1000以下時可以發動<br>退後一格，自己的生命值+2000</h5></li>
        <li><h3>「給我坐下！」</h3><h5>指定一個陣營，使其麻痺一回合</h5></li>
        <li><h3>「真相只有一個」</h3><h5>其他兩個陣營後退一格</h5></li>
        <li><h3>「你已經死了」</h3><h5>退後一格<br>攻擊指定陣營-2000</h5></li>
        <li><h3>「我要代替月亮懲罰你」</h3><h5>攻擊指定陣營-1000</h5></li>
        <li><h3>「我是影子」</h3><h5>取走指定一個陣營的一張卡片。</h5></li>
        <li><h3>「一切都是命運石之門的選擇」</h3><h5>擲骰子<br>擲到奇數其他兩個陣營 -1000<br>偶數則自己-1000</h5></li>
        <li><h3>「用閃亮的歌聲開始現場演唱」</h3><h5>演唱一首動漫歌曲<br>指定陣營-1000或自己+1000</h5></li>
        <li><h3>「放棄的話 比賽就結束了」</h3><h5>覆蓋此張卡片<br>生命值歸零時恢復生命值+1500</h5></li>
        <li><h3>「我要成為新世界的神」</h3><h5>丟棄手中所有技能卡<br>攻擊指定一陣營-2000</h5></li>
        <li><h3>「還差得遠呢！」</h3><h5>以桌球拍原地擊球連續10次成功<br>（兩次機會）指定一個陣營後退一格</h5></li>
        <li><h3>「Stella!!!!!! 」</h3><h5>使兩方陣營後退N格<br>扣除己身生命值N*1000（極限至生命值歸零）</h5></li>
        <li><h3>「和我訂下契約，成為魔法少女吧！」</h3><h5>指定一個陣營回到原點<br>接下來每回合自己生命值-1000</h5></li>

    


    </ul>
     <!-- <div class="text-btn">註<img src="img/arrow-down.svg" alt=""></div>
     <div class="text-box">
     </div> -->
   </div>

   

   <div id="tab4" class="tab-box">
    <h3>挑戰項目</h3>
    <p>前進一格的同時可以選擇是否要挑戰，以抽籤決定挑戰項目！<br>
    而挑戰通過與否，當然是以帥氣主持人的判定為準。<br>
    PS: 部分挑戰項目在活動當天是被拿掉的，在此公佈XD</p>
    <ul class="pic-box skill-box">
        <li>
         <h3>請在15秒內完整念出小屎丸的名字：</h3>
         <p>壽限無壽限無扔屎機前天的小新的內褲新八的人生巴魯蒙格·費扎利昂·艾扎克·休納德三分之一的純情之感情的剩下的三分之二是再意倒刺的感情背叛好想知道我的名字我知道他不知道的不在家干魷魚乾青魚子糞坑這個跟剛才的不同哦這個是池乃魚辣油雄帝宮王木村皇呸呸呸呸呸呸呸呸呸呸呸呸小屎丸<br>
         <br>
         ※ 小屎丸是銀魂九兵衛飼養的小猴子</p>
        </li>
        <li>
         <h3>跟主持人猜海帶拳<br>一局定勝負</h3>
         <p>※ 結果活動當天主持人發現自己不會玩海帶拳(登愣)<br>
         ※ 後來想想這個項目是抄襲阿清婚宴ㄉ環節呢</p>
        </li>
        <li>
         <h3>跟著柯南跳舞</h3>
         <p><a href="https://www.youtube.com/watch?v=JCr428yFuzc" target="_blank">柯南跳舞影片</a></p>
         <p>※ 被拿掉的項目之一，殊不知在音樂題成為跳舞加分題</p>
        </li>
        <li>
         <h3>畫出大嘴鳥</h3>
         <p><a href="https://youtu.be/v17i6BykHU0?t=7" target="_blank">大嘴鳥OP</a></p>
         <p>※ 被拿掉的項目之一，結果大家在音樂題就很開心的畫了起來，還好我們有先拿掉呢。</p>
        </li>
        <li>
         <h3>模仿戰隊出場/變身台詞和姿勢</h3>
         <p>※ 被拿掉的項目之一，我們到活動當天還不知道要挑哪一版戰隊變身影片因此作罷。(????)</p>
        </li>
        <li>
         <h3>Nico Nico Nii</h3>
         <p> <a href="https://www.youtube.com/watch?v=-_lb--PWEMU" target="_blank">參考影片</a><br>
         にっこにっこにー☆<br>あなたのハートににこにこにー<br>笑顔（えがお）届（とど）ける矢澤（やざわ）にこにこー<br>にこにーって覚（おぼ）えてラブにこー</p>
        </li>
        <li>
         <h3>模仿美少女戰士變身</h3>
         <p><a href="https://youtu.be/8BxvZMBB-PI" target="_blank">變身影片</a><br>
         ※ 被拿掉的項目之一，實在是難以取捨要用哪個版本</p>
        </li>
        <li>
         <h3>找兩個隊友合作小魔女Doremi的魔幻舞台</h3>
         <p> <a href="https://www.youtube.com/watch?v=XbGCzN-kP_0" target="_blank">參考影片</a></p>
         <p>(請先變身再開始魔幻舞台)<br>
         「我是漂亮的俏魔女 DoReMi，霹靂卡霹靂拉拉 波波力那貝貝魯多」<br>
         「我是漂亮的俏魔女 羽月，拍拍砰呸 噗哇噗哇噗」<br>
         「我是漂亮的俏魔女 小愛，帕美魯克 拉魯克 拉哩摟哩波 噴」<br>
         <br>

         「霹靂卡霹靂拉拉 輕鬆開朗」<br>
         「拍拍砰呸 溫柔優美」<br>
         「帕美魯克 拉魯克 樂音高亢」<br>
         <br>

         「「「魔幻舞臺~~」」」</p>
        </li>
        <li>
         <h3>找兩個隊友合作模仿神奇寶貝火箭隊出場台詞</h3>
         <p>
         武藏：既然你誠心誠意的請教了<br>
         小次郎：我們就大發慈悲的告訴你<br>
         武藏：為了防止世界被破壞<br>
         小次郎：為了守護世界的和平<br>
         武藏：貫徹愛與真實的邪惡<br>
         小次郎：可愛又迷人的反派角色<br>
         武藏：武藏  / 小次郎：小次郎<br>
         武藏：穿梭在銀河之間的火箭隊二人組<br>
         小次郎：白洞 白色的明天在等著我們<br>
         喵喵：就是這樣~喵~ / 果然翁：So~nansi~* / 風鈴鈴：chirīn~*</p>
        </li>
        <li>
         <h3>與隊友進行Keroro小隊共鳴</h3>
         <p><a href="https://www.youtube.com/watch?v=jtcU1nSxqDA" target="_blank">Keroro小隊共鳴參考影片</a></p>
        </li>
        <li>
         <h3>大聲喊出《秀逗魔導士》台詞</h3>
         <p>比黃昏更為昏暗者，比鮮血更為赤紅者，在時間之流中出現吧，在您的偉大名下，我在此黑暗中發誓，把阻擋在我們面前，所有的愚蠢之物，集合你我的力量，賜與他們平等的毀滅！<br>
         龍破斬！</p>
        </li>
        <li>
         <h3>大聲喊出《中二病也要談戀愛》小鳥遊六花 的台詞</h3>
         <p>遵從血的盟約，我在此召喚汝！<br>
         出現吧，黑暗澤克斯原始型Ⅱ！<br>
         爆裂吧，現實！粉碎吧，精神！<br>
         放逐這個世界！</p>
        </li>
        <li>
         <h3>大聲喊出《為美好的世界獻上祝福》台詞</h3>
         <p>比黑更黑 比黑暗更暗的漆黑，在此寄託吾真紅的金光吧，覺醒之時的到來，米哦啊繆教會的墮落章理，成為無形的扭曲而顯現吧，起舞吧<br>
          …………吾之力兩本源之願的崩壞，無人可及的崩壞，將天地萬象焚燒殆盡，自深淵降臨吧，這就是人類最強威力的攻擊手段，這就是 究極攻擊魔法<br>
          Explosion</p>
        </li>
        <li>
         <h3>大喊99.9%必勝後猜拳輸給主持人</h3>
         <p>※這是FGO梗</p>
        </li>
        <li>
         <h3>找隊友完成人體六芒星</h3>
         <p></p>
        </li>
    


     <!-- <div class="text-btn">註<img src="img/arrow-down.svg" alt=""></div>
     <div class="text-box">
     </div> -->
   </div>

   
  </div>

  </div>
 </div>
 <?php include("includes/g-footer.php") ?> 
</body>
</html>
<?php
 $classTitle = '老人看ㄉ，你沒看過我也沒辦法';
 $classTag = '懷舊金曲';
 $number = '１';
 $music = 'https://drive.google.com/file/d/1cJQ8Aorbvh9kvfRfb6tcOtqChCvyNI9z/preview';
 $ansTitle = '魔法陣天使（咕嚕咕嚕魔法陣） <br> 第二部OP1 ( 1994 )';
 $ansVideo = 'kBWyRxpgddA';
 $ansVideoS = '42';
 $ansImg = '';
 $ansDescript = '';
 $musicLocal = 'g1';//本機音樂檔案
 $ansVideoLocal = '';//本機影片檔案
?>
<!doctype html>
<html lang="zh-Hant-TW">

<head>
	<?php include("includes/g-meta.php") ?>
 <?php include("main.php") ?>
 
 <!-- 不放影片 -->
 <style>
  /* .video-box{display:none}  */
 </style>
 <!-- 不放影片 -->
</head>

<body>	
 
 

 <div class="g-wrapper inner-wrap">
  <h1><?php echo $classTitle ?></h1>
  <p><?php echo $classTag ?></p>
  <h2>第<?php echo $number ?>題</h2>

  <!-- GOOGLE雲端嵌入   -->
  <div class="music google">
   <iframe src="<?php echo $music ?>" width="100%" height="480"></iframe></iframe>
  </div>

  <!-- 本機音樂 -->
  <div class="music local">
   <audio width="100%" height="100%" controls>
      <source src="music/<?php echo $musicLocal ?>.mp3" type="audio/mpeg">
    </audio>
  </div>

  <!-- 答案區 -->
  <a href="javascript:void(0);" id="ans-btn">看答案<img src="img/arrow-down-w.svg" alt=""></a>

  <!-- 點擊開啟 -->
  <div id="ans-box">
   <h2><?php echo $ansTitle ?></h2>

   <!-- YOUTUBE嵌入 -->
   <div class="video-box net">
    <!-- <iframe width="1200" height="800" src="https://www.youtube.com/embed/<?php echo $ansVideo ?>?start=<?php echo $ansVideoS ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
    <script type="application/javascript" src="https://embed.nicovideo.jp/watch/sm8707347/script?w=640&h=360&from=42"></script><noscript><a href="https://www.nicovideo.jp/watch/sm8707347?from=42">[高音質]ドキドキ伝説 魔法陣グルグル OPテーマ「ダイナマイトヘブン」</a></noscript>
   </div>
   
   <!-- 本機影片 -->
   <div class="video-box local">
    <video width="100%" height="100%" controls>
      <source src="video/<?php echo $ansVideoLocal ?>.mp4" type="video/mp4">
    </video>
   </div>
   <img src="img/<?php echo $ansImg ?>" alt="">
   <p><?php echo $ansDescript ?></p>
  </div>

  <!-- <a href="/tccc" id="back">回首頁</a> -->
  <a href="/2020tccc/music-quiz/" id="back">回音樂題列表</a>
   
  

  
		
	</div>	
 <?php include("includes/g-footer.php") ?>
</body>

</html>


	<?php include("includes/g-header.php") ?>
 
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
    <iframe width="1200" height="800" src="https://www.youtube.com/embed/<?php echo $ansVideo ?>?start=<?php echo $ansVideoS ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen ></iframe>
   </div>
   <?php 
   $autoplay = 0;

   ?>
   
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
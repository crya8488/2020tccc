<?php
 $classTitle = '';//題型標題
 $classTag = '';//題型tag
 $number = '';//第__題(全形數字)
 $music = '';//題目音樂檔嵌入碼(Google雲端)
 $ansTitle = '';//答案：作品名 OP1 (年份)
 $ansVideo = '';//答案影片嵌入代碼
 $ansVideoS = '';//開始時間 
 $ansImg = '';//答案圖片檔名(圖檔放在img資料夾)(可放可不放)
 $ansDescript = '';//答案說明文字(可放可不放)

 $musicLocal = '';//本機音樂檔案
 $ansVideoLocal = '';//本機影片檔案
?>
<!doctype html>
<html lang="zh-Hant-TW">

<head>
	<?php include("includes/g-meta.php") ?>
 <?php include("main.php") ?>

 <!-- 不放影片 -->
 <style>
  .video-box{display:none} 
 </style>
 <!-- 不放影片 -->
</head>

<body>	
 <?php include("includes/g-inner.php") ?>
 <?php include("includes/g-footer.php") ?>
</body>

</html>

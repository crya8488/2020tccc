<?php
 $classTitle = '名偵探啾啾的都市冒險';
 $classTag = '懸疑／推理';
 $number = '４';
 $music = 'https://drive.google.com/file/d/1JzP2gTS8aAEahDO61TfLwvXmKvJtHwRP/preview';
 $ansTitle = '全部成為Ｆ OP1 (2015)';
 $ansVideo = 'NQWs0nStoBI';
 $ansVideoS = '0';
 $ansImg = '';
 $ansDescript = '';
 $musicLocal = 'a4';//本機音樂檔案
 $ansVideoLocal = '';//本機影片檔案
?>
<!doctype html>
<html lang="zh-Hant-TW">

<head>
	<?php include("includes/g-meta.php") ?>
<script>
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
</script>
</head>

<body>	
 <?php include("includes/g-inner.php") ?>
 <?php include("includes/g-footer.php") ?>
</body>

</html>

<?php
 $classTitle = '名偵探啾啾的都市冒險';
 $classTag = '懸疑／推理';
 $number = '５';
 $music = 'https://drive.google.com/file/d/1I4AV7U6CFpiaoA4qHp3aHt3zRd55lsyd/preview';
 $ansTitle = '櫻子小姐的腳下埋著屍體 OP1 (2015)';
 $ansVideo = '1FwrG2cH868';
 $ansVideoS = '94';
 $ansImg = '';
 $ansDescript = '';
 $musicLocal = 'a5';//本機音樂檔案
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

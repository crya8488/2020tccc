<?php
 $classTitle = '名偵探啾啾的都市冒險';
 $classTag = '懸疑／推理';
 $number = '２';
 $music = 'https://drive.google.com/file/d/1fv0CKQw7s1FHUPf65x_Ik0T9j2jE5DeV/preview';
 $ansTitle = '死亡筆記本 OP1 (2006)';
 $ansVideo = '8QE9cmfxx4s';
 $ansVideoS = '41';
 $ansImg = '';
 $ansDescript = '';
 $musicLocal = 'a2';//本機音樂檔案
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

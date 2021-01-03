<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-159581635-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-159581635-1');
</script>

<?php
  $site_name = "2020中部漫聯同樂會";
  $site_description = "2020中部漫聯同樂會~";
  $site_keywords = "2020中部漫聯同樂會~美好ㄉ音樂題時間~";
  $site_url = "";
  $site_image = "http://wan-jin.me/2020tccc/music-quiz/img/2020chuchu.jpg";
  $site_type = "website";
  $site_copyright = "2020中部漫聯同樂會~美好ㄉ音樂題時間~";
?>
<meta charset="utf-8">
<title><?php echo $site_name; ?></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="width=device-width,initial-scale=1.0 user-scalable=no">
<link rel="shortcut icon" href="img/2020chuchu.ico">
<meta name="description" content="<?php echo $site_description; ?>" />
<meta name="keywords" content="<?php echo $site_keywords; ?>" />
<meta name="copyright" content="<?php echo $site_copyright; ?>" />
<meta name="robots" content="all" />
<meta property="og:title" content="<?php echo $site_name; ?>"/> 
<meta property="og:description" content="<?php echo $site_description; ?>"/> 
<meta property="og:type" content="<?php echo $site_type; ?>"/>
<meta property="og:url" content="<?php echo $site_url; ?>"/> 
<meta property="og:image" content="<?php echo $site_image; ?>"/>
<meta property="og:site_name" content="<?php echo $site_name; ?>"/> 
<link href="../../css/style.css?<?php echo date('Ymdis'); ?>" rel="stylesheet" type="text/css" />
<script src="../js/jquery-1.9.1.min.js"></script>
<script src="../js/main.js"></script>

<style>

/* 線上觀看 */
.video-box.yt{ display:block; } 
.music.google{ display:block; }

/* 本機操作 */
.video-box.local{ display:none; }
.music.local{ display:none; }

</style>

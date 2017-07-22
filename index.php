<?php
session_start();
require("header.php");
require("phpmailer/class.phpmailer.php");
require("controllers/pagefixed/pagefixed.php");
?>

<!--[if IE]>
  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<![endif]-->

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<title><?php echo $meta['title'];?></title>
	<meta http-equiv = "content-type" content = "text/html;charset=utf-8" />
    <link rel="shortcut icon" href="<?=BASE_URL.USER_PATH_IMG.'favico.png' ?>" type="image/x-icon">
	<meta name = "keywords" content = "<?php echo $meta['keyword'];?>" />
	<meta name = "description" content = "<?php echo $meta['description'];?>" />
	<meta name = "abstract" content = "<?php echo $meta['description'];?>" />
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <link href='http://http://vuanhhospital.com.vn/' hreflang='vi-vn' rel='alternate'/>
	<link rel= "stylesheet" type = "text/css" href = "<?php echo BASE_URL.USER_PATH_CSS;?>css.css" />
    <link rel= "stylesheet" type = "text/css" href = "<?=BASE_URL ?>public/jqueryui/css/ui-lightness/jquery-ui-1.10.3.custom.css" />
    <link rel= "stylesheet" type = "text/css" href = "<?php echo BASE_URL.USER_PATH_CSS;?>font-awesome.min.css" />
    
    <link rel= "stylesheet" type = "text/css" href = "<?php echo BASE_URL.USER_PATH_CSS;?>bootstrap950px.css" />
    <link rel= "stylesheet" type = "text/css" href = "<?php echo BASE_URL.USER_PATH_CSS;?>bootstrap770px.css" />
    <link rel= "stylesheet" type = "text/css" href = "<?php echo BASE_URL.USER_PATH_CSS;?>bootstrap650px.css" />
    <link rel= "stylesheet" type = "text/css" href = "<?php echo BASE_URL.USER_PATH_CSS;?>bootstrap480px.css" />
    <link rel= "stylesheet" type = "text/css" href = "<?php echo BASE_URL.USER_PATH_CSS;?>bootstrap350px.css" />
    
    <link href="<?=BASE_URL;?>public/owl_carousel/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="<?=BASE_URL;?>public/owl_carousel/owl-carousel/owl.theme.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto&subset=latin,vietnamese' rel='stylesheet' type='text/css'>
 
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.js"></script>
    <script src="<?=BASE_URL?>public/jqueryui/js/jquery-ui-1.10.3.custom.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL.USER_PATH_JS;?>website.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL.USER_PATH_JS;?>time.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL.USER_PATH_JS;?>number.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL.USER_PATH_JS;?>scrolltopcontrol.js"></script>
    <script type="text/javascript" src="<?=BASE_URL?>public/accordion/jquery.magic-accordion.js"></script>
    
    <!-- dropdown menu -->
	<script type="text/javascript" src="<?=BASE_URL?>public/dropdown/ddsmoothmenu.js"></script>
	<link rel="stylesheet" type="text/css" href="<?=BASE_URL?>public/dropdown/ddsmoothmenu.css" />	
 
</head>
<body>

	<script src="https://apis.google.com/js/platform.js" async defer>
      {lang: 'vi'}
    </script>
    <script type="text/javascript" src="http://apis.google.com/js/plusone.js"></script>

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=164533633935597";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    
    <script language="javascript">
		function setLang(str){
		document.frmLang.lang.value=str;
		document.frmLang.submit();
		}
	</script>	
    
    <script language="javascript">
		function setLang(str){
		document.frmLang_mobile.lang.value=str;
		document.frmLang_mobile.submit();
		}
	</script>	


<div id="baseurljs" style="display:none"><?=BASE_URL ?></div>
<div class="index">
	<?php loadview('pagefixed/banner',$banner)?>
    <?php loadview('pagefixed/menu',$menu); ?>
	<?php include 'main.php'; ?>
</div>
    <?php loadview('pagefixed/footer',$footer) ?>

<div class="hotline-popup"><img src="<?=BASE_URL.USER_PATH_IMG ?>hotlinedeal.jpg" />

<!--phần hiển thị ô chat-->
<script lang="javascript">(function() {var pname = ( (document.title !='')? document.title : document.querySelector('meta[property="og:title"]').getAttribute('content') );var ga = document.createElement('script'); ga.type = 'text/javascript';ga.src = '//live.vnpgroup.net/js/web_client_box.php?hash=fa7d9decc947b5b31a582dbaeb5f8142&data=eyJoYXNoIjoiNjQxNjJlODg4ODllYzYwY2U1MGQwNGZjMzQ4MGE0NzYiLCJzc29faWQiOjM3NzkzMjh9&pname='+pname;var s = document.getElementsByTagName('script');s[0].parentNode.insertBefore(ga, s[0]);})();</script><noscript><a href="<?=BASE_URL;?>" title="Bệnh Viện Vũ Anh" target="_blank">Bệnh Viện Vũ Anh</a></noscript><noscript><a href="http://vchat.vn" title="vchat.vn" target="_blank">Phát triển bởi vchat.vn</a></noscript>	

</div>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', '<?=$_SESSION['googleanalytics']?>', 'auto');
  ga('send', 'pageview');
</script>

</body>
</html>



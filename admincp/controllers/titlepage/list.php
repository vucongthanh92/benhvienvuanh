<?php

if(isset($_POST['save'])){
	$title_page = trim($_POST['title_page']);	
	$keyword_page = trim($_POST['keyword_page']);
	$description_page = trim($_POST['description_page']);
	$googleanalytics = trim($_POST['googleanalytics']);	
	$phone_capcuu = trim($_POST['phone_capcuu']);	
	$phone_cskh = trim($_POST['phone_cskh']);	
	$diachi = trim($_POST['diachi']);	
	
	$emaillienhe_vn = trim($_POST['emaillienhe_vn']);
	$email_send = trim($_POST['email_send']);	
	$pass_send = trim($_POST['pass_send']);		
	
$text = "<?php	

\$title['title_page'] = '".$title_page."';	
\$title['keyword_page'] = '".$keyword_page."';	
\$title['description_page']='".$description_page."';
\$title['googleanalytics']='".$googleanalytics."';
\$title['phone_capcuu']='".$phone_capcuu."';		
\$title['phone_cskh']='".$phone_cskh."';	
\$title['diachi']='".$diachi."';

\$title['email_send']='".$email_send."';
\$title['pass_send']='".$pass_send."';			
\$title['emaillienhe_vn']='".$emaillienhe_vn."';?>";	
 
$file = "../config/title_page.php";

if(file_exists($file)){		
$fp = fopen($file, 'w');		
fwrite($fp, $text);		fclose($fp);	
}
}if(file_exists('../config/title_page.php')){	include '../config/title_page.php';}

loadview('titlepage/list',$title);
?>
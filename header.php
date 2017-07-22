<?php
ob_start();
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');

include ("libraries/class_db.php");
include ("config/config.php");
include ("config/config_site.php");
include ("config/title_page.php");

$_SESSION['title_page']=$title['title_page'];
$_SESSION['keyword_page']=$title['keyword_page'];
$_SESSION['description_page']=$title['description_page'];
$_SESSION['phone_capcuu']=$title['phone_capcuu'];
$_SESSION['phone_cskh']=$title['phone_cskh'];
$_SESSION['googleanalytics']=$title['googleanalytics'];
$_SESSION['diachi']=$title['diachi'];

$_SESSION['email_send']=$title['email_send'];
$_SESSION['pass_send']=$title['pass_send'];
$_SESSION['emaillienhe_vn']=$title['emaillienhe_vn'];

include ("libraries/functions.php");
include ("libraries/controls.php");

//kiem tra ngon ngu
if(isset($_POST['lang'])){
	$lang = strtolower($_POST['lang']);
	//session_register("lang");
	$_SESSION['lang'] = $lang;
}elseif(isset($_SESSION['lang'])){
	$lang = strtolower($_SESSION['lang']);
}else{
	$lang = "vn"; //default language
	//session_register("lang");
	$_SESSION['lang']=$lang;
}

if(file_exists("language/$lang.php")){
	include ("language/$lang.php");
}else{
//lang not exists, default language
	include ("language/vn.php");
	//session_register("lang");
	$_SESSION['lang']="vn";
}
$lang = $_SESSION['lang'];
define("lang",$lang);
//----------------------------


// map title
$map_title = "<a href = '".BASE_URL."' class = 'linkred'>".MN_HOME."</a>";
$arrowmap = " <img src='".BASE_URL.USER_PATH_IMG."icon-arrow.png' />";

define('usd','21021');

// meta 
require 'meta.php';

$db = new Models_MWebsite;
$rowbetawebsite = $db->getOneWebsite(1);
if($rowbetawebsite['enable']==0) exit();
?>
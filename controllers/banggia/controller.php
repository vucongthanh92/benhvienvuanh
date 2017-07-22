<?php
if(isset($_GET['act']))
	$act = $_GET['act'];
else 
	$act = "";

switch($act)
{
	case 'danh-muc':		include('controllers/banggia/list.php');break;
	case 'chi-tiet':		include('controllers/banggia/detail.php');break;
	default:				include('controllers/banggia/list.php');break;
}
?>
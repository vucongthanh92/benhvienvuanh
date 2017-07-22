<?php
if(isset($_GET['act']))
	$act = $_GET['act'];
else 
	$act = "";

switch($act)
{
	case 'danh-muc':		include('controllers/phanhoi/list.php');break;
	case 'chi-tiet':		include('controllers/phanhoi/detail.php');break;
	default:				include('controllers/phanhoi/list.php');break;
}
?>
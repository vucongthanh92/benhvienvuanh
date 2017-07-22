<?php
if(isset($_GET['act']))
	$act = $_GET['act'];
else 
	$act = "";

switch($act)
{
	case 'danh-muc':		include('controllers/bacsy/list.php');break;
	case 'chi-tiet':		include('controllers/bacsy/detail.php');break;
	case 'tim-kiem':		include('controllers/bacsy/search.php');break;
	default:				include('controllers/bacsy/list.php');break;
}
?>
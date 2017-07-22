<?php
if(isset($_GET['act']))
	$act = $_GET['act'];
else 
	$act = "";

switch($act)
{
	case 'tim-nhanh':			include('controllers/product/search.php');break;
	case 'tim-kiem':			include('controllers/product/search.php');break;
	case 'chi-tiet':			include('controllers/product/detail.php');break;
	case 'danh-muc':			include('controllers/product/list.php');break;
	case 'hang-san-xuat':		include('controllers/product/hangsanxuat.php');break;
	default:					include('controllers/product/list.php');break;
}
?>
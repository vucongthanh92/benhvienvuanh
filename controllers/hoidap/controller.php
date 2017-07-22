<?php
if(isset($_GET['act'])){
	$act = $_GET['act'];
}else{
	$act = "";
}
switch($act)
{
	case "danh-muc":
		include ("controllers/hoidap/list.php");
		break;
	case "cau-hoi-thuong-gap":
		include ("controllers/hoidap/thuong-gap.php");
		break;
	case "cau-hoi-khach-hang":
		include ("controllers/hoidap/khach-hang.php");
		break;
	case "thuong-gap":
		include ("controllers/hoidap/thuonggap_chitiet.php");
		break;
	case "chi-tiet":
		include ("controllers/hoidap/detail.php");
		break;
	case "cau-hoi":
		include ("controllers/hoidap/datcauhoi.php");
		break;
	case "tim-kiem":
		include ("controllers/hoidap/search.php");
		break;
	default:
		include ("controllers/hoidap/list.php");
		break;	
}

?>
<?php
$mod = varGetPost('mod');
switch ($mod)
{
	case "partners":		include ("controllers/partners/partners.php"); break;
	case "thanhtoan":		include ("controllers/contact/thanhtoan.php"); break;
	case "payment":			include ("controllers/payment/paymentcontroller.php"); break;
	case "comment":			include ("controllers/comment/controllers.php"); break;
	case "lien-he":			include ("controllers/contact/contact.php"); break;
	case "bai-viet":		include ("controllers/pagehtml/pagehtmlcontroller.php"); break;
	case "tin-tuc":			include ("controllers/news/newscontroller.php"); break;
	case "chuyen-khoa":		include ("controllers/product/productcontroller.php"); break;
	case "thanhvien":		include ("controllers/thanhvien/thanhviencontroller.php"); break;
	case "bac-sy":		    include ("controllers/bacsy/controller.php"); break;
	case "bang-gia":		include ("controllers/banggia/controller.php"); break;
	case "hoi-dap":		    include ("controllers/hoidap/controller.php"); break;
	case "phan-hoi":		include ("controllers/phanhoi/controller.php"); break;
	case "payment":		    include ("controllers/payment/paymentcontroller.php"); break;
	default:
							include ("controllers/default/default.php"); break;
}
?>


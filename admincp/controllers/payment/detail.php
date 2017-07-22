<?php
$mpayment = new Models_MPayment;
$mthanhvien = new Models_MThanhvien;
$id = varGet("id");
$data = array(
	'view' => 1
);
$mpayment ->editCustomer($data,$id);

$data['cus'] = $mpayment->OneCustomer($id);
$data['cart'] = $mpayment->listCustomerCart($id);

loadview("payment/detail",$data);
?>
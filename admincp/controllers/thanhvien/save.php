<?php

$db = new Models_MFlash();

//cap nhat thu tu sap xep
if(isset($_POST['sort'])){
	$data = $_POST['sort'];
	$db->sortData($data);
}

redirect(BASE_URL_ADMIN."flash/list");

?>
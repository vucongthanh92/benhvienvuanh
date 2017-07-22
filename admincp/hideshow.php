<?php
include ('header.php');

$table = varGet('table');
$colum = varGet('colum');
$id = varGet('id');
$value = varGet('value');

switch($table){ //kiem tra update thuoc bang nao
		
	case ''.TBL_WEBLINK.'':			$db = new Models_MWeblink; break;
	case ''.TBL_PAGEHTML.'':		$db = new Models_MPagehtml; break;
	case ''.TBL_MANUFACTURER.'': 	$db = new Models_MManufacturer; break;
	
	case ''.TBL_NEWS.'':			$db = new Models_MNews;	break;
	case ''.TBL_CITY.'':			$db = new Models_MCity;	break;
	case ''.TBL_CATNEWS.'':			$db = new Models_MCatnews; break;
	case ''.TBL_CUSTOMER.'':		$db = new Models_MPayment; break;
	case ''.TBL_PRODUCT.'':			$db = new Models_MProduct(); break;
	case ''.TBL_CATELOG.'':			$db = new Models_MCatelog(); break;
	case ''.TBL_COMMENT.'':			$db = new Models_MComment(); break;
	case ''.TBL_COMMENTNEW.'':		$db = new Models_MCommentnew(); break;
	case ''.TBL_HOIDAP.'':			$db = new Models_MHoidap(); break;
}

$data = array($colum=>$value);
$db->hideshow($data,$id);

if($value == 1){
	echo '<div id = "'.$colum.$id.'"><a href = "javascript:hideshow(\''.$table.'\',\''.$colum.'\',\''.$id.'\',\'0\',\''.$colum.$id.'\',\''.BASE_URL_ADMIN.'\');" title = "Bật"><img src = "'.ADMIN_PATH_IMG.'icon-16-default.png"></a></div>';
}else{
	echo '<div id = "'.$colum.$id.'"><a href = "javascript:hideshow(\''.$table.'\',\''.$colum.'\',\''.$id.'\',\'1\',\''.$colum.$id.'\',\''.BASE_URL_ADMIN.'\');" title = "Tắt"><img src = "'.ADMIN_PATH_IMG.'icon-16-nondefault.png"></a></div>';
}

?>
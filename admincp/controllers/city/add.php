<?php
$db = new Models_MCity;

if(isset($_POST['addnew'])){

	
	$data = array(
		'title_vn' 	  => varPost('title_vn'),
		'title_en' 	  => varPost('title_en'),
		'alias'		  => strtoseo(varPost('name')),
		'sort'		  => varPost('sort',0),
		'parentid'	  => 0,
		'ticlock'	  => varPost('ticlock','0'),
	);
	
	if(varPost('alias')==""){
		$data['alias'] = strtoseo(varPost('title_vn'));
	}else {$data['alias'] = varPost('alias'); }
	

	if($db-> addCatelog($data) == 0){
		$data['error'] = ERROR_ADD;
	}else{
	
		redirect(BASE_URL_ADMIN."city/list");
		return;
	}
}else{
	$data = '';
}

loadview('city/add_view',$data);
?>
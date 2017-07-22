<?php
$db = new Models_MHoidap;
$pg = new Paging;

if(isset($_POST['addnew'])){

	
	$data = array
	(
		'title_vn' 	        => varPost('title_vn'),
		'description_vn'    => varPost('description_vn'),
		'content_vn' 	    => addslashes($_POST['content_vn']),
		'idcat'	            => varPost('idcat'),
		'hoten'	            => varPost('hoten'),
		'email'	            => varPost('email'),
		'sort'			    => varPost('sort'),
		'ticlock'           => varPost('ticlock'),
	);
	
	if(varPost('alias')==""){
		$data['alias'] = strtoseo(varPost('title_vn'));
	}else {$data['alias'] = varPost('alias'); }
	
    $db -> addNew($data,$id);
	redirect(BASE_URL_ADMIN."hoidap/list");
	return;
	
}else{
	$data = '';
}

loadview('hoidap/add_view',$data);
?>
<?php
$db = new Models_MHoidap;
$pg = new Paging;
$id = varGetPost("id");

if(isset($_POST['editnew']))
{	
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
	
	$db -> editNew($data,$id);
	redirect(BASE_URL_ADMIN."hoidap/list");
	return;
	
}else{
	$data = '';
}

$data['info'] = $db -> getOneNew($id);
loadview("hoidap/edit_view",$data);
?>
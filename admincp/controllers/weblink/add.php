<?php
$db = new Models_MWeblink;

if(isset($_POST['addnew']))
{
	
	if($_FILES['images']['name'] != ""){
		$cimg = new uploadImg;
			$tenhinh = strtoseo(varPost('title_vn'))."-".time();
		if(DONGDAU==1) {
			$hinh = $cimg -> Upload_dongdau($_FILES['images'],$tenhinh,"../data/Baogia/",$error);
		}else{
			$hinh = $cimg -> Upload_NoReSize($_FILES['images'],$tenhinh,"../data/Baogia/",$error);
		}
	}else $hinh = "";
	
	$data = array(
		'title_vn' 		   => varPost('title_vn'),
		'title_en' 		   => varPost('title_en'),
		'description_vn'   => varPost('description_vn'),
		'description_en'   => varPost('description_vn'),
		'content_vn' 	   => addslashes(varPost('content_vn','',1)),
		'content_en' 	   => addslashes(varPost('content_en','',1)),
		'ticlock'		   => varPost('ticlock','0'),
		'sort'		       => varPost('sort','0'),
		'images'		   => $hinh,
	);
	
	if(varPost('alias')==""){
		$data['alias'] = strtoseo(varPost('title_vn'));
	}else {$data['alias'] = varPost('alias'); }
	
	if($db-> addWeblink($data) == 0){
		$data['error'] = ERROR_ADD;
	}else{
		//them thanh cong
		redirect(BASE_URL_ADMIN."weblink/list");
		return;
	}
	
}else{
	$data = '';
}

loadview('weblink/add_view',$data);
?>
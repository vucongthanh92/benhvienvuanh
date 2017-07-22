<?php
$db = new Models_MWeblink;
$id = varGetPost("id");

if(isset($_POST['editnew']))
{
	$data = array(
		"title_vn" 		   => varPost("title_vn"),
		"title_en" 		   => varPost("title_en"),
		'description_vn'   => varPost('description_vn'),
		'description_en'   => varPost('description_en'),
		"content_vn" 	   => addslashes(varPost("content_vn",'',1)),
		"content_en" 	   => addslashes(varPost("content_en",'',1)),
		'sort'		       => varPost('sort','0'),
		"ticlock"		   => varPost("ticlock","0"),
	);
	
	if(varPost('alias')==""){
		$data['alias'] = strtoseo(varPost('title_vn'));
	}else {$data['alias'] = varPost('alias');}
	
	if($_FILES['images']['name'] != ""){
		$cimg = new uploadImg;
			$tenhinh = strtoseo(varPost('title_vn'))."-".time();
		if(DONGDAU==1) {
			$hinh = $cimg -> Upload_dongdau($_FILES['images'],$tenhinh,"../data/Baogia/",$error);
		}else{
			$hinh = $cimg -> Upload_NoReSize($_FILES['images'],$tenhinh,"../data/Baogia/",$error);
		}
		if($hinh!="") {
			$data['images'] = $hinh;
		}
	}
	
	$db -> editWeblink($data,$id);
	redirect(BASE_URL_ADMIN."weblink/list");
	return;
}

$data['info'] = $db -> getOneWeblink($id);
loadview("weblink/edit_view",$data);

?>
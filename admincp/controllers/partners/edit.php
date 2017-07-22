<?php
$db = new Models_MPartners;
$id = varGetPost("id");

if(isset($_POST['editnew']))
{
	$data = array(
		'title_vn' 		   => varPost('title_vn'),
		'title_en' 		   => varPost('title_en'),
		'description_vn'   => varPost('description_vn'),
		'description_en'   => varPost('description_en'),
		'content_vn' 	   => addslashes($_POST['content_vn']),
		'content_en' 	   => addslashes($_POST['content_en']),
		'sort'		 	   => varPost('sort'),
		'ticlock'		   => varPost('ticlock','0'),
	);

    if($_FILES['images']['name'] != ""){
		$cimg = new uploadImg;
			$tenhinh = rand_string(10);
			$hinh = $cimg -> Upload_NoReSize($_FILES['images'],$tenhinh,"../data/images/",$error);
		if($hinh!="") {
			$data['images'] = $hinh;
		}
	}
	
	$db -> editPartners($data,$id);
	redirect(BASE_URL_ADMIN."partners/list");
	return;
}

$data['info'] = $db -> getOnePartners($id);
loadview("partners/edit_view",$data);
?>
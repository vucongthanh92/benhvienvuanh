<?php
$db = new Models_MPartners;

if(isset($_POST['addnew'])){

    if($_FILES['images']['name'] != ""){
		$cimg = new uploadImg;
			$tenhinh = rand_string(10);
			$hinh = $cimg -> Upload_NoReSize($_FILES['images'],$tenhinh,"../data/images/",$error);
	}else $hinh = "";

	$data = array
	(
	    'title_vn' 		   => varPost('title_vn'),
		'title_en' 		   => varPost('title_en'),
		'description_vn'   => varPost('description_vn'),
		'description_en'   => varPost('description_en'),
		'content_vn' 	   => addslashes($_POST['content_vn']),
		'content_en' 	   => addslashes($_POST['content_en']),
		'sort'			   => varPost('sort'),
		'ticlock'		   => varPost('ticlock','0'),
		'images' 		   => $hinh,
		'date'             => date("Y-m-d",time()),
	);

	if($db-> addPartners($data) == 0){
		$data['error'] = ERROR_ADD;
	}else{
		
		redirect(BASE_URL_ADMIN."partners/list");
		return;
	}
}else {
	$data = '';
}

loadview('partners/add_view',$data);
?>
<?php
$db = new Models_MManufacturer;

if(isset($_POST['addnew']))
{	
    //upload ảnh
	if($_FILES['images']['name'] != ""){
		$cimg = new uploadImg;
			$tenhinh = rand_string(10);
			$hinh = $cimg -> Upload_NoReSize($_FILES['images'],$tenhinh,"../data/Manufacturer/",$error);
	}else $hinh = "";
	
	//upload profile
	if($_FILES['file_vn']['name']!="")
	{
		$ext = strtolower(substr(strrchr($_FILES['file_vn']['name'], '.'), 1));// lay duoi file
		$name_file_vn = time()."-" .str_replace(" ", "", $_FILES['file_vn']['name']);	
		move_uploaded_file($_FILES['file_vn']['tmp_name'], '../data/download/'.$name_file_vn);	
	}else
	{
		$name_file_vn = "";
	}
		
	$data = array(
		'hoten' 		      => varPost('hoten'),
		'chuyennganh_vn' 	  => varPost('chuyennganh_vn'),
		'chuyennganh_en' 	  => varPost('chuyennganh_en'),
		'mota_vn' 	          => addslashes(varPost('mota_vn')),
		'mota_en' 	          => addslashes(varPost('mota_en')),
		'chuyenkhoa1'	      => varPost('chuyenkhoa1'),
		'chuyenkhoa2'	      => varPost('chuyenkhoa2'),
		'chuyenkhoa3'	      => varPost('chuyenkhoa3'),
		'ticlock'		      => varPost('ticlock','0'),
		'sort'		          => varPost('sort','0'),
		'file_vn'		      => $name_file_vn,
		'images'		      => $hinh,
		'chucvu_vn' 	      => addslashes(varPost('chucvu_vn')),
		'chucvu_en' 	      => addslashes(varPost('chucvu_en')),
	);
	
	if(varPost('alias')==""){
		$data['alias'] = strtoseo(varPost('hoten'));
	}else {$data['alias'] = varPost('alias'); }
	

	if($db-> addManufacturer($data) == 0){
		$data['error'] = ERROR_ADD;
	}else{
		//them thanh cong
		redirect(BASE_URL_ADMIN."manufacturer/list");
		return;
	}
}else{
	$data = '';
}

loadview('manufacturer/add_view',$data);
?>
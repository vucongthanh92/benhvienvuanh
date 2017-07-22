<?php
$db = new Models_MProduct;
$mstylepro = new Models_MStylePro();
$mmanufacpro = new Models_MManufacPro();
$id = varGetPost("id");

if(isset($_POST['editpro']))
{		
	$data = array(
		'title_vn' 			 => addslashes(varPost('title_vn')),
		'title_en' 			 => addslashes(varPost('title_en')),
		'description_en' 	 => addslashes($_POST['description_en']),
		'description_vn' 	 => addslashes($_POST['description_vn']),
		'content_vn' 	     => addslashes($_POST['content_vn']),
		'content_en' 		 => addslashes($_POST['content_en']),
		'idcat'	             => varPost('idcat'),
		'phone'		         => addslashes(varPost('phone')),
		'seo_keyword'	     => addslashes(varPost('seo_keyword','',1)),
		'seo_description'	 => addslashes(varPost('seo_description','',1)),
		'date' 			     => addslashes(varPost('date')),
		'sort'			     => varPost('sort'),
		'ticlock'		     => varPost('ticlock','0'),
		'hot'		         => varPost('hot','0'),
		'home'		         => varPost('home','0'),
		'visit'			     => varPost('visit'),
	);
	if(varPost('alias')==""){
		$data['alias'] = strtoseo(varPost('title_vn'));
	}else {$data['alias'] = varPost('alias'); }
	
	
	if($_FILES['images']['name'] != ""){
		$cimg = new uploadImg;
			$tenhinh = strtoseo(varPost('title_vn'))."-".time();
		if(DONGDAU==1) {
			$hinh = $cimg -> Upload_dongdau($_FILES['images'],$tenhinh,"../data/Product/",$error);
		}else{
			$hinh = $cimg -> Upload_NoReSize($_FILES['images'],$tenhinh,"../data/Product/",$error);
		}
		if($hinh!="") {
			$data['images'] = $hinh;
		}
	}
	
	//upload icon
	if($_FILES['icon']['name'] != ""){
		$cimg = new uploadImg;
			$ten_icon = "icon"."-".time();
			$icon = $cimg -> Upload_NoReSize($_FILES['icon'],$ten_icon,"../data/Product/icon/",$error);
		if($icon!="") {
			$data['icon'] = $icon;
		}
	}
	
	$db -> editProduct($data,$id);
	redirect(BASE_URL_ADMIN."product/list");
	return;
}


$data['info'] = $db -> getOneProduct($id);
loadview("product/edit_view",$data);
?>

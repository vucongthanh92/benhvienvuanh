<?php
	$id = varGet("id");
	
	$db = new Models_MNews;
	$pg = new Paging;
	$mcat = new Models_MCatNews;
	$mflash = new Models_MFlash();
	$id = $mcat-> getidtoalia($id);
	
	$subid = $mcat->getSubId($id);
	if($subid != ""){
		$subid = substr($subid,0,-1);
		$where = "idcat in ($subid) and ticlock = '0'";
	}else{
		$where = "idcat = '$id' and ticlock = '0'";
	}
	$total = $db->countdata($where);

	//paging
	$p = str_replace('p','',isset($_GET['p'])?varGetPost('p'):0);
	$numrow = 12; 
	$div = 10;
	$start = $p * $numrow;

	$select = "*";
	$orderby = "sort asc, Id desc";
	$limit = "$start,$numrow";	
	
	$infonews['info'] = $db->listdata($select,$where,$orderby,$limit);
	if(empty($infonews['info']))
	{
		redirect(BASE_URL);
	}

	
	$info_cat = $mcat->getOneCatnews($id);
	$title_cat = strtoseo($info_cat['title_'.lang]);
	$link=BASE_URL."tin-tuc/danh-muc/".$title_cat.".html";
	$infonews['page']=$pg->divPage($total,$p,$div,$numrow,$link);
	
	$infonews["info_cat"] = $info_cat;
	
	loadview("news/view_listnews",$infonews);

?>
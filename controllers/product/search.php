<?php	
	$db = new Models_MProduct;
	$pg = new Paging;
	$sp['support'] = $title;
	
	$where = "ticlock = '0' ";
	$sp['tukhoa']= $tukhoa = $_SESSION['keyword'];
	$title = strtoseo($tukhoa);
	$tukhoa =  str_replace('-',' ',$title);

	$where .= " AND (( title_vn like '%".$tukhoa."%') OR ( description_vn like '%".$tukhoa."%' ) OR ( content_vn like '%".$tukhoa."%' ) )";
	
	//echo $where;
	//paging
	$p = str_replace('p','',isset($_GET['p'])?varGetPost('p'):0);
	$numrow = 9;
	$div = 10;
	$total = $db->countdata($where);
	$start = $p * $numrow;

	$select = "*";
	$orderby = "sort asc, Id desc";
	$limit = "$start,$numrow";	
	$sp['info'] = $db->listdata($select,$where,$orderby,$limit);
	$sp['page'] = $pg->divPage($total,$p,$div,$numrow,BASE_URL."tim-kiem.html/".$title);	
	
	$sp['title_pro'] = 'Tìm kiếm'; 
	$sp['map_title'] =  $map_title . $arrowmap . '<a href = "tim-kiem.html">Tìm kiếm</a>';
	loadview("product/searchnc_view",$sp);

?>
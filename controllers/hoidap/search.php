<?php	
	$db = new Models_MProduct;
	$pg = new Paging;
	$sp['support'] = $title;

	//echo $where;
	//paging
	$p = str_replace('p','',isset($_GET['p'])?varGetPost('p'):0);
	$numrow = 12;
	$div = 10;
	$total = $db->countdata($where);
	$start = $p * $numrow;

	$select = "*";
	$orderby = "sort asc, Id desc";
	$limit = "$start,$numrow";	
	
	if(isset($_POST['hoidap_tukhoa']))
	{
		$tukhoa=$_POST['hoidap_tukhoa'];
		$sql="select * from goods where ticlock='0' AND (( title_".lang." like '%".$tukhoa."%') OR ( description_".lang." like '%".$tukhoa."%' ) 
		OR (content_".lang." like '%".$tukhoa."%'))";
	}
	
	$ds=mysql_query($sql) or die(mysql_error());
	$hoidap['info']=$ds;
	$hoidap['page'] = $pg->divPage($total,$p,$div,$numrow,BASE_URL."tim-kiem.html/".$title);	
	
	$hoidap['title_pro'] = 'Tìm kiếm'; 
	$hoidap['map_title'] =  $map_title . $arrowmap . '<a href = "tim-kiem.html">Tìm kiếm</a>';
	loadview("hoidap/view_search",$hoidap);

?>
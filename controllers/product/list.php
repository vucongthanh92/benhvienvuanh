<?php

	$db = new Models_MProduct;
	$mcatelog = new Models_MCatelog;
	$pg = new Paging;
	$mflash = new Models_MFlash();
	
	if(isset($_GET['id']))
	{
	   $id = varGet("id");
	   $sp['cat'] = $info_cat = $mcatelog->getOneCatelog($id);
	}
	else
	{
		$where = "ticlock='0'";
	}
	/*paging*/
	$p = str_replace('p','',isset($_GET['p'])?varGetPost('p'):0);
	$numrow = 24;
	$div = 10;
	$total = $db->countdata($where);
	$start = $p * $numrow;

	$select = "*";
	$orderby = "sort asc, Id desc";
	$limit = "$start,$numrow";	
	$sp['info'] = $db->listdata($select,$where,$orderby,$limit);
	$sp['page']=$pg->divPage($total,$p,$div,$numrow,BASE_URL."chuyen-khoa.html");
	
	$sp['support'] = $title;
	loadview("product/list_view",$sp);

?>
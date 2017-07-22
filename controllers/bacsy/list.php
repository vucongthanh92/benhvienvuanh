<?php

	$mcity = new Models_MCity;
	$mchuyenkhoa = new Models_MProduct;
	$pg = new Paging;
	
	if(!isset($_GET['id']))
	{
	   $sql="select * from mn_manufacturer where ticlock='0'";
	   $ds=mysql_query($sql) or die(mysql_error());
	   $row=mysql_num_rows($ds);
	   $default['info'] = $ds;
	}
	else
	{
		$val = varGet("id");
	    $id = $mchuyenkhoa->getAlias($val);
		$default['chuyenkhoa'] = $khoa = $mchuyenkhoa->getOneProduct($id);
		$id_khoa = $khoa['Id'];
		//danh sách bác sỹ thuộc khoa
	    $sql="select * from mn_manufacturer where ticlock='0' and (chuyenkhoa1='$id_khoa' or chuyenkhoa2='$id_khoa' or chuyenkhoa3='$id_khoa')";
	    $ds=mysql_query($sql) or die(mysql_error());
	    $row=mysql_num_rows($ds);
	    $default['info'] = $ds;
	}
	
	/*paging*/
	$p = str_replace('p','',isset($_GET['p'])?varGetPost('p'):0);
	$numrow = 12;
	$div = 10;
	$total = $row;
	$start = $p * $numrow;

	$select = "*";
	$orderby = "sort asc, Id desc";
	$limit = "$start,$numrow";	
	$default['page']=$pg->divPage($total,$p,$div,$numrow,BASE_URL."bac-sy.html");

	loadview("bacsy/view_list",$default);

?>
<?php

	$mcity = new Models_MCity;
	$pg = new Paging;
	
	$sql="select * from feedback where ticlock='0'";
	$ds=mysql_query($sql) or die(mysql_error());
	$row=mysql_num_rows($ds);
	$default['info'] = $ds;
	
	/*paging*/
	$p = str_replace('p','',isset($_GET['p'])?varGetPost('p'):0);
	$numrow = 12;
	$div = 10;
	$total = $row;
	$start = $p * $numrow;

	$select = "*";
	$orderby = "sort asc, Id desc";
	$limit = "$start,$numrow";	
	$default['page']=$pg->divPage($total,$p,$div,$numrow,BASE_URL."bang-gia.html");

	loadview("banggia/view_list",$default);

?>
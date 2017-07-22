<?php

	$db = new Models_MProduct;
	$val = varGet("id");
	$id = (int)(substr($val,strpos($val, '-')));
	/*lay thong tin san pham*/
	$sql2 = "select * from partner where Id='$id' and ticlock='0'";
	$ds2 = mysql_query($sql2) or die(mysql_error());
	$row2 = mysql_fetch_assoc($ds2);
	$default['prod'] = $row2;
	
	/*san pham cung loai*/
	$sql3 = "select * from partner where Id<>'$id' AND ticlock='0' order by rand() limit 4";
	$ds3 = mysql_query($sql3) or die(mysql_error());
	$default['prod_cl'] = $ds3;
	//-------------------------

	loadview("phanhoi/view_detail",$default);

?>
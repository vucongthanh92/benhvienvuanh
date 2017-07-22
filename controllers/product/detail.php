<?php

if(isset($_GET['id']))
{
	$db = new Models_MProduct;
	$mcatelog = new Models_MCatelog;
	$mcatelog = new Models_MCatelog;
	$mpagehtml = new Models_MPagehtml;
	
	$val = varGet("id");
	$id = $db->getAlias($val);
	
	/*lay thong tin san pham*/
	$sp['prod'] = $db->getOneProduct($id);

	//lay tieu de cua cat
	$idcat = $sp['prod']['idcat']; 
	$info_cat = $mcatelog->getOneCatelog($idcat);
	
	/*san pham cung loai*/
	$where = "Id<>'$id' AND ticlock='0' ";
	$sp['prod_cl'] = $db->listdata("*",$where,"rand()");
	//-------------------------
	loadview("product/detail_view",$sp);
}
?>
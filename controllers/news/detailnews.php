<?php

if(isset($_GET['id']))
{	
	$mnews = new Models_MNews;
    $mflash = new Models_MFlash();
	$mcat = new Models_MCatNews;
	
	$val = varGet("id");
	if($val=="")
	{
		redirect(BASE_URL);
	}
	
	$id = $mnews->getAlias($val);
	$arr['news'] = $mnews -> getOneNews($id,"*");
	
	if(empty($arr['news']))
	{
		redirect(BASE_URL);
	}
	
	$idcat = $arr['news']['idcat']; 
	$arr['cat'] = $mcat->getOneCatnews($idcat);
	
	$arr['listcat'] = $mcat -> listdata("*","ticlock ='0'","Id desc",100);
	$arr['support'] = $title;
	
	
	$sql2="select * from mn_news where ticlock='0' and idcat='$idcat' order by Id desc limit 5";
	$ds2=mysql_query($sql2);
	$arr['tincungloai']=$ds2;
	
	loadview("news/view_detailnews",$arr);
}
?>
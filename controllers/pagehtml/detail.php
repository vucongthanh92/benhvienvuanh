<?php

$id = varGet("id");
//$id = substr($val,0,strpos($val, '-'));
$mpagehtml = new Models_MPageHtml;
$pagehtml = $mpagehtml->getpagehtmlid($id);
$mflash = new Models_MFlash();

//tieu de trang
$map_title = $pagehtml['title_'.lang];
$pagehtml['map_title'] =  $map_title;

loadview("pagehtml/detail_view",$pagehtml);
?>
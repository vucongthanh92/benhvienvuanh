<?php

$db = new Models_MHoidap();
$pg = new Paging;

//paging
$p = isset($_GET['p'])?varGetPost('p'):0;
$numrow = 15;
$div = 10;
$total = $db->countdata();
$start = $p * $numrow;
$where = "";
$data['info'] = $db->listdata($where,$start,$numrow);

$data['page']=$pg->divPage($total,$p,$div,$numrow,BASE_URL_ADMIN."hoidap/list");

loadview("hoidap/list_view",$data);

?>
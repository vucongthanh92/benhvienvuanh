<?php
$pg = new Paging;

$sql="select * from mn_city where ticlock='0'";
$ds=mysql_query($sql) or die(mysql_error());
$data['info'] = $ds;

$data["map_title"] = $map_title.$arrowmap."<a href='hoi-dap-suc-khoe.html'> Hỏi đáp sức khỏe</a>";
loadview("hoidap/view_list",$data);
?>
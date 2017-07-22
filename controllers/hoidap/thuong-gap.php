<?php
$pg = new Paging;

$sql="select * from goods where ticlock='0' and idcat=2";
$ds=mysql_query($sql) or die(mysql_error());
$data['info'] = $ds;

$data["map_title"] = $map_title.$arrowmap."<a href='hoi-dap-suc-khoe.html'> Hỏi đáp sức khỏe</a>";
loadview("hoidap/view_thuonggap",$data);
?>
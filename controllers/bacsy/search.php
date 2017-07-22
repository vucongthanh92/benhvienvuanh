<?php	
	$db = new Models_MProduct;
	$pg = new Paging;
	
	$_SESSION['bacsy_hoten']="";
	$_SESSION['bacsy_chuyenkhoa']=0;
	
	if(isset($_POST['tim_bacsy']))
	{
		$where = "ticlock='0' ";
		//so sánh với tên bác sỹ
		$_SESSION['bacsy_hoten'] = $hoten = $_POST['hoten'];
		if($hoten != "")
		$where .= " AND (hoten like '%".$hoten."%')";
		//so sánh với chuyên khoa
		$_SESSION['bacsy_chuyenkhoa'] = $chuyenkhoa = $_POST['chuyenkhoa'];
		if($chuyenkhoa>0)
		$where .= " AND ((chuyenkhoa1='".$chuyenkhoa."') OR (chuyenkhoa2='".$chuyenkhoa."') OR (chuyenkhoa3='".$chuyenkhoa."'))";
		//danh sách tìm đc
		$sql="select * from mn_manufacturer where $where order by Id desc";
		$ds=mysql_query($sql) or die(mysql_error());
		$row=mysql_num_rows($ds);
		$default['info'] = $ds;
		
		//paging
		$p = str_replace('p','',isset($_GET['p'])?varGetPost('p'):0);
		$select = "*";
		$orderby = "sort asc, Id desc";
		$limit = "$start,$numrow";	
		$numrow = 9;
		$div = 10;
		$total = $row;
		$start = $p * $numrow;
		$default['page']=$pg->divPage($total,$p,$div,$numrow,BASE_URL."bac-sy/tim-kiem.html");
	}
	
	else
	{
		$sql="select * from mn_manufacturer where ticlock='0' order by Id desc";
		$ds=mysql_query($sql) or die(mysql_error());
		$row=mysql_num_rows($ds);
		$default['info'] = $ds;
		
		$select = "*";
		$orderby = "sort asc, Id desc";
		$limit = "$start,$numrow";	
		$default['page']=$pg->divPage($total,$p,$div,$numrow,BASE_URL."bac-sy/tim-kiem.html");
	}
	
	loadview("bacsy/searchnc_view",$default);

?>
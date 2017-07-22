<?php

if(isset($_GET['id']))
{	
	$db = new Models_MHoidap();
	$val = $_GET['id'];
	$id = (int)(substr($val,0,strpos($val, '-')));
	$data['detail'] = $db->getOneNews($id);
	
	/*san pham cung loai*/
	$sql3 = "select * from goods where Id<>'$id' AND ticlock='0' order by rand() limit 5";
	$ds3 = mysql_query($sql3) or die(mysql_error());
	$data['other'] = $ds3;
	
	$_SESSION['id_cmt']=$id;
	$_SESSION['loai_cmt']=1;
	//gởi comment
	if(isset($_POST['cmt_goi']))
	{
		$hoten=$_POST['cmt_hoten'];
		$email=$_POST['cmt_email'];
		$noidung=$_POST['cmt_noidung'];
		$phone=$_POST['cmt_phone'];
		$date=date("d/m/Y");
		$idpa=1;
		$idcat=$id;
		$idrep=0;
		$sql="insert into mn_comment(hoten,email,phone,content,date,idpa,idcat,idrep,ticlock) 
		      values('$hoten','$email','$phone','$noidung','$date','$idpa','$idcat','$idrep','1')";
		mysql_query($sql);
		unset($_POST['cmt_goi']);
		echo "<script>alert('Bình luận của bạn sẽ được ban quản trị xem trước rồi mới được hiển thị')</script>";
	}
	//reply comment
	if(isset($_POST['rep_goi']))
	{
		$hoten=$_POST['rep_hoten'];
		$email=$_POST['rep_email'];
		$noidung=$_POST['rep_noidung'];
		$phone=$_POST['rep_phone'];
		$date=date("d/m/Y");
		$idpa=1;
		$idcat=$id;
		$idrep=$_POST['idrep'];
		$sql="insert into mn_comment(hoten,email,phone,content,date,idpa,idcat,idrep,ticlock) 
		      values('$hoten','$email','$phone','$noidung','$date','$idpa','$idcat','$idrep','1')";
		mysql_query($sql);
		unset($_POST['rep_goi']);
		echo "<script>alert('Bình luận của bạn sẽ được ban quản trị xem trước rồi mới được hiển thị')</script>";
	}
	
	loadview("hoidap/view_detail",$data);
}
?>
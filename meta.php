<?php
/* meta */
$meta = array();

//phần meta của mục tin tức
if($_GET['mod'] == 'tin-tuc') 
{
	if($_GET['act']=='danh-muc')
	{
		$val = varGet("id");
		$mcat = new Models_MCatNews;
		$id = $mcat-> getidtoalia($val);
		if($id <=0)
		{	
		    $meta['title'] = $_SESSION['title_page'];
			$meta['keyword'] = $_SESSION['keyword_page'];
			$meta['description'] = $_SESSION['description_page'];
		}
		else
		{
			$info = $mcat->getOneCatnews($id);
			$meta['title']= $info['title_'.lang];
			if(strlen($info['meta_keyword'])>0){
				$meta['keyword'] = $info['meta_keyword'];
			} else { 
				$meta['keyword'] = $_SESSION['keyword_page'];
			}
			if(strlen($info['meta_description'])>0){
				$meta['description'] = $info['meta_description'];
			} else {
				$meta['description'] = $_SESSION['description_page'];
			}
		}
	}
	else if($_GET['act']=='chi-tiet')
	{
		$mnews = new Models_MNews;
		$val = varGet("id");
	    $id = $mnews->getAlias($val);
		$info = $mnews -> getOneNews($id,"*");
		$meta['title'] = $info['title_'.lang];
		if(strlen($info['meta_keyword'])> 0){
			$meta['keyword'] = $info['meta_keyword'];
		}
		else{
			$meta['keyword'] = $_SESSION['keyword_page'];
		}
		if(strlen($info['meta_description'])>0){
			$meta['description'] = $info['meta_description'];
		}
		else{ 
		    $meta['description'] = $_SESSION['description_page'];
		}
	}
}

//phần meta của mục chuyên khoa
else if($_GET['mod']=='chuyen-khoa')
{
	if($_GET['act']=='danh-muc')
	{
		$meta['title'] = $_SESSION['title_page']." - "."Chuyên Khoa";
		$meta['keyword'] = $_SESSION['keyword_page'];
		$meta['description'] = $_SESSION['description_page'];
	}
	else if($_GET['act']=='chi-tiet')
	{
		$mproduct = new Models_MProduct;
		$val = varGet("id");
	    $id = $mproduct->getAlias($val);
		if($id<=0)
		{
			$meta['title'] = $_SESSION['title_page'];
			$meta['keyword'] = $_SESSION['keyword_page'];
			$meta['description'] = $_SESSION['description_page'];
		}
		$pro = $mproduct->getOneProduct($id);
		$meta['title'] = $pro['title_'.lang];
		if($pro['seo_keyword']!='') $meta['keyword'] = $pro['seo_keyword'];
		else $meta['keyword'] = $_SESSION['keyword_page'];
		
		if($pro['seo_description']!='') $meta['description'] = $pro['seo_description'];
		else $meta['description'] = $_SESSION['description_page'];
	}
	elseif($_GET['act']=='tim-kiem')
	{
		$meta['title'] = $_SESSION['title_page'];
		$meta['description'] = $_SESSION['keyword_page'];
		$meta['keyword'] = $_SESSION['description_page'];
	}
}

//phần meta của mục bảng giá
else if($_GET['mod']=='bang-gia')
{
	if($_GET['act']=='danh-muc')
	{
		$meta['title'] = $_SESSION['title_page']." - "."Bảng Giá";
		$meta['keyword'] = $_SESSION['keyword_page'];
		$meta['description'] = $_SESSION['description_page'];
	}
	else if($_GET['act']=='chi-tiet')
	{
		$val = varGet("id");
		$sql="select * from feedback where alias='$val'";
	    $ds=mysql_query($sql) or die(mysql_error());
	    $row=mysql_fetch_assoc($ds);
	    $id = $row['Id'];
		$sql2 = "select * from feedback where Id='$id' and ticlock='0'";
	    $ds2 = mysql_query($sql2) or die(mysql_error());
	    $row2 = mysql_fetch_assoc($ds2);
		$meta['title'] = $row2['title_'.lang];
		$meta['keyword'] = $_SESSION['keyword_page'];
		
		if($row2['description_vn']!='') $meta['description'] = $row2['description_vn'];
		else $meta['description'] = $_SESSION['description_page'];
	}
}

//phần meta của mục bác sỹ
else if($_GET['mod']=='bac-sy')
{
	if($_GET['act']=='danh-muc')
	{
		$meta['title'] = $_SESSION['title_page']." - "."Bác Sỹ";
		$meta['keyword'] = $_SESSION['keyword_page'];
		$meta['description'] = $_SESSION['description_page'];
	}
	else if($_GET['act']=='chi-tiet')
	{
		$val = varGet("id");
		$sql="select * from mn_manufacturer where alias='$val'";
	    $ds=mysql_query($sql) or die(mysql_error());
	    $row=mysql_fetch_assoc($ds);
	    $id = $row['Id'];
		$sql2 = "select * from mn_manufacturer where Id='$id' and ticlock='0'";
	    $ds2 = mysql_query($sql2) or die(mysql_error());
	    $row2 = mysql_fetch_assoc($ds2);
		$meta['title'] = $row2['hoten'];
		$meta['keyword'] = $_SESSION['keyword_page'];
		$meta['description'] = $_SESSION['description_page'];
	}
	else if($_GET['act']=='tim-kiem')
	{
		$meta['title'] = $_SESSION['title_page'];
		$meta['description'] = $_SESSION['keyword_page'];
		$meta['keyword'] = $_SESSION['description_page'];
	}
}

//phần meta của mục phẩn hồi
else if($_GET['mod']=='phan-hoi')
{
	if($_GET['act']=='danh-muc')
	{
		$meta['title'] = $_SESSION['title_page']." - "."Phản Hồi";
		$meta['keyword'] = $_SESSION['keyword_page'];
		$meta['description'] = $_SESSION['description_page'];
	}
	else if($_GET['act']=='chi-tiet')
	{
		$val = varGet("id");
	    $id = (int)(substr($val,strpos($val, '-')));
		$sql2 = "select * from partner where Id='$id' and ticlock='0'";
	    $ds2 = mysql_query($sql2) or die(mysql_error());
	    $row2 = mysql_fetch_assoc($ds2);
		$meta['title'] = $row2['title_'.lang];
		$meta['keyword'] = $_SESSION['keyword_page'];
		
		if($row2['description_vn']!='') $meta['description'] = $row2['description_'.lang];
		else $meta['description'] = $_SESSION['description_page'];
	}
}

else 
{
	$meta['title'] = $_SESSION['title_page'];
	$meta['keyword'] = $_SESSION['keyword_page'];
	$meta['description'] = $_SESSION['description_page'];
}

?>
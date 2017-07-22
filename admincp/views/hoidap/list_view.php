<div class="wrapper_submenu">
    <div class="wrapper_item">
        <a href="<?=BASE_URL_ADMIN ?>city/list">
        <div class="item">
        <div class="image">
        <img alt="" src="<?=ADMIN_PATH_IMG ?>icon-48-square.png">
        </div>
        <div class="text">Chủ Đề</div>
        </div>
        </a>
	</div>
    
    <div class="wrapper_item">
        <a href="<?=BASE_URL_ADMIN ?>hoidap/list">
        <div class="item">
        <div class="image">
        <img alt="" src="<?=ADMIN_PATH_IMG ?>icon-48-faq.png">
        </div>
        <div class="text">Câu Hỏi</div>
        </div>
        </a>
	</div>
    
    <div class="wrapper_item">
        <a href="<?=BASE_URL_ADMIN ?>comment/list">
        <div class="item">
        <div class="image">
        <img alt="" src="<?=ADMIN_PATH_IMG ?>icon-48-comment.png">
        </div>
        <div class="text">Bình Luận</div>
        </div>
        </a>
	</div>
    
    <div class="wrapper_item">
        <a href="<?=BASE_URL_ADMIN;?>partners/list">
        <div class="item">
        <div class="image">
        <img alt="" src="<?=ADMIN_PATH_IMG ?>icon-48-write.png">
        </div>
        <div class="text">Phản Hồi</div>
        </div>
        </a>
	</div>
</div>

<div class="main_area">
    <div class="breakcrumb">
    <table border="0">
    <tbody>
    <tr>
    <td width="25">
    <img alt=""  src="<?=ADMIN_PATH_IMG ?>icon-48-square.png" style="width:23px; height: 23px">
    </td>
    <td> Quản lý nội dung / Chuyện mục hỏi đáp  </td>
    </tr>
    </tbody>
    </table>
    </div>
</div>
<div class="content" style="text-align:left">

<div class="list_button">
<a href='<?php echo BASE_URL_ADMIN;?>hoidap/add' class="button"><span class='them'> <img src='<?php echo ADMIN_PATH_IMG;?>icon-16-plus.png'>
   <?php echo G_ADD; ?></span></a>
</div>

<div class="space_10"></div>
<form action = '<?php echo BASE_URL_ADMIN;?>hoidap/del' method = 'post'  name="rowsForm" id="rowsForm">
<table class="view">
	<tr>
		<th><input type="checkbox" name="Check_ctr" id = 'Check_ctr' value="yes" onClick="Check(document.rowsForm.check_list)"></th>
		<th align="center">ID</th>
		<th align="center">Tiêu Đề</th>
        <th align="center">Chuyên Mục</th>
        <th align="center">Họ Tên</th>
        <th align="center">Email</th>
		<th align="center"><?php echo FR_DATE; ?></th>
        <th align="center">Trả lời</th>
		<th align="center">Duyệt</th>
		<th colspan = '2' align="center"><?php echo G_ACTION; ?></th>
	</tr>
	<?php
	if(empty($data['info'])){ //neu khong co du lieu
	?>
	<tr>
		<td colspan = '9' class = 'emptydata'><?php echo G_EMPTYDATA; ?></td>
	</tr>
	<?php
	}
	else //neu co du lieu xuat du lieu ra
	{
		foreach($data['info'] as $item)
		{
			$sql = "select count(*) from mn_hoidap where idcat = '".$item["Id"]."'";
			$kq = mysql_query($sql) or (mysql_error());
			$row = mysql_fetch_row($kq);
		?>
		<tr>
			<td align = 'center'><input type="checkbox" id = 'check_list' name="check_list[]" value="<?php echo $item['Id'];?>"><br></td>
			<td><?php echo $item['Id']; ?></td>
			<td><?php echo $item['title_vn'];?></td>
            <td align="center">
               <?php
			       $idcat=$item['idcat'];
			       $sql2="select * from mn_city where id='$idcat'";
				   $ds2=mysql_query($sql2) or die(mysql_error());
				   $row2=mysql_fetch_assoc($ds2);
				   echo $row2['title_vn'];
			   ?>
            </td>
            <td align="center"><?php echo $item['hoten']; ?></td>
            <td align="center"><?php echo $item['email']; ?></td>
			<td align="center"><?php echo date("d-m-Y",strtotime($item['date']));?></td>
            <td align = 'center'><a href = '<?php echo BASE_URL_ADMIN;?>hoidap/traloi/<?php echo $item['Id'];?>' title = 'Sửa'>
            <?php
			    if(($row[0]>0)&&($row[0]!="")) echo $row[0];
				else echo "0";
			?> <img src = '<?php echo ADMIN_PATH_IMG;?>s_db.png'></a></td>
			<td align = 'center'>
		
            <?php 
			if($item['ticlock'] == "1"){
				echo "<div id = '".$item['Id']."'><a href = 'javascript:ticlockactive(\"".TBL_HOIDAP."\",\"ticlock\",\"".$item['Id']."\",\"0\",\"".BASE_URL_ADMIN."\");' title = 'Bỏ khóa'><img src = '".ADMIN_PATH_IMG."icon-16-remove.png'></a></div>";
			}else{
				echo "<div id = '".$item['Id']."'><a href = 'javascript:ticlockactive(\"".TBL_HOIDAP."\",\"ticlock\",\"".$item['Id']."\",\"1\",\"".BASE_URL_ADMIN."\");' title = 'Khóa tin'><img src = '".ADMIN_PATH_IMG."icon-16-tick.png'></a></div>"; 
			}
			?>
			</td>
			<td align = 'center'><a href = '<?php echo BASE_URL_ADMIN;?>hoidap/edit/<?php echo $item['Id'];?>' title = 'Sửa'><img src = '<?php echo ADMIN_PATH_IMG;?>b_edit.png'></a></td>
			<td align = 'center'><a href = '<?php echo BASE_URL_ADMIN."hoidap/del/".$item['Id'];?>' title = 'Xóa' onclick = 'javascript:thongbao("<?php echo JSM_DO_YOU_REALLY_WANT_TO_DELETE;?>");'><img src = '<?php echo ADMIN_PATH_IMG;?>b_drop.png'></a></td>
		</tr>
		<?php
		}
	}
	?>
</table>
<?php 
if(isset($data['page']) && $data['page'] != "")
{
	echo "<hr/>Trang: ";
	echo $data['page'];
}
?>
<div class="list_button">
<a href = 'javascript:CheckAll(document.rowsForm.check_list)' class="button">Check all</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href = 'javascript:UnCheckAll(document.rowsForm.check_list)' class="button" >Uncheck all</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="javascript:confirmDelete('<?php echo JSM_DO_YOU_REALLY_WANT_TO_DELETE;?>',document.rowsForm.check_list)" class="button" ><img class="icon" src="<?php echo ADMIN_PATH_IMG;?>/b_drop.png" alt="Delete" title="Xóa các dòng check" /> Delete</A>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="javascript:confirmSave('<?php echo JSM_DO_YOU_REALLY_WANT_TO_SAVE;?>','<?php echo BASE_URL_ADMIN;?>hoidap/save')" class="button"><img class="icon" src="<?php echo ADMIN_PATH_IMG;?>/b_save.png" alt="Update" title="Cập nhật thứ tự" /> Save</A>
</div>
</form>
</div>

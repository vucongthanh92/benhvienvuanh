<div class="wrapper_submenu">
	 <div class="wrapper_item">
        <a href="<?=BASE_URL_ADMIN ?>catelog/list">
        <div class="item">
        <div class="image">
        <img alt="" src="<?=ADMIN_PATH_IMG ?>icon-48-folder.png">
        </div>
        <div class="text">Vị Trí</div>
        </div>
        </a>
	</div>
	<div class="wrapper_item">
        <a href="<?=BASE_URL_ADMIN ?>product/list">
        <div class="item">
        <div class="image">
        <img alt="" src="<?=ADMIN_PATH_IMG ?>icon-48-pro.png">
        </div>
        <div class="text">Chuyên Khoa</div>
        </div>
        </a>
	</div>

  	<div class="wrapper_item">
        <a href="<?=BASE_URL_ADMIN ?>weblink/list">
        <div class="item">
        <div class="image">
        <img alt="" src="<?=ADMIN_PATH_IMG ?>icon-48-checklist.png">
        </div>
        <div class="text">bảng Giá</div>
        </div>
        </a>
	</div>
    
    <div class="wrapper_item">
        <a href="<?=BASE_URL_ADMIN ?>manufacturer/list">
        <div class="item">
        <div class="image">
        <img alt="" src="<?=ADMIN_PATH_IMG ?>icon-48-nguoilienhe.png">
        </div>
        <div class="text">Bác Sỹ</div>
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
    <img alt=""  src="<?=ADMIN_PATH_IMG ?>icon-48-pro.png" style="width:23px; height: 23px">
    </td>
    <td> Quản lý Hãng Sản Xuất / Danh Mục / Sửa </td>
    </tr>
    </tbody>
    </table>
    </div>
</div>

<div class="content">
<div class="content_i">
<form action = '<?php echo BASE_URL_ADMIN;?>manufacturer/edit/<?php echo $data['info']['Id']?>' method = 'post' enctype = "multipart/form-data">
<table>
    <tr>
        <td>
        <!--bảng thông tin cá nhân của bác sỹ-->
        <table class="tab_navi">
            <tr>
                <td class = 'title_td'>Họ Tên</td>
                <td><input type='text' name='hoten' value="<?php echo $data['info']['hoten'];?>" size='50'></td>
            </tr>
            
            <tr>
                <td class = 'title_td'><?php echo IMAGES;?></td>
                <td><input type = 'file' name = 'images' size = "50"></td>
            </tr>
            
            <?php if($data['info']['images'] != ""){?>
            <tr>
                <td>&nbsp;</td>
                <td>
                    <div id = "image">
                    <img src = "<?=BASE_URL ?>/data/Manufacturer/<?=$data['info']['images']?>" height = "50">
                    <a href="javascript: delFlash('<?php echo TBL_MANUFACTURER?>','images',<?php echo $data['info']['Id']?>,'<?php echo $data['info']['images'];?>','image','<?=BASE_URL_ADMIN?>')"><img src="<?php echo ADMIN_PATH_IMG;?>b_drop.png"></a>
                    </div>
                </td>
            </tr>
            <?php } ?>
            
            <tr>
                <td class = 'title_td'>Profile</td>
                <td><input type = 'file' name = 'file_vn' size = "50"></td>
            </tr>
            
            <tr>
                <td class='title_td'>Alias</td>
                <td><input type='text' name='alias' size='30' value="<?php echo $data['info']['alias'];?>" value=""></td>
            </tr>
            
            <tr>
                <td class='title_td'><?=SORT;?></td>
                <td><input type='text' name='sort' size='30' value="<?php echo $data['info']['sort'];?>" value=""></td>
            </tr>
            
            <tr>
                <td class = 'title_td'><?php echo TICLOCK;?></td>
                <td>
                <select name="ticlock">
                    <option <?php if($data['info']['ticlock']==0) echo 'selected="selected"';?> value="0">Bật</option>
                    <option <?php if($data['info']['ticlock']==1) echo 'selected="selected"';?> value="1">Tắt</option>
                </select></td>
            </tr>
        </table>
        <!--------------------------->
        </td>
    
        <td>
        <!--bảng chọn chuyên khoa cho bác sỹ-->
        <table>
            <tr>
                <td class = 'title_td'>Chuyên Khoa 1</td>
                <td>
                <select name="chuyenkhoa1">
                    <option value="0">--chuyên khoa thứ nhất--</option>
                    <?php
					    $sql="select * from team where ticlock='0' order by Id desc";
                        $ds=mysql_query($sql) or die(mysql_error());
					    while($row = mysql_fetch_assoc($ds)) { 
					?>
                    <option <?php if($data['info']['chuyenkhoa1']==$row['Id']) echo "selected";?> value="<?=$row['Id'];?>"><?=$row['title_vn'];?></option>
                    <?php } ?>
                </select></td>
            </tr>
            <tr>
                <td class = 'title_td'>Chuyên Khoa 2</td>
                <td>
                <select name="chuyenkhoa2">
                    <option value="0">--chuyên khoa thứ hai--</option>
                   <?php
					    $sql2="select * from team where ticlock='0' order by Id desc";
                        $ds2=mysql_query($sql2) or die(mysql_error());
					    while($row2 = mysql_fetch_assoc($ds2)) { 
					?>
                    <option <?php if($data['info']['chuyenkhoa2']==$row2['Id']) echo "selected";?> value="<?=$row2['Id'];?>"><?=$row2['title_vn'];?>
                    </option>
                    <?php } ?>
                </select></td>
            </tr>
            <tr>
                <td class = 'title_td'>Chuyên Khoa 3</td>
                <td>
                <select name="chuyenkhoa3">
                    <option value="0">--chuyên khoa thứ ba--</option>
                    <?php
					    $sql3="select * from team where ticlock='0' order by Id desc";
                        $ds3=mysql_query($sql3) or die(mysql_error());
					    while($row3 = mysql_fetch_assoc($ds3)) { 
					?>
                    <option <?php if($data['info']['chuyenkhoa3']==$row3['Id']) echo "selected";?> value="<?=$row3['Id'];?>"><?=$row3['title_vn'];?> 
                    </option>
                    <?php } ?>
                </select></td>
            </tr>
        </table>
        <!-------------------------->
        </td>
    
    </tr>
    
    <!--bảng mô tả và chuyên ngành của bác sỹ-->
    <tr>
	<?php foreach($config_lang as $klang => $vlang){ ?>
    <td class="tab_<?=$vlang?>">
        <table>
            
            <tr><td><strong>Chức Vụ (<?=$vlang?>)</strong></td></tr>
            <tr><td><input type='text' name='chucvu_<?=$vlang?>' value="<?php echo $data['info']['chucvu_'.$vlang];?>" size='80'></td></tr>
            
            <tr><td><strong>Chuyên Ngành (<?=$vlang?>)</strong></td></tr>
            <tr><td><input type='text' name='chuyennganh_<?=$vlang?>' value="<?php echo $data['info']['chuyennganh_'.$vlang];?>" size='80'></td></tr>
            
            <tr><td><strong>Mô Tả (<?=$vlang?>)</strong></td></tr>
            <tr><td><?php getFCKeditor("mota_".$vlang,stripslashes($data['info']["mota_".$vlang]),500); ?></td></tr>
            
        </table>
    </td>
    <?php } ?>
    </tr>
    <!----------------------------------------->
    
    <tr>
        <td colspan="2" class="tab_navi">
            <input type='submit' value='Cập Nhật' class="button" name='editnew'>&nbsp;&nbsp;&nbsp;&nbsp;
			<input type='reset' value='<?php echo G_BUTTON_RESET;?>' class="button">
        </td>
    </tr>
    
</table>
</form>
</div>
</div>
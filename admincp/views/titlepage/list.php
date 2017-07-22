<div class="wrapper_submenu">
    <div class="wrapper_item">
        <a href="<?=BASE_URL_ADMIN ?>user/list">
        <div class="item">
        <div class="image">
        <img alt="" src="<?=ADMIN_PATH_IMG ?>icon-48-user.png">
        </div>
        <div class="text">Admin</div>
        </div>
        </a>
	</div>
    <div class="wrapper_item">
        <a href="<?=BASE_URL_ADMIN ?>thanhvien/list">
        <div class="item">
        <div class="image">
        <img alt="" src="<?=ADMIN_PATH_IMG ?>icon-48-nguoilienhe.png">
        </div>
        <div class="text">Thành viên</div>
        </div>
        </a>
	</div>
    <div class="wrapper_item">
        <a href="<?=BASE_URL_ADMIN ?>titlepage/list">
        <div class="item">
        <div class="image">
        <img alt="" src="<?=ADMIN_PATH_IMG ?>icon-48-cauhinh.png">
        </div>
        <div class="text">Website</div>
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
    <img alt=""  src="<?=ADMIN_PATH_IMG ?>icon-48-image.png" style="width:23px; height: 23px">
    </td>
    <td> Quản lý liên hệ / Hỗ trợ trực tuyến </td>
    </tr>
    </tbody>
    </table>
    </div>
</div>
<div class="content">
<div class="content_i">
<form name = "frm1" action = '<?php echo BASE_URL_ADMIN;?>titlepage/list' method = 'post' enctype = "multipart/form-data">
<table>
    <tr>
		<td class = 'title_td'>Tiêu Đề Website</td>
		<td><input type = 'text' name = 'title_page' size = '100' value = "<?php echo $data['title_page'];?>">
		</td>
	</tr>
    <tr>
		<td class = 'title_td'>Từ Khóa Website</td>
		<td>
			<input type = 'text' name = 'keyword_page' size = '100' value = "<?php echo $data['keyword_page'];?>">
		</td>
	</tr>
	<tr>
		<td class = 'title_td'>Mô Tả Website</td>
		<td><textarea style="width:620px; height:120px;" name="description_page"><?=$data['description_page'];?></textarea>
		</td>
	</tr>
    
    <tr>
		<td class = 'title_td'>ID theo dõi Google Analytics</td>
		<td><input type = 'text' name = 'googleanalytics' size = '30' value = "<?php echo $data['googleanalytics'];?>"></td>
	</tr>
    
    <tr>
		<td class = 'title_td'>Số Điện Thoại Gọi Cấp Cứu</td>
		<td><input type = 'text' name = 'phone_capcuu' size = '100' value = "<?php echo $data['phone_capcuu'];?>">
		</td>
	</tr>
	<tr>
		<td class = 'title_td'>Số Điện Thoại Chăm Sóc Khách Hàng </td>
		<td> <input type = 'text' name = 'phone_cskh' size = '100' value = "<?php echo $data['phone_cskh'];?>"></td>
	</tr>
	<tr>
		<td class = 'title_td'>Địa Chỉ</td>
		<td> <input type = 'text' name = 'diachi' size = '100' value = "<?php echo $data['diachi'];?>">
            
		</td>
	</tr>
    
    <tr>
		<td class = 'title_td'>Email nhận liên hệ</td>
		<td><input type = 'text' name = 'emaillienhe_vn' size = '100' value = "<?php echo $data['emaillienhe_vn'];?>"></td>
	</tr>
    
    </tr>
    	<tr>
		<td class = 'title_td'>Email gởi liên hệ</td>
		<td><input type = 'text' name = 'email_send' size = '100' value = "<?php echo $data['email_send'];?>"></td>
	</tr>
    
    </tr>
    	<tr>
		<td class = 'title_td'>Password</td>
		<td><input type="password" name = 'pass_send' size = '100' value = "<?php echo $data['pass_send'];?>"></td>
	</tr>
    
    	<th></th>
		<th colspan = '2' align = 'center'>
        
			<input type = 'submit' value = '<?php echo G_BUTTON_EDIT;?>' name = 'save' class="button">&nbsp;&nbsp;&nbsp;&nbsp;
			<input type = 'reset' value = '<?php echo G_BUTTON_RESET;?>' class="button" >
		</th>
	</tr>
</table>
</form>

</div>
</div>

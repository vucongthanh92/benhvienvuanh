<div class="wrapper_submenu">
     <div class="wrapper_item">
        <a href="<?=BASE_URL_ADMIN ?>flash/list">
        <div class="item">
        <div class="image">
        <img alt="" src="<?=ADMIN_PATH_IMG ?>icon-48-image.png">
        </div>
        <div class="text">Banner</div>
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
    <td> Quản lý media / Banner / Thêm mới</td>
    </tr>
    </tbody>
    </table>
    </div>
</div>
<div class="content">
	<div class="content_i">
<form action = '<?php echo BASE_URL_ADMIN;?>flash/add' method = 'post' enctype = "multipart/form-data">
<table>
    <tr>
		<td class = 'title_td'>Tiêu Đề</td>
		<td><input type='text' name='title_vn' size = '60'></td>
	</tr>
	<tr>
		<td class = 'title_td'>Loại file</td>
		<td>
		<select name = "style">
			<option value = '2'>Ảnh</option>
		</select>
		</td>
	</tr>
	<tr>
		<td class = 'title_td'>Vị trí</td>
		<td>
		<select name = "location">
			<option value = '1' >Logo VN</option>
            <option value = '5' >Logo EN</option>
			<option value = '2' >Slide Ảnh</option>
            <option value = '3' >Trang Chủ</option>
            <option value = '4' >Tư Vấn Trực Tuyến</option>
            <option value = '6' >Banner Left</option>
            <option value = '7' >Banner Right</option>
		</select>
		</td>
	</tr>
	<tr>
		<td class = 'title_td'>File</td>
		<td><input type = 'file' name = 'file_vn' size = '50'></td>
	</tr>
	<tr>
		<td class = 'title_td'>Kích thước</td>
		<td>Rộng: <input type = 'text' name = 'width' size = '15'> Cao: <input type = 'text' name = 'height' size = '15'></td>
	</tr>
	<tr>
		<td class = 'title_td'>Link</td>
		<td><input type = 'text' name = 'link' size = '60'></td>
	</tr>
	<tr>
		<td class = 'title_td'>Sắp xếp</td>
		<td><input type = 'text' name = 'sort' size = '10'></td>
	</tr>
	<tr>
    	<td></td>
		<th align = 'center' style="padding-top:10px;">
			<input type = 'submit' value = '<?php echo G_BUTTON_ADD;?>' name = 'addnew' class="button">&nbsp;&nbsp;&nbsp;&nbsp;
			<input type = 'reset' value = '<?php echo G_BUTTON_RESET;?>' class="button">
		</th>
	</tr>	
</table>
</form>
</div>
</div>
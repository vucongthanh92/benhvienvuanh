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
    <td> Quản lý nội dung / Chuyện mục hỏi đáp / Trả lời câu hỏi  </td>
    </tr>
    </tbody>
    </table>
    </div>
</div>
<style type="text/css">
.cauhoi {
	background-color:#F0F0F0;
	border-radius:5px;
	padding:5px;
}
</style>
<div class="content">
<div class="content_i">
<div class="cauhoi"> 
<p style="color:#F00; font-weight:bold">CÂU HỎI</p>
<p>Tiêu đề: <strong><?php echo $data['info']['title_vn'];?></strong></p>
<?=$data['info']["content_vn"] ?>
</div>
<form action = '<?php echo BASE_URL_ADMIN;?>hoidap/traloi/<?php echo $data['info']['Id'];?>' method = 'post' enctype = "multipart/form-data">
<table>
	<tr>
    	<td><strong><?php echo FR_FULLNAME;?></strong></td>
    </tr>
	<tr>
		<td><input type = 'text' name = 'fullname' value = ''  size = '50'></td>
	</tr>
    <tr>
    	<td><strong>Email</strong></td>
    </tr>
	<tr>
		<td><input type = 'text' name = 'email' value = '' size = '50'></td>
	</tr>
    <tr>
    	<td><strong>Câu hỏi</strong></td>
    </tr>
	<tr>
		<td><input type = 'text' name = 'title' value = '' size = '50'></td>
	</tr>
      <tr>
    	<td><strong>Nội dung</strong></td>
    </tr>
	<tr>
		<td><textarea id="cont" name="content" style=" height:250px" >  </textarea></td>
	</tr>
	<tr>
		
		<td><strong>Duyệt</strong> : <input type = 'checkbox' name = 'ticlock' value = '1' <?php  echo "checked";?>></td>
	</tr>
	<tr>
		<th  align = 'center'>
			<input type = 'submit' value = '<?php echo G_BUTTON_EDIT;?>' name = 'editnew' class="button">&nbsp;&nbsp;&nbsp;&nbsp;
			<input type = 'reset' value = '<?php echo G_BUTTON_RESET;?>' class="button">
		</th>
	</tr>	
</table>
</form>


</div>
</div>
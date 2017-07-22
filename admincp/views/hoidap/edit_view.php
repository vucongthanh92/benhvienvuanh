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
    <td> Quản lý nội dung / Chuyện mục hỏi đáp / Chi tiết câu hỏi  </td>
    </tr>
    </tbody>
    </table>
    </div>
</div>
<div class="content">
<div class="content_i">

<?php

if(isset($data['error']))
{
	echo 'div id = "error">';
	echo '<h2>Lỗi!</h2>';
	echo '<ul>';
	echo getError($data['error']);
	echo '</ul>';
	echo '</div>';
}
?>
<form action='<?php echo BASE_URL_ADMIN;?>hoidap/edit/<?php echo $data['info']['Id'];?>' method='post' enctype="multipart/form-data">
<table>
<tbody>
<tr>
  <td width="650">
    <table>
       <tr>
    	  <td><strong>Mô Tả</strong></td>
       </tr>
       <tr>
		  <td><textarea style="width:600px; height:120px;" name="description_vn"><?php echo $data['info']['description_vn'];?></textarea></td>
	   </tr>
       
       <tr>
    	  <td><strong>Trả Lời</strong></td>
       </tr>
       <tr>
		  <td><?php getFCKeditor("content_vn",$data['info']["content_vn"],400,600); ?></td>
	   </tr>
    </table>
  </td>
  <td width="640" valign="top">
  <!---------------------->
  <table width="640">
    <tr>
       <td class='title_td'><strong>Tiêu Đề</strong></td>
       <td><input type='text' name='title_vn' value='<?php echo $data['info']['title_vn'];?>' size='70'></td>
	</tr>
    <tr>
       <td class='title_td'><strong>Chuyên Mục</strong></td>
       <td>
          <select name = 'idcat' id="idcat">
             <option value = '0'>- - Chọn chuyên mục - -</option>
                <?php
                    $sql="select * from mn_city where ticlock='0'";
					$ds=mysql_query($sql) or die(mysql_error());
					while($row=mysql_fetch_assoc($ds)) {
                ?>
                <option <?php if($row['id']==$data['info']['idcat']) echo "selected";?> value="<?=$row['id']?>"><?=$row['title_vn'];?></option>
                <?php } ?>
          </select>
       </td>
    </tr>
 
    <tr>
       <td class='title_td'><strong>Họ Tên</strong></td>
	   <td><input type='text' name='hoten' value='<?=$data['info']['hoten'];?>' size='50'></td>
    </tr>
   
   <tr>
       <td class='title_td'><strong>Email</strong></td>
	   <td><input type='text' name='email' value='<?=$data['info']['email'];?>' size='50'></td>
    </tr>
  
    <tr>
      <td class='title_td'><?php echo SORT;?></td>
      <td><input type = 'text' name = 'sort' size = '30' value="<?=$data['info']['sort'];?>"></td>
    </tr>
    
    <tr>
      <td class='title_td'>Ngày đăng</td>
      <td><input type = 'text' name = 'date' size = '30' value="<?=$data['info']['date'];?>" ></td>
    </tr>

    <tr>
      <td class='title_td'>Bật / Tắt</td>
      <td>
          <select name="ticlock">
              <option <?php if($data['info']['ticlock']==0) echo 'selected="selected"';?> value="0">Bật</option>
              <option <?php if($data['info']['ticlock']==1) echo 'selected="selected"';?> value="1">Tắt</option>
          </select>
      </td>
    </tr>
    
    <tr>
        <td>&nbsp;</td>
	</tr>	
    <tr>
		<th colspan="2" align='left'>
			<input type = 'submit' value = '<?php echo G_BUTTON_EDIT;?>' name = 'editnew' class="button">&nbsp;&nbsp;&nbsp;&nbsp;
			<input type = 'reset' value = '<?php echo G_BUTTON_RESET;?>' class="button">
		</th>
	</tr>	
    
  </table>
  <!--------------------------->
  </td>
</tr>
</tbody>
</table>
</form>
</div>
</div>
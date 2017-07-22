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
    <img alt=""  src="<?=ADMIN_PATH_IMG ?>icon-48-square.png" style="width:23px; height: 23px">
    </td>
    <td> Thêm Bảng Giá </td>
    </tr>
    </tbody>
    </table>
    </div>
</div>

<div class="content">
<div class="content_i">

<form action = '<?php echo BASE_URL_ADMIN;?>weblink/add' method = 'post' enctype = "multipart/form-data">
<table>
<tr>
  <?php foreach($config_lang as $klang => $vlang){ ?>
  <td class="tab_<?=$vlang?>">
      <table>
          
          <tr><td><strong>Tiêu Đề (<?=$vlang?>)</strong></td></tr>
          <tr><td><input type='text' name='title_<?=$vlang?>' size='50'></td></tr>
       
          <tr><td><strong>Description (<?=$vlang?>)</strong></td></tr>
          <tr><td><textarea style="width:570px; height:100px;" name="description_<?=$vlang?>"></textarea></td></tr>
          
          <tr><td><strong>Nội dung (<?=$vlang?>)</strong></td></tr>
          <tr><td><?php getFCKeditor("content_".$vlang,"",500); ?></td></tr>
          
      </table>
  </td>
  <?php } ?>
</tr>

<tr><td>
   <table class="tab_navi">
     <tr>
        <td class='title_td'><?php echo IMAGES;?></td>
        <td><input type = 'file' name = 'images' size = "50"></td>
     </tr>
    
    <tr>
        <td class='title_td'>Alias</td>
        <td><input type='text' name='alias' size = '30' value=""></td>
     </tr>
    
     <tr>
        <td class='title_td'><?php echo SORT;?></td>
        <td><input type = 'text' name = 'sort' size = '30' value=""></td>
     </tr>
    
     <tr>
        <td class='title_td'>Bật / Tắt</td>
        <td>
            <select name="ticlock">
                <option value="0">Bật</option>
                <option value="1">Tắt</option>
            </select>
        </td>
     </tr>
   </table>
</td></tr>

<tr>
    <td colspan="2" class="tab_navi">
        <input type = 'submit' value = '<?php echo G_BUTTON_ADD;?>' name = 'addnew' class="button">&nbsp;&nbsp;&nbsp;&nbsp;
        <input type = 'reset' value = '<?php echo G_BUTTON_RESET;?>' class="button">
    </td>
</tr>
</table>
</form>
</div>
</div>
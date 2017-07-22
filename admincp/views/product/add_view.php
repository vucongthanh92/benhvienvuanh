<script type = 'text/javascript'>
function checkform(){
	var frm = document.frm1;
	if(frm.idcat.value == 0)
	{
		alert("Vui lòng chọn vị trí");
		return false;
	}

	if(frm.product.value == ""){
		alert("Vui lòng nhận tên sản phẩm");
		frm.product.focus();
		return false;
	}
}
</script>

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
    <td> Quản lý chuyên khoa </td>
    </tr>
    </tbody>
    </table>
    </div>
</div>
<div class="content">
<div class="content_i">

<form name = "frm1" action = '<?php echo BASE_URL_ADMIN;?>product/add' method = 'post' enctype = "multipart/form-data" onsubmit = "return checkform();" >
<table>
<tbody>
<tr>
   <td width="700" valign="top"><h2><img alt="" src="<?=ADMIN_PATH_IMG ?>icon-16-info.png"> Thông tin về Khoa</h2>
   <!--bảng bên phải-->
	 <table class="right_new" >
   	   <?php foreach($config_lang as $klang => $vlang){ ?>
       <tr><td><strong>Cơ Sở Vật Chất (<?=$vlang;?>)</strong></td></tr>
	   <tr><td><?php getFCKeditor("description_".$vlang,"",400,600); ?></td></tr>
       <tr><td><strong>Các Dịch Vụ Chính (<?=$vlang;?>)</strong></td></tr>
	   <tr><td><?php getFCKeditor("content_".$vlang,"",400,600); ?></td></tr>
       <?php } ?>
     </table>
   <!--kết thúc bảng bên phải-->
   </td>

   <td width="600" valign="top"><h2><img alt="" src="<?=ADMIN_PATH_IMG ?>icon-16-info.png">Thông tin thiết lập</h2>
   <!--bảng bên trái-->
   <table>
    <tr>
       <td class='title_td'><strong>Vị Trí</strong></td>
       <td>
          <select name='idcat' id="idcat">
             <option value = '0'>- - Chọn danh mục - -</option>
                <?php
                   $mcatelog = new Models_MCatelog;
                   $ldata = $mcatelog->listdata();
                   echo $tmenu = TreeCat($ldata,0,"","","--",'name');
                ?>
          </select>
       </td>
    </tr>
    
    <?php foreach($config_lang as $klang => $vlang){ ?>
	<tr>
       <td class='title_td'><strong>Tên chuyên khoa ( <?=$vlang ?>)</strong></td>
	   <td><input type='text' name = 'title_<?=$vlang?>' value='' size='50'></td>
    </tr>
    <?php } ?>
    
    <tr>
       <td class='title_td'><strong>Alias</strong></td> 
	   <td><input type = 'text' name = 'alias' value = '' size = '50'></td>
    </tr>
    
    <tr>
       <td class='title_td'><strong>Số Điện Thoại Khoa</strong></td>
	   <td><input type='text' name='phone' value='' size='50'></td>
    </tr>
   
    <tr>
      <td class='title_td'><?php echo IMAGES;?></td>
      <td><input type = 'file' name = 'images' size = "50"></td>
    </tr>
    
    <tr>
      <td class='title_td'>icon</td>
      <td><input type='file' name='icon' size="50"></td>
    </tr>
    
    <tr>
      <td class='title_td'><?php echo SORT;?></td>
      <td><input type = 'text' name = 'sort' size = '30' value=""></td>
    </tr>
    
    <tr>
      <td class='title_td'>Ngày đăng</td>
      <td><input type = 'text' name = 'date' size = '30' value="<?=date("Y-m-d",time()); ?>" ></td>
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
    
    <tr>
      <td class='title_td'>Nổi bật</td>
      <td>
        <select name="hot">
            <option value="0">Tắt</option>
            <option value="1">Bật</option>
        </select>
      </td>
    </tr>
      
    <tr>
      <td class = 'title_td'> Meta Keyword</td>
      <td><textarea name="seo_keyword" style="width:320px; height:100px;"> </textarea></td>
    </tr>
    
    <tr>
      <td class = 'title_td'> Meta Description</td>
      <td><textarea name="seo_description" style="width:320px; height:100px;"></textarea></td>
    </tr>  

	<tr>
		<th colspan="2" align='left'>
			<input type = 'submit' value = '<?php echo G_BUTTON_ADD;?>' name = 'addnew' class="button">&nbsp;&nbsp;&nbsp;&nbsp;
			<input type = 'reset' value = '<?php echo G_BUTTON_RESET;?>' class="button">
		</th>
	</tr>	
    </table>
    <!--kết thúc bảng bên trái-->
  </td>
</tr>
</tbody>
</table>
</form>
</div>
</div>
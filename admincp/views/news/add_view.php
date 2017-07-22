<script type="text/javascript">
function checkform(){
	var frm = document.frm;
	if(frm.idcat.value == ""){
		alert("Vui lòng chọn chủ đề");
		return false;
	}
	if(frm.title_vn.value == ""){
		alert("Vui lòng nhận tiêu đề tin");
		frm.title_vn.focus();
		return false;
	}
}

$(document).ready(function(){
	$("#title_vn").blur(function(){
		text = $(this).val();
		$.ajax({
				type: "POST",
				url:"<?=BASE_URL_ADMIN ?>check_title.php",
				data:"id="+text,
			   success:function(html)
			   {  
					if(html=="false"){
						alert("Tin này đã được đăng");
						$("#title_vn").focus();
						$("#title_vn").addClass("texterror");
					}
					else {
						$("#title_vn").removeClass("texterror");
					}
					
				}
			});
	});
});
</script>

<style type="text/css">
.texterror {
	border: solid 1px #f96374 !important;
	background-color:#f9ecee !important;
}
</style>

<div class="wrapper_submenu">
	<div class="wrapper_item">
        <a href="<?=BASE_URL_ADMIN ?>catnews/list">
        <div class="item">
        <div class="image">
        <img alt="" src="<?=ADMIN_PATH_IMG ?>icon-48-square.png">
        </div>
        <div class="text">Chủ đề</div>
        </div>
        </a>
	</div>
    <div class="wrapper_item">
        <a href="<?=BASE_URL_ADMIN ?>news/list">
        <div class="item">
        <div class="image">
        <img alt="" src="<?=ADMIN_PATH_IMG ?>icon-48-write.png">
        </div>
        <div class="text">Tin Tức</div>
        </div>
        </a>
	</div>
    <div class="wrapper_item">
        <a href="<?=BASE_URL_ADMIN ?>pagehtml/list">
        <div class="item">
        <div class="image">
        <img alt="" src="<?=ADMIN_PATH_IMG ?>icon-48-paper.png">
        </div>
        <div class="text">Thông Tin Tĩnh</div>
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
    <td> Quản lý nội dung / Bài viết / Thêm mới</td>
    </tr>
    </tbody>
    </table>
    </div>
</div>
        

<div class="content">
<div class="content_i">
<form name = "frm" action = '<?php echo BASE_URL_ADMIN;?>news/add' method = 'post' enctype = "multipart/form-data" onsubmit = "return checkform();">
<table>
<tbody>
<tr>
   <td width="700">
   <h2>
<img alt="" src="<?=ADMIN_PATH_IMG ?>icon-16-info.png">
Thông tin bài viết
</h2>
<table>
	<tr>
    	<td><strong>Chủ đề</strong></td>
    </tr>
	<tr>
		<td>
        <select name = 'idcat'>
				<option value = '0'>- - - Là chủ đề gốc - - -</option>
			<?php
			    $sql="select * from mn_catnews where parentid='0' and ticlock='0' order by Id asc";
				$ds=mysql_query($sql) or die(mysql_error());
				while($row=mysql_fetch_assoc($ds)) {
			?>
                <option value="<?=$row['Id']?>"><?=$row['title_vn'];?></option>
                <?php
				     $idpa=$row['Id'];
					 $sql2="select * from mn_catnews where parentid='$idpa' and ticlock='0' order by Id asc";
					 $ds2=mysql_query($sql2) or die(mysql_error());
					 while($row2=mysql_fetch_assoc($ds2)) {
				?>
                     <option value="<?=$row2['Id']?>" >---<?=$row2['title_vn'];?>---</option>
                <?php } ?>
            <?php } ?>
			</select>
		</td>
	</tr>
<?php foreach($config_lang as $klang => $vlang){ ?>
	<tr>
    	<td><strong>Tiêu đề (<?=$vlang ?>)</strong></td>
    </tr>
	<tr>
		<td><input type = 'text' name = 'title_<?php echo $vlang;?>' size = '83' id="title_<?php echo $vlang;?>"></td>

	</tr>
    
	<tr>
    	<td><strong> Mô tả (<?=$vlang ?>)</strong></td>
    </tr>
	<tr>
		<td><textarea name="description_<?=$vlang ?>" id="des" style="height:200px; width:570px;"></textarea></td>
	</tr>
    
    <tr>
    	<td><strong>Ghi Chú (<?=$vlang ?>)</strong></td>
    </tr>
	<tr>
		<td><textarea name="note_<?=$vlang ?>" id="des" style="height:200px; width:570px;"></textarea></td>
	</tr>
    
	<tr>
    	<td><strong>Nội dung (<?=$vlang ?>)</strong></td>
    </tr>
	<tr>
		<td><?php getFCKeditor("content_".$vlang,"",500); ?></td>
	</tr>
<?php } ?>
	
</table>
</td>
<td valign="top">
<h2>
<img alt="" src="<?=ADMIN_PATH_IMG ?>icon-16-info.png">
Thông tin thiết lập
</h2>
	<table class="right_new" >
    
         <tr>
            <td class = 'title_td'>Alias</td>
            <td><input type = 'text' name = 'alias' size = '45' value=""></td>
        </tr>
        
        <tr>
            <td class = 'title_td'><?php echo IMAGES;?></td>
            <td><input type = 'file' name = 'images'></td>
        </tr>
        <tr>
            <td class = 'title_td'><?php echo SORT;?></td>
            <td><input type = 'text' name = 'sort' size = '30'></td>
        </tr>
        <tr>
            <td class = 'title_td'>Ngày đăng</td>
            <td><input type = 'text' name = 'date' size = '30' value="<?=date("Y-m-d H:i:s") ?>" ></td>
        </tr>
        
        <tr>
            <td class = 'title_td'>Số lần xem</td>
            <td><input type = 'text' name = 'visit' size = '30' value="50"></td>
        </tr>
       
        <tr>
            <td class = 'title_td'>Bật / Tắt</td>
            <td>
            	<select name="ticlock">
                	<option value="0">Bật</option>
                    <option value="1">Tắt</option>
            	</select>
            </td>
        </tr>
          <tr>
            <td class = 'title_td'>Nổi  bật</td>
            <td>
            	<select name="NoiBat">
                	<option value="0" >Tắt</option>
                	<option value="1"   >Bật</option>
                    
            	</select>
            </td>
        </tr>
       
        <tr>
            <td class = 'title_td'> Meta Keyword</td>
            <td>
            	<textarea name="meta_keyword" style="width:220px; height:100px;"></textarea>
            </td>
        </tr>
         <tr>
            <td class = 'title_td'> Meta Description</td>
            <td>
            	<textarea name="meta_description" style="width:220px; height:100px;"></textarea>
            </td>
        </tr>
        
        <tr>
            <th align = 'center'>
                <input type = 'submit' value = '<?php echo G_BUTTON_ADD;?>' name = 'addnew' class="button">&nbsp;&nbsp;&nbsp;&nbsp;
                <input type = 'reset' value = '<?php echo G_BUTTON_RESET;?>' class="button" >
            </th>
        </tr>	
        
    </table>
</td>
</tr>
</tbody>
</table>
</form>
</div>
</div>
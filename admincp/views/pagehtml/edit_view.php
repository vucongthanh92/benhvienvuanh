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
    <td> Quản lý nội dung / Bài viết mở rộng / Sửa bài viết</td>
    </tr>
    </tbody>
    </table>
    </div>
</div>
        

<div class="content">
<div class="content_i">

<?php
if(!empty($data['error']))
{
	echo "<div id = 'error'>";
	echo "<h2>Lỗi!</h2>";
	echo "<ul>";
	echo getError($data['error']);
	echo "</ul>";
	echo "</div>";
}
?>

<form action = '<?php echo BASE_URL_ADMIN;?>pagehtml/edit/<?php echo $data['info']['Id'];?>' method = 'post' enctype = "multipart/form-data">
<table>
<?php
foreach($config_lang as $klang => $vlang)
{
?>
	<tr>
		<td class = 'title_td'><?php echo TITLE;?> (<?php echo $vlang;?>)</td>
		<td><input type = 'text' name = 'title_<?php echo $vlang;?>' size = '100' value = '<?php echo $data['info']["title_".$vlang];?>'></td>
	</tr>
	<tr>
		<td class = 'title_td'><?php echo CONTENT;?> (<?php echo $vlang;?>)</td>
		<td><?php getFCKeditor("content_".$vlang,stripslashes($data['info']["content_".$vlang]),500); ?></td>
	</tr>
<?php
}
?>
	<tr>
		<td class = 'title_td'><?php echo TICLOCK;?></td>
		<td><input type = 'checkbox' name = 'ticlock' value = '1'></td>
	</tr>
	<tr>
    	<th></th>
		<th  align = 'center'>
			<input type = 'submit' name = 'editnew' value = '<?php echo G_BUTTON_EDIT;?>' class="button">
			<input type = 'reset' value = '<?php echo G_BUTTON_RESET;?>' class="button">
			<input type = 'button' value = '<?php echo G_BUTTON_BACK;?>' onclick = "javascript:history.go(-1);" class="button" >
		</th>
	</tr>	
</table>
</form>
</div>
</div>
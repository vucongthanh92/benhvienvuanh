<script language = 'javascript' src = '<?php echo BASE_URL_ADMIN; ?>public/tiny_mce/tiny_mce.js'></script>
<script language = 'javascript' src = '<?php echo ADMIN_PATH_JS; ?>editor_tinymce.js'></script>
<script type="text/javascript">
	tinymce_simple("content_vn");
</script>

<?php
require("libraries/class.UploadResizeImg.php");
if(isset($_POST['btnhoi']))
{	
	$tieude = $_POST['title_vn'];
	$mota = $_POST['description_vn'];
	$hoten = $_POST['hoten'];
	$email = $_POST['email'];
	$error =0;
	if($error == 0){
		$data = array(
			'title_vn'        => addslashes($tieude),
			'description_vn'  => addslashes($mota),
			'hoten'           => $hoten,
			'email'           => $email,
			'idcat'           => 1,
			'ticlock'         => 1,
			'date'            => date("Y-m-d H:i:s"),
		);
		$db = new Models_MHoidap();
		$db->addNew($data);
		echo "<script>alert('Câu hỏi của bạn đã được tới ban quản trị! chúng tôi sẽ trả lời bạn trong thời gian sớm nhất');
		              location.href='".BASE_URL."hoi-dap.html"."'
		      </script>";
	}
}
?>

<div class="datcauhoi_main">

<div id="list_title"><?=$data["map_title"] ?></div>

<div class ='datcauhoi_noidung'>
<form action="" name="formdatcauhoi" method="post" enctype="multipart/form-data" id="fromdatcauhoi">
   <!--bảng thông tin left-->
   <table class="cauhoitab_left" border="0" cellspacing="0" cellpadding="0">
      <tr>
          <td><?=HOTEN?></td>
          <td><input class="tabright_input" id="hoidap_hoten" type="text" name="hoten" value=""/></td>
      </tr>
      <tr>
          <td>Email: </td>
          <td><input class="tabright_input" type="text" name="email" value=""/></td>
      </tr> 
      <tr>
          <td><?=TITLE?></td>
          <td><input class="tableft_input" type="text" id="hoidap_title" name="title_vn" value=""/></td>
      </tr>
      <tr>
          <td><?=MOTA?></td>
          <td><textarea name="description_vn" id="hoidap_mota" class="tableft_box"></textarea></td>
      </tr>  
      <tr>
          <td>&nbsp;</td>
          <td>
              <input type="submit" value="<?=GOICAUHOI?>" name="btnhoi" class="btn" />
          </td>
      </tr>
   </table>
   <!----------------------->
</form>
     <?php loadview('pagefixed/left',$left)?>
     <div style="clear:both"></div>
</div>
</div>

<script>
    $(document).ready(function(e) {
        $(".btn").click(function()
		{
			if($("#hoidap_title").val()=="")
			{
				alert('Bạn chưa nhập tiêu đề');
				return false;
			}
			
			if($("#hoidap_mota").val()=="")
			{
				alert('Bạn chưa nhập mô tả');
				return false;
			}
			
			if($("#hoidap_hoten").val()=="")
			{
				alert('Bạn chưa nhập họ tên người gởi');
				return false;
			}
		})
    });
</script>
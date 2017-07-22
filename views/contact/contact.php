
<div id="page_lienhe">
   <div class="lienhe">
     <div class="mappage"><span class="title_"><?php echo $data['map_title'];?></span></div>
     <div class = 'noidung_contact'>
		  <?php if($data['error']==1) { ?>
          <div class="error"><?=$data['mesage'] ?></div>
          <? } ?>
          <form action="" name="formlienhe" method="post">
              <table border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td><?=HOTEN;?>(<span style="color:#F00">*</span>):</td>
                <td><input name="hoten" id="lienhe_hoten" value="<?=$data['hoten'] ?>" type="text" /></td>
              </tr>
              <tr>
                <td><?=DIACHI;?>(<span style="color:#F00">*</span>):</td>
                <td><input name="diachi" id="lienhe_diachi" value="<?=$data['add'] ?>" type="text" /></td>
              </tr>
              <tr>
                <td>Email(<span style="color:#F00">*</span>):</td>
                <td><input name="email" id="lienhe_email" value="<?=$data['email'] ?>" type="text" /></td>
              </tr>
              <tr>
                <td><?=DIENTHOAI;?>(<span style="color:#F00">*</span>):</td>
                <td><input name="dienthoai" onkeyup="this.value = FormatNumber(this.value);" id="lienhe_dienthoai" value="<?=$data['tell']?>" 
                     type="text" /></td>
              </tr>
              <tr>
                <td><?=NOIDUNG;?>(<span style="color:#F00">*</span>):</td>
                <td><textarea name="noidung" id="noidung"><?=$data["cont"] ?></textarea></td>
              </tr>
              <tr>
                <td></td>
                <td><input type="submit" name="btngui" id="btngui" value="<?=GUI;?>"/></td>
              </tr>
          </table>
                          
          </form>								
          <p style="margin-top:10px;">Quý khách có thể liên hệ với chúng tôi bằng cách điền thông tin theo mẫu trên. .</p>					
          </div>
          
          <div id="info_contact">
               <?php echo $data['thongtin']['content_vn']?>
          </div>      
       </div>

   <?php loadview('pagefixed/left',$left)?>
   <div style="clear:both"></div>
      
</div>
<div style="clear:both"></div>

<script>
    function validateEmail(sEmail) 
	{
		var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
		if (filter.test(sEmail)) {
			return 1;
		}
		else {
			return 0;
		}
	}
</script>

<script>
    $(document).ready(function(e) {
         $("#btngui").click(function()
		 {
			 if($("#lienhe_hoten").val()=="")
			 {
				 alert('Bạn chưa nhập họ tên');
				 return false;
			 }
			 
			 if($("#lienhe_diachi").val()=="")
			 {
				 alert('Bạn chưa nhập địa chỉ');
				 return false;
			 }
			 
			 if($("#lienhe_email").val()=="")
			 {
				 alert('Bạn chưa nhập Email');
				 return false;
			 }
			 
			 if($("#lienhe_dienthoai").val()=="")
			 {
				 alert('Bạn chưa nhập số điện thoại');
				 return false;
			 }
			 
			 if($("#noidung").val()=="")
			 {
				 alert('Bạn chưa nhập nội dung liên hệ');
				 return false;
			 }
			 
			 var email = validateEmail($("#lienhe_email").val());
			 if(email==0)
			 {
				 alert("Email không hợp lệ");
			     return false;
			 }
			 
		 })
    });
</script>
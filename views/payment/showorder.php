<?php
	$to = $_SESSION['emaillienhe_vn'];
	$mpayment = new Models_MPayment;
	if(isset($_POST["btndathang"]))
	{
		$hoten = $_POST["hoten"];
		$dienthoai = $_POST["dienthoai"];
		$email = $_POST["email"];
		$ngaysinh = $_POST["ngaysinh"];
		$ngayhen = $_POST["ngayhen"];
		$gioitinh = $_POST["gioitinh"];
		$diachi = $_POST["diachi"];
		$chuyenkhoa = $_POST["chuyenkhoa"];
		$thongtin =$_POST["thongtin"];
		
		$sql="select * from team where Id='$chuyenkhoa'";
		$ds=mysql_query($sql) or die(mysql_error());
		$row=mysql_fetch_assoc($ds);
		$chuyenkhoa_title=$row['title_vn'];
		
		if($gioitinh==0) $gioitinh_title = "Nữ";
		if($gioitinh==1) $gioitinh_title = "Nam";
		if($gioitinh==2) $gioitinh_title = "Khác";
		
		///--------------------------------
		ob_start();
		echo file_get_contents("mail/emaidathang_admin.html");
		$noidung = ob_get_clean();
		$noidung = str_replace("{hoten}", $hoten , $noidung);
		$noidung = str_replace("{dienthoai}", $dienthoai , $noidung);
		$noidung = str_replace("{email}", $email, $noidung);
		$noidung = str_replace("{ngaysinh}", $ngaysinh , $noidung);
		$noidung = str_replace("{ngayhen}", $ngayhen , $noidung);
		$noidung = str_replace("{gioitinh}", $gioitinh_title , $noidung);
		$noidung = str_replace("{diachi}", $diachi , $noidung);
		$noidung = str_replace("{chuyenkhoa}", $chuyenkhoa_title , $noidung);
		$noidung = str_replace("{thongtin}", $thongtin , $noidung);
		$tieude = "Thông Tin Đặt Lịch Hẹn Tại Bệnh Viện Đa Khoa Vũ Anh";
		smtpmailer($to,$email,$hoten,$tieude,$noidung);
		// end goi mail admin
		ob_start();
		echo file_get_contents("mail/emaidathang_khachhang.html");
		$noidung1 = ob_get_clean();
		$tieude = "Thông Tin Đặt Lịch Hẹn Tại Bệnh Viện Đa Khoa Vũ Anh";
		smtpmailer($email,$to,'Bệnh Viện Vũ Anh',$tieude,$noidung1);
		
		/*lưu thông tin của khách hàng*/
		$infokh = array();
		$infokh['hoten'] = $hoten;
		$infokh['dienthoai'] = $dienthoai;
		$infokh['email'] = $email;
		$infokh['ngaysinh'] = $ngaysinh;
		$infokh['ngayhen'] = $ngayhen;
		$infokh['gioitinh'] = $gioitinh;
		$infokh['diachi'] = $diachi;
		$infokh['chuyenkhoa'] = $chuyenkhoa;
		$infokh['date'] = date("Y-m-d H:i:s");
		$infokh['idUser'] = $_SESSION['login_user_id'];
		$mpayment->addCustomer($infokh);
		$idmax = mysql_insert_id();
		$url=BASE_URL;
		echo "<script>
		     alert('Đặt lịch hẹn thành công! Chúng tôi sẽ sớm liên hệ với bạn');
			 location.href='$url';
		</script>";
	}
?>
<div class="index_middle">
<div class="content_cart">

<div id="list_title"><a href="<?=BASE_URL?>"><?=MN_HOME?></a><img class="arrow_icon" src="<?=BASE_URL."public/template/images/arrow.gif"?>" />
     <a href="<?=BASE_URL."dat-lich-kham.html";?>"><?=DATLICHKHAM?></a>
</div>

<div class="info2">	
<p class="title_cat"><?=THONGTIN?></p>
<div class="space_10" style="height:24px;"></div>

<!--form bản desktop-->
<form id="form_desktop" enctype="multipart/form-data" action="" method="post">
<div class="info_customer">
<table width="700" border="0" cellspacing="0" cellpadding="0" style="margin-left:40px; margin-top:10px; text-align:left;">
<tbody>
   <tr>
      <td><?=HOTEN ?><span style="color:#FF0000">*</span>: <br />
    	 <input type="text" name="hoten" id="hoten" value="<?=$data["hoten"] ?>"  />
      </td>
      <td>
    	 <?=DIENTHOAI ?><span style="color:#FF0000">*</span>:<br />
  	     <input type="text" name="dienthoai" id="dienthoai" value="<?=$data['dienthoai'] ?>" />
      </td>
      <td>
    	 Email<span style="color:#FF0000">*</span>:<br />
  	 	 <input type="text" name="email" id="email" value="<?=$data['email'] ?>"  />
      </td>
   </tr>
   
   <tr>
      <td><?=NGAYSINH?><span style="color:#FF0000">*</span>: <br />
    	 <input name="ngaysinh" class="span1" id="dp1" type="text">
      </td>
      <td>
    	 <?=NGAYHEN?><span style="color:#FF0000">*</span>:<br />
  	     <input name="ngayhen" class="span2" id="dp2" type="text">
      </td>
      <td>
    	 <?=GIOITINH?><span style="color:#FF0000">*</span>:<br />
  	 	 <select id="gioitinh" name="gioitinh">
             <option value="1"><?=NAM?></option>
             <option value="0"><?=NU?></option>
             <option value="2"><?=KHAC?></option>
         </select>
      </td>
   </tr>
   
   <tr>
  	  <td colspan="2"><?=DIACHI ?><span style="color:#FF0000">*</span>:<br />
         <input type="text" id="datlich_address" name="diachi" value="<?=$data['diachi'] ?>" /> 
      </td>
      <td> 
     	 <?=CHONKHOA?><span style="color:#FF0000">*</span>:<br />
         <select id="chuyenkhoa" name="chuyenkhoa">
			<option value="0">---<?=CHONKHOAPHUHOP?>---</option>
            <?php
			    $sql2="select * from team where ticlock='0'";
				$ds2=mysql_query($sql2) or die(mysql_error());
				while($row2=mysql_fetch_assoc($ds2)) { 
			?>
			<option value="<?=$row2['Id']?>"><?=$row2['title_'.lang]?></option>
            <?php } ?>
		 </select>
      </td>
   </tr>
   <tr>
      <td colspan="3"><?=TINHTRANG?><br />
      <textarea name="thongtin" id="thongtin_order"><?=$data['thongtin'];?></textarea></td>
   </tr>
  
</tbody>
</table>
</div>
<div style="text-align:right; margin-top:10px;" class="list_btn_cart">
    <input name="btndathang" type="submit" value="Submit" id="btndathang" />
</div>
</form>
<!------------------->

<!--form bản mobile-->
<form id="form_mobi" action="" method="post">
<div class="info_customer">
<?php
	if($error == 1 ){
		echo '<div class="space_10"></div>';
		echo "<div class='error'>".$data["message"]."</div>";
		echo '<div class="space_10"></div>';
	}
?>
<table>
<tbody>
    <tr>
        <td><?=HOTEN ?><span style="color:#FF0000">*</span>:</td>
        <td><input type="text" name="hoten" id="hoten" value="<?=$data["hoten"] ?>"/></td>
    </tr>
    
    <tr>
        <td class="tab_title"><?=DIENTHOAI ?><span style="color:#FF0000">*</span>:</td>
        <td><input type="text" name="dienthoai" id="dienthoai" value="<?=$data['dienthoai'] ?>" /></td>
    </tr>

    <tr>
        <td class="tab_title">Email<span style="color:#FF0000">*</span>:</td>
        <td><input type="text" name="email" id="email" value="<?=$data['email'] ?>"  /></td>
    </tr>
    
    <tr>
        <td>Ngày Sinh<span style="color:#FF0000">*</span></td>
        <td><input name="ngaysinh" class="span1" id="dp1" type="text"></td>
    </tr>
    
    <tr>
    	 <td>Ngày Hẹn<span style="color:#FF0000">*</span></td>
  	     <td><input name="ngayhen" class="span2" id="dp2" type="text"></td>
    </tr>
    
    <tr>
    	 <td>Giới Tính<span style="color:#FF0000">*</span></td>
  	 	 <td><select id="gioitinh" name="gioitinh">
             <option value="1">Nam</option>
             <option value="0">Nữ</option>
             <option value="2">Khác</option>
         </select>
         </td>
    </tr>
    
  	<tr>
	    <td class="tab_title"><?=DIACHI ?><span style="color:#FF0000">*</span>:</td>
        <td><input type="text" id="datlich_address" name="diachi" value="<?=$data['diachi'] ?>" /></td>
    </tr>

    <tr> 
     	<td>Chọn Khoa<span style="color:#FF0000">*</span></td>
        <td><select id="chuyenkhoa" name="chuyenkhoa">
			<option value="0">---chọn khoa phù hợp---</option>
            <?php
			    $sql2="select * from team where ticlock='0'";
				$ds2=mysql_query($sql2) or die(mysql_error());
				while($row2=mysql_fetch_assoc($ds2)) { 
			?>
			<option value="<?=$row2['Id']?>"><?=$row2['title_'.lang]?></option>
            <?php } ?>
		    </select>
        </td>
    </tr>

    <tr>
        <td>Tình Trạng Hiện Tại</td>
        <td><textarea name="thongtin" id="thongtin_order"><?=$data['thongtin'];?></textarea></td>
    </tr>
</tbody>
</table>

<div style="text-align:right; margin-top:10px;" class="list_btn_cart">
    <input name="btndathang" type="submit" value="Submit" id="btndathang" />
</div>
</form>
<!------------------->


</div>
</div>

<?php loadview('pagefixed/left',$left)?>
<div style="clear:both"></div>

<div class="space_10"></div>
</div>
</div>

<script>
    $(document).ready(function(e) {
        $("#btndathang").click(function()
		{
		   if($("#hoten").val()=="")
		   {
			   alert('Bạn chưa nhập họ tên');
			   return false;
		   }
		   
		   if($("#dienthoai").val()=="")
		   {
			   alert('Bạn chưa nhập số điện thoại');
			   return false;
		   }
		   
		   if($("#email").val()=="")
		   {
			   alert('Bạn chưa nhập địa chỉ mail');
			   return false;
		   }
		   
		   if($("#dp1").val()=="")
		   {
			   alert('Bạn chưa nhập ngày tháng năm sinh');
			   return false;
		   }
		   
		   if($("#dp2").val()=="")
		   {
			   alert('Bạn chưa nhập ngày hẹn');
			   return false;
		   }
		   
		   if($("#datlich_address").val()=="")
		   {
			   alert('Bạn chưa nhập địa chỉ');
			   return false;
		   }
		   
		   if($("#chuyenkhoa").val()=="0")
		   {
			   alert('Bạn chưa chọn chuyên khoa cần khám');
			   return false;
		   }
		})
    });
</script>

<script>
	if (top.location != location) {
    top.location.href = document.location.href ;
  }
		$(function(){
			window.prettyPrint && prettyPrint();
			$('#dp1').datepicker({
				format: 'dd-mm-yyyy'
			});
			$('#dp2').datepicker(
			{
				format: 'dd-mm-yyyy'
			});

			var startDate = new Date(2012,1,20);
			var endDate = new Date(2012,1,25);
			
        // disabling dates
        var nowTemp = new Date();
        var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

        var checkin = $('#dpd1').datepicker({
          onRender: function(date) {
            return date.valueOf() < now.valueOf() ? 'disabled' : '';
          }
        }).on('changeDate', function(ev) {
          if (ev.date.valueOf() > checkout.date.valueOf()) {
            var newDate = new Date(ev.date)
            newDate.setDate(newDate.getDate() + 1);
            checkout.setValue(newDate);
          }
          checkin.hide();
          $('#dpd2')[0].focus();
        }).data('datepicker');
        var checkout = $('#dpd2').datepicker({
          onRender: function(date) {
            return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
          }
        }).on('changeDate', function(ev) {
          checkout.hide();
        }).data('datepicker');
		});
</script>
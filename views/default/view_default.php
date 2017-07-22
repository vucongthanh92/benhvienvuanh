<?php loadview('pagefixed/slide',$slide); ?>

<div class="default_page">

<!--slide bài viết trang chủ-->
<div id="cty_img"><?php loadview('pagefixed/right',$right); ?></div>
<!---------------------------->

<div class="content">
     <div class="phanhoi">
          <h2><div class="phanhoi_label">
              <a href="<?=BASE_URL."phan-hoi.html";?>"><span><?=MN_PHANHOIKHACHHANG?></span></a><hr class="phanhoi_label_hr" />
          </div></h2>
          <!--danh sách hình ảnh trong phản hồi-->
          <div class="phanhoi_anh">
          <?php
		      $sql="select * from partner where ticlock='0' order by sort desc, Id desc limit 4";
			  $ds=mysql_query($sql) or die($mysql_error());
			  $i=0;
			  while($item=mysql_fetch_assoc($ds)) { 
			  $i++;
		  ?>
              <a href="<?=BASE_URL."phan-hoi/".$item['Id']."-".strtoseo($item['title_vn']).".html";?>">
                 <img class="phanhoi_img" id="phanhoi_anh_<?=$i;?>" src="<?=BASE_URL."data/images/".$item['images'];?>" />
              </a>
          <?php } ?>
          </div>
          <!------------------------------------->
          <!--danh sách bài viết phản hồi-->
          <div class="phanhoi_baiviet">
          <?php
		      $sql2="select * from partner where ticlock='0' order by sort desc, Id desc limit 2";
			  $ds2=mysql_query($sql2) or die(mysql_error());
			  $i=0;
			  while($item2 = mysql_fetch_assoc($ds2)) { 
		  ?>
          <a href="<?=BASE_URL."phan-hoi/".$item2['Id']."-".strtoseo($item2['title_vn']).".html";?>">
          <div class="phanhoi_row">
              <div class="phanhoi_tieude"><?=$item2['title_'.lang]?></div>
              <div class="phanhoi_mota"><?=$item2['description_'.lang]?></div>
          </div>
          </a>
		  <?php } ?>
          </div>
          <!------------------------------------->
          <!-- Đặt thẻ này vào nơi bạn muốn tiện ích con kết xuất. -->
          <div class="gplus">
               <div class="g-page" data-width="340" data-href="https://plus.google.com/110531794374534726665" data-rel="publisher"></div>
          </div>
          <!------------------------------------->
          <div style="clear:both"></div>
     </div>
     
     <!-- phần component đặt câu hỏi -->
     <div class="cauhoi">
          <h2><div class="cauhoi_label">
              <a href="<?=BASE_URL."tu-van-truc-tuyen.html"?>"><span><?=TUVANTRUCTUYEN?></span></a><hr class="cauhoi_label_hr"/>
          </div></h2>
          <!--phần đặt câu hỏi và chủ đề-->
          <div class="phanhoi_anh">
             <a href="<?=BASE_URL."tu-van-truc-tuyen/goi-cau-hoi.html"?>">
                <img class="cauhoi_img" src="<?=BASE_URL."public/template/images/cau-hoi.jpg";?>" /></a>
             <a href="<?=BASE_URL."tu-van-truc-tuyen/cau-hoi-thuong-gap.html";?>">
                <img id="cauhoi_chude" class="cauhoi_img" src="<?=BASE_URL."public/template/images/chu-de.jpg";?>" />
             </a>
          </div>
          <!------------------------------------->
          
          <!--danh sách bài viết phản hồi-->
          <div class="tuvan_baiviet">
          <?php
		      $sql3="select * from goods where ticlock='0' order by Id desc limit 8";
			  $ds3=mysql_query($sql3) or die(mysql_error());
			  $i=0;
			  while($item3 = mysql_fetch_assoc($ds3)) {
				  $i++; 
		  ?>
              <!--danh sách bài viết tư vấn-->
              <a href="<?=BASE_URL."tu-van-truc-tuyen/cau-hoi-khach-hang.html";?>">
                 <div class="tuvan_row"><?=$item3['title_vn']?></div>
              </a>
              <!----------------------->
		  <?php } ?>
          </div>
          <!------------------------------------->
          
           <!--phần giới thiệu bác sỹ-->
           <div class="profile">
                <h2><div class="profile_title"><?=BACSYCUACHUNGTOI?></div></h2>
                <?php
				    $sql4="select * from mn_manufacturer where ticlock='0' order by Id desc limit 1";
					$ds4=mysql_query($sql4) or die(mysql_error());
					$item4=mysql_fetch_assoc($ds4)
				?>
                <a href="<?=BASE_URL."bac-sy/".$item4['alias'].".html"?>">
                <img class="profile_img" src="<?=BASE_URL."data/Manufacturer/".$item4['images'];?>" />
                <div class="profile_box">
                     <div class="profile_ten"><?=$item4['hoten']?></div>
                     <div class="profile_chuyenkhoa">
                          <?php
						      if($item4['chuyenkhoa1']>0) $chuyenkhoa=$item4['chuyenkhoa1'];
							  else if($item4['chuyenkhoa2']>0) $chuyenkhoa=$item4['chuyenkhoa2'];
							  else if($item4['chuyenkhoa3']>0) $chuyenkhoa=$item4['chuyenkhoa3'];
							  $sql5="select * from team where Id='$chuyenkhoa'";
							  $ds5=mysql_query($sql5) or die(mysql_error());
							  $item5=mysql_fetch_assoc($ds5);
							  echo $item5['title_'.lang];
						  ?>
                     </div>
                </div>
                </a>
           </div>
           <!-------------------------->
          
          <div style="clear:both"></div>
     </div>
     <!-------------------------------->
     
</div>
<div style="clear:both"></div>


<!--kiểm tra phiên bản của trình duyệt-->
<script>
    $(document).ready(function(e) {
		 var i=browserName();
		 if(i=='Chrome')
		 {
			 $(".title_main_left").css("padding-top","10px");
		 }
    });
	function browserName(){
		 var Browser = navigator.userAgent;
		 if (Browser.indexOf('MSIE') >= 0){
			 Browser = 'MSIE';
		 }
		 else if (Browser.indexOf('Firefox') >= 0){
			 Browser = 'Firefox';
		 }
		 else if (Browser.indexOf('Chrome') >= 0){
			 Browser = 'Chrome';
		 }
		 else if (Browser.indexOf('Safari') >= 0){
			 Browser = 'Safari';
		 }
		 else if (Browser.indexOf('Opera') >= 0){
			 Browser = 'Opera';
		 }
		 else{
			 Browser = 'UNKNOWN';
		 }
	 return Browser;
	}
</script>
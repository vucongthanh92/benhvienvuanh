<div class="left_col">
     
     <!--danh mục tư vấn trực tuyến-->
     <?php if($_GET['mod']=="hoi-dap") { ?>
     <a href="<?=BASE_URL."tu-van-truc-tuyen/cau-hoi-khach-hang.html"?>"><div class="left_tuvan_row"><?=CAUHOIKHACHHANG?></div></a>
     <a href="<?=BASE_URL."tu-van-truc-tuyen/cau-hoi-thuong-gap.html"?>"><div class="left_tuvan_row"><?=CAUHOITHUONGGAP?></div></a>
     <a href="<?=BASE_URL."tu-van-truc-tuyen/goi-cau-hoi.html"?>"><div class="left_tuvan_row"><?=GOICAUHOI?></div></a>
     <?php } ?>
     <!------------------------------------>
     
     <div class="left_tuvan">
     <?php
	     $sql="select * from mn_flash where location='4' order by Id limit 1";
		 $ds=mysql_query($sql) or die(mysql_error());
		 $row=mysql_fetch_assoc($ds)
	 ?>
         <img src="<?=BASE_URL."data/Flash/".$row['file_vn'];?>" />
     </div>
     
     <!--danh sách khoa trong menu bác sỹ-->
     <?php if($_GET['mod']=="bac-sy") { ?>
     <div class="left_dskhoa">
     <div class="left_chuyenkhoa_title"><?=MN_CHUYENGIA?></div>
     <?php
		 $sql5="select * from team where ticlock='0' order by sort asc, Id desc";
		 $ds5=mysql_query($sql5) or die(mysql_error());
		 while($item5 = mysql_fetch_assoc($ds5)) {
     ?>
         <a href="<?=BASE_URL."bac-sy/".$item5['alias'].".htm"?>">
		 <div class="left_dskhoa_row"><?=$item5['title_'.lang]?></div></a>
     <?php } ?>
     </div>
     <?php } ?>
     <!------------------------------------>
     
     <div class="left_khamsuckhoe">
     <?php
	     $sql2="select * from mn_news where Id='5' order by Id limit 1";
		 $ds2=mysql_query($sql2) or die(mysql_error());
		 $row2=mysql_fetch_assoc($ds2)
	 ?>
         <a href="<?=BASE_URL."tin-tuc/chi-tiet/".$row2['alias'].".html"?>">
         <img src="<?=BASE_URL."data/News/".$row2['images'];?>" />
         </a>
     </div>
     
     <!--chuyên khoa mũi nhọn-->
     <script>
		$(document).ready(function(e) {
			$(".index_chuyenkhoa_row:last").css("border","none");
		});
	 </script>
     <div class="left_chuyenkhoa">
         <div class="left_chuyenkhoa_title"><?=CHUYENKHOATHEMANH?></div>
         <?php
		     $sql4="select * from team where hot='1' and ticlock='0' order by sort asc, Id desc";
			 $ds4=mysql_query($sql4) or die(mysql_error());
			 while($item4=mysql_fetch_assoc($ds4)) {
		 ?>
         <a href="<?=BASE_URL?>">
         <div class="index_chuyenkhoa_row">
              <img src="<?=BASE_URL."data/Product/icon/".$item4['icon'];?>" />
			  <div><?=$item4['title_'.lang]?></div>
              <div style="clear:both"></div>
         </div>
         </a>
         <?php } ?>
     </div>
     <!------------------------->
     
     <!--tin tức nổi bật-->
     <script>
		$(document).ready(function(e) {
			$(".left_tintuc_row:last").css("border","none");
		});
	 </script>
     <div class="left_tintuc">
         <div class="left_tintuc_title"><?=TINTUCNOIBAT?></div>
         <marquee direction="up" behavior="scroll" scrollamount="2" height="300px" onmouseover="this.stop()" onmouseout="this.start()" >
         <?php
		     $sql3="select * from mn_news where NoiBat='1' and ticlock='0' order by sort asc, Id desc";
			 $ds3=mysql_query($sql3) or die(mysql_error());
			 while($item3 = mysql_fetch_assoc($ds3)) {
		 ?>
         <a href="<?=BASE_URL."tin-tuc/chi-tiet/".$item3['alias'].".html";?>">
         <div class="left_tintuc_row">
              <img src="<?=BASE_URL."data/News/".$item3['images'];?>" />
			  <div><?=$item3['title_'.lang]?></div>
              <div style="clear:both"></div>
         </div>
         </a>
         <?php } ?>
         </marquee>
     </div>
     <!------------------------->
     
     <div class="index_facebook">
     <div class="fb-page" data-href="https://www.facebook.com/vuanh.hospital.5/?fref=ts" data-tabs="fanpage" data-width="250" data-small-header="false"
     data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote 
     cite="https://www.facebook.com/vuanh.hospital.5/?fref=ts"><a href="https://www.facebook.com/vuanh.hospital.5/?fref=ts">Vũ Anh Hospital</a>
     </blockquote></div></div>
     </div>
     
</div>
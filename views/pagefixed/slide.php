<script src="<?=BASE_URL?>public/owl_carousel/owl-carousel/owl.carousel.js"></script>
<script>
    $(document).ready(function() 
	{
		var owl = $("#owl-demo");
		owl.owlCarousel(
		{
			navigation : true, // Show next and prev buttons
			slideSpeed : 300,
			paginationSpeed : 400,
			singleItem:true,
			autoPlay : 3000,
	  
			// "singleItem:true" is a shortcut for:
			// items : 1, 
			// itemsDesktop : false,
			// itemsDesktopSmall : false,
			// itemsTablet: false,
			// itemsMobile : false
		});
		
		// Custom Navigation Events
		$(".next").click(function(){
		  owl.trigger('owl.next');
		})
		$(".prev").click(function(){
		  owl.trigger('owl.prev');
		})
    });
</script>

<script>
  $(document).ready(function(e) {
	  $(".index_chuyenkhoa_row:last").css("border","none");
  });
</script>

<div class="index_menu">
    <div id="owl-demo" class="owl-carousel owl-theme">
         <?php
             $sql="select * from mn_flash where location='2' and ticlock='0' order by sort asc, Id desc";
             $ds=mysql_query($sql) or die(mysql_error());
             while($item=mysql_fetch_assoc($ds)) {
         ?>
         <div class="item"><a href="<?=$item['link'];?>"><img src="<?php echo BASE_URL.PATH_IMG_FLASH.$item['file_vn'];?>"/></a></div>
         <?php } ?>
    </div>
    <div class="customNavigation">
       <a class="btn prev"></a>
       <a class="btn next"></a>
    </div>

    <!--phần panel quảng cáo-->
    <div id="quangcao">
         <div class="qc_local"><?=DIACHI?>
              <a href="<?=BASE_URL."ban-do.html"?>"><div><?=$_SESSION['diachi']?></div></a>
         </div>
         <div class="qc_capcuu"><?=CAPCUU?>
              <div><a href="<?="tel:".str_replace(" ", "",$_SESSION['phone_capcuu']);?>"><?=$_SESSION['phone_capcuu']?></a></div>
         </div>
         <div class="qc_cskh"><?=CHAMSOCKHACHHANG?>
              <div><?=$_SESSION['phone_cskh']?></div>
         </div>
         <a href="<?=BASE_URL."dat-lich-kham.html"?>"><div class="qc_datlich"><?=DATLICHHEN?></div></a>
         <a href="<?=BASE_URL."bac-sy/tim-kiem.html";?>"><div class="qc_timbacsy"><?=TIMBACSY?></div></a>
    </div>
    
    <div style="clear:both; height:10px;"></div>
    <div id="quangcao_mobile">
         <a href="<?=BASE_URL."dat-lich-kham.html"?>"><div class="quangcao_mobile_datlich"><?=DATLICHHEN?></div></a>
         <a href="<?=BASE_URL."bac-sy/tim-kiem.html"?>"><div class="quangcao_mobile_timbacsy"><?=TIMBACSY?></div></a>
         <div></div>
    </div> 
    <div style="clear:both;"></div>
    
    <div class="chuyenkhoa_mobile">
         <div class="hotnews_label">
             <span><?=CHUYENKHOATHEMANH?></span>
             <hr class="chuyenkhoa_label_hr" />
         </div>
         <?php
		     $sql4="select * from team where hot='1' and ticlock='0' order by sort asc, Id desc";
			 $ds4=mysql_query($sql4) or die(mysql_error());
			 while($item4=mysql_fetch_assoc($ds4)) {
		 ?>
         <a href="<?=BASE_URL."chuyen-khoa/".$item4['alias'].".html";?>">
         <div class="index_chuyenkhoa_row">
              <img src="<?=BASE_URL."data/Product/icon/".$item4['icon'];?>" />
			  <div><span><?=$item4['title_'.lang]?></span></div>
              <div style="clear:both"></div>
         </div>
         </a>
         <?php } ?>
    </div>
    <!------------------------>
    
    
    <!-- phần tin tức mới cập nhật-->
    <div id="hotnews">
         <div class="hotnews_label">
             <a href="<?=BASE_URL."tin-tuc/danh-muc/tin-tuc.html"?>"><span><?=NEWS?></span></a>
             <hr class="hotnews_label_hr" />
         </div>
         <?php
			  $sql3="select * from mn_news where ticlock='0' and home='1' and idcat='2' order by sort asc, Id desc limit 1";
              $ds3=mysql_query($sql3) or die(mysql_error());
			  $item3=mysql_fetch_assoc($ds3);
         ?>
         <!--phần tin tức nổi bật-->
         <div class="hotnews_box">
              <a href="<?=BASE_URL."tin-tuc/chi-tiet/".$item3['alias'].".html" ?>">
              <img src="<?=BASE_URL.PATH_IMG_NEWS.$item3['images'];?>" />
              <div class="hotnews_info">
                   <div class="hotnews_title"><?=$item3['title_'.lang];?></div>
                   <div class="hotnews_mota"><?=$item3['description_'.lang];?></div>
              </div>
              </a>
         </div>
         <!----------------------->
         <!--phần tin tức nổi bật-->
         <div class="hotnews_cungloai">
         <?php
		    $id_news = $item3['Id'];
			$sql2 = "select * from mn_news where ticlock='0' and Id<>'$id_news' and idcat='2' order by sort asc, Id desc limit 16";
			$ds2=mysql_query($sql2) or die(mysql_error());
			while($item2=mysql_fetch_assoc($ds2)) {
         ?>
            <a href="<?=BASE_URL."tin-tuc/chi-tiet/".$item2['alias'].".html" ?>">
               <img class="hotnews_cungloai_img" src="<?=BASE_URL."data/News/".$item2['images'];?>" />
               <div class="hotnews_cungloai_row"><?=$item2['title_'.lang]?></div>
               <div class="hotnews_cungloai_clear"></div>
            </a>
         <?php } ?>
         <div style="clear:both;"></div>
         </div>
         <!----------------------->
    </div>
    
    <!--chuyên khoa mũi nhọn-->
    <div class="index_chuyenkhoa">
         <div class="index_chuyenkhoa_title"><?=CHUYENKHOATHEMANH?></div>
         <?php
		     $sql4="select * from team where hot='1' and ticlock='0' order by sort asc, Id desc";
			 $ds4=mysql_query($sql4) or die(mysql_error());
			 while($item4=mysql_fetch_assoc($ds4)) {
		 ?>
         <a href="<?=BASE_URL."chuyen-khoa/".$item4['alias'].".html";?>">
         <div class="index_chuyenkhoa_row">
              <img src="<?=BASE_URL."data/Product/icon/".$item4['icon'];?>" />
			  <div><?=$item4['title_'.lang]?></div>
              <div style="clear:both"></div>
         </div>
         </a>
         <?php } ?>
    </div>
    <!------------------------->
    
    <div class="index_facebook">
    <div class="fb-page" data-href="https://www.facebook.com/vuanh.hospital.5/?fref=ts" data-tabs="fanpage" data-width="240" data-small-header="false"
    data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote 
    cite="https://www.facebook.com/vuanh.hospital.5/?fref=ts"><a href="https://www.facebook.com/vuanh.hospital.5/?fref=ts">Vũ Anh Hospital</a>
    </blockquote></div></div>
    </div>
    
    <div style="clear:both;height:10px;"></div>
    
</div>

<script>
    $(document).ready(function(e) {
          $(".hotnews_box:odd").css("margin-right","0px");
    });
</script>
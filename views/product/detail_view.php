<script src="<?=BASE_URL?>public/owl_carousel/owl-carousel/owl.carousel.js"></script>

<script type="text/javascript">
$(document).ready(function(){
	$('#etalage a').hover(function(){
		src = $(this).attr('href');
		$('#idIMG').attr('src',src);
	});
})
</script>

<div class="index_middle">
<div class="content">
    
     <div class="div_wap_left"> 
     <div id="list_title"><a href="<?=BASE_URL?>"><?=MN_HOME?></a><img class="arrow_icon" src="<?=BASE_URL."public/template/images/arrow.gif";?>"/>
     <a href="<?=BASE_URL."chuyen-khoa.html";?>"><?=MN_CHUYENKHOA?></a>
     </div>
     
     <!--phần mô tả sản phẩm-->
     <div class="hinhcitiet">
    	  <div class="image_pro">
               <img src="<?=BASE_URL.PATH_IMG_PRODUCT.$data['prod']['images']?>" id="detailprod_img" />
          </div>
        
     <div id="info_detail_desktop" class="info_detail">
          <h1><?php echo $data['prod']['title_'.lang] ?></h1>
          <div class="lin"><b><?=VITRI?>:</b> 
		  <?php
		    if($data['prod']['idcat']>0)
			{
				$idcat=$data['prod']['idcat'];
				$sql4="select * from category where id='$idcat' and ticlock='0'";
				$ds4=mysql_query($sql4) or die(mysql_error());
				$row4=mysql_fetch_assoc($ds4);
				echo $row4['name'];
			}
		  ?> 
		  <div style="clear:both"></div> 
          </div>
          <p class="lin"><b><?=DIENTHOAIKHOA?>: </b><?=$data['prod']['phone'] ?></p>
          <p class="lin"><b><?=DANHSACHBACSY?></b></p>
          <?php
			  $id_khoa=$data['prod']['Id'];
			  $sql2="select * from mn_manufacturer where ticlock='0' and (chuyenkhoa1='$id_khoa' or chuyenkhoa2='$id_khoa' or chuyenkhoa3='$id_khoa')";
			  $ds2=mysql_query($sql2) or die(mysql_error());
			  while($row2=mysql_fetch_assoc($ds2)) {
		  ?> 
          <div class="prod_bacsy">
               <a href="<?=BASE_URL."bac-sy/".strtoseo($row2['hoten']).".html";?>">
               <div class="prod_bacsy_hoten"><?=$row2['hoten'];?><?php if($row2['chucvu_vn']!="") echo " - ".$row2['chucvu_'.lang];?></div></a>
               <div style="clear:both"></div>
          </div>
          <?php } ?>
     </div>
     <!-------------------------->
   </div>
   
   <div id="camket_muahang">
        <h3><?=MN_COSOVATCHAT?></h3>
        <?=$data['prod']['description_'.lang];?>
   </div>
   <div style="clear:both"></div>
   
   <!--phần nội dung sản phẩm-->
   <div class="div_left" style="position:relative">
      	<div class="tag-detail"><p><?=DICHVUCHINH?></p></div>
        <div class="content_noidung">
        	<?=stripcslashes($data['prod']['content_'.lang]);?>
        </div>
   </div>
   <!-------------------------->
   <div class="space_10"></div>
   </div>
   
   <?php loadview('pagefixed/left',$left)?>
   
   <!-------------------------->
   
   <div style="clear:both"></div>
   <div id="spcl_box">
  	    <div id="list_title"><?=CHUYENKHOAKHAC?></div>
        <div class="div_sp_cl" id="owl-demo3">
        <?php
            if(!empty($data['prod_cl'])){
                 foreach($data['prod_cl'] as $item){
        ?>
        <div class="item product-item ">
           <div class="thumb_cungloai">
               <a rel="nofollow" href="<?=BASE_URL."chuyen-khoa/".$item['alias'].".html" ?>"><div style="clear:both; height:5px;"></div>
               <img class="cungloai_image" alt="<?=$item['title_vn'] ?>" src="<?=BASE_URL.PATH_IMG_PRODUCT.$item['images'];?>"></a>
           </div>
           <div align="center" class="title">
              <h2><a title="<?=$item['title_'.lang];?>" href="<?=BASE_URL."chuyen-khoa/".$item['alias'].".html" ?>"><?=$item['title_'.lang] ?></a></h2>
           </div>
        </div>
        <?php }} ?>
        </div>
        
        <div class="customNavigation3">
             <a class="btn prev3"></a>
             <a class="btn next3"></a>
        </div>
        
   </div>
   <div style="clear:both"></div>
   
   <script>
     $(document).ready(function() {
		var owl3 = $("#owl-demo3");
        owl3.owlCarousel({
           autoPlay: 3000, //Set AutoPlay to 3 seconds
           items : 5,
           itemsDesktop : [1199,3],
           itemsDesktopSmall : [950,2]
        });
		
		// Custom Navigation Events
		$(".next3").click(function(){
		  owl3.trigger('owl.next');
		})
		$(".prev3").click(function(){
		  owl3.trigger('owl.prev');
		})
     });
   </script>
    
   <!-------------------->
    
    </div>
</div>

</div>
</div>

<div id="cty_img"><?php loadview('pagefixed/right',$right); ?></div>
<div style="clear:both"></div>

<script type="text/javascript">
	$(window).load( function() {
		$('img').smoothZoom({
			// Options go here
		});
	});
</script>
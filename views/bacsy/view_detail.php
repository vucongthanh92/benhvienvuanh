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
     <a href="<?=BASE_URL."bac-sy.html";?>"><?=MN_CHUYENGIA?></a>
     </div>
     
     <!--phần mô tả sản phẩm-->
     <div class="hinhcitiet">
    	  <div class="image_pro">
               <img src="<?=BASE_URL."data/Manufacturer/".$data['prod']['images']?>" id="detailprod_img" />
          </div>
        
     <div id="info_detail_desktop" class="info_detail">
          <h1><?php echo $data['prod']['hoten'] ?></h1>
          <?php if($data['prod']['profile']) { ?>
          <p class="lin"><b>Profile: </b><?=$data['prod']['profile'] ?></p>
          <?php } ?>
          <p class="lin"><b><?=CHUYENNGANH?>: </b><?=$data['prod']['chuyennganh_'.lang] ?></p>
          <?php
		      for($i=1;$i<=3;$i++){
		      if($data['prod']['chuyenkhoa'.$i]>0) {
				  $id_khoa = $data['prod']['chuyenkhoa'.$i];
				  $sql = "select * from team where Id=$id_khoa";
				  $ds=mysql_query($sql) or die(mysql_error());
				  $row=mysql_fetch_assoc($ds);
		  ?>
          <p class="lin"><b><?=MN_CHUYENKHOA?>: </b><?=$row['title_'.lang];?></p>
          <?php }} ?>

     </div>
     <!-------------------------->
   </div>

   <div style="clear:both"></div>
   
   <!--phần nội dung sản phẩm-->
   <div class="div_left" style="position:relative">
      	<div class="tag-detail"><p><?=THONGTINBACSY?></p></div>
        <div class="content_noidung">
        	<?=stripcslashes($data['prod']['mota_'.lang]);?>
        </div>
   </div>
   <!-------------------------->
   <div class="space_10"></div>
   </div>
   
   <?php loadview('pagefixed/left',$left)?>
   
   <!-------------------------->
   
   <div style="clear:both"></div>
   <div id="spcl_box">
  	    <div id="list_title"><?=BACSYKHAC?></div>
        <div class="div_sp_cl">
        <?php
            if(!empty($data['prod_cl'])){
                while($item = mysql_fetch_assoc($data['prod_cl'])){
        ?>
        <div class="list_bacsy">
        <div class="thumb">
        <a rel="nofollow" href="<?=BASE_URL."bac-sy/".$item['alias'].".html" ?>">
           <div style="clear:both; height:5px;"></div>
           <img class="list_bacsy_img" alt="<?=$item['hoten'];?>" src="<?=BASE_URL."data/Manufacturer/".$item['images'] ?>" title="<?=$item['hoten']?>">        </a>
        </div>
        <div align="center" class="title">
             <h2><a title="<?=$item['hoten'];?>" href="<?=BASE_URL."bac-sy/".$item['alias'].".html" ?>"><?=$item['hoten'] ?></a></h2>
        </div>
        <div align="center" class="list_bacsy_mota"><?=$item['chuyennganh_'.lang];?></div>
        </div>
        <?php }} ?>
        </div>
    </div>
    <div style="clear:both"></div>
    
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
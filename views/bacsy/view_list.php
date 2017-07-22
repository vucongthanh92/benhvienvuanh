<div class="listpro_content">
   <div class="list_prod">

     <div id="list_title"><a href="<?=BASE_URL?>"><?=MN_HOME?></a><img class="arrow_icon" src="<?=BASE_URL."public/template/images/arrow.gif"?>" />
        <a href="<?=BASE_URL."bang-gia.html";?>"><?=MN_CHUYENGIA?></a><img class="arrow_icon" src="<?=BASE_URL."public/template/images/arrow.gif"?>" />
        <?php if($data['chuyenkhoa']['title_vn']!="") { ?>
        <a href="<?=BASE_URL."bac-sy/".$data['chuyenkhoa']['alias'].".htm"?>"><?=$data['chuyenkhoa']['title_'.lang]?></a>
        <?php } ?>
     </div>
     
   	 <?php
		if(!empty($data['info'])){
			while($item = mysql_fetch_assoc($data['info'])){
				$i++;
	 ?>
     <div class="list_bacsy">
        <!--hình ảnh bác sỹ-->
        <div class="bacsy_thumb"><a href="<?=BASE_URL."bac-sy/".$item['alias'].".html"?>">
        <img class="list_bacsy_img" alt="<?=$item['hoten'];?>" src="<?=BASE_URL."data/Manufacturer/".$item['images'];?>" title="<?=$item['hoten'];?>">
        </a></div>
        <!--họ tên bác sỹ-->
        <div class="title"><h2><a title="<?=$item['title_'.lang] ?>" href="<?=BASE_URL."bac-sy/".$item['alias'].".html"?>">
             <?=$item['hoten'];?></a>
        </h2></div>
        <!--mô tả bác sỹ-->
        <div class="list_bacsy_mota"><?=$item['chuyennganh_'.lang]?></div>
        <?php if($item['chucvu_vn']!="") { ?>
        <div class="list_bacsy_chucvu">Chức Vụ: <?=$item['chucvu_'.lang]?></div>
        <?php } ?>
        <!---------------->
     </div>
     <?php }} ?>
    
     <?php
         if($data['page'] != "")
         echo "<div class = 'paging'>". $data['page']."</div>";
     ?>
    
   </div>
   
   <?php loadview('pagefixed/left',$left)?>
   <div style="clear:both"></div>
</div>
<div style="clear:both"></div>
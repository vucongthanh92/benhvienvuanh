<div class="listpro_content">
     <div class="list_prod">

     <div id="list_title"><a href="<?=BASE_URL?>"><?=MN_HOME?></a><img class="arrow_icon" src="public/template/images/arrow.gif" />
          <a href="<?=BASE_URL."bang-gia.html";?>"><?=PHANHOIKHACHHANG?></a>
     </div>
     
   	 <?php
		if(!empty($data['info'])){
			while($item = mysql_fetch_assoc($data['info'])){
				$i++;
	 ?>
     <div class="phanhoi_box">
     <div class="title"><h2><a title="<?=$item['title_'.lang] ?>" href="<?=BASE_URL."phan-hoi/".$item['Id']."-".strtoseo($item['title_vn']).".html"?>">
          <?=$item['title_'.lang] ?></a>
     </h2></div>
     <div class="thumb"><a href="<?=BASE_URL."phan-hoi/".$item['Id']."-".strtoseo($item['title_vn']).".html"?>">
          <img class="listprod_img" alt="<?=$item['title_vn'];?>" src="<?=BASE_URL."data/images/".$item['images'];?>" title="<?=$item['title_vn'];?>">
     </a></div>
     <div class="phanhoi_mota"><?=$item['description_'.lang]?></div>
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
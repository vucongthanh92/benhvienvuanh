<div class="listpro_content">
   <div class="list_prod">

     <div id="list_title"><a href="<?=BASE_URL?>"><?=MN_HOME?></a><img class="arrow_icon" src="public/template/images/arrow.gif" />
          <a href="<?=BASE_URL."bang-gia.html";?>"><?=MN_BANGGIA?></a>
     </div>
     
   	 <?php
		if(!empty($data['info'])){
			while($item = mysql_fetch_assoc($data['info'])){
				$i++;
	 ?>
     <div class="span3  product-item">
        <div class="title"><h2><a title="<?=$item['title_'.lang] ?>" href="<?=BASE_URL."bang-gia/".$item['alias'].".html"?>">
             <?=$item['title_'.lang] ?></a>
        </h2></div>
        <div class="thumb"><a href="<?=BASE_URL."bang-gia/".$item['alias'].".html"?>">
        <img class="listprod_img" alt="<?=$item['title_'.lang];?>" src="<?=BASE_URL."data/Baogia/".$item['images'];?>" title="<?=$item['title_'.lang];?>">
        </a></div>
        <div class="prod_mota"><?=$item['description_'.lang]?></div>
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
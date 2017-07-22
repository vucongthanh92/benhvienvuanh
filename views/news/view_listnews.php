<div class="index_middle">
<div class="content">

	<div class="listnews">    
         
         <div id="list_title"><a href="<?=BASE_URL?>"><?=MN_HOME?></a><img class="arrow_icon" src="<?=BASE_URL."public/template/images/arrow.gif"?>" />
             <a href="<?=BASE_URL."tin-tuc/danh-muc/".$data['info_cat']['alias'].".html";?>"><?=$data['info_cat']['title_'.lang];?></a>
         </div>
         
         <div class="listnews_content">
		 <?php
            if(!empty($data['info'])){
              foreach($data['info'] as $k=>$item){
         ?>
            <div class="news">
            <h3><a href="<?=BASE_URL."tin-tuc/chi-tiet/".$item['alias'].".html";?>" title="<?=stripslashes($item['title_'.lang])?>">
			    <?=($item['title_'.lang])?></a></h3>
            <div class="images"><a href="<?=BASE_URL."tin-tuc/chi-tiet/".$item['alias'].".html";?>" title="<?=$item['title_'.lang]?>">
			    <?php
                if($item['images']!=""){
                   if(file_exists(PATH_IMG_NEWS.$item['images'])){
                ?>
                <img src="<?=BASE_URL.PATH_IMG_NEWS.$item['images']?>" class="img_left" alt="<?php echo $item['title_'.lang]?>">
                <?php }
                    else {echo '<img src="'.BASE_URL.USER_PATH_IMG.'no_image.jpg" border="0" class="img_left"  >';}
                    } 
					else {echo '<img src="'.USER_PATH_IMG.'no_image.jpg" border="0" class="img_left"  >';} 
			    ?>
                </a>
            </div>
            <h2 class="date_news"><?=NGAYDANG?>: <?=date("d/m/Y",strtotime($item['date']));?></h2>
                <p><?=stripslashes($item['description_'.lang]);?></p>
                <div class="xemtep"><a href="<?=BASE_URL."tin-tuc/chi-tiet/".$item['alias'].".html";?>"><?=XEMTHEM?></a></div>
                <div class="clear"></div> 
                </div>
        <?php }
        }else { echo "updating...";}
        ?>
        <div style="clear:both"></div>
        <?php
        //xuat phan trang
        if($data['page'] != "")
            echo "<div class = 'paging'>". $data['page']. "</div>";
        ?>
        
        </div>
        <div style="clear:both"></div>
    </div>
    <!----------------------------------->
    
    <?php loadview('pagefixed/left',$left)?>
    <div style="clear:both"></div>
    
</div>

<div style="clear:both"></div>
</div>
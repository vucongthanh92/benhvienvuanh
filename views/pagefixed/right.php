<!-- ảnh công ty -->

<script src="<?=BASE_URL?>public/owl_carousel/owl-carousel/owl.carousel.js"></script>

<div class="doitac_label">
     <a href="<?=BASE_URL."tin-tuc/danh-muc/co-so-vat-chat.html";?>"><span><?=TAISAOKHACHHANGCHON?></span></a>
     <hr class="doitac_label_hr" />
</div>

<div id="owl-demo2">
	<?php
	    $sql="select * from mn_flash where location='3' and ticlock='0' order by sort asc, Id desc";
		$ds=mysql_query($sql) or die(mysql_error());
		while($item=mysql_fetch_assoc($ds)) {
	?>            
    <div class="item">
    <a href="<?=$item['link']?>">
         <img class="prodbox_anh" src="<?=BASE_URL."data/Flash/".$item['file_vn'];?>" />
         <div class="prodbox_title"><?=$item['title_'.lang]?></div>
    </a>
    </div>
    <?php } ?>
</div>
<div class="customNavigation2">
     <a class="btn prev2"></a>
     <a class="btn next2"></a>
</div>
<div style="clear:both"></div>

<script>
    $(document).ready(function() {
		
		var owl2 = $("#owl-demo2");
        owl2.owlCarousel({
           autoPlay: 3000, //Set AutoPlay to 3 seconds
           items : 4,
           itemsDesktop : [1199,3],
           itemsDesktopSmall : [950,2]
        });
		
		// Custom Navigation Events
		$(".next2").click(function(){
		  owl2.trigger('owl.next');
		})
		$(".prev2").click(function(){
		  owl2.trigger('owl.prev');
		})
		
    });
</script>
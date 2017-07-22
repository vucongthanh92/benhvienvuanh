<div class="index_middle">
<div class="content">
<!----------------------------------->
	<div class="listnews">
         <div id="list_title"><a href="<?=BASE_URL?>"><?=MN_HOME?></a><img class="arrow_icon" src="<?=BASE_URL."public/template/images/arrow.gif"?>" />
             <a href="<?=BASE_URL."phan-hoi.html";?>"><?=PHANHOIKHACHHANG?></a>
         </div>
         
        <div class="detailnews_content">
        	<h1 class="title_item1"><?=$data['prod']["title_".lang]?></h1>
        		<?=stripcslashes($data['prod']['content_'.lang]) ?>       
        <div class="space_5"></div>
        
        <div id="tcl">
             <div id="tcl_title"><?=PHANHOIKHAC?></div>
             <?php
                 if(!empty($data['prod_cl'])){
                    while($item2=mysql_fetch_assoc($data['prod_cl'])){
             ?>
                 <div class="tcl_row"><a href="<?=BASE_URL."phan-hoi/".$item2['Id']."-".strtoseo($item2['title_vn']).".html";?>">
				      <?=$item2['title_'.lang]?>
                 </a></div>
             <?php }} ?>
        </div>
        </div>
    </div>
<!----------------------------------->
    
    <?php loadview('pagefixed/left',$left)?>
    <div style="clear:both"></div>
    
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
<div class="index_middle">
<div class="content">
<!----------------------------------->
	<div class="listnews">
         <div id="list_title"><a href="<?=BASE_URL?>">Trang Chủ</a><img class="arrow_icon" src="<?=BASE_URL."public/template/images/arrow.gif"?>" />
             <a href="<?=BASE_URL.strtoseo($data["title_vn"]).".html";?>"><?=$data["title_vn"] ?></a>
         </div>
         
         <div class="detailnews_content">
        	<h1 class="title_item1"><?=$data["title_vn"];?></h1>
        		<?=stripcslashes($data['content_vn']) ?>       
         <div class="space_5"></div>    
         </div>
    </div>
<!----------------------------------->
    
    <?php loadview('pagefixed/left',$left)?>
    <div style="clear:both"></div>
    
</div>
</div>

<div id="cty_img"><?php loadview('pagefixed/right',$right); ?></div>
<div style="clear:both"></div>
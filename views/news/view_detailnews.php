<div class="index_middle">
<div class="content">
<!----------------------------------->
	<div class="listnews">
         <div id="list_title"><a href="<?=BASE_URL?>"><?=MN_HOME?></a><img class="arrow_icon" src="<?=BASE_URL."public/template/images/arrow.gif"?>" />
             <a href="<?=BASE_URL."tin-tuc/danh-muc/".$data['cat']['alias'].".html";?>"><?=$data['cat']['title_'.lang];?></a>
         </div>
         
        <div class="detailnews_content">
            <!--tiêu đề bài viết-->
        	<h1 class="title_item1"><?=$data['news']["title_".lang] ?></h1>
            <!--nội dung bài viết-->
            <?=stripcslashes($data['news']['content_'.lang]) ?>
            <!--ghi chú bài viết-->
            <?php if($data['news']['note_'.lang]!="") { ?>
                  <div class="detail_note"><?=$data['news']['note_'.lang]?></div>
            <?php } ?>      
            <div class="space_5"></div>
        
        <div id="tcl">
             <div id="tcl_title"><?=BAIVIETKHAC?></div>
             <?php
                 if(!empty($data['tincungloai'])){
                    while($item2=mysql_fetch_assoc($data['tincungloai'])){
             ?>
                 <div class="tcl_row"><a href="<?=BASE_URL."tin-tuc/chi-tiet/".$item2['alias'].".html" ?>">
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
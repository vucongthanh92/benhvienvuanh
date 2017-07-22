<div class="index_middle">
<div class="content">
<!----------------------------------->
	<div class="listnews">
         <div id="list_title"><a href="<?=BASE_URL?>">Trang Chủ</a><img class="arrow_icon" src="<?=BASE_URL."public/template/images/arrow.gif"?>" />
             <a href="<?=BASE_URL."hoi-dap.html";?>">Chủ Đề Hỏi Đáp</a>
         </div>
         
         <div class="detailnews_content"> 
         <form action="<?=BASE_URL."hoi-dap/tim-kiem.html"?>" method="post" enctype="multipart/form-data">
         <div class="hoidap_search">
              <input type="text" name="hoidap_tukhoa" id="hoidap_tukhoa" placeholder="tìm chủ đề quan tâm" />
              <input type="submit" name="hoidap_submit" id="hoidap_submit" value="Tìm" />
              <input type="button" name="dat_cau_hoi" id="dat_cau_hoi" onclick="location.href='<?=BASE_URL."goi-cau-hoi.html"?>'" value="Đặt Câu Hỏi" />
              
         </div>
         <script>
              $(document).ready(function(e) {
                  $("#hoidap_submit").click(function()
                  {
                      if(($("#hoidap_tukhoa").val()=="")||($("#hoidap_tukhoa").val()=="tìm chủ đề quan tâm"))
                      {
                          alert('Bạn chưa nhập chủ đề cần tìm');
                          return false;
                      }
                  })
              });
         </script>
         </form>
        
         <h1 class="title_item1"><?=$data['detail']["title_vn"] ?></h1>
        	 <?=stripcslashes($data['detail']['content_vn']) ?>       
         <div class="space_5"></div>
        
         <div id="tcl">
             <div id="tcl_title">Câu Hỏi Khác</div>
             <?php
                 if(!empty($data['other'])){
                    while($item2=mysql_fetch_assoc($data['other'])){
             ?>
                 <div class="tcl_row"><a href="<?=BASE_URL."hoi-dap/".$item2['Id']."-".strtoseo($item2['title_vn']).".html" ?>">
				      <?=$item2['title_vn']?>
                 </a></div>
             <?php }} ?>
         </div>
         </div>
        
         <!----------phần comment------------->  
         <?php loadview('pagefixed/partners',$partners); ?>
         </div><!----------------------->  
      
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
<div class="index_middle">
<div class="content">
   <div class="listnews">         
       <div id="list_title"><a href="<?=BASE_URL?>"><?=MN_HOME?></a>
             <img class="arrow_icon" src="<?=BASE_URL."public/template/images/arrow.gif"?>" />
             <a href="<?=BASE_URL."tu-van-truc-tuyen.html";?>"><?=TUVANTRUCTUYEN?></a>
             <img class="arrow_icon" src="<?=BASE_URL."public/template/images/arrow.gif"?>"/>
             <a href="<?=BASE_URL."tu-van-truc-tuyen/cau-hoi-khach-hang.html";?>"><?=CAUHOIKHACHHANG?></a>
       </div>
         
       <div class="hoidap_content">
       <form action="<?=BASE_URL."tu-van-truc-tuyen/tim-kiem.html"?>" method="post" enctype="multipart/form-data">
       <div class="hoidap_search">
            <input type="text" name="hoidap_tukhoa" id="hoidap_tukhoa" placeholder="<?=TIMKIEM?>" />
            <input type="submit" name="hoidap_submit" id="hoidap_submit" value="<?=SEND?>" />
       </div>
       <script>
			$(document).ready(function(e) {
                $("#hoidap_submit").click(function()
				{
					if(($("#hoidap_tukhoa").val()=="")||($("#hoidap_tukhoa").val()=="<?=TIMKIEM?>"))
					{
						alert('<?=TIMKIEM_INFO?>');
						return false;
					}
				})
            });
	   </script>
       </form>
       
	   <?php
          if(!empty($data['info'])){
            while($item = mysql_fetch_assoc($data['info'])) {
       ?>
          <div class="hoidap_main">
             <div class="subhoidap_box">
                 <div class="subhoidap_title"><?=$item['title_vn'];?></div>
                 <div class="subhoidap_info"><?=$item['hoten'];?> &nbsp; <?=$item2['date'];?></div>
                 <div class="subhoidap_mota"><?=$item['description_vn'];?></div>
                 <div class="subhoidap_noidung"><?=$item['content_vn'];?></div>
                 <div style="clear:both;"></div>
             </div>
          </div>
       <?php }} else { echo "updating...";} ?> 
       </div>
       <div style="clear:both"></div>
       
       <div class="tuvan_goicauhoi">
       <span><?=GOICAUHOICHOCHUNGTOI?></span>
       <a href="<?=BASE_URL."tu-van-truc-tuyen/goi-cau-hoi.html"?>"><div class="tuvan_goicauhoi_submit"><?=GOICHOCHUNGTOI?></div></a>
       </div>
       
    </div>
    <!----------------------------------->
    
    <?php loadview('pagefixed/left',$left)?>
    <div style="clear:both"></div>
    
</div>

<div style="clear:both"></div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$(".subhoidap_box").click(
		function()
		{
			$(this).children(".subhoidap_noidung").stop(true,true).slideToggle('normal');
		},
		function()
		{
			$(this).children(".subhoidap_noidung").stop(true,true).slideToggle('normal');
		})
	});
</script>
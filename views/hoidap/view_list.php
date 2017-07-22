<div class="index_middle">
<div class="content">
   <div class="listnews">         
       <div id="list_title"><a href="<?=BASE_URL?>">Trang Chủ</a><img class="arrow_icon" src="<?=BASE_URL."public/template/images/arrow.gif"?>" />
             <a href="<?=BASE_URL."tu-van-truc-tuyen.html";?>">Tư Vấn Trực Tuyến</a>
       </div>
         
       <div class="hoidap_content">
       
       <form action="<?=BASE_URL."tu-van-truc-tuyen/tim-kiem.html"?>" method="post" enctype="multipart/form-data">
       <div class="hoidap_search">
            <input type="text" name="hoidap_tukhoa" id="hoidap_tukhoa" placeholder="tìm chủ đề quan tâm" />
            <input type="submit" name="hoidap_submit" id="hoidap_submit" value="Tìm" />
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
       
	   <?php
          if(!empty($data['info'])){
            while($item = mysql_fetch_assoc($data['info'])) {
       ?>
          <div class="hoidap_main">
              <div class="hoidap_title"><?=$item['title_'.lang];?></div>
              <?php
			      $idcat=$item['id'];
				  $sql="select * from goods where idcat='$idcat' order by Id desc";
				  $ds=mysql_query($sql) or die(mysql_error());
				  while($item2=mysql_fetch_assoc($ds)) {
			  ?>
                  <div class="subhoidap_box">
                       <div class="subhoidap_title"><?=$item2['title_vn'];?></div>
                       <div class="subhoidap_info"><?=$item2['hoten'];?> &nbsp; <?=$item2['date'];?></div>
                       <div class="subhoidap_mota"><?=$item2['description_vn'];?></div>
                       <div class="subhoidap_noidung"><?=$item2['content_vn'];?></div>
                       <div style="clear:both;"></div>
                  </div>
              <?php } ?>
          </div>
       <?php }} else { echo "updating...";} ?> 
       </div>
       <div style="clear:both"></div>
       
       <div class="tuvan_goicauhoi">
       <span>Nếu bạn có câu hỏi khác, vui lòng gửi câu hỏi cho chúng tôi hoặc liên hệ Bộ phận Chăm sóc khách hàng.</span>
       <a href="<?=BASE_URL."tu-van-truc-tuyen/goi-cau-hoi.html"?>"><div class="tuvan_goicauhoi_submit">Gởi Câu Hỏi Cho Chúng Tôi</div></a>
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
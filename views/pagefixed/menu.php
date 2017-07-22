<?php 
$mcatelog = new Models_MCatelog();
$mproduct = new Models_MProduct(); 
$mnews = new Models_MNews;
if($_GET["mod"]=="tin-tuc")
{
	$idcatmenu = $_GET["id"];
	$danhmuc=0; 
}

?>
<div style="clear:both"></div>

<!--menu mobi-->
<div id="menu_mobi">
     <img id="menu_mobi_img" src="<?=BASE_URL."public/template/images/img_left_panel.png";?>" />
     <div id="search_top">
        <div id="search_box">
        <form method="post" action="">
              <input type="text" name="keyword" id="keyword" value="bạn tìm gì..." onclick="if(this.value=='bạn tìm gì...') this.value=''" 
                     onblur="if(this.value=='') this.value='bạn tìm gì...'" />
              <input type="submit" name="btn_search" id="btn_search" value="TÌM" />
        </form>     
        </div>
        <div style="clear:both"></div>
     </div>
     <div style="clear:both"></div>
</div>
<div id="content_menu_mobi"><?php loadview('pagefixed/menu_mobi',$menu_mobi); ?></div>
<script>
	$(document).ready(function(e) {
		 $("#menu_mobi_img").click(function()
		 {
			$accordion = $("#content_menu_mobi");
		    // Kiểm tra nếu đang ẩn thì sẽ hiện và ẩn các phần tử khác
		    // Nếu đang hiện thì click vào h3 sẽ ẩn
		    if ($accordion.is(':hidden') === true) 
			{
		       $("#accordiondemo3 .accordion").slideUp();
		       $accordion.slideDown();
		    } 
			else 
			{
			   $accordion.slideUp();
		    }
		 })
	});
</script>
<!------------->


<div class="wap_menu">
<div id="menu">
<div id="smoothmenu1" class="ddsmoothmenu">
     <ul>
        <!--menu desktop-->
        <li><a href="<?=BASE_URL?>"><?=MN_HOME?></a></li>
        
        <li><a href="<?=BASE_URL?>tin-tuc/danh-muc/gioi-thieu.html"><?=MN_GIOITHIEU?></a>
        <ul>
           <?php
		       $idcat=1;
			   $sql="select * from mn_news where idcat='$idcat' and ticlock='0' order by sort asc, Id desc";
			   $ds=mysql_query($sql) or die(mysql_error());
			   while($item=mysql_fetch_assoc($ds)) {
		   ?>
               <li><a href="<?=BASE_URL."tin-tuc/chi-tiet/".$item['alias'].".html"?>"><?=$item['title_'.lang]?></a></li>
           <?php } ?>
        </ul></li>
        
        <li><a href="<?=BASE_URL?>chuyen-khoa.html"><?=MN_CHUYENKHOA?></a>
        <ul>
           <?php
			   $sql2="select * from team where ticlock='0' order by sort asc, Id desc";
			   $ds2=mysql_query($sql2) or die(mysql_error());
			   while($item2=mysql_fetch_assoc($ds2)) {
		   ?>
               <li><a href="<?=BASE_URL."chuyen-khoa/".$item2['alias'].".html"?>"><?=$item2['title_'.lang]?></a></li>
           <?php } ?>
        </ul></li>
        
        <li><a href="<?=BASE_URL?>bang-gia.html"><?=MN_BANGGIA?></a>
        <ul>
           <?php
			   $sql3="select * from feedback where ticlock='0' order by sort asc, Id desc";
			   $ds3=mysql_query($sql3) or die(mysql_error());
			   while($item3 = mysql_fetch_assoc($ds3)) {
		   ?>
               <li><a href="<?=BASE_URL."bang-gia/".$item3['alias'].".html"?>"><?=$item3['title_'.lang]?></a></li>
           <?php } ?>
        </ul></li>
        
        <li><a href="<?=BASE_URL."tin-tuc/danh-muc/danh-cho-khach-hang.html"?>"><?=MN_DANHCHOKHACHHANG?></a>
        <ul>
           <li><a href="<?=BASE_URL."tin-tuc/chi-tiet/gio-lam-viec.html"?>"><?=MN_GIOLAMVIEC?></a></li>
           <li><a href="<?=BASE_URL."tin-tuc/chi-tiet/dich-vu-cham-soc-khach-hang.html"?>"><?=MN_CHAMSOCKHACHHANG?></a></li>
           <li><a href="<?=BASE_URL."tin-tuc/chi-tiet/dich-vu-dieu-tri-noi-tru.html"?>"><?=MN_DIEUTRINOITRU?></a></li>
           <li><a href="<?=BASE_URL."tin-tuc/chi-tiet/dich-vu-cap-cuu-24h.html"?>"><?=MN_DICHVUCAPCUU?></a></li>
           <li><a href="<?=BASE_URL."tin-tuc/chi-tiet/khach-hang-doanh-nghiep.html"?>"><?=MN_KHACHHANGDOANHNGHIEP?></a></li>
           
           <li><a onclick="return false" href="<?=BASE_URL."tin-tuc/chi-tiet/bao-hiem.html"?>"><?=MN_BAOHIEM?></a>
           <ul class="sub_menu">
           <?php
			   $sql6="select * from mn_news where ticlock='0' and idcat='22' order by sort asc, Id desc";
			   $ds6=mysql_query($sql6) or die(mysql_error());
			   while($item6 = mysql_fetch_assoc($ds6)) {
		   ?>
               <li><a href="<?=BASE_URL."tin-tuc/chi-tiet/".$item6['alias'].".html"?>"><?=$item6['title_'.lang]?></a></li>
           <?php } ?>
           </ul></li>
           
           <li><a href="<?=BASE_URL."dat-lich-kham.html";?>"><?=MN_DATLICHKHAM?></a></li>
           <li><a href="<?=BASE_URL."bac-sy/tim-kiem.html"?>"><?=MN_TIMBACSY?></a></li>
           <li><a href="<?=BASE_URL."phan-hoi.html"?>"><?=MN_PHANHOIKHACHHANG?></a></li>
           <li><a href="<?=BASE_URL."the-hoi-vien.html"?>"><?=MN_THEHOIVIEN?></a></li>
        </ul></li>
        
        <li><a href="<?=BASE_URL?>bac-sy.html"><?=MN_CHUYENGIA?></a>
        <ul>
           <li><a href="<?=BASE_URL."gioi-thieu-doi-ngu-chuyen-gia.html"?>"><?=MN_GTDOINGUCHUYENGIA?></a></li>
           <?php
			   $sql4="select * from team where ticlock='0' order by sort asc, Id desc";
			   $ds4=mysql_query($sql4) or die(mysql_error());
			   while($item4 = mysql_fetch_assoc($ds4)) {
		   ?>
               <li><a href="<?=BASE_URL."bac-sy/".$item4['alias'].".htm"?>"><?=$item4['title_'.lang]?></a></li>
           <?php } ?>
        </ul></li>
        
        <li><a href="<?=BASE_URL?>tin-tuc/danh-muc/co-so-vat-chat.html"><?=MN_COSOVATCHAT?></a>
        <ul>
           <?php
			   $sql5="select * from mn_news where idcat='3' and ticlock='0' order by sort asc, Id desc";
			   $ds5=mysql_query($sql5) or die(mysql_error());
			   while($item5=mysql_fetch_assoc($ds5)) {
		   ?>
               <li><a href="<?=BASE_URL."tin-tuc/chi-tiet/".$item5['alias'].".html"?>"><?=$item5['title_'.lang]?></a></li>
           <?php } ?>
        </ul></li>
        
        <li><a href="<?=BASE_URL?>tin-tuc/danh-muc/tin-tuc.html"><?=MN_NEWS?></a></li>
     </ul>

     <div id="search_top">
        <div id="search_box">
        <form method="post" action="">
              <input type="text" name="keyword" id="keyword" value="<?=BANTIMGI?>" onclick="if(this.value=='<?=BANTIMGI?>') this.value=''" 
                     onblur="if(this.value=='') this.value='<?=BANTIMGI?>'" />
              <input type="submit" name="btn_search" id="btn_search" value="TÌM" />
        </form>     
        </div>
        <div style="clear:both"></div>
     </div>
</div>
</div>
</div>


<script>
    $(document).ready(function(e) {
		 var i=browserName();
		 if(i=='Chrome')
		 {
			 $(".menu_ds a").css("padding-top","9px");
		 }
		 if(i=='MSIE')
		 {
			 $(".menu_ds a").css("padding-top","9px");
		 }
		 if(i=='UNKNOWN')
		 {
			 $(".menu_ds a").css("padding-top","8px");
			 $(".menu_ds a").css("padding-bottom","7px");
		 }
    });
	
	function browserName(){
		 var Browser = navigator.userAgent;
		 if (Browser.indexOf('MSIE') >= 0){
			 Browser = 'MSIE';
		 }
		 else if (Browser.indexOf('Firefox') >= 0){
			 Browser = 'Firefox';
		 }
		 else if (Browser.indexOf('Chrome') >= 0){
			 Browser = 'Chrome';
		 }
		 else if (Browser.indexOf('Safari') >= 0){
			 Browser = 'Safari';
		 }
		 else if (Browser.indexOf('Opera') >= 0){
			 Browser = 'Opera';
		 }
		 else{
			 Browser = 'UNKNOWN';
		 }
	 return Browser;
	}
</script>
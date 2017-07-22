<script>
	$(document).ready(function(e) {
	   // Ẩn tất cả .accordion trừ accordion đầu tiên
	   $("#accordiondemo3 .accordion").hide();
	   // Áp dụng sự kiện click vào thẻ h3
	   $("#accordiondemo3 h3").click(function(){
	   // chọn .accordion (do phần tử đi đi ngay sau phần tử h3 nên ta dùng .next())
	   $accordion = $(this).next();
	   // Kiểm tra nếu đang ẩn thì sẽ hiện và ẩn các phần tử khác
	   // Nếu đang hiện thì click vào h3 sẽ ẩn
	   if ($accordion.is(':hidden') === true) {
	   $("#accordiondemo3 .accordion").slideUp();
	   $accordion.slideDown();
		} else {
		$accordion.slideUp();
	  }
	});
	});
</script>

<div id="accordiondemo2">
     <h3 class="according_parent"><a href="<?=BASE_URL;?>"><?=MN_HOME?></a></h3>
     <h3 class="according_parent"><a href="<?=BASE_URL."tin-tuc/danh-muc/gioi-thieu.html";?>"><?=MN_GIOITHIEU?></a></h3>
     <h3 class="according_parent"><a href="<?=BASE_URL."chuyen-khoa.html";?>"><?=MN_CHUYENKHOA?></a></h3>
     <h3 class="according_parent"><a href="<?=BASE_URL."bang-gia.html";?>"><?=MN_BANGGIA?></a></h3>
     <h3 class="according_parent"><a href="<?=BASE_URL."bac-sy.html";?>"><?=MN_CHUYENGIA?></a></h3>
     <h3 class="according_parent"><a href="<?=BASE_URL."tin-tuc/danh-muc/co-so-vat-chat.html";?>"><?=MN_COSOVATCHAT?></a></h3>
     <h3 class="according_parent"><a href="<?=BASE_URL."tin-tuc/danh-muc/tin-tuc.html";?>"><?=MN_NEWS?></a></h3>
</div>

<div id="accordiondemo3">
     <!--menu danh cho khách hàng-->
     <h3 class="according_parent">
         <a onClick="return false" href="<?=BASE_URL."tin-tuc/danh-muc/danh-cho-khach-hang.html"?>"><?=MN_DANHCHOKHACHHANG?></a>
     </h3>
     <div class="accordion" style="display:none">
         <p class="according_child"><a href="<?=BASE_URL."tin-tuc/chi-tiet/gio-lam-viec.html"?>"><?=MN_GIOLAMVIEC?></a></p>
         <p class="according_child"><a href="<?=BASE_URL."tin-tuc/chi-tiet/dich-vu-cham-soc-khach-hang.html"?>"><?=MN_CHAMSOCKHACHHANG?></a></p>
         <p class="according_child"><a href="<?=BASE_URL."tin-tuc/chi-tiet/dich-vu-dieu-tri-noi-tru.html"?>"><?=MN_DIEUTRINOITRU?></a></p>
         <p class="according_child"><a href="<?=BASE_URL."tin-tuc/chi-tiet/dich-vu-cap-cuu-24h.html"?>"><?=MN_DICHVUCAPCUU?></a></p>
         <p class="according_child"><a href="<?=BASE_URL."tin-tuc/chi-tiet/khach-hang-doanh-nghiep.html"?>"><?=MN_KHACHHANGDOANHNGHIEP?></a></p>
         <p class="according_child"><a href="<?=BASE_URL."tin-tuc/chi-tiet/bao-hiem.html"?>"><?=MN_BAOHIEM?></a></p>
         <p class="according_child"><a href="<?=BASE_URL."dat-lich-kham.html";?>"><?=MN_DATLICHKHAM?></a></p>
         <p class="according_child"><a href="<?=BASE_URL."bac-sy/tim-kiem.html"?>"><?=MN_TIMBACSY?></a></p>
         <p class="according_child"><a href="<?=BASE_URL."phan-hoi.html"?>"><?=MN_PHANHOIKHACHHANG?></a></p>
         <p class="according_child"><a href="<?=BASE_URL."the-hoi-vien.html"?>"><?=MN_THEHOIVIEN?></a></p>
     </div>
</div>

<div style="clear:both;"></div>
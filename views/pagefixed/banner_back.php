<div class="index_bg">
            <div class="index_menu_top">
    <div class="menu_top_L">
        <div class="menu_top_module">
            
            <span class="module_text">Nhận ưu đãi</span><span class="module_arrow"></span>
            <div class="search_category_hover">
                <div class="newsletter">
                    <div class="hover_top"></div>
                    <p>Nhận ưu đãi hàng ngày </p>
                    <input type="text" class="newsletter_email" placeholder="Nhập email của bạn" value="" id="txtSubscribeEmail">

                    
                    <input type="submit" onclick="subscribeEmail(0)" value="" class="btn_dangkymail_men">
                    <input type="submit" onclick="subscribeEmail(1);" value="" class="btn_dangkymail_women">
                    <br class="clean">
                    <div id="divSubscribeErrorPanel"></div>
                </div>
            </div>
        </div>
        <div class="line"></div>

        <div class="menu_top_module">
            
            <span class="module_text">Hỗ trợ</span><span class="module_arrow"></span>
            <div class="search_category_hover">
                <div class="hotline">
                    <div class="hover_top"></div>
                    <ul class="list_hotline">
                        <li><span></span><a href="http://www.cungmua.com/giao-nhan-hang-khuyen-mai.html">Giao nhận hàng</a></li>
                        <li><span></span><a href="http://www.cungmua.com/tra-hang-khuyen-mai-hoan-tien.html">Trả hàng - Hoàn tiền</a></li>
                        
                        <li><span></span><a href="http://www.cungmua.com/su-dung-phieu-khuyen-mai.html">Sử dụng Phiếu Cùng Mua</a></li>
                        <li class="email">Hotro@cungmua.com</li>
                        <li class="phone end">
                            <p class="bold">19006637</p>
                            <p class="italic">(8h - 21h kể cả Thứ 7 - Chủ Nhật)</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
 
 

        
    </div>
    <div class="menu_top_R">
        <div class="menu_top_module">
                <span class="module_text"><a href="<?=BASE_URL ?>dang-nhap.html">Đăng nhập</a></span>

        </div>
        <div class="line"></div>
        <div class="menu_top_module">
            
            <span id="topCart" class="module_text"><a href="gio-hang.html">Giỏ hàng <strong>(0)</strong></a></span><span class="module_arrow"></span>
            <div class="search_category_hover2 opt1">
                <div class="shopcart">
                <div class="hover_top"></div>
                    <p class="hover_TT">Giỏ hàng của bạn</p>
                     <p class="no_item">
                    Hiện chưa có sản phẩm nào
                    <br>
                    trong giỏ hàng của bạn
                </p>

                </div>
            </div>
        </div>
      
       
    </div>
    <br class="clean">
</div>

            

<div class="index_header">
    <div class="header_L">
           <?php 
		if($data["flast"]['logo']['style'] == 1){
		?>
		<embed wmode="transparent" width="349" height="200" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" src="<?php echo PATH_IMG_FLASH.$data["flast"]['logo']['file_vn'];?>" play="true" loop="true" menu="true"></embed>
		<?php }else{ ?>
		<a href="<?=BASE_URL ?>" > <img src="<?=BASE_URL.PATH_IMG_FLASH.$data["flast"]['logo']['file_vn']?>"  /></a>
		<?php }?>
    </div>
    <div class="header_Ce">
        <div class="city">
            <div class="city_current">
                <span class="icon_city"></span><span class="name_city">
                <?php
					$mcity = new Models_MCity;
					$city = $mcity ->getOneCity($_SESSION['tinh']);
				?>
                <?=$city['name'] ?>
                </span><span class="module_arrow"></span>
            </div>
            <div class="city_hover">
                <ul class="list_city">
                    <?php
					if(!empty($data['tinh'])){
						foreach($data['tinh'] as $item){
					?>
                        <li>
                            <span></span><a style="width:auto" href="<?=BASE_URL."city/".$item['alias'] ?>.html"> <?=$item['name'] ?></a>
                        </li>
                      <?php }} ?>                   
                </ul>
            </div>
        </div>
    </div>
    <div class="header_R">
        <ul class="header_R">
            <li><a class="btn_expired" href="/sap-ngung-ban.html"></a></li>
            <li><a class="btn_new" href="/khuyen-mai-moi.html"></a></li>
        </ul>
    </div>
</div>
<div id="heartContainer">
    <img width="27" height="24" src="/Content/Images/heart_big1.png" style="display: none;" id="heartfly" class="heart">
</div>

</div>

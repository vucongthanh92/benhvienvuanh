<div id="header">
<div id="header_index">
     
     <div id="logo">
          <a href="<?=BASE_URL;?>"> <img id="logo_index" src="<?=BASE_URL.PATH_IMG_FLASH.$data["flast"]['logo']['file_vn']?>"  /></a>
     </div>
     
     <div class="top_menu">
          <span><a href="<?=BASE_URL."lien-he.html";?>"><?=MN_CONTACT?></a></span> | 
          <span><a href="<?=BASE_URL."tu-van-truc-tuyen/goi-cau-hoi.html";?>"><?=HOIDAP?></a></span> | 
          <form class="form_lang" name="frmLang" action="" method="post" >
              <?php if(lang == 'en') { ?>
                    <div onClick="javascript:setLang('vn')" style="cursor:pointer;">
                    <img src="<?=BASE_URL.USER_PATH_IMG ?>vn.jpg"  /> <div><?=TIENGVIET;?></div> 
                    </div>
              <?php } else { ?>
                    <div onClick="javascript:setLang('en')" style="cursor:pointer; text-align:left">
                    <img src="<?=BASE_URL.USER_PATH_IMG ?>en.jpg" /><div>English</div>
                    </div>
              <?php } ?>
              <input name="lang" type="hidden" value="vi" />
          </form>
     </div>
     
     <div class="top_mobile">
          <form class="form_lang" name="frmLang_mobile" action="" method="post" >
              <?php if(lang == 'en') { ?>
                    <div onClick="javascript:setLang('vn')" style="cursor:pointer;">
                    <img src="<?=BASE_URL.USER_PATH_IMG ?>vn.jpg"  /> <div><?=TIENGVIET;?></div> 
                    </div>
              <?php } else { ?>
                    <div onClick="javascript:setLang('en')" style="cursor:pointer; text-align:left">
                    <img src="<?=BASE_URL.USER_PATH_IMG ?>en.jpg" /><div>English</div>
                    </div>
              <?php } ?>
              <input name="lang" type="hidden" value="vi" />
          </form>
          <div class="top_capcuu"><a href="<?="tel:".str_replace(" ", "",$_SESSION['phone_capcuu']);?>"><?=CAPCUU;?> 24/7 (08) 3989 4959</a></div>
          <div style="clear:both"></div>
     </div>
     
<div style="clear:both"></div>
</div>
</div>

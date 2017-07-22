<script>
	function FloatTopDiv()
	{
		startLX = ((document.body.clientWidth -MainContentW)/2)-LeftBannerW-LeftAdjust , startLY = TopAdjust+80;
		startRX = ((document.body.clientWidth -MainContentW)/2)+MainContentW+RightAdjust , startRY = TopAdjust+80;
		var d = document;
		function ml(id)
		{
			var el=d.getElementById?d.getElementById(id):d.all?d.all[id]:d.layers[id];
			el.sP=function(x,y){this.style.left=x + 'px';this.style.top=y+65 + 'px';};
			el.x = startRX;
			el.y = startRY;
			return el;
		}
		function m2(id)
		{
			var e2=d.getElementById?d.getElementById(id):d.all?d.all[id]:d.layers[id];
			e2.sP=function(x,y){this.style.left=x + 'px';this.style.top=y+65 + 'px';};
			e2.x = startLX;
			e2.y = startLY;
			return e2;
		}
		window.stayTopLeft=function()
		{
			if (document.documentElement && document.documentElement.scrollTop)
				var pY =  document.documentElement.scrollTop;
			else if (document.body)
				var pY =  document.body.scrollTop;
			if (document.body.scrollTop > 30){startLY = 3;startRY = 3;} else {startLY = TopAdjust;startRY = TopAdjust;};
			ftlObj.y += (pY+startRY-ftlObj.y)/16;
			ftlObj.sP(ftlObj.x, ftlObj.y);
			ftlObj2.y += (pY+startLY-ftlObj2.y)/16;
			ftlObj2.sP(ftlObj2.x, ftlObj2.y);
			setTimeout("stayTopLeft()", 1);
		}
		ftlObj = ml("divAdRight");
		//stayTopLeft();
		ftlObj2 = m2("divAdLeft");
		stayTopLeft();
	}
	function ShowAdDiv()
	{
		var objAdDivRight = document.getElementById("divAdRight");
		var objAdDivLeft = document.getElementById("divAdLeft");       
		if (document.body.clientWidth < 1000)
		{
			objAdDivRight.style.display = "none";
			objAdDivLeft.style.display = "none";
		}
		else
		{
			objAdDivRight.style.display = "block";
			objAdDivLeft.style.display = "block";
			FloatTopDiv();
		}
	} 
</script>



<div class="footer">
	<div class="infooter">
    
    	 <div class="ft_left">
              <span><a href="<?=BASE_URL."hoi-dap.html";?>"><?=HOIDAP?></a></span> | 
              <span><a href="<?=BASE_URL."doi-tac.html";?>"><?=DOITAC?></a></span> | 
              <span><a href="<?=BASE_URL."chinh-sach-bao-mat.html";?>"><?=CHINHSACHBAOMAT?></a></span> | 
              <span><a href="<?=BASE_URL."cau-truc-site.html";?>"><?=CAUTRUCSITE?></a></span>
         </div>
         
         <div class="ftmobile_mxh">
              <div class="ftmobile_fb">
              <div class="fb-like" data-href="<?=BASE_URL?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
              </div>
              <div class="ftmobile_gplus"><g:plusone></g:plusone></div>
              <div style="clear:both"></div>
         </div>
         
         <div class="ftmobile_left">
              <div class="ftmobile_place">15-16 Phan Văn trị Phường 7 Quận Gò Vấp Tp HCM</div>
              <div class="ftmobile_phone">(08) 3989 4959 - (08) 3989 4959 (Cấp Cứu)</div>
         </div>
         
         <div class="ft_right">
              <div>Copyright @ 2016 Vu Anh International General Hospital</div>
              <div>All rights reserved</div>
         </div>
         
         <div style="clear:both"></div>
    </div>
</div>																																							

<?php
   $sql="select * from mn_flash where ticlock='0' and location='6'";
   $ds=mysql_query($sql) or die(mysql_error());
   $row=mysql_fetch_assoc($ds);
   
   $sql2="select * from mn_flash where ticlock='0' and location='7'";
   $ds2=mysql_query($sql2) or die(mysql_error());
   $row2=mysql_fetch_assoc($ds2);
?>

<?php if(!empty($row)) { ?>
<div id="divAdLeft" style="DISPLAY: none; POSITION: absolute; TOP: 0px">
<a href="<?=$row['link']?>"><img src="<?=BASE_URL.PATH_IMG_FLASH.$row['file_vn']?>"/></a>
</div>
<?php } ?>

<?php if(!empty($row2)) { ?>
<div id="divAdRight" style="DISPLAY: none; POSITION: absolute; TOP: 0px">
     <a href="<?=$row2['link']?>"><img src="<?=BASE_URL.PATH_IMG_FLASH.$row2['file_vn']?>" /></a>
</div>
<?php } ?>

<script>
    document.write("<script type='text/javascript' language='javascript'>MainContentW =1080 ;LeftBannerW = 125;RightBannerW = 140;LeftAdjust = 7;RightAdjust = 13;TopAdjust = 65;ShowAdDiv();window.onresize=ShowAdDiv;;<\/script>");
</script>

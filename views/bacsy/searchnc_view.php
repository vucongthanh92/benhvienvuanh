<div class="listpro_content">
<div class="list_prod">
     <!--danh sách tìm kiếm bác sỹ-->
     <div id="list_title"><a href="<?=BASE_URL?>"><?=MN_HOME?></a><img class="arrow_icon" src="<?=BASE_URL."public/template/images/arrow.gif"?>" />
          <a href="<?=BASE_URL."bang-gia.html";?>"><?=TIMBACSY?> </a>
     </div>
     
     <!--khung tìm kiếm bác sỹ-->
     <form action="" method="post" enctype="multipart/form-data">
     <div class="bacsy_search">
       <table>
          <tr>
              <td><?=HOTEN?>:<br />
                  <input type="text" name="hoten" id="bacsy_hoten" value="<?=$_SESSION['bacsy_hoten']?>" />
              </td>
              <td><?=MN_CHUYENKHOA?>:<br />
                  <select id="bacsy_chuyenkhoa" name="chuyenkhoa">
                      <option value="0">--<?=CHONKHOAPHUHOP?>--</option>
                      <?php
					     $sql="select * from team where ticlock='0' order by sort asc, Id desc";
						 $ds=mysql_query($sql) or die(mysql_error());
						 while($row=mysql_fetch_assoc($ds)) {
					  ?>
                         <option <?php if($_SESSION['bacsy_chuyenkhoa']==$row['Id']) echo "selected";?> value="<?=$row['Id']?>"><?=$row['title_'.lang]?>
                         </option>
                      <?php } ?>
                  </select>
              </td>
              <td><input type="submit" value="<?=TIMKIEM?>" name="tim_bacsy" id="basy_btn_search" /></td>
          </tr>
       </table>
     </div>
     </form>
     <!------------------------->
     
     <?php
		if(!empty($data['info'])){
			while($item = mysql_fetch_assoc($data['info'])){
	 ?>
     <div class="list_bacsy">
        <div class="title"><h2><a title="<?=$item['title_'.lang] ?>" href="<?=BASE_URL."bac-sy/".$item['alias'].".html"?>">
             <?=$item['hoten'];?></a>
        </h2></div>
        <div class="bacsy_thumb"><a href="<?=BASE_URL."bac-sy/".$item['alias'].".html"?>">
        <img class="list_bacsy_img" alt="<?=$item['hoten'];?>" src="<?=BASE_URL."data/Manufacturer/".$item['images'];?>" title="<?=$item['hoten'];?>">
        </a></div>
        <div class="list_bacsy_mota"><?=$item['chuyennganh_'.lang]?></div>
     </div>
     <?php }} ?>
    
     <?php
         if($data['page'] != "")
         echo "<div class = 'paging'>". $data['page']."</div>";
     ?>
     <!-------------------------->
</div>

<?php loadview('pagefixed/left',$left)?>

<div style="clear:both;"></div>
</div>
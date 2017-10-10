<div class="content-box-header">
  <h3>{$tieude}</h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
    <!--ma_loai, ten_loai, mo_ta, hinh-->
    <form method="post" enctype="multipart/form-data">
        <fieldset>
          
          <p>
            <label>Tên loại</label>
            <input class="text-input small-input" type="text" id="ten_loai" name="ten_loai" value="{$loai_mon_an->ten_loai}" />
          </p>
          <p>
            <label>Nội dung tóm tắt</label>
            <textarea class="text-input medium-input datepicker" type="text" id="mo_ta" name="mo_ta" rows="5" cols="50" />{$loai_mon_an->mo_ta}</textarea>
          </p>
          <p>
            <label>Hình tin</label>
            <img src="../public/images/hinh_loai_mon_an/{$loai_mon_an->hinh}" width="80px"  />
            <input type="file" name="hinh" />
		  </p>
          <p>
            <input class="button" type="submit" value="Cập nhật" name="btnCapnhat" onclick="" />
            <input class="button" type="button" value="Bỏ qua" onclick="window.location='loaimonan.php'" />
          </p>
        </fieldset>
        <div class="clear"></div>
        <!-- End .clear -->
        
      </form>
	   
  </div>
  
</div>

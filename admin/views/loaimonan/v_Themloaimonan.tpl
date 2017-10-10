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
            <input class="text-input small-input kiem_tra_rong" data-err="Tên loại không rỗng " type="text" id="ten_loai" name="ten_loai" />
          </p>
          <p>
            <label>Nội dung tóm tắt</label>
            <textarea class="text-input medium-input datepicker" type="text" id="mo_ta" name="mo_ta" /></textarea>
          </p>
          <p>
            <label>Hình tin</label>
            <input type="file" name="hinh" />
		  </p>
          <p>
            <input class="button" type="submit" value="Cập nhật" name="btnCapnhat" onclick="return Kiem_tra_Du_lieu_Rong()" />
            <input class="button" type="button" value="Bỏ qua" onclick="window.location='loaimonan.php'" />
          </p>
        </fieldset>
        <div class="clear"></div>
        <!-- End .clear -->
        
      </form>
	   
  </div>
  
</div>

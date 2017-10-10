<div class="content-box-header">
  <h3>{$tieude}</h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
    <form action="#" method="post" enctype="multipart/form-data">
        <fieldset>
          
          <p>
            <label>Tiêu đề tin</label>
            <input class="text-input small-input" type="text" id="tieu_de" name="tieu_de" value="{$tin_tuc->tieu_de}" />
          </p>
          <p>
            <label>Nội dung tóm tắt</label>
            <input class="text-input medium-input datepicker" type="text" id="tom_tat" name="tom_tat" value="{$tin_tuc->tom_tat}" />
          <p>
            <label>Nội dung chi tiết</label>
            <!--input class="text-input large-input" type="text" id="chi_tiet" name="chi_tiet" value="{$tin_tuc->chi_tiet}" /-->
            <textarea name="chi_tiet" id="chi_tiet"  class="ckeditor" >{$tin_tuc->chi_tiet}</textarea>
            
          </p>
          <p>
            <label>Hình tin</label>
            <input type="file" name="f_hinh" />
            {if $tin_tuc->hinh!=""}
            <img src="../public/images/tin_tuc/{$tin_tuc->hinh}" width="100px" />
            {/if}
          <p>
            <label>Tác giả</label>
            <input class="text-input small-input" type="text" id="tac_gia" name="tac_gia" value="{$tin_tuc->tac_gia}" />
		  </p>
          <p>
            <label>Ngày đăng bài</label>
            <input class="text-input small-input" type="text" id="ngay_dang" name="ngay_dang" value="{$tin_tuc->ngay_dang}" />
          </p>
          <p>
            <label>Ngày đăng gởi</label>
            <input class="text-input small-input" type="text" id="ngay_gui" name="ngay_gui" value="{$tin_tuc->ngay_gui}" />
          </p>
          <p>
            <label>Số lần xem</label>
            <input class="text-input small-input" type="text" id="so_luot_xem" name="so_luot_xem" value="{$tin_tuc->so_luot_xem}" />
          </p>
          <p>
            <input class="button" type="submit" value="Cập nhật" name="btnCapnhat" onclick="return kiem_tra_tin_tuc();" />
            <input class="button" type="button" value="Bỏ qua" onclick="window.location='tintuc.php'" />
          </p>
        </fieldset>
        <div class="clear"></div>
        <!-- End .clear -->
        
      </form>
  </div>
  
</div>
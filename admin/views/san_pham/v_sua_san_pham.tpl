<div class="content-box-header">
  <h3>{$tieude}</h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
    <!--`ma_tin_tuc`, `tieu_de`, `tom_tat`, `chi_tiet`, `hinh`, `tac_gia`, `ngay_dang`, `ngay_gui`, `so_luot_xem`-->
    <form method="post" enctype="multipart/form-data">
        <fieldset>
        <p>
        <label>Mã danh mục sản phẩm </label>
        <select id="CategoryID" name="CategoryID" >
        {foreach $category as $ca}
           	<option value="{$ca->CategoryID}">{$ca->CategoryName}</option> 
        {/foreach} 			
		</select>
        </p>
        <p>
        <label>Mã nhà cung cấp</label>
        
        <select id="SupplierID" name="SupplierID" >
        {foreach $sup as $s}
       
  		<option value="{$s->SupplierID}">{$s->SupplierName}</option>
  		{/foreach}
		</select>
        </p>
          <!--<p>
            <label>Mã danh mục sản phẩm</label>
            <input class="text-input small-input" type="text" id="CategoryID" name="CategoryID" />
          </p>-->
          <!--/*<p>
            <label>Mã nhà cung cấp</label>
            <input class="text-input small-input" type="text" id="SupplierID" name="SupplierID" />
          </p>*/-->
          
          <p>
            <label>Tên sản phẩm</label>
            <input class="text-input small-input kiem_tra_rong" type="text" id="ProductName" name="ProductName" value="{$san_pham_doc_theo_id->ProductName}" />
          </p>
          <p>
            <label>Product Type</label>
            <input class="text-input small-input kiem_tra_rong" type="text" id="ProductType" name="ProductType"  value="{$san_pham_doc_theo_id->ProductType}"/>
          </p>
          <p>
        <label>Đơn vị</label>
        
        <select id="Unit" name="Unit">
        {foreach $san_pham as $sp}
       
  		<option value="{$sp->Unit}">{$sp->Unit}</option>
  		{/foreach}
		</select>
        </p>
          <p>
          <!--<label>Đơn vị</label>
            <input class="text-input small-input" type="text" id="Unit" name="Unit" />
          </p>
          <p>-->
          <label>Đơn vị thêm</label>
            <select id="SubUnit" name="SubUnit">
        {foreach $san_pham1 as $sp1}
       
  		<option value="{$sp1->SubUnit}">{$sp1->SubUnit}</option>
  		{/foreach}
		</select>
            <p>
          <label>Số lượng</label>
            <input class="text-input small-input" type="text" id="UnitQuantity" name="UnitQuantity" value="{$san_pham_doc_theo_id->UnitQuantity}" />
            </p>
          <p>
            <label>Mô tả</label>
            <!--input class="text-input large-input" type="text" id="chi_tiet" name="chi_tiet" /-->
            <textarea name="Description" id="Description"  class="ckeditor kiem_tra_rong" >{$san_pham_doc_theo_id->Description}</textarea>
          </p>
          <p>
            <label>Hình sản phẩm</label>
            
            {if $san_pham_doc_theo_id->Image!=""}
            <img src="../public/images/{$san_pham_doc_theo_id->Image}" width="100px" />
            <input type="file" name="f_hinh" />
            {/if}
          </p>
          <p>
            <label>Giá</label>
            <input class="text-input small-input kiem_tra_rong" type="text" id="Price" name="Price" value="{$san_pham_doc_theo_id->Price}"/>
		  </p>
          <p>
            <label>Giảm giá</label>
            <input class="text-input small-input kiem_tra_rong" type="text" id="Discount" name="Discount" value="{$san_pham_doc_theo_id->Discount}" />
		  </p>
          <!--<p>
            <label>Ngày cập nhật</label>
            <input class="text-input small-input" type="text" id="LastUpdate" name="LastUpdate" />
          </p>--> 
       	  <p>
            <input class="button" type="submit" value="Cập nhật" name="btnCapnhat" onclick="return Kiem_tra_Du_lieu_Rong()"  />
            <input class="button" type="button" value="Bỏ qua" onclick="window.location='san_pham.php'" />
          </p>
        </fieldset>
        <div class="clear"></div>
        <!-- End .clear -->
        
      </form>
	   
  </div>
  
</div>


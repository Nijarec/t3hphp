<?php /* Smarty version Smarty-3.1.14, created on 2017-10-23 04:00:26
         compiled from "views\san_pham\v_them_san_pham.tpl" */ ?>
<?php /*%%SmartyHeaderCode:789359e6b1d39f6386-73835710%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7aad584b300c423344b38ff20b60da6123b2d4ea' => 
    array (
      0 => 'views\\san_pham\\v_them_san_pham.tpl',
      1 => 1508596871,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '789359e6b1d39f6386-73835710',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59e6b1d3bbe8f7_20569250',
  'variables' => 
  array (
    'tieude' => 0,
    'category' => 0,
    'ca' => 0,
    'sup' => 0,
    's' => 0,
    'san_pham' => 0,
    'sp' => 0,
    'san_pham1' => 0,
    'sp1' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59e6b1d3bbe8f7_20569250')) {function content_59e6b1d3bbe8f7_20569250($_smarty_tpl) {?><div class="content-box-header">
  <h3><?php echo $_smarty_tpl->tpl_vars['tieude']->value;?>
</h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
    <!--`ma_tin_tuc`, `tieu_de`, `tom_tat`, `chi_tiet`, `hinh`, `tac_gia`, `ngay_dang`, `ngay_gui`, `so_luot_xem`-->
    <form method="post" enctype="multipart/form-data">
        <fieldset>
        <p>
        <label>Mã danh mục sản phẩm</label>
        <select id="CategoryID" name="CategoryID">
        <?php  $_smarty_tpl->tpl_vars['ca'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ca']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ca']->key => $_smarty_tpl->tpl_vars['ca']->value){
$_smarty_tpl->tpl_vars['ca']->_loop = true;
?>
        
        	<option value="<?php echo $_smarty_tpl->tpl_vars['ca']->value->CategoryID;?>
"><?php echo $_smarty_tpl->tpl_vars['ca']->value->CategoryName;?>
</option>
        <?php } ?> 			
		</select>
        </p>
        <p>
        <label>Mã nhà cung cấp</label>
        
        <select id="SupplierID" name="SupplierID">
        <?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sup']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value){
$_smarty_tpl->tpl_vars['s']->_loop = true;
?>
       
  		<option value="<?php echo $_smarty_tpl->tpl_vars['s']->value->SupplierID;?>
"><?php echo $_smarty_tpl->tpl_vars['s']->value->SupplierName;?>
</option>
  		<?php } ?>
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
            <input class="text-input small-input kiem_tra_rong" type="text" id="ProductName" name="ProductName" />
          </p>
          <p>
            <label>Product Type</label>
            <input class="text-input small-input kiem_tra_rong" type="text" id="ProductType" name="ProductType" />
          </p>
          <p>
        <label>Đơn vị</label>
        
        <select id="Unit" name="Unit">
        <?php  $_smarty_tpl->tpl_vars['sp'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sp']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['san_pham']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sp']->key => $_smarty_tpl->tpl_vars['sp']->value){
$_smarty_tpl->tpl_vars['sp']->_loop = true;
?>
       
  		<option value="<?php echo $_smarty_tpl->tpl_vars['sp']->value->Unit;?>
"><?php echo $_smarty_tpl->tpl_vars['sp']->value->Unit;?>
</option>
  		<?php } ?>
		</select>
        </p>
          <p>
          <!--<label>Đơn vị</label>
            <input class="text-input small-input" type="text" id="Unit" name="Unit" />
          </p>
          <p>-->
          <label>Đơn vị thêm</label>
            <select id="SubUnit" name="SubUnit">
        <?php  $_smarty_tpl->tpl_vars['sp1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sp1']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['san_pham1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sp1']->key => $_smarty_tpl->tpl_vars['sp1']->value){
$_smarty_tpl->tpl_vars['sp1']->_loop = true;
?>
       
  		<option value="<?php echo $_smarty_tpl->tpl_vars['sp1']->value->SubUnit;?>
"><?php echo $_smarty_tpl->tpl_vars['sp1']->value->SubUnit;?>
</option>
  		<?php } ?>
		</select>
            <p>
          <label>Số lượng</label>
            <input class="text-input small-input" type="text" id="UnitQuantity" name="UnitQuantity" />
            </p>
          <p>
            <label>Mô tả</label>
            <!--input class="text-input large-input" type="text" id="chi_tiet" name="chi_tiet" /-->
            <textarea name="Description" id="Description"  class="ckeditor" ></textarea>
          </p>
          <p>
            <label>Hình sản phẩm</label>
            <input type="file" name="f_hinh" />
          </p>
          <p>
            <label>Giá</label>
            <input class="text-input small-input" type="text" id="Price" name="Price" />
		  </p>
          <p>
            <label>Giảm giá</label>
            <input class="text-input small-input" type="text" id="Discount" name="Discount" />
		  </p>
          <!--<p>
            <label>Ngày cập nhật</label>
            <input class="text-input small-input" type="text" id="LastUpdate" name="LastUpdate" />
          </p>--> 
       	  <p>
            <input class="button" type="submit" value="Cập nhật" name="btnCapnhat" onclick="return kiem_tra_tin_tuc();" />
            <input class="button" type="button" value="Bỏ qua" onclick="window.location='san_pham.php'" />
          </p>
        </fieldset>
        <div class="clear"></div>
        <!-- End .clear -->
        
      </form>
	   
  </div>
  
</div>
<?php }} ?>
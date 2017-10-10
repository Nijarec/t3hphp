<?php /* Smarty version Smarty-3.1.14, created on 2017-10-10 01:37:54
         compiled from "views\loaimonan\v_Sualoaimonan.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3109559dc235ba00425-44245964%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa85c85927cf72765b2abbe6d4016997640a9e28' => 
    array (
      0 => 'views\\loaimonan\\v_Sualoaimonan.tpl',
      1 => 1507599471,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3109559dc235ba00425-44245964',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59dc235ba3adb8_31362272',
  'variables' => 
  array (
    'tieude' => 0,
    'loai_mon_an' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59dc235ba3adb8_31362272')) {function content_59dc235ba3adb8_31362272($_smarty_tpl) {?><div class="content-box-header">
  <h3><?php echo $_smarty_tpl->tpl_vars['tieude']->value;?>
</h3>
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
            <input class="text-input small-input" type="text" id="ten_loai" name="ten_loai" value="<?php echo $_smarty_tpl->tpl_vars['loai_mon_an']->value->ten_loai;?>
" />
          </p>
          <p>
            <label>Nội dung tóm tắt</label>
            <textarea class="text-input medium-input datepicker" type="text" id="mo_ta" name="mo_ta" rows="5" cols="50" /><?php echo $_smarty_tpl->tpl_vars['loai_mon_an']->value->mo_ta;?>
</textarea>
          </p>
          <p>
            <label>Hình tin</label>
            <img src="../public/images/hinh_loai_mon_an/<?php echo $_smarty_tpl->tpl_vars['loai_mon_an']->value->hinh;?>
" width="80px"  />
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
<?php }} ?>
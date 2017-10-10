<?php /* Smarty version Smarty-3.1.14, created on 2017-10-09 02:38:41
         compiled from "views\tintuc\v_Suatintuc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1589159dae131893b76-87271726%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4429e982f2faa723388ed44359e4da1d76d8be30' => 
    array (
      0 => 'views\\tintuc\\v_Suatintuc.tpl',
      1 => 1442894743,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1589159dae131893b76-87271726',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tieude' => 0,
    'tin_tuc' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59dae13195eda0_94462405',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59dae13195eda0_94462405')) {function content_59dae13195eda0_94462405($_smarty_tpl) {?><div class="content-box-header">
  <h3><?php echo $_smarty_tpl->tpl_vars['tieude']->value;?>
</h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
    <form action="#" method="post" enctype="multipart/form-data">
        <fieldset>
          
          <p>
            <label>Tiêu đề tin</label>
            <input class="text-input small-input" type="text" id="tieu_de" name="tieu_de" value="<?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->tieu_de;?>
" />
          </p>
          <p>
            <label>Nội dung tóm tắt</label>
            <input class="text-input medium-input datepicker" type="text" id="tom_tat" name="tom_tat" value="<?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->tom_tat;?>
" />
          <p>
            <label>Nội dung chi tiết</label>
            <!--input class="text-input large-input" type="text" id="chi_tiet" name="chi_tiet" value="<?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->chi_tiet;?>
" /-->
            <textarea name="chi_tiet" id="chi_tiet"  class="ckeditor" ><?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->chi_tiet;?>
</textarea>
            
          </p>
          <p>
            <label>Hình tin</label>
            <input type="file" name="f_hinh" />
            <?php if ($_smarty_tpl->tpl_vars['tin_tuc']->value->hinh!=''){?>
            <img src="../public/images/tin_tuc/<?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->hinh;?>
" width="100px" />
            <?php }?>
          <p>
            <label>Tác giả</label>
            <input class="text-input small-input" type="text" id="tac_gia" name="tac_gia" value="<?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->tac_gia;?>
" />
		  </p>
          <p>
            <label>Ngày đăng bài</label>
            <input class="text-input small-input" type="text" id="ngay_dang" name="ngay_dang" value="<?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->ngay_dang;?>
" />
          </p>
          <p>
            <label>Ngày đăng gởi</label>
            <input class="text-input small-input" type="text" id="ngay_gui" name="ngay_gui" value="<?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->ngay_gui;?>
" />
          </p>
          <p>
            <label>Số lần xem</label>
            <input class="text-input small-input" type="text" id="so_luot_xem" name="so_luot_xem" value="<?php echo $_smarty_tpl->tpl_vars['tin_tuc']->value->so_luot_xem;?>
" />
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
<?php }} ?>
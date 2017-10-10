<?php /* Smarty version Smarty-3.1.14, created on 2017-10-10 02:24:20
         compiled from "views\loaimonan\v_Themloaimonan.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1263459daedefdb08f8-91460591%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e9435b5b09298c2ef92a57fc9d5cbdecda76f4c' => 
    array (
      0 => 'views\\loaimonan\\v_Themloaimonan.tpl',
      1 => 1507602257,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1263459daedefdb08f8-91460591',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59daedefde3581_89722519',
  'variables' => 
  array (
    'tieude' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59daedefde3581_89722519')) {function content_59daedefde3581_89722519($_smarty_tpl) {?><div class="content-box-header">
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
<?php }} ?>
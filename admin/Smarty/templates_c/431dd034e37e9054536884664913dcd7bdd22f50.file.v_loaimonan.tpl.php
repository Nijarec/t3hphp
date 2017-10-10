<?php /* Smarty version Smarty-3.1.14, created on 2017-10-10 01:48:24
         compiled from "views\loaimonan\v_loaimonan.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1562159daedc9043877-44947777%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '431dd034e37e9054536884664913dcd7bdd22f50' => 
    array (
      0 => 'views\\loaimonan\\v_loaimonan.tpl',
      1 => 1507600102,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1562159daedc9043877-44947777',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59daedc906e800_49195953',
  'variables' => 
  array (
    'tieude' => 0,
    'loai_mon_ans' => 0,
    'loai' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59daedc906e800_49195953')) {function content_59daedc906e800_49195953($_smarty_tpl) {?><div class="content-box-header">
  <h3><?php echo $_smarty_tpl->tpl_vars['tieude']->value;?>
</h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
    <table>
      <thead>
        <tr>
          <th><input class="check-all" type="checkbox" /></th>
          <th>Mã Loại</th>
          <th>Tên loại</th>
          <th width="300px">Mô tả</th>
          
          <th>&nbsp;</th>
        </tr>
      </thead>
      <tfoot>
          <tr>
            <td colspan="6">
            <div class="pagination"> [1][2][3] </div>
            <div class="clear"></div></td>
          </tr>
        </tfoot>
      <tbody>
        <?php  $_smarty_tpl->tpl_vars['loai'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['loai']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['loai_mon_ans']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['loai']->key => $_smarty_tpl->tpl_vars['loai']->value){
$_smarty_tpl->tpl_vars['loai']->_loop = true;
?>
        <tr>
          <td><input type="checkbox" /></td>
          <td><?php echo $_smarty_tpl->tpl_vars['loai']->value->ma_loai;?>
</td>
          <td><a href="sualoaimonan.php?ma_loai=<?php echo $_smarty_tpl->tpl_vars['loai']->value->ma_loai;?>
" title="Edit"><?php echo $_smarty_tpl->tpl_vars['loai']->value->ten_loai;?>
</a></td>
          <td><?php echo $_smarty_tpl->tpl_vars['loai']->value->mo_ta;?>
</td>
          <td><!-- Icons --> 
            <a href="sualoaimonan.php?ma_loai=<?php echo $_smarty_tpl->tpl_vars['loai']->value->ma_loai;?>
" title="Edit" >
            <img src="public/layout/resources/images/icons/pencil.png" alt="Edit" />
            </a> 
            <a href="javascript:Xoa_loai_mon_an(<?php echo $_smarty_tpl->tpl_vars['loai']->value->ma_loai;?>
)" title="Delete"> 
            <img src="public/layout/resources/images/icons/cross.png" alt="Delete" />
            </a>
            </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
   
  </div>
  
</div>
<?php }} ?>
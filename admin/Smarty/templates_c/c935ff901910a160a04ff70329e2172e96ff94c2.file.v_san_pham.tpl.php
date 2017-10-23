<?php /* Smarty version Smarty-3.1.14, created on 2017-10-23 04:00:25
         compiled from "views\san_pham\v_san_pham.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1073259e56dee0a7066-31179877%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c935ff901910a160a04ff70329e2172e96ff94c2' => 
    array (
      0 => 'views\\san_pham\\v_san_pham.tpl',
      1 => 1508597915,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1073259e56dee0a7066-31179877',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_59e56dee122690_10512581',
  'variables' => 
  array (
    'tieude' => 0,
    'san_pham' => 0,
    'sp' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59e56dee122690_10512581')) {function content_59e56dee122690_10512581($_smarty_tpl) {?><div class="content-box-header">
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
          <th>Mã sản phẩm</th>
          <th>Tên sản phẩm</th>
          <th>Loại sản phẩm</th>
          <th>Ngày nhập</th>
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
        <?php  $_smarty_tpl->tpl_vars['sp'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sp']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['san_pham']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sp']->key => $_smarty_tpl->tpl_vars['sp']->value){
$_smarty_tpl->tpl_vars['sp']->_loop = true;
?>
        <tr>
          <td><input type="checkbox" /></td>
          <td><?php echo $_smarty_tpl->tpl_vars['sp']->value->ProductID;?>
</td>
          <td><a href="sua_san_pham.php?ProductID=<?php echo $_smarty_tpl->tpl_vars['sp']->value->ProductID;?>
" title="Edit"><?php echo $_smarty_tpl->tpl_vars['sp']->value->ProductName;?>
</a></td>
          <td><?php echo $_smarty_tpl->tpl_vars['sp']->value->ProductType;?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['sp']->value->LastUpdate;?>
</td>
          <td><!-- Icons --> 
            <a href="sua_san_pham.php?ProductID=<?php echo $_smarty_tpl->tpl_vars['sp']->value->ProductID;?>
" title="Edit" >
            <img src="public/layout/resources/images/icons/pencil.png" alt="Edit" />
            </a> 
            <a href="xoa_san_pham.php?ProductID=<?php echo $_smarty_tpl->tpl_vars['sp']->value->ProductID;?>
" title="Delete" > 
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
<?php
/* Smarty version 3.1.30, created on 2017-11-09 14:17:51
  from "C:\wamp64\www\do_an_cuoi_ki\smarty\templates\products\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a04638fa68296_93733548',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4af3683bf566bd0526528a97c59b61b953700ac2' => 
    array (
      0 => 'C:\\wamp64\\www\\do_an_cuoi_ki\\smarty\\templates\\products\\layout.tpl',
      1 => 1510237063,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a04638fa68296_93733548 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_106085a04638fa56729_24797167', "top_brands");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_299295a04638fa602a7_18007069', "top_product");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_300625a04638fa660d3_66931702', "fresh_vegetables");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "top_brands"} */
class Block_106085a04638fa56729_24797167 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "top_brands"} */
/* {block "top_product"} */
class Block_299295a04638fa602a7_18007069 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "top_product"} */
/* {block "fresh_vegetables"} */
class Block_300625a04638fa660d3_66931702 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "fresh_vegetables"} */
}

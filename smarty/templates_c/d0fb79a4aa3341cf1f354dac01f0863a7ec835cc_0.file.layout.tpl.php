<?php
/* Smarty version 3.1.30, created on 2017-10-23 14:00:05
  from "C:\wamp64\www\do_an_cuoi_ki\smarty\templates\contact\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59edf5e5de3870_68554170',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0fb79a4aa3341cf1f354dac01f0863a7ec835cc' => 
    array (
      0 => 'C:\\wamp64\\www\\do_an_cuoi_ki\\smarty\\templates\\contact\\layout.tpl',
      1 => 1508487847,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
    'file:contact.tpl' => 1,
  ),
),false)) {
function content_59edf5e5de3870_68554170 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_983059edf5e5da1fe5_21779393', "banner");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_759159edf5e5dcfcc7_69921944', "top_brands");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1288459edf5e5dd9dd8_28432456', "top_product");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1382159edf5e5de1290_59012395', "fresh_vegetables");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "banner"} */
class Block_983059edf5e5da1fe5_21779393 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:contact.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "banner"} */
/* {block "top_brands"} */
class Block_759159edf5e5dcfcc7_69921944 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "top_brands"} */
/* {block "top_product"} */
class Block_1288459edf5e5dd9dd8_28432456 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "top_product"} */
/* {block "fresh_vegetables"} */
class Block_1382159edf5e5de1290_59012395 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "fresh_vegetables"} */
}

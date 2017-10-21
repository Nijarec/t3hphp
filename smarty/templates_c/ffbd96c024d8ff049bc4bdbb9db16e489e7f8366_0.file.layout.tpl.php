<?php
/* Smarty version 3.1.30, created on 2017-10-21 05:34:20
  from "C:\xampp\htdocs\t3hphp\smarty\templates\contact\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59eac03cca48b3_07361898',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ffbd96c024d8ff049bc4bdbb9db16e489e7f8366' => 
    array (
      0 => 'C:\\xampp\\htdocs\\t3hphp\\smarty\\templates\\contact\\layout.tpl',
      1 => 1508306714,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
    'file:contact.tpl' => 1,
  ),
),false)) {
function content_59eac03cca48b3_07361898 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_90554304959eac03cca19c3_80600345', "banner");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_214429352459eac03cca2ad8_52519742', "top_brands");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_132558385259eac03cca3689_97198328', "top_product");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_45058610059eac03cca41e3_24648461', "fresh_vegetables");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "banner"} */
class Block_90554304959eac03cca19c3_80600345 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:contact.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "banner"} */
/* {block "top_brands"} */
class Block_214429352459eac03cca2ad8_52519742 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "top_brands"} */
/* {block "top_product"} */
class Block_132558385259eac03cca3689_97198328 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "top_product"} */
/* {block "fresh_vegetables"} */
class Block_45058610059eac03cca41e3_24648461 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "fresh_vegetables"} */
}

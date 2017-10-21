<?php
/* Smarty version 3.1.30, created on 2017-10-21 05:12:49
  from "C:\xampp\htdocs\t3hphp\smarty\templates\login\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59eabb31a93035_88158757',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27d132e7c2178f86bc3e80b8299354ff56eca0ba' => 
    array (
      0 => 'C:\\xampp\\htdocs\\t3hphp\\smarty\\templates\\login\\layout.tpl',
      1 => 1508213283,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
    'file:login.tpl' => 1,
  ),
),false)) {
function content_59eabb31a93035_88158757 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15718151459eabb31a927b8_87630265', "banner");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "banner"} */
class Block_15718151459eabb31a927b8_87630265 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "banner"} */
}

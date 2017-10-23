<?php
/* Smarty version 3.1.30, created on 2017-10-23 13:57:39
  from "C:\wamp64\www\do_an_cuoi_ki\smarty\templates\login\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59edf553724796_67266216',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '978f3eca6670f9601c8fa4cc5ebc9c35fb0e44eb' => 
    array (
      0 => 'C:\\wamp64\\www\\do_an_cuoi_ki\\smarty\\templates\\login\\layout.tpl',
      1 => 1508487847,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
    'file:login.tpl' => 1,
  ),
),false)) {
function content_59edf553724796_67266216 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3102159edf5536a5dc7_15997891', "banner");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "banner"} */
class Block_3102159edf5536a5dc7_15997891 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "banner"} */
}
